@extends('layouts.plantilla')
@section('titulomain')
<a href="{{ route('producto.index') }}">Productos</a> / 
<span>Producto {{ $producto->nombre }}</span>
@endsection
@section('contenido')

<section class="container-cards">

    <div class="card-show">
        <div class="cabecera">            
             <h2>{{$producto->nombre}}</h2>                      
               
        </div>
        <p> {{$producto->descripcion}}</p>
    </div>

</section>

@endsection