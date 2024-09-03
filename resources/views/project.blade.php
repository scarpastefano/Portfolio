<x-main>
  
  {{-- <div class="container-sm flex flex-row flex-wrap w-full gap-5 justify-center my-28"> --}}
    <div class="container-sm grid lg:grid-cols-3 grid-cols-2 w-full gap-4 justify-center my-28 group">
      
      @foreach ($posts as $post)
      
      <div class="max-w-sm max-h-sm rounded-md group-hover:opacity-25 hover:!opacity-100">
        <a href="{{ route('post.show', ['post' => $post->id]) }}" class="aspect-square overflow-hidden w-full h-auto">
          <img class="rounded-t-lg relative w-full max-h-[18rem] aspect-square object-cover rounded-md" src="{{Storage::url($post->image)}}" alt="" />
        </a>
        <div class="pt-3">
          <a href="{{ route('post.show', ['post' => $post->id]) }}">
            <h5 class="mb-3 sm:text-2xl text-md font-bold tracking-tight text-white">{{$post->title}}</h5>
          </a>
          {{-- <p class="mb-3 font-normal sm:text-lg text-xs text-gray-700 dark:text-gray-400">{{$post->description}}</p> --}}
          <a href="{{ route('post.show', ['post' => $post->id]) }}" class="inline-flex items-center px-3 me-2 mb-2 py-2 text-xs font-medium text-center text-white bg-zinc-800 rounded-lg hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring-zinc-800">
            Info progetto
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 text-tertiary"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"></path></svg>
          </a>
          <a href="{{ route('post.show', ['post' => $post->id]) }}" target="_blank" class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-orange-700 rounded-lg hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
            link al progetto
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 text-tertiary"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"></path></svg>
          </a>
          {{-- <p class="text-xs text-zinc-400 my-3 sm:my-5">{{$post->created_at->format('d/m/Y')}}</p> --}}
          <p class="text-xs text-zinc-400 my-3">{{$post->created_at->format('d M, Y')}}</p>
        </div>
      </div>
      
      @endforeach
      
    </div>
  </x-main>