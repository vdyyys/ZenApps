@extends('layout.app')
@section('content')
<div class="container">
    <div class="page-content">
        <br><br><br><br><br>
        @if($user->isEo())
        <div class="row">
            <div class="col-lg-3 card mb-4">
                <div class="card-body text-center">
                    <h4>My EO</h4>
                    <img src="{{ asset('img/EO/eo-2.jpg') }}" alt="Jono Organizer" class="img-fluid rounded-circle mb-2 img-circle" width="128" height="128">
                    <h4 class="card-title mb-0">{{$eos->nama_eo}}</h4>
                    <div class="text-muted mb-2">{{$eos->email}}</div>
                    <hr>
                    <p class="text-justify">{{$eos->deskripsi}}</p>
                    <a href="{{route('eo.show', ['eo'=>str_replace(' ','_',$eos->nama_eo)])}}" class="btn btn-primary ">Lihat Eo</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                <div class="dashboard-stat blue">
                    <div class="visual">
                        <i class="fa fa-briefcase fa-icon-medium"></i>
                    </div>
                    <div class="details">
                        <div class="number"> 0 </div>
                        <div class="desc"> Total Transaksi Berhasil </div>
                    </div>
                    <a class="more" href="javascript:;"> View more
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="dashboard-stat red">
                    <div class="visual">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="details">
                        <div class="number"> {{$bookings->count()}} </div>
                        <div class="desc"> Total Pemesan </div>
                    </div>
                    <a class="more" href="javascript:;"> View more
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="dashboard-stat green">
                    <div class="visual">
                        <i class="fa fa-group fa-icon-medium"></i>
                    </div>
                    <div class="details">
                        <div class="number"> IDR 0</div>
                        <div class="desc"> Total Pemasukan </div>
                    </div>
                    <a class="more" href="javascript:;"> View more
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
        </div>
        @else
<link rel="stylesheet" href="{{asset('/css/material-dashboard/material-dashboard.min.css')}}">

        <div class="col-md-6 offset-md-3">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class=" img-circle" src="{{asset('/img/profile/card-profile.jpg')}}" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-info btn-round">Follow</a>
                </div>
              </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-share font-blue"></i>
                            <span class="caption-subject font-blue bold uppercase">Overview</span>
                        </div>
                    </div>

                    <div class="portlet-body">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#overview_request" data-toggle="tab">Request</a>
                                </li>
                                <li>
                                    <a href="#overview_progress" data-toggle="tab">Progress</a>
                                </li>
                                <li>
                                    <a href="#overview_history" data-toggle="tab">History</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="overview_request">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Paket</th>
                                                    <th>Nama Pemesan</th>
                                                    <th>Tanggal</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($bookings as $bookings)
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="{{ url('/paket/detail') }}">{{$bookings->nama_paket}}</a>
                                                    </td>
                                                    <td>{{App\User::where('id', $bookings->id_user)->first()->name}}</td>
                                                    <td>{{$bookings->tanggal_pelaksanaan}}</td>
                                                    <td>
                                                        <a href="{{ url('/approval/'.$bookings->id) }}" class="btn btn-outline-primary">Approve</a>
                                                        <a href="{{ url('/disapproval') }}" class="btn btn-outline-danger">Disapprove</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                        <a href="#">More ...</a>
                                    </div>
                                </div>

                                <div class="tab-pane" id="overview_progress">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama Client</th>
                                                    <th>Progress</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="{{ url('/paket/detail') }}">Sumartini</a>
                                                    </td>
                                                    <td>Deal Fasilitas Paket</td>
                                                    <td>
                                                        <a href="javascript:;" class="">
                                                            <i class="fa fa-search"></i>
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="#">More ...</a>
                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="overview_history">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama Client</th>
                                                    <th>Paket</th>
                                                    <th>Status Pelunasan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                    <td>
                                                        <a href="javascript:;"> Sumanto</a>
                                                    </td>
                                                    <td>Paket Sunatan #5000</td>
                                                    <td>Lunas</td>
                                                    <td>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-search"></i>
                                                            Detail
                                                        </a>
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
            </div>
            <div class="col-md-6">
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
                                <!-- <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                    <span class="label label-info"> Transaksi: </span>
                                    <h3>0</h3>
                                </div> -->
                                <div class="col-md-6 col-sm-6 col-xs-6 text-stat">
                                    <span class="label label-danger"> Pemesan: </span>
                                    <h3>{{$bookings->count()}}</h3>
                                </div>
                                <!-- <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                    <span class="label label-success"> Pemasukan: </span>
                                    <h3>IDR 0</h3>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
