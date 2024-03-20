@extends('layouts.tabler')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('orders.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <x-icon.plus />
                            Create new order
                        </a>
                        <a href="{{ route('orders.create') }}" class="btn btn-primary d-sm-none btn-icon"
                            aria-label="Create new report">
                            <x-icon.plus />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Sales</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mb-3">75%</div>
                            <div class="d-flex mb-2">
                                <div>Conversion rate</div>
                                <div class="ms-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                  7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                    <span class="visually-hidden">75% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Revenue</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">$4,300</div>
                                <div class="me-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                  8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div id="chart-revenue-bg" class="chart-sm"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">New clients</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-3 me-2">6,782</div>
                                <div class="me-auto">
                                <span class="text-yellow d-inline-flex align-items-center lh-1">
                                  0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /></svg>
                                </span>
                                </div>
                            </div>
                            <div id="chart-new-clients" class="chart-sm"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Active users</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-3 me-2">2,986</div>
                                <div class="me-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                  4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                </span>
                                </div>
                            </div>
                            <div id="chart-active-users" class="chart-sm"></div>
                        </div>
                    </div>
                </div>
                

                <div class="col-12">
                    <div class="row row-cards">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-packages" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                                                    <path d="M2 13.5v5.5l5 3" />
                                                    <path d="M7 16.545l5 -3.03" />
                                                    <path d="M17 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                                                    <path d="M12 19l5 3" />
                                                    <path d="M17 16.5l5 -3" />
                                                    <path d="M12 13.5v-5.5l-5 -3l5 -3l5 3v5.5" />
                                                    <path d="M7 5.03v5.455" />
                                                    <path d="M12 8l5 -3" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{ $products }} Products
                                            </div>
                                            <div class="text-muted">
                                                {{ $categories }} categories
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                    <path d="M17 17h-11v-14h-2" />
                                                    <path d="M6 5l14 1l-1 7h-13" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{ $orders }} Orders
                                            </div>
                                            <div class="text-muted">
                                                {{ $todayOrders }} shipped
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-truck-delivery" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                    <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                                    <path d="M3 9l4 0" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{ $purchases }} Purchases
                                            </div>
                                            <div class="text-muted">
                                                {{ $todayPurchases }} today
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-files" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                                    <path
                                                        d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                                                    <path
                                                        d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{ $quotations }} Quotations
                                            </div>
                                            <div class="text-muted">
                                                {{ $todayQuotations }} today
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Traffic summary</h3>
                        <div id="chart-mentions" class="chart-lg" style="min-height: 240px;"><div id="apexcharts3919vuq7" class="apexcharts-canvas apexcharts3919vuq7 apexcharts-theme-light" style="width: 472px; height: 240px;"><svg id="SvgjsSvg2519" width="472" height="240" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="472" height="240"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 120px;"></div></foreignObject><g id="SvgjsG2811" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)"><g id="SvgjsG2812" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2814" font-family="inherit" x="4" y="11.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2815">100</tspan><title>100</title></text><text id="SvgjsText2817" font-family="inherit" x="4" y="51.82" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2818">80</tspan><title>80</title></text><text id="SvgjsText2820" font-family="inherit" x="4" y="92.14" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2821">60</tspan><title>60</title></text><text id="SvgjsText2823" font-family="inherit" x="4" y="132.46" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2824">40</tspan><title>40</title></text><text id="SvgjsText2826" font-family="inherit" x="4" y="172.78" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2827">20</tspan><title>20</title></text><text id="SvgjsText2829" font-family="inherit" x="4" y="213.1" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2830">0</tspan><title>0</title></text></g></g><g id="SvgjsG2521" class="apexcharts-inner apexcharts-graphical" transform="translate(42.45789930555556, 10)"><defs id="SvgjsDefs2520"><linearGradient id="SvgjsLinearGradient2525" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2526" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2527" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2528" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask3919vuq7"><rect id="SvgjsRect2536" width="446.640625" height="201.6" x="-11.098524305555557" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask3919vuq7"></clipPath><clipPath id="nonForecastMask3919vuq7"></clipPath><clipPath id="gridRectMarkerMask3919vuq7"><rect id="SvgjsRect2537" width="428.4435763888889" height="205.6" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2529" width="5.895049672067902" height="201.6" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2525)" class="apexcharts-xcrosshairs" y2="201.6" filter="none" fill-opacity="0.9"></rect><line id="SvgjsLine2775" x1="35.37029803240741" y1="202.6" x2="35.37029803240741" y2="208.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2777" x1="117.90099344135803" y1="202.6" x2="117.90099344135803" y2="208.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2779" x1="200.4316888503086" y1="202.6" x2="200.4316888503086" y2="208.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2781" x1="294.752483603395" y1="202.6" x2="294.752483603395" y2="208.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2783" x1="389.07327835648135" y1="202.6" x2="389.07327835648135" y2="208.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG2770" class="apexcharts-grid"><g id="SvgjsG2771" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2785" x1="-9.098524305555557" y1="40.32" x2="433.54210069444446" y2="40.32" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2786" x1="-9.098524305555557" y1="80.64" x2="433.54210069444446" y2="80.64" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2787" x1="-9.098524305555557" y1="120.96000000000001" x2="433.54210069444446" y2="120.96000000000001" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2788" x1="-9.098524305555557" y1="161.28" x2="433.54210069444446" y2="161.28" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2772" class="apexcharts-gridlines-vertical"><line id="SvgjsLine2774" x1="35.37029803240741" y1="0" x2="35.37029803240741" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2776" x1="117.90099344135803" y1="0" x2="117.90099344135803" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2778" x1="200.4316888503086" y1="0" x2="200.4316888503086" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2780" x1="294.752483603395" y1="0" x2="294.752483603395" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2782" x1="389.07327835648135" y1="0" x2="389.07327835648135" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine2791" x1="0" y1="201.6" x2="424.4435763888889" y2="201.6" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2790" x1="0" y1="1" x2="0" y2="201.6" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2538" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2539" class="apexcharts-series" seriesName="Web" rel="1" data:realIndex="0"><path id="SvgjsPath2543" d="M -2.947524836033951 201.601 L -2.947524836033951 199.585 L 2.947524836033951 199.585 L 2.947524836033951 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M -2.947524836033951 201.601 L -2.947524836033951 199.585 L 2.947524836033951 199.585 L 2.947524836033951 201.601 z" pathFrom="M -2.947524836033951 201.601 L -2.947524836033951 201.601 L 2.947524836033951 201.601 L 2.947524836033951 201.601 L 2.947524836033951 201.601 L 2.947524836033951 201.601 L 2.947524836033951 201.601 L -2.947524836033951 201.601 z" cy="199.584" cx="2.947524836033951" j="0" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2545" d="M 8.842574508101853 201.601 L 8.842574508101853 201.601 L 14.737624180169755 201.601 L 14.737624180169755 201.601 z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 8.842574508101853 201.601 L 8.842574508101853 201.601 L 14.737624180169755 201.601 L 14.737624180169755 201.601 z" pathFrom="M 8.842574508101853 201.601 L 8.842574508101853 201.601 L 14.737624180169755 201.601 L 14.737624180169755 201.601 L 14.737624180169755 201.601 L 14.737624180169755 201.601 L 14.737624180169755 201.601 L 8.842574508101853 201.601 z" cy="201.6" cx="14.737624180169757" j="1" val="0" barHeight="0" barWidth="5.895049672067902"></path><path id="SvgjsPath2547" d="M 20.63267385223766 201.601 L 20.63267385223766 201.601 L 26.52772352430556 201.601 L 26.52772352430556 201.601 z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 20.63267385223766 201.601 L 20.63267385223766 201.601 L 26.52772352430556 201.601 L 26.52772352430556 201.601 z" pathFrom="M 20.63267385223766 201.601 L 20.63267385223766 201.601 L 26.52772352430556 201.601 L 26.52772352430556 201.601 L 26.52772352430556 201.601 L 26.52772352430556 201.601 L 26.52772352430556 201.601 L 20.63267385223766 201.601 z" cy="201.6" cx="26.52772352430556" j="2" val="0" barHeight="0" barWidth="5.895049672067902"></path><path id="SvgjsPath2549" d="M 32.42277319637346 201.601 L 32.42277319637346 201.601 L 38.31782286844137 201.601 L 38.31782286844137 201.601 z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 32.42277319637346 201.601 L 32.42277319637346 201.601 L 38.31782286844137 201.601 L 38.31782286844137 201.601 z" pathFrom="M 32.42277319637346 201.601 L 32.42277319637346 201.601 L 38.31782286844137 201.601 L 38.31782286844137 201.601 L 38.31782286844137 201.601 L 38.31782286844137 201.601 L 38.31782286844137 201.601 L 32.42277319637346 201.601 z" cy="201.6" cx="38.31782286844137" j="3" val="0" barHeight="0" barWidth="5.895049672067902"></path><path id="SvgjsPath2551" d="M 44.21287254050927 201.601 L 44.21287254050927 201.601 L 50.107922212577165 201.601 L 50.107922212577165 201.601 z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 44.21287254050927 201.601 L 44.21287254050927 201.601 L 50.107922212577165 201.601 L 50.107922212577165 201.601 z" pathFrom="M 44.21287254050927 201.601 L 44.21287254050927 201.601 L 50.107922212577165 201.601 L 50.107922212577165 201.601 L 50.107922212577165 201.601 L 50.107922212577165 201.601 L 50.107922212577165 201.601 L 44.21287254050927 201.601 z" cy="201.6" cx="50.107922212577165" j="4" val="0" barHeight="0" barWidth="5.895049672067902"></path><path id="SvgjsPath2553" d="M 56.00297188464507 201.601 L 56.00297188464507 199.585 L 61.898021556712976 199.585 L 61.898021556712976 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 56.00297188464507 201.601 L 56.00297188464507 199.585 L 61.898021556712976 199.585 L 61.898021556712976 201.601 z" pathFrom="M 56.00297188464507 201.601 L 56.00297188464507 201.601 L 61.898021556712976 201.601 L 61.898021556712976 201.601 L 61.898021556712976 201.601 L 61.898021556712976 201.601 L 61.898021556712976 201.601 L 56.00297188464507 201.601 z" cy="199.584" cx="61.898021556712976" j="5" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2555" d="M 67.79307122878087 201.601 L 67.79307122878087 199.585 L 73.68812090084877 199.585 L 73.68812090084877 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 67.79307122878087 201.601 L 67.79307122878087 199.585 L 73.68812090084877 199.585 L 73.68812090084877 201.601 z" pathFrom="M 67.79307122878087 201.601 L 67.79307122878087 201.601 L 73.68812090084877 201.601 L 73.68812090084877 201.601 L 73.68812090084877 201.601 L 73.68812090084877 201.601 L 73.68812090084877 201.601 L 67.79307122878087 201.601 z" cy="199.584" cx="73.68812090084879" j="6" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2557" d="M 79.58317057291667 201.601 L 79.58317057291667 201.601 L 85.47822024498457 201.601 L 85.47822024498457 201.601 z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 79.58317057291667 201.601 L 79.58317057291667 201.601 L 85.47822024498457 201.601 L 85.47822024498457 201.601 z" pathFrom="M 79.58317057291667 201.601 L 79.58317057291667 201.601 L 85.47822024498457 201.601 L 85.47822024498457 201.601 L 85.47822024498457 201.601 L 85.47822024498457 201.601 L 85.47822024498457 201.601 L 79.58317057291667 201.601 z" cy="201.6" cx="85.47822024498458" j="7" val="0" barHeight="0" barWidth="5.895049672067902"></path><path id="SvgjsPath2559" d="M 91.37326991705248 201.601 L 91.37326991705248 201.601 L 97.26831958912038 201.601 L 97.26831958912038 201.601 z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 91.37326991705248 201.601 L 91.37326991705248 201.601 L 97.26831958912038 201.601 L 97.26831958912038 201.601 z" pathFrom="M 91.37326991705248 201.601 L 91.37326991705248 201.601 L 97.26831958912038 201.601 L 97.26831958912038 201.601 L 97.26831958912038 201.601 L 97.26831958912038 201.601 L 97.26831958912038 201.601 L 91.37326991705248 201.601 z" cy="201.6" cx="97.26831958912038" j="8" val="0" barHeight="0" barWidth="5.895049672067902"></path><path id="SvgjsPath2561" d="M 103.16336926118828 201.601 L 103.16336926118828 201.601 L 109.05841893325618 201.601 L 109.05841893325618 201.601 z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 103.16336926118828 201.601 L 103.16336926118828 201.601 L 109.05841893325618 201.601 L 109.05841893325618 201.601 z" pathFrom="M 103.16336926118828 201.601 L 103.16336926118828 201.601 L 109.05841893325618 201.601 L 109.05841893325618 201.601 L 109.05841893325618 201.601 L 109.05841893325618 201.601 L 109.05841893325618 201.601 L 103.16336926118828 201.601 z" cy="201.6" cx="109.05841893325618" j="9" val="0" barHeight="0" barWidth="5.895049672067902"></path><path id="SvgjsPath2563" d="M 114.95346860532409 201.601 L 114.95346860532409 197.569 L 120.84851827739199 197.569 L 120.84851827739199 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 114.95346860532409 201.601 L 114.95346860532409 197.569 L 120.84851827739199 197.569 L 120.84851827739199 201.601 z" pathFrom="M 114.95346860532409 201.601 L 114.95346860532409 201.601 L 120.84851827739199 201.601 L 120.84851827739199 201.601 L 120.84851827739199 201.601 L 120.84851827739199 201.601 L 120.84851827739199 201.601 L 114.95346860532409 201.601 z" cy="197.56799999999998" cx="120.848518277392" j="10" val="2" barHeight="4.032" barWidth="5.895049672067902"></path><path id="SvgjsPath2565" d="M 126.7435679494599 201.601 L 126.7435679494599 177.409 L 132.6386176215278 177.409 L 132.6386176215278 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 126.7435679494599 201.601 L 126.7435679494599 177.409 L 132.6386176215278 177.409 L 132.6386176215278 201.601 z" pathFrom="M 126.7435679494599 201.601 L 126.7435679494599 201.601 L 132.6386176215278 201.601 L 132.6386176215278 201.601 L 132.6386176215278 201.601 L 132.6386176215278 201.601 L 132.6386176215278 201.601 L 126.7435679494599 201.601 z" cy="177.408" cx="132.6386176215278" j="11" val="12" barHeight="24.192" barWidth="5.895049672067902"></path><path id="SvgjsPath2567" d="M 138.5336672935957 201.601 L 138.5336672935957 191.521 L 144.4287169656636 191.521 L 144.4287169656636 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 138.5336672935957 201.601 L 138.5336672935957 191.521 L 144.4287169656636 191.521 L 144.4287169656636 201.601 z" pathFrom="M 138.5336672935957 201.601 L 138.5336672935957 201.601 L 144.4287169656636 201.601 L 144.4287169656636 201.601 L 144.4287169656636 201.601 L 144.4287169656636 201.601 L 144.4287169656636 201.601 L 138.5336672935957 201.601 z" cy="191.51999999999998" cx="144.4287169656636" j="12" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2569" d="M 150.3237666377315 201.601 L 150.3237666377315 185.47299999999998 L 156.2188163097994 185.47299999999998 L 156.2188163097994 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 150.3237666377315 201.601 L 150.3237666377315 185.47299999999998 L 156.2188163097994 185.47299999999998 L 156.2188163097994 201.601 z" pathFrom="M 150.3237666377315 201.601 L 150.3237666377315 201.601 L 156.2188163097994 201.601 L 156.2188163097994 201.601 L 156.2188163097994 201.601 L 156.2188163097994 201.601 L 156.2188163097994 201.601 L 150.3237666377315 201.601 z" cy="185.47199999999998" cx="156.2188163097994" j="13" val="8" barHeight="16.128" barWidth="5.895049672067902"></path><path id="SvgjsPath2571" d="M 162.1138659818673 201.601 L 162.1138659818673 157.249 L 168.0089156539352 157.249 L 168.0089156539352 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 162.1138659818673 201.601 L 162.1138659818673 157.249 L 168.0089156539352 157.249 L 168.0089156539352 201.601 z" pathFrom="M 162.1138659818673 201.601 L 162.1138659818673 201.601 L 168.0089156539352 201.601 L 168.0089156539352 201.601 L 168.0089156539352 201.601 L 168.0089156539352 201.601 L 168.0089156539352 201.601 L 162.1138659818673 201.601 z" cy="157.248" cx="168.0089156539352" j="14" val="22" barHeight="44.352" barWidth="5.895049672067902"></path><path id="SvgjsPath2573" d="M 173.9039653260031 201.601 L 173.9039653260031 189.505 L 179.799014998071 189.505 L 179.799014998071 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 173.9039653260031 201.601 L 173.9039653260031 189.505 L 179.799014998071 189.505 L 179.799014998071 201.601 z" pathFrom="M 173.9039653260031 201.601 L 173.9039653260031 201.601 L 179.799014998071 201.601 L 179.799014998071 201.601 L 179.799014998071 201.601 L 179.799014998071 201.601 L 179.799014998071 201.601 L 173.9039653260031 201.601 z" cy="189.504" cx="179.799014998071" j="15" val="6" barHeight="12.096" barWidth="5.895049672067902"></path><path id="SvgjsPath2575" d="M 185.6940646701389 201.601 L 185.6940646701389 185.47299999999998 L 191.5891143422068 185.47299999999998 L 191.5891143422068 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 185.6940646701389 201.601 L 185.6940646701389 185.47299999999998 L 191.5891143422068 185.47299999999998 L 191.5891143422068 201.601 z" pathFrom="M 185.6940646701389 201.601 L 185.6940646701389 201.601 L 191.5891143422068 201.601 L 191.5891143422068 201.601 L 191.5891143422068 201.601 L 191.5891143422068 201.601 L 191.5891143422068 201.601 L 185.6940646701389 201.601 z" cy="185.47199999999998" cx="191.5891143422068" j="16" val="8" barHeight="16.128" barWidth="5.895049672067902"></path><path id="SvgjsPath2577" d="M 197.4841640142747 201.601 L 197.4841640142747 189.505 L 203.3792136863426 189.505 L 203.3792136863426 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 197.4841640142747 201.601 L 197.4841640142747 189.505 L 203.3792136863426 189.505 L 203.3792136863426 201.601 z" pathFrom="M 197.4841640142747 201.601 L 197.4841640142747 201.601 L 203.3792136863426 201.601 L 203.3792136863426 201.601 L 203.3792136863426 201.601 L 203.3792136863426 201.601 L 203.3792136863426 201.601 L 197.4841640142747 201.601 z" cy="189.504" cx="203.3792136863426" j="17" val="6" barHeight="12.096" barWidth="5.895049672067902"></path><path id="SvgjsPath2579" d="M 209.2742633584105 201.601 L 209.2742633584105 193.537 L 215.1693130304784 193.537 L 215.1693130304784 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 209.2742633584105 201.601 L 209.2742633584105 193.537 L 215.1693130304784 193.537 L 215.1693130304784 201.601 z" pathFrom="M 209.2742633584105 201.601 L 209.2742633584105 201.601 L 215.1693130304784 201.601 L 215.1693130304784 201.601 L 215.1693130304784 201.601 L 215.1693130304784 201.601 L 215.1693130304784 201.601 L 209.2742633584105 201.601 z" cy="193.536" cx="215.1693130304784" j="18" val="4" barHeight="8.064" barWidth="5.895049672067902"></path><path id="SvgjsPath2581" d="M 221.0643627025463 201.601 L 221.0643627025463 199.585 L 226.9594123746142 199.585 L 226.9594123746142 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 221.0643627025463 201.601 L 221.0643627025463 199.585 L 226.9594123746142 199.585 L 226.9594123746142 201.601 z" pathFrom="M 221.0643627025463 201.601 L 221.0643627025463 201.601 L 226.9594123746142 201.601 L 226.9594123746142 201.601 L 226.9594123746142 201.601 L 226.9594123746142 201.601 L 226.9594123746142 201.601 L 221.0643627025463 201.601 z" cy="199.584" cx="226.9594123746142" j="19" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2583" d="M 232.85446204668213 201.601 L 232.85446204668213 185.47299999999998 L 238.74951171875003 185.47299999999998 L 238.74951171875003 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 232.85446204668213 201.601 L 232.85446204668213 185.47299999999998 L 238.74951171875003 185.47299999999998 L 238.74951171875003 201.601 z" pathFrom="M 232.85446204668213 201.601 L 232.85446204668213 201.601 L 238.74951171875003 201.601 L 238.74951171875003 201.601 L 238.74951171875003 201.601 L 238.74951171875003 201.601 L 238.74951171875003 201.601 L 232.85446204668213 201.601 z" cy="185.47199999999998" cx="238.74951171875003" j="20" val="8" barHeight="16.128" barWidth="5.895049672067902"></path><path id="SvgjsPath2585" d="M 244.64456139081793 201.601 L 244.64456139081793 153.217 L 250.53961106288583 153.217 L 250.53961106288583 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 244.64456139081793 201.601 L 244.64456139081793 153.217 L 250.53961106288583 153.217 L 250.53961106288583 201.601 z" pathFrom="M 244.64456139081793 201.601 L 244.64456139081793 201.601 L 250.53961106288583 201.601 L 250.53961106288583 201.601 L 250.53961106288583 201.601 L 250.53961106288583 201.601 L 250.53961106288583 201.601 L 244.64456139081793 201.601 z" cy="153.216" cx="250.53961106288585" j="21" val="24" barHeight="48.384" barWidth="5.895049672067902"></path><path id="SvgjsPath2587" d="M 256.43466073495375 201.601 L 256.43466073495375 143.137 L 262.32971040702165 143.137 L 262.32971040702165 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 256.43466073495375 201.601 L 256.43466073495375 143.137 L 262.32971040702165 143.137 L 262.32971040702165 201.601 z" pathFrom="M 256.43466073495375 201.601 L 256.43466073495375 201.601 L 262.32971040702165 201.601 L 262.32971040702165 201.601 L 262.32971040702165 201.601 L 262.32971040702165 201.601 L 262.32971040702165 201.601 L 256.43466073495375 201.601 z" cy="143.136" cx="262.32971040702165" j="22" val="29" barHeight="58.464" barWidth="5.895049672067902"></path><path id="SvgjsPath2589" d="M 268.22476007908955 201.601 L 268.22476007908955 98.785 L 274.11980975115745 98.785 L 274.11980975115745 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 268.22476007908955 201.601 L 268.22476007908955 98.785 L 274.11980975115745 98.785 L 274.11980975115745 201.601 z" pathFrom="M 268.22476007908955 201.601 L 268.22476007908955 201.601 L 274.11980975115745 201.601 L 274.11980975115745 201.601 L 274.11980975115745 201.601 L 274.11980975115745 201.601 L 274.11980975115745 201.601 L 268.22476007908955 201.601 z" cy="98.78399999999999" cx="274.11980975115745" j="23" val="51" barHeight="102.816" barWidth="5.895049672067902"></path><path id="SvgjsPath2591" d="M 280.01485942322535 201.601 L 280.01485942322535 120.961 L 285.90990909529324 120.961 L 285.90990909529324 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 280.01485942322535 201.601 L 280.01485942322535 120.961 L 285.90990909529324 120.961 L 285.90990909529324 201.601 z" pathFrom="M 280.01485942322535 201.601 L 280.01485942322535 201.601 L 285.90990909529324 201.601 L 285.90990909529324 201.601 L 285.90990909529324 201.601 L 285.90990909529324 201.601 L 285.90990909529324 201.601 L 280.01485942322535 201.601 z" cy="120.96" cx="285.90990909529324" j="24" val="40" barHeight="80.64" barWidth="5.895049672067902"></path><path id="SvgjsPath2593" d="M 291.80495876736114 201.601 L 291.80495876736114 106.849 L 297.70000843942904 106.849 L 297.70000843942904 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 291.80495876736114 201.601 L 291.80495876736114 106.849 L 297.70000843942904 106.849 L 297.70000843942904 201.601 z" pathFrom="M 291.80495876736114 201.601 L 291.80495876736114 201.601 L 297.70000843942904 201.601 L 297.70000843942904 201.601 L 297.70000843942904 201.601 L 297.70000843942904 201.601 L 297.70000843942904 201.601 L 291.80495876736114 201.601 z" cy="106.848" cx="297.70000843942904" j="25" val="47" barHeight="94.752" barWidth="5.895049672067902"></path><path id="SvgjsPath2595" d="M 303.59505811149694 201.601 L 303.59505811149694 155.233 L 309.49010778356484 155.233 L 309.49010778356484 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 303.59505811149694 201.601 L 303.59505811149694 155.233 L 309.49010778356484 155.233 L 309.49010778356484 201.601 z" pathFrom="M 303.59505811149694 201.601 L 303.59505811149694 201.601 L 309.49010778356484 201.601 L 309.49010778356484 201.601 L 309.49010778356484 201.601 L 309.49010778356484 201.601 L 309.49010778356484 201.601 L 303.59505811149694 201.601 z" cy="155.232" cx="309.49010778356484" j="26" val="23" barHeight="46.368" barWidth="5.895049672067902"></path><path id="SvgjsPath2597" d="M 315.38515745563274 201.601 L 315.38515745563274 149.185 L 321.28020712770063 149.185 L 321.28020712770063 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 315.38515745563274 201.601 L 315.38515745563274 149.185 L 321.28020712770063 149.185 L 321.28020712770063 201.601 z" pathFrom="M 315.38515745563274 201.601 L 315.38515745563274 201.601 L 321.28020712770063 201.601 L 321.28020712770063 201.601 L 321.28020712770063 201.601 L 321.28020712770063 201.601 L 321.28020712770063 201.601 L 315.38515745563274 201.601 z" cy="149.184" cx="321.28020712770063" j="27" val="26" barHeight="52.416" barWidth="5.895049672067902"></path><path id="SvgjsPath2599" d="M 327.17525679976853 201.601 L 327.17525679976853 100.801 L 333.07030647183643 100.801 L 333.07030647183643 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 327.17525679976853 201.601 L 327.17525679976853 100.801 L 333.07030647183643 100.801 L 333.07030647183643 201.601 z" pathFrom="M 327.17525679976853 201.601 L 327.17525679976853 201.601 L 333.07030647183643 201.601 L 333.07030647183643 201.601 L 333.07030647183643 201.601 L 333.07030647183643 201.601 L 333.07030647183643 201.601 L 327.17525679976853 201.601 z" cy="100.8" cx="333.07030647183643" j="28" val="50" barHeight="100.8" barWidth="5.895049672067902"></path><path id="SvgjsPath2601" d="M 338.96535614390433 201.601 L 338.96535614390433 149.185 L 344.86040581597223 149.185 L 344.86040581597223 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 338.96535614390433 201.601 L 338.96535614390433 149.185 L 344.86040581597223 149.185 L 344.86040581597223 201.601 z" pathFrom="M 338.96535614390433 201.601 L 338.96535614390433 201.601 L 344.86040581597223 201.601 L 344.86040581597223 201.601 L 344.86040581597223 201.601 L 344.86040581597223 201.601 L 344.86040581597223 201.601 L 338.96535614390433 201.601 z" cy="149.184" cx="344.86040581597223" j="29" val="26" barHeight="52.416" barWidth="5.895049672067902"></path><path id="SvgjsPath2603" d="M 350.7554554880401 201.601 L 350.7554554880401 118.94500000000001 L 356.650505160108 118.94500000000001 L 356.650505160108 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 350.7554554880401 201.601 L 350.7554554880401 118.94500000000001 L 356.650505160108 118.94500000000001 L 356.650505160108 201.601 z" pathFrom="M 350.7554554880401 201.601 L 350.7554554880401 201.601 L 356.650505160108 201.601 L 356.650505160108 201.601 L 356.650505160108 201.601 L 356.650505160108 201.601 L 356.650505160108 201.601 L 350.7554554880401 201.601 z" cy="118.944" cx="356.650505160108" j="30" val="41" barHeight="82.65599999999999" barWidth="5.895049672067902"></path><path id="SvgjsPath2605" d="M 362.545554832176 201.601 L 362.545554832176 157.249 L 368.4406045042439 157.249 L 368.4406045042439 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 362.545554832176 201.601 L 362.545554832176 157.249 L 368.4406045042439 157.249 L 368.4406045042439 201.601 z" pathFrom="M 362.545554832176 201.601 L 362.545554832176 201.601 L 368.4406045042439 201.601 L 368.4406045042439 201.601 L 368.4406045042439 201.601 L 368.4406045042439 201.601 L 368.4406045042439 201.601 L 362.545554832176 201.601 z" cy="157.248" cx="368.4406045042439" j="31" val="22" barHeight="44.352" barWidth="5.895049672067902"></path><path id="SvgjsPath2607" d="M 374.3356541763118 201.601 L 374.3356541763118 108.865 L 380.2307038483797 108.865 L 380.2307038483797 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 374.3356541763118 201.601 L 374.3356541763118 108.865 L 380.2307038483797 108.865 L 380.2307038483797 201.601 z" pathFrom="M 374.3356541763118 201.601 L 374.3356541763118 201.601 L 380.2307038483797 201.601 L 380.2307038483797 201.601 L 380.2307038483797 201.601 L 380.2307038483797 201.601 L 380.2307038483797 201.601 L 374.3356541763118 201.601 z" cy="108.86399999999999" cx="380.2307038483797" j="32" val="46" barHeight="92.736" barWidth="5.895049672067902"></path><path id="SvgjsPath2609" d="M 386.1257535204476 201.601 L 386.1257535204476 106.849 L 392.0208031925155 106.849 L 392.0208031925155 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 386.1257535204476 201.601 L 386.1257535204476 106.849 L 392.0208031925155 106.849 L 392.0208031925155 201.601 z" pathFrom="M 386.1257535204476 201.601 L 386.1257535204476 201.601 L 392.0208031925155 201.601 L 392.0208031925155 201.601 L 392.0208031925155 201.601 L 392.0208031925155 201.601 L 392.0208031925155 201.601 L 386.1257535204476 201.601 z" cy="106.848" cx="392.0208031925155" j="33" val="47" barHeight="94.752" barWidth="5.895049672067902"></path><path id="SvgjsPath2611" d="M 397.91585286458337 201.601 L 397.91585286458337 38.305 L 403.81090253665127 38.305 L 403.81090253665127 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 397.91585286458337 201.601 L 397.91585286458337 38.305 L 403.81090253665127 38.305 L 403.81090253665127 201.601 z" pathFrom="M 397.91585286458337 201.601 L 397.91585286458337 201.601 L 403.81090253665127 201.601 L 403.81090253665127 201.601 L 403.81090253665127 201.601 L 403.81090253665127 201.601 L 403.81090253665127 201.601 L 397.91585286458337 201.601 z" cy="38.304" cx="403.81090253665127" j="34" val="81" barHeight="163.296" barWidth="5.895049672067902"></path><path id="SvgjsPath2613" d="M 409.70595220871917 201.601 L 409.70595220871917 108.865 L 415.60100188078707 108.865 L 415.60100188078707 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 409.70595220871917 201.601 L 409.70595220871917 108.865 L 415.60100188078707 108.865 L 415.60100188078707 201.601 z" pathFrom="M 409.70595220871917 201.601 L 409.70595220871917 201.601 L 415.60100188078707 201.601 L 415.60100188078707 201.601 L 415.60100188078707 201.601 L 415.60100188078707 201.601 L 415.60100188078707 201.601 L 409.70595220871917 201.601 z" cy="108.86399999999999" cx="415.60100188078707" j="35" val="46" barHeight="92.736" barWidth="5.895049672067902"></path><path id="SvgjsPath2615" d="M 421.49605155285496 201.601 L 421.49605155285496 189.505 L 427.39110122492286 189.505 L 427.39110122492286 201.601 z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 421.49605155285496 201.601 L 421.49605155285496 189.505 L 427.39110122492286 189.505 L 427.39110122492286 201.601 z" pathFrom="M 421.49605155285496 201.601 L 421.49605155285496 201.601 L 427.39110122492286 201.601 L 427.39110122492286 201.601 L 427.39110122492286 201.601 L 427.39110122492286 201.601 L 427.39110122492286 201.601 L 421.49605155285496 201.601 z" cy="189.504" cx="427.39110122492286" j="36" val="6" barHeight="12.096" barWidth="5.895049672067902"></path><g id="SvgjsG2541" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG2542" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2544" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2546" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2548" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2550" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2552" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2554" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2556" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2558" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2560" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2562" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2564" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2566" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2568" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2570" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2572" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2574" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2576" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2578" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2580" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2582" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2584" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2586" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2588" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2590" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2592" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2594" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2596" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2598" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2600" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2602" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2604" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2606" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2608" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2610" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2612" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2614" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g></g></g><g id="SvgjsG2616" class="apexcharts-series" seriesName="Social" rel="2" data:realIndex="1"><path id="SvgjsPath2620" d="M -2.947524836033951 199.586 L -2.947524836033951 195.554 L 2.947524836033951 195.554 L 2.947524836033951 199.586 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M -2.947524836033951 199.586 L -2.947524836033951 195.554 L 2.947524836033951 195.554 L 2.947524836033951 199.586 z" pathFrom="M -2.947524836033951 199.586 L -2.947524836033951 199.586 L 2.947524836033951 199.586 L 2.947524836033951 199.586 L 2.947524836033951 199.586 L 2.947524836033951 199.586 L 2.947524836033951 199.586 L -2.947524836033951 199.586 z" cy="195.553" cx="2.947524836033951" j="0" val="2" barHeight="4.032" barWidth="5.895049672067902"></path><path id="SvgjsPath2622" d="M 8.842574508101853 201.602 L 8.842574508101853 191.522 L 14.737624180169755 191.522 L 14.737624180169755 201.602 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 8.842574508101853 201.602 L 8.842574508101853 191.522 L 14.737624180169755 191.522 L 14.737624180169755 201.602 z" pathFrom="M 8.842574508101853 201.602 L 8.842574508101853 201.602 L 14.737624180169755 201.602 L 14.737624180169755 201.602 L 14.737624180169755 201.602 L 14.737624180169755 201.602 L 14.737624180169755 201.602 L 8.842574508101853 201.602 z" cy="191.521" cx="14.737624180169757" j="1" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2624" d="M 20.63267385223766 201.602 L 20.63267385223766 193.538 L 26.52772352430556 193.538 L 26.52772352430556 201.602 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 20.63267385223766 201.602 L 20.63267385223766 193.538 L 26.52772352430556 193.538 L 26.52772352430556 201.602 z" pathFrom="M 20.63267385223766 201.602 L 20.63267385223766 201.602 L 26.52772352430556 201.602 L 26.52772352430556 201.602 L 26.52772352430556 201.602 L 26.52772352430556 201.602 L 26.52772352430556 201.602 L 20.63267385223766 201.602 z" cy="193.537" cx="26.52772352430556" j="2" val="4" barHeight="8.064" barWidth="5.895049672067902"></path><path id="SvgjsPath2626" d="M 32.42277319637346 201.602 L 32.42277319637346 195.554 L 38.31782286844137 195.554 L 38.31782286844137 201.602 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 32.42277319637346 201.602 L 32.42277319637346 195.554 L 38.31782286844137 195.554 L 38.31782286844137 201.602 z" pathFrom="M 32.42277319637346 201.602 L 32.42277319637346 201.602 L 38.31782286844137 201.602 L 38.31782286844137 201.602 L 38.31782286844137 201.602 L 38.31782286844137 201.602 L 38.31782286844137 201.602 L 32.42277319637346 201.602 z" cy="195.553" cx="38.31782286844137" j="3" val="3" barHeight="6.048" barWidth="5.895049672067902"></path><path id="SvgjsPath2628" d="M 44.21287254050927 201.602 L 44.21287254050927 195.554 L 50.107922212577165 195.554 L 50.107922212577165 201.602 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 44.21287254050927 201.602 L 44.21287254050927 195.554 L 50.107922212577165 195.554 L 50.107922212577165 201.602 z" pathFrom="M 44.21287254050927 201.602 L 44.21287254050927 201.602 L 50.107922212577165 201.602 L 50.107922212577165 201.602 L 50.107922212577165 201.602 L 50.107922212577165 201.602 L 50.107922212577165 201.602 L 44.21287254050927 201.602 z" cy="195.553" cx="50.107922212577165" j="4" val="3" barHeight="6.048" barWidth="5.895049672067902"></path><path id="SvgjsPath2630" d="M 56.00297188464507 199.586 L 56.00297188464507 197.57000000000002 L 61.898021556712976 197.57000000000002 L 61.898021556712976 199.586 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 56.00297188464507 199.586 L 56.00297188464507 197.57000000000002 L 61.898021556712976 197.57000000000002 L 61.898021556712976 199.586 z" pathFrom="M 56.00297188464507 199.586 L 56.00297188464507 199.586 L 61.898021556712976 199.586 L 61.898021556712976 199.586 L 61.898021556712976 199.586 L 61.898021556712976 199.586 L 61.898021556712976 199.586 L 56.00297188464507 199.586 z" cy="197.56900000000002" cx="61.898021556712976" j="5" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2632" d="M 67.79307122878087 199.586 L 67.79307122878087 191.52200000000002 L 73.68812090084877 191.52200000000002 L 73.68812090084877 199.586 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 67.79307122878087 199.586 L 67.79307122878087 191.52200000000002 L 73.68812090084877 191.52200000000002 L 73.68812090084877 199.586 z" pathFrom="M 67.79307122878087 199.586 L 67.79307122878087 199.586 L 73.68812090084877 199.586 L 73.68812090084877 199.586 L 73.68812090084877 199.586 L 73.68812090084877 199.586 L 73.68812090084877 199.586 L 67.79307122878087 199.586 z" cy="191.52100000000002" cx="73.68812090084879" j="6" val="4" barHeight="8.064" barWidth="5.895049672067902"></path><path id="SvgjsPath2634" d="M 79.58317057291667 201.602 L 79.58317057291667 187.49 L 85.47822024498457 187.49 L 85.47822024498457 201.602 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 79.58317057291667 201.602 L 79.58317057291667 187.49 L 85.47822024498457 187.49 L 85.47822024498457 201.602 z" pathFrom="M 79.58317057291667 201.602 L 79.58317057291667 201.602 L 85.47822024498457 201.602 L 85.47822024498457 201.602 L 85.47822024498457 201.602 L 85.47822024498457 201.602 L 85.47822024498457 201.602 L 79.58317057291667 201.602 z" cy="187.489" cx="85.47822024498458" j="7" val="7" barHeight="14.112" barWidth="5.895049672067902"></path><path id="SvgjsPath2636" d="M 91.37326991705248 201.602 L 91.37326991705248 191.522 L 97.26831958912038 191.522 L 97.26831958912038 201.602 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 91.37326991705248 201.602 L 91.37326991705248 191.522 L 97.26831958912038 191.522 L 97.26831958912038 201.602 z" pathFrom="M 91.37326991705248 201.602 L 91.37326991705248 201.602 L 97.26831958912038 201.602 L 97.26831958912038 201.602 L 97.26831958912038 201.602 L 97.26831958912038 201.602 L 97.26831958912038 201.602 L 91.37326991705248 201.602 z" cy="191.521" cx="97.26831958912038" j="8" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2638" d="M 103.16336926118828 201.602 L 103.16336926118828 199.586 L 109.05841893325618 199.586 L 109.05841893325618 201.602 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 103.16336926118828 201.602 L 103.16336926118828 199.586 L 109.05841893325618 199.586 L 109.05841893325618 201.602 z" pathFrom="M 103.16336926118828 201.602 L 103.16336926118828 201.602 L 109.05841893325618 201.602 L 109.05841893325618 201.602 L 109.05841893325618 201.602 L 109.05841893325618 201.602 L 109.05841893325618 201.602 L 103.16336926118828 201.602 z" cy="199.585" cx="109.05841893325618" j="9" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2640" d="M 114.95346860532409 197.57 L 114.95346860532409 193.53799999999998 L 120.84851827739199 193.53799999999998 L 120.84851827739199 197.57 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 114.95346860532409 197.57 L 114.95346860532409 193.53799999999998 L 120.84851827739199 193.53799999999998 L 120.84851827739199 197.57 z" pathFrom="M 114.95346860532409 197.57 L 114.95346860532409 197.57 L 120.84851827739199 197.57 L 120.84851827739199 197.57 L 120.84851827739199 197.57 L 120.84851827739199 197.57 L 120.84851827739199 197.57 L 114.95346860532409 197.57 z" cy="193.53699999999998" cx="120.848518277392" j="10" val="2" barHeight="4.032" barWidth="5.895049672067902"></path><path id="SvgjsPath2642" d="M 126.7435679494599 177.41 L 126.7435679494599 167.32999999999998 L 132.6386176215278 167.32999999999998 L 132.6386176215278 177.41 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 126.7435679494599 177.41 L 126.7435679494599 167.32999999999998 L 132.6386176215278 167.32999999999998 L 132.6386176215278 177.41 z" pathFrom="M 126.7435679494599 177.41 L 126.7435679494599 177.41 L 132.6386176215278 177.41 L 132.6386176215278 177.41 L 132.6386176215278 177.41 L 132.6386176215278 177.41 L 132.6386176215278 177.41 L 126.7435679494599 177.41 z" cy="167.32899999999998" cx="132.6386176215278" j="11" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2644" d="M 138.5336672935957 191.522 L 138.5336672935957 185.474 L 144.4287169656636 185.474 L 144.4287169656636 191.522 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 138.5336672935957 191.522 L 138.5336672935957 185.474 L 144.4287169656636 185.474 L 144.4287169656636 191.522 z" pathFrom="M 138.5336672935957 191.522 L 138.5336672935957 191.522 L 144.4287169656636 191.522 L 144.4287169656636 191.522 L 144.4287169656636 191.522 L 144.4287169656636 191.522 L 144.4287169656636 191.522 L 138.5336672935957 191.522 z" cy="185.47299999999998" cx="144.4287169656636" j="12" val="3" barHeight="6.048" barWidth="5.895049672067902"></path><path id="SvgjsPath2646" d="M 150.3237666377315 185.474 L 150.3237666377315 181.44199999999998 L 156.2188163097994 181.44199999999998 L 156.2188163097994 185.474 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 150.3237666377315 185.474 L 150.3237666377315 181.44199999999998 L 156.2188163097994 181.44199999999998 L 156.2188163097994 185.474 z" pathFrom="M 150.3237666377315 185.474 L 150.3237666377315 185.474 L 156.2188163097994 185.474 L 156.2188163097994 185.474 L 156.2188163097994 185.474 L 156.2188163097994 185.474 L 156.2188163097994 185.474 L 150.3237666377315 185.474 z" cy="181.44099999999997" cx="156.2188163097994" j="13" val="2" barHeight="4.032" barWidth="5.895049672067902"></path><path id="SvgjsPath2648" d="M 162.1138659818673 157.25 L 162.1138659818673 145.154 L 168.0089156539352 145.154 L 168.0089156539352 157.25 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 162.1138659818673 157.25 L 162.1138659818673 145.154 L 168.0089156539352 145.154 L 168.0089156539352 157.25 z" pathFrom="M 162.1138659818673 157.25 L 162.1138659818673 157.25 L 168.0089156539352 157.25 L 168.0089156539352 157.25 L 168.0089156539352 157.25 L 168.0089156539352 157.25 L 168.0089156539352 157.25 L 162.1138659818673 157.25 z" cy="145.153" cx="168.0089156539352" j="14" val="6" barHeight="12.096" barWidth="5.895049672067902"></path><path id="SvgjsPath2650" d="M 173.9039653260031 189.506 L 173.9039653260031 175.394 L 179.799014998071 175.394 L 179.799014998071 189.506 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 173.9039653260031 189.506 L 173.9039653260031 175.394 L 179.799014998071 175.394 L 179.799014998071 189.506 z" pathFrom="M 173.9039653260031 189.506 L 173.9039653260031 189.506 L 179.799014998071 189.506 L 179.799014998071 189.506 L 179.799014998071 189.506 L 179.799014998071 189.506 L 179.799014998071 189.506 L 173.9039653260031 189.506 z" cy="175.393" cx="179.799014998071" j="15" val="7" barHeight="14.112" barWidth="5.895049672067902"></path><path id="SvgjsPath2652" d="M 185.6940646701389 185.474 L 185.6940646701389 171.362 L 191.5891143422068 171.362 L 191.5891143422068 185.474 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 185.6940646701389 185.474 L 185.6940646701389 171.362 L 191.5891143422068 171.362 L 191.5891143422068 185.474 z" pathFrom="M 185.6940646701389 185.474 L 185.6940646701389 185.474 L 191.5891143422068 185.474 L 191.5891143422068 185.474 L 191.5891143422068 185.474 L 191.5891143422068 185.474 L 191.5891143422068 185.474 L 185.6940646701389 185.474 z" cy="171.361" cx="191.5891143422068" j="16" val="7" barHeight="14.112" barWidth="5.895049672067902"></path><path id="SvgjsPath2654" d="M 197.4841640142747 189.506 L 197.4841640142747 187.49 L 203.3792136863426 187.49 L 203.3792136863426 189.506 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 197.4841640142747 189.506 L 197.4841640142747 187.49 L 203.3792136863426 187.49 L 203.3792136863426 189.506 z" pathFrom="M 197.4841640142747 189.506 L 197.4841640142747 189.506 L 203.3792136863426 189.506 L 203.3792136863426 189.506 L 203.3792136863426 189.506 L 203.3792136863426 189.506 L 203.3792136863426 189.506 L 197.4841640142747 189.506 z" cy="187.489" cx="203.3792136863426" j="17" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2656" d="M 209.2742633584105 193.538 L 209.2742633584105 183.458 L 215.1693130304784 183.458 L 215.1693130304784 193.538 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 209.2742633584105 193.538 L 209.2742633584105 183.458 L 215.1693130304784 183.458 L 215.1693130304784 193.538 z" pathFrom="M 209.2742633584105 193.538 L 209.2742633584105 193.538 L 215.1693130304784 193.538 L 215.1693130304784 193.538 L 215.1693130304784 193.538 L 215.1693130304784 193.538 L 215.1693130304784 193.538 L 209.2742633584105 193.538 z" cy="183.457" cx="215.1693130304784" j="18" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2658" d="M 221.0643627025463 199.586 L 221.0643627025463 189.506 L 226.9594123746142 189.506 L 226.9594123746142 199.586 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 221.0643627025463 199.586 L 221.0643627025463 189.506 L 226.9594123746142 189.506 L 226.9594123746142 199.586 z" pathFrom="M 221.0643627025463 199.586 L 221.0643627025463 199.586 L 226.9594123746142 199.586 L 226.9594123746142 199.586 L 226.9594123746142 199.586 L 226.9594123746142 199.586 L 226.9594123746142 199.586 L 221.0643627025463 199.586 z" cy="189.505" cx="226.9594123746142" j="19" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2660" d="M 232.85446204668213 185.474 L 232.85446204668213 181.44199999999998 L 238.74951171875003 181.44199999999998 L 238.74951171875003 185.474 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 232.85446204668213 185.474 L 232.85446204668213 181.44199999999998 L 238.74951171875003 181.44199999999998 L 238.74951171875003 185.474 z" pathFrom="M 232.85446204668213 185.474 L 232.85446204668213 185.474 L 238.74951171875003 185.474 L 238.74951171875003 185.474 L 238.74951171875003 185.474 L 238.74951171875003 185.474 L 238.74951171875003 185.474 L 232.85446204668213 185.474 z" cy="181.44099999999997" cx="238.74951171875003" j="20" val="2" barHeight="4.032" barWidth="5.895049672067902"></path><path id="SvgjsPath2662" d="M 244.64456139081793 153.21800000000002 L 244.64456139081793 129.026 L 250.53961106288583 129.026 L 250.53961106288583 153.21800000000002 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 244.64456139081793 153.21800000000002 L 244.64456139081793 129.026 L 250.53961106288583 129.026 L 250.53961106288583 153.21800000000002 z" pathFrom="M 244.64456139081793 153.21800000000002 L 244.64456139081793 153.21800000000002 L 250.53961106288583 153.21800000000002 L 250.53961106288583 153.21800000000002 L 250.53961106288583 153.21800000000002 L 250.53961106288583 153.21800000000002 L 250.53961106288583 153.21800000000002 L 244.64456139081793 153.21800000000002 z" cy="129.025" cx="250.53961106288585" j="21" val="12" barHeight="24.192" barWidth="5.895049672067902"></path><path id="SvgjsPath2664" d="M 256.43466073495375 143.138 L 256.43466073495375 135.074 L 262.32971040702165 135.074 L 262.32971040702165 143.138 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 256.43466073495375 143.138 L 256.43466073495375 135.074 L 262.32971040702165 135.074 L 262.32971040702165 143.138 z" pathFrom="M 256.43466073495375 143.138 L 256.43466073495375 143.138 L 262.32971040702165 143.138 L 262.32971040702165 143.138 L 262.32971040702165 143.138 L 262.32971040702165 143.138 L 262.32971040702165 143.138 L 256.43466073495375 143.138 z" cy="135.073" cx="262.32971040702165" j="22" val="4" barHeight="8.064" barWidth="5.895049672067902"></path><path id="SvgjsPath2666" d="M 268.22476007908955 98.786 L 268.22476007908955 86.69 L 274.11980975115745 86.69 L 274.11980975115745 98.786 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 268.22476007908955 98.786 L 268.22476007908955 86.69 L 274.11980975115745 86.69 L 274.11980975115745 98.786 z" pathFrom="M 268.22476007908955 98.786 L 268.22476007908955 98.786 L 274.11980975115745 98.786 L 274.11980975115745 98.786 L 274.11980975115745 98.786 L 274.11980975115745 98.786 L 274.11980975115745 98.786 L 268.22476007908955 98.786 z" cy="86.689" cx="274.11980975115745" j="23" val="6" barHeight="12.096" barWidth="5.895049672067902"></path><path id="SvgjsPath2668" d="M 280.01485942322535 120.962 L 280.01485942322535 84.674 L 285.90990909529324 84.674 L 285.90990909529324 120.962 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 280.01485942322535 120.962 L 280.01485942322535 84.674 L 285.90990909529324 84.674 L 285.90990909529324 120.962 z" pathFrom="M 280.01485942322535 120.962 L 280.01485942322535 120.962 L 285.90990909529324 120.962 L 285.90990909529324 120.962 L 285.90990909529324 120.962 L 285.90990909529324 120.962 L 285.90990909529324 120.962 L 280.01485942322535 120.962 z" cy="84.673" cx="285.90990909529324" j="24" val="18" barHeight="36.288" barWidth="5.895049672067902"></path><path id="SvgjsPath2670" d="M 291.80495876736114 106.85000000000001 L 291.80495876736114 100.802 L 297.70000843942904 100.802 L 297.70000843942904 106.85000000000001 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 291.80495876736114 106.85000000000001 L 291.80495876736114 100.802 L 297.70000843942904 100.802 L 297.70000843942904 106.85000000000001 z" pathFrom="M 291.80495876736114 106.85000000000001 L 291.80495876736114 106.85000000000001 L 297.70000843942904 106.85000000000001 L 297.70000843942904 106.85000000000001 L 297.70000843942904 106.85000000000001 L 297.70000843942904 106.85000000000001 L 297.70000843942904 106.85000000000001 L 291.80495876736114 106.85000000000001 z" cy="100.801" cx="297.70000843942904" j="25" val="3" barHeight="6.048" barWidth="5.895049672067902"></path><path id="SvgjsPath2672" d="M 303.59505811149694 155.234 L 303.59505811149694 145.154 L 309.49010778356484 145.154 L 309.49010778356484 155.234 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 303.59505811149694 155.234 L 303.59505811149694 145.154 L 309.49010778356484 145.154 L 309.49010778356484 155.234 z" pathFrom="M 303.59505811149694 155.234 L 303.59505811149694 155.234 L 309.49010778356484 155.234 L 309.49010778356484 155.234 L 309.49010778356484 155.234 L 309.49010778356484 155.234 L 309.49010778356484 155.234 L 303.59505811149694 155.234 z" cy="145.153" cx="309.49010778356484" j="26" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2674" d="M 315.38515745563274 149.186 L 315.38515745563274 145.154 L 321.28020712770063 145.154 L 321.28020712770063 149.186 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 315.38515745563274 149.186 L 315.38515745563274 145.154 L 321.28020712770063 145.154 L 321.28020712770063 149.186 z" pathFrom="M 315.38515745563274 149.186 L 315.38515745563274 149.186 L 321.28020712770063 149.186 L 321.28020712770063 149.186 L 321.28020712770063 149.186 L 321.28020712770063 149.186 L 321.28020712770063 149.186 L 315.38515745563274 149.186 z" cy="145.153" cx="321.28020712770063" j="27" val="2" barHeight="4.032" barWidth="5.895049672067902"></path><path id="SvgjsPath2676" d="M 327.17525679976853 100.802 L 327.17525679976853 74.59400000000001 L 333.07030647183643 74.59400000000001 L 333.07030647183643 100.802 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 327.17525679976853 100.802 L 327.17525679976853 74.59400000000001 L 333.07030647183643 74.59400000000001 L 333.07030647183643 100.802 z" pathFrom="M 327.17525679976853 100.802 L 327.17525679976853 100.802 L 333.07030647183643 100.802 L 333.07030647183643 100.802 L 333.07030647183643 100.802 L 333.07030647183643 100.802 L 333.07030647183643 100.802 L 327.17525679976853 100.802 z" cy="74.593" cx="333.07030647183643" j="28" val="13" barHeight="26.208" barWidth="5.895049672067902"></path><path id="SvgjsPath2678" d="M 338.96535614390433 149.186 L 338.96535614390433 118.94600000000001 L 344.86040581597223 118.94600000000001 L 344.86040581597223 149.186 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 338.96535614390433 149.186 L 338.96535614390433 118.94600000000001 L 344.86040581597223 118.94600000000001 L 344.86040581597223 149.186 z" pathFrom="M 338.96535614390433 149.186 L 338.96535614390433 149.186 L 344.86040581597223 149.186 L 344.86040581597223 149.186 L 344.86040581597223 149.186 L 344.86040581597223 149.186 L 344.86040581597223 149.186 L 338.96535614390433 149.186 z" cy="118.94500000000001" cx="344.86040581597223" j="29" val="15" barHeight="30.24" barWidth="5.895049672067902"></path><path id="SvgjsPath2680" d="M 350.7554554880401 118.94600000000001 L 350.7554554880401 78.626 L 356.650505160108 78.626 L 356.650505160108 118.94600000000001 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 350.7554554880401 118.94600000000001 L 350.7554554880401 78.626 L 356.650505160108 78.626 L 356.650505160108 118.94600000000001 z" pathFrom="M 350.7554554880401 118.94600000000001 L 350.7554554880401 118.94600000000001 L 356.650505160108 118.94600000000001 L 356.650505160108 118.94600000000001 L 356.650505160108 118.94600000000001 L 356.650505160108 118.94600000000001 L 356.650505160108 118.94600000000001 L 350.7554554880401 118.94600000000001 z" cy="78.625" cx="356.650505160108" j="30" val="20" barHeight="40.32" barWidth="5.895049672067902"></path><path id="SvgjsPath2682" d="M 362.545554832176 157.25 L 362.545554832176 62.498 L 368.4406045042439 62.498 L 368.4406045042439 157.25 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 362.545554832176 157.25 L 362.545554832176 62.498 L 368.4406045042439 62.498 L 368.4406045042439 157.25 z" pathFrom="M 362.545554832176 157.25 L 362.545554832176 157.25 L 368.4406045042439 157.25 L 368.4406045042439 157.25 L 368.4406045042439 157.25 L 368.4406045042439 157.25 L 368.4406045042439 157.25 L 362.545554832176 157.25 z" cy="62.497" cx="368.4406045042439" j="31" val="47" barHeight="94.752" barWidth="5.895049672067902"></path><path id="SvgjsPath2684" d="M 374.3356541763118 108.866 L 374.3356541763118 72.578 L 380.2307038483797 72.578 L 380.2307038483797 108.866 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 374.3356541763118 108.866 L 374.3356541763118 72.578 L 380.2307038483797 72.578 L 380.2307038483797 108.866 z" pathFrom="M 374.3356541763118 108.866 L 374.3356541763118 108.866 L 380.2307038483797 108.866 L 380.2307038483797 108.866 L 380.2307038483797 108.866 L 380.2307038483797 108.866 L 380.2307038483797 108.866 L 374.3356541763118 108.866 z" cy="72.577" cx="380.2307038483797" j="32" val="18" barHeight="36.288" barWidth="5.895049672067902"></path><path id="SvgjsPath2686" d="M 386.1257535204476 106.85000000000001 L 386.1257535204476 76.61000000000001 L 392.0208031925155 76.61000000000001 L 392.0208031925155 106.85000000000001 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 386.1257535204476 106.85000000000001 L 386.1257535204476 76.61000000000001 L 392.0208031925155 76.61000000000001 L 392.0208031925155 106.85000000000001 z" pathFrom="M 386.1257535204476 106.85000000000001 L 386.1257535204476 106.85000000000001 L 392.0208031925155 106.85000000000001 L 392.0208031925155 106.85000000000001 L 392.0208031925155 106.85000000000001 L 392.0208031925155 106.85000000000001 L 392.0208031925155 106.85000000000001 L 386.1257535204476 106.85000000000001 z" cy="76.60900000000001" cx="392.0208031925155" j="33" val="15" barHeight="30.24" barWidth="5.895049672067902"></path><path id="SvgjsPath2688" d="M 397.91585286458337 38.306 L 397.91585286458337 16.130000000000003 L 403.81090253665127 16.130000000000003 L 403.81090253665127 38.306 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 397.91585286458337 38.306 L 397.91585286458337 16.130000000000003 L 403.81090253665127 16.130000000000003 L 403.81090253665127 38.306 z" pathFrom="M 397.91585286458337 38.306 L 397.91585286458337 38.306 L 403.81090253665127 38.306 L 403.81090253665127 38.306 L 403.81090253665127 38.306 L 403.81090253665127 38.306 L 403.81090253665127 38.306 L 397.91585286458337 38.306 z" cy="16.129" cx="403.81090253665127" j="34" val="11" barHeight="22.176" barWidth="5.895049672067902"></path><path id="SvgjsPath2690" d="M 409.70595220871917 108.866 L 409.70595220871917 88.706 L 415.60100188078707 88.706 L 415.60100188078707 108.866 z" fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 409.70595220871917 108.866 L 409.70595220871917 88.706 L 415.60100188078707 88.706 L 415.60100188078707 108.866 z" pathFrom="M 409.70595220871917 108.866 L 409.70595220871917 108.866 L 415.60100188078707 108.866 L 415.60100188078707 108.866 L 415.60100188078707 108.866 L 415.60100188078707 108.866 L 415.60100188078707 108.866 L 409.70595220871917 108.866 z" cy="88.705" cx="415.60100188078707" j="35" val="10" barHeight="20.16" barWidth="5.895049672067902"></path><path id="SvgjsPath2692" d="M 421.49605155285496 189.506 L 421.49605155285496 189.506 L 427.39110122492286 189.506 L 427.39110122492286 189.506 z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 421.49605155285496 189.506 L 421.49605155285496 189.506 L 427.39110122492286 189.506 L 427.39110122492286 189.506 z" pathFrom="M 421.49605155285496 189.506 L 421.49605155285496 189.506 L 427.39110122492286 189.506 L 427.39110122492286 189.506 L 427.39110122492286 189.506 L 427.39110122492286 189.506 L 427.39110122492286 189.506 L 421.49605155285496 189.506 z" cy="189.505" cx="427.39110122492286" j="36" val="0" barHeight="0" barWidth="5.895049672067902"></path><g id="SvgjsG2618" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG2619" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2621" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2623" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2625" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2627" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2629" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2631" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2633" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2635" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2637" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2639" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2641" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2643" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2645" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2647" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2649" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2651" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2653" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2655" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2657" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2659" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2661" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2663" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2665" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2667" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2669" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2671" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2673" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2675" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2677" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2679" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2681" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2683" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2685" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2687" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2689" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2691" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g></g></g><g id="SvgjsG2693" class="apexcharts-series" seriesName="Other" rel="3" data:realIndex="2"><path id="SvgjsPath2697" d="M -2.947524836033951 195.555 L -2.947524836033951 191.523 L 2.947524836033951 191.523 L 2.947524836033951 195.555 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M -2.947524836033951 195.555 L -2.947524836033951 191.523 L 2.947524836033951 191.523 L 2.947524836033951 195.555 z" pathFrom="M -2.947524836033951 195.555 L -2.947524836033951 195.555 L 2.947524836033951 195.555 L 2.947524836033951 195.555 L 2.947524836033951 195.555 L 2.947524836033951 195.555 L 2.947524836033951 195.555 L -2.947524836033951 195.555 z" cy="191.522" cx="2.947524836033951" j="0" val="2" barHeight="4.032" barWidth="5.895049672067902"></path><path id="SvgjsPath2699" d="M 8.842574508101853 191.523 L 8.842574508101853 173.379 L 14.737624180169755 173.379 L 14.737624180169755 191.523 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 8.842574508101853 191.523 L 8.842574508101853 173.379 L 14.737624180169755 173.379 L 14.737624180169755 191.523 z" pathFrom="M 8.842574508101853 191.523 L 8.842574508101853 191.523 L 14.737624180169755 191.523 L 14.737624180169755 191.523 L 14.737624180169755 191.523 L 14.737624180169755 191.523 L 14.737624180169755 191.523 L 8.842574508101853 191.523 z" cy="173.378" cx="14.737624180169757" j="1" val="9" barHeight="18.144" barWidth="5.895049672067902"></path><path id="SvgjsPath2701" d="M 20.63267385223766 193.53900000000002 L 20.63267385223766 191.52300000000002 L 26.52772352430556 191.52300000000002 L 26.52772352430556 193.53900000000002 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 20.63267385223766 193.53900000000002 L 20.63267385223766 191.52300000000002 L 26.52772352430556 191.52300000000002 L 26.52772352430556 193.53900000000002 z" pathFrom="M 20.63267385223766 193.53900000000002 L 20.63267385223766 193.53900000000002 L 26.52772352430556 193.53900000000002 L 26.52772352430556 193.53900000000002 L 26.52772352430556 193.53900000000002 L 26.52772352430556 193.53900000000002 L 26.52772352430556 193.53900000000002 L 20.63267385223766 193.53900000000002 z" cy="191.52200000000002" cx="26.52772352430556" j="2" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2703" d="M 32.42277319637346 195.555 L 32.42277319637346 181.443 L 38.31782286844137 181.443 L 38.31782286844137 195.555 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 32.42277319637346 195.555 L 32.42277319637346 181.443 L 38.31782286844137 181.443 L 38.31782286844137 195.555 z" pathFrom="M 32.42277319637346 195.555 L 32.42277319637346 195.555 L 38.31782286844137 195.555 L 38.31782286844137 195.555 L 38.31782286844137 195.555 L 38.31782286844137 195.555 L 38.31782286844137 195.555 L 32.42277319637346 195.555 z" cy="181.442" cx="38.31782286844137" j="3" val="7" barHeight="14.112" barWidth="5.895049672067902"></path><path id="SvgjsPath2705" d="M 44.21287254050927 195.555 L 44.21287254050927 179.427 L 50.107922212577165 179.427 L 50.107922212577165 195.555 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 44.21287254050927 195.555 L 44.21287254050927 179.427 L 50.107922212577165 179.427 L 50.107922212577165 195.555 z" pathFrom="M 44.21287254050927 195.555 L 44.21287254050927 195.555 L 50.107922212577165 195.555 L 50.107922212577165 195.555 L 50.107922212577165 195.555 L 50.107922212577165 195.555 L 50.107922212577165 195.555 L 44.21287254050927 195.555 z" cy="179.426" cx="50.107922212577165" j="4" val="8" barHeight="16.128" barWidth="5.895049672067902"></path><path id="SvgjsPath2707" d="M 56.00297188464507 197.57100000000003 L 56.00297188464507 191.52300000000002 L 61.898021556712976 191.52300000000002 L 61.898021556712976 197.57100000000003 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 56.00297188464507 197.57100000000003 L 56.00297188464507 191.52300000000002 L 61.898021556712976 191.52300000000002 L 61.898021556712976 197.57100000000003 z" pathFrom="M 56.00297188464507 197.57100000000003 L 56.00297188464507 197.57100000000003 L 61.898021556712976 197.57100000000003 L 61.898021556712976 197.57100000000003 L 61.898021556712976 197.57100000000003 L 61.898021556712976 197.57100000000003 L 61.898021556712976 197.57100000000003 L 56.00297188464507 197.57100000000003 z" cy="191.52200000000002" cx="61.898021556712976" j="5" val="3" barHeight="6.048" barWidth="5.895049672067902"></path><path id="SvgjsPath2709" d="M 67.79307122878087 191.52300000000002 L 67.79307122878087 179.42700000000002 L 73.68812090084877 179.42700000000002 L 73.68812090084877 191.52300000000002 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 67.79307122878087 191.52300000000002 L 67.79307122878087 179.42700000000002 L 73.68812090084877 179.42700000000002 L 73.68812090084877 191.52300000000002 z" pathFrom="M 67.79307122878087 191.52300000000002 L 67.79307122878087 191.52300000000002 L 73.68812090084877 191.52300000000002 L 73.68812090084877 191.52300000000002 L 73.68812090084877 191.52300000000002 L 73.68812090084877 191.52300000000002 L 73.68812090084877 191.52300000000002 L 67.79307122878087 191.52300000000002 z" cy="179.42600000000002" cx="73.68812090084879" j="6" val="6" barHeight="12.096" barWidth="5.895049672067902"></path><path id="SvgjsPath2711" d="M 79.58317057291667 187.491 L 79.58317057291667 177.411 L 85.47822024498457 177.411 L 85.47822024498457 187.491 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 79.58317057291667 187.491 L 79.58317057291667 177.411 L 85.47822024498457 177.411 L 85.47822024498457 187.491 z" pathFrom="M 79.58317057291667 187.491 L 79.58317057291667 187.491 L 85.47822024498457 187.491 L 85.47822024498457 187.491 L 85.47822024498457 187.491 L 85.47822024498457 187.491 L 85.47822024498457 187.491 L 79.58317057291667 187.491 z" cy="177.41" cx="85.47822024498458" j="7" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2713" d="M 91.37326991705248 191.523 L 91.37326991705248 181.44299999999998 L 97.26831958912038 181.44299999999998 L 97.26831958912038 191.523 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 91.37326991705248 191.523 L 91.37326991705248 181.44299999999998 L 97.26831958912038 181.44299999999998 L 97.26831958912038 191.523 z" pathFrom="M 91.37326991705248 191.523 L 91.37326991705248 191.523 L 97.26831958912038 191.523 L 97.26831958912038 191.523 L 97.26831958912038 191.523 L 97.26831958912038 191.523 L 97.26831958912038 191.523 L 91.37326991705248 191.523 z" cy="181.44199999999998" cx="97.26831958912038" j="8" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2715" d="M 103.16336926118828 199.58700000000002 L 103.16336926118828 191.52300000000002 L 109.05841893325618 191.52300000000002 L 109.05841893325618 199.58700000000002 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 103.16336926118828 199.58700000000002 L 103.16336926118828 191.52300000000002 L 109.05841893325618 191.52300000000002 L 109.05841893325618 199.58700000000002 z" pathFrom="M 103.16336926118828 199.58700000000002 L 103.16336926118828 199.58700000000002 L 109.05841893325618 199.58700000000002 L 109.05841893325618 199.58700000000002 L 109.05841893325618 199.58700000000002 L 109.05841893325618 199.58700000000002 L 109.05841893325618 199.58700000000002 L 103.16336926118828 199.58700000000002 z" cy="191.52200000000002" cx="109.05841893325618" j="9" val="4" barHeight="8.064" barWidth="5.895049672067902"></path><path id="SvgjsPath2717" d="M 114.95346860532409 193.539 L 114.95346860532409 181.44299999999998 L 120.84851827739199 181.44299999999998 L 120.84851827739199 193.539 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 114.95346860532409 193.539 L 114.95346860532409 181.44299999999998 L 120.84851827739199 181.44299999999998 L 120.84851827739199 193.539 z" pathFrom="M 114.95346860532409 193.539 L 114.95346860532409 193.539 L 120.84851827739199 193.539 L 120.84851827739199 193.539 L 120.84851827739199 193.539 L 120.84851827739199 193.539 L 120.84851827739199 193.539 L 114.95346860532409 193.539 z" cy="181.44199999999998" cx="120.848518277392" j="10" val="6" barHeight="12.096" barWidth="5.895049672067902"></path><path id="SvgjsPath2719" d="M 126.7435679494599 167.331 L 126.7435679494599 159.267 L 132.6386176215278 159.267 L 132.6386176215278 167.331 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 126.7435679494599 167.331 L 126.7435679494599 159.267 L 132.6386176215278 159.267 L 132.6386176215278 167.331 z" pathFrom="M 126.7435679494599 167.331 L 126.7435679494599 167.331 L 132.6386176215278 167.331 L 132.6386176215278 167.331 L 132.6386176215278 167.331 L 132.6386176215278 167.331 L 132.6386176215278 167.331 L 126.7435679494599 167.331 z" cy="159.266" cx="132.6386176215278" j="11" val="4" barHeight="8.064" barWidth="5.895049672067902"></path><path id="SvgjsPath2721" d="M 138.5336672935957 185.475 L 138.5336672935957 183.459 L 144.4287169656636 183.459 L 144.4287169656636 185.475 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 138.5336672935957 185.475 L 138.5336672935957 183.459 L 144.4287169656636 183.459 L 144.4287169656636 185.475 z" pathFrom="M 138.5336672935957 185.475 L 138.5336672935957 185.475 L 144.4287169656636 185.475 L 144.4287169656636 185.475 L 144.4287169656636 185.475 L 144.4287169656636 185.475 L 144.4287169656636 185.475 L 138.5336672935957 185.475 z" cy="183.458" cx="144.4287169656636" j="12" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2723" d="M 150.3237666377315 181.44299999999998 L 150.3237666377315 163.29899999999998 L 156.2188163097994 163.29899999999998 L 156.2188163097994 181.44299999999998 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 150.3237666377315 181.44299999999998 L 150.3237666377315 163.29899999999998 L 156.2188163097994 163.29899999999998 L 156.2188163097994 181.44299999999998 z" pathFrom="M 150.3237666377315 181.44299999999998 L 150.3237666377315 181.44299999999998 L 156.2188163097994 181.44299999999998 L 156.2188163097994 181.44299999999998 L 156.2188163097994 181.44299999999998 L 156.2188163097994 181.44299999999998 L 156.2188163097994 181.44299999999998 L 150.3237666377315 181.44299999999998 z" cy="163.29799999999997" cx="156.2188163097994" j="13" val="9" barHeight="18.144" barWidth="5.895049672067902"></path><path id="SvgjsPath2725" d="M 162.1138659818673 145.155 L 162.1138659818673 139.107 L 168.0089156539352 139.107 L 168.0089156539352 145.155 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 162.1138659818673 145.155 L 162.1138659818673 139.107 L 168.0089156539352 139.107 L 168.0089156539352 145.155 z" pathFrom="M 162.1138659818673 145.155 L 162.1138659818673 145.155 L 168.0089156539352 145.155 L 168.0089156539352 145.155 L 168.0089156539352 145.155 L 168.0089156539352 145.155 L 168.0089156539352 145.155 L 162.1138659818673 145.155 z" cy="139.106" cx="168.0089156539352" j="14" val="3" barHeight="6.048" barWidth="5.895049672067902"></path><path id="SvgjsPath2727" d="M 173.9039653260031 175.395 L 173.9039653260031 163.299 L 179.799014998071 163.299 L 179.799014998071 175.395 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 173.9039653260031 175.395 L 173.9039653260031 163.299 L 179.799014998071 163.299 L 179.799014998071 175.395 z" pathFrom="M 173.9039653260031 175.395 L 173.9039653260031 175.395 L 179.799014998071 175.395 L 179.799014998071 175.395 L 179.799014998071 175.395 L 179.799014998071 175.395 L 179.799014998071 175.395 L 173.9039653260031 175.395 z" cy="163.298" cx="179.799014998071" j="15" val="6" barHeight="12.096" barWidth="5.895049672067902"></path><path id="SvgjsPath2729" d="M 185.6940646701389 171.363 L 185.6940646701389 157.251 L 191.5891143422068 157.251 L 191.5891143422068 171.363 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 185.6940646701389 171.363 L 185.6940646701389 157.251 L 191.5891143422068 157.251 L 191.5891143422068 171.363 z" pathFrom="M 185.6940646701389 171.363 L 185.6940646701389 171.363 L 191.5891143422068 171.363 L 191.5891143422068 171.363 L 191.5891143422068 171.363 L 191.5891143422068 171.363 L 191.5891143422068 171.363 L 185.6940646701389 171.363 z" cy="157.25" cx="191.5891143422068" j="16" val="7" barHeight="14.112" barWidth="5.895049672067902"></path><path id="SvgjsPath2731" d="M 197.4841640142747 187.491 L 197.4841640142747 177.411 L 203.3792136863426 177.411 L 203.3792136863426 187.491 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 197.4841640142747 187.491 L 197.4841640142747 177.411 L 203.3792136863426 177.411 L 203.3792136863426 187.491 z" pathFrom="M 197.4841640142747 187.491 L 197.4841640142747 187.491 L 203.3792136863426 187.491 L 203.3792136863426 187.491 L 203.3792136863426 187.491 L 203.3792136863426 187.491 L 203.3792136863426 187.491 L 197.4841640142747 187.491 z" cy="177.41" cx="203.3792136863426" j="17" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2733" d="M 209.2742633584105 183.459 L 209.2742633584105 179.427 L 215.1693130304784 179.427 L 215.1693130304784 183.459 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 209.2742633584105 183.459 L 209.2742633584105 179.427 L 215.1693130304784 179.427 L 215.1693130304784 183.459 z" pathFrom="M 209.2742633584105 183.459 L 209.2742633584105 183.459 L 215.1693130304784 183.459 L 215.1693130304784 183.459 L 215.1693130304784 183.459 L 215.1693130304784 183.459 L 215.1693130304784 183.459 L 209.2742633584105 183.459 z" cy="179.426" cx="215.1693130304784" j="18" val="2" barHeight="4.032" barWidth="5.895049672067902"></path><path id="SvgjsPath2735" d="M 221.0643627025463 189.507 L 221.0643627025463 173.379 L 226.9594123746142 173.379 L 226.9594123746142 189.507 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 221.0643627025463 189.507 L 221.0643627025463 173.379 L 226.9594123746142 173.379 L 226.9594123746142 189.507 z" pathFrom="M 221.0643627025463 189.507 L 221.0643627025463 189.507 L 226.9594123746142 189.507 L 226.9594123746142 189.507 L 226.9594123746142 189.507 L 226.9594123746142 189.507 L 226.9594123746142 189.507 L 221.0643627025463 189.507 z" cy="173.378" cx="226.9594123746142" j="19" val="8" barHeight="16.128" barWidth="5.895049672067902"></path><path id="SvgjsPath2737" d="M 232.85446204668213 181.44299999999998 L 232.85446204668213 173.379 L 238.74951171875003 173.379 L 238.74951171875003 181.44299999999998 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 232.85446204668213 181.44299999999998 L 232.85446204668213 173.379 L 238.74951171875003 173.379 L 238.74951171875003 181.44299999999998 z" pathFrom="M 232.85446204668213 181.44299999999998 L 232.85446204668213 181.44299999999998 L 238.74951171875003 181.44299999999998 L 238.74951171875003 181.44299999999998 L 238.74951171875003 181.44299999999998 L 238.74951171875003 181.44299999999998 L 238.74951171875003 181.44299999999998 L 232.85446204668213 181.44299999999998 z" cy="173.378" cx="238.74951171875003" j="20" val="4" barHeight="8.064" barWidth="5.895049672067902"></path><path id="SvgjsPath2739" d="M 244.64456139081793 129.02700000000002 L 244.64456139081793 110.88300000000001 L 250.53961106288583 110.88300000000001 L 250.53961106288583 129.02700000000002 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 244.64456139081793 129.02700000000002 L 244.64456139081793 110.88300000000001 L 250.53961106288583 110.88300000000001 L 250.53961106288583 129.02700000000002 z" pathFrom="M 244.64456139081793 129.02700000000002 L 244.64456139081793 129.02700000000002 L 250.53961106288583 129.02700000000002 L 250.53961106288583 129.02700000000002 L 250.53961106288583 129.02700000000002 L 250.53961106288583 129.02700000000002 L 250.53961106288583 129.02700000000002 L 244.64456139081793 129.02700000000002 z" cy="110.882" cx="250.53961106288585" j="21" val="9" barHeight="18.144" barWidth="5.895049672067902"></path><path id="SvgjsPath2741" d="M 256.43466073495375 135.07500000000002 L 256.43466073495375 133.05900000000003 L 262.32971040702165 133.05900000000003 L 262.32971040702165 135.07500000000002 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 256.43466073495375 135.07500000000002 L 256.43466073495375 133.05900000000003 L 262.32971040702165 133.05900000000003 L 262.32971040702165 135.07500000000002 z" pathFrom="M 256.43466073495375 135.07500000000002 L 256.43466073495375 135.07500000000002 L 262.32971040702165 135.07500000000002 L 262.32971040702165 135.07500000000002 L 262.32971040702165 135.07500000000002 L 262.32971040702165 135.07500000000002 L 262.32971040702165 135.07500000000002 L 256.43466073495375 135.07500000000002 z" cy="133.05800000000002" cx="262.32971040702165" j="22" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2743" d="M 268.22476007908955 86.691 L 268.22476007908955 82.659 L 274.11980975115745 82.659 L 274.11980975115745 86.691 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 268.22476007908955 86.691 L 268.22476007908955 82.659 L 274.11980975115745 82.659 L 274.11980975115745 86.691 z" pathFrom="M 268.22476007908955 86.691 L 268.22476007908955 86.691 L 274.11980975115745 86.691 L 274.11980975115745 86.691 L 274.11980975115745 86.691 L 274.11980975115745 86.691 L 274.11980975115745 86.691 L 268.22476007908955 86.691 z" cy="82.658" cx="274.11980975115745" j="23" val="2" barHeight="4.032" barWidth="5.895049672067902"></path><path id="SvgjsPath2745" d="M 280.01485942322535 84.67500000000001 L 280.01485942322535 72.57900000000001 L 285.90990909529324 72.57900000000001 L 285.90990909529324 84.67500000000001 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 280.01485942322535 84.67500000000001 L 280.01485942322535 72.57900000000001 L 285.90990909529324 72.57900000000001 L 285.90990909529324 84.67500000000001 z" pathFrom="M 280.01485942322535 84.67500000000001 L 280.01485942322535 84.67500000000001 L 285.90990909529324 84.67500000000001 L 285.90990909529324 84.67500000000001 L 285.90990909529324 84.67500000000001 L 285.90990909529324 84.67500000000001 L 285.90990909529324 84.67500000000001 L 280.01485942322535 84.67500000000001 z" cy="72.578" cx="285.90990909529324" j="24" val="6" barHeight="12.096" barWidth="5.895049672067902"></path><path id="SvgjsPath2747" d="M 291.80495876736114 100.80300000000001 L 291.80495876736114 86.69100000000002 L 297.70000843942904 86.69100000000002 L 297.70000843942904 100.80300000000001 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 291.80495876736114 100.80300000000001 L 291.80495876736114 86.69100000000002 L 297.70000843942904 86.69100000000002 L 297.70000843942904 100.80300000000001 z" pathFrom="M 291.80495876736114 100.80300000000001 L 291.80495876736114 100.80300000000001 L 297.70000843942904 100.80300000000001 L 297.70000843942904 100.80300000000001 L 297.70000843942904 100.80300000000001 L 297.70000843942904 100.80300000000001 L 297.70000843942904 100.80300000000001 L 291.80495876736114 100.80300000000001 z" cy="86.69000000000001" cx="297.70000843942904" j="25" val="7" barHeight="14.112" barWidth="5.895049672067902"></path><path id="SvgjsPath2749" d="M 303.59505811149694 145.155 L 303.59505811149694 135.075 L 309.49010778356484 135.075 L 309.49010778356484 145.155 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 303.59505811149694 145.155 L 303.59505811149694 135.075 L 309.49010778356484 135.075 L 309.49010778356484 145.155 z" pathFrom="M 303.59505811149694 145.155 L 303.59505811149694 145.155 L 309.49010778356484 145.155 L 309.49010778356484 145.155 L 309.49010778356484 145.155 L 309.49010778356484 145.155 L 309.49010778356484 145.155 L 303.59505811149694 145.155 z" cy="135.07399999999998" cx="309.49010778356484" j="26" val="5" barHeight="10.08" barWidth="5.895049672067902"></path><path id="SvgjsPath2751" d="M 315.38515745563274 145.155 L 315.38515745563274 143.139 L 321.28020712770063 143.139 L 321.28020712770063 145.155 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 315.38515745563274 145.155 L 315.38515745563274 143.139 L 321.28020712770063 143.139 L 321.28020712770063 145.155 z" pathFrom="M 315.38515745563274 145.155 L 315.38515745563274 145.155 L 321.28020712770063 145.155 L 321.28020712770063 145.155 L 321.28020712770063 145.155 L 321.28020712770063 145.155 L 321.28020712770063 145.155 L 315.38515745563274 145.155 z" cy="143.138" cx="321.28020712770063" j="27" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2753" d="M 327.17525679976853 74.59500000000001 L 327.17525679976853 58.467000000000006 L 333.07030647183643 58.467000000000006 L 333.07030647183643 74.59500000000001 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 327.17525679976853 74.59500000000001 L 327.17525679976853 58.467000000000006 L 333.07030647183643 58.467000000000006 L 333.07030647183643 74.59500000000001 z" pathFrom="M 327.17525679976853 74.59500000000001 L 327.17525679976853 74.59500000000001 L 333.07030647183643 74.59500000000001 L 333.07030647183643 74.59500000000001 L 333.07030647183643 74.59500000000001 L 333.07030647183643 74.59500000000001 L 333.07030647183643 74.59500000000001 L 327.17525679976853 74.59500000000001 z" cy="58.46600000000001" cx="333.07030647183643" j="28" val="8" barHeight="16.128" barWidth="5.895049672067902"></path><path id="SvgjsPath2755" d="M 338.96535614390433 118.94700000000002 L 338.96535614390433 112.89900000000002 L 344.86040581597223 112.89900000000002 L 344.86040581597223 118.94700000000002 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 338.96535614390433 118.94700000000002 L 338.96535614390433 112.89900000000002 L 344.86040581597223 112.89900000000002 L 344.86040581597223 118.94700000000002 z" pathFrom="M 338.96535614390433 118.94700000000002 L 338.96535614390433 118.94700000000002 L 344.86040581597223 118.94700000000002 L 344.86040581597223 118.94700000000002 L 344.86040581597223 118.94700000000002 L 344.86040581597223 118.94700000000002 L 344.86040581597223 118.94700000000002 L 338.96535614390433 118.94700000000002 z" cy="112.89800000000001" cx="344.86040581597223" j="29" val="3" barHeight="6.048" barWidth="5.895049672067902"></path><path id="SvgjsPath2757" d="M 350.7554554880401 78.62700000000001 L 350.7554554880401 74.59500000000001 L 356.650505160108 74.59500000000001 L 356.650505160108 78.62700000000001 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 350.7554554880401 78.62700000000001 L 350.7554554880401 74.59500000000001 L 356.650505160108 74.59500000000001 L 356.650505160108 78.62700000000001 z" pathFrom="M 350.7554554880401 78.62700000000001 L 350.7554554880401 78.62700000000001 L 356.650505160108 78.62700000000001 L 356.650505160108 78.62700000000001 L 356.650505160108 78.62700000000001 L 356.650505160108 78.62700000000001 L 356.650505160108 78.62700000000001 L 350.7554554880401 78.62700000000001 z" cy="74.59400000000001" cx="356.650505160108" j="30" val="2" barHeight="4.032" barWidth="5.895049672067902"></path><path id="SvgjsPath2759" d="M 362.545554832176 62.498999999999995 L 362.545554832176 56.45099999999999 L 368.4406045042439 56.45099999999999 L 368.4406045042439 62.498999999999995 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 362.545554832176 62.498999999999995 L 362.545554832176 56.45099999999999 L 368.4406045042439 56.45099999999999 L 368.4406045042439 62.498999999999995 z" pathFrom="M 362.545554832176 62.498999999999995 L 362.545554832176 62.498999999999995 L 368.4406045042439 62.498999999999995 L 368.4406045042439 62.498999999999995 L 368.4406045042439 62.498999999999995 L 368.4406045042439 62.498999999999995 L 368.4406045042439 62.498999999999995 L 362.545554832176 62.498999999999995 z" cy="56.449999999999996" cx="368.4406045042439" j="31" val="3" barHeight="6.048" barWidth="5.895049672067902"></path><path id="SvgjsPath2761" d="M 374.3356541763118 72.57900000000001 L 374.3356541763118 64.51500000000001 L 380.2307038483797 64.51500000000001 L 380.2307038483797 72.57900000000001 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 374.3356541763118 72.57900000000001 L 374.3356541763118 64.51500000000001 L 380.2307038483797 64.51500000000001 L 380.2307038483797 72.57900000000001 z" pathFrom="M 374.3356541763118 72.57900000000001 L 374.3356541763118 72.57900000000001 L 380.2307038483797 72.57900000000001 L 380.2307038483797 72.57900000000001 L 380.2307038483797 72.57900000000001 L 380.2307038483797 72.57900000000001 L 380.2307038483797 72.57900000000001 L 374.3356541763118 72.57900000000001 z" cy="64.51400000000001" cx="380.2307038483797" j="32" val="4" barHeight="8.064" barWidth="5.895049672067902"></path><path id="SvgjsPath2763" d="M 386.1257535204476 76.61100000000002 L 386.1257535204476 58.46700000000001 L 392.0208031925155 58.46700000000001 L 392.0208031925155 76.61100000000002 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 386.1257535204476 76.61100000000002 L 386.1257535204476 58.46700000000001 L 392.0208031925155 58.46700000000001 L 392.0208031925155 76.61100000000002 z" pathFrom="M 386.1257535204476 76.61100000000002 L 386.1257535204476 76.61100000000002 L 392.0208031925155 76.61100000000002 L 392.0208031925155 76.61100000000002 L 392.0208031925155 76.61100000000002 L 392.0208031925155 76.61100000000002 L 392.0208031925155 76.61100000000002 L 386.1257535204476 76.61100000000002 z" cy="58.466000000000015" cx="392.0208031925155" j="33" val="9" barHeight="18.144" barWidth="5.895049672067902"></path><path id="SvgjsPath2765" d="M 397.91585286458337 16.131000000000004 L 397.91585286458337 2.0190000000000023 L 403.81090253665127 2.0190000000000023 L 403.81090253665127 16.131000000000004 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 397.91585286458337 16.131000000000004 L 397.91585286458337 2.0190000000000023 L 403.81090253665127 2.0190000000000023 L 403.81090253665127 16.131000000000004 z" pathFrom="M 397.91585286458337 16.131000000000004 L 397.91585286458337 16.131000000000004 L 403.81090253665127 16.131000000000004 L 403.81090253665127 16.131000000000004 L 403.81090253665127 16.131000000000004 L 403.81090253665127 16.131000000000004 L 403.81090253665127 16.131000000000004 L 397.91585286458337 16.131000000000004 z" cy="2.0180000000000025" cx="403.81090253665127" j="34" val="7" barHeight="14.112" barWidth="5.895049672067902"></path><path id="SvgjsPath2767" d="M 409.70595220871917 88.70700000000001 L 409.70595220871917 86.691 L 415.60100188078707 86.691 L 415.60100188078707 88.70700000000001 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 409.70595220871917 88.70700000000001 L 409.70595220871917 86.691 L 415.60100188078707 86.691 L 415.60100188078707 88.70700000000001 z" pathFrom="M 409.70595220871917 88.70700000000001 L 409.70595220871917 88.70700000000001 L 415.60100188078707 88.70700000000001 L 415.60100188078707 88.70700000000001 L 415.60100188078707 88.70700000000001 L 415.60100188078707 88.70700000000001 L 415.60100188078707 88.70700000000001 L 409.70595220871917 88.70700000000001 z" cy="86.69" cx="415.60100188078707" j="35" val="1" barHeight="2.016" barWidth="5.895049672067902"></path><path id="SvgjsPath2769" d="M 421.49605155285496 189.507 L 421.49605155285496 177.411 L 427.39110122492286 177.411 L 427.39110122492286 189.507 z" fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3919vuq7)" pathTo="M 421.49605155285496 189.507 L 421.49605155285496 177.411 L 427.39110122492286 177.411 L 427.39110122492286 189.507 z" pathFrom="M 421.49605155285496 189.507 L 421.49605155285496 189.507 L 427.39110122492286 189.507 L 427.39110122492286 189.507 L 427.39110122492286 189.507 L 427.39110122492286 189.507 L 427.39110122492286 189.507 L 421.49605155285496 189.507 z" cy="177.41" cx="427.39110122492286" j="36" val="6" barHeight="12.096" barWidth="5.895049672067902"></path><g id="SvgjsG2695" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG2696" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2698" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2700" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2702" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2704" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2706" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2708" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2710" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2712" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2714" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2716" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2718" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2720" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2722" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2724" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2726" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2728" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2730" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2732" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2734" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2736" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2738" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2740" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2742" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2744" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2746" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2748" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2750" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2752" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2754" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2756" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2758" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2760" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2762" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2764" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2766" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g><g id="SvgjsG2768" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMask3919vuq7)"></g></g></g><g id="SvgjsG2540" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2617" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG2694" class="apexcharts-datalabels" data:realIndex="2"></g></g><g id="SvgjsG2773" class="apexcharts-grid-borders"><line id="SvgjsLine2784" x1="-9.098524305555557" y1="0" x2="433.54210069444446" y2="0" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2789" x1="-9.098524305555557" y1="201.6" x2="433.54210069444446" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine2792" x1="-9.098524305555557" y1="0" x2="433.54210069444446" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2793" x1="-9.098524305555557" y1="0" x2="433.54210069444446" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2794" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2795" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2797" font-family="inherit" x="35.37029803240741" y="230.6" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2798">24 Jun</tspan><title>24 Jun</title></text><text id="SvgjsText2800" font-family="inherit" x="117.90099344135803" y="230.6" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2801">Jul '20</tspan><title>Jul '20</title></text><text id="SvgjsText2803" font-family="inherit" x="200.4316888503086" y="230.6" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2804">08 Jul</tspan><title>08 Jul</title></text><text id="SvgjsText2806" font-family="inherit" x="294.752483603395" y="230.6" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2807">16 Jul</tspan><title>16 Jul</title></text><text id="SvgjsText2809" font-family="inherit" x="389.07327835648135" y="230.6" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2810">24 Jul</tspan><title>24 Jul</title></text></g></g><g id="SvgjsG2831" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2832" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2833" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2834" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2835" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 107, 196);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(32, 107, 196, 0.8);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(47, 179, 68, 0.8);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                      </div>
                    </div>
                  </div>

                {{-- -
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Traffic summary</h3>
                            <div id="chart-mentions" class="chart-lg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Locations</h3>
                            <div class="ratio ratio-21x9">
                                <div>
                                    <div id="map-world" class="w-100 h-100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="mb-3">Using Storage <strong>6854.45 MB </strong>of 8 GB</p>
                                    <div class="progress progress-separated mb-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-label="Regular"></div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 19%" aria-label="System"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 9%" aria-label="Shared"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto d-flex align-items-center pe-2">
                                            <span class="legend me-2 bg-primary"></span>
                                            <span>Regular</span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">915MB</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center px-2">
                                            <span class="legend me-2 bg-info"></span>
                                            <span>System</span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">415MB</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center px-2">
                                            <span class="legend me-2 bg-success"></span>
                                            <span>Shared</span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">201MB</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center ps-2">
                                            <span class="legend me-2"></span>
                                            <span>Free</span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">612MB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card" style="height: 28rem">
                                <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                    <div class="divide-y">
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar">JL</span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                                                    </div>
                                                    <div class="text-muted">yesterday</div>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="badge bg-primary"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url({{ asset('static/avatars/002m.jpg') }})"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                                                    </div>
                                                    <div class="text-muted">2 days ago</div>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="badge bg-primary"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Dunn Slane</strong> posted <strong>"Well, what do you want?"</strong>.
                                                    </div>
                                                    <div class="text-muted">today</div>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="badge bg-primary"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Emmy Levet</strong> created a new project <strong>Morning alarm clock</strong>.
                                                    </div>
                                                    <div class="text-muted">4 days ago</div>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="badge bg-primary"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/001f.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Maryjo Lebarree</strong> liked your photo.
                                                    </div>
                                                    <div class="text-muted">2 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar">EP</span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Egan Poetz</strong> registered new client as <strong>Trilia</strong>.
                                                    </div>
                                                    <div class="text-muted">yesterday</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/002f.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Kellie Skingley</strong> closed a new deal on project <strong>Pen Pineapple Apple Pen</strong>.
                                                    </div>
                                                    <div class="text-muted">2 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/003f.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Christabel Charlwood</strong> created a new project for <strong>Wikibox</strong>.
                                                    </div>
                                                    <div class="text-muted">4 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar">HS</span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Haskel Shelper</strong> change status of <strong>Tabler Icons</strong> from <strong>open</strong> to <strong>closed</strong>.
                                                    </div>
                                                    <div class="text-muted">today</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/006m.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Lorry Mion</strong> liked <strong>Tabler UI Kit</strong>.
                                                    </div>
                                                    <div class="text-muted">yesterday</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/004f.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Leesa Beaty</strong> posted new video.
                                                    </div>
                                                    <div class="text-muted">2 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/007m.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Perren Keemar</strong> and 3 others followed you.
                                                    </div>
                                                    <div class="text-muted">2 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar">SA</span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Sunny Airey</strong> upload 3 new photos to category <strong>Inspirations</strong>.
                                                    </div>
                                                    <div class="text-muted">2 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/009m.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Geoffry Flaunders</strong> made a <strong>$10</strong> donation.
                                                    </div>
                                                    <div class="text-muted">2 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/010m.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Thatcher Keel</strong> created a profile.
                                                    </div>
                                                    <div class="text-muted">3 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/005f.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Dyann Escala</strong> hosted the event <strong>Tabler UI Birthday</strong>.
                                                    </div>
                                                    <div class="text-muted">4 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar" style="background-image: url(./static/avatars/006f.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Avivah Mugleston</strong> mentioned you on <strong>Best of 2020</strong>.
                                                    </div>
                                                    <div class="text-muted">2 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar">AA</span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong>Arlie Armstead</strong> sent a Review Request to <strong>Amanda Blake</strong>.
                                                    </div>
                                                    <div class="text-muted">2 days ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="card-title">Development activity</div>
                        </div>
                        <div class="position-relative">
                            <div class="position-absolute top-0 left-0 px-3 mt-1 w-75">
                                <div class="row g-2">
                                    <div class="col-auto">
                                        <div class="chart-sparkline chart-sparkline-square" id="sparkline-activity"></div>
                                    </div>
                                    <div class="col">
                                        <div>Today's Earning: $4,262.40</div>
                                        <div class="text-muted"><!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                            +5% more than yesterday</div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart-development-activity"></div>
                        </div>
                        <div class="card-table table-responsive">
                            <table class="table table-vcenter">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Commit</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            Fix dart Sass compatibility (#29755)
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">28 Nov 2019</td>
                                </tr>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm">JL</span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            Change deprecated html tags to text decoration classes (#29604)
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">27 Nov 2019</td>
                                </tr>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            justify-content:between ⇒ justify-content:space-between (#29734)
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">26 Nov 2019</td>
                                </tr>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            Update change-version.js (#29736)
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">26 Nov 2019</td>
                                </tr>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            Regenerate package-lock.json (#29730)
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">25 Nov 2019</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                - --}}
            </div>
        </div>
    </div>
@endsection

@push('page-libraries')
    <script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
    <script src="{{ asset('dist/libs/jsvectormap/dist/js/jsvectormap.min.js') }}" defer></script>
    <script src="{{ asset('dist/libs/jsvectormap/dist/maps/world.js') }}" defer></script>
    <script src="{{ asset('dist/libs/jsvectormap/dist/maps/world-merc.js') }}" defer></script>
@endpush

@pushonce('page-scripts')
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
                chart: {
                    type: "area",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: .16,
                    type: 'solid'
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "Profits",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93,
                        53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67
                    ]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                    '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                    '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                    '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                    '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                    '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                fill: {
                    opacity: 1,
                },
                stroke: {
                    width: [2, 1],
                    dashArray: [0, 3],
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "May",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93,
                        53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67
                    ]
                }, {
                    name: "April",
                    data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35,
                        41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37
                    ]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                    '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                    '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                    '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                    '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                    '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary"), tabler.getColor("gray-600")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
                chart: {
                    type: "bar",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                plotOptions: {
                    bar: {
                        columnWidth: '50%',
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: 1,
                },
                series: [{
                    name: "Profits",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93,
                        53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67
                    ]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                    '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                    '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                    '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                    '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                    '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
@endpushonce
