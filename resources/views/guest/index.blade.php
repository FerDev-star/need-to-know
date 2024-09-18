@extends('layout')
@section('content')
    <header class=" shadow-sm px-8 py-4">
        <div class="container flex justify-center">
            <img class="h-7" src="{{ asset('storage/assets/imgs/logo-fill.png') }}" alt="Your Company">
        </div>

    </header>

    <main class="pt-5 container">
        <h1 class="mt-2">
            <span>Find Your Knowledge</span>
        </h1>
        <form action="{{ route('user.search') }}" method="GET">
            @csrf
            <div class="filter-container">
                <div class="filter-title">Filter by tag(s):</div>
                <div class="filter-value">
                    <div class="tag-list">
                        @foreach ($tags as $tag)
                            <div class="tag-item">
                                <input type="checkbox" class="radio" name="tags[]" id="{{ $tag->id }}" value="{{ $tag->name }}">
                                <label for="{{ $tag->id }}">{{ $tag->name }}</label>
                            </div>    
                        @endforeach
                    </div>
                </div>
            </div>
    
            <div class="flex mt-2">
                <div class="filter-container grow mr-6">
                    <div class="filter-title">Filter by Publish Date:</div>
                    <div class="filter-value">
                        <input type="date" name="date" class="w-full">
                    </div>
                </div>
    
                <div class="filter-container grow">
                    <div class="filter-title">Filter by Title:</div>
                    <div class="filter-value">
                        <input type="text" name="title" class="w-full">
                    </div>
                </div>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-long mr-3">Search</button>
            </div>
        </form>
        <br>
        <div class="mt-2">
            <a href="{{ route('user.index') }}" class="btn btn-sm btn-danger">Reset</a>
        </div>

        <hr class="mt-5 mb-5">

        <div class="knowledge-list">
            {{-- show all the knowledge --}}
            @foreach ($knowledge as $item)
                <div class="card kl-card">
                    <div class="kl-card-head">
                        {{-- show the first image related to knowledge --}}
                        <img src="{{ asset( 'storage/' . $item->images->first()->name) }}" alt="Knowledge Images">
                    </div>
                    <div class="kl-card-body">
                        <h3 class="kl-title">{{ $item->title }}</h3>
                        <div class="kl-tags">
                            {{-- show all the tags related to knowledge --}}
                            @foreach ($item->tagsKnowledge as $tag)
                                <div class="badge badge-indigo">{{ $tag->name }}</div>
                            @endforeach
                        </div>
                        <div class="excerpt">
                            {{ $item->content }}
                        </div>
                        <div class="bottom flex justify-between items-center">
                            <span class="text-gray-400">{{ $item->date }}</span>
                            <a href="{{ route('user.show', $item->id) }}" class="btn btn-sm">Detail</a>
                        </div>
                    </div>
                </div>    
            @endforeach
        
            
        </div>
    </main>
@endsection