var EcommerceDashboard = (function() {
  function o(o, i, t, a) {
    $(
      '<div id="tooltip" class="chart-tooltip">' +
        a.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,") +
        " User</div>"
    )
      .css({
        position: "absolute",
        display: "none",
        top: i - 40,
        left: o - 60,
        border: "0px solid #ccc",
        padding: "2px 6px",
        "background-color": "#fff"
      })
      .appendTo("body")
      .fadeIn(200);
  }
  var i = function() {
      var i = [
            @foreach($data as $d)
            ["{{$d->booking_month}}", {{$d->bookings}}]
            @endforeach
      ],
        t = ($.plot(
          $("#statistics_1"),
          [
            { data: i, lines: { fill: 0.6, lineWidth: 0 }, color: ["#484d7c"] },
            {
              data: i,
              points: {
                show: !0,
                fill: !0,
                radius: 5,
                fillColor: "#f89f9f",
                lineWidth: 3
              },
              color: "#fff",
              shadowSize: 0
            }
          ],
          {
            xaxis: {
              tickLength: 0,
              tickDecimals: 0,
              mode: "categories",
              font: {
                lineHeight: 15,
                style: "normal",
                variant: "small-caps",
                color: "#6F7B8A"
              }
            },
            yaxis: {
              ticks: 3,
              tickDecimals: 0,
              tickColor: "#f0f0f0",
              font: {
                lineHeight: 15,
                style: "normal",
                variant: "small-caps",
                color: "#6F7B8A"
              }
            },
            grid: {
              backgroundColor: { colors: ["#fff", "#fff"] },
              borderWidth: 1,
              borderColor: "#f0f0f0",
              margin: 0,
              minBorderMargin: 0,
              labelMargin: 20,
              hoverable: !0,
              clickable: !0,
              mouseActiveRadius: 6
            },
            legend: { show: !1 }
          }
        ),
        null);
      $("#statistics_1").bind("plothover", function(i, a, e) {
        if (($("#x").text(a.x.toFixed(2)), $("#y").text(a.y.toFixed(2)), e)) {
          if (t != e.dataIndex) {
            (t = e.dataIndex), $("#tooltip").remove();
            e.datapoint[0].toFixed(2), e.datapoint[1].toFixed(2);
            o(e.pageX, e.pageY, e.datapoint[0], e.datapoint[1]);
          }
        } else $("#tooltip").remove(), (t = null);
      });
    },
    t = function() {
      var i = [
          ["01/2013", 10],
          ["02/2013", 0],
          ["03/2013", 10],
          ["04/2013", 12],
          ["05/2013", 212],
          ["06/2013", 324],
          ["07/2013", 122],
          ["08/2013", 136],
          ["09/2013", 250],
          ["10/2013", 99],
          ["11/2013", 190]
        ],
        t = ($.plot(
          $("#statistics_2"),
          [
            { data: i, lines: { fill: 0.6, lineWidth: 0 }, color: ["#BAD9F5"] },
            {
              data: i,
              points: {
                show: !0,
                fill: !0,
                radius: 5,
                fillColor: "#BAD9F5",
                lineWidth: 3
              },
              color: "#fff",
              shadowSize: 0
            }
          ],
          {
            xaxis: {
              tickLength: 0,
              tickDecimals: 0,
              mode: "categories",
              min: 2,
              font: {
                lineHeight: 14,
                style: "normal",
                variant: "small-caps",
                color: "#6F7B8A"
              }
            },
            yaxis: {
              ticks: 3,
              tickDecimals: 0,
              tickColor: "#f0f0f0",
              font: {
                lineHeight: 14,
                style: "normal",
                variant: "small-caps",
                color: "#6F7B8A"
              }
            },
            grid: {
              backgroundColor: { colors: ["#fff", "#fff"] },
              borderWidth: 1,
              borderColor: "#f0f0f0",
              margin: 0,
              minBorderMargin: 0,
              labelMargin: 20,
              hoverable: !0,
              clickable: !0,
              mouseActiveRadius: 6
            },
            legend: { show: !1 }
          }
        ),
        null);
      $("#statistics_2").bind("plothover", function(i, a, e) {
        if (($("#x").text(a.x.toFixed(2)), $("#y").text(a.y.toFixed(2)), e)) {
          if (t != e.dataIndex) {
            (t = e.dataIndex), $("#tooltip").remove();
            e.datapoint[0].toFixed(2), e.datapoint[1].toFixed(2);
            o(e.pageX, e.pageY, e.datapoint[0], e.datapoint[1]);
          }
        } else $("#tooltip").remove(), (t = null);
      });
    };
  return {
    init: function() {
      i(),
        $("#statistics_orders_tab").on("shown.bs.tab", function(o) {
          t();
        });
    }
  };
})();
jQuery(document).ready(function() {
  EcommerceDashboard.init();
});
</script>
@endsection