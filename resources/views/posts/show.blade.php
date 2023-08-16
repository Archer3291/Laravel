<x-layouts.app title="{{ $post->Nombre }}" description="Blog meta description">
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
    background-blend-mode: multiply;">
                    <div class="md:w-1/3 w-full">
                        <img class="rounded-lg shadow-lg antialiased w-96 h-80" src="{{ asset($post->image_path) }}">
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
                            <div class="text-normal text-gray-300 hover:text-gray-400 cursor-pointer">
                                <span class="border-b border-dashed border-gray-500 pb-1">
                                    Grado: {{ $post->Grado_Academico }}
                                </span>
                            </div>
                            <div
                                class="text-sm text-gray-300 hover:text-gray-400 cursor-pointer md:absolute pt-3 md:pt-0 bottom-8 right-0">
                                Fecha de ingreso: <b> {{ $post->Fecha_ingreso }} </b>
                            </div>

                            <div
                                class="text-sm text-gray-300 hover:text-gray-400 cursor-pointer md:absolute pt-3 md:pt-0 bottom-0 right-0">
                                @if ($post->Ruta === 'Foraneo')
                                    Tiempo extra: <b> No </b>
                                @else
                                    Tiempo extra: <b> Si </b>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Profile Card -->
            </div>

            <a href="{{ route($post->Puesto) }}" class="font-bold text-black dark:text-white w-32 flex gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-black dark:text-white" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 14l-4 -4l4 -4"></path>
                    <path d="M5 10h11a4 4 0 1 1 0 8h-1"></path>
                </svg>
                Regresar
            </a>
        </section>
    </main>

</x-layouts.app>
