<?php 

	$conexion=mysqli_connect('localhost','root','','citas');

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/63d99ea3dd.js" crossorigin="anonymus"></script>
        <title>Desarrollo Urbano</title>
   </head>
    <body>
    <header> 

        
    <header id="fondo"  > 
        
        <div class="row" background="Captura.PNG" class="img-responsive" > 
            <div class="col-sm-2 " align="center" >
                <!-- style="border: 2px solid rgb(55, 0, 255)";----->
                
                <img class="img-responsive" src="media/logogtoblanco.png" width="131" height="140 "  > 
            </div>
                <div class="col-sm-8" align="center">
                    
                  <h1  >
                         <a class=" font: small-caps 100%/200% serif;" style="color:#FFFFFF"; href="index.html"> Ventanilla Virtual de Trámites <br> Territoriales<br>VITAT</a> 
                    </h1>
             </div>
            <div class="col-sm-2" align="center">
                    <img class="img-responsive" src="media/VITAT logo blanco.png" width="210" height="330" > 
             </div>
        </div>  
        <style>
            header 
            { 
                
             background-image: url(media/Captura.PNG) ; 
    }
    
                  </style>
       <!--background: rgb(11, 94, 247);-->
              <!--header { background: rgba(179,220,237,1); }-->
         
              
           </header>
        <hr width="100%" align="right" size="5" color="blue">
        <header id="border">
            <nav class="navbar navbar-default" style="border: 1px solid rgb(11, 94, 247);">
               <div class="container-fluid">
                   <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                       <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       
                       </button>
                       
                        <a href="index.html"class=navbar-brand style="color:white"><i  class="fa fa-home">&nbsp;Inicio</i></a>
                   </div>
                   <div class="collapse navbar-collapse" id="navbar-1">
                   <ul class="nav navbar-nav">
                       <li class="active"  ><a href=""style="color:white" id="im">SOBRE LA DGMAOT</a></li>
                       <li><a href=""style="color:white">DIR.ADMINISTRACION URBANA</a></li>
                       <li><a href="imagenurbana.html"style="color:white">DIR.IMAGEN URBANA</a></li>
                       
                       
                       </ul>
                      
                  
                   </div>
                </div>
                </nav>
   
                  
               </header>
               <style>
                .navbar  
                {
                     background: rgb(84, 172, 255); 
                     

    
                     
                     }
                #im 
                { 
                    background: rgb(51, 150, 243); 
                    }
                #border
                {
                    border-radius: 61px 61px 61px 61px;
                    box-shadow: -16px 21px 5px 0px rgba(0,0,0,0.75);
   
                }
               
              </style>


<div class="container" style="background-color: white;" >
    <div class="row">
    
      <div class="col-md-12" align="center" >
        <table border="1" >
            <tr>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Direccion</td>
                <td>Numero Telefonico </td>
                <td>Correo Electronico</td>	
                <td>Tramite</td>
                <td>Fecha</td>	
                <td>Hora</td>		
            </tr>
    
            <?php 
            $sql="SELECT * from citas INNER JOIN direcciones";
            $result=mysqli_query($conexion,$sql);
    
            while($mostrar=mysqli_fetch_array($result)){
             ?>
    
            <tr>
                <td><?php echo $mostrar['nombre_solicitante'] ?></td>
                <td><?php echo $mostrar['apellidos_solicitante'] ?></td>
                <td><?php echo $mostrar['id_direccion'] ?></td>
                <td><?php echo $mostrar['id_numero'] ?></td>
                <td><?php echo $mostrar['correo'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['fecha_cita'] ?></td>
                <td><?php echo $mostrar['hora_cita'] ?></td>
            </tr>
        <?php 
        }
         ?>
        </table>
     
        </div>
      
      <!-----<video src="media/unesco Gto CH.mp4" autoplay muted loop height="1000px" width="1000px"></video>-->
      </div>
   
    </div>
  </div>   

  </div>
 
    </div>
    
  </div>                                   
                   
    <br>
    <br>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <footer style="opacity: 0.8;">
            <div class="containerFooter-all" >
                <div class="row" >
                    <div class="col-md-3" align="center">
                        <div class="column1">
                            <h1 style="color: black;">Telefono</h1>
                            
                            <div class="contact" style="color: black;">
                                <i class="fas fa-mobile-alt" style="font-size: 60px;" ></i>
                                <label style="color: rgba(0, 0, 0, 0.603);">Téfono <br>73-4-01-28 <br> ext. 110, 221 y/o 106</label>
                            </div>
                        </div>                   
                    </div>
    
                    <div class="col-md-4" align="center">
                        <div class="column3">
                            <h2 style="color: black;">Información de contacto</h2>
                              <div class="contact" style="color: black;">
                                <i class="far fa-building" style="font-size: 60px;"></i>
                                <label style="color: rgba(0, 0, 0, 0.603);">Dirección: Boulevard Guanajuato#8-A Guanajuato Gto, C.P.36000 </label>
                            </div>
                    </div>
                        
                    </div>
    
                    <div class="col-md-5" align="center">
                        <div class="column2">
                            <h1 style="color: black;">Correo Electronico</h1>
                           
                            <div class="contact" style="color: black;">
                                <i class="far fa-envelope" style="font-size: 60px;"></i>
                                <label style="color: rgba(0, 0, 0, 0.603);" style="font-size: 40px;">Correo:<br>admon.urbana@guanajuatocapital.gob.mx</label>
                            </div>
                        </div>
                </div>
            </div>
    
            <div class="container-footer">
                <div class="footer">
                    <div class="copyright">
                        © 2020 Todos los derechos reservados Support-Time
                    </div>
                </div>
                
            </div>
            </div>
        </footer>


        <style>
            .header {
                color: #36A0FF;
                font-size: 27px;
                padding: 10px;
            }
    
            .bigicon {
                font-size: 35px;
                color: #36A0FF;
            }

            footer{
                padding: 40px;
                background-color: rgb(190, 191, 216);
                font-family: Arial, Helvetica, sans-serif;
                color: white;
            }

            .column1{
                text-align: left;
            }
            .column1 h4{
                font-size: 22px;
            }

            .column1 p{
                font-size: 15px;
                padding: 15px;
            }

            .column2{
                text-align: left;
            }

            .column2 h4{
                font-size: 22px;

            }

            .column3{
                text-align: left;
            }

            .column3 h4{
                font-size: 22px;
            }

            .contact label{
                margin-top: 10px;
                margin-left: 10px;
            }
            
            .contact{
                align-content: center;
                margin-top: 20px;
            
            }

            .contact label{
                margin-top: 10px;
                max-width: 140px;
                margin-left: 10px;
            }

            .container-footer{
                max-width: 100%;
                display: flex;
                justify-content: space-between;
                padding: 20px;
            }
            .footer{
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


    </body>


</html>