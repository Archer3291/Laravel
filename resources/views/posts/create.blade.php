<x-layouts.app title="Create" description="Create meta description">

    <main class="p-4 md:ml-64 h-auto pt-36">
        <section class="grid place-items-center">
            <article class="w-1/2 border dark:border-slate-800 p-4 backdrop-blur-md">
                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <picture class="border-8 border-transparent -mt-24 grid place-items-center">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" class="w-32 h-32" alt="lanro Logo" />
                    </picture>

                    @include('posts.form_fields')

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Enviar </button>
                </form>
                <div class="grid grid-row place-items-center pt-10" id="previewContainer">
                    <img class="w-auto h-auto" id="previewImage" src="#" alt="Vista previa">
                </div>
            </article>

        </section>
    </main>

</x-layouts.app>
