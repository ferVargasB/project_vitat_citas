<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a8e0a9e3a6.js" crossorigin="anonymous" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>VITAT | Bienvenido</title>
  </head>
    <body background="media/fondo.jpg" class="img-responsive">
      
        <header id="fondo"  > 
            <div class="row"  > 
        
                <div class="col-md-2 " align="center">
                    <!-- style="border: 2px solid rgb(55, 0, 255)";----->
                    
                    <img class="img-responsive" src="<?php echo base_url().'assets/img/logo.png';?>" width="111" height="130 "   > 
                </div>
                    <div class="col-md-8" align="center">
                        
                        <h2  >
                             <a class=" font: small-caps 100%/200% serif;" style="color:black";> Ventanilla Virtual de Trámites  Administrativos <br> y  Territoriales.<br>VITAT</a> 
                        </h2>
                    </div>
                 
                <div class="col-md-2" align="center" >
                        <img class="img-responsive" src="<?php echo base_url().'assets/img/VITATlogoazul.png';?>" width="180" height="130 "  > 
                </div>
            </div>  
            <style>
                header 
                { 
                   
                    background: rgba(243, 244, 245, 0.925);
                }
        
            </style>
            
        </header>
          
            <nav nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <!-- Brand -->
                    <a class="navbar-brand" href="">VITAT</a>
                  
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="DGMAOT.html">SOBRE LA DGMAOT</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">DIR.ADMINISTRACI&Oacute;N URBANA</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="imagenurbana.html">DIR.IMAGEN URBANA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Tramites.html">TRAMITES DE LA ADMINISTRACI&Oacute;N</a>
                          </li>
                          <li>
                            <a href="http://localhost/project_vitat_citas/back_citas/?log_out=True" class="btn btn-danger">Cerrar Sesión</a>
                          </li>
                      </ul>
                    </div>
            </nav>
            <br>
        <div class="container"  style="background-color: white;">
        <div class="table-responsive table-hover">
  <div class="row" >
     <div class="col-md-12">
<table class="table" style="text-align:center;">

  <thead class="thead-dark">
    <tr> 
      <th style="font-size:70%;" scope="col" >Número de cita</th>
      <th style="font-size:70%;" scope="col">Nombre del solicitante</th>
      <th style="font-size:70%;" scope="col">Fecha de la cita</th>
      <th style="font-size:70%;" scope="col">Hora de la cita</th>
      <th style="font-size:70%;" scope="col">Trámite solicitado</th>
      <th style="font-size:70%;" scope="col">Estatus</th>
    </tr>
  </thead>
 
  <tbody>
    <?php foreach( $citas as $cita){ ?>
      <tr>
        <th style="font-size:80%;" scope="row"><?php echo $cita->id_cita;?></th>
        <td  style="font-size:80%;"><?php echo $cita->nombre_solicitante;?></td>
        <td  style="font-size:80%;"><?php echo $cita->fecha_cita;?></td>
        <td style="font-size:80%;"><?php echo $cita->hora_cita;?></td>
        <td style="font-size:80%;"><?php echo $cita->id_tramite_solicitado;?></td>
        <td style="font-size:80%;"><?php echo $cita->estatus;?></td>
        </tr style="font-size:80%;">
      <tr>

    <?php    
      } 
    ?>
    <tr>
      <th style="font-size:80%;" scope="row">1</th>
      <td  style="font-size:80%;">SI</td>
      <td  style="font-size:80%;">Pedro</td>
      <td style="font-size:80%;">Antonio Salas</td>
      <td style="font-size:80%;">San jose</td>
      <td style="font-size:80%;">4622715255</td>
      </tr style="font-size:80%;">
    <tr>
  </tbody>
</table>
</div>
    </div>
    
  </div>

<br>          
 
 <style>
      .header 
      {
          color: #36A0FF;
          font-size: 27px;
          padding: 10px;
      }

      .bigicon 
      {
          font-size: 35px;
          color: #36A0FF;
      }

      footer
      {
          padding: 40px;
          background-color: rgb(190, 191, 216);
          font-family: Arial, Helvetica, sans-serif;
          color: white;
      }
 .column2
 {
          text-align: left;
      }

      .column2 h4
      {
          font-size: 22px;

      }
 .contact label
 {
          margin-top: 10px;
          margin-left: 10px;
      }
      
      .contact
      {
          align-content: center;
          margin-top: 20px;
      
      }
 .contact label
 {
          margin-top: 10px;
          max-width: 140px;
          margin-left: 10px;
      }
.container-footer
{
          max-width: 100%;
          display: flex;
          justify-content: space-between;
          padding: 20px;
      }
      .footer
      {
          max-width: 1000px;
          margin: auto;
          display: flex;
          justify-content: space-between;
      }

      .btnCita{
          color: #fff;
          background-color: #337ab7;
          border-color: #2e6da4;
          margin-left: 40%;
      }

  </style>

  </div>
  <br>
  <footer style="opacity: 0.8;">
      <div class="containerFooter-all">
          <div class="row" >
              <div class="col-md-3" align="center">
                  <div class="column1" >
                      <h1 style="color: black;">T&eacute;lefono</h1>
                      
                      <div class="contact" style="color: black;">
                          <i class="fas fa-mobile-alt" style="font-size: 83px;"align="center" ></i>
                          <label style="color: rgba(0, 0, 0, 0.603);">T&eacute;lefono <br>73-4-01-28 <br> ext. 110, 221 y/o 106</label>
                      </div>
                  </div>                   
              </div>
  <div class="col-md-4" align="center">
                  <div class="column1">
                      <h2 style="color: black;">Direcci&oacute;n:</h2>
                        <div class="contact" style="color: black;">
                          <i class="far fa-building" style="font-size: 70px;"align="center" ></i>
                          <label style="color: rgba(0, 0, 0, 0.603);">Boulevard Guanajuato#8-A Guanajuato Gto, C.P.36000 </label>
                      </div>
              </div>
                  
              </div>

              <div class="col-md-5" align="center">
                  <div class="column1">
                      <h1 style="color: black;">Correo Electr&oacute;nico</h1>
                     
                      <div class="contact" style="color: black;" >
                          <i class="far fa-envelope" style="font-size: 70px;" align="center"></i>
                          <label  style="color: rgba(0, 0, 0, 0.603);" style="font-size: 40px;">Correo:<br>admon.urbana@<br>guanajuatocapital<a style="color: rgba(0, 0, 0, 0.603);" >.gob.mx</a></label>
                      </div>
                      
                  </div>
          </div>
      </div>

      <div class="container-footer">
          <div class="footer">
              <div class="copyright" align="center">
                   © 2020 Todos los derechos reservados Support-Time
              </div>
              
          </div>
          
      </div>
      </div>
      
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="./js/vitat.js"></script>
 
  </body>
  </html>