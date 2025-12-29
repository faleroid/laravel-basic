<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="max-w-screen-lg mb-6">
        <a href="/posts" class="text-blue-400 text-sm block mb-6 hover:underline">&larr; Back</a>
        <h2 class="text-5xl font-bold mb-2">{{ $post->title }}</h2>
        <div class="flex text-gray-500 items-center mb-6 gap-2">
            <p class="text-sm">By {{ $post->author->name }}</p> |
            <p class="text-sm"> {{ $post->created_at->diffForHumans() }}</p>
        </div>
        <p class="text-gray-400 text-xl mb-2">{{ $post->body }}</p>
    </article>
</x-layout>