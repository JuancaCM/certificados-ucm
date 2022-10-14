@extends('base')

@section('content')
    <div class="card mt-3 col-md-4 offset-md-4">
        <div class="card-body">

            @if (null!=session('insert') && session('insert'))
                <div class="alert alert-success">
                    Docente insertado
                </div>
            @elseif (null!=session('insert') && !session('insert'))
                <div class="alert alert-danger">
                    Ha ocurrido un error al insertar
                </div>
            @endif

            <form method="POST">
                @csrf
                <label for="basic-url" class="form-label">Registro de Usuarios</label>

                <div class="form-label mb-3">
                    <span class="text" </span>
                        <input name="rut" type="text" class="form-control" placeholder="Rut sin puntos y con guión"
                            aria-label="Rut" aria-describedby="basic-addon1">
                </div>

                <div class="form-label mb-3">
                    <span class="text" </span>
                        <input name="name" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"
                            aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input name="mail" type="email" class="form-control" placeholder="Correo" aria-label="Correo">
                </div>

                <select name="career" class="form-select mb-3" aria-label="Carrera">
                    <option selected>Carrera</option>
                    @foreach ($careers as $career)
                        <option value="{{ $career->id }}">{{ $career->name }}</option>
                    @endforeach
                </select>


                <div class="form-label mb-3">
                    <span class="text" </span>
                        <input name="phone" type="text" class="form-control" placeholder="Telefono"
                            aria-label="Telefono" aria-describedby="basic-addon1">
                </div>

                <select name="campus" class="form-select mb-3" aria-label="Sede">
                    <option selected>Sede</option>
                    @foreach ($campuses as $campus)
                        <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                    @endforeach
                </select>

                <select name="contract" class="form-select mb-3" aria-label="Contrato">
                    <option selected>Tipo de contrato</option>
                    @foreach ($contracts as $contract)
                        <option value="{{ $contract->id }}">{{ $contract->name }}</option>
                    @endforeach
                </select>

                <div class="col-auto mb-3 ">
                    <button type="submit" class="btn btn-light mb-3">Registrar</button>
                </div>

            </form>

            <div class="card-footer text-muted">
                <h5 class="form-label">Subida Masiva</h5>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Subir</label>
                </div>
            </div>

        </div>
    </div>
@endsection
