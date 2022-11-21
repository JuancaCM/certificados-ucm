@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card border-info">
                <div class="col s12 m6 mt-3">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Dimension registrada correctamente en la base de datos
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error al registrar el taller
                        </div>
                    @endif
                </div>
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Datos certificado</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <div class="form-label mb-3">
                                        <input name="titulo" type="text" class="form-control" placeholder="Titulo"
                                            aria-label="course_names" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <input name="rut" type="text" class="form-control" placeholder="Rut"
                                        aria-label="course_names" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-floating mb-3">
                                    <input name="directorname" type="text" class="form-control"
                                        placeholder="Nombre del Rector" aria-label="course_names"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <input name="position" type="text" class="form-control" placeholder="Posicion"
                                        aria-label="course_names" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <input name="participation" type="text" class="form-control"
                                        placeholder="Participacion" aria-label="course_names"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <input name="organization" type="text" class="form-control"
                                        placeholder="Organizacion" aria-label="course_names"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="form-label mb-3">
                            <input name="duration" type="text" class="form-control" placeholder="Duracion"
                                aria-label="course_names" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="constance" class="form-control" placeholder="Constancia" id="floatingTextarea1" style="height: 100px"></textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="constancemale" class="form-control" placeholder="Constancia masculino" id="floatingTextarea1"
                                style="height: 100px"></textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="constancefemale" class="form-control" placeholder="Constancia femenino" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="content" class="form-control" placeholder="Contenido" id="floatingTextarea3" style="height: 100px"></textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="final" class="form-control" placeholder="Final" id="floatingTextarea4" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="mb-3 btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
