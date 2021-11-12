@extends('layouts.master')
@section('title', 'Login')
@section('content')


  
  <div class="container p-5">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header bg-info text-center" style="color:white;">
                    <h3>Iniciar Sesión</h3>
                </div>
                <div class="card-body">
                    <form action="" method="">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" placeholder="ejemplo@ejemplo.cl" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" placeholder="Ingrese contraseña" class="form-control">
                        </div>
                        <br>
                        <div class="form-group mt-02">
                            <button class="btn btn-success btn-block mt-02">
                                Ingresar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
        </div>
  </div>
</div>


  
@stop