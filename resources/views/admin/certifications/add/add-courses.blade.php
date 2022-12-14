@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow">
                <div class="col s12 m6 mt-3">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Taller registrado correctamente en la base de datos
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error al registrar el taller
                        </div>
                    @endif
                </div>
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de
                        certificaciones</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <label><span style="color: red">*</span>Nombre de la certificación: <i
                                        class="bi bi-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="Si no encuentra la certificación, vaya a la sección de registro de certificaciones."></i></label>
                                <select name="name" class="form-control mb-3" required>
                                    <option selected disabled>Certificación</option>
                                    @foreach ($course_names as $course_name)
                                        <option value="{{ $course_name->id }}">{{ $course_name->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label><span style="color: red">*</span>Público objetivo: <i class="bi bi-question-circle"
                                        data-toggle="tooltip" data-placement="right"
                                        title="Si no encuentra el publico objetivo, vaya a la sección de registro de publico objetivo."></i></label>
                                <select name="target_audience" class="form-control mb-3" required>
                                    <option selected disabled>Publico objetivo</option>
                                    @foreach ($target_audiences as $target_audience)
                                        <option value="{{ $target_audience->id }}">{{ $target_audience->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col s12 m6">
                                <label><span style="color: red">*</span>Sede: <i class="bi bi-question-circle"
                                        data-toggle="tooltip" data-placement="right"
                                        title="Si no encuentra la sede, vaya a la sección de registro de sedes."></i></label>
                                <select name="campus" class="form-control mb-3" required>
                                    <option selected disabled>Sede</option>
                                    @foreach ($campuses as $campus)
                                        <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label><span style="color: red">*</span>Tipo de certificación: <i
                                        class="bi bi-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="Si no encuentra el tipo de certificación, vaya a la sección de registro de tipos de certificación."></i></label>
                                <select name="type" class="form-control mb-3" required>
                                    <option selected disabled>Tipo</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col s12 m6">
                                <label><span style="color: red">*</span>Estado del curso: <i class="bi bi-question-circle"
                                        data-toggle="tooltip" data-placement="right"
                                        title="Si no encuentra el estado, vaya a la sección de registro de estados de certificación."></i></label>
                                <select name="state" class="form-control mb-3" required>
                                    <option selected disabled>Estado</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label><span style="color: red">*</span>Modalidad: <i class="bi bi-question-circle"
                                        data-toggle="tooltip" data-placement="right"
                                        title="Si no encuentra la modalidad, vaya a la sección de registro de modalidades."></i></label>
                                <select name="modality" class="form-control mb-3" required>
                                    <option selected disabled>Modalidad</option>
                                    @foreach ($modalities as $modality)
                                        <option value="{{ $modality->id }}">{{ $modality->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col s12 m6">
                                <label><span style="color: red">*</span>Horario:</label>
                                <div class="form-label mb-3">
                                    <input name="schedule" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label><span style="color: red">*</span>Cantidad de sesiones:</label>
                                    <input name="sessions" type="number" min="0" class="form-control" required>
                                </div>
                            </div>
                            <div class="col s12 m6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label><span style="color: red">*</span>Horas sincrónicas:</label>
                                <input name="synchronous_hours" type="number" min="0" class="form-control" required>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label><span style="color: red">*</span>Horas autonomas:</label>
                                    <input name="autonomous_hours" type="number" min="0" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label>Enlace de inscripción:</label>
                                <input name="inscription_link" type="text" class="form-control mb-3">
                            </div>
                            <div class="col s12 m6">
                                <label>Enlace del programa:</label>
                                <input name="program_link" type="text" class="form-control mb-3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label><span style="color: red">*</span>Relator del curso: <i
                                        class="bi bi-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="Si no encuentra al relator, vaya a la sección de registro de relatores."></i></label>
                                <select name="course_teacher" class="form-control mb-3" required>
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
                                    <label><span style="color: red">*</span>Fecha de inicio:</label>
                                    <input type="date" name="start" input id="datepicker" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label><span style="color: red">*</span>Fecha de termino:</label>
                                    <input type="date" name="end" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <p style="color: red">*Campos obligatorios</p>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
