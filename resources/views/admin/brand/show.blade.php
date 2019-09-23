    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('ecommerce::brand.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#ecommerce-brand-entry' data-href='{{guard_url('ecommerce/brand/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($brand->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#ecommerce-brand-entry' data-href='{{ guard_url('ecommerce/brand') }}/{{$brand->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#ecommerce-brand-entry' data-datatable='#ecommerce-brand-list' data-href='{{ guard_url('ecommerce/brand') }}/{{$brand->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('ecommerce-brand-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('ecommerce/brand'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('ecommerce::brand.name') !!}  [{!! $brand->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('ecommerce::admin.brand.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>