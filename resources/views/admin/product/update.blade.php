<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
    <div class="container text-center">
        <div class="container my-5">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif

        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="container text-center">
                        <br>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-3 text-gray-900">
                                    <h1>Editar Conteúdo</h1>
                                </div>
                                <div class="container">
                                    <main>

                                        <div class="row g-5">

                                            <div class="modal-content rounded-4 shadow">

                                                @if (session()->has('error'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ session('error') }}
                                                </div>
                                                @endif

                                                <form action="{{route('admin/products/update', $products->id)}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row g-3">


                                                        <div>
                                                            <label for="firstName" class="form-label">Título do Conteúdo:</label>

                                                            <input type="text" name="nome" class="form-control" id="firstName" placeholder="Título do Conteúdo" value="{{$products->nome}}">

                                                            @error('nome')
                                                            <div class="alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror

                                                        </div>



                                                        <div>
                                                            <label for="firstName" class="form-label">Sinopse do Conteúdo:</label>
                                                            <input type="text" name="sinopse" class="form-control" id="firstName" placeholder="Sinopse do Conteúdo" value="{{$products->nome}}">
                                                            @error('sinopse')
                                                            <div class="alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Texto do Conteúdo:</label>
                                                        <input type="text" name="conteudo" class="form-control" id="exampleFormControlTextarea1" placeholder="Texto do Conteúdo" value="{{$products->conteudo}}"></input>
                                                        @error('conteudo')
                                                        <div class="alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">img</label>
                                                        <input class="form-control" id="image" name="imagem" type="file" id="formFile">
                                                    </div>

                                                    <button class="w-100 btn btn-primary btn-lg" type="submit">Editar</button>
                                            </div>
                                            </form>
                                        </div>
                                </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>