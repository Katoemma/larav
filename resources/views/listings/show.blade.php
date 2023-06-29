@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8 mb-24">
    
    <div class="bg-white shadow rounded-lg p-4">
        <div class="flex flex-col md:flex-row  md:justify-center md:gap-12 sm:items-start">
            
            <img src="{{$listing->logo ? asset('storage/'.$listing->logo):asset('https://rezista.in/wp-content/uploads/2021/07/Red-Front-6.png')}}" alt="Jersey Image" class="h-96 md:w-1/3 rounded-lg mb-4">
            <div class="flex flex-col gap-2">
                <h3 class="text-lg font-semibold">{{$listing->title}}</h3>
                {{-- tags --}}
                <x-listing-tags :tagsCsv="$listing->tags" />

                <p class="flex items-center gap-2 text-gray-500">
                    <i class="fa fa-map-marker text-2xl text-black"></i>{{$listing->location}}
                </p>
                <div class="flex flex-col gap-2">
                    <hr class="border-2 border-gray-200 rounded-full">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-gray-800 font-black text-lg">Description</h3>
                        <p class="text-gray-600 w-96">{{$listing->description}}</p>
                    </div>
                    <a href="#" class="flex flex-col items-center mt-2 px-4 py-2 bg-green-600 hover:bg-green-500 text-white rounded-lg">Contact Supplier</a>
                    <a href="{{$listing->website}}" class="flex flex-col items-center mt-2 px-4 py-2 bg-red-600 hover:bg-red-500 text-white rounded-lg">Visit Supplier Website</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 p-2 flex space-x-6">
        <a href="/listings/{{$listing->id}}/edit">
            <i class="fa fa-pencil"></i> Edit
        </a>
    </div>

</div>
@endsection
