@extends('backend.layouts.app')

@section('content')
    
    @if (Auth::user()->user_type == 'admin' || (Auth::user()->user_type == 'staff' && in_array('1', json_decode(Auth::user()->staff->role->permissions))))
        <div class="row gutters-10">
            <div class="col-lg-12">
                <div class="row gutters-10">
                    <div class="col-3">
                        <div class="bg-grad-2 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="fs-20">
                                    <span class=" d-block">{{  trans('messages.total') }}</span>
                                    {{  trans('messages.customer') }}
                                </div>
                                <div class="h3 fw-700 mb-3">
                                    {{ \App\Models\User::where('user_type', 'customer')->where('email_verified_at', '!=', null)->count() }}
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                    d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="fs-20">
                                    <span class="d-block">{{  trans('messages.total') }}</span>
                                    {{  trans('messages.order') }}
                                </div>
                                <div class="h3 fw-700 mb-3">{{ \App\Models\Order::count() }}</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                    d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bg-grad-1 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="fs-20">
                                    <span class=" d-block">{{  trans('messages.total') }}</span>
                                    {{  trans('messages.product_category') }}
                                </div>
                                <div class="h3 fw-700 mb-3">{{ \App\Models\Category::count() }}</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                    d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bg-grad-4 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="fs-20">
                                    <span class=" d-block">{{  trans('messages.total') }}</span>
                                    {{  trans('messages.product_brand') }}
                                </div>
                                <div class="h3 fw-700 mb-3">{{ \App\Models\Brand::count() }}</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                    d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    @endif


    @if (Auth::user()->user_type == 'admin' || (Auth::user()->user_type == 'staff' && in_array('1', json_decode(Auth::user()->staff->role->permissions))))
        <div class="row gutters-10">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 fs-14">{{  trans('messages.category_wise_product_sale') }}</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="graph-1" class="w-100" height="500"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 fs-14">{{  trans('messages.category_wise_product_stock') }}</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="graph-2" class="w-100" height="500"></canvas>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
@section('script')
    <script type="text/javascript">
        AIZ.plugins.chart('#pie-1', {
            type: 'doughnut',
            data: {
                labels: [
                    '{{  trans('messages.total_published_products') }}',
                    '{{  trans('messages.total_sellers_products') }}',
                    '{{  trans('messages.total_admin_products') }}'
                ],
                datasets: [{
                    data: [
                        {{ \App\Models\Product::where('published', 1)->count() }},
                        {{ \App\Models\Product::where('published', 1)->where('added_by', 'seller')->count() }},
                        {{ \App\Models\Product::where('published', 1)->where('added_by', 'admin')->count() }}
                    ],
                    backgroundColor: [
                        "#fd3995",
                        "#34bfa3",
                        "#5d78ff",
                        '#fdcb6e',
                        '#d35400',
                        '#8e44ad',
                        '#006442',
                        '#4D8FAC',
                        '#CA6924',
                        '#C91F37'
                    ]
                }]
            },
            options: {
                cutoutPercentage: 70,
                legend: {
                    labels: {
                        fontFamily: 'Poppins',
                        boxWidth: 10,
                        usePointStyle: true
                    },
                    onClick: function() {
                        return '';
                    },
                    position: 'bottom'
                }
            }
        });

        AIZ.plugins.chart('#pie-2', {
            type: 'doughnut',
            data: {
                labels: [
                    '{{  trans('messages.total_sellers') }}',
                    '{{  trans('messages.total_approved_sellers') }}',
                    '{{  trans('messages.total_pending_sellers') }}'
                ],
                datasets: [{
                    data: [
                        {{ 0 }},
                        {{ 0 }},
                        {{ 0 }}
                    ],
                    backgroundColor: [
                        "#fd3995",
                        "#34bfa3",
                        "#5d78ff",
                        '#fdcb6e',
                        '#d35400',
                        '#8e44ad',
                        '#006442',
                        '#4D8FAC',
                        '#CA6924',
                        '#C91F37'
                    ]
                }]
            },
            options: {
                cutoutPercentage: 70,
                legend: {
                    labels: {
                        fontFamily: 'Montserrat',
                        boxWidth: 10,
                        usePointStyle: true
                    },
                    onClick: function() {
                        return '';
                    },
                    position: 'bottom'
                }
            }
        });
        AIZ.plugins.chart('#graph-1', {
            type: 'bar',
            data: {
                labels: [
                    @foreach ($root_categories as $key => $category)
                        '{{ $category->getTranslation('name') }}',
                    @endforeach
                ],
                datasets: [{
                    label: '{{  trans('messages.number_of_sale') }}',
                    data: [
                        {{ $cached_graph_data['num_of_sale_data'] }}
                    ],
                    backgroundColor: [
                        @foreach ($root_categories as $key => $category)
                            'rgba(55, 125, 255, 0.4)',
                        @endforeach
                    ],
                    borderColor: [
                        @foreach ($root_categories as $key => $category)
                            'rgba(55, 125, 255, 1)',
                        @endforeach
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: '#f2f3f8',
                            zeroLineColor: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10,
                            beginAtZero: true
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10
                        }
                    }]
                },
                legend: {
                    labels: {
                        fontFamily: 'Poppins',
                        boxWidth: 10,
                        usePointStyle: true
                    },
                    onClick: function() {
                        return '';
                    },
                }
            }
        });
        AIZ.plugins.chart('#graph-2', {
            type: 'bar',
            data: {
                labels: [
                    @foreach ($root_categories as $key => $category)
                        '{{ $category->getTranslation('name') }}',
                    @endforeach
                ],
                datasets: [{
                    label: '{{  trans('messages.number_of_stock') }}',
                    data: [
                        {{ $cached_graph_data['qty_data'] }}
                    ],
                    backgroundColor: [
                        @foreach ($root_categories as $key => $category)
                            'rgba(253, 57, 149, 0.4)',
                        @endforeach
                    ],
                    borderColor: [
                        @foreach ($root_categories as $key => $category)
                            'rgba(253, 57, 149, 1)',
                        @endforeach
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: '#f2f3f8',
                            zeroLineColor: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10,
                            beginAtZero: true
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10
                        }
                    }]
                },
                legend: {
                    labels: {
                        fontFamily: 'Poppins',
                        boxWidth: 10,
                        usePointStyle: true
                    },
                    onClick: function() {
                        return '';
                    },
                }
            }
        });
    </script>
@endsection
