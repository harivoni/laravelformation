@extends('layouts.app')

@section('content')
<section class="text-blueGray-700 ">
    <div class="container flex flex-col items-center px-5 py-8 mx-auto">
        <div class="flex flex-col w-full mb-12 text-left ">
            <div class="w-full mx-auto lg:w-1/2">
                <h2 class="mx-auto mb-6 text-xl font-semibold leading-none tracking-tighter text-black title-font">Liste des Posts existants</h2>
                <p class="mx-auto mb-4 text-base font-medium leading-relaxed text-blueGray-700 "> Ici vous allez trouver tout les listes de commentaire existant dans le base de données </p>
                <table>
                    @foreach($posts as $post)
                    <tr>
                        <td>
                            <p class="flex items-center mb-2 font-semibold text-blueGray-700 ">
                                <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                    </svg>
                                </span><a href="{{ route('post.show',['id'=>$post->id])}}">{{ $post->title }} </a>

                            </p>
                        </td>
                        <td>
                            {{$post->created_at->format('d/m/y')}}
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</section>
@endsection
