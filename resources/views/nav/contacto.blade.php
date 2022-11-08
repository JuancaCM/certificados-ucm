@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card-body">
                <div class="card border-secondary">
                    <h5 class="card-header border-secondary bg-transparent text-center text-dark font-weight-bold">
                        Contactanos</h5>
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Si tuviste algun problema, escribelo acá." id="floatingTextarea2"
                                style="height: 100px"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary ">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
