<x-layouts.app title="Register" description="Register meta description">

    <main class="pt-36 grid place-items-center">
        <section class="w-1/2 border dark:border-slate-800 p-4 backdrop-blur-md">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <picture class="border-8 border-transparent -mt-24 grid place-items-center">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" class="w-32 h-32" alt="lanro Logo" />
                </picture>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="name" autofocus="autofocus"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        value="{{ old('name') }}" placeholder=" " />
                    <label for="name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nombre
                    </label>
                    @error('name')
                        <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Apellido
                    </label>
                    @error('last_name')
                        <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Correo
                    </label>
                    @error('email')
                        <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="password"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="password"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Contraseña
                    </label>
                    @error('password')
                        <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="relative z-0 w-full mb-6 group flex">
                    <input type="password" name="password_confirmation"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="password_confirmation"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Confirmar contraseña
                    </label>
                    @error('password_confirmation')
                        <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex items-end justify-between">
                    <a href="{{ Route('login') }}"
                        class="font-bold underline text-black hover:text-blue-400 dark:text-white hover:dark:text-blue-300 duration-150 ease-in-out w-32 flex gap-3">
                        {{ __('Login') }}
                    </a>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </section>
    </main>

</x-layouts.app>
