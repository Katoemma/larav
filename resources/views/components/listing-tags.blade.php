@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv)
@endphp

<div class="flex items-center gap-1">
@foreach ($tags as $tag)
    <a href="/?tag={{$tag}}" class="bg-gray-900 px-4 py-[0.5px] text-white rounded-xl">{{$tag}}</a> 
@endforeach
</div>