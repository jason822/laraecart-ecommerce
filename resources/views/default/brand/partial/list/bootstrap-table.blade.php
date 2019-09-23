            <table class="table" id="main-table" data-url="{!!guard_url('ecommerce/brand?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="name">{!! trans('ecommerce::brand.label.name')!!}</th>
                    <th data-field="status">{!! trans('ecommerce::brand.label.status')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>