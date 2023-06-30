@extends('layout')

@section('content')
    <div class="flex flex-col items-center container mx-auto px-4 py-8">
        <div class="bg-white shadow rounded-lg p-4 md:w-1/2">
            <h2 class="text-2xl font-bold mb-4">Jersey Listing</h2>

            <!-- Jersey List -->
            <ul class="space-y-4">
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <li class="flex items-center justify-between bg-gray-100 px-4 py-2 rounded-md">
                            <span class="font-semibold">{{$listing->title}}</span>
                            <div class="flex gap-6">
                                <a href="/listings/{{$listing->id}}/edit">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <form action="/listings/{{$listing->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600"><i class="fa fa-trash text-red-500"></i> Delete</button>
                                </form>
                            </div>
                        </li>   
                    @endforeach
                @else
                <li class="flex items-center justify-between bg-gray-100 px-4 py-2 rounded-md">
                    <span class="font-semibold text-lg">No Listing Found</span>
                </li>  
                @endunless
            </ul>
        </div>
    </div>
@endsection
