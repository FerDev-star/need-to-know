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
                    <span>Create New Knowledge</span>
                </h1>

                <div class="content">

                    <form action="{{ route('knowledge.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-control">
                            <label class="form-label">Images</label>
                            <input type="file" id="img" name="image[]" multiple required>
                        </div>

                        <div class="form-control mt-5">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" required>
                            {{-- <p class="form-error-message">{ Error message }</p> --}}
                        </div>

                        <div class="form-control mt-5">
                            <label class="form-label">Excerpt</label>
                            <input type="text" name="excerpt" required>
                            {{-- <p class="form-error-message">{ Error message }</p> --}}
                        </div>

                        <div class="form-control mt-5">
                            <label class="form-label">Content</label>
                            <textarea name="content" class="w-94" required></textarea>
                        </div>

                        <div class="form-control mt-5">
                            <label class="form-label">Publish Date</label>
                            <input type="date" name="date" class="w-94" required>
                        </div>

                        <div class="form-control mt-5">
                            <div class="form-label">
                                <div class="flex">
                                    <span class="mr-2">Tags</span>
                                    <a href="{{ route('tag.create') }}" class="btn btn-sm">Create Tag</a>
                                </div>
                            </div>
                            <div class="tag-list">
                                {{-- show all the tags --}}
                                @foreach ($tags as $tag)
                                    <div class="tag-item">
                                        <input type="checkbox" class="radio" name="tags[]" id="{{ $tag->id }}" value="{{ $tag->name }}">
                                        <label for="{{ $tag->id }}">{{ $tag->name }}</label>
                                    </div>    
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
    <script>
        imgN = document.querySelector('#img');
        imgN.addEventListener('change', (e) => {
            if (e.srcElement.files.length > 3) {
                imgN.value = '';
                alert('Update 1 or 3 images'); 
            }
        })
    </script>
@endsection