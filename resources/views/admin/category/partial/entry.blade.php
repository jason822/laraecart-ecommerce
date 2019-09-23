            <div class='row'>
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