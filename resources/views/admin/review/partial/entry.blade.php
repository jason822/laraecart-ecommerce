            <div class='row'>
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