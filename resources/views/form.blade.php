@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('post.store')}}">
    @csrf
    <section class="text-blueGray-700 ">
        <div class="container items-center px-5 py-12 lg:px-20">
            <div class="flex flex-col w-full p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-2/6 md:w-1/2 md:mt-0">
                <div class="relative mt-4">
                    <label for="name" class="text-base leading-7 text-blueGray-500">Titre</label>
                    <input type="text" name="title" placeholder="Ttitre du post" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                </div>
                <div class="relative mt-4">
                    <label for="name" class="text-base leading-7 text-blueGray-500">Contenue</label>
                    <input type="text" name="content" placeholder="Contenue" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                </div>
                <button type="submit" class="w-full px-16 py-2 my-2 mr-2 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Button </button>

            </div>
        </div>
    </section>
</form>

@endsection
