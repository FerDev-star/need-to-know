@extends('layout')
@section('content')
    <div class="flex h-full">
        <!-- Left Sidebar -->
        @include('admin.side_bar')
        <!-- Right Content -->
        <div class="right-content grow">
            <!-- Content Header -->
            <header class="flex justify-between shadow-sm px-8 py-4">
                <div class="content-header-left text-gray-500">
                    Dashboard
                </div>
                <div class="flex items-end content-header-right text-sm">
                    <div class="mr-3 text-stone-800">{{ Auth()->user()->name }}</div>
                    <a href="{{ route('logout') }}" class="logout-func">Logout</a>
                </div>
            </header>

            <!-- Toast Container -->
            <div class="toast-container px-8 pt-3">
                <!-- The toast of failed. -->
                <!-- <div class="toast toast-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M256,48C141.31,48,48,141.31,48,256s93.31,208,208,208,208-93.31,208-208S370.69,48,256,48Zm75.31,260.69a16,16,0,1,1-22.62,22.62L256,278.63l-52.69,52.68a16,16,0,0,1-22.62-22.62L233.37,256l-52.68-52.69a16,16,0,0,1,22.62-22.62L256,233.37l52.69-52.68a16,16,0,0,1,22.62,22.62L278.63,256Z" />
                    </svg>
                    <p>
                        Custom your message!
                    </p>
                </div> -->

                <!-- The toast of succesed. -->
                <!-- <div class="toast toast-success">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M256,48C141.31,48,48,141.31,48,256s93.31,208,208,208,208-93.31,208-208S370.69,48,256,48ZM364.25,186.29l-134.4,160a16,16,0,0,1-12,5.71h-.27a16,16,0,0,1-11.89-5.3l-57.6-64a16,16,0,1,1,23.78-21.4l45.29,50.32L339.75,165.71a16,16,0,0,1,24.5,20.58Z" />
                    </svg>
                    <p>
                        Custom your message!
                    </p>
                </div> -->
            </div>

            <main class="p-8 pt-5">

                <h1 class="flex justify-between items-center">
                    <span>Knowledge List</span>
                </h1>

                <div class="content">

                    <!-- Package List -->

                    <!-- Table Data -->
                    <table class="mt-2 data-table">
                        <thead class="bg-gray-0">
                            <tr>
                                <th class="w-10">ID</th>
                                <th class="w-28">Images</th>
                                <th class="w-60">Content</th>
                                <th class="w-10 ">Publish Date</th>
                                <th class="w-10 ">Author</th>
                                <th class="w-6">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- show al the knowledge --}}
                            @foreach ($knowledge as $item)
                                @if ($item->creator == Auth()->user()->name)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td class="table-imgs flex">
                                            {{-- show the first image related to knowledge --}}
                                            @foreach ($item->images as $img)                                            
                                                <img class="w-10" src="{{ asset('storage/' . $img->name) }}" alt="Knowledge Image">
                                            @endforeach
                                        </td>
                                        <td>
                                            {{ $item->content }}
                                        </td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->creator }}</td>
                                        <td>
                                            <a href="{{ route('knowledge.destroy', $item->id) }}" class="link-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection