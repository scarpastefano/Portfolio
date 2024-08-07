<x-main>
    
    <form action="{{ route('post.update', compact('post')) }}" method="POST" enctype="multipart/form-data" class="my-28 container-sm">
        @csrf
        @method('PUT')
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titolo</label>
        <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 mb-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $post->title }}"/>
        
        
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrizione</label>
        <textarea id="description" name="description" rows="4" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $post->description }}</textarea>
        
        
        <p class="mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Immagine</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <img class="w-full h-64 border rounded-3 object-cover" src="{{Storage::url($post->image)}}" alt="nessuna immagine">
            </div>
            <div>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-1 border-gray-300 border-solid rounded-lg cursor-pointer bg-gray-700">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" name="image" value type="file" class="text-xs text-gray-500 dark:text-gray-400" value="{{ Storage::url($post->image) }}" />
                    </label>
                </div> 
            </div>
        </div>
        
        {{-- <div class="">
            <img src="{{Storage::url($post->image)}}" alt="">
            <input class="form-control" id="image" name="image" value type="file">
        </div> --}}
        
        
        <button type="submit" class="my-4 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Aggiorna</button>
        
    </form>
    
    
</x-main>