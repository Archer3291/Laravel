<div class="grid md:grid-cols-2 md:gap-6 mt-6">
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="Nombre"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " value="{{ old('Nombre', $post->Nombre) }}" />
        <label for="nombre"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Nombre
        </label>
        @error('Nombre')
            <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
        @enderror
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="Apellido"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " value="{{ old('Apellido', $post->Apellido) }}" />
        <label for="apellido"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Apellido
        </label>
        @error('Apellido')
            <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-6 group">
        <input type="number" name="Edad"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " value="{{ old('Edad', $post->Edad) }}" />
        <label for="edad"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Edad
        </label>
        @error('Edad')
            <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
        @enderror
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="Puesto"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " value="{{ old('Puesto', $post->Puesto) }}" />
        <label for="puesto"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Puesto
        </label>
        @error('Puesto')
            <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="Ruta"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " value="{{ old('Ruta', $post->Ruta) }}" />
        <label for="ruta"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Ruta
        </label>
        @error('Ruta')
            <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
        @enderror
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="Grado_Academico"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " value="{{ old('Grado_Academico', $post->Grado_Academico) }}" />
        <label for="grado"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Grado academico
        </label>
        @error('Grado_Academico')
            <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
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
        <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
    @enderror
</div>

<div class="relative z-0 w-full mb-6 group">
    <input type="file" name="image_path"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        id="fileInput" value="{{ old('image_path') }}" />
    <label for="image_path"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
        Subir imagen
    </label>
    @error('image_path')
        <small class="font-bold text-red-500/80 dark:text-red-500">{{ $message }}</small>
    @enderror
</div>
