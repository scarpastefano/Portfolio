<x-main>


    <div class="container-none my-[150px]">
        <div class="container-sm">
            <h1 class="text-gray-50 my-12 h2 font-bold">{{ $post->title }}</h1>
            <div class="grid grid-cols-1 sm:grid-cols-12 sm:gap-x-5 gap-y-5">
                <div class="col-span-7"> 
                    @foreach ($post->images as $key => $image)    
                    <img src="{{ Storage::url($image->path) }}" alt="nessuna immagine">
                    @endforeach
                </div>
                <div class="col-span-5">
                    <p class="font-bold text-lg">URL</p>
                    <a href="{{ $post->url }}" class="font-light mt-1 mb-4 text-orange-500 flex flex-row">Link al progetto
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 text-tertiary"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"></path></svg>
                    </a>
                    <p class="font-bold text-lg">Descrizione</p>
                    <p class="text-gray-50 font-thin tracking-wide text-justify">{{ $post->description }}</p>
                </div>
            </div>
        </div>
    </div>


</x-main>