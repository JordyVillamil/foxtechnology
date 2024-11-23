@extends('layouts.app')

@section('titulo', 'Nuestros Productos')

@section('contenido')
        {{-- Botón para crear un producto nuevo --}}
        <div class="flex justify-end m-4">
          <a href="{{ route('productos.create') }}" class="btn btn-outline">Nuevo producto</a>
             </div>

      <div class= "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
        @foreach ($productos as $producto)
        <div class="card bg-base-100 w-96 shadow-xl m-8">
            <figure class="px-10 pt-10">
                <img
                    src="https://picsum.photos/id/{{$producto->id}}/240"
                    alt="{{ $producto->nombre }}"
                    class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title">{{ $producto->nombre }}</h2>
                <p>{{ $producto->descripcion }}</p>
                precio: <div class="badge badge-outline">{{ $producto-> precio}}</div>
                Stock: <div class="badge badge-outline">{{ $producto-> stock}}</div>
                   <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-outline btn-xs" >Editar</a>
                   <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline btn-xs">Eliminar</button>
                       </form>                   
                      <div class="card-actions">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    @endforeach

@endsection
