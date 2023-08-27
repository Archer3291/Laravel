<x-layouts.app title="Blog" description="Blog meta description">

    <main class="p-4 md:ml-64 h-auto pt-20">
        <section class="grid grid-cols-2 gap-3 mb-3 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($produccion as $post)
                @if ($post->Puesto === 'Producción')
                    @include('posts.card')
                @endif
            @endforeach
        </section>
    </main>

</x-layouts.app>
