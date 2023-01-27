<x-layout>
    <article class="mb-4">
        <h1>{{ $post->title }}</h1>

        <div>
            {!! $post->body !!}
        </div>
    </article>
    <p> </p>
    <div>

        <a href="/">Go Back</a>
    </div>

</x-layout>

