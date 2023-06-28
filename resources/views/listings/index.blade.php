@extends('layout')

@section('content')
@include('partials._hero')
<div class="container mx-auto px-4 py-8">
    @include('partials._search')
    <section class="mb-8">
        <h2 class="text-xl font-bold mb-2">Featured Jerseys</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
            @unless(count($listings)== 0)
                @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
                @endforeach
            @else
                <p>No Jerseys found</p>
            @endunless
        </div>
        <div class="mt-6 p-4">
            {{$listings->links()}}
        </div>
        
    </section>
</div>
@endsection