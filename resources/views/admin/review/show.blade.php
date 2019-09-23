    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('ecommerce::review.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#ecommerce-review-entry' data-href='{{guard_url('ecommerce/review/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($review->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#ecommerce-review-entry' data-href='{{ guard_url('ecommerce/review') }}/{{$review->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#ecommerce-review-entry' data-datatable='#ecommerce-review-list' data-href='{{ guard_url('ecommerce/review') }}/{{$review->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('ecommerce-review-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('ecommerce/review'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('ecommerce::review.name') !!}  [{!! $review->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('ecommerce::admin.review.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>