@extends('layouts.app')

@section('titulo', 'Nuestros Productos')

@section('contenido')

    @foreach ($productos as $producto)
        <div class="card bg-base-100 w-96 shadow-xl">
            <figure class="px-10 pt-10">
                <img
                    src="https://picsum.photos/id/{{$producto->id}}/240"
                    alt="{{ $producto->nombre }}"
                    class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title">{{ $producto->nombre }}</h2>
                <p>{{ $producto->descripcion }}</p>
                <div class="card-actions">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    @endforeach

@endsection
