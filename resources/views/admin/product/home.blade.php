<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <p><a href="{{ route('admin/products/create') }}">Add</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="container my-5">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif

        </div>
    </div>

    <main class="container py-5">


        <hr class="my-5">

        <div class="row">
            @foreach ($products as $product)
            <div class="col-sm-3 col-lg-4 mb-4">
                <div class="card">

                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nome}}</h5>
                        <p class="card-text">{{$product->sinopse}}</p>
                        <div class="btn-group" role="group" aria-label="Basic exemple">
                            <a href="{{route('admin/products/edit', ['id'=>$product->id])}}" type="button" class="btn btn-secondary">edit</a>
                            <a href="" type="button" class="btn btn-danger">deleta</a>


                        </div>

                    </div>
                </div>
            </div>

            @endforeach


    </main>
</x-app-layout>