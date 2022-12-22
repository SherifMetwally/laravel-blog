<x-layout>
{{--    @foreach($posts as $post)--}}
{{--        <article>--}}
{{--            <a href="/posts/{{$post->slug}}">--}}
{{--                <h1>{{$post->title}} </h1>--}}
{{--            </a>--}}
{{--            <p><a href="/authors/{{$post->author->username}}"> {{$post -> author ->name}}</a></p>--}}
{{--            <div>--}}
{{--                {{$post->excerpt}}--}}
{{--                <p> <a href="/categories/{{$post->category->slug}}" >{{$post->category->name}} </a></p>--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}

@include('_posts_header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count() > 0)
            <x-posts-grid :posts="$posts"></x-posts-grid>
        @endif

    </main>
</x-layout>

