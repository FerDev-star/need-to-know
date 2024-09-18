@extends('layout')
@section('content')
    <header class=" shadow-sm px-8 py-4">
        <div class="container flex justify-center">
            <img class="h-7" src="{{ asset('storage/assets/imgs/logo-fill.png') }}" alt="Your Company">
        </div>

    </header>

    <main class="pt-5 container">
        <h1 class="mt-2">
            <span>{{ $knowledge->title }}</span>
        </h1>

        <div class="kl-tags">
            @foreach ($knowledge->tagsKnowledge as $tag)
                <div class="badge badge-indigo">{{ $tag->name }}</div>
            @endforeach
        </div>

        <div class="kl-images mt-4">
            @foreach ($knowledge->images as $img)
                <div>
                    <img src="{{ asset('storage/' . $img->name) }}" alt="">
                </div>
            @endforeach
        </div>

        <div class="text-gray-400 mt-4 text-sm">
            Published on {{ $knowledge->date }} by {{ $knowledge->creator }}
        </div>

        <div class="mt-2">
            {{ $knowledge->content }}
        </div>
        <div class="mt-4">
            <a href="{{ route('user.index') }}" class="btn">Back</a>
        </div>
    </main>
@endsection