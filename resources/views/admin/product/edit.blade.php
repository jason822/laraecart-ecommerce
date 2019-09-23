    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#product" data-toggle="tab">{!! trans('ecommerce::product.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#ecommerce-product-edit'  data-load-to='#ecommerce-product-entry' data-datatable='#ecommerce-product-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#ecommerce-product-entry' data-href='{{guard_url('ecommerce/product')}}/{{$product->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('ecommerce-product-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('ecommerce/product/'. $product->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="product">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('ecommerce::product.name') !!} [{!!$product->name!!}] </div>
                @include('ecommerce::admin.product.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>