            @include('ecommerce::public.review.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('ecommerce::public.review.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($review->defaultImage('images' , 'xl'))!!}" alt="{{$review->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('ecommerce::review.label.id') !!}
                </label><br />
                    {!! $review['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="product_id">
                    {!! trans('ecommerce::review.label.product_id') !!}
                </label><br />
                    {!! $review['product_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="author_name">
                    {!! trans('ecommerce::review.label.author_name') !!}
                </label><br />
                    {!! $review['author_name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="author_email">
                    {!! trans('ecommerce::review.label.author_email') !!}
                </label><br />
                    {!! $review['author_email'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="author_phone">
                    {!! trans('ecommerce::review.label.author_phone') !!}
                </label><br />
                    {!! $review['author_phone'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="review">
                    {!! trans('ecommerce::review.label.review') !!}
                </label><br />
                    {!! $review['review'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="rating">
                    {!! trans('ecommerce::review.label.rating') !!}
                </label><br />
                    {!! $review['rating'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('ecommerce::review.label.status') !!}
                </label><br />
                    {!! $review['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('ecommerce::review.label.created_at') !!}
                </label><br />
                    {!! $review['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('ecommerce::review.label.updated_at') !!}
                </label><br />
                    {!! $review['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('ecommerce::review.label.deleted_at') !!}
                </label><br />
                    {!! $review['deleted_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('product_id')
                       -> label(trans('ecommerce::review.label.product_id'))
                       -> placeholder(trans('ecommerce::review.placeholder.product_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('author_name')
                       -> label(trans('ecommerce::review.label.author_name'))
                       -> placeholder(trans('ecommerce::review.placeholder.author_name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('author_email')
                       -> label(trans('ecommerce::review.label.author_email'))
                       -> placeholder(trans('ecommerce::review.placeholder.author_email'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('author_phone')
                       -> label(trans('ecommerce::review.label.author_phone'))
                       -> placeholder(trans('ecommerce::review.placeholder.author_phone'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('review')
                       -> label(trans('ecommerce::review.label.review'))
                       -> placeholder(trans('ecommerce::review.placeholder.review'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('rating')
                       -> label(trans('ecommerce::review.label.rating'))
                       -> placeholder(trans('ecommerce::review.placeholder.rating'))!!}
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



