<x-app-layout>

    <main class="main pt-4">

        <div class="container">

            <div class="row">
                <div class="col-md-9">

                    <article class="card mb-4">
                        <header class="card-header text-center">
                            <div class="card-meta">
                                <a href="#"><time class="timeago" datetime="2021-09-26 20:00" timeago-id="2">{{$Product->created_at}}</time>
                            </div>
                            <a >
                                <h1 class="card-title">{{$Product->nome}}</h1>
                            </a>
                        </header>
                        <a href="post-image.html">
                            <img class="card-img" src="{{(!empty($Product->img_itens)) ? url('upload/admin_images/' .$Product->img_itens) : url('upload/1361728.png') }}" alt="">
                        </a>
                        <div class="card-body">

                            <p>{{$Product->conteudo}}</p>






                            <hr>

                           

                            
                            

                        </div>
                    </article><!-- /.card -->

                </div>
                <div class="col-md-3 ms-auto">

                    <aside class="sidebar">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="card-title">About</h4>
                                <p class="card-text">{{$Product->sinopse}}</p>
                            </div>
                        </div><!-- /.card -->
                    </aside>

                    <!-- <aside class="sidebar sidebar-sticky">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="card-title">Tags</h4>
                                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Journey</a>
                                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Work</a>
                                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Lifestype</a>
                                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Photography</a>
                                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Food &amp; Drinks</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="card-title">Popular stories</h4>

                                <a href="post-image.html" class="d-inline-block">
                                    <h4 class="h6">The blind man</h4>
                                    <img class="card-img" src="img/articles/2.jpg" alt="">
                                </a>
                                <time class="timeago" datetime="2021-09-03 20:00" timeago-id="7">2 years ago</time> in Lifestyle

                                <a href="post-image.html" class="d-inline-block mt-3">
                                    <h4 class="h6">Crying on the news</h4>
                                    <img class="card-img" src="img/articles/3.jpg" alt="">
                                </a>
                                <time class="timeago" datetime="2021-07-16 20:00" timeago-id="8">2 years ago</time> in Work

                            </div>
                        </div>
                    </aside> -->

                </div>
            </div>
        </div>

    </main>
    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">Gabriel Braga © 2024-2026</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"></a></li>
            <li class="list-inline-item"><a href="#"></a></li>
            <li class="list-inline-item"><a href="#"></a></li>
        </ul>
    </footer>
</x-app-layout>