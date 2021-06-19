@extends('layouts.app')

@section('content')
<section class="text-blueGray-700 ">
    <div class="container flex flex-col items-center px-5 py-8 mx-auto">
        <div class="flex flex-col w-full mb-12 text-left ">
            <div class="w-full mx-auto lg:w-1/2">
                <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font">{{ $post->title }} </h1>
                <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">{{ $post->content }}</p>
                <button class="w-auto px-8 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700 ">Modifier</button>
                <button class="w-auto px-8 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-red-600 border-red-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700 " href="{{ route('post.delete',['id'=>$post->id])}}">Suprimer</button>
                <a href="{{ route('post.delete',['id'=>$post->id])}}" class="button">Suprimer</a>
            </div>
</section>

@endsection
