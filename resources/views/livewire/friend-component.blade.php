<div wire:poll>
       @foreach ($users as $item)
    @if ($item->id != Auth::user()->id)
    <div class="contacts p-2 flex-1 overflow-y-scroll">
        <div class="flex justify-between items-center p-3 hover:bg-gray-800 rounded-lg relative">
            <div class="w-16 h-16 relative flex flex-shrink-0">
              <span class="z-20 ml-0">
                @php
                    $count = DB::table('messages')->where('thread',  $item->id.'-'.Auth::user()->id)->where('is_seen','0')->count();

                 @endphp
                @if ($count==0)
                @else
                <i class="text-red-600 fas fa-bell"></i>
                @endif

              </span>
                     <img class="shadow-md rounded-full w-full h-full object-cover"
                    {{-- src="{{ asset('storage/'.$item->avater)}}" alt="" /> --}}
                    src="{{ ENV('ASSET_LINK_CUSTOMER').'storage/'.$item->avater }}" alt="" />

            </div>

    <a href="{{ url('home') }}?userid={{ $item->id }}" class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
        <p>{{ $item->name }} {{ $count==0 ?'':'('.$count.')' }}


        </p>
        <div class="flex items-center text-sm text-gray-600">
            <div class="min-w-0">
                {{-- <p class="truncate">{{ $item->LastChat ? $item->LastChat->body : '' }}</p> --}}
            </div>
            <p class="ml-2 whitespace-no-wrap">Just now</p>
        </div>
    </a>

</div>
</div>
 @endif
    @endforeach
</div>
