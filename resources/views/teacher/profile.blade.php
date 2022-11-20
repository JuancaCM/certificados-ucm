@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="img/admin.png" id="imgProfile" style="width: 150px; height: 150px"
                                        class="img-thumbnail" />
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a
                                            href="javascript:void(0);">Nombre Apellido</a></h2>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard"
                                        value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                        aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nombre Completo</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                John Doe
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Rut</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                John Doe
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Correo</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                uwu@ucm.cl
                                            </div>
                                        </div>
                                        <hr />


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Carrera/Unidad</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Ingenieria Civil Informatica
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Facultad/Direccion</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Facultad de ciencias de la ingenieria
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Tipo de Contrato</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Planta asociada (Part Time)
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nombre Completo</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                John Doe
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
