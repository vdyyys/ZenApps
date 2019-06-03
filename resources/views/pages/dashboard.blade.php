@extends('layout.app')
@section('content')
<body>
    <div class="container">
    <div class="page-content">
        <br><br><br><br><br>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="fa fa-briefcase fa-icon-medium"></i>
                        </div>
                        <div class="details">
                            <div class="number"> Rp 11.900.000 </div>
                            <div class="desc"> Total Profit  </div>
                        </div>
                        <a class="more" href="javascript:;"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number"> Rp 15.200.000 </div>
                            <div class="desc"> Total Pajak </div>
                        </div>
                        <a class="more" href="javascript:;"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat green">
                                        <div class="visual">
                                            <i class="fa fa-group fa-icon-medium"></i>
                                        </div>
                                        <div class="details">
                                            <div class="number"> Rp 239.000 </div>
                                            <div class="desc"> Total Pemasukan </div>
                                        </div>
                                        <a class="more" href="javascript:;"> View more
                                            <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <!-- Begin: life time stats -->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-share font-blue"></i>
                                            <span class="caption-subject font-blue bold uppercase">Overview</span>                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tabbable-line">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#overview_1" data-toggle="tab"> On Progress </a>
                                                </li>
                                                <li>
                                                    <a href="#overview_2" data-toggle="tab"> History </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="overview_1">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Paket</th>
                                                                    <th>Harga</th>
                                                                    <th>Approval</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="{{ url('/paket/detail') }}"> Paket Nikah Gedung ABC </a>
                                                                    </td>
                                                                    <td> Rp. 30.000.000,- </td>
                                                                    <td> Approved </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="btn btn-default">
                                                                            <i class="fa fa-search"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="#">More ...</a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="overview_2">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Paket</th>
                                                                    <th>Harga</th>
                                                                    <th>Date Finished</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                    <td>
                                                                        <a href="javascript:;"> Paket Sunatan Hall Besar</a>
                                                                    </td>
                                                                    <td> Rp. 5.000.000,- </td>
                                                                    <td> 00-00-0000 </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="btn btn-default">
                                                                            <i class="fa fa-search"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="#">More ...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: life time stats -->
                            </div>
                            <div class="col-md-6">
                                    <!-- Begin: life time stats -->
                                    <!-- BEGIN PORTLET-->
                                    <div class="portlet light bordered">
                                        <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                                <i class="icon-globe font-red"></i>
                                                <span class="caption-subject font-red bold uppercase">Revenue</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="portlet_ecommerce_tab_1">
                                                    <div id="statistics_1" class="chart"> </div>
                                                </div>
                                            </div>
                                            <div class="well margin-top-20">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                    <span class="label label-info"> Profit: </span>
                                                    <h3>Rp. 10.000.000</h3>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 text-stat">
                                                    <span class="label label-danger"> Pajak: </span>
                                                    <h3>Rp. 5.000.000</h3>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                    <span class="label label-success"> Pemasukan: </span>
                                                    <h3>Rp. 5.000.000</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: life time stats -->
                                </div>
                            </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
        </div>
    </div>
</body>
@endsection