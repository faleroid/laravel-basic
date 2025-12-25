<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="max-w-screen-md mb-6">
        <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
        <div class="flex text-base text-gray-600 items-center mb-2 gap-2">
            <p class="text-sm">By {{ $post->author->name }}</p> |
            <p class="text-sm"> {{ $post->created_at->diffForHumans() }}</p>
        </div>
        <p class="text-gray-600 text-sm mb-2">{{ $post->body }}</p>
        <a href="/posts" class="text-indigo-500 text-sm hover:underline">&larr; Back</a>
    </article>
</x-layout>