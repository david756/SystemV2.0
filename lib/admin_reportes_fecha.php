<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Mantil Sistema Pos | </title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="css/icheck/flat/green.css" rel="stylesheet" />
  <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />


  <link href="js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js"></script>
  <script src="js/nprogress.js"></script>

  <!--[if lt IE 9]>
  <script src="../assets/js/ie8-responsive-file-warning.js"></script>
  <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-glass"></i> <span>Mantil System</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenido,</span>
              <h2>Usuario</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>Administrador</h3><br>
              <ul class="nav side-menu">
              <li><a><i class="fa fa-home"></i> Inicio </a></li>
               <li><a><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="empty.html">Empleados</a></li>                    
                    <li><a href="empty.html">Administradores</a></li>                    
                  </ul>
                </li>
                <li><a><i class="fa fa-th-large"></i> Mesas <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="empty.html">Administrar</a></li>               
                  </ul>
                </li>
                <li><a><i class="fa fa-folder-o"></i> Categorias <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                  <li><a href="empty.html">Administrar</a></li>             
                  </ul>
                </li>
                <li><a><i class="fa fa-beer"></i> Productos <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="empty.html">Administrar</a></li>            
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Atenciones <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="empty.html">Administrar</a></li>                  
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart"></i> Presentacion de datos <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="empty.html">General</a></li>                    
                    <li><a href="empty.html">Empleados</a></li>
                    <li><a href="empty.html">Categorias</a></li>                    
                    <li><a href="empty.html">Productos</a></li>
                    <li><a href="empty.html">Atenciones</a></li>                    
                    <li><a href="empty.html">Inventarios</a></li>                    
                  </ul>
                </li>
                <li><a><i class="fa fa-line-chart"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="empty.html">Reporte de hoy</a></li>                    
                    <li><a href="empty.html">Reportes pasados</a></li>
                    <li><a href="empty.html">Informe mes</a></li>                                        
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Soporte">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Pantalla Completa">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Salir">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Inicio">
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

          <!-- top Menu navigation-->
          <?php include 'admin_menu.php'; ?>
          <!-- /top Menu navigation -->


      <!-- page content -->
      <div class="right_col" role="main">

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

              <div class="row x_title">
                <div class="col-md-6">
                  <h3>Reporte</h3>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="well">             
                    
                    <form class="form-horizontal">
                      <fieldset>
                      <div class="row">
                          <div class="control-group col-md-4 col-sm-6 col-xs-12">
                            <div class="controls">
                              <div class="input-prepend input-group">
                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="03/18/2013 - 03/23/2013" />
                              </div>
                            </div>
                          </div>

                            <div class="col-md-8 col-sm-6 col-xs-12">
                              <button type="button" class="btn btn-default btn-sm">Generar Reporte simple</button>
                              <button type="button" class="btn btn-success btn-sm">Generar Reporte detallado</button>
                            </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h4>Reporte de pedidos</h4>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                        <div class="col-sm-12 invoice-col">
                                <b>Fecha:</b> 06 junio 2016 12:03 pm
                                <br><br>
                                <b>Total ventas:</b> $125.000
                                <br>
                                <b>Numero de ordenes:</b> 12
                                <br><br>
                              </div>
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Fecha</th>
                              <th>Mesero</th>
                              <th>Mesa</th>
                              <th>Producto</th> 
                              <th>Anexo</th>                             
                              <th>Valor</th>
                              <th>Estado</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>23/marzo/2016 12:02 pm</td>
                              <td>Juan</td>
                              <td>Mesa 2</td>                              
                              <td>producto 2</td>
                              <td>Sin Anexos</td>
                              <td>$12.500</td>
                              <td><button type="button" class="btn btn-success btn-xs">Pago</button></td>
                            </tr>
                            <tr>
                              <td>23/marzo/2016 12:02 pm</td>
                              <td>Juan</td>
                              <td>Mesa 2</td>                              
                              <td>producto 2</td>
                              <td>Sin Anexos</td>
                              <td>$12.500</td>
                              <td><button type="button" class="btn btn-success btn-xs">Pago</button></td>
                            </tr>
                            <tr>
                              <td>23/marzo/2016 12:02 pm</td>
                              <td>Juan</td>
                              <td>Mesa 2</td>                              
                              <td>producto 2</td>
                              <td>Sin Anexos</td>
                              <td>$12.500</td>
                              <td><button type="button" class="btn btn-success btn-xs">Pago</button></td>
                            </tr>
                            <tr>
                              <td>23/marzo/2016 12:02 pm</td>
                              <td>Juan</td>
                              <td>Mesa 2</td>                              
                              <td>producto 2</td>
                              <td>Sin Anexos</td>
                              <td>$12.500</td>
                              <td><button type="button" class="btn btn-success btn-xs">Pago</button></td>
                            </tr>
                            <tr>
                              <td>23/marzo/2016 12:02 pm</td>
                              <td>Juan</td>
                              <td>Mesa 2</td>                              
                              <td>producto 2</td>
                              <td>Sin Anexos</td>
                              <td>$12.500</td>
                              <td><button type="button" class="btn btn-success btn-xs">Pago</button></td>
                            </tr>
                            <tr>
                              <td>23/marzo/2016 12:02 pm</td>
                              <td>Juan</td>
                              <td>Mesa 2</td>                              
                              <td>producto 2</td>
                              <td>Sin Anexos</td>
                              <td>$12.500</td>
                              <td><button type="button" class="btn btn-danger btn-xs">Pedido</button></td>
                            </tr> 
                            <tr>
                              <td><h5><b>Total</b></h5></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>                              
                              <td>$170.000</td>
                              <td></td>
                            </tr>                         
                          </tbody>
                        </table><br><br> <hr>

                      </div>
                    </div>
                  </div>

              </div>

              <div class="clearfix"></div>
            </div>
          </div>

        </div>
        <br />       
       <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
  <!-- chart js -->
  <script src="js/chartjs/chart.min.js"></script>
  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="js/moment/moment.min.js"></script>
  <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>

  <script src="js/custom.js"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="js/flot/date.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
  
  <!-- worldmap -->
  <script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
  <script type="text/javascript" src="js/maps/gdp-data.js"></script>
  <script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>

  <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="js/datatables/jquery.dataTables.min.js"></script>
        <script src="js/datatables/dataTables.bootstrap.js"></script>
        <script src="js/datatables/dataTables.buttons.min.js"></script>
        <script src="js/datatables/buttons.bootstrap.min.js"></script>
        <script src="js/datatables/jszip.min.js"></script>
        <script src="js/datatables/pdfmake.min.js"></script>
        <script src="js/datatables/vfs_fonts.js"></script>
        <script src="js/datatables/buttons.html5.min.js"></script>
        <script src="js/datatables/buttons.print.min.js"></script>
        <script src="js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="js/datatables/dataTables.keyTable.min.js"></script>
        <script src="js/datatables/dataTables.responsive.min.js"></script>
        <script src="js/datatables/responsive.bootstrap.min.js"></script>
        <script src="js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script src="js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>

         <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'right',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };

      $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

      $('#reportrange_right').daterangepicker(optionSet1, cb);

      $('#reportrange_right').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange_right').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });

      $('#options1').click(function() {
        $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
      });

      $('#options2').click(function() {
        $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
      });

      $('#destroy').click(function() {
        $('#reportrange_right').data('daterangepicker').remove();
      });

    });
  </script>
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <!-- /datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#single_cal1').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_1"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal2').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal3').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal4').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_4"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });
  </script>

</body>

</html>