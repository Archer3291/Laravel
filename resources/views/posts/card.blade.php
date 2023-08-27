<article
    class="w-full max-w-sm relative bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="{{ route('posts.edit', $post) }}"
        class="absolute p-2 right-2 px-4 py-2 text-blue-500 dark:text-blue-400">Editar</a>

    <div class="flex flex-col items-center pb-10">
        <img class="w-20 h-20 mb-3 rounded-full shadow-lg" src="{{ asset($post->image_path) }}"
            alt="{{ $post->Nombre }} imagen" />
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $post->Nombre }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $post->Puesto }}</span>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $post->Grado_Academico }}</span>
        <a href="{{ route('posts.show', $post) }}"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-violet-700 rounded-lg hover:bg-violet-800 dark:bg-violet-600 dark:hover:bg-violet-700 mt-4 space-x-3 md:mt-6">
            Ver informacion
        </a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 dark:bg-red-600 dark:hover:bg-red-700 mt-4 space-x-3 md:mt-6"
                type="submit">Eliminar</button>
        </form>
    </div>
</article>
