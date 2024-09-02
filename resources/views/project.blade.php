<x-main>

    <div class="container-sm flex flex-row flex-wrap w-full gap-5 justify-center my-28">

    @foreach ($posts as $post)
    <div class="max-w-sm bg-zinc-800 rounded-lg shadow w-[20rem]">
        <a href="{{ route('post.show', ['post' => $post->id]) }}">
          <img class="rounded-t-lg w-full h-72 object-cover" src="{{ Storage::url($post->image) }}" alt="nessuna immagine" />
        </a>
        <div class="p-5">
          <a href="{{ route('post.show', ['post' => $post->id]) }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">{{ $post->description }}</p>
          <a href="{{ route('post.show', ['post' => $post->id]) }}" class="inline-flex items-center underline py-2 text-sm font-medium text-center text-orange-500 hover:text-orange-700">
            Visualizza
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
          </a>
        </div>
      </div>
    @endforeach

    </div>
</x-main>