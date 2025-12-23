<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="max-w-screen-md mb-6 border-b border-gray-800 pb-6">
        <a href="#" class="hover:underline">
            <h2 class="text-2xl font-bold mb-2">{{ $post['title'] }}</h2>
        </a>
        <p class="text-gray-600 text-sm mb-2">{{ $post['body'] }}</p>
        <a href="/blogs" class="text-indigo-500 text-sm hover:underline">&larr; Back to Blogs</a>
    </article>
</x-layout>