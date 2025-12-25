<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="max-w-screen-md mb-6 border-b border-gray-800 pb-6">
            <a href="/posts/{{ $post->slug }}" class="hover:underline">
                <h2 class="text-2xl font-bold">{{ $post->title }}</h2>
            </a>
            <div class="flex gap-2 items-center text-base text-gray-600 mb-2 mt-1">
                <a href="/authors/{{ $post->author->username }}" class="text-sm font-semibold hover:underline">By
                    {{ $post->author->name }}</a>
                <span class="text-sm">in</span>
                <a href="/categories/{{ $post->category->slug }}"
                    class="text-sm font-semibold hover:underline">{{ $post->category->name }}</a>
                <span class="text-sm">|</span>
                <p class="text-sm"> {{ $post->created_at->diffForHumans() }}</p>
            </div>
            <p class="text-gray-600 text-sm mb-2">{{ Str::limit($post->body, 270) }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-indigo-500 text-sm hover:underline">Read More &rarr;</a>
        </article>
    @endforeach
</x-layout>