<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Mixtape</title>

  <!-- Favicons -->
  <link href="{{ asset('files/img/favicon.png') }} " rel="icon">
  <link href="{{ asset('files/files/img/apple-touch-icon.png') }} " rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('files/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('files/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('files/css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('files/lib/gritter/css/jquery.gritter.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('files/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('files/css/style-responsive.css') }}" rel="stylesheet">
  <script src="{{ asset('files/lib/chart-master/Chart.js') }}"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>MIX<span>TAPE</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->

        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
                <!-- <div class="col-sm-10">
                    <i class="glyphicon glyphicon-user"></i>
                    <input type="text" style="margin:5% 0 0 0;" id="search-input" class="form-control round-form">
                </div> -->
                <div class="form-group has-feedback ">
                  <input type="text" class="form-control round-form"  style="margin:5% 0 0 0;" id="search-input" placeholder="Search" />
                  <i class="glyphicon glyphicon-search  form-control-feedback"></i>
              </div>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse" style="margin-left: -210px; overflow: hidden; outline: none; ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion" style="display:hidden;" >
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Guest</h5>
          <li class="mt">
            <a class="active" href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>TOS </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>JOIN US </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>MERCHS</span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content" style="margin-left: 0px;">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart" id="home-content">
            <!-- /row -->
            <div class="row">
                  <div class="content">

                      <div class="col-md-12 col-lg-12 mb">
                        <div class="weather pn">
                          <i class="fa fa-cloud fa-4x"></i>
                          <h2>11º C</h2>
                          <h4>Mixtape</h4>
                        </div>
                      </div>
                  </div>
                  <div class="content content-yield">
                      @yield('content')
                  </div>

            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
              <!-- **********************************************************************************************************************************************************
                  RIGHT SIDEBAR CONTENT
                  *********************************************************************************************************************************************************** -->
              <div class="col-lg-3 ds">
                <!--COMPLETED ACTIONS DONUTS CHART-->
                <div class="donut-main">
                  <h4>COMPLETED ACTIONS & PROGRESS</h4>
                  <canvas id="newchart" height="130" width="130"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 70,
                        color: "#4ECDC4"
                      },
                      {
                        value: 30,
                        color: "#fdfdfd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
                  </script>
                </div>
                <!--NEW EARNING STATS -->
                <div class="panel terques-chart">
                  <div class="panel-body">
                    <div class="chart">
                      <div class="centered">
                        <span>TODAY EARNINGS</span>
                        <strong>$ 890,00 | 15%</strong>
                      </div>
                      <br>
                      <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                    </div>
                  </div>
                </div>
                <!--new earning end-->
                <!-- RECENT ACTIVITIES SECTION -->
                <h4 class="centered mt">RECENT ACTIVITY</h4>
                <!-- First Activity -->
                <div class="desc">
                  <div class="thumb">
                    <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                  </div>
                  <div class="details">
                    <p>
                      <muted>Just Now</muted>
                      <br/>
                      <a href="#">Paul Rudd</a> purchased an item.<br/>
                    </p>
                  </div>
                </div>
                <!-- Second Activity -->
                <div class="desc">
                  <div class="thumb">
                    <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                  </div>
                  <div class="details">
                    <p>
                      <muted>2 Minutes Ago</muted>
                      <br/>
                      <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                    </p>
                  </div>
                </div>
                <!-- Third Activity -->
                <div class="desc">
                  <div class="thumb">
                    <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                  </div>
                  <div class="details">
                    <p>
                      <muted>3 Hours Ago</muted>
                      <br/>
                      <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                    </p>
                  </div>
                </div>
                <!-- Fourth Activity -->
                <div class="desc">
                  <div class="thumb">
                    <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                  </div>
                  <div class="details">
                    <p>
                      <muted>7 Hours Ago</muted>
                      <br/>
                      <a href="#">Brando Page</a> purchased a year subscription.<br/>
                    </p>
                  </div>
                </div>
                <!-- USERS ONLINE SECTION -->
                <h4 class="centered mt">TEAM MEMBERS ONLINE</h4>
                <!-- First Member -->
                <div class="desc">
                  <div class="thumb">
                    <img class="img-circle" src="img/ui-divya.jpg" width="35px" height="35px" align="">
                  </div>
                  <div class="details">
                    <p>
                      <a href="#">DIVYA MANIAN</a><br/>
                      <muted>Available</muted>
                    </p>
                  </div>
                </div>
                <!-- Second Member -->
                <div class="desc">
                  <div class="thumb">
                    <img class="img-circle" src="img/ui-sherman.jpg" width="35px" height="35px" align="">
                  </div>
                  <div class="details">
                    <p>
                      <a href="#">DJ SHERMAN</a><br/>
                      <muted>I am Busy</muted>
                    </p>
                  </div>
                </div>
                <!-- Third Member -->
                <div class="desc">
                  <div class="thumb">
                    <img class="img-circle" src="img/ui-danro.jpg" width="35px" height="35px" align="">
                  </div>
                  <div class="details">
                    <p>
                      <a href="#">DAN ROGERS</a><br/>
                      <muted>Available</muted>
                    </p>
                  </div>
                </div>
                <!-- Fourth Member -->
                <div class="desc">
                  <div class="thumb">
                    <img class="img-circle" src="img/ui-zac.jpg" width="35px" height="35px" align="">
                  </div>
                  <div class="details">
                    <p>
                      <a href="#">Zac Sniders</a><br/>
                      <muted>Available</muted>
                    </p>
                  </div>
                </div>
                <!-- CALENDAR-->
                <div id="calendar" class="mb">
                  <div class="panel green-panel no-margin">
                    <div class="panel-body">
                      <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                        <div class="arrow"></div>
                        <h3 class="popover-title" style="disadding: none;"></h3>
                        <div id="date-popover-content" class="popover-content"></div>
                      </div>
                      <div id="my-calendar"></div>
                    </div>
                  </div>
                </div>
                <!-- / calendar -->
              </div>
              <!-- /col-lg-3 -->
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->


    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('files/lib/jquery/jquery.min.js') }}"></script>

  <script src="{{ asset('files/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('files/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('files/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('files/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('files/lib/jquery.sparkline.js') }}"></script>
  <!--common script for all pages-->
  <script src="{{ asset('files/lib/common-scripts.js') }}"></script>
  <script type="text/javascript" src="{{ asset('files/lib/gritter/js/jquery.gritter.js') }}"></script>
  <script type="text/javascript" src="{{ asset('files/lib/gritter-conf.js') }}" ></script>
  <!--script for this page-->
  <script src="{{ asset('files/lib/sparkline-chart.js') }}"></script>
  <script src="{{ asset('files/lib/zabuto_calendar.js') }}"></script>

  <script type="application/javascript">

  </script>
  <script type="text/javascript">
        var appendSearchData = function(list_item,index) {
          console.log("Once - - - - -  " + index);
          htmllist = '<div class="col-lg-4 col-md-4 col-sm-4 mb">'
                +'      <div class="content-panel pn">'
                +'        <div id="profile-02">'
                +'          <div class="user">'
                +'            <img src="img/friends/fr-06.jpg" class="img-circle" width="80">'
                +'            <h4>'+list_item.name+'</h4>'
                +'            <h5>'+list_item.artist+'</h5>'
                +'            <h5>'+list_item.genres+'</h5>'
                +'          </div>'
                +'        </div>'
                +'        <div class="pr2-social centered" id="'+list_item.id+'">'
                +'          <audio controls="" style="width:200px;height:30px;margin:8px 5px;">'
                +'              <source src="'+list_item.localfile+'" type="audio/mpeg">'
                +'            </audio>'
                +'        </div>'
                +'      </div>'
                +'    </div>';


            $("#home-content .content-yield").append(htmllist);


        }
        var appendSearchVideo = function(list_item,index) {

        htmlist  ="<div class='col-lg-4 col-md-4 col-sm-4 mb'>"+
                  "  <div class='product-panel-2 pn' style='background: #252524;'>"+
                  "   <span class='badge badge-hot' style='margin-top:32px;height: 25px;width: 25px;line-height:16px;'>+</span>"+
                  "   <iframe style='margin-bottom:-2%;' src='https://player.vimeo.com"+list_item.uri.replace('s','') +"?title=1&byline=0&portrait=0' width='100%' height='100%' frameborder='0' allowfullscreen></iframe>"+
                  "   <div>"+
                  "      <div style='clear:left;top:100;4px;position:relative;text-align:left;margin:0 0 0 -2px;float:left;''><p><span class='label label-success'>From <a href='"+list_item.user.link+"'>"+ list_item.user.name.toUpperCase() +"</a> on Vimeo </span> </p></div>"+
                  "    </div>"+
                  "  </div>  "+
                  "</div>  ";
            $("#home-content .content-yield").append(htmlist);


        }
      function getData() {
          var str =  $("#search-input").val();
          $.ajax("/public/search/"+str, {

          })
          .then(
              function success(data) {

                $("#home-content .content-yield").empty();
                  console.log(data);
                  data = JSON.parse(data);
                  console.log("json not object");

                  for (var i = 0; i < data.length; i++) {
                    appendSearchData(data[i],i);

                  }

                   // $( ".inner" ).append( htmllist );
              },

              function fail(data, status) {
                  console.log("json not object");
                  console.log(data);
                  alert('Request failed.  Returned status of ' + status);
              }
          );


          return  ;
        }
      function getVideo() {

          var str =  $("#search-input").val();
          str = str.replace(' ','%20');
          $.ajax("/public/geturlsvideo/"+str, {

          })
          .then(
              function success(data) {

                  console.log(typeof data);
                  data = JSON.parse(data);
                  console.log(typeof data);
                  console.log("json not object");
                  console.log(data.length);
                  console.log(data.data[0]);
                  i = 0 ;
                  for (obdt of data.data) {
                    appendSearchVideo(obdt,i);
                    console.log(obdt.user.name);
                    i++;
                  }

              },

              function fail(data, status) {
                  console.log("json not object");
                  console.log(data);
                  alert('Request failed.  Returned status of ' + status);
              }
          );


          return  ;
        }

      $( "#search-input" ).keyup(function(e) {

        if(e.which == 13 || e.keyCode === 13) {
           $("#home-content .content-yield").empty();
           getData();
           getVideo();

       }
      });
  </script>
</body>

</html>
