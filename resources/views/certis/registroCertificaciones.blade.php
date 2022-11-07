@extends('base')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card">
                <h5 class="card-header text-center">Registro de certificaciones</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="form-label mb-3">
                                <input type="text" class="form-control" placeholder="Nombre de la certificación"
                                    aria-label="course_names" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <select name="dimension" class="form-control mb-3" aria-label="dimension">
                                <option selected disabled>Dimension</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <select name="campus" class="form-control mb-3" aria-label="campus">
                                <option selected disabled>Sede</option>
                            </select>
                        </div>
                        <div class="col s12 m6">
                            <select name="course_teacher" class="form-control mb-3" aria-label="course_teacher">
                                <option selected disabled>Estado</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <select name="type" class="form-control mb-3" aria-label="type">
                                <option selected disabled>Tipo de certificación</option>
                            </select>
                        </div>
                        <div class="col s12 m6">
                            <select name="modality" class="form-control mb-3" aria-label="modality">
                                <option selected disabled>Modalidad</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="form-label mb-3">
                                <input type="number" min="0" class="form-control" placeholder="Cantidad de sesiones"
                                    aria-label="cantSesiones" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="form-label mb-3">
                                <input type="number" min="0" class="form-control" placeholder="Horas sincronicas"
                                    aria-label="horasSincronicas" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="form-label mb-3">
                                <input type="number" min="0" class="form-control" placeholder="Horas autonomas"
                                    aria-label="horasAutonomas" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="form-label mb-3">
                                <input type="number" min="0" class="form-control" placeholder="Duracion total (hrs)"
                                    aria-label="duracionTotal" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="form-label">
                                <input name="fechaInicio" input id="datepicker" width="276"
                                    placeholder="Fecha de inicio" />
                                <script>
                                    $('#datepicker').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="form-label mb-3">
                                <input name="fechaTermino" input id="datepicker" width="276"
                                    placeholder="Fecha de termino" />
                                <script>
                                    $('#datepicker').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <input type="text" class="form-control mb-3" placeholder="Link de inscripcion"
                                aria-label="inscriptionLink" aria-describedby="basic-addon1">
                        </div>
                        <div class="col s12 m6">
                            <input type="text" class="form-control mb-3" placeholder="Link del programa"
                                aria-label="programLink" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <select name="modality" class="form-control mb-3" aria-label="modality">
                        <option selected disabled>Relator</option>
                    </select>
                </div>
                <div class="mt-3 mb-3 text-center">
                    <button type="submit" class="btn btn-primary mb-3">Registrar</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    {{--  <div class="card mt-3 col-md-4 offset-md-4">
        <div class="card-body">
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Capacitación 1</div>
                        Dimensión o datos de la capacitacion
                    </div>
                    <span class="btn btn-light ">Descargar certificado</span>
        </div>
    </div>  --}}
@endsection