            @include('ecommerce::public.brand.partial.header')

            <section class="grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('ecommerce::public.brand.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="main-area parent-border list-item">
                                @foreach($brands as $brand)
                                <div class="item border">
                                    <div class="feature">
                                        <a href="{{trans_url('brands')}}/{{@$brand['slug']}}">
                                            <img src="{{url($brand->defaultImage('images'))}}" class="img-responsive center-block" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="{{trans_url('brand')}}/{{$brand['slug']}}">{{str_limit($brand['title'], 300)}}</a> 
                                        </h4>
                                        <div class="metas mt20">
                                            <div class="tag pull-left">
                                                <a href="#" class="">Seo Tips</a>
                                            </div>
                                            <div class="date-time pull-right">
                                                <span><i class="fa fa-comments"></i>{{@$brand->viewcount}}</span>
                                                <span><i class="fa fa-calendar"></i>{{format_date($brand['posted_on'])}}</span>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="author">
                                            <div class="avatar pull-left">
                                                {{@$brand->user->badge}}
                                            </div>
                                            <div class="actions">
                                                

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                            </div>
                            <div class="pagination text-center">
                            {{ $brands->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </section> 