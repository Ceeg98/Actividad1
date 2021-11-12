@extends('layouts.master')
@section('title', 'Consultar Componente')
@section('content')

<div class="container-md">

    <div class="row my-5 g-5 justify-content-around align-items-center">
        <div class="col-6 col-lg-6 p-0" style="border-style: solid; border-color:#ECECEC; background-color:white">

            <div class="text-center card-header bg-info" style="color:white;">
                <h3>Consultar producto</h3>
            </div>
            <div class="container py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header text-center" style="border-style: solid; border-color:#ECECEC; border-width: 1px;">
                            Por código del producto
                        </div>
                        <div class="card-body">
                            <form action="" method="">
                                <label for="cProducto">Codigo producto</label>
                                <input type="text" name="cProducto" class="form-control">
                                <label>Sucursal: </label>
                                <select class="form-select">
                                    <option value="0">Todas</option>
                                    <option value="1">Sucursal Viña del mar</options>
                                    <option value="2">Sucursal Santiago Centro</options>
                                    <option value="3">Sucursal Rancagua</options>
                                </select>
                                <br>
                                <button class="btn btn-primary">
                                    Consultar
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-header text-center" style="border-style: solid; border-color:#ECECEC; border-width: 1px;">
                            Por nombre del producto
                        </div>
                        <div class="card-body">
                            <form action="" method="">
                                <label for="nProducto">Nombre producto</label>
                                <input type="text" name="nProducto" class="form-control">
                                <label>Sucursal: </label>
                                <select class="form-select">
                                    <option value="0">Todas</option>
                                    <option value="1">Sucursal Viña del mar</options>
                                    <option value="2">Sucursal Santiago Centro</options>
                                    <option value="3">Sucursal Rancagua</options>
                                </select>
                                <br>
                                <button class="btn btn-primary">
                                    Consultar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

@stop