@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow">
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Modificacion
                        de cursos</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <span class="text">
                                        <label>Nombre:</label>
                                        <input name="rut" type="text" class="form-control"
                                            value="{{ $courseName->name }}" required>
                                    </span>
                                </div>
                            </div>
                            <div class="col s12 m6 mb-3">
                                <span class="text">
                                    <label>Dimensión:</label>
                                    <select name="dimension" class="form-control mb-3" required>
                                        <option disabled>Dimensión</option>
                                        @foreach ($dimensions as $dimension)
                                            @if ($dimension->id === $courseName->dimension_id)
                                                <option selected value="{{ $dimension->id }}">{{ $dimension->name }}
                                                </option>
                                            @else
                                                <option value="{{ $dimension->id }}">{{ $dimension->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <span class="text">
                                        <label>Contenidos:</label>
                                        <textarea name="contents" class="form-control" style="height: 250px" required>{{ $courseName->contents }}</textarea>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p style="color: red">*Todos los campos son obligatorios</p>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mb-3">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
