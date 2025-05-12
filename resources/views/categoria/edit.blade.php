@extends('layouts.plantilla')

@section('titulomain')
<a href="{{ route('categoria.index') }}">Negocios</a> / 
<span>Editar {{ $categoria->nombre }}</span>
@endsection
@section('contenido')

<div class= "container-formulario">
    <div class="card formulario">
        <h2>Crear Nuevo Negocio</h2>
        <form action="{{route('categoria.update',$categoria->id)}}" method="POST">
            {{-- agregar directica para qu se genere un token --}}
            @csrf
    
            {{-- agregar metodo patch --}}
            @method('PATCH')
            <!-- Campo Nombre -->
            <div class="form-group">
                <label for="nombre">Nombre del Negocio</label>
                <input type="text" id="nombre" name="nombre" required value="{{$categoria->nombre}}">
            </div>
            <!-- Campo Descripción -->
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4">{{ $categoria->descripcion }}</textarea>

            </div>
            <!-- Campo Status -->
            <div class="form-group">
                <label for="estado">Estado</label>
                <select id="estado" name="estado" required >
                    <option value="1" {{ $categoria->estado == 1 ? 'selected' : '' }}>Abierto</option>
                    <option value="0" {{ $categoria->estado == 0 ? 'selected' : '' }}>Cerrado</option>
                </select>
            </div>
            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Actualizar Negocio</button>
            </div>
        </form>
    </div>
    </div>

@endsection