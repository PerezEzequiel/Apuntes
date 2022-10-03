<?php

session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<h1>Bienvenido: $usuarioingresado </h1>";
}
else
{
	header('location: index.php');
}

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es" >
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
           <meta name="description" content="Forex club no es solo trading, es estilo de vida">
  
    <title>My panel| Forex club</title>
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
    <link href='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    
    <link href='assets/plugins/toastr/toastr.min.css' rel='stylesheet'>
    
    
    
    
    
    

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />
  
    <!-- FAVICON -->
    <link href="assets/img/logoooo.png" rel="shortcut icon" />
  
  
    <script src="assets/plugins/nprogress/nprogress.js"></script>
   
  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body"> 
    <!-- <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script> -->

    <div id="toaster"></div>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
          <aside class="left-sidebar bg-sidebar">
                  <div id="sidebar" class="sidebar sidebar-with-footer">
                    <!-- Aplication Brand -->
                    <div class="app-brand">
                      <a href="/index.html" title="Sleek Dashboard">
                        <svg
                          class="brand-icon"
                          xmlns="http://www.w3.org/2000/svg"
                          preserveAspectRatio="xMidYMid"
                          width="30"
                          height="33"
                          viewBox="0 0 30 33">
                          <g fill="none" fill-rule="evenodd">
                            <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                          </g>
                        </svg>
        
                        <span class="brand-name text-truncate">My panel | Forex club </span>
                      </a>
                    </div>
        
                    <!-- begin sidebar scrollbar -->
                    <div class="" data-simplebar style="height: 100%;">
                      <!-- sidebar menu -->
                      <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li class="has-sub active expand">
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                            aria-expanded="false" aria-controls="dashboard">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span class="nav-text">Menu</span> <b class="caret"></b>
                          </a>
        
                          <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                              <li class="active">
                                <a class="sidenav-item-link" href="index.html">
                                  <span class="nav-text">Inicio</span>
                                </a>
                              </li>
                              <li class="">
                                <a class="sidenav-item-link" href="calendar.html">
                                  <span class="nav-text">Calendario de clases</span>
                                </a>
                              </li>
                              <li class="">
                                <a class="sidenav-item-link" href="calendarioeconomico.html">
                                  <span class="nav-text">Calendario económico</span>
                                </a>
                              </li>
                              <!-- <li class="">
                                <a class="sidenav-item-link" href="analytics.html">
                                  <span class="nav-text">Cerrar sesión</span>
                                
                                </a>
                              </li> -->
                            </div>
                          </ul>
                        </li>
        
                        <li class="has-sub ">
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                            aria-expanded="false" aria-controls="app">
                            <i class="mdi mdi-pencil-box-multiple"></i>
                            <span class="nav-text">ACADEMIA</span> <b class="caret"></b>
                          </a>
        
                          <ul class="collapse " id="app" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                             
                      
                              </li>
                              
                            
                              
                              <li class="">
                                <a class="sidenav-item-link" href="videos.html">
                                  <span class="nav-text">Clases grabadas</span>
                                </a>
                              </li>
                              <li class="">
                                <a class="sidenav-item-link" href="https://forexpipsignal.tiendup.com/curso/tradinginicial">
                                  <span class="nav-text">Curso de Trading Gold</span>
                                </a>
                              </li>
                              <li class="">
                                <a class="sidenav-item-link" href="https://forexpipsignal.tiendup.com/curso/tradingintermedio">
                                  <span class="nav-text">Curso de trading Diamond</span>
                                </a>
                              </li>
                              <li class="">
                                <a class="sidenav-item-link" href="https://forexpipsignal.tiendup.com/curso/tradinginstitucional">
                                  <span class="nav-text">Curso de trading Institucional</span>
                                </a>
                              </li>
                            </div>
                          </ul>
                        </li>
        
        
                     <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                    aria-expanded="false" aria-controls="components">
                    <i class="mdi mdi-folder-multiple-outline"></i>
                    <span class="nav-text">Archivos</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="components" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="">
                        <a class="sidenav-item-link" href="librostrading.html">
                          <span class="nav-text">Libros de trading</span>
                        </a>
                      </li>

            

                      <li class="">
                        <a class="sidenav-item-link" href="librosmentalidad.html">
                          <span class="nav-text">Libros de mentalidad</span>

                        </a>
                        <li class="">
                            <a class="sidenav-item-link" href="librospsicotrading.html">
                              <span class="nav-text">Psicotrading</span>
    
                            </a>
                      </li>
                      <li class="">
                        <a class="sidenav-item-link" href="otrosarchivos.html">
                          <span class="nav-text">Otros archivos</span>

                        </a>
             </div>
                  </ul>
                </li>
        
                        <li class="has-sub ">
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                            aria-expanded="false" aria-controls="charts">
                            <i class="mdi mdi-chart-pie"></i>
                            <span class="nav-text">Gráficos</span> <b class="caret"></b>
                          </a>
        
                          <ul class="collapse " id="charts" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                              <li class="">
                                <a class="sidenav-item-link" href="chart.html">
                                  <span class="nav-text">Tradingview</span>
                                </a>
                              </li>
                              <li class="">
                                <a class="sidenav-item-link" href="margen.html">
                                  <span class="nav-text">Calculadora de margen</span>
                                </a>
                              </li>
                              <li class="">
                                <a class="sidenav-item-link" href="pips.html">
                                  <span class="nav-text">Calculadora de pips</span>
                                </a>
                              </li>
                            </div>
                          </ul>
                        </li>
        
             </li>
        
                     
                      </ul>
                    </div>
        
                    <div class="sidebar-footer">
                      <hr class="separator mb-0" />
                      <div class="sidebar-footer-content">
        
                        <img src="assets/img/logoooo.png" width="100%" alt="">
                       
                      </div>
                    </div>
                  </div>
                </aside>

          <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">
          
          <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
               
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <li class="dropdown notifications-menu custom-dropdown">
                    <!-- <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                      <i class="mdi mdi-bell-outline"></i>
                    </button> -->

                    <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                      <!-- <div class="card-header card-header-border-bottom px-3">
                        <h2>Notificationes</h2>
                      </div>

                      <div class="card-body px-0 py-3">
                        <ul class="nav nav-tabs nav-style-border p-0 justify-content-between" id="myTab" role="tablist">
                          <li class="nav-item mx-3 my-0 py-0">
                            <a class="nav-link active pb-3" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true">Notificaciones</a>
                          </li>

                      
                        </ul>

                        <div class="tab-content" id="myTabContent3"> -->

                            <!-- NOTIFICACIONES -->

                          <!-- <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                            <ul class="list-unstyled" data-simplebar style="height: 360px"> -->
                             <!-- inicio de NOTIFICACIONES -->
                            
                                <!-- NOTIFICACIONES -->
                            
