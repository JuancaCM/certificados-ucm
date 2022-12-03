@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow mb-3">
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Imagenes del certificado
                    </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <img src="img/logoUCM.png" alt="" class="img-thumbnail">
                                <div class="custom-file mt-3 mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" lang="es">
                                    <label class="custom-file-label" for="customFile">Seleccionar imagen</label>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <img src="img/logoCDID.png" alt="" class="img-thumbnail">
                                <div class="custom-file mt-3 mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" lang="es">
                                    <label class="custom-file-label" for="customFile">Seleccionar imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 text-center">
                            <img src="img/firma.png" alt="" class="img-thumbnail">
                            <div class="custom-file mt-3 mb-3">
                                <input type="file" class="custom-file-input" id="customFile" lang="es">
                                <label class="custom-file-label" for="customFile">Seleccionar imagen</label>
                            </div>
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
