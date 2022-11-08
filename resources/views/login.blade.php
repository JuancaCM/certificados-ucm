@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card-body">
                <div class="card border-secondary">
                    <h5 class="card-header border-secondary bg-transparent text-center text-dark font-weight-bold">
                        Inicio de sesion</h5>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Rut sin puntos y sin digito verificador" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Contraseña">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
