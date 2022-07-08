<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ESCALAFÓN | DRE PUNO</title>
  <link rel="shortcut icon" href="https://escalafon-ayni.minedu.gob.pe/minedu.ico">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plantilla/dist/css/adminlte.min.css">
  <!-- icons -->
  <link rel="stylesheet" href="../plantilla/plugins/fontawesome-free/css/solid.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../plantilla/index3.html" class="navbar-brand">
        <img src="../plantilla/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Escalafón</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="contacto.php" class="nav-link">Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Opciones</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Some action </a></li>
              <li><a href="#" class="dropdown-item">Some other action</a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>

                  <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three -->

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../plantilla/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../plantilla/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../plantilla/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->
<!-- CONTENIDOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO================================================================ -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-4">
            <br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Logo_del_Ministerio_de_Educaci%C3%B3n_del_Per%C3%BA_-_MINEDU.png" alt="" style="width: 300px; height: 70px;" class="img-fluid">
          </div><!-- /.col -->
          <div class="col-sm-8">
            <h1 style="font-size: 50px; text-aling: center;">Escalafón - Dirección Regional de Educación Puno</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <!-- CARRUSEL -->
          <div class="col-lg-9">
            <!-- AQUIIIII -->
            <!-- CONTENEDOR -->
            <div class="card">
              <div class="card-body">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item">
                  <img class="d-block w-100" src="../recursos/img/descripcion.png" alt="PRIMEROOO" style="height: 400px; width: 600px">
                </div>
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://i2.wp.com/www.repositorioeducacion.com/wp-content/uploads/2021/01/Escalafon-institutos.jpg?fit=975%2C546&ssl=1" alt="SEGUNDOOO" style="height: 400px; width: 600px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../recursos/img/requisitos.png" alt="TERCEROOO" style="height: 400px; width: 600px">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-custom-icon" aria-hidden="true">
                  <i class="fas fa-chevron-left"></i>
                </span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-custom-icon" aria-hidden="true">
                  <i class="fas fa-chevron-right"></i>
                </span>
                <span class="sr-only">Next</span>
              </a>
            </div>
              </div>
            </div>
            <!-- CONTENEDOR -->
            
            <!-- GAAAAAAAAAA -->
          </div>
          <div class="col-lg-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">COMUNICADOS</h3>
              </div>

              <div class="card-body">
                <!-- contenedores de comunicados -->
                <!-- comunicado 1 -->
                <div class="row">
                  <div class="col-sm-9">
                    <strong><i class="fas fa-edit mr-1"></i>Comunicado</strong>
                    <p class="text-muted">
                      B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
                    <hr>
                  </div>
                  <div class="col-sm-3">
                    <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                  </div>
                  <hr>
                </div>

                <!-- comunicado 2 -->
                <div class="row">
                  <div class="col-sm-9">
                    <strong><i class="fas fa-edit mr-1"></i>Anuncio </strong>
                    <p class="text-muted">
                      B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
                    <hr>
                  </div>
                  <div class="col-sm-3">
                    <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                  </div>
                  <hr>
                </div>

                <!-- comunicado 3 -->
                <div class="row">
                  <div class="col-sm-9">
                    <strong><i class="fas fa-edit mr-1"></i>Noticia</strong>
                    <p class="text-muted">
                      B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                  </div>
                  <div class="col-sm-3">
                      <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                  </div>
                </div>
                <hr>
                <button type="button" class="btn btn-block btn-success"><i class="fas fa-plus mr-2"></i>Añadir nuevo anuncio</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Marco Normativo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Formatos</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Settings</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <h3>BENEFICIOS DE MANTENER ACTUALIZADO EL LEGAJO PERSONAL</h3>
                    <p>La actualización del legajo personal facilitará al docente de educación superior y administrativo que través de los informes escalafonarios que se expidan se puedan:</p>
                    <ul>
                      <li>Gestionar diversas acciones de personal como: reasignaciones, permutas, destaques, licencias y encargos, así como en procesos disciplinarios.</li>
                      <li>El otorgamiento de beneficios como: asignación por tiempo de servicios (ATS), compensación por tiempo de servicios (CTS) y subsidio por luto y sepelio.</li>
                      <li>Acreditar requisitos para los procesos de concursos o de evaluaciones como la institución educativa donde labora, nivel y modalidad educativa, cargo, jornada laboral, grado de instrucción, experiencia y trayectoria profesional para el caso de acceso a cargos de mayor responsabilidad, entre otros, así como el tiempo de servicios oficiales en la última escala, en el último cargo, en la institución educativa u otros.</li>
                      <li>Sustentar los años de servicios para el otorgamiento de pensiones.</li>
                    </ul>
                    <p><strong>Resumen: </strong> La documentación contenida en el legajo personal constituye la única fuente oficial de información para todos los procesos de evaluación, de la trayectoria docente pública y profesional dentro de la CPD y para el reconocimiento de beneficios, asignaciones, subsidios y otros derechos que le pudiera corresponder de acuerdo a lo que establece la Ley N° 30512.</p>
                    <hr>
                    <!-- Edicion de CONTENEDOR PRINCIPAL -->
                    <div class="row">
                      <div class="col-sm-1">
                        <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                      </div>
                    </div>
                    <!--CIERRA EDICION -->
                  </div>
                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  <div class="row">
                    <div class="col-lg-10">
                      <a href="https://cdn.www.gob.pe/uploads/document/file/582443/RVM_N__092-2020-MINEDU.pdf">RVM N° 092-2020-MINEDU</a>
                    </div>
                    <!-- Edicion de CONTENEDOR PRINCIPAL -->
                    <div class="col-sm-1">
                      <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    </div>
                    <div class="col-sm-1">
                      <button type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <!--CIERRA EDICION -->
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-lg-10">
                      <a href="https://cdn.www.gob.pe/uploads/document/file/1577954/RVM%20N%C2%B0%20016-2021-MINEDU.pdf.pdf">RVM N° 016-2021-MINEDU</a>
                    </div>
                    <!-- Edicion de CONTENEDOR PRINCIPAL -->
                    <div class="col-sm-1">
                      <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    </div>
                    <div class="col-sm-1">
                      <button type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <!--CIERRA EDICION -->
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-lg-10">
                      <p>
                        <strong>N° 017-2020-MINEDU: </strong> Decreto Supremo que Crea y dispone el Uso Obligatorio del Sistema Integrado de Gestión de Personal en el Sector Educación - Sistema AYNI, en las instancias de Gestión Educativa Descentralizada.
                      </p>
                      <ul>
                        <li>Ley N.° 30512, Ley de Institutos y Escuelas de Educación Superior y de la Carrera Pública del Docente</li>
                        <li>Ley N.° 28044, Ley General de Educación</li>
                        <li>Ley N.° 29733, Ley de Protección de Datos Personales</li>
                        <li>Ley N.° 25323, Ley del Sistema Nacional de Archivos</li>
                        <li>Ley N.° 27806, Ley de Transparencia y Acceso a la Información Pública</li>
                        <li>Ley N.° 27815, Código de Ética de la Función Pública</li>
                      </ul>
                    </div>
                    <!-- Edicion de seccion -->
                    <div class="col-sm-1">
                      <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    </div>
                    <div class="col-sm-1">
                      <button type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <!--CIERRA EDICION -->
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-4">
                      <button type="button" class="btn btn-block btn-success"><i class="fas fa-plus mr-2"></i>Añadir nueva sección</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                  <div id="accordion">
                  <div class="card card-primary">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                  Para personal Nombrado
                  </a>
                  </h4>
                  </div>
                  <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-10">
                        <a href="https://drive.google.com/drive/folders/16xZXJolpB1aRV5LoMzPAAoDqbYq-97Qo?usp=sharing"><h5>Formato para personal Nombrado</h5></a>
                      </div>
                      <!-- Edicion de seccion -->
                    <div class="col-sm-1">
                      <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    </div>
                    <div class="col-sm-1">
                      <button type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <!--CIERRA EDICION -->
                    </div>
                  </div>
                  </div>
                  </div>
                  <div class="card card-danger">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                  Para personal Contratado
                  </a>
                  </h4>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-10">
                      <a href="https://drive.google.com/drive/folders/1ekyRWTD1n-7Xtc9cg1v8zaW4GzrwtBDX?usp=sharing"><h5>Formato para personal Contratado</h5></a>
                      </div>
                      <!-- Edicion de seccion -->
                      <div class="col-sm-1">
                        <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                      </div>
                      <div class="col-sm-1">
                        <button type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                      </div>
                      <!--CIERRA EDICION -->
                    </div>
                  </div>
                  </div>
                  </div>
                  <div class="card card-success">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                  Formato para la presentación de nueva documentación
                  </a>
                  </h4>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-10">
                        <ol class="list-unstyled mb-0">
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%2001%20BOLETA%20PERSONAL.pdf">Formato N° 01 - Boleta Personal</a></li>
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%C2%BA%2002.pdf">Formato N° 02 - Declaración Jurada</a></li>
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%C2%BA%2003.pdf">Formato N° 03 - Declaración Jurada de Régimen Pensionario</a></li>
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%C2%BA%2004.pdf">Formato N° 04 - Declaración Jurada Datos Personales - Domicilio Actual</a></li>
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/ANEXO%20N%2001%20MODELO%20DE%20SOLICITUD%20ACTUALIZACI%C3%93N%20DE%20LEGAJO.docx">Anexo N° 01 - Modelo de solicitud de actualizaciones de Legajo</a></li>
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/ANEXO%20N%2002%20MODELO%20DE%20SOLICITUD%20APERTURA%20DE%20LEGAJO%20PERSONAL.docx">Anexo N° 02 - Modelo de solicitud de aperturade Legajo</a></li>
                        </ol>
                      </div>
                      <!-- Edicion de seccion -->
                      <div class="col-sm-1">
                        <button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                      </div>
                      <div class="col-sm-1">
                        <button type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                      </div>
                      <!--CIERRA EDICION -->
                    </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                  Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">NOS ENCONTRAMOS EN</h3>
              </div>

              <div class="card-body">
                <!-- UBICACION -->
                <strong><i class="fas fa-map-marker-alt mr-1"></i>Dirección</strong>
                <p class="text-muted">Jr. Bustamante Dueñas 881 - Chanu chanu II - 2do piso</p>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1567.7043810777395!2d-70.01074918453399!3d-15.861455905793738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d6a296aefc16d%3A0xbe20f3b1dcddbd21!2sDirecci%C3%B3n%20Regional%20de%20Educaci%C3%B3n%20Puno!5e0!3m2!1ses!2spe!4v1644341088001!5m2!1ses!2spe" width="100%" height="300" style="border:0;" class="position-sticky" allowfullscreen="" loading="lazy"></iframe>

              </div>

            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Escalafón Dirección Regional de Educación Puno - Oficial
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io">Escalafón</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../plantilla/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../plantilla/dist/js/demo.js"></script>
</body>
</html>
