<x-main>


    <div class="container-sm my-[200px]">
        <h1 class="text-gray-50 my-12">{{ $post->title }}</h1>
        <h1 class="text-gray-50 my-12">{{ $post->description }}</h1>
        <img src="{{ Storage::url($post->image) }}" alt="nessuna immagine">
    </div>

</x-main>