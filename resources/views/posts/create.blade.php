<x-layouts.app title="Create" description="Create meta description">

    <main class="p-4 md:ml-64 h-auto pt-36">
        <section class="grid place-items-center">

            <div class="text-black dark:text-white w-1/2 border dark:border-slate-800 p-4 backdrop-blur-md">
                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    <div class="-mt-20 grid place-items-center">
                        <div class="border-8 border-transparent">
                            <img src="{{ asset('assets/images/logo/logo.png') }}" class="w-32 h-32" alt="lanro Logo" />
                        </div>
                    </div>
                    @csrf
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="Nombre"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ old('Nombre') }}" />
                            <label for="nombre"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nombre
                            </label>
                            @error('Nombre')
                                <small class="text-red-500 dark:text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="Apellido"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ old('Apellido') }}" />
                            <label for="apellido"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Apellido
                            </label>
                            @error('Apellido')
                                <small class="text-red-500 dark:text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="Edad"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ old('Edad') }}" />
                            <label for="edad"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Edad
                            </label>
                            @error('Edad')
                                <small class="text-red-500 dark:text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="Puesto"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ old('Puesto') }}" />
                            <label for="puesto"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Puesto
                            </label>
                            @error('Puesto')
                                <small class="text-red-500 dark:text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="Ruta"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ old('Ruta') }}" />
                            <label for="ruta"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Ruta
                            </label>
                            @error('Ruta')
                                <small class="text-red-500 dark:text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="Grado_Academico"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ old('Grado_Academico') }}" />
                            <label for="grado"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Grado academico
                            </label>
                            @error('Grado_Academico')
                                <small class="text-red-500 dark:text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Fecha_ingreso"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            value="{{ now()->format('Y-m-d') }}" />
                        <label for="fecha"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Fcha de ingreso
                        </label>
                        @error('Fecha_ingreso')
                            <small class="text-red-500 dark:text-red-400">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="file" name="avatar"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            id="fileInput" />
                        <label for="avatar"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Subir imagen
                        </label>
                        @error('avatar')
                            <small class="text-red-500 dark:text-red-400">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Enviar </button>
                </form>
                <div class="grid place-items-center pt-10" id="previewContainer">
                    <img class="w-auto h-auto" id="previewImage" src="#" alt="Vista previa">
                </div>
            </div>

        </section>
    </main>

</x-layouts.app>
