@extends('backend.layout.layout')
@section('main')
<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div id="ui-view">
                <link href="{{ asset('backend/vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
                <div class="fade-in">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-primary">
                                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="text-value-lg">9.823</div>
                                        <div>Người dùng xem blog</div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="c-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                href="#">Action</a><a class="dropdown-item" href="#">Another
                                                action</a><a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70"
                                        style="display: block; width: 204px; height: 70px;" width="204"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-info">
                                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="text-value-lg">9.823</div>
                                        <div>Người dùng xem phim</div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="c-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                href="#">Action</a><a class="dropdown-item" href="#">Another
                                                action</a><a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="chart chartjs-render-monitor" id="card-chart2" height="70"
                                        width="204" style="display: block; width: 204px; height: 70px;"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-warning">
                                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="text-value-lg">9.823</div>
                                        <div>Số tiền kiếm được</div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="c-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                href="#">Action</a><a class="dropdown-item" href="#">Another
                                                action</a><a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3" style="height:70px;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="chart chartjs-render-monitor" id="card-chart3" height="70"
                                        width="236" style="display: block; width: 236px; height: 70px;"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-gradient-danger">
                                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="text-value-lg">9.823</div>
                                        <div>Người dùng đáng nghi</div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="c-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                href="#">Action</a><a class="dropdown-item" href="#">Another
                                                action</a><a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="chart chartjs-render-monitor" id="card-chart4" height="70"
                                        width="204" style="display: block; width: 204px; height: 70px;"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="card-title mb-0">Thống kê Traffic</h4>
                                    <div class="small text-muted">September 2019</div>
                                </div>
                                <div class="btn-toolbar d-none d-md-block" role="toolbar"
                                    aria-label="Toolbar with buttons">
                                    <div class="btn-group btn-group-toggle mx-3" data-toggle="buttons">
                                        <label class="btn btn-outline-secondary">
                                            <input id="option1" type="radio" name="options" autocomplete="off"> Day
                                        </label>
                                        <label class="btn btn-outline-secondary active">
                                            <input id="option2" type="radio" name="options" autocomplete="off"
                                                checked=""> Month
                                        </label>
                                        <label class="btn btn-outline-secondary">
                                            <input id="option3" type="radio" name="options" autocomplete="off"> Year
                                        </label>
                                    </div>
                                    <button class="btn btn-primary" type="button">
                                        <svg class="c-icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download">
                                            </use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas class="chart chartjs-render-monitor" id="main-chart" height="300" width="993"
                                    style="display: block;"></canvas>
                                <div id="main-chart-tooltip" class="c-chartjs-tooltip center"
                                    style="opacity: 0; left: 90.9747px; top: 268.936px;">
                                    <div class="c-tooltip-header">
                                        <div class="c-tooltip-header-item">T</div>
                                    </div>
                                    <div class="c-tooltip-body">
                                        <div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color"
                                                style="background-color: rgba(3, 9, 15, 0.1);"></span><span
                                                class="c-tooltip-body-item-label">My First dataset</span><span
                                                class="c-tooltip-body-item-value">180</span></div>
                                        <div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color"
                                                style="background-color: transparent;"></span><span
                                                class="c-tooltip-body-item-label">My Second dataset</span><span
                                                class="c-tooltip-body-item-value">97</span></div>
                                        <div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color"
                                                style="background-color: transparent;"></span><span
                                                class="c-tooltip-body-item-label">My Third dataset</span><span
                                                class="c-tooltip-body-item-value">65</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row text-center">
                                <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                    <div class="text-muted">Visits</div><strong>29.703 Users (40%)</strong>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar bg-gradient-success" role="progressbar"
                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                    <div class="text-muted">Unique</div><strong>24.093 Users (20%)</strong>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                    <div class="text-muted">Pageviews</div><strong>78.706 Views (60%)</strong>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar bg-gradient-warning" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                    <div class="text-muted">New Users</div><strong>22.123 Users (80%)</strong>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar bg-gradient-danger" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                    <div class="text-muted">Bounce Rate</div><strong>40.15%</strong>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-facebook content-center">
                                    <svg class="c-icon c-icon-3xl text-white my-4">
                                        <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-facebook-f"></use>
                                    </svg>
                                </div>
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="text-value-xl">89k</div>
                                        <div class="text-uppercase text-muted small">Bạn bè</div>
                                    </div>
                                    <div class="c-vr"></div>
                                    <div class="col">
                                        <div class="text-value-xl">459</div>
                                        <div class="text-uppercase text-muted small">Theo dõi</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-danger content-center text-white" style="padding: 25px 0; font-size: 30px">
                                  YOUTUBE
                                </div>
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="text-value-xl">973k</div>
                                        <div class="text-uppercase text-muted small">Đăng ký</div>
                                    </div>
                                    <div class="c-vr"></div>
                                    <div class="col">
                                        <div class="text-value-xl">1.792</div>
                                        <div class="text-uppercase text-muted small">Theo dõi</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-twitter content-center">
                                    <svg class="c-icon c-icon-3xl text-white my-4">
                                        <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-twitter"></use>
                                    </svg>
                                </div>
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="text-value-xl">500+</div>
                                        <div class="text-uppercase text-muted small">đăng ký</div>
                                    </div>
                                    <div class="c-vr"></div>
                                    <div class="col">
                                        <div class="text-value-xl">292</div>
                                        <div class="text-uppercase text-muted small">theo dõi</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

               

                </div>
            </div>
        </div>
    </main>
</div>
@stop
@section('script')
    @parent
    <script type="text/javascript" src="vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js" class="view-script"></script>
    <script type="text/javascript" src="vendors/@coreui/utils/js/coreui-utils.js" class="view-script"></script>
    <script type="text/javascript" src="js/main.js" class="view-script"></script>
@stop
