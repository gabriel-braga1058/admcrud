<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit products') }}
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



        </div>
</x-app-layout>