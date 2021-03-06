<?php  
  include 'controller/Sesiones.php';
  user();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Holly Sistema Pos | </title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="js/jquery.min.js"></script>

  <script>
            $(document).ready(function() {
               datosUsuario();
               notificaciones();
               listaUsuarios();
            });
  </script>
  <script type="text/javascript">
      function datosUsuario(){         
              $.ajax({
                   type   : 'POST',
                   url    : 'controller/Usuario.php',
                   data  : {metodo: "datosUsuario"},
                   dataType : 'json',
                   success  : function(data){
                      $('#nombreUser').html(data.nombre);
                      $('#telefonoUser').html(data.telefono);
                      $('#usernameUser').html(data.username); 
                      $('#editNombre').val(data.nombre);
                      $('#editApellido').val(data.apellido);
                      $('#editTelefono').val(data.telefono);  
                  },
                   error  : function(data){
                    console.log(data);
                  }
               });
      }
      function notificaciones(){         
                  $.post("controller/Usuario.php", 
                  {metodo: "notificaciones"}
                  ,function(tabla){
                    $('#notificaciones').html(tabla);
                  }
                  );
      }
      function listaUsuarios(){         
                  $.post("controller/Usuario.php", 
                  {metodo: "listaUsuario"}
                  ,function(users){
                    $('#destino').html(users);
                  }
                  );
      }

      function crearNotificacion(){      
                  var destino=$('#destino').val();  
                  var mensaje=$('#mensaje').val(); 
            if (mensaje.length > 1) {            
            $.post("controller/Usuario.php", 
                    {metodo: "crearNotificacion",
                     destino:  destino,
                     mensaje:  mensaje},
                     function(respuesta){
                      $('#ModalNuevoMsj').modal('hide');
                      if (respuesta=="Exito") {
                        $('#resultado').html("Notificacion enviada!");
                        $('#resultado').attr("class","alert alert-success");
                        $('#resultado').show("slow").delay(4000).hide("slow");
                        notificaciones();
                      }
                      else{
                        $('#resultado').html(respuesta);
                        $('#resultado').attr("class","alert alert-danger");
                        $('#resultado').show("slow").delay(4000).hide("slow");
                      }
                      
                    }
              );  
            }
       }
       function editarUser(){
        if (!$("#editar_usuario").hasClass( "disabled" )) {
            userNombre=$('#editNombre').val();
            userApellido=$('#editApellido').val();
            userTelefono=$('#editTelefono').val();

            $.post("controller/Usuario.php", 
                    {metodo: "update",
                     nombre:  userNombre,
                     apellido: userApellido,
                     telefono:  userTelefono,
                   },function(respuesta){
                      $('#ModalPerfil').modal('hide');
                      if (respuesta=="Exito") {
                        datosUsuario();
                        $('#resultado').html("usuario fue editado!");
                        $('#resultado').attr("class","alert alert-success");
                        $('#resultado').show("slow").delay(4000).hide("slow");
                      }
                      else{
                        $('#resultado').html(respuesta);
                        $('#resultado').attr("class","alert alert-danger");
                        $('#resultado').show("slow").delay(4000).hide("slow");
                      }
                      
                    }
              ); 
            }
           event.preventDefault();  
       }
       function cambiarClave(){
            claveAntigua=$('#claveAntigua').val();
            claveNueva1=$('#claveNueva1').val();
            claveNueva2=$('#claveNueva2').val();
          if (!$("#editar_clave").hasClass( "disabled" )) {
            if (claveNueva1==claveNueva2) {
              $.post("controller/Usuario.php", 
                    {metodo: "cambiarClave",
                     claveAntigua:  claveAntigua,
                     claveNueva: claveNueva1,
                   },function(respuesta){
                      $('#ModalClave').modal('hide');
                      if (respuesta=="Exito") {
                        claveAntigua=$('#claveAntigua').val("");
                        claveNueva1=$('#claveNueva1').val("");
                        claveNueva2=$('#claveNueva2').val("");
                        $('#resultado').html("se cambio clave con exito!");
                        $('#resultado').attr("class","alert alert-success");
                        $('#resultado').show("slow").delay(4000).hide("slow");
                      }
                      else{
                        claveAntigua=$('#claveAntigua').val("");
                        claveNueva1=$('#claveNueva1').val("");
                        claveNueva2=$('#claveNueva2').val("");
                        $('#resultado').html(respuesta);
                        $('#resultado').attr("class","alert alert-danger");
                        $('#resultado').show("slow").delay(4000).hide("slow");
                      }
                      
                    }
              );  
            }
            }
            event.preventDefault();  
       }
  </script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body style="background:#F7F7F7;">

