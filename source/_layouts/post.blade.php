@extends('_layouts.master')

@push('meta')
<meta property="og:title" content="{{ $page->title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')

<h1 class="leading-none mb-2">{{ $page->title }}</h1>

<p class="text-grey-darker text-xl md:mt-0">{{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>

@if ($page->cover_image)
<img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
@endif

@if ($page->categories)
    @foreach ($page->categories as $i => $category)
        <a href="{{ '/categories/' . $category }}" title="View posts in {{ $category }}"
        class="inline-block bg-grey-light hover:bg-purple-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 px-3 pt-px">{{ $category }}</a>
    @endforeach
@endif

<div class="border-b border-purple-lighter mb-10 pb-4" v-pre>
    @yield('content')
</div>
@include('_components.team-signup')

<nav class="flex justify-between text-sm md:text-base">
    <div>
        @if ($next = $page->getNext())
        <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
            &LeftArrow; {{ $next->title }}
        </a>
        @endif
    </div>

    <div>
        @if ($previous = $page->getPrevious())
        <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
            {{ $previous->title }} &RightArrow;
        </a>
        @endif
    </div>
</nav>
@endsection