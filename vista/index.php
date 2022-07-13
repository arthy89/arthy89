<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Escalafón | DRE Puno</title>
  <link rel="shortcut icon" href="https://escalafon-ayni.minedu.gob.pe/minedu.ico">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plantilla/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../css/cssmy.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="index.php" class="navbar-brand">
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
          <!-- iniciar sesion boton -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Opciones</i></a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left" style="left: inherit; right: 0px;">
              <div class="dropdown-divider"></div>
              <a href="../login.php">
                <button type="button" class="btn btn-block btn-outline-success"><i class="fas fa-sign-in-alt mr-2"></i>Iniciar Sesión</button>
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
          <!-- ./iniciar sesion botton -->
        </ul>

      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <a href="https://drepuno.gob.pe" class="navbar-brand">
          <img src="../plantilla/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">DRE Puno</span>
        </a>
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
                <strong><i class="fas fa-book mr-1"></i>Capacitación</strong>
                  <p class="text-muted">
                    Capacitación para docentes guía informativa.
                    <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer"><i>Video de referencia</i></a>
                  </p>
                  <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i>Ubicación de beneficiarios</strong>
                  <p class="text-muted">
                    Conoce la ubicaciones de los beneficiarios de la nueva... 
                    <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer"><i>aquí</i></a>
                  </p>
                  <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i>Resoluciones importantes</strong>
                  <p class="text-muted">
                    Resoluciones de ... que sirven para ...
                    <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer"><i>Enlace directo</i></a>
                  </p>
                  <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Recomendaciones</strong>
                  <p class="text-muted">
                    Le recomendamos que considere las actualizaciones de su legajo con los siguientes detalles.  
                    <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer"><i>Aquí</i></a>
                  </p>
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
                    <a class="nav-link" id="custom-tabs-one-secciones-tab" data-toggle="pill" href="#custom-tabs-one-secciones" role="tab" aria-controls="custom-tabs-one-secciones" aria-selected="false">Secciones</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-beneficio-tab" data-toggle="pill" href="#custom-tabs-one-beneficio" role="tab" aria-controls="custom-tabs-one-beneficio" aria-selected="false">Apertura</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Marco Normativo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Formatos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Informe</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <h1><b> ESCALAFÓN DRE PUNO</b></h1>
                    <h5><strong>ESCALAFÓN: </strong></h5>
                    <p>El Escalafón Magisterial es un registro nacional y descentralizado por el cual se documenta y publica la trayectoria laboral o vida profesional de los Profesores, Docentes de Educación superior y auxiliar de educación que prestan servicios al Estado, así como el personal cesante o pensionista.</p>
                    <h5><b><u>Nota</u>: </b></h5>
                    <p>Según establece la RVM. N° 092-2020-MINEDU. En <b>Disposiciones Transitorias</b> numeral 7.5. <u>Del personal de otros regímenes laborales</u>, “En tanto SERVIR regule lo concerniente al escalafón para el personal administrativo, las DRE/UGEL podrán utilizar el sistema informático de escalafón para tal fin.</p>
                    
                    <h5><strong>LEGAJO PERSONAL: </strong></h5>
                    <ol>
                      <li>Es una carpeta oficial e individual (documentación físico y digital), donde se archivan los documentos personales y administrativos del servidor y ex servidor, debidamente clasificados y ordenados de acuerdo a la estructura vigente. (<a href="https://cdn.www.gob.pe/uploads/document/file/582443/RVM_N__092-2020-MINEDU.pdf" target="_blank" rel="noopener noreferrer"><i>RVM N° 092-2020-MINEDU</i></a>).</li>
                      <li>Es una carpeta que contiene secciones específicas donde se archivan los documentos personales, profesionales, producción intelectual, cultural, social y otros, cuyo manejo es descentralizado para el ordenamiento y conservación de los documentos de los docentes nombrados, contratados, cesantes y pensionistas de una institución. (<a href="https://cdn.www.gob.pe/uploads/document/file/1577954/RVM%20N%C2%B0%20016-2021-MINEDU.pdf.pdf" target="_blank" rel="noopener noreferrer"><i>RVM N° 016-2021-MINEDU</i></a>).</li>
                    </ol>

                    <h5><strong>TIPO DE LEGAJO PERSONAL: </strong></h5>
                    <ol>
                      <li><b><u>Físico</u>: </b>Es el conjunto de documentos personales, trayectoria académica y laboral del docente, que se incorporan en forma ordenada de acuerdo a la estructura señalada en el presente documento normativo. Los documentos del legajo se van incrementando a lo largo de la vida laboral hasta el cese.</li>
                      <li><b><u>Digital</u>: </b>Es el registro sistematizado de la información y los documentos digitalizados contenidos en el legajo personal físico.</li>
                    </ol>

                    <h5><strong>CLASIFICACIÓN DEL LEGAJO PERSONAL: </strong></h5>
                    <ol>
                      <li><b><i>Servidores en actividad: </i></b>Es el que corresponde a los profesores y auxiliares de educación que se encuentran ejerciendo el cargo en condición de nombrados.</li>
                      <li><b><i>Servidor cesante: </i></b>Es el que corresponde a los profesores y auxiliares de educación que dejaron de prestar servicios en condición de nombrados y que no perciben pensión de cesantía por encontrase comprendidos en los sistemas previsionales público (ONP) o privado (AFP). </li>
                      <li><b><i>Pensionista: </i></b>Es el que corresponde a los profesores y auxiliares de educación que dejaron de prestar servicios en condición de nombrados y que perciben pensión de cesantía dentro de los alcances del Decreto Ley N.° 20530, modificado por la Ley N.° 28449.</li>
                    </ol>
                    <h5><b><u>Nota</u>: </b></h5>
                    <p>Según establece la RVM. N° 016-2021-MINEDU. Clases de legajo personal: <b>Legajo Personal del Docente nombrado de la CPD, Legajo de Personal Contratado, Legajo de Personal Cesante y Legajo del Personal Pensionista.</b></p>
                  </div>

                  <!-- secciones -->
                  <div class="tab-pane fade" id="custom-tabs-one-secciones" role="tabpanel" aria-labelledby="custom-tabs-one-secciones-tab">
                    <h5><strong>ESTRUCTURA DEL LEGAJO PERSONAL: </strong></h5>
                    <p>El legajo personal se organiza y divide en diez (10) secciones que contienen la documentación clasificada y ordenada cronológicamente según el siguiente orden:</p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 300px;" class="seccion-cabeza">SECCIÓN</th>
                          <th class="seccion-cabeza">INFORMACIÓN</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- I -->
                        <tr>
                          <td><b>Sección I</b><p>Filiación e identificación Personal</p></td>
                          <td>Se registran los datos personales del servidor, así como datos familiares, dirección, dominio de lengua indígena u originaria, declaraciones juradas, etc. </td>
                        </tr>
                        <!-- II -->
                        <tr style="background-color: #f8f9fa">
                          <td><b>Sección II</b><p>Situación académica (Formación).</p></td>
                          <td>Se registran el grado de bachiller, título profesional y de segunda especialidad, estudios de posgrado (maestrías y doctorados) y especializaciones, actualizaciones o capacitaciones. </td>
                        </tr>
                        <!-- III -->
                        <tr>
                          <td><b>Sección III</b><p>Ingreso o reingreso.</p></td>
                          <td>Se registran los actos resolutivos de contratos, de nombramiento o de reingreso. </td>
                        </tr>
                        <!-- IV -->
                        <tr style="background-color: #f8f9fa">
                          <td><b>Sección IV</b><p>Trayectoria laboral.</p></td>
                          <td>Se registran actos resolutivos de desplazamientos definitivos por reasignación o permuta y desplazamientos temporales por destaque o encargatura, así como de la designación en cargos de mayor responsabilidad y de ascensos de escala magisterial.</td>
                        </tr>
                        <!-- V -->
                        <tr>
                          <td><b>Sección V</b><p>Asignaciones e incentivos temporales, retenciones judiciales y pagos indebidos.</p></td>                        
                          <td>Se registran, las resoluciones que otorgan el subsidio por luto y sepelio ante el fallecimiento de un familiar del servidor; así como resoluciones de asignación por tiempo de servicios (ATS), entre otros. </td>
                        </tr>
                        <!-- VI -->
                        <tr style="background-color: #f8f9fa">
                          <td><b>Sección VI</b><p>Retiro y régimen pensionario.</p></td>
                          <td>Se registran resoluciones que reconocen la asignación por tiempo de servicios (ATS), resolución de cese y otorgamiento de compensación por tiempo de servicios (CTS), así como de otorgamiento de pensión. </td>
                        </tr>
                        <!-- VII -->
                        <tr>
                          <td><b>Sección VII</b><p>Premios y estímulos.</p></td>
                          <td>Se registran los reconocimientos o felicitaciones que haya recibido el servidor, a través de actos resolutivos u otros documentos. Asimismo, aquellas resoluciones que conceden la Palmas Magisteriales. </td>
                        </tr>
                        <!-- VIII -->
                        <tr style="background-color: #f8f9fa">
                          <td><b>Sección VIII</b><p>Sanciones.</p></td>
                          <td>Se registran las sanciones impuestas al servidor como la suspensión, el cese temporal o la destitución. </td>
                        </tr>
                        <!-- IX -->
                        <tr>
                          <td><b>Sección IX</b><p>Licencias y vacaciones.</p></td>
                          <td>Se registran las resoluciones que otorgan licencias con goce de remuneraciones, por los siguientes motivos: incapacidad temporal, maternidad, adopción, entre otras; y licencias sin goce de remuneraciones por motivos particulares, estudios, entre otras razones. </td>
                        </tr>
                        <!-- X -->
                        <tr style="background-color: #f8f9fa">
                          <td><b>Sección X</b><p>Otros.</p></td>
                          <td>Se registra aquella documentación que no pueda ser ubicada en las secciones anteriores y se anexa la ficha personal (ficha escalafonaria). </td>
                        </tr>
                      </tbody>
                    </table>                  
                  </div>
                  <!-- ./secciones -->

                  <!-- beneficios -->
                  <div class="tab-pane fade" id="custom-tabs-one-beneficio" role="tabpanel" aria-labelledby="custom-tabs-one-beneficio-tab">
                    <h4><strong>APERTURA DE LEGAJO PERSONAL</strong></h4>
                    <p>La apertura del legajo personal se encuentra a cargo del equipo de escalafón y legajos (ESLE), 
                      y se realiza de oficio con la resolución de nombramiento o de contrato que da inicio a la relación
                      laboral. El servidor que inicia el vínculo con la IGED y que ha sido notificado con su resolución,
                      debe presentar ante mesa de partes de la DRE o UGEL de su jurisdicción, la documentación correspondiente 
                      dentro de los diez (10) días hábiles desde la notificación. 

                      En caso de que la documentación se encuentre incompleta, deteriorada o tenga enmendaduras, la DRE 
                      o UGEL observará dichos documentos y otorgará un plazo adicional de cinco (5) días hábiles para 
                      que el servidor realice la subsanación correspondiente. (Ver Instructivo).
                    </p>



                    <h5><strong>BENEFICIOS DE MANTENER ACTUALIZADO EL LEGAJO PERSONAL: </strong></h5>
                    <p>La actualización del legajo personal facilitará al docente de educación superior y administrativo que través de los informes escalafonarios que se expidan se puedan:</p>
                    <ul>
                      <li>Gestionar diversas acciones de personal como: reasignaciones, permutas, destaques, licencias y encargos, así como en procesos disciplinarios.</li>
                      <li>El otorgamiento de beneficios como: asignación por tiempo de servicios (ATS), compensación por tiempo de servicios (CTS) y subsidio por luto y sepelio.</li>
                      <li>Acreditar requisitos para los procesos de concursos o de evaluaciones como la institución educativa donde labora, nivel y modalidad educativa, cargo, jornada laboral, grado de instrucción, experiencia y trayectoria profesional para el caso de acceso a cargos de mayor responsabilidad, entre otros, así como el tiempo de servicios oficiales en la última escala, en el último cargo, en la institución educativa u otros.</li>
                      <li>Sustentar los años de servicios para el otorgamiento de pensiones.</li>
                    </ul>
                    <p><strong>Resumen: </strong> La documentación contenida en el legajo personal constituye la única fuente oficial de información para todos los procesos de evaluación, de la trayectoria docente pública y profesional dentro de la CPD y para el reconocimiento de beneficios, asignaciones, subsidios y otros derechos que le pudiera corresponder de acuerdo a lo que establece la Ley N° 30512.</p>
                  </div>
                  <!-- ./beneficios -->

                  
                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  <a href="https://cdn.www.gob.pe/uploads/document/file/582443/RVM_N__092-2020-MINEDU.pdf" target="_blank" rel="noopener noreferrer">RVM N° 092-2020-MINEDU</a>
                  <br>
                  <hr>
                  <a href="https://cdn.www.gob.pe/uploads/document/file/1577954/RVM%20N%C2%B0%20016-2021-MINEDU.pdf.pdf" target="_blank" rel="noopener noreferrer">RVM N° 016-2021-MINEDU</a>
                  <hr>
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
                          <a href="https://drive.google.com/drive/folders/16xZXJolpB1aRV5LoMzPAAoDqbYq-97Qo?usp=sharing" target="_blank" rel="noopener noreferrer"><h5>Formato para personal Nombrado</h5></a>
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
                          <a href="https://drive.google.com/drive/folders/1ekyRWTD1n-7Xtc9cg1v8zaW4GzrwtBDX?usp=sharing" target="_blank" rel="noopener noreferrer"><h5>Formato para personal Contratado</h5></a>
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
                        <ol class="list-unstyled mb-0">
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%2001%20BOLETA%20PERSONAL.pdf" target="_blank" rel="noopener noreferrer">Formato N° 01 - Boleta Personal</a></li>
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%C2%BA%2002.pdf" target="_blank" rel="noopener noreferrer">Formato N° 02 - Declaración Jurada</a></li>
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%C2%BA%2003.pdf" target="_blank" rel="noopener noreferrer">Formato N° 03 - Declaración Jurada de Régimen Pensionario</a></li>
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%C2%BA%2004.pdf">Formato N° 04 - Declaración Jurada Datos Personales - Domicilio Actual</a></li>
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/ANEXO%20N%2001%20MODELO%20DE%20SOLICITUD%20ACTUALIZACI%C3%93N%20DE%20LEGAJO.docx" target="_blank" rel="noopener noreferrer">Anexo N° 01 - Modelo de solicitud de actualizaciones de Legajo</a></li>
                          <li><a href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/ANEXO%20N%2002%20MODELO%20DE%20SOLICITUD%20APERTURA%20DE%20LEGAJO%20PERSONAL.docx" target="_blank" rel="noopener noreferrer">Anexo N° 02 - Modelo de solicitud de aperturade Legajo</a></li>
                        </ol>
                      </div>
                    </div>
                    <!-- card success -->
                  </div>
                  <!-- accordition -->
                </div>
                <!-- tab pane fade -->
              </div>
              <!-- ./card body -->
                <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                  <h5><b>EL INFORME ESCALAFONARIO</b></h5>
                  <p>
                    Es un documento de carácter interno que contiene información del legajo personal del servidor y ex servidor y es expedido por las DRE y UGEL a través del módulo de escalafón del sistema AYNI. 
                    Este documento es relevante para participar en concursos públicos del MINEDU, gestionar situaciones administrativas y el reconocimiento de beneficios, entre otros.
                    El informe Escalafonario constituye el único documento oficial que acredita la formación académica, la trayectoria laboral, méritos, deméritos, incentivos, asignaciones, 
                    licencias y vacaciones a largo de la vida profesional del Docente y Administrativo de educación, que determina y asu vez puede sustentar: 
                  </p>
                  <ul>
                    <li>Pago de su remuneración, bonificaciones y asignaciones. </li>
                    <li>Constituye la única fuente oficial de información para todos los procesos de evaluación, de la trayectoria docente pública y profesional dentro de la CPD</li>
                    <li>Participar en procesos de ascenso de escala magisterial. </li>
                    <li>Participar en procesos de acceso a cargos de mayor responsabilidad.</li>
                    <li>Reconocimiento de beneficios sociales.</li>
                    <li>Pago de pensiones.</li>
                    <li>Otros.</li>
                  </ul>
                  <h5><strong>NOTA: VIGENCIA TIENE EL INFORME ESCALAFONARIO</strong></h5>
                  <p>Los Informes Escalafonarios tendrán una <b>vigencia no mayor de seis (6) meses</b> para trámites en general, salvo disposición específica del MINEDU que establezca un plazo diferente. (<a href="https://cdn.www.gob.pe/uploads/document/file/1577954/RVM%20N%C2%B0%20016-2021-MINEDU.pdf.pdf" target="_blank" rel="noopener noreferrer"><i>RVM N° 016-2021-MINEDU</i></a>).</p>
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
    <strong>Copyright &copy; 2021-2022 <a href="#">Escalafón</a>.</strong> All rights reserved.
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
