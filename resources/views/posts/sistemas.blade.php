<x-layouts.app title="Blog" description="Blog meta description">

    <main class="p-4 md:ml-64 h-auto pt-20">
        <section class="grid grid-cols-2 gap-3 mb-3 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($sistemas as $post)
                @if ($post->Puesto === 'Sistemas')
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-20 h-20 mb-3 rounded-full shadow-lg"
                                src="{{ asset($post->image_path) }}"
                                alt="{{ $post->Nombre }} image" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $post->Nombre }}</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $post->Puesto }}</span>
                            <div class="flex mt-4 space-x-3 md:mt-6">
                                <a href="{{ route('posts.show', $post) }}"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Ver informacion </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </section>
    </main>

</x-layouts.app>