<x-layouts.app title="Create" description="Create meta description">

    <main class="p-4 md:ml-64 h-auto pt-36">
        <section class="grid place-items-center">
            <article class="w-1/2 border dark:border-slate-800 p-4 backdrop-blur-md gap-y-4">
                <form class="" method="POST" action="{{ route('posts.update', $post) }}"
                    enctype="multipart/form-data">
                    @csrf @method('PATCH')
                    <picture class="border-8 border-transparent -mt-24 grid place-items-center gap-y-4">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" class="w-32 h-32" alt="lanro Logo" />
                        <h2 class="font-bold text-xl text-blue-400 dark:text-blue-300"> Formulario de edicion </h2>
                    </picture>

                    @include('posts.form_fields')

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Enviar </button>
                </form>
                <br>

                <div class="flex items-center w-2/3 p-4 mb-4 text-sm text-yellow-500 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-500"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Imagen:</span> Si no se desea cambiar la imagen, seleccionar la misma
                    </div>
                </div>

                <picture class="grid grid-cols-2 grid-rows-2 place-items-center gap-8">
                    <p class="grid grid-col-4 text-blue-400 dark:text-blue-300 h-1"> Imagen cambiada </p>
                    <p class="grid grid-col-4 text-blue-400 dark:text-blue-300 h-1"> Imagen original </p>
                    <div class="grid grid-row place-items-center pt-10" id="previewContainer">
                        <img class="w-auto h-auto" id="previewImage" src="#" alt="Vista previa">
                    </div>

                    <div class="grid grid-row place-items-center pt-10" id="previewContainer">
                        <img class="w-auto h-auto" src="{{ asset($post->image_path) }}" alt="Vista previa">
                    </div>
                </picture>
            </article>

        </section>
    </main>

</x-layouts.app>
