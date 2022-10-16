@extends("base")

@section("content")

<div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
    <div class="card-body" >

        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rut sin digito verificador</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>

    </div>
</div>

@endsection
