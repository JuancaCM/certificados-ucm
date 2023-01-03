@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow">
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de dimensiones</h5>
                    <div class="card-body">
                        <div class="form-label mb-3">
                            <label><span style="color: red">*</span>Nombre de la dimensión:</label>
                            <input name="dimension" type="text" class="form-control" required>
                        </div>
                        <div class="form-floating mb-3">
                            <label>Descripción: <i class="bi bi-question-circle" data-toggle="tooltip"
                                    data-placement="right" title="Este campo es opcional, lo puede omitir."></i></label>
                            <textarea name="description" class="form-control" style="height: 100px"></textarea>
                        </div>
                        <p style="color: red">*Campos obligatorios</p>
                        <div class="text-center">
                            <button type="submit" class="mb-3 btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
