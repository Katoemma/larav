@props(['listing'])

 <!-- Featured jersey Cards -->
 <div class="bg-white shadow rounded-lg p-4 flex flex-col md:flex-row gap-4 items-center">
    <img src="{{$listing->logo ? asset('storage/'.$listing->logo):asset('https://rezista.in/wp-content/uploads/2021/07/Red-Front-6.png')}}" alt="Hostel Image" class="w-96 md:w-1/3 h-44 rounded-lg">
    <div class=" md:w-2/3 flex flex-col gap-2">
        <h3 class="text-lg font-semibold">{{$listing->title}}</h3>
        <x-listing-tags :tagsCsv="$listing->tags" />
        <p class="flex items-center gap-2 text-gray-500"><i class="fa fa-map-marker text-2xl text-black"></i>{{$listing->location}}</p>
        <a href="listings/{{$listing->id}}" class="text-center md:w-36 inline-block mt-2 px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg">View Details</a>
    </div>
</div>