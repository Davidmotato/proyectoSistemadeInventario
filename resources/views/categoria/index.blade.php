@extends('layouts.plantilla')

@section('titulomain')
Productos
@endsection

@section('contenido')

<section class="container-tabla">
    <h1 class="titulo-tabla"> Negocios </h1>

    <nav class="nav-botones">
        <ul class="nav-menu">
        @can('categoria.create')
                
            <li class="nav-item">
               <a href="{{ route('categoria.create') }}" class="nav-link btn-agregar"> Agregar Nuevo Negocio</a>
            </li>
        @endcan
        </ul>
    </nav>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Negocio</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody class="tabla-categorias">
        @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->Descripcion}}</td>
            <td>{{$categoria->Estado ? 'Abierto' : 'Cerrado'}}</td>

            <td>
                <div class="opciones btns">
                <a href="{{ route('categoria.show', [$categoria->id])}}">
                    <img src="img/vista.png" alt="" class="btn-vista">
                </a>
                
                <a href="{{ route('categoria.edit', [$categoria->id])}}">
                    <img src="img/editar.png" alt="" class="btn-editar">
                </a>
                

                @can('categoria.destroy')
                    
                    <form action="{{ route('categoria.destroy', [$categoria->id]) }}" method="POST" onsubmit="return confirmarEliminacion()">
                    @csrf

                    @method('DELETE')
                    <input type="image" src="img/eliminar.png" class="btn-eliminar"></input>

                    </form>
                @endcan

                <script>
                    function confirmarEliminacion() {
                        return confirm('¿Estas seguro de eliminar este negocio?');
                    }
                </script>
                </div>
          </td>
        </tr>

        @endforeach

        </tbody>

    </table>

</section>

@endsection