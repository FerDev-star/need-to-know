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
                    Knowledge Management
                </div>
                <div class="flex items-end content-header-right text-sm">
                    <div class="mr-3 text-stone-800">{{ Auth()->user()->name }}</div>
                    <a href="{{ route('logout') }}" class="logout-func">Logout</a>
                </div>
            </header>

            <!-- Toast Container -->
            <div class="toast-container px-8 pt-3">

            </div>

            <main class="p-8 pt-5">

                <h1 class="flex justify-between items-center">
                    <span>Create New Tag</span>
                </h1>

                <div class="content">

                    <form action="{{ route('tag.store') }}" method="POST">
                        @csrf
                        <div class="form-control mt-5">
                            <label class="form-label">Title</label>
                            <input type="text" name="name" required>
                            {{-- <p class="form-error-message">{ Error message }</p> --}}
                        </div>
                        <div class="form-control mt-5">
                            <div class="form-label">
                                <div class="flex">
                                    <span class="mr-2">Tags</span>
                                </div>
                            </div>
                            <div class="tag-list">
                                {{-- show all the tags --}}
                                @foreach ($tags as $tag)
                                    <div class="tag-item"> {{ $tag->name }} </div>    
                                @endforeach
                            </div>
                        </div>


                        <div class="form-footer">
                            <button type="submit" class="btn btn-long mr-3">Create</button>

                            <a href="{{ route('admin.index') }}" class="link-danger py-2 px-2 text-sm">Cancel</a>
                        </div>

                    </form>

                </div>

            </main>

        </div>

    </div>
@endsection