@extends("base")

@section("content")
<div class="card mt-3 col-md-4 offset-md-4">
    <div class="card-body" >
        <form>
        <label for="basic-url" class="form-label">Registro de Usuarios</label>

        <div class="form-label mb-3">
            <span class="text" </span>
            <input type="text" class="form-control" placeholder="Run sin puntos y con guión" aria-label="Run" aria-describedby="basic-addon1">
        </div>

        <div class="form-label mb-3">
            <span class="text" </span>
            <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Correo" aria-label="Correo">
            </select></div>

        <select class="form-select mb-3" aria-label="Carrera">
            <option selected>Carrera</option>
            <option value="Carrera">Ingenieria Civil Informática</option>
        </select>


        <div class="form-label mb-3">
            <span class="text" </span>
            <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1">
        </div>

        <select class="form-select mb-3" aria-label="Sede">
            <option selected>Sede</option>
            <option value="los niches">Los Niches</option>
            <option value="san miguel">San Miguel</option>
            <option value="ambas">Ámbas</option>
        </select>

        <select class="form-select mb-3" aria-label="Contrato">
            <option selected>Tipo de contrato</option>
            <option value="PAAsociada">Planta académica asociada (Part time)</option>
            <option value="PAOrdinaria">Planta académica ordinaria</option>
            <option value="PAdministrativa">Planta administrativa</option>
            <option value="PAsociada">Planta asociada</option>
            <option value="POrdinaria">Planta ordinaria</option>
            <option value="PPDocente">Planta profesional docente</option>
            <option value="PDocente">Profesional docente</option>
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
