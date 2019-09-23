            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('manufacturer_id')
                       -> label(trans('ecommerce::product.label.manufacturer_id'))
                       -> placeholder(trans('ecommerce::product.placeholder.manufacturer_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('title')
                    -> label(trans('ecommerce::product.label.title'))
                    -> placeholder(trans('ecommerce::product.placeholder.title'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::textarea('description')
                    -> label(trans('ecommerce::product.label.description'))
                    -> dataUpload(trans_url($product->getUploadURL('description')))
                    -> addClass('html-editor')
                    -> placeholder(trans('ecommerce::product.placeholder.description'))!!}
                </div>
                <div class='col-md-12'>
                    {!! Form::textarea('summary')
                    -> label(trans('ecommerce::product.label.summary'))
                    -> dataUpload(trans_url($product->getUploadURL('summary')))
                    -> addClass('html-editor')
                    -> placeholder(trans('ecommerce::product.placeholder.summary'))!!}
                </div>
                <div class='col-md-12'>
                    {!! Form::textarea('features')
                    -> label(trans('ecommerce::product.label.features'))
                    -> dataUpload(trans_url($product->getUploadURL('features')))
                    -> addClass('html-editor')
                    -> placeholder(trans('ecommerce::product.placeholder.features'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('size')
                       -> label(trans('ecommerce::product.label.size'))
                       -> placeholder(trans('ecommerce::product.placeholder.size'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('color')
                       -> label(trans('ecommerce::product.label.color'))
                       -> placeholder(trans('ecommerce::product.placeholder.color'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('sku')
                       -> label(trans('ecommerce::product.label.sku'))
                       -> placeholder(trans('ecommerce::product.placeholder.sku'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('upc')
                       -> label(trans('ecommerce::product.label.upc'))
                       -> placeholder(trans('ecommerce::product.placeholder.upc'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('ean')
                       -> label(trans('ecommerce::product.label.ean'))
                       -> placeholder(trans('ecommerce::product.placeholder.ean'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('jan')
                       -> label(trans('ecommerce::product.label.jan'))
                       -> placeholder(trans('ecommerce::product.placeholder.jan'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('isbn')
                       -> label(trans('ecommerce::product.label.isbn'))
                       -> placeholder(trans('ecommerce::product.placeholder.isbn'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('mpn')
                       -> label(trans('ecommerce::product.label.mpn'))
                       -> placeholder(trans('ecommerce::product.placeholder.mpn'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('price')
                       -> label(trans('ecommerce::product.label.price'))
                       -> placeholder(trans('ecommerce::product.placeholder.price'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('tax')
                       -> label(trans('ecommerce::product.label.tax'))
                       -> placeholder(trans('ecommerce::product.placeholder.tax'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('quantity')
                       -> label(trans('ecommerce::product.label.quantity'))
                       -> placeholder(trans('ecommerce::product.placeholder.quantity'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('subtract_stock')
                   -> radios(trans('ecommerce::product.options.subtract_stock'))
                   -> label(trans('ecommerce::product.label.subtract_stock'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('stock_status')
                   -> radios(trans('ecommerce::product.options.stock_status'))
                   -> label(trans('ecommerce::product.label.stock_status'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('shipping')
                   -> radios(trans('ecommerce::product.options.shipping'))
                   -> label(trans('ecommerce::product.label.shipping'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='date_available' class='control-label'>{!!trans('ecommerce::product.label.date_available')!!}</label>
                     <div class='input-group pickdate'>
                        {!! Form::text('date_available')
                        -> placeholder(trans('ecommerce::product.placeholder.date_available'))
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('discount')
                       -> label(trans('ecommerce::product.label.discount'))
                       -> placeholder(trans('ecommerce::product.placeholder.discount'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('images')
                       -> label(trans('ecommerce::product.label.images'))
                       -> placeholder(trans('ecommerce::product.placeholder.images'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('status')
                   -> radios(trans('ecommerce::product.options.status'))
                   -> label(trans('ecommerce::product.label.status'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('user_id')
                       -> label(trans('ecommerce::product.label.user_id'))
                       -> placeholder(trans('ecommerce::product.placeholder.user_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('user_type')
                       -> label(trans('ecommerce::product.label.user_type'))
                       -> placeholder(trans('ecommerce::product.placeholder.user_type'))!!}
                </div>
            </div>