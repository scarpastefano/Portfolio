<x-main>


    <div class="container-none my-[150px]">
        <div class="container-sm">
            <h1 class="text-gray-50 my-12 h2 font-bold">{{ $post->title }}</h1>
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-5">
                <div class="col-span-7"> 
                    <img src="{{ Storage::url($post->image) }}" alt="nessuna immagine">
                </div>
                <div class="col-span-5">
                    <h1 class="text-gray-50">{{ $post->description }}</h1>
                </div>
            </div>
        </div>
    </div>


</x-main>