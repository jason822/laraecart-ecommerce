            @include('ecommerce::public.category.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('ecommerce::public.category.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($category->defaultImage('images' , 'xl'))!!}" alt="{{$category->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('ecommerce::category.label.id') !!}
                </label><br />
                    {!! $category['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('ecommerce::category.label.name') !!}
                </label><br />
                    {!! $category['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="parent_id">
                    {!! trans('ecommerce::category.label.parent_id') !!}
                </label><br />
                    {!! $category['parent_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="nest_left">
                    {!! trans('ecommerce::category.label.nest_left') !!}
                </label><br />
                    {!! $category['nest_left'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="nest_right">
                    {!! trans('ecommerce::category.label.nest_right') !!}
                </label><br />
                    {!! $category['nest_right'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="nest_depth">
                    {!! trans('ecommerce::category.label.nest_depth') !!}
                </label><br />
                    {!! $category['nest_depth'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="discription">
                    {!! trans('ecommerce::category.label.discription') !!}
                </label><br />
                    {!! $category['discription'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="type">
                    {!! trans('ecommerce::category.label.type') !!}
                </label><br />
                    {!! $category['type'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('ecommerce::category.label.slug') !!}
                </label><br />
                    {!! $category['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_tag">
                    {!! trans('ecommerce::category.label.meta_tag') !!}
                </label><br />
                    {!! $category['meta_tag'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_keyword">
                    {!! trans('ecommerce::category.label.meta_keyword') !!}
                </label><br />
                    {!! $category['meta_keyword'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('ecommerce::category.label.status') !!}
                </label><br />
                    {!! $category['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="sort_order">
                    {!! trans('ecommerce::category.label.sort_order') !!}
                </label><br />
                    {!! $category['sort_order'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="image">
                    {!! trans('ecommerce::category.label.image') !!}
                </label><br />
                    {!! $category['image'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('ecommerce::category.label.user_id') !!}
                </label><br />
                    {!! $category['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_type">
                    {!! trans('ecommerce::category.label.user_type') !!}
                </label><br />
                    {!! $category['user_type'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('ecommerce::category.label.created_at') !!}
                </label><br />
                    {!! $category['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('ecommerce::category.label.updated_at') !!}
                </label><br />
                    {!! $category['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('ecommerce::category.label.deleted_at') !!}
                </label><br />
                    {!! $category['deleted_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('ecommerce::category.label.name'))
                       -> required()
                       -> placeholder(trans('ecommerce::category.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('parent_id')
                       -> label(trans('ecommerce::category.label.parent_id'))
                       -> placeholder(trans('ecommerce::category.placeholder.parent_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('nest_left')
                       -> label(trans('ecommerce::category.label.nest_left'))
                       -> placeholder(trans('ecommerce::category.placeholder.nest_left'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('nest_right')
                       -> label(trans('ecommerce::category.label.nest_right'))
                       -> placeholder(trans('ecommerce::category.placeholder.nest_right'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('nest_depth')
                       -> label(trans('ecommerce::category.label.nest_depth'))
                       -> placeholder(trans('ecommerce::category.placeholder.nest_depth'))!!}
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



