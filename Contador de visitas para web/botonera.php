<?php
include_once("inc/conexion.php");
//include_once("control_log.php");
$clientes = tomarRegistro($mysqli, "admin", "usuario='".$_SESSION["usuario11"]."'");

$idAdminMenu = $_SESSION['id_login'];
$adminMenu = tomarRegistro($mysqli, "admin","id='".$clientes['id']."'");
//echo "la sesion usuarios vale:".$_SESSION["usuario11"] ; 
?>
<aside id="sidebar_left" class="nano nano-light affix">

        <!-- Sidebar Left Wrapper  -->
      <div class="sidebar-left-content nano-content">

            <!-- Sidebar Header -->
        <header class="sidebar-header">

                <!-- Sidebar - Author -->
                <div class="sidebar-widget author-widget">
                    <div class="media">
                        <a class="media-left profile-online" href="#">
                            <img src="assets/img/avatars/74x74.png" class="img-responsive" alt="">
                        </a>

                        <div class="media-body">
                            <div>Bienvenido</div>
                            <div class="media-author">Administrador</div>
                        </div>
                    </div>
                </div>

          </header>
          <!-- /Sidebar Header -->

          <!-- Sidebar Menu  -->
          <ul class="nav sidebar-menu">
              <li class="active">
                  <a href="index.php">
                      <span class="sidebar-title">Escritorio</span>
                      <span class="sb-menu-icon fa fa-home"></span>
                  </a>
              </li>

              <!-- <li>
                  <a class="accordion-toggle" href="publicidad.php">
                      <span class="sidebar-title">COMPRAS</span>
                      <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-star-half-full "></span>
                  </a>
                  <ul class="nav sub-nav">
                      <li>
                          <a href="compras_finalizadas.php?estado=completadas">
                              COMPLETADAS
                          </a>
                      </li>

                      <li>
                          <a href="compras.php?estado=proceso">
                              En proceso
                          </a>
                      </li>

                      <li>
                          <a href="compras_canceladas.php?estado=proceso">
                              Canceladas (?)
                          </a>
                      </li>
                      
                  </ul>

              </li> -->
              
               
              
              
              

              <li>
                  <a class="accordion-toggle" href="reclutadores.php">
                      <span class="sidebar-title">Textos</span>
                      <span class="caret"></span>
                      <span class="sb-menu-icon fa fa-share-square-o"></span>
                  </a>
                  <ul class="nav sub-nav">
                     
                      <li>
                          <a href="contenidos.php">
                              Editar / Listar 
                          </a>
                      </li>
                      
                  </ul>
              </li>
              
      

              <li>
                  <a class="accordion-toggle" href="datos_radio_edit.php?id=1">
                      <span class="sidebar-title">Datos de contacto</span>
                      <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-wrench"></span>
                  </a>
                  <ul class="nav sub-nav">
                     
                      <li>
                          <a href="datos_radio_edit.php?id=1">
                              Editar / Listar 
                          </a>
                      </li>
                      
                  </ul>
              </li>
    
              
            

              <li>
                  <a class="accordion-toggle" href="reclutadores.php">
                      <span class="sidebar-title">Redes sociales</span>
                      <span class="caret"></span>
                      <span class="sb-menu-icon fa fa-share-square-o"></span>
                  </a>
                  <ul class="nav sub-nav">
                     
                      <li>
                        <a href="social_edit.php?id=1">
                           Editar
                        </a>
                      </li>
                      
                     
                      
                      
                  </ul>
              </li>
              
              <li>
                  <a class="accordion-toggle" href="reclutadores.php">
                      <span class="sidebar-title">Consultas enviadas</span>
                      <span class="caret"></span>
                      <span class="sb-menu-icon fa fa-share-square-o"></span>
                  </a>
                  <ul class="nav sub-nav">
                     
                      <li>
                        <a href="contacto_web.php?id=1">
                           Consultas, listar
                        </a>
                      </li>
  
                  </ul>
              </li>
              
              <li>
                  <a class="accordion-toggle" href="articulos.php">
                      <span class="sidebar-title">Noticias</span>
                      <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-cogs"></span>
                  </a>
                  <ul class="nav sub-nav">
                     
                      <li>
                          <a href="articulos.php?pagina=1">
                              Editar / Listar 
                          </a>
                      </li>
                      
                       <li>
                          <a href="articulos_add.php?pagina=1">
                              Agregar
                          </a>
                      </li>
                      
                  </ul>
              </li>

              <li>
                  <a class="accordion-toggle" href="articulos.php">
                      <span class="sidebar-title">Promo Tarjetas</span>
                      <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-cogs"></span>
                  </a>
                  <ul class="nav sub-nav">
                     
                      <li>
                          <a href="promotarjeta.php?pagina=1">
                              Editar / Listar 
                          </a>
                      </li>
                      
                       <li>
                          <a href="promotarjeta_add.php?pagina=1">
                              Agregar
                          </a>
                      </li>
                      
                  </ul>
              </li>
  
            
              <li>
                  <a class="accordion-toggle" href="#">
                      <span class="sidebar-title"> Productos</span>
                      <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                  </a>
                  <ul class="nav sub-nav">
                       <li>
                          <a href="exportar_excel.php">
                              Exportar 
                          </a>
                      </li>
                      <li>
                          <a href="productos_add.php">
                              Nuevo 
                          </a>
                      </li>
                      <li>
                          <a href="productos.php?pagina=1">
                              Editar / Listar
                          </a>
                      </li>
                      
                      
                      
                  </ul>
              </li>

              <!-- <li>
                  <a class="accordion-toggle" href="#">
                      <span class="sidebar-title"> Importación</span>
                      <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                  </a>
                  <ul class="nav sub-nav">
                     
                      <li>
                          <a href="importar_productos_oulet.php">
                              Importar productos outlet 
                          </a>
                      </li>
                      <li>
                          <a href="importar_productos_general.php">
                              Importar productos
                          </a>
                      </li>
                     
                      
                      
                  </ul>
              </li>
              

  
              
             -->
             
              
              <li>
                  <a class="accordion-toggle" href="#">
                      <span class="sidebar-title">Slide</span>
                      <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-star-half-full "></span>
                  </a>
                  <ul class="nav sub-nav">
                      <li>
                          <a href="slide_add.php">
                              Nuevo slide principal
                          </a>
                      </li>
                      <li>
                          <a href="slide.php">
                              Editar / Listar
                          </a>
                      </li>
                      
                  </ul>

              </li>
              
               <li>
                  <a class="accordion-toggle" href="#">
                      <span class="sidebar-title">Logos clientes</span>
                      <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-star-half-full "></span>
                  </a>
                  <ul class="nav sub-nav">
                      <li>
                          <a href="slide2_add.php">
                              Nuevo slide clientes
                          </a>
                      </li>
                      <li>
                          <a href="slide2.php">
                              Editar / Listar
                          </a>
                      </li>
                      
                  </ul>

              </li>

               
              <li>
                  <a class="accordion-toggle" href="visitas.php">
                      <span class="sidebar-title">Control de Visitas</span>
                      <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-star-half-full "></span>
                  </a>
                  <ul class="nav sub-nav">
                      
                      <li>
                          <a href="visitas.php">
                              Listar
                          </a>
                      </li>
                      
                  </ul>

              </li>
              
              
              
              
              
              
              
               


          </ul>
          <!-- /Sidebar Menu  -->

        </div>
        <!-- /Sidebar Left Wrapper  -->

</aside>