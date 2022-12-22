<x-layout>
    @foreach($posts as $post)
        <article>
            <a href="/posts/{{$post->slug}}">
                <h1>{{$post->title}} </h1>
            </a>
            <p><a href="/authors/{{$post->author->username}}"> {{$post -> author ->name}}</a></p>
            <div>
                {{$post->excerpt}}
                <p> <a href="/categories/{{$post->category->slug}}" >{{$post->category->name}} </a></p>
            </div>
        </article>
    @endforeach
</x-layout>

