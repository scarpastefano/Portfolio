
<div class="container-sm">
    <h1 class="mt-24 mb-12 text-2xl font-extrabold">Crea un progetto</h1>
    
    <form wire:submit="store">
        
        <div class="mb-32 mt-26">
            <div class="grid gap-6 mb-3 md:grid-cols-2">
                {{-- input titolo --}}
                <div class="">
                    <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white" for="title">Titolo</label>
                    <input class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 block w-full p-3 mb-6 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 " wire:model.blur="title" type="text" id="title">
                    @error('title')
                    <div class="alert alert-danger my-3 p-1" role="alert">
                        {{ $message }}
                    </div> 
                    @enderror
                </div>
                
                {{-- input link --}}
                <div class="">
                    <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white" for="url">Link progetto</label>
                    <input class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 block w-full p-3 mb-6 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 " wire:model.blur="url" type="url" id="url">
                    @error('url')
                    <div class="alert alert-danger my-3 p-1" role="alert">
                        {{ $message }}
                    </div> 
                    @enderror
                </div>
            </div>
            
            <div class="grid gap-6 mb-3 md:grid-cols-2">
            {{-- input descrizione --}}
            <div class="">
                <label class="mb-3" for="description" id="description">Descrizione</label>
                <textarea class="block mb-6 p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg  focus:ring-blue-500 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500" wire:model.blur="description" rows="6"></textarea>
                @error('description')
                <div class="alert alert-danger my-3 p-1" role="alert">
                    {{ $message }}
                </div> 
                @enderror
            </div>
            
            
            {{-- input immagini --}}
            <div class="">
                <p class="mb-3">Immagini</p>
                <div class="flex items-center justify-center w-full">
                    <label for="image" class="mb-6 flex flex-col items-center justify-center w-full h-54 py-3 border-gray-300 rounded-lg cursor-pointer bg-gray-700">
                        <div class="flex flex-col items-center justify-center">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input type="file" wire:model.live="temporary_images" multiple class="@error('temporary_images.*') is-invalid @enderror" placeholder="/img">
                    </label>
                </div> 
                @error('temporary_images.*') 
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                @error('temporary_images') 
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            </div>

            @if (!empty($images))
            <div>
                <p>Photo Preview:</p>
                <div class="grid grid-cols-4">
                    @foreach ($images as $key => $image)
                    <div class="col d-flex flex-column align-items-center my-3">
                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm p-1 me-2 mb-2" wire:click="removeImage({{$key}})">x</button>
                        <img class="h-32 w-32" src="{{$image->temporaryUrl()}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            
            <div class="d-grid d-flex justify-content-center">
                <button class="my-4 text-zinc-50 bg-orange-500 block focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" type="submit">Salva</button>
            </div>
            
        </div>
    </form>
    
</div>