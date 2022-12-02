<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Certificados DIRDOC-UCM</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
        integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="https://kit.fontawesome.com/88b0394940.js" crossorigin="anonymous"></script>

    @vite(['resources/css/app.scss', 'resources/css/sb-admin-2.min.css', 'resources/js/app.js', 'resources/js/sb-admin-2.min.js'])

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <div class="text-center d-none d-md-inline mt-3">
                <button class="rounded-circle border-0" id="sidebarToggle"></i></button>
            </div>

            <hr class="sidebar-divider my-0">

            @if (session('role_name') === 'SuperAdmin')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                        data-target="#collapseRegSuperAdmin" aria-expanded="true" aria-controls="collapseRegSuperAdmin">
                        <i class="fa-solid fa-user-plus"></i>
                        <span>Registrar</span>
                    </a>
                    <div id="collapseRegSuperAdmin" class="collapse" aria-labelledby="headingReg"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="/registroAdmin">Administrador</a>
                        </div>
                    </div>
                </li>
            @endif

            @if (session('role_name') === 'Administrador')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRegUser"
                        aria-expanded="true" aria-controls="collapseRegUser">
                        <i class="fa-solid fa-user-plus"></i>
                        <span>Registro de Usuarios</span>
                    </a>
                    <div id="collapseRegUser" class="collapse" aria-labelledby="headingRegUser"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="/registroDocente">Docente</a>
                            <a class="collapse-item" href="/registroAnalista">Analista</a>
                            <h6 class="collapse-header">Datos de usuario:</h6>
                            <a class="collapse-item" href="/contratoUniversity">Contrato</a>
                            <a class="collapse-item" href="/facultadUniversity">Facultad</a>
                            <a class="collapse-item" href="/carreraUniversity">Carrera</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReg"
                        aria-expanded="true" aria-controls="collapseReg">
                        <i class="fa-solid fa-square-plus"></i>
                        <span>Crear</span>
                    </a>
                    <div id="collapseReg" class="collapse" aria-labelledby="headingReg" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="/registroCertificaciones">Certificaciones</a>
                            <a class="collapse-item" href="/registroDimensiones">Dimensiones</a>
                            <a class="collapse-item" href="/relatoriaCertificaciones">Relatores</a>
                            <h6 class="collapse-header">Datos de certificaciones:</h6>
                            <a class="collapse-item" href="/estadoCertificaciones">Estado</a>
                            <a class="collapse-item" href="/sedeCertificaciones">Sede</a>
                            <a class="collapse-item" href="/publico_objetivoCertificaciones">Publico objetivo</a>
                            <a class="collapse-item" href="/tipoCertificaciones">Tipo certificacion</a>
                            <a class="collapse-item" href="/modalidadCertificaciones">Modalidad</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                        aria-expanded="true" aria-controls="collapseTable">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Ver</span>
                    </a>
                    <div id="collapseTable" class="collapse" aria-labelledby="headingTable"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="/listaDocentes">Docentes</a>
                            <a class="collapse-item" href="/relatores">Relatores</a>
                            <a class="collapse-item" href="/listaCertificaciones">Certificaciones</a>
                            <a class="collapse-item" href="/listaDimensiones">Dimensiones</a>
                            <a class="collapse-item" href="/certDocentes">Docentes certificados</a>
                        </div>
                    </div>
                </li>
            @endif

            @if (session('role_name') === 'Docente')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                        aria-expanded="true" aria-controls="collapseTable">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>Certificaciones</span>
                    </a>
                    <div id="collapseTable" class="collapse" aria-labelledby="headingTable"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="/terminados">Terminadas</a>
                            <a class="collapse-item" href="/enCurso">En curso</a>
                        </div>
                    </div>
                </li>
            @endif

            @if (session('role_name') === 'Administrador')
                <li class="nav-item">
                    <a class="nav-link" href="/inscribir">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>Inscribir Docentes</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/certificado">
                        <i class="fa-solid fa-certificate"></i>
                        <span>Modificar Certificado</span></a>
                </li>
            @endif
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <a title="Dirdoc" href="/"><img src="img/logo.png" alt="Dirdoc">

                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>


                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span
                                        class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('name') }}</span>
                                    <img class="img-profile rounded-circle" src="img/admin.png">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="/perfil">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Perfil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Cerrar Sesión
                                    </a>
                                </div>
                            </li>

                        </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">@yield('content')</div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Presiona el boton "Cerrar Sesión" para terminar con la sesión actual.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary" href="/logout">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
