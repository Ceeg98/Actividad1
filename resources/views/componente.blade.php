@extends('layouts.master')
@section('title', 'Administrar Componente')
@section('content')

<style>
    .accordion-button:hover {
        background-color: #F3F3F3;
        color: black;
    }
</style>

<div class="container-md">

    <div class="row my-5 g-5 justify-content-around align-items-center">
        <div class="col-6 col-lg-6 p-0" style="border-style: solid; border-color:#ECECEC; background-color:white">

            <div class="text-center card-header bg-info" style="color:white;">
                <h3>Administrar producto</h3>
            </div>
            <div class="container py-3">
                <div class="row">
                    <div class="accordion" id="adminProd">
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="editProd">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#actualizar" aria-expanded="true" aria-controls="actualizar">
                                    Editar producto
                                </button>
                            </h2>
                            <div id="actualizar" class="accordion-collapse collapse show" aria-labelledby="editProd" data-bs-parent="#adminProd">
                                <div class="accordion-body">
                                    <form action="" method="">
                                        <label for="nombreP">Nombre producto:</label>
                                        <input type="text" name="nombreP" value="GTX 1650-ti Super-Q 8gb" class="form-control">
                                        <label for="descripcion">Descripción :
                                            <textarea class="form-control" name="descripción" cols="80" rows="2"></textarea></label>
                                        <br>
                                        <label for="precio">Precio de venta :</label>
                                        <input type="number" min="0" name="precio" value="690.000" class="form-control">
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="deleteProd">
                                <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#eliminar" aria-expanded="false" aria-controls="eliminar">
                                    Dar de baja producto
                                </button>
                            </h2>
                            <div id="eliminar" class="accordion-collapse collapse" aria-labelledby="deleteProd" data-bs-parent="#adminProd">
                                <div class="accordion-body">
                                    <div class="container py-3">
                                        <div class="row">
                                            <div class="col-6 col-lg-6 text-center">
                                                <form action="">
                                                    <input type="hidden" name="cProducto" value="codigo">
                                                    <label><input type="checkbox" name="estado" value="0">Dar de baja</label>
                                                    <br><br>
                                                    <button type="submit" class="btn btn-warning">Dar de baja</button>
                                                </form>
                                            </div>
                                            <div class="col-6 col-lg-6 ">
                                                <form action="">
                                                    <input type="hidden" name="cProducto" value="codigo">
                                                    <label><input type="checkbox" name="eliminar">Eliminar</label>
                                                    <br><br>
                                                    <button type="submit" class="btn btn-danger">
                                                        Eliminar
                                                    </button>
                                                </form>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
@stop