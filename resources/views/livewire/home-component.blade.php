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
                    <section class="flex flex-col flex-auto border-l border-gray-800">
                        <div class="chat-header px-6 py-4 flex flex-row flex-none justify-between items-center shadow">
                            <div class="flex">
                                <div class="w-12 h-12 mr-4 relative flex flex-shrink-0">
                                    <img class="shadow-md rounded-full w-full h-full object-cover"
                                        src="https://randomuser.me/api/portraits/women/33.jpg" alt="" />
                                </div>
                                <div class="text-sm">
                                    <p class="font-bold">Scarlett Johansson</p>
                                    <p>Active 1h ago</p>
                                </div>
                            </div>

                            {{-- <div class="flex">
                                <a href="#" class="block rounded-full hover:bg-gray-700 bg-gray-800 w-10 h-10 p-2">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current text-blue-500">
                                        <path d="M11.1735916,16.8264084 C7.57463481,15.3079672 4.69203285,12.4253652 3.17359164,8.82640836 L5.29408795,6.70591205 C5.68612671,6.31387329 6,5.55641359 6,5.00922203 L6,0.990777969 C6,0.45097518 5.55237094,3.33066907e-16 5.00019251,3.33066907e-16 L1.65110039,3.33066907e-16 L1.00214643,8.96910337e-16 C0.448676237,1.13735153e-15 -1.05725384e-09,0.445916468 -7.33736e-10,1.00108627 C-7.33736e-10,1.00108627 -3.44283713e-14,1.97634814 -3.44283713e-14,3 C-3.44283713e-14,12.3888407 7.61115925,20 17,20 C18.0236519,20 18.9989137,20 18.9989137,20 C19.5517984,20 20,19.5565264 20,18.9978536 L20,18.3488996 L20,14.9998075 C20,14.4476291 19.5490248,14 19.009222,14 L14.990778,14 C14.4435864,14 13.6861267,14.3138733 13.2940879,14.7059121 L11.1735916,16.8264084 Z"/>
                                    </svg>
                                </a>
                                <a href="#" class="block rounded-full hover:bg-gray-700 bg-gray-800 w-10 h-10 p-2 ml-4">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current text-blue-500">
                                        <path d="M0,3.99406028 C0,2.8927712 0.894513756,2 1.99406028,2 L14.0059397,2 C15.1072288,2 16,2.89451376 16,3.99406028 L16,16.0059397 C16,17.1072288 15.1054862,18 14.0059397,18 L1.99406028,18 C0.892771196,18 0,17.1054862 0,16.0059397 L0,3.99406028 Z M8,14 C10.209139,14 12,12.209139 12,10 C12,7.790861 10.209139,6 8,6 C5.790861,6 4,7.790861 4,10 C4,12.209139 5.790861,14 8,14 Z M8,12 C9.1045695,12 10,11.1045695 10,10 C10,8.8954305 9.1045695,8 8,8 C6.8954305,8 6,8.8954305 6,10 C6,11.1045695 6.8954305,12 8,12 Z M16,7 L20,3 L20,17 L16,13 L16,7 Z"/>
                                    </svg>
                                </a>
                                <a href="#" class="block rounded-full hover:bg-gray-700 bg-gray-800 w-10 h-10 p-2 ml-4">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current text-blue-500">
                                        <path d="M2.92893219,17.0710678 C6.83417511,20.9763107 13.1658249,20.9763107 17.0710678,17.0710678 C20.9763107,13.1658249 20.9763107,6.83417511 17.0710678,2.92893219 C13.1658249,-0.976310729 6.83417511,-0.976310729 2.92893219,2.92893219 C-0.976310729,6.83417511 -0.976310729,13.1658249 2.92893219,17.0710678 Z M9,11 L9,10.5 L9,9 L11,9 L11,15 L9,15 L9,11 Z M9,5 L11,5 L11,7 L9,7 L9,5 Z"/>
                                    </svg>

                                </a>
                            </div> --}}
                        </div>
                        <div class=" overflow-y-scroll">
                        @foreach ($messages as $item)


                        <div class="chat-body p-4 flex-1">
                            @if ($item->user_id != Auth::user()->id )
                            <div class="flex flex-row justify-start">
                                <div class="w-8 h-8 relative flex flex-shrink-0 mr-4">
                                    <img class="shadow-md rounded-full w-full h-full object-cover"
                                        src="https://randomuser.me/api/portraits/women/33.jpg" alt="" />
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
