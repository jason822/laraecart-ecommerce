            <table class="table" id="main-table" data-url="{!!guard_url('ecommerce/review?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="product_id">{!! trans('ecommerce::review.label.product_id')!!}</th>
                    <th data-field="author_name">{!! trans('ecommerce::review.label.author_name')!!}</th>
                    <th data-field="author_email">{!! trans('ecommerce::review.label.author_email')!!}</th>
                    <th data-field="author_phone">{!! trans('ecommerce::review.label.author_phone')!!}</th>
                    <th data-field="review">{!! trans('ecommerce::review.label.review')!!}</th>
                    <th data-field="rating">{!! trans('ecommerce::review.label.rating')!!}</th>
                    <th data-field="status">{!! trans('ecommerce::review.label.status')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>