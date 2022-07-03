<div>
       @foreach ($users as $item)
    @if ($item->id != Auth::user()->id)
    <div class="contacts p-2 flex-1 overflow-y-scroll">
        <div class="flex justify-between items-center p-3 hover:bg-gray-800 rounded-lg relative">
            <div class="w-16 h-16 relative flex flex-shrink-0">
                <img class="shadow-md rounded-full w-full h-full object-cover"
                    src="https://randomuser.me/api/portraits/women/61.jpg" alt="" />
            </div>

    <a href="{{ url('home') }}?userid={{ $item->id }}" class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
        <p>{{ $item->name }}</p>
        <div class="flex items-center text-sm text-gray-600">
            <div class="min-w-0">
                <p class="truncate">{{ $item->LastChat ? $item->LastChat->body : '' }}</p>
            </div>
            <p class="ml-2 whitespace-no-wrap">Just now</p>
        </div>
    </a>

</div>
</div>
 @endif
    @endforeach
</div>