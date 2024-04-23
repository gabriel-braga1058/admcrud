<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="container text-center">
                        <br>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-3 text-gray-900">
                                    <h1>Criar Conteúdo</h1>
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

                                                <form action="{{route('admin/products/save')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-3">


                                                        <div>
                                                            <label for="firstName" class="form-label">Título do Conteúdo:</label>

                                                            <input type="text" name="nome" class="form-control" id="firstName" placeholder="Título do Conteúdo">

                                                            @error('nome')
                                                            <div class="alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror

                                                        </div>



                                                        <div>
                                                            <label for="firstName" class="form-label">Sinopse do Conteúdo:</label>
                                                            <input type="text" name="sinopse" class="form-control" id="firstName" placeholder="Sinopse do Conteúdo">
                                                            @error('sinopse')
                                                            <div class="alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Texto do Conteúdo:</label>
                                                        <textarea type="text" name="conteudo" class="form-control" id="exampleFormControlTextarea1" placeholder="Texto do Conteúdo"></textarea>
                                                        @error('conteudo')
                                                        <div class="alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    

                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">img</label>
                                                        <input class="form-control" id="image" name="img_itens" type="file" id="formFile">
                                                    </div>

                                                    <!-- <div class="mb-3">
                                                        <label for="formFile" class="form-label">img</label>
                                                        <img id="showImage" class="bd-placeholder-img card-img-top" src="{{(!empty($products->img_itens)) ? url('upload/admin_images/' .$products->img_itens) : url('upload/1361728.png') }}" width="100%" height="200" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" />

                                                    </div> -->

                                                    <button class="w-100 btn btn-primary btn-lg" type="submit">Criar</button>
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

    <!-- <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src' ,e.target.result);

                }
                reader.readAdDataURL(e.target.files['0']);
            });
        });
    </script> -->
</x-app-layout>