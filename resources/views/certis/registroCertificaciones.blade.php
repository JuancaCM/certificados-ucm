@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card border-secondary">
                @if (null != session('insert') && session('insert'))
                    <div class="alert alert-success text-center">
                        Taller registrado en la base de datos
                    </div>
                @elseif (null != session('insert') && !session('insert'))
                    <div class="alert alert-danger text-center">
                        Ha ocurrido un error al registrar el taller
                    </div>
                @endif
                <form method="POST">
                    @csrf
                    <h5 class="card-header border-secondary bg-transparent text-center text-dark font-weight-bold">Registro
                        de
                        certificaciones</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <select name="name" class="form-control mb-3" aria-label="name">
                                    <option selected disabled>Nombre de la certificación</option>
                                    @foreach ($course_names as $course_name)
                                        <option value="{{ $course_name->id }}">{{ $course_name->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <select name="target_audience" class="form-control mb-3" aria-label="modality">
                                    <option selected disabled>Publico objetivo</option>
                                    @foreach ($target_audiences as $target_audience)
                                        <option value="{{ $target_audience->id }}">{{ $target_audience->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col s12 m6">
                                <select name="campus" class="form-control mb-3" aria-label="campus">
                                    <option selected disabled>Sede</option>
                                    @foreach ($campuses as $campus)
                                        <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <select name="type" class="form-control mb-3" aria-label="type">
                                    <option selected disabled>Tipo de certificación</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col s12 m6">
                                <select name="state" class="form-control mb-3" aria-label="course_teacher">
                                    <option selected disabled>Estado</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <select name="modality" class="form-control mb-3" aria-label="modality">
                                    <option selected disabled>Modalidad</option>
                                    @foreach ($modalities as $modality)
                                        <option value="{{ $modality->id }}">{{ $modality->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <input name="schedule" type="text" class="form-control" placeholder="Horario"
                                        aria-label="schedule" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <input name="sessions" type="number" min="0" class="form-control"
                                        placeholder="Cantidad de sesiones" aria-label="sessions"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <input name="duration" type="number" min="0" class="form-control"
                                        placeholder="Duracion total (hrs)" aria-label="duracionTotal"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <input name="synchronous_hours" type="number" min="0" class="form-control"
                                    placeholder="Horas sincronicas" aria-label="synchronous_hours"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <input name="autonomous_hours" type="number" min="0" class="form-control"
                                        placeholder="Horas autonomas" aria-label="autonomous_hours"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <input name="inscription_link" type="text" class="form-control mb-3"
                                    placeholder="Link de inscripcion" aria-label="inscription_link"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="col s12 m6">
                                <input name="program_link" type="text" class="form-control mb-3"
                                    placeholder="Link del programa" aria-label="program_link"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <select name="course_teacher" class="form-control mb-3" aria-label="modality">
                                    <option selected disabled>Relator</option>
                                    @foreach ($course_teachers as $course_teacher)
                                        <option value="{{ $course_teacher->id }}">{{ $course_teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label">
                                    <input name="fecha_inicio" input id="datepicker" class="form-control"
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
                                    <input name="fecha_termino" input id="datepicker2" class="form-control"
                                        placeholder="Fecha de termino" />
                                    <script>
                                        $('#datepicker2').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </form>
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
