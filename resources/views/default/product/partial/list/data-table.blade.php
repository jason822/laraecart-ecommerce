            <table class="table" id="main-table" data-url="{!!guard_url('ecommerce/product?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="manufacturer_id">{!! trans('ecommerce::product.label.manufacturer_id')!!}</th>
                    <th data-field="title">{!! trans('ecommerce::product.label.title')!!}</th>
                    <th data-field="color">{!! trans('ecommerce::product.label.color')!!}</th>
                    <th data-field="ean">{!! trans('ecommerce::product.label.ean')!!}</th>
                    <th data-field="price">{!! trans('ecommerce::product.label.price')!!}</th>
                    <th data-field="quantity">{!! trans('ecommerce::product.label.quantity')!!}</th>
                    <th data-field="date_available">{!! trans('ecommerce::product.label.date_available')!!}</th>
                    <th data-field="status">{!! trans('ecommerce::product.label.status')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>