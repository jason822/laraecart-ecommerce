<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('ecommerce::review.name') !!} <small> {!! trans('app.manage') !!} {!! trans('ecommerce::review.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('ecommerce::review.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='ecommerce-review-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('ecommerce/review')!!}">{!! trans('ecommerce::review.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('ecommerce/review?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('ecommerce/review?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('ecommerce/review/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('ecommerce::admin.review.partial.actions')
                    -->
                    @include('ecommerce::admin.review.partial.filter')
                    @include('ecommerce::admin.review.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="ecommerce-review-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="ecommerce-review-check-all"></th>
                        <th data-field="product_id">{!! trans('ecommerce::review.label.product_id')!!}</th>
                    <th data-field="author_name">{!! trans('ecommerce::review.label.author_name')!!}</th>
                    <th data-field="author_email">{!! trans('ecommerce::review.label.author_email')!!}</th>
                    <th data-field="author_phone">{!! trans('ecommerce::review.label.author_phone')!!}</th>
                    <th data-field="review">{!! trans('ecommerce::review.label.review')!!}</th>
                    <th data-field="rating">{!! trans('ecommerce::review.label.rating')!!}</th>
                    <th data-field="status">{!! trans('ecommerce::review.label.status')!!}</th>
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
    app.load('#ecommerce-review-entry', '{!!guard_url('ecommerce/review/0')!!}');
    oTable = $('#ecommerce-review-list').dataTable( {
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
        "sAjaxSource": '{!! guard_url('ecommerce/review') !!}',
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
            {data :'product_id'},
            {data :'author_name'},
            {data :'author_email'},
            {data :'author_phone'},
            {data :'review'},
            {data :'rating'},
            {data :'status'},
        ],
        "pageLength": 25
    });

    $('#ecommerce-review-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#ecommerce-review-list').DataTable().row( this ).data();
        $('#ecommerce-review-entry').load('{!!guard_url('ecommerce/review')!!}' + '/' + d.id);
    });

    $('#ecommerce-review-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#ecommerce-review-check-all").on( 'change', function (e) {
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
        $('#ecommerce-review-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#ecommerce-review-list tbody').on('click', 'td.details-control', function (e) {
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