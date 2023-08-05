<x-layouts.app title="Blog" description="Blog meta description">
    <main class="p-4 md:ml-64 h-96 pt-20">
        <section>
            <!-- component -->
            <div class="mx-auto w-2/3">
                <!-- Profile Card -->
                <div class="rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased"
                    style="
    background-image: url('https://images.unsplash.com/photo-1578836537282-3171d77f8632?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');
    background-repeat: no-repat;
    background-size: cover;
    background-blend-mode: multiply;
  ">
                    <div class="md:w-1/3 w-full">
                        <img class="rounded-lg shadow-lg antialiased w-96 h-80"
                            src="{{ asset("assets/images/$post->Nombre.png") }}">
                    </div>
                    <div class="md:w-2/3 w-full px-3 flex flex-row flex-wrap">
                        <div class="w-full grid place-items-center text-gray-700 font-semibold relative pt-3 md:pt-0">
                            <div class="text-2xl text-white leading-tight">{{ $post->Nombre }} {{ $post->Apellido }}
                            </div>
                            <div class="text-normal text-gray-300 hover:text-gray-400 cursor-pointer">
                                <span class="border-b border-dashed border-gray-500 pb-1">
                                    Puesto: {{ $post->Puesto }}
                                </span>
                            </div>
                            <div class="text-normal text-gray-300 hover:text-gray-400 cursor-pointer">
                                <span class="border-b border-dashed border-gray-500 pb-1">
                                    Edad: {{ $post->Edad }}
                                </span>
                            </div>
                            <div class="text-normal text-gray-300 hover:text-gray-400 cursor-pointer">
                                <span class="border-b border-dashed border-gray-500 pb-1">
                                    Ruta: {{ $post->Ruta }}
                                </span>
                            </div>


                            <div
                                class="text-sm text-gray-300 hover:text-gray-400 cursor-pointer md:absolute pt-3 md:pt-0 bottom-0 right-0">
                                Fecha de ingreso: <b> {{ $post->Fecha_ingreso }} </b></div>
                        </div>
                    </div>
                </div>
                <!-- End Profile Card -->
            </div>

            <a href="{{ route('posts.index') }}" class="flex font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-move-left text-black dark:text-white">
                    <path d="M6 8L2 12L6 16" />
                    <path d="M2 12H22" />
                </svg>
                <p class="ml-4 text-black dark:text-white">Regresar</p>
            </a>
        </section>
    </main>

</x-layouts.app>
