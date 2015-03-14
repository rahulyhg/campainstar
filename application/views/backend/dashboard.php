<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Dashboard</h1>


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <!--<li><a href="#">Library</a></li>
					<li class="active">Data</li>-->
            </ol>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End breadcrumb-->




            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

                <div class="row">
                    <div class="col-lg-7">

                        <!--Network Line Chart-->
                        <!--===================================================-->
                        <div id="demo-panel-network" class="panel">
                            <div class="panel-heading">
                                <div class="panel-control">
                                    <button id="demo-panel-network-refresh" data-toggle="panel-overlay" data-target="#demo-panel-network" class="btn"><i class="fa fa-rotate-right"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button class="dropdown-toggle btn" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3 class="panel-title">Network</h3>
                            </div>

                            <!--Morris line chart placeholder-->
                            <div id="morris-chart-network" class="morris-full-content"></div>

                            <!--Chart information-->
                            <div class="panel-body bg-primary" style="position:relative;z-index:2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-xs-8">

                                                <!--Server load stat-->
                                                <div class="pad-ver media">
                                                    <div class="media-left">
                                                        <span class="icon-wrap icon-wrap-xs">
																<i class="fa fa-cloud fa-2x"></i>
															</span>
                                                    </div>

                                                    <div class="media-body">
                                                        <p class="h3 text-thin media-heading">30%</p>
                                                        <small class="text-uppercase">Server Load</small>
                                                    </div>
                                                </div>

                                                <!--Progress bar-->
                                                <div class="progress progress-xs progress-dark-base mar-no">
                                                    <div class="progress-bar progress-bar-light" style="width: 30%"></div>
                                                </div>

                                            </div>
                                            <div class="col-xs-4">
                                                <!-- User Online -->
                                                <div class="text-center">
                                                    <span class="text-3x text-thin">43</span>
                                                    <p>User Online</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Additional text-->
                                        <div class="mar-ver">
                                            <small class="pad-btm"><em>* Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</em></small>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">

                                        <!-- List Group -->
                                        <ul class="list-group bg-trans mar-no">
                                            <li class="list-group-item">
                                                <!-- Sparkline chart -->
                                                <div id="demo-chart-visitors" class="pull-right"></div>Visitors
                                            </li>
                                            <li class="list-group-item">
                                                <!-- Sparkline chart -->
                                                <div id="demo-chart-bounce-rate" class="pull-right"></div>Bounce rate
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-success">11</span>
                                                Today sales
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-warning">20</span>
                                                Broken links found
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <!--===================================================-->
                        <!--End network line chart-->

                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">

                                <!--Sparkline Area Chart-->
                                <div class="panel panel-success panel-colorful text-center">
                                    <div class="panel-body">

                                        <!--Placeholder-->
                                        <div id="demo-sparkline-area"></div>

                                    </div>
                                    <div class="bg-light pad-ver">
                                        <h4 class="mar-no text-thin"><i class="fa fa-hdd-o"></i> HDD Usage</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">

                                <!--Sparkline Line Chart-->
                                <div class="panel panel-info panel-colorful text-center">
                                    <div class="panel-body">

                                        <!--Placeholder-->
                                        <div id="demo-sparkline-line"></div>

                                    </div>
                                    <div class="bg-light pad-ver">
                                        <h4 class="mar-no text-thin">Earning</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">

                                <!--Sparkline bar chart -->
                                <div class="panel panel-purple panel-colorful text-center">
                                    <div class="panel-body">

                                        <!--Placeholder-->
                                        <div id="demo-sparkline-bar" class="box-inline"></div>

                                    </div>
                                    <div class="bg-light pad-ver">
                                        <h4 class="mar-no text-thin">Sales</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">

                                <!--Sparkline pie chart -->
                                <div class="panel panel-mint panel-colorful text-center">
                                    <div class="panel-body">

                                        <!--Placeholder-->
                                        <div id="demo-sparkline-pie" class="box-inline "></div>

                                    </div>
                                    <div class="bg-light pad-ver">
                                        <h4 class="mar-no text-thin">
												Top Movie
											</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--Extra Small Weather Widget-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel middle">
                            <div class="media-left pad-all">
                                <canvas id="demo-weather-xs-icon" width="48" height="48"></canvas>
                            </div>

                            <div class="media-body">
                                <p class="text-2x mar-no text-thin text-mint">25&#176;</p>
                                <p class="text-muted mar-no">Partly Cloudy Day</p>
                            </div>
                        </div>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Extra Small Weather Widget-->


                    </div>
                </div>


                <!--Tiles - Bright Version-->
                <!--===================================================-->
                <div class="row">



                    <div class="row">
                        <div class="col-lg-7">


                            <div id="demo-morris-donut" class="morris-donut"></div>



                        </div>
                    </div>



                </div>


            </div>