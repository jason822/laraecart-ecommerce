            <table class="table" id="main-table" data-url="{!!guard_url('ecommerce/category?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="name">{!! trans('ecommerce::category.label.name')!!}</th>
                    <th data-field="parent_id">{!! trans('ecommerce::category.label.parent_id')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>