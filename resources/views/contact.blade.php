@extends('layouts.app')

@section('content')


<section class="text-blueGray-700 ">
    <div class="container items-center px-5 py-8 mx-auto">
        <div class="flex flex-col mb-12 text-center">
            <div class="w-full mx-auto lg:w-1/3">
                <div class="p-6 mx-auto">
                    <strong class="flex items-end justify-center mx-auto mb-8 text-3xl font-black leading-none text-center text-black lg:text-4xl "> $10 <span class="text-sm"> /mo </span>
                    </strong>
                    <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font"> Short length headline. </h1>
                    <p class="mx-auto mb-12 text-base text-blueGray-700 lading-relaxed fbont-medium ">You're about to launch soon and must be 100% focused on your product. Don't loose precious days designing, coding the landing page and testing . </p>
                    <button class="px-16 py-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-700"> Buy </button>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
