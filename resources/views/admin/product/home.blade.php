<x-app-layout>
    <x-slot name="header">
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

            <div class="row">
                @foreach ($products as $product)

                <div class="col-sm-3 col-lg-4 mb-4">

                    <div class="card">

                        <img class="bd-placeholder-img card-img-top" src="{{(!empty($product->img_itens)) ? url('upload/admin_images/' .$product->img_itens) : url('upload/1361728.png') }}" width="100%" height="200" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" />

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->nome}}</h5>
                            <p class="card-text">{{$product->sinopse}}</p>
                            <p style="visibility: hidden; overflow: auto;  max-height: 20px;" class="card-text">{{$product->conteudo}}</p>

                            <div class="btn-group" role="group" aria-label="Basic exemple">
                                <a href="{{route('admin/products/edit', ['id'=>$product->id])}}" type="button" class="btn btn-secondary">edit</a>
                                <a href="{{route('admin/products/delete', ['id'=>$product->id])}}" type="button" class="btn btn-danger">deleta</a>
                                <a href="{{route('admin/products/show', ['Product'=>$product->id])}}" type="button" class="btn btn-primary">Visualizar</a>


                            </div>

                        </div>

                    </div>

                </div>
                @endforeach

            </div>
            

            <hr class="my-5">


        </main>
    </x-slot>





</x-app-layout>
