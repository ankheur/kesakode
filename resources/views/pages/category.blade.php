@extends('template')

@section('content')

    <h1>{{ $category->name }}</h1>

    <article id="category_web" class="flex flex-row text-center py-20">
        <ul class="md:w-full grid grid-cols-3 gap-y-24 shadow-lg rounded-lg overflow-hidden bg-white p-10">
            @foreach($category->topics as $topic)
                <li class="flex items-center justify-center"><a href="{{ url($topic->category->slug . '/' . $topic->slug) }}" class="flex items-center justify-center w-24 h-24 border-2 border-gray-200 rounded-full border-opacity-0 hover:border-opacity-100"><img src="{{ $topic->logo}}" alt="" width="50"></a></li>
            @endforeach
        </ul>
    </article>
@endsection