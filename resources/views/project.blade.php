<x-main>
  
  {{-- <div class="container-sm flex flex-row flex-wrap w-full gap-5 justify-center my-28"> --}}
    <div class="container-sm grid lg:grid-cols-3 grid-cols-2 w-full gap-4 justify-center my-28">
      
      @foreach ($posts as $post)
      
      
      <div class="max-w-sm max-h-sm bg-zinc-800 rounded-lg shadow">
        <a href="{{ route('post.show', ['post' => $post->id]) }}">
          <img class="rounded-t-lg aspect-square object-cover w-full max-h-[18rem]" src="{{Storage::url($post->image)}}" alt="" />
        </a>
        <div class="sm:p-5 p-4">
          <a href="{{ route('post.show', ['post' => $post->id]) }}">
            <h5 class="mb-2 sm:text-2xl text-md font-bold tracking-tight text-gray-900 dark:text-white">{{$post->title}}</h5>
          </a>
          <p class="mb-3 font-normal sm:text-lg text-xs text-gray-700 dark:text-gray-400">{{$post->description}}</p>
          <a href="{{ route('post.show', ['post' => $post->id]) }}" class="inline-flex items-center px-3 me-2 mb-2 py-2 sm:text-sm text-xs font-medium text-center text-white bg-orange-700 rounded-lg hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
            Info progetto
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
          </a>
          <a href="{{ route('post.show', ['post' => $post->id]) }}" target="_blank" class="inline-flex items-center px-3 py-2 sm:text-sm text-xs font-medium text-center text-white bg-orange-700 rounded-lg hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
            link al progetto
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
          </a>
          <p class="text-xs text-zinc-600 my-3 sm:my-5">{{$post->created_at->format('d/m/Y')}}</p>
        </div>
      </div>
      
      @endforeach
      
    </div>
  </x-main>