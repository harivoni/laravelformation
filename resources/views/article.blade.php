@extends('layouts.app')

@section('content')
<section class="text-blueGray-700 ">
    <div class="container flex flex-col items-center px-5 py-8 mx-auto">
        <div class="flex flex-col w-full mb-12 text-left ">
            <div class="w-full mx-auto lg:w-1/2">
                <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font">{{ $post->title }} </h1>
                <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">{{ $post->content }}</p>
            </div>
        </div>
    </div>
</section>

@endsection