<!-- top Menu navigation-->
<?php include 'menu.php'; ?>
<!-- /top Menu navigation -->



      <!-- page content -->
      <div class="right_col" role="main">

        <div class="x_content">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Perfil de usuario
              </h3>
            </div>
          </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <!-- x_content-->                
                <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                            <div class="profile_img">
                                <a href=""><img src="images/usuario.png" WIDTH=120 HEIGHT=120 class="img-responsive" alt="Responsive image"></a>
                            </div>
                            <h3><span id="usernameUser"></span></h3>
                            <ul class="list-unstyled user_data">
                              <li ><i class="fa fa-user user-profile-icon"></i> <span id="nombreUser"></span></li>  
                              <li ><i class="fa fa-phone user-profile-icon"></i> <span id="telefonoUser"></span></li>   
                              <li class="m-top-xs">
                                <i class="fa fa-external-link user-profile-icon"></i>
                                <a href="http://www.kimlabs.com/profile/" target="_blank">www.HollyPos.com</a>
                              </li>
                            </ul>

                            <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalPerfil"><i class="fa fa-edit m-right-xs"></i>Editar Perfil</a>
                            <a class="btn btn-default btn-sm"  data-toggle="modal" data-target="#ModalClave"><i class="fa fa-edit m-right-xs"></i>Cambiar contraseña</a><hr>
                            <br />                           
                          </div>

                          <div class="col-md-9 col-sm-9 col-xs-12">

                           

                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Notificaciones</a>
                                </li>
                              </ul>
                              <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                   <div class="row">
                                      <div style="display:none" id="resultado"><button class="close" data-dismiss="alert"></button></div>
                                    </div>
                                <br><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ModalNuevoMsj"><i class="fa fa-bell"></i> Nueva Notificación</button><hr>
                                  <!-- start recent activity -->
                                  <ul id="notificaciones" class="messages list-unstyled top_profiles scroll-view">                                                 
                                  </ul>
                                  <!-- end recent activity -->
                                </div>
                              </div>
                            </div>
                          </div>
                </div>

                  <!-- /modal editar Perfil -->
                    <div class="modal fade bs-example-modal-lg" id="ModalPerfil" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content" align="center">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel2">Cambiar su información de Perfil</h4>
                            </div>
                            <div class="modal-body">  
                               <form data-toggle="validator" class="form-horizontal form-label-left" novalidate>
                                      <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <input id="editNombre" type="text" class="form-control" value="" required="required" placeholder="Nombre">
                                        </div>
                                      </div>                                     
                                      <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <input id="editApellido" type="text" class="form-control" value="" required="required" placeholder="Apellidos">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefono</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <input id="editTelefono" type="text" class="form-control"  step="1" min="0" data-minlength="7" value="" required="required" placeholder="telefono">
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button id="editar_usuario" type="submit" class="btn btn-success disabled" onclick="editarUser()">Confirmar</button>
                                      </div>
                                </form>
                            </div>
                            
                          </div>
                        </div>
                    </div>
                    <!-- /modal editar Perfil  -->

                    <!-- /modal editar clave -->
                    <div class="modal fade bs-example-modal-lg" id="ModalClave" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content" align="center">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel2">Modificar Contraseña</h4>
                            </div>
                            <div class="body">
                            <br>
                            <form data-toggle="validator" id="form_create" class="form-horizontal form-label-left" novalidate>
                                 
                                    <div class="item form-group">
                                      <label for="password" class="control-label col-md-3">Nueva contraseña</label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" name="crear-clave" data-toggle="validator" data-minlength="4" class="form-control" id="claveNueva1" placeholder="Contraseña" required>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                      <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repetir contraseña</label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" name="crear-clave2" class="form-control" id="claveNueva2" data-match="#claveNueva1" data-match-error="Opps! las contraseñas no coinciden" placeholder="Confirmar Contraseña" required>
                                               <div class="help-block with-errors"></div> 
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                      <label for="password" class="control-label col-md-3">Antigua contraseña</label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" name="crear-clave" data-toggle="validator" data-minlength="4" class="form-control" id="claveAntigua" placeholder="Contraseña" required>
                                      </div>
                                    </div>

                                    <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                  <button id="editar_clave" type="submit" class="btn btn-success disabled" onclick="cambiarClave()">Confirmar</button>
                                </div>
                            </form>
                            </div>                            
                          </div>
                        </div>
                    </div>
                    <!-- /modal editar clave  -->

                    <!-- /modal nueva notificacion -->
                    <div class="modal fade bs-example-modal-lg" id="ModalNuevoMsj" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content" align="center">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel2">Nuevo Mensaje</h4>
                            </div>
                            <div class="modal-body">
                            <form class="form-horizontal form-label-left">
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Destino: </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <select id="destino" class="form-control">                                            
                                          </select>
                                        </div>
                                    </div><br>
                                  <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Notificación <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <textarea id="mensaje" class="form-control" rows="3" placeholder='Escriba aqui el mensaje'></textarea>
                                        </div>
                                    </div>
                            </form><br>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button type="button" class="btn btn-success" onclick="crearNotificacion()">Enviar</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- /modal nueva notificacione  -->

                <!-- /x_content End dv -->
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->

      </div>
      <!-- /page content -->

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>

    <!-- chart js -->
  <script src="js/chartjs/chart.min.js"></script>
  <!-- moris js -->
  <script src="js/moris/raphael-min.js"></script>
  <script src="js/moris/morris.min.js"></script>

  <script src="js/validator.min.js"></script>

        <!-- pace -->
        <script src="js/pace/pace.min.js"></script>
        
        <script>
          var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
            showLeftPush = document.getElementById( 'showLeftPush' ),
            body = document.body;
            
          showLeftPush.onclick = function() {
            classie.toggle( this, 'active' );
            classie.toggle( body, 'cbp-spmenu-push-toright' );
            classie.toggle( menuLeft, 'cbp-spmenu-open' );
            disableOther( 'showLeftPush' );
          };
          
          function disableOther( button ) {
            if( button !== 'showLeftPush' ) {
              classie.toggle( showLeftPush, 'disabled' );
            }
        }
        </script> 
</body>

</html>
