<x-layouts.app title="Blog" description="Blog meta description">

    <main class="p-4 md:ml-64 h-auto pt-20">
        <section class="grid grid-cols-2 gap-3 mb-3 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($posts as $post)
                <div
                    class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64 dark:text-white flex justify-center">
                    <a href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                </div>
            @endforeach
        </section>
    </main>

</x-layouts.app>
