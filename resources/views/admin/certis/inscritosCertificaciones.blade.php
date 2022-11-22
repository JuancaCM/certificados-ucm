@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow">
                <div class="col s12 m6 mt-3">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Inscrito correctamente en la base de datos
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error en la inscripción
                        </div>
                    @endif
                </div>
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Inscripción de docentes a
                        cursos</h5>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col s12 m6">
                                <label>Docente:</label>
                                <select name="name_teacher" class="form-control mb-3" aria-label="Teacher" required>
                                    <option selected disabled>Nombre</option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col s12 m6">
                                <label>Certificación:</label>
                                <select name="name_course" class="form-control mb-3" aria-label="Course" required>
                                    <option selected disabled>Nombre</option>
                                    @foreach ($courses as $course)
                                    <p>{{$course->state->name}}</p>
                                        @if ($course->state->name != 'Realizado' and $course->state->name != 'Cancelado')
                                            <option value="{{ $course->id }}">{{ $course->course_name->name }} ({{ $course->state->name }})</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <p style="color: red">* Todos los campos son obligatorios</p>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mb-3">Registrar</button>
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