<!--                             
                                <li>
                                           <a href="javscript:void(0)" class="media media-message media-notification media-active">
                                  <div class="position-relative mr-3">
                                    <img class="rounded-circle" src="assets/img/logoooo.png" alt="Image">
                                    <span class="status active"></span>
                                  </div>
                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Forex club</h4>
                                      <p class="last-msg">Mañana cierra el mercado.</p>

                                      <span class="font-size-12 font-weight-medium text-white">
                                        <i class="mdi mdi-clock-outline"></i> Just now...
                                      </span>
                                    </div>
                                  </div>
                                </a> -->                            </li> 

                  <!-- User Account -->
                
                </ul>
              </div>
            </nav>
          </header>

          
          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
            <div class="content">





		
                  <!-- Top Statistics -->
                  <div class="row" style="text-align: center;">
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">Academia de trading</h2>
                          <p>Audiovisual</p>
                          <div class="chartjs-wrapper">
                          <img src="Diseñosintitulo/Diseño sin título.png" width="100%" style="margin-top:15px ;" alt="">
                          </div>
                        </div>
                      <br>
                        
                     <center>  <div class="colca">
                      <a href="videos.html">CLICK AQUI</a>
                      <br> <br> <br>
                       </div> </center>
                      </div>
                      
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">Abri tu cuenta de trading</h2>
                          <p>Brokers de trading</p>
                          <div class="chartjs-wrapper">
                            <img src="Diseñosintitulo/6.png" width="100%" style="margin-top:15px ;" alt="">
                          </div>
                        </div>
                        <br>
                        <center>  <div class="colca">
                          <a href="broker.html">CLICK AQUI</a>
                        
                           <br><br><br>
                           </div> </center>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">Gráficos en tiempo real</h2>
                          <p>Tradingview</p>
                          <div class="chartjs-wrapper">
                            <img src="Diseñosintitulo/1.png" width="100%" style="margin-top:15px ;" alt="">
                          </div>
                        </div>
                        <br>
                        <center>  <div class="colca">
                          <a href="chart.html">CLICK AQUI</a>
                        
                           <br><br><br>
                           </div> </center>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">Diario de trading</h2>
                          <p>Anota tu proceso</p>
                          <div class="chartjs-wrapper">
                            <img src="Diseñosintitulo/3.png" width="100%" style="margin-top:15px ;" alt="">
                          </div>
                        </div>
                        <br>
                        <center>  <div class="colca">
                          <a href="https://drive.google.com/file/d/1ldzUPKS8iTkioiXKCifu9x2suB5u-awW/view?usp=sharing">CLICK AQUI</a>
                        
                           <br><br><br>
                           </div> </center>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">Calendario Económico</h2>
                          <p>Noticias</p>
                          <div class="chartjs-wrapper">
                            <img src="Diseñosintitulo/4.png" width="100%" style="margin-top:15px ;" alt="">
                          </div>
                        </div>
                        <br>
                        <center>  <div class="colca">
                          <a href="https://es.investing.com/economic-calendar/">CLICK AQUI</a>
                        
                           <br><br><br>
                           </div> </center>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">Horarios de mercado</h2>
                          <p>Mercado Forex</p>
                          <div class="chartjs-wrapper">
                            <img src="Diseñosintitulo/5.png" width="100%" style="margin-top:15px ;" alt="">
                          </div>
                        </div>
                        <br>
                        <center>  <div class="colca">
                          <a href="horarios.html">CLICK AQUI</a>
                        
                           <br><br><br>
                           </div> </center>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini  mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">Grupo de Telegram</h2>
                          <p>Chat grupal</p>
                          <div class="chartjs-wrapper">
                            <img src="Diseñosintitulo/2.png" width="100%" style="margin-top:15px ;" alt="">
                          </div>
                          
                        </div>
                        <br>
                        
                        <center>  <div class="colca">
                          <a href="https://t.me/+vaXSDVoVFyszZDIx">CLICK AQUI</a>
                        
                           <br><br><br>
                           </div> </center>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">Artículos </h2>
                          <p>Ideas, noticias y más</p>
                          <div class="chartjs-wrapper">
                            <img src="Diseñosintitulo/7.png" width="100%" style="margin-top:15px ;" alt="">
                          </div>
                        </div>
                        <br>
                        <center>  <div class="colca">
                          <a href="https://forexpipsignal.tiendup.com/blog">CLICK AQUI</a>
                        
                           <br><br><br> <br>
                           </div> </center>
                      </div>
                    </div>
                   

                  </div>


		<div class="row">
			<div class="col-xl-8 col-md-12">
				
                      <!-- Sales Graph -->
                      <div class="card card-default">
                        <div class="card-header">
                          <h2>Libros y artículos</h2>
                        </div>
                        <div class="card-body" style="height:200px; display:flex; padding-top: 0;">
                        
                          <a href="librosmentalidad.html"><img src="Diseñosintitulo/analisis.png" width="100%" alt=""></a>
                          <a href="librostrading.html"><img src="Diseñosintitulo/dinero.png" width="100%" alt=""></a>
                          <a href="librospsicotrading.html"><img src="Diseñosintitulo//ver mas.png" width="100%" alt=""></a>
                        </div>
                        <div class="card-footer d-flex flex-wrap bg-white p-0">
                          <div class="col-6 px-0">
                            <div class="text-center p-4">
                              <h4>+ 300 </h4>
                              <p class="mt-2">Libros online</p>
                            </div>
                          </div>
                          <div class="col-6 px-0">
                            <div class="text-center p-4 border-left">
                              <h4>APRENDE Y PON A PRUEBA TUS CONOCIMIENTOS</h4>
                              <p class="mt-2">Acompañado de los mejores autores</p>
                            </div>
                          </div>
                        </div>
                      </div>

			</div>

			<div class="col-xl-4 col-md-12">
				
               <!-- Doughnut Chart -->
			   <div class="card card-default">
                    <div class="card-header justify-content-center">
                      <h2>¿Tienes alguna duda o pregunta?</h2>
                      <br> <br>
                      <center>
                        Ingresa aca y deja tu pregunta, en la próxima clase en vivo la respondemos
                     
                      </center>
<br>
                    </div>
                    
                   
                    
                     <center>  <div class="colca">
                   <a href="http://trueprofits.com.ar//forexclub/formulario/index.html">HAZ TU PREGUNTA</a>
                  </center>
                    <br><br><br>
                    </div>
                  </div>

			</div>
		</div>
		<div class="footer-cerrar-sesion">
		<div class="one-footer">

		</div>
		<div class="one-footer">
		<form method="POST">
		<input type="submit" class="cerrarsesion" value="CERRAR SESION" name="btncerrar" />
		</form>	
		</div>
		</div>

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
 
    <script src='assets/plugins/charts/Chart.min.js'></script>
    <script src='assets/js/chart.js'></script>

    
    

    <script src='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='assets/js/vector-map.js'></script>

    <script src='assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='assets/js/date-range.js'></script>

    

    
    
    
    

    <script src='assets/plugins/toastr/toastr.min.js'></script>

    

    
    
    

    
    

    

    <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script>
</body>
</html>

