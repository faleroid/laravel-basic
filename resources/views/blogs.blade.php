<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="max-w-screen-md mb-6 border-b border-gray-800 pb-6">
            <a href="#" class="hover:underline">
                <h2 class="text-2xl font-bold mb-2">{{ $post['title'] }}</h2>
            </a>
            <p class="text-gray-600 text-sm mb-2">{{ Str::limit($post['body'], 270) }}</p>
            <a href="/blogs/{{ $post['slug'] }}" class="text-indigo-500 text-sm hover:underline">Read More &rarr;</a>
        </article>
    @endforeach
</x-layout>