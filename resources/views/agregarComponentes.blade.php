@extends('layouts.master')
@section('title', 'Agregar Componentes')
@section('content')


<?php

use Illuminate\Support\Str;

$uniqid = Str::random(6);
?>

<div class="container-md">

  <div class="row my-5 g-5 justify-content-around align-items-center">
    <div class="col-6 col-lg-6 p-0" style="border-style: solid; border-color:#ECECEC; background-color:white">

      <div class="text-center card-header bg-info" style="color:white;">
        <h3>Agregar producto</h3>
      </div>
      <div class="container py-3">
        <div class="row">
          <div class="card-body">
            <form action="" method="">
              <input type="hidden" name="uniqueCode" value="<?= $uniqid ?>">
              <label for="nombreP">Nombre producto:</label>
              <input type="text" name="nombreP" class="form-control">
              <label>Categoria de Componente :</label>
              <select class="form-select">
                <option value="1">Tarjeta grafica</options>
                <option value="2">Procesador</options>
                <option value="3">Tarjeta Ram</options>
                <option value="4">Memoria SSD</options>
                <option value="5">Disco Duro</options>
              </select>
              <label>Elija la Sucursal: </label>
              <select class="form-select">
                <option value="1">Sucursal Viña del mar</options>
                <option value="2">Sucursal Santiago Centro</options>
                <option value="3">Sucursal Rancagua</options>
              </select>
              <label for="descripcion">Descripción :
                <textarea class="form-control" name="descripción" cols="80" rows="5"></textarea></label>
              <br>
              <label for="cantidad">Cantidad :</label>
              <input type="number" min="0" name="cantidad" class="form-control">
              <label for="precio">Precio de venta :</label>
              <input type="number" min="0" name="precio" class="form-control">
              <br>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

</div>


@stop