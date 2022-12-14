@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="card shadow">
            <form method="POST">
                @csrf
                <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Modificacion
                    de certificaciones</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col s12 m6">
                            <label><span style="color: red">*</span>Nombre de la certificación: <i
                                    class="bi bi-question-circle" data-toggle="tooltip" data-placement="right"
                                    title="Si no encuentra la certificación, vaya a la sección de registro de certificaciones."></i></label>
                            <select name="name" class="form-control mb-3" required>
                                <option disabled>Certificación</option>
                                @foreach ($course_names as $course_name)
                                    @if ($course_name->id === $course->course_name_id)
                                        <option selected value="{{ $course_name->id }}">{{ $course_name->name }}
                                        </option>
                                    @else
                                        <option value="{{ $course_name->id }}">{{ $course_name->name }}</option>
                                    @endif
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
                                <option disabled>Publico objetivo</option>
                                @foreach ($target_audiences as $target_audience)
                                    @if ($target_audience->id === $course->target_audience_id)
                                        <option selected value="{{ $target_audience->id }}">{{ $target_audience->name }}
                                        </option>
                                    @else
                                        <option value="{{ $target_audience->id }}">{{ $target_audience->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col s12 m6">
                            <label><span style="color: red">*</span>Sede: <i class="bi bi-question-circle"
                                    data-toggle="tooltip" data-placement="right"
                                    title="Si no encuentra la sede, vaya a la sección de registro de sedes."></i></label>
                            <select name="campus" class="form-control mb-3" required>
                                <option disabled>Sede</option>
                                @foreach ($campuses as $campus)
                                    @if ($campus->id === $course->campus_id)
                                        <option selected value="{{ $campus->id }}">{{ $campus->name }}</option>
                                    @else
                                        <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <label><span style="color: red">*</span>Tipo de certificación: <i class="bi bi-question-circle"
                                    data-toggle="tooltip" data-placement="right"
                                    title="Si no encuentra el tipo de certificación, vaya a la sección de registro de tipos de certificación."></i></label>
                            <select name="type" class="form-control mb-3" required>
                                <option disabled>Tipo</option>
                                @foreach ($types as $type)
                                    @if ($type->id === $course->type_id)
                                        <option selected value="{{ $type->id }}">{{ $type->name }}</option>
                                    @else
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col s12 m6">
                            <label><span style="color: red">*</span>Estado del curso: <i class="bi bi-question-circle"
                                    data-toggle="tooltip" data-placement="right"
                                    title="Si no encuentra el estado, vaya a la sección de registro de estados de certificación."></i></label>
                            <select name="state" class="form-control mb-3" required>
                                <option disabled>Estado</option>
                                @foreach ($states as $state)
                                    @if ($state->id === $course->state_id)
                                        <option selected value="{{ $state->id }}">{{ $state->name }}</option>
                                    @else
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endif
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
                                <option disabled>Modalidad</option>
                                @foreach ($modalities as $modality)
                                    @if ($modality->id === $course->modality_id)
                                        <option selected value="{{ $modality->id }}">{{ $modality->name }}</option>
                                    @else
                                        <option value="{{ $modality->id }}">{{ $modality->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col s12 m6">
                            <label><span style="color: red">*</span>Horario:</label>
                            <div class="form-label mb-3">
                                <input name="schedule" type="text" class="form-control" value="{{ $course->schedule }}"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="form-label mb-3">
                                <label><span style="color: red">*</span>Cantidad de sesiones:</label>
                                <input name="sessions" type="number" min="0" class="form-control"
                                    value="{{ $course->sessions }}" required>
                            </div>
                        </div>
                        <div class="col s12 m6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <label><span style="color: red">*</span>Horas sincrónicas:</label>
                            <input name="synchronous_hours" type="number" min="0" class="form-control"
                                value="{{ $course->synchronous_hours }}" required>
                        </div>
                        <div class="col s12 m6">
                            <div class="form-label mb-3">
                                <label><span style="color: red">*</span>Horas autonomas:</label>
                                <input name="autonomous_hours" type="number" min="0" class="form-control"
                                    value="{{ $course->autonomous_hours }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <label>Enlace de inscripción:</label>
                            <input name="inscription_link" type="text" class="form-control mb-3"
                                value="{{ $course->inscription }}">
                        </div>
                        <div class="col s12 m6">
                            <label>Enlace del programa:</label>
                            <input name="program_link" type="text" class="form-control mb-3"
                                value="{{ $course->program }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <label><span style="color: red">*</span>Relator del curso: <i class="bi bi-question-circle"
                                    data-toggle="tooltip" data-placement="right"
                                    title="Si no encuentra al relator, vaya a la sección de registro de relatores."></i></label>
                            <select name="course_teacher" class="form-control mb-3"required>
                                <option disabled>Relator</option>
                                @foreach ($course_teachers as $course_teacher)
                                    @if ($course_teacher->id === $course->course_teacher_id)
                                        <option selected value="{{ $course_teacher->id }}">
                                            {{ $course_teacher->name }}
                                        </option>
                                    @else
                                        <option value="{{ $course_teacher->id }}">{{ $course_teacher->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="form-label">
                                <label><span style="color: red">*</span>Fecha de inicio:</label>
                                <input type="date" name="start" class="form-control" value="{{ $course->start }}"
                                    required>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="form-label mb-3">
                                <label><span style="color: red">*</span>Fecha de termino:</label>
                                <input type="date" name="end" class="form-control" value="{{ $course->end }}"
                                    required>
                            </div>
                        </div>
                    </div>
                    <input hidden name="userId" type="text" class="form-control" placeholder="Telefono"
                        value="{{ $course->id }}">
                    <p style="color: red">*Campos obligatorios</p>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
