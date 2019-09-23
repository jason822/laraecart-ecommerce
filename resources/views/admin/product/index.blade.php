<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('ecommerce::product.name') !!} <small> {!! trans('app.manage') !!} {!! trans('ecommerce::product.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('ecommerce::product.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='ecommerce-product-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('ecommerce/product')!!}">{!! trans('ecommerce::product.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('ecommerce/product?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('ecommerce/product?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('ecommerce/product/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('ecommerce::admin.product.partial.actions')
                    -->
                    @include('ecommerce::admin.product.partial.filter')
                    @include('ecommerce::admin.product.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="ecommerce-product-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="ecommerce-product-check-all"></th>
                        <th data-field="manufacturer_id">{!! trans('ecommerce::product.label.manufacturer_id')!!}</th>
                    <th data-field="title">{!! trans('ecommerce::product.label.title')!!}</th>
                    <th data-field="color">{!! trans('ecommerce::product.label.color')!!}</th>
                    <th data-field="ean">{!! trans('ecommerce::product.label.ean')!!}</th>
                    <th data-field="price">{!! trans('ecommerce::product.label.price')!!}</th>
                    <th data-field="quantity">{!! trans('ecommerce::product.label.quantity')!!}</th>
                    <th data-field="date_available">{!! trans('ecommerce::product.label.date_available')!!}</th>
                    <th data-field="status">{!! trans('ecommerce::product.label.status')!!}</th>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    app.load('#ecommerce-product-entry', '{!!guard_url('ecommerce/product/0')!!}');
    oTable = $('#ecommerce-product-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){
                return '<input type="checkbox" name="id[]" value="' + data.id + '">';
            }
        }], 
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('ecommerce/product') !!}',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $.each(oSearch, function(key, val){
                aoData.push( { 'name' : key, 'value' : val } );
            });
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'id'},
            {data :'manufacturer_id'},
            {data :'title'},
            {data :'color'},
            {data :'ean'},
            {data :'price'},
            {data :'quantity'},
            {data :'date_available'},
            {data :'status'},
        ],
        "pageLength": 25
    });

    $('#ecommerce-product-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#ecommerce-product-list').DataTable().row( this ).data();
        $('#ecommerce-product-entry').load('{!!guard_url('ecommerce/product')!!}' + '/' + d.id);
    });

    $('#ecommerce-product-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#ecommerce-product-check-all").on( 'change', function (e) {
        e.preventDefault();
        aIds = [];
        if ($(this).prop('checked')) {
            $("input[name^='id[]']").each(function(){
                $(this).prop('checked',true);
                aIds.push($(this).val());
            });

            return;
        }else{
            $("input[name^='id[]']").prop('checked',false);
        }
        
    });


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#ecommerce-product-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#ecommerce-product-list tbody').on('click', 'td.details-control', function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });

});
</script>