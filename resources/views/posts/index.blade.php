<x-app-layout>
    <h1>All posts</h1>
    <a href="/posts/create">Create post</a>
    <ul>
        @foreach($allPosts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <p>Published at: {{ $post->published_at }}</p>
                <div>
                    <a href="/posts/{{ $post->id }}">Show</a>
                    <a href="/posts/{{ $post->id }}/edit">Edit</a>
                    <form action="/posts/{{ $post->id }}/destroy" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
