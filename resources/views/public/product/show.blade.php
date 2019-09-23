            @include('ecommerce::public.product.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('ecommerce::public.product.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($product->defaultImage('images' , 'xl'))!!}" alt="{{$product->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('ecommerce::product.label.id') !!}
                </label><br />
                    {!! $product['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="manufacturer_id">
                    {!! trans('ecommerce::product.label.manufacturer_id') !!}
                </label><br />
                    {!! $product['manufacturer_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="title">
                    {!! trans('ecommerce::product.label.title') !!}
                </label><br />
                    {!! $product['title'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="description">
                    {!! trans('ecommerce::product.label.description') !!}
                </label><br />
                    {!! $product['description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="summary">
                    {!! trans('ecommerce::product.label.summary') !!}
                </label><br />
                    {!! $product['summary'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="features">
                    {!! trans('ecommerce::product.label.features') !!}
                </label><br />
                    {!! $product['features'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="size">
                    {!! trans('ecommerce::product.label.size') !!}
                </label><br />
                    {!! $product['size'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="color">
                    {!! trans('ecommerce::product.label.color') !!}
                </label><br />
                    {!! $product['color'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_title">
                    {!! trans('ecommerce::product.label.meta_title') !!}
                </label><br />
                    {!! $product['meta_title'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_discription">
                    {!! trans('ecommerce::product.label.meta_discription') !!}
                </label><br />
                    {!! $product['meta_discription'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_keywords">
                    {!! trans('ecommerce::product.label.meta_keywords') !!}
                </label><br />
                    {!! $product['meta_keywords'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="sku">
                    {!! trans('ecommerce::product.label.sku') !!}
                </label><br />
                    {!! $product['sku'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="upc">
                    {!! trans('ecommerce::product.label.upc') !!}
                </label><br />
                    {!! $product['upc'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ean">
                    {!! trans('ecommerce::product.label.ean') !!}
                </label><br />
                    {!! $product['ean'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="jan">
                    {!! trans('ecommerce::product.label.jan') !!}
                </label><br />
                    {!! $product['jan'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="isbn">
                    {!! trans('ecommerce::product.label.isbn') !!}
                </label><br />
                    {!! $product['isbn'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="mpn">
                    {!! trans('ecommerce::product.label.mpn') !!}
                </label><br />
                    {!! $product['mpn'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="price">
                    {!! trans('ecommerce::product.label.price') !!}
                </label><br />
                    {!! $product['price'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="tax">
                    {!! trans('ecommerce::product.label.tax') !!}
                </label><br />
                    {!! $product['tax'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slider">
                    {!! trans('ecommerce::product.label.slider') !!}
                </label><br />
                    {!! $product['slider'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="quantity">
                    {!! trans('ecommerce::product.label.quantity') !!}
                </label><br />
                    {!! $product['quantity'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="minimum_quantity">
                    {!! trans('ecommerce::product.label.minimum_quantity') !!}
                </label><br />
                    {!! $product['minimum_quantity'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="subtract_stock">
                    {!! trans('ecommerce::product.label.subtract_stock') !!}
                </label><br />
                    {!! $product['subtract_stock'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="stock_status">
                    {!! trans('ecommerce::product.label.stock_status') !!}
                </label><br />
                    {!! $product['stock_status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="shipping">
                    {!! trans('ecommerce::product.label.shipping') !!}
                </label><br />
                    {!! $product['shipping'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="date_available">
                    {!! trans('ecommerce::product.label.date_available') !!}
                </label><br />
                    {!! $product['date_available'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="discount">
                    {!! trans('ecommerce::product.label.discount') !!}
                </label><br />
                    {!! $product['discount'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="images">
                    {!! trans('ecommerce::product.label.images') !!}
                </label><br />
                    {!! $product['images'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('ecommerce::product.label.slug') !!}
                </label><br />
                    {!! $product['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('ecommerce::product.label.status') !!}
                </label><br />
                    {!! $product['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('ecommerce::product.label.user_id') !!}
                </label><br />
                    {!! $product['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_type">
                    {!! trans('ecommerce::product.label.user_type') !!}
                </label><br />
                    {!! $product['user_type'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="upload_folder">
                    {!! trans('ecommerce::product.label.upload_folder') !!}
                </label><br />
                    {!! $product['upload_folder'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('ecommerce::product.label.created_at') !!}
                </label><br />
                    {!! $product['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('ecommerce::product.label.updated_at') !!}
                </label><br />
                    {!! $product['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('ecommerce::product.label.deleted_at') !!}
                </label><br />
                    {!! $product['deleted_at'] !!}
            </div>
        </div>
    </div>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



