@extends("base")

@section("content")
<div class="card mt-3 col-md-4 offset-md-4">
    <div class="card-body" >
        <div class="form-floating">
            <textarea class="form-control" placeholder="contacto" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Si tuviste algun problema, escribelo acá</label>
        </div>
        <button type="button" class="btn btn-light mt-3">Enviar</button>



    </div>
</div>

@endsection
