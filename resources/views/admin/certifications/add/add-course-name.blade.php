@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow">
                <div class="col s12 m6 mt-3">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Registrado correctamente
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error al registrar
                        </div>
                    @endif
                </div>
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de nombre de curso</h5>
                    <div class="card-body">
                        <div class="form-label mb-3">
                            <label><span style="color: red">*</span>Nombre del curso:</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                        <label><span style="color: red">*</span>Dimensión a la que pertenece: <i
                            class="bi bi-question-circle" data-toggle="tooltip" data-placement="right"
                            title="Si no encuentra la dimensión, presione el boton junto al campo para agregar una nueva."></i></label>
                        <div class="input-group">
                            <select name="dimension" class="form-control mb-3" required>
                                <option selected disabled>Dimensión</option>
                                @foreach ($dimensions as $dimension)
                                    <option value="{{ $dimension->id }}">{{ $dimension->name }}</option>
                                @endforeach
                            </select>
                            <a href="/nueva-dimension" class="btn btn-primary btn-sm ml-1 mb-3" role="button">
                                <i class="fa-solid fa-plus mt-2"></i>
                            </a>
                        </div>
                        <div class="form-floating mb-3">
                            <label>Contenidos: <i class="bi bi-question-circle" data-toggle="tooltip" data-placement="right"
                                    title="Este campo es opcional, lo puede omitir."></i></label>
                            <textarea name="contents" class="form-control" style="height: 100px"></textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <label>Observación: <i class="bi bi-question-circle" data-toggle="tooltip"
                                    data-placement="right" title="Este campo es opcional, lo puede omitir."></i></label>
                            <textarea name="observation" class="form-control" style="height: 100px"></textarea>
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
