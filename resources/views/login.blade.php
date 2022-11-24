@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow">
                <h5 class="card-header  bg-transparent text-center text-dark font-weight-bold">
                    Inicio de sesion</h5>
                <div class="card-body">
                    <form method="POST">
                        @csrf
                        <div class="mb-3 s12 m6">
                            <label for="">Rut:</label>
                            <input name="rut" type="text" class="form-control" aria-describedby="emailHelp">
                            <small>Rut sin puntos ni guion</small>
                        </div>
                        <div class="mb-3 s12 m6">
                            <label for="">Contraseña:</label>
                            <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
