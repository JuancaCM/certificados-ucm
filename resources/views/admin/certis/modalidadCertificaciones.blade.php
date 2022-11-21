@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow">
                <div class="col s12 m6 mt-3">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Modalidad registrada correctamente en la base de datos
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error al registrar Modalidad
                        </div>
                    @endif
                </div>
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de Modalidad</h5>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col s12 m6 mb-3">
                                <span class="text">
                                    <label><span style="color: red">*</span>Nombre de la modalidad:</label>
                                    <input name="name" type="text" class="form-control" aria-label="Nombre"
                                        aria-describedby="basic-addon1" required>
                                </span>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <label>Observación: <i class="bi bi-question-circle" data-toggle="tooltip"
                                    data-placement="right" title="Este campo es opcional, lo puede omitir."></i></label>
                            <textarea name="description" class="form-control" style="height: 100px"></textarea>
                        </div>
                        <p style="color: red">*Campos obligatorios</p>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mb-3">Registrar</button>
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
