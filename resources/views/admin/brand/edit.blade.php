    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#brand" data-toggle="tab">{!! trans('ecommerce::brand.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#ecommerce-brand-edit'  data-load-to='#ecommerce-brand-entry' data-datatable='#ecommerce-brand-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#ecommerce-brand-entry' data-href='{{guard_url('ecommerce/brand')}}/{{$brand->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('ecommerce-brand-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('ecommerce/brand/'. $brand->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="brand">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('ecommerce::brand.name') !!} [{!!$brand->name!!}] </div>
                @include('ecommerce::admin.brand.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>