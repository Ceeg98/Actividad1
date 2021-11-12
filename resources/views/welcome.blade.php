@extends('layouts.master')
@section('title', 'Home')
@section('content')

<style>
    td {
        width: 25rem;
        overflow: auto;
    }

    .table-comp {
        width: 80%;
    }

    .codigo,
    .administrar {
        width: 10%;
    }

    .cantidad {
        width: 25%;
    }

    .dropdown-toggle {
        width: 80%;
    }

    tbody {
        background-color: white;
    }
</style>

<div class="container-lg p-5">
    <div class="row my-1 g-5 justify-content-around align-items-center">
        <div class=" table-comp col-6 col-lg-6 p-5">
            <h2 class="text-center">Listado de componentes</h2>
            <br>
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th class="codigo">Codigo</th>
                        <th>Nombre</th>
                        <th class="cantidad">Cantidad</th>
                        <th class="administrar">Administrar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vc3M6e</td>
                        <td>GTX 1650-ti Super-Q 8gb</td>
                        <td>
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Disponibles: 10
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li> Santiago Centro: 2</li>
                                <li> Viña del Mar: 8</li>
                                <li> Rancagua: 0</li>
                            </ul>
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="/componente">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>9Pkl32</td>
                        <td>RTX 2060 12gb pulse</td>
                        <td>
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Disponibles: 3
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li> Santiago Centro: 1</li>
                                <li> Viña del Mar: 0</li>
                                <li> Rancagua: 2</li>
                            </ul>
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="/componente">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>

</div>

@stop