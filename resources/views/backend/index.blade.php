@extends('master')

@section('main')
    <!--  -->
    <div class="side-app">

        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title">Medveda</h4>
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li> --}}
                </ol>
            </div>
            {{-- <div class="page-rightheader">
                <div class="ml-3 ml-auto d-flex">
                    <div class="border-right pr-4 mt-2 d-xl-block">
                        <p class="text-muted mb-1">Category</p>
                        <h6 class="font-weight-semibold mb-0">All Categories</h6>
                    </div>
                    <div class="border-right pl-4 pr-4 mt-2 d-xl-block">
                        <p class="text-muted mb-0">Customer Rating</p>
                        <div class="wideget-user-rating">
                            <a href="#">
                                <i class="fa fa-star text-warning"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-star text-warning"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-star text-warning"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-star text-warning"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-star-o text-warning mr-1"></i>
                            </a>
                            <span class="">(4.5/5)</span>
                        </div>
                    </div>
                    <span class="pg-header">
                        <a href="#" class="btn btn-primary-gradient ml-4 mt-2 "><i
                                class="typcn typcn-shopping-cart mr-1"></i>Buy Now</a>
                    </span>
                </div>
            </div> --}}
        </div>
        <!--End Page header-->

        <!--Row-->
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class=" col-xl-3 col-sm-6 d-flex mb-5 mb-xl-0">
                                <div class="feature ">
                                    <i class="si si-briefcase primary feature-icon bg-primary"></i>
                                </div>
                                <div class="ml-3">
                                    <small class=" mb-0">Total Orders</small><br>
                                    <h3 class="font-weight-semibold mb-0">5,643</h3>
                                    <small class="mb-0 text-muted"><span class="text-success font-weight-semibold"><i
                                                class="fa fa-caret-up  mr-1"></i> 0.67%</span> Last month</small>
                                </div>
                            </div>
                            <div class=" col-xl-3 col-sm-6 d-flex mb-5 mb-xl-0">
                                <div class="feature">
                                    <i class="si si-layers danger feature-icon bg-danger"></i>
                                </div>
                                <div class=" d-flex flex-column  ml-3"> <small class=" mb-0">Total Product</small>
                                    <h3 class="font-weight-semibold mb-0">2,536</h3>
                                    <small class="mb-0 text-muted"><span class="text-success font-weight-semibold"><i
                                                class="fa fa-caret-up  mr-1"></i> 0.25%</span> Last month</small>
                                </div>
                            </div>
                            <div class=" col-xl-3 col-sm-6 d-flex  mb-5 mb-sm-0">
                                <div class="feature">
                                    <i class="si si-note secondary feature-icon bg-secondary"></i>
                                </div>
                                <div class=" d-flex flex-column ml-3"> <small class=" mb-0">Total Feedback</small>
                                    <h3 class="font-weight-semibold mb-0">12,863</h3>
                                    <small class="mb-0 text-muted"><span class="text-success font-weight-semibold"><i
                                                class="fa fa-caret-up  mr-1"></i> 0.67%</span> Last month</small>
                                </div>
                            </div>
                            <div class=" col-xl-3 col-sm-6 d-flex">
                                <div class="feature">
                                    <i class="si si-basket-loaded success feature-icon bg-success"></i>
                                </div>
                                <div class=" d-flex flex-column  ml-3"> <small class=" mb-0">Total sold</small>
                                    <h3 class="font-weight-semibold mb-0">7,836</h3>
                                    <small class="mb-0 text-muted"><span class="text-danger font-weight-semibold"><i
                                                class="fa fa-caret-down  mr-1"></i> 0.32%</span> Last month</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->

        <!--Row-->
        <div class="row">
            <div class="col-xl-5 col-md-12 col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Sales Funnel & Avg. Length of Sales Stages</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center mb-4 mb-md-0">
                                <p class="data-attributes mb-0">
                                    <span class="donut" data-peity='{ "fill": ["#4a32d4", "#e5e9f2"]}'>4/5</span>
                                </p>
                                <h4 class=" mb-0 font-weight-semibold">3,678</h4>
                                <p class="mb-0 text-muted">Opportunities</p>
                            </div>
                            <div class="col-md-4 text-center mb-4 mb-md-0">
                                <p class="data-attributes mb-0">
                                    <span class="donut" data-peity='{ "fill": ["#fb1c52", "#e5e9f2"]}'>226/360</span>
                                </p>
                                <h4 class=" mb-0 font-weight-semibold">398</h4>
                                <p class="mb-0 text-muted">Proposal</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p class="data-attributes mb-0">
                                    <span class="donut" data-peity='{ "fill": ["#f7be2d", "#e5e9f2"]}'>4,4</span>
                                </p>
                                <h4 class=" mb-0 font-weight-semibold">289</h4>
                                <p class="mb-0 text-muted">Negotiation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class=" ">
                            <h5>Total earnings of this year</h5>
                        </div>
                        <h2 class="mb-2 font-weight-semibold">$6,3825<span class="sparkline_bar31 float-right"></span>
                        </h2>
                        <div class="text-muted mb-0">
                            <i class="fa fa-arrow-circle-o-up text-success"></i>
                            <span>12.3% higher vs previous month</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-md-12 col-lg-7">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Yearly Sales Report</h3>
                        <div class="card-options ">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                    class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                    class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-12 mb-5">
                                <p class=" mb-0 "> Total Sales</p>
                                <h2 class="mb-0 font-weight-semibold">35,789<span class="fs-12 text-muted"><span
                                            class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.9%</span>last
                                        year</span></h2>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 mb-5">
                                <p class=" mb-0 ">Total Income</p>
                                <h2 class="mb-0 font-weight-semibold">$9,265<span class="fs-12 text-muted"><span
                                            class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>0.15%</span>last
                                        year</span></h2>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 mb-5">
                                <p class=" mb-0 "> Total Profits</p>
                                <h2 class="mb-0 font-weight-semibold">32%<span class="fs-12 text-muted"><span
                                            class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>1.04%</span>last
                                        year</span></h2>
                            </div>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="sales" class=" chartjs-render-monitor chart-dropshadow2 h-184"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->

        <!--Row-->
        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Order Activity</div>
                        <div class="card-options ">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                    class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                    class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body sm-p-0">
                        <div class="list-group projects-list border pt-0 pb-0 pl-0 pr-0">
                            <a href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 font-weight-semibold ">Order Picking</h6>
                                    <h6 class="mb-0 font-weight-semibold ">3,876</h6>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted"><i class="fe fe-arrow-down text-success "></i> 03% last
                                        month</span>
                                    <span class="text-muted">5 days ago</span>
                                </div>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 font-weight-semibold ">Storage</h6>
                                    <h6 class="mb-0 font-weight-semibold ">2,178</h6>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted"><i class="fe fe-arrow-down text-danger "></i> 16% last
                                        month</span>
                                    <span class="text-muted">2 days ago</span>
                                </div>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 font-weight-semibold ">Shipping</h6>
                                    <h6 class="mb-0 font-weight-semibold ">1,367</h6>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted"><i class="fe fe-arrow-up text-success"></i> 06% last
                                        month</span>
                                    <span class="text-muted">1 days ago</span>
                                </div>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 font-weight-semibold ">Receiving</h6>
                                    <h6 class="mb-0 font-weight-semibold ">678</h6>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted"><i class="fe fe-arrow-down text-danger "></i> 25% last
                                        month</span>
                                    <span class="text-muted">10 days ago</span>
                                </div>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 font-weight-semibold ">Other</h6>
                                    <h6 class="mb-0 font-weight-semibold ">5,678</h6>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted"><i class="fe fe-arrow-up text-success "></i> 16% last
                                        month</span>
                                    <span class="text-muted">5 days ago</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Products</h3>
                        <div class="card-options ">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                    class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                    class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body sm-p-2">
                        <div class="rated-products">
                            <ul class="vertical-scroll mb-0">
                                <li class="item">
                                    <div class="media mt-0 pl-0 pr-0 mb-5">
                                        <img class="mr-4" src="{{ asset('/assets/images/products/4.png') }}"
                                            alt="img">
                                        <div class="media-body">
                                            <h4 class="mt-0 mb-1 font-weight-sembold">Hand Bag</h4>
                                            <span class="text-muted">exclusive sale</span><br>
                                            <span class="rated-products-ratings">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-half-o text-warning"></i>
                                            </span>
                                        </div>
                                        <div class="h5 mb-0 font-weight-semibold mt-4 flot-right">$25.00</div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="media mt-0 pl-0 pr-0 mb-5">
                                        <img class=" mr-4" src="{{ asset('/assets/images/products/8.png') }}"
                                            alt="img">
                                        <div class="media-body">
                                            <h4 class="mb-1 font-weight-sembold">Sports Shoe</h4>
                                            <span class="text-muted">exclusive sale</span><br>
                                            <span class="rated-products-ratings">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-half-o text-warning"></i>
                                                <i class="fa fa-star-o text-warning"></i>
                                            </span>
                                        </div>
                                        <div class="h5 mb-0 font-weight-semibold mt-4 flot-right">$15.00</div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="media mt-0 pl-0 pr-0 mb-5">
                                        <img class=" mr-4" src="{{ asset('/assets/images/products/9.png') }}"
                                            alt="img">
                                        <div class="media-body">
                                            <h4 class="mb-1 font-weight-sembold">Mobile</h4>
                                            <span class="text-muted">exclusive sale</span><br>
                                            <span class="rated-products-ratings">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-o text-warning"></i>
                                                <i class="fa fa-star-o text-warning"></i>
                                            </span>
                                        </div>
                                        <div class="h5 mb-0 font-weight-semibold mt-4 flot-right">$30.00</div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="media mt-0 pl-0 pr-0 mb-0">
                                        <img class=" mr-4" src="{{ asset('/assets/images/products/6.png') }}"
                                            alt="img">
                                        <div class="media-body">
                                            <h4 class=" mb-1 font-weight-sembold">Laptop</h4>
                                            <span class="text-muted">exclusive sale</span><br>
                                            <span class="rated-products-ratings">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-o text-warning"></i>
                                                <i class="fa fa-star-o text-warning"></i>
                                                <i class="fa fa-star-o text-warning"></i>
                                            </span>
                                        </div>
                                        <div class="h5 mb-0 font-weight-semibold mt-4 flot-right">$42.00</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class=" mb-0 ">Order status</p>
                        <h3 class="mb-0 font-weight-semibold">$5,69,265<span class="fs-12 text-muted"><span
                                    class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>0.15%</span>last
                                year</span></h3>
                        <div class="row mt-3 text-center">
                            <div class="col-md-4 border-right mb-4 mb-md-0">
                                <p class="mb-0 text-muted">This Week</p>
                                <h5 class="mb-0">34%</h5>
                            </div>
                            <div class="col-md-4 border-right mb-4 mb-md-0">
                                <p class="mb-0 text-muted">Last Week</p>
                                <h5 class="mb-0">67%</h5>
                            </div>
                            <div class="col-md-4">
                                <p class="mb-0 text-muted">Total</p>
                                <h5 class="mb-0">$63,456</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <span class=" mb-1">Sales Revenue</span>
                                <h3 class="mb-3  font-weight-semibold">$5,89,268<span class="fs-12 text-danger ml-1">last
                                        6 months</span></h3>
                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted
                                    by the readable content of a page.</p>
                            </div>
                            <div class="col-md-4 mt-5">
                                <div class="chart-circle chart-circle-sm  overflow-hiddene  mt-sm-0 mb-0 text-left"
                                    data-value="0.58" data-thickness="8" data-color="#4a32d4">
                                    <div class="chart-circle-value text-center">
                                        <h5 class="mb-0">65%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="spark1" class=""></div>
                </div>
            </div>
        </div>
        <!--End row-->

        <!--Row-->
        <div class="row">
            <div class="col-xl-3 col-sm-12 col-lg-6 col-md-6">
                <div class="card product-info-card">
                    <div class="card-body d-flex flex-column">
                        <div class="">
                            <div class="team-img text-center">
                                <img src="{{ asset('/assets/images/products/hand-bag.png') }}" class=""
                                    alt="">
                            </div>
                            <div class="text-center mt-4">
                                <div class="text-warning mt-1">
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star-half-full"> </i>
                                </div>
                                <h4 class="font-weight-semibold mb-0">Womens Bags</h4>
                                <p class="mb-0 mt-1 text-muted"> exclusive sale</p>
                            </div>
                            <div class="d-flex justify-content-between mt-auto pt-5">
                                <div class="product-item-wrap d-flex">
                                    <h4 class="mb-0 font-weight-semibold fs-20  mt-2 text-success">$49<span
                                            class="h5 text-muted ml-2"><del>$69</del></span></h4>
                                </div>
                                <button type="button" class="btn btn-primary-gradient"> Add Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-12 col-lg-6 col-md-6">
                <div class="card product-info-card">
                    <div class="card-body d-flex flex-column">
                        <div class="">
                            <div class="team-img text-center">
                                <img src="{{ asset('/assets/images/products/samsung.png') }}" class=""
                                    alt="">
                            </div>
                            <div class="text-center mt-4">
                                <div class="text-warning mt-1">
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star-half-full"> </i>
                                </div>
                                <h4 class="font-weight-semibold mb-0">Digital Watch</h4>
                                <p class="mb-0 mt-1 text-muted"> exclusive sale</p>
                            </div>
                            <div class="d-flex justify-content-between mt-auto pt-5">
                                <div class="product-item-wrap d-flex">
                                    <h4 class="mb-0 font-weight-semibold fs-20 mt-2 text-success">$120<span
                                            class="h5 text-muted ml-2"><del>$159</del></span></h4>
                                </div>
                                <button type="button" class="btn btn-primary-gradient">Add Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-12 col-lg-6 col-md-6">
                <div class="card product-info-card">
                    <div class="card-body d-flex flex-column">
                        <div class="">
                            <div class="team-img text-center">
                                <img src="{{ asset('/assets/images/products/mobile.png') }}" class=""
                                    alt="">
                            </div>
                            <div class="text-center mt-4">
                                <div class="text-warning mt-1">
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star-half-full"> </i>
                                </div>
                                <h4 class="font-weight-semibold mb-0">Mobile Phone</h4>
                                <p class="mb-0 mt-1 text-muted">exclusive sale</p>
                            </div>
                            <div class="d-flex justify-content-between mt-auto pt-5">
                                <div class="product-item-wrap d-flex">
                                    <h4 class="mb-0 font-weight-semibold fs-20 mt-2 text-success">$299<span
                                            class="h5 text-muted ml-2"><del>$359</del></span></h4>
                                </div>
                                <button type="button" class="btn btn-primary-gradient"> Add Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-12 col-lg-6 col-md-6">
                <div class="card product-info-card">
                    <div class="card-body d-flex flex-column">
                        <div class="">
                            <div class="team-img text-center">
                                <img src="{{ asset('/assets/images/products/headphones.png') }}" class=""
                                    alt="">
                            </div>
                            <div class="text-center mt-4">
                                <div class="text-warning mt-1">
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star"> </i>
                                    <i class="fa fa-star-half-full"> </i>
                                </div>
                                <h4 class="font-weight-semibold mb-0">Headphones</h4>
                                <p class="mb-0 mt-1 text-muted">exclusive sale</p>
                            </div>
                            <div class="d-flex justify-content-between mt-auto pt-5">
                                <div class="product-item-wrap d-flex">
                                    <h4 class="mb-0 font-weight-semibold fs-20 mt-2 text-success">$39<span
                                            class="h5 text-muted ml-2"><del>$359</del></span></h4>
                                </div>
                                <button type="button" class="btn btn-primary-gradient"> Add Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Row-->
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Product Sales Details</div>
                        <div class="card-options ">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                    class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                    class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-vcenter border mb-0 text-nowrap">
                                <thead class="">
                                    <tr>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Sold</th>
                                        <th>Record point</th>
                                        <th>Stock</th>
                                        <th>Amount</th>
                                        <th>Stock Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <img src="{{ asset('/assets/images/products/1.png') }}"
                                                class="avatar avatar-md bg-transparent " alt="img"></td>
                                        <td class="text-sm font-weight-600">Furniture</td>
                                        <td>18</td>
                                        <td>05</td>
                                        <td>112</td>
                                        <td>$ 2,356</td>
                                        <td><i class="fa fa-check mr-1 text-success"></i> In Stock</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('/assets/images/products/2.png') }}"
                                                class="avatar avatar-md bg-transparent " alt="img"></td>
                                        <td class="text-sm font-weight-600">Clothes</td>
                                        <td>10</td>
                                        <td>04</td>
                                        <td>210</td>
                                        <td>$ 3,522</td>
                                        <td><i class="fa fa-check text-success"></i> In Stock</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('/assets/images/products/mobile.png') }}"
                                                class="avatar avatar-md bg-transparent " alt="img"></td>
                                        <td class="text-sm font-weight-600">Mobile</td>
                                        <td>15</td>
                                        <td>05</td>
                                        <td>215</td>
                                        <td>$ 5,362</td>
                                        <td><i class="fa fa-check text-success"></i> In Stock</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('/assets/images/products/3.png') }}"
                                                class="avatar avatar-md bg-transparent " alt="img"></td>
                                        <td class="text-sm font-weight-600">Digital watch</td>
                                        <td>21</td>
                                        <td>07</td>
                                        <td>102</td>
                                        <td>$ 1,326</td>
                                        <td><i class="fa fa-check text-success"></i> In Stock</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('/assets/images/products/4.png') }}"
                                                class="avatar avatar-md bg-transparent " alt="img"></td>
                                        <td class="text-sm font-weight-600">Women handbag</td>
                                        <td>34</td>
                                        <td>10</td>
                                        <td>325</td>
                                        <td>$ 5,234</td>
                                        <td><i class="fa fa-check text-success"></i> In Stock</td>
                                    </tr>
                                    <tr>
                                        <td><img src= "{{ asset('/assets/images/products/5.png') }}"
                                                class="avatar avatar-md bg-transparent " alt="img"></td>
                                        <td class="text-sm font-weight-600">frock</td>
                                        <td>11</td>
                                        <td>04</td>
                                        <td>0</td>
                                        <td>$ 3,256</td>
                                        <td>
                                            <i class="fa fa-exclamation-triangle text-warning"></i> Out of stock
                                        </td>
                                    </tr>
                                    <tr class="mb-0">
                                        <td><img src="{{ asset('/assets/images/products/6.png') }}"
                                                class="avatar avatar-md bg-transparent " alt="img"></td>
                                        <td class="text-sm font-weight-600">Laptop</td>
                                        <td>60</td>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>$ 7,652</td>
                                        <td>
                                            <i class="fa fa-exclamation-triangle text-danger"></i> Out of stock
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--  -->
@endsection
