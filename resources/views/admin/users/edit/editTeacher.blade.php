@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow">
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Modificacion
                        de docentes</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <span class="text">
                                        <label for="rut">RUT:</label>
                                        <input name="rut" type="text" class="form-control"
                                            value="{{ $teacher->user->rut }}" aria-label="Rut"
                                            aria-describedby="basic-addon1">
                                        <small class="form-text text-muted">Sin puntos y con guion</small>
                                    </span>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <span class="text">
                                    <label for="name">Nombre:</label>
                                    <input name="name" type="text" class="form-control"
                                        value="{{ $teacher->user->name }}" aria-label="Nombre"
                                        aria-describedby="basic-addon1">
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label for="rut">Correo:</label>
                                <div class="input-group mb-3">
                                    <input name="mail" type="email" class="form-control"
                                        value="{{ $teacher->user->mail }}" aria-label="Correo">
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <label for="career">Carrera:</label>
                                <select name="career" class="form-control mb-3" aria-label="Carrera">
                                    <option disabled>Carrera</option>
                                    @foreach ($careers as $career)
                                        @if ($career->id === $teacher->career_id)
                                            <option selected value="{{ $career->id }}">{{ $career->name }}</option>
                                        @else
                                            <option value="{{ $career->id }}">{{ $career->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <span class="text">
                                        <label for="phone">Teléfono:</label>
                                        <input name="phone" type="text" class="form-control" placeholder="Telefono"
                                            value="{{ $teacher->user->phone }}" aria-label="Telefono"
                                            aria-describedby="basic-addon1">
                                    </span>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <label for="campus">Sede:</label>
                                <select name="campus" class="form-control mb-3" aria-label="Sede">
                                    <option disabled>Sede</option>
                                    @foreach ($campuses as $campus)
                                        @if ($campus->id === $teacher->campus_id)
                                            <option selecter value="{{ $campus->id }}">{{ $campus->name }}</option>
                                        @else
                                            <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <label for="contract">Tipo de contrato:</label>
                        <select name="contract" class="form-control mb-3" aria-label="Contrato">
                            <option disabled>Tipo de contrato</option>
                            @foreach ($contracts as $contract)
                                @if ($contract->id === $teacher->contract_id)
                                    <option selected value="{{ $contract->id }}">{{ $contract->name }}</option>
                                @else
                                    <option value="{{ $contract->id }}">{{ $contract->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <input hidden name="userId" type="text" class="form-control" placeholder="Telefono"
                            value="{{ $teacher->user->id }}" aria-label="Telefono" aria-describedby="basic-addon1">
                        <input hidden name="teacherId" type="text" class="form-control" placeholder="Telefono"
                            value="{{ $teacher->id }}" aria-label="Telefono" aria-describedby="basic-addon1">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
