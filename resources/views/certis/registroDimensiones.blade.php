@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card border-info">
                <div class="card-header mb-3">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="/registroCertificaciones">Certificaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active">Dimensiones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/estadoCertificaciones">Estado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sedeCertificaciones">Sede</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/relatoriaCertificaciones">Relatoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/publico_objetivoCertificaciones">Publico objetivo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tipoCertificaciones">Tipo Certificación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/modalidadCertificaciones">Modalidad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/inscritosCertificaciones">Inscritos</a>
                        </li>    
                    </ul>
                </div>
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de dimensiones</h5>
                    <div class="card-body">
                        <div class="form-label mb-3">
                            <input name="dimension" type="text" class="form-control" placeholder="Nombre dimensión"
                                aria-label="course_names" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="description" class="form-control" placeholder="Descripción" id="floatingTextarea2"
                                style="height: 100px"></textarea>
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
