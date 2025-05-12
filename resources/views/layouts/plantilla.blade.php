<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   
     @vite(['resources/css/app.css']) 
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/styles1.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilo-tablas.css')}}">   
    <link rel="stylesheet" href="{{asset('css/estilo-formularios.css')}}">
     <!-- Scripts -->

    
</head>

<body>
  <!-- slidebar   -->
   <aside class="slidebar" id="slidebar">
   
    <a href="" class="logo">
        <img src="{{asset('img/avatar.png')}}" alt="Logo" class="logo-img">
        <p class="logo-text">Tienda</p>
      </a>
    
    <!-- PERFIL -->
    <div class="element-slidebar">
        <div class="element-slidebar-btn profile">
         <span><img src="{{asset('img/logo.png')}}" alt="avatar"></span>
         <p>{{Auth::user()->name}}</p>
        </div>
        <div class="element-slidebar-content">
            <a href="{{ route('profile.edit') }}">Perfil</a>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
               <input type="submit" value="Salir" class="logout-link">

             </form>

        </div>
    </div>
     <!-- Categorias -->
    
     <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img  src="{{asset('img/categoria.png')}}" alt="Product"></span>
         <a href="{{ route('categoria.index') }}">Negocios</a>
          
        </div>
    </div>
    <!-- Productos -->
    
    <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img  src="{{asset('img/producto.png')}}" alt="Product"></span>
         <a href="{{ route('producto.index') }}">Productos</a>

        </div>
    </div>
     
    <!-- Provedores -->
    <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img  src="{{asset('img/proveedor.png')}}" alt="Provedor"></span>
         <p>Provedores</p>
        </div>
        <div class="element-slidebar-content">
            <a href="">Todos</a>
            <a href="">Agregar</a>

        </div>
    </div>
    <!-- Compras -->
    <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img  src="{{asset('img/compra.png')}}" alt="Product"></span>
         <p>Compras</p>
        </div>
        <div class="element-slidebar-content">
            <a href="">Todos</a>
            <a href="">Agregar</a>

        </div>
    </div>
        <!-- Ventas -->
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
             <span><img  src="{{asset('img/ventas.png')}}" alt="ventas"></span>
             <p>Ventas</p>
            </div>
            <div class="element-slidebar-content">
                <a href="">Todos</a>
                <a href="">Nueva venta</a>
    
            </div>
        </div>
    </div>
   </aside>

   <!-- main -->
   <main class="main">
    <!-- header -->
    <header class="header">
        <h2>@yield('titulomain')</h2>      
        <button id="menu-toggle" class="menu-hamburger">☰</button>
    </header>
    {{-- aqui se coloca todos los elmentos cambiantes --}}
      
      @yield('contenido')

   </main>
   
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>