@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card border-secondary">
                <h5 class="card-header border-secondary bg-transparent text-center text-dark font-weight-bold">Registro de
                    certificaciones</h5>
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
                                @foreach ($dimensions as $dimension)
                                <option value="{{ $dimension->id }}">{{ $dimension->name }}</option>
                                @endforeach
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
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="form-label">
                                <input name="fechaInicio" input id="datepicker" class="form-control"
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
                                <input name="fechaTermino" input id="datepicker2" class="form-control"
                                    placeholder="Fecha de termino" />
                                <script>
                                    $('#datepicker2').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary mb-3">Registrar</button>
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
