@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow mb-3">
                <div class="col s12 m6 mt-3">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Certificado modificado correctamente
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error al modificar el certificado
                        </div>
                    @endif
                </div>
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Datos certificado
                    </h5>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <a href="/imagenes" class="btn btn-primary" role="button">Cambiar imagenes</a>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <div class="form-label mb-3">
                                        <label>Título:</label>
                                        <input name="titulo" type="text" class="form-control" aria-label="course_names"
                                            value="{{ $certificate->title }}" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-floating mb-3">
                                    <label>Nombre director/a:</label>
                                    <input name="directorname" type="text" class="form-control" aria-label="course_names"
                                        value="{{ $certificate->directorName }}" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Cargo:</label>
                                    <input name="position" type="text" class="form-control" aria-label="course_names"
                                        value="{{ $certificate->position }}" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Constancia sexo no definido:</label>
                                    <input name="constancy" type="text" class="form-control" aria-label="course_names"
                                        value="{{ $certificate->constancy }}" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Constancia sexo masculino:</label>
                                    <input name="constancyM" type="text" class="form-control" aria-label="course_names"
                                        value="{{ $certificate->constancyM }}" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Constancia sexo femenino:</label>
                                    <input name="constancyF" type="text" class="form-control" aria-label="course_names"
                                        value="{{ $certificate->constancyF }}" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Nombre docente: (ejemplo)</label>
                                    <input type="text" class="form-control" aria-label="course_names"
                                        aria-describedby="basic-addon1" value="Juanito Perez" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Prefijo para RUT:</label>
                                    <input name="rut" type="text" class="form-control" aria-label="course_names"
                                        aria-describedby="basic-addon1" value="{{ $certificate->varRut }}" required>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>RUT docente: (ejemplo)</label>
                                    <input type="text" class="form-control" aria-label="course_names"
                                        aria-describedby="basic-addon1" value="8.888.888-8" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Prefijo para participación:</label>
                                    <input name="participation" type="text" class="form-control"
                                        value="{{ $certificate->participation }}" aria-label="course_names"
                                        aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Taller: (ejemplo)</label>
                                    <input type="text" class="form-control" aria-label="course_names"
                                        aria-describedby="basic-addon1" value="Normas APA" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Prefijo para organización:</label>
                                    <input name="organization" type="text" class="form-control"
                                        aria-label="course_names" value="{{ $certificate->organization }}"
                                        aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Fecha certificado: (ejemplo)</label>
                                    <input type="text" class="form-control" aria-label="course_names"
                                        aria-describedby="basic-addon1" value="01 de enero del 2022" disabled>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Prefijo para duración:</label>
                                    <input name="duration" type="text" class="form-control" aria-label="course_names"
                                        aria-describedby="basic-addon1" value="{{ $certificate->varDuration }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Duración: (ejemplo)</label>
                                    <input type="text" class="form-control" aria-label="course_names" value="2 horas"
                                        aria-describedby="basic-addon1" disabled>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Prefijo para contenido:</label>
                                    <input name="content" type="text" class="form-control" aria-label="course_names"
                                        value="{{ $certificate->varContent }}" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <label>Contenidos: (ejemplo)</label>
                                    <input type="text" class="form-control" aria-label="course_names"
                                        value="Alfabetización informacional, Identificar necesidad de información etc."
                                        aria-describedby="basic-addon1" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <label>Final sin sexo definido:</label>
                            <textarea name="final" class="form-control" style="height: 100px" required>{{ $certificate->end }}</textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <label>Final sexo masculino:</label>
                            <textarea name="finalM" class="form-control" style="height: 100px" required>{{ $certificate->endM }}</textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <label>Final sexo femenino:</label>
                            <textarea name="finalF" class="form-control" style="height: 100px" required>{{ $certificate->endF }}</textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
