@extends('_layouts.master')

@section('body')
    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-6">
            <p class="text-grey-darker font-medium my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}"
                    class="text-black font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif
                <p class="mt-0 mb-4">{!! $featuredPost->getContent() !!}</p>
                <hr class="border-b border-purple-lighter">
            @include('_components.team-signup')

            {{-- <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase
            tracking-wide mb-4">
            Read
            </a> --}}
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    @include('_components.newsletter-signup')
@stop