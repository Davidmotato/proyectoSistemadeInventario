@extends('layouts.plantilla')

@section('titulomain')
<a href="{{ route('categoria.index') }}">Categorias</a> / 
<span> Agregar </span>
@endsection

@section('contenido')
  <div class= "container-formulario">
    <div class="card formulario">
        <h2>Crear Nuevo Negocio</h2>
        <form action="{{route('categoria.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Negocio</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select id="estado" name="estado" required>
                    <option value="1">Abierto</option>
                    <option value="0">Cerrado</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Guardar Negocio</button>
            </div>
        </form>
    </div>
    </div>


@endsection