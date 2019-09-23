            <div class="content">
                <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('ecommerce::brand.label.id') !!}
                </label><br />
                    {!! $brand['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('ecommerce::brand.label.name') !!}
                </label><br />
                    {!! $brand['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('ecommerce::brand.label.slug') !!}
                </label><br />
                    {!! $brand['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('ecommerce::brand.label.status') !!}
                </label><br />
                    {!! $brand['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('ecommerce::brand.label.created_at') !!}
                </label><br />
                    {!! $brand['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('ecommerce::brand.label.updated_at') !!}
                </label><br />
                    {!! $brand['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('ecommerce::brand.label.deleted_at') !!}
                </label><br />
                    {!! $brand['deleted_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('ecommerce::brand.label.name'))
                       -> placeholder(trans('ecommerce::brand.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('status')
                   -> radios(trans('ecommerce::brand.options.status'))
                   -> label(trans('ecommerce::brand.label.status'))!!}
                </div>
            </div>