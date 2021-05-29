@extends('layouts.main')
@section('content')

<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex  flex-col md:flex-row">
        <img src="/img/logan.png" alt="logan" class="w-54 md:w-96" >
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">Logan 2019</h2>
            <div class="flex flex-wrap item-center text-gray-400 text-sm ">
                <span>star</span>
                <span class="ml-1`">85%</span>
                <span class="mx-2">|</span>
                <span>feb 20 2018</span>
                <span class="mx-2">|</span>
                <span>Action,Trailer</span>
            </div>
            <p class="text-gray-300 mt-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid blanditiis dolorum error est excepturi explicabo incidunt magnam quidem quo reiciendis saepe suscipit unde veniam veritatis, vero voluptate. Ab adipisci aperiam aspernectus, dolore ducimus et ima nostrum odit optio perspiciatis provident q
            </p>
            <div class="mt-12">
                <h4 class="text-white font-semibold">Feature Cast
                </h4>
                <div class="flex mt-4">
                    <div>
                        <div>LOGodd</div>
                        <div class="text-sm text-gray-400">story</div>
                    </div>
                    <div class="ml-8">
                        <div>MIN MIn</div>
                        <div class="text-sm text-gray-400">story</div>
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <button class="flex px-5 py-4 hover:bg-yellow-600 duration-150 transition ease-in-out items-center bg-yellow-500 text-gray-900 rounded font-semibold">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current" viewBox="0 0 512 512"><path d="M148 129.2c-8.7 4.5-8-6.2-8 126.8 0 112.6.1 117.7 1.9 121 1.9 3.7 8.8 8 12.7 8 1.2 0 5.1-1.5 8.6-3.3 15.3-8 196.6-113.2 199.1-115.5 5.8-5.5 5.8-14.9 0-20.4-2.5-2.3-180.7-105.7-198.1-114.9-8.5-4.5-10.2-4.7-16.2-1.7z"/></svg>
                    <span class="ml-2">Play Trailer</span>
                </button>
            </div>
        </div>


    </div>
</div>

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            <div class="mt-8">
                <a href="#">
                    <img src="/img/actor.png" alt="actor" class="hover:opacity-75 ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover::text-gray:300">
                        xz
                    </a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <span>star</span>
                        <span class="ml-1`"></span>
                        <span class="mx-2">NAme</span>
                        <span>2NAme</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            <div class="mt-8">
                <a href="#">
                    <img src="/img/loganImage.png" alt="actor" class="hover:opacity-75 ease-in-out duration-150">
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
