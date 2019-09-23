            <div class='row'>
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