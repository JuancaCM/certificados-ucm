@extends("base")

@section("content")
<div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
    <div class="card-body" >
        <div class="form-floating">
            <textarea class="form-control" placeholder="Si tuviste algun problema, escribelo acá." id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        <button type="button" class="btn btn-primary mt-3">Enviar</button>



    </div>
</div>

@endsection
