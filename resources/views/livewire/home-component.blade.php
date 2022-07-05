<div wire:poll>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            </h2>
        </x-slot>
        <div class="h-screen w-full flex antialiased text-gray-200 bg-gray-900 overflow-hidden">
            <div class="flex-1 flex flex-col">

                <main class="flex-grow flex flex-row min-h-0">
                    <section
                        class="flex flex-col flex-none overflow-auto w-24 hover:w-64 group lg:max-w-sm md:w-2/5 transition-all duration-300 ease-in-out">
                        <div class="header p-4 flex flex-row justify-between items-center flex-none">
                            <div class="w-16 h-16 relative flex flex-shrink-0" style="filter: invert(100%);">
                                <img class="rounded-full w-full h-full object-cover" alt="ravisankarchinnam"
                                    src="https://avatars3.githubusercontent.com/u/22351907?s=60" />
                            </div>
                            <p class="text-md font-bold hidden md:block group-hover:block">Messenger</p>
                            <a href="#"
                                class="block rounded-full hover:bg-gray-700 bg-gray-800 w-10 h-10 p-2 hidden md:block group-hover:block">
                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                    <path
                                        d="M6.3 12.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H7a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h6a1 1 0 0 1 0 2H4v14h14v-6z" />
                                </svg>
                            </a>
                        </div>
                        <div class="search-box p-4 flex-none">
                            <form onsubmit="">
                                <div class="relative">
                                    <label>
                                        <input
                                            class="rounded-full py-2 pr-6 pl-10 w-full border border-gray-800 focus:border-gray-700 bg-gray-800 focus:bg-gray-900 focus:outline-none text-gray-200 focus:shadow-md transition duration-300 ease-in"
                                            type="text" value="" placeholder="Search Messenger" />
                                        <span class="absolute top-0 left-0 mt-2 ml-3 inline-block">
                                            <svg viewBox="0 0 24 24" class="w-6 h-6">
                                                <path fill="#bbb"
                                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                            </svg>
                                        </span>
                                    </label>
                                </div>
                            </form>
                        </div>


                                {{-- Friend Lists start --}}
                                @livewire('friend-component')
                                {{-- Friend Lists End --}}

                    </section>
                    @if (isset($userid))


                    <section class="flex flex-col flex-auto border-l border-gray-800">
                        <div class="chat-header px-6 py-4 flex flex-row flex-none justify-between items-center shadow">
                            <div class="flex">
                                <div class="w-12 h-12 mr-4 relative flex flex-shrink-0">
                                    <img class="shadow-md rounded-full w-full h-full object-cover"
                                        src="{{ ENV('ASSET_LINK_CUSTOMER').'storage/'.$selected_user->avater }}" alt="" />
                                </div>
                                <div class="text-sm">
                                    <p class="font-bold">{{ $selected_user->name }}</p>
                                    <p>Active 1h ago</p>
                                </div>
                            </div>

                        </div>
                        <div class="flex flex-col-reverse  overflow-y-scroll">
                        @foreach ($messages as $item)


                        <div class="chat-body p-4 flex-1">
                            @if ($item->user_id != Auth::user()->id )
                            <div class="flex flex-row justify-start">
                                <div class="w-8 h-8 relative flex flex-shrink-0 mr-4">
                                    <img class="shadow-md rounded-full w-full h-full object-cover"
                                        src="{{ ENV('ASSET_LINK_CUSTOMER').'storage/'.$selected_user->avater }}" alt="" />
                                </div>
                                <div class="messages text-sm text-gray-700 grid grid-flow-row gap-2">
                                    <div class="flex items-center group">
                                        <p
                                            class="px-6 py-3 rounded-full rounded-r-full bg-gray-800 max-w-xs lg:max-w-md text-gray-200">
                                            {{ $item->body }}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            {{-- <p class="p-4 text-center text-sm text-gray-500">FRI 3:04 PM</p> --}}
                            @if ($item->user_id == Auth::user()->id )
                            <div class="flex flex-row justify-end">
                                <div class="messages text-sm text-white grid grid-flow-row gap-2">
                                    <div class="flex items-center flex-row-reverse group">
                                        <p
                                            class="px-6 py-3 rounded-full rounded-l-full bg-blue-700 max-w-xs lg:max-w-md">
                                            {{ $item->body }}</p>
                                        </div>

                                    </div>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                        @livewire('message-component')
                    </section>
                    @endif
                </main>
            </div>
        </div>
        <style>
            /* can be configured in tailwind.config.js */
            .group:hover .group-hover\:block {
                display: block;
            }

            .hover\:w-64:hover {
                width: 45%;
            }


            /* NO NEED THIS CSS - just for custom scrollbar which can also be configured in tailwind.config.js*/
            ::-webkit-scrollbar {
                width: 2px;
                height: 2px;
            }

            ::-webkit-scrollbar-button {
                width: 0px;
                height: 0px;
            }

            ::-webkit-scrollbar-thumb {
                background: #2d3748;
                border: 0px none #ffffff;
                border-radius: 50px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #2b6cb0;
            }

            ::-webkit-scrollbar-thumb:active {
                background: #000000;
            }

            ::-webkit-scrollbar-track {
                background: #1a202c;
                border: 0px none #ffffff;
                border-radius: 50px;
            }

            ::-webkit-scrollbar-track:hover {
                background: #666666;
            }

            ::-webkit-scrollbar-track:active {
                background: #333333;
            }

            ::-webkit-scrollbar-corner {
                background: transparent;
            }
        </style>
</div>
