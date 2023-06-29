@extends('layout')

@section('content')
<section class="mb-32 mt-8 flex flex-col w-full items-center">
    <form class="md:w-1/3 bg-white rounded-xl p-4" action="/listings/{{$listing->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="mb-4">
            <label for="team-name" class="block text-gray-700 font-bold mb-2">Company Name:</label>
            <input type="text" id="team-name" name="company" class="w-full border border-gray-300 rounded-md py-2 px-4" value="{{$listing->company}}">
            @error('company')
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                    <span class="font-medium">Error! {{$message}}</span>
                    </div>
                </div>
            @enderror
        </div>


        <div class="mb-4">
            <label for="kit-name" class="block text-gray-700 font-bold mb-2">Team Name:</label>
            <input type="text" id="kit-name" name="title" class="w-full border border-gray-300 rounded-md py-2 px-4" value="{{$listing->title}}">
            @error('title')
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                    <span class="font-medium">Error! {{$message}}</span>
                    </div>
                </div>
            @enderror
        </div>


        <div class="mb-4">
            <label for="kit-name" class="block text-gray-700 font-bold mb-2">Suplier Location:</label>
            <input type="text" id="kit-name" name="location" class="w-full border border-gray-300 rounded-md py-2 px-4" value="{{$listing->location}}">
            @error('location')
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                    <span class="font-medium">Error! {{$message}}</span>
                    </div>
                </div>
            @enderror
        </div>


        <div class="mb-4">
            <label for="kit-name" class="block text-gray-700 font-bold mb-2">Suplier Email:</label>
            <input type="email" id="kit-name" name="email" class="w-full border border-gray-300 rounded-md py-2 px-4" value="{{$listing->email}}">
            @error('email')
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                    <span class="font-medium">Error! {{$message}}</span>
                    </div>
                </div>
            @enderror
        </div>


        <div class="mb-4">
            <label for="brand" class="block text-gray-700 font-bold mb-2">Tags:</label>
            <span class="text-sm">Should separated with a comma( <strong>,</strong> )</span>
            <input type="text" id="brand" name="tags" class="w-full border border-gray-300 rounded-md py-2 px-4" placeholder="Example: polyester, 22, adiddas, etc" value="{{$listing->tags}}">
            @error('tags')
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                    <span class="font-medium">Error! {{$message}}</span>
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="material" class="block text-gray-700 font-bold mb-2">Company Website/Application Url:</label>
            <input type="url" id="material" name="website" class="w-full border border-gray-300 rounded-md py-2 px-4" value="{{$listing->website}}">
            @error('website')
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                    <span class="font-medium">Error! {{$message}}</span>
                    </div>
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="file_input">Upload Image</label>
            <input name="logo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
            @error('logo')
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                    <span class="font-medium">Error! {{$message}}</span>
                    </div>
                </div>
            @enderror
            <img src="{{$listing->logo ? asset('storage/'.$listing->logo):asset('https://rezista.in/wp-content/uploads/2021/07/Red-Front-6.png')}}" alt="Jersey Image" class="h-40 w-40 rounded-lg mb-4">
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 " placeholder="describe your jersey here...">{{$listing->description}}</textarea>
            @error('description')
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                    <span class="font-medium">Error! {{$message}}</span>
                    </div>
                </div>
            @enderror
        </div>
        <div class="flex items-center">
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white py-2 px-6 rounded-md">Edit Jersey</button>
        </div>
    </form>
</section>
@endsection