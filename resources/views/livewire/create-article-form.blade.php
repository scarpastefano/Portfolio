<form wire:submit="store">
    
    <div class="container-sm my-32">
        
        {{-- input titolo --}}
        <div class="">
            <input class="form-control border-2" wire:model.blur="title" type="text" id="title">
            <label class="ms-2" for="title">Titolo</label>
            @error('title')
            <div class="alert alert-danger my-3 p-1" role="alert">
                {{ $message }}
            </div> 
            @enderror
        </div>
        
        {{-- input descrizione --}}
        <div class="">
            <textarea class="" wire:model.blur="description" style="height: 180px" rows="5"></textarea>
            <label for="description" id="description">Descrizione</label>
            @error('description')
            <div class="alert alert-danger my-3 p-1" role="alert">
                {{ $message }}
            </div> 
            @enderror
        </div>
        
        
        <div class="mb-3">
            <input type="file" wire:model.live="temporary_images" multiple class="@error('temporary_images.*') is-invalid @enderror" placeholder="/img">
            @error('temporary_images.*') 
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            @error('temporary_images') 
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        @if (!empty($images))
        <div>
            <p>Photo Preview:</p>
            <div class="grid grid-cols-4">
                @foreach ($images as $key => $image)
                <div class="col d-flex flex-column align-items-center my-3">
                    <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})">x</button>
                    <img class="h-32 w-32" src="{{$image->temporaryUrl()}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
        <div class="d-grid d-flex justify-content-center">
            <button class="btn btn-dark rounded-3 mb-5 px-5 py-2" type="submit">Salva</button>
        </div>
        
    </div>
</form>