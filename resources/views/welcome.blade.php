@extends('layouts.app')

@section('titulo', 'Pagina Principal')

@section('contenido')
<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <img
        src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
        class="max-w-sm rounded-lg shadow-2xl" />
      <div>
        <h1 class="text-5xl font-bold">Bienvenido a foxtechnology</h1>
        <p class="py-6">
          Bienvenido a Foxtecnology empresa numero uno en software en Colombia.
        </p>
        <button class="btn btn-primary">Get Started</button>
      </div>
    </div>
  </div>
@endsection
