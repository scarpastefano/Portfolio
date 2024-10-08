<x-main>
  
  <div class="container-lg">

    @if (session('success'))
    <div class="container-sm justify-center flex">
      <div id="toast-success" class="container-sm slide-bottom flex fixed items-center max-w-xs content-center justify-center p-3 mb-3 rounded-lg shadow text-zinc-400 bg-green-900" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 text-zinc-400 hover:bg-zinc-600 hover:text-zinc-500 rounded-lg focus:ring-2 focus:ring-zinc-300 p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
      </div>
    </div>
    @endif
    
    <div class="grid grid-cols-1 sm:grid-cols-12 gap-3 min-h-screen my-[10px] sm:my-0 justify-center content-center">
      <div class="text-gray-50 sm:col-span-8 p-14">
        <p class="font-bold text-4xl sm:text-5xl">Ciao, sono <span class="text-orange-500">Stefano</span></p>
        <p><span class="text-orange-500 font-extrabold text-5xl sm:text-6xl">Full-Stack Web Developer</span></p>
        
        <div class="flex flex-row gap-3 mt-10">
          <a href="https://github.com/scarpastefano" class="flex bg-zinc-800 py-2 px-3 rounded-full w-auto justify-center align-middle">
            <span>Github</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 text-tertiary"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"></path></svg>
          </a>
          <a href="https://www.linkedin.com/in/scarpa-stefano/" class="flex bg-zinc-800 py-2 px-3 rounded-full w-auto justify-center align-middle">
            <span>Linkedin</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 text-tertiary"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"></path></svg>
          </a>
        </div>
        
      </div>
      <div class="text-gray-50 sm:col-span-4 grid justify-items-center content-center">
        <img class="h-56 w-56 object-cover rounded-full shadow-lg" src="{{URL::asset('asset/IMG_5344.jpeg')}}" alt="">
      </div>
    </div>
    <div class="grid justify-items-center -mt-12 sm:mt-[-80px] mb-12">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-bounce size-16 text-gray-50 -m-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
      </svg>
    </div>
  </div>
  
  
  <div class="container-none bg-zinc-800 mt-[80px]">
    <div class="container-sm  min-h-54 px-8 flex justify-content-center align-items-center flex-col">
      <div class="grid grid-cols-1 sm:grid-cols-12 justify-items-center align-items-center">
        <div class="col-span-6 p-12">
          <h5 class="text-gray-50 font-semibold h4">Per visualizzare la mia dashboard con tutti i progetti e le tecnologie clicca qui</h5>
          <div class="flex relative justify-center">
            <a href="{{route('dashboard')}}" class="text-gray-50 font-bold h4 mt-5 bg-orange-500 hover:bg-orange-800 px-5 py-2.5 rounded-3 relative inline-flex">Dashboard</a>
          </div>
        </div>
        <div class="col-span-6">
          <img src="{{ URL::asset('asset/iphone-dashboard.png') }}" class="h-54 relative" alt="">
          <div class="w-54 h-54 bg-slate-200 absolute top-0 left-0"></div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- sezione con le tecnologie --}}
  <div class="container-none bg-zinc-900 py-20 ">
    <div class="container min-h-screen grid grid-cols-1 sm:grid-cols-2 py-10">
      <div class="justify-center content-center">
        <h2 class="h1 text-gray-50 text-center font-bold">Tech Stack</h2>
        <p class="font-thin text-gray-50 text-center">Le tecnologie che attualmente sto utilizzando per i miei progetti</p>
        {{-- <h4 class="h3 text-gray-50 text-center font-thin">Skills</h4> --}}
      </div>
      
      <div class="grid grid-cols-2 sm:grid-cols-4 justify-items-center content-center mx-12 my-12 gap-5">

        @foreach ($tecnologie as $tech)
          <div class="bg-zinc-700 h-32 w-32 rounded-lg flex flex-col gap-3 items-center justify-center">
            <img class="w-10 h-10" src="{{ Storage::URL($tech->icon) }}" alt="">
            <p>{{ $tech->name }}</p>
          </div>
        @endforeach

      </div>
        
      </div>
    </div>
  </div>
  
  
  <div class="container-sm flex flex-row flex-wrap w-full gap-5 justify-center my-16">
    @forelse ($posts as $post)
    
    <div class="max-w-sm max-h-sm rounded-md group-hover:opacity-25 hover:!opacity-100">
      <a href="{{ route('post.show', ['post' => $post->id]) }}" class="aspect-square overflow-hidden w-full h-auto">
        <img class="rounded-t-lg relative w-full max-h-[18rem] aspect-square object-cover rounded-md" src="{{$post->images->isNotEmpty() ? Storage::URL($post->images->first()->path) : 'https://dummyimage.com/300x300/d4d4d4/fff'}}" alt=""/>
      </a>
      <div class="pt-3">
        <a href="{{ route('post.show', ['post' => $post->id]) }}">
          <h5 class="mb-3 sm:text-2xl text-md font-bold tracking-tight text-white">{{$post->title}}</h5>
        </a>
        <a href="{{ route('post.show', ['post' => $post->id]) }}" class="inline-flex items-center px-3 me-2 mb-2 py-2 text-xs font-medium text-center text-white bg-zinc-800 rounded-full hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:bg-zinc-600 dark:hover:bg-zinc-700 dark:focus:ring-zinc-800">
          Info progetto
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 text-tertiary"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"></path></svg>
        </a>
        @if (!empty($post->url))  
        <a href="{{ $post->url }}" target="_blank" class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-orange-700 rounded-full hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
          link al progetto
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 text-tertiary"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"></path></svg>
        </a>
        @endif
        <p class="text-xs text-zinc-400 my-3">{{$post->created_at->format('d M, Y')}}</p>
      </div>
    </div>
    
    @empty
    
    <div class="max-w-sm bg-zinc-800 rounded-lg shadow">
      <a href="#">
        <img class="rounded-t-lg" src="https://dummyimage.com/400x300/828282/fff" alt="" />
      </a>
      <div class="p-5">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Read more
          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg>
        </a>
      </div>
    </div>
    
    @endforelse
    
  </div>
  
  
  <div class="container-none bg-zinc-700 py-12">
    <div class="w-full grid grid-cols-1 sm:grid-cols-2 container justify-items-center content-center h-[300px]">
      <div class="flex flex-column justify-center align-items-center">
        <p class="text-gray-100 font-semibold h5">Per contattarmi clicca il pulsante</p>
        <p class="text-gray-100 font-thin my-3">o</p>
        <div class="flex flex-wrap gap-4">
          <a href=#""><img class="invert w-14" src="{{URL::asset('asset/icons8-github-240.png')}}" alt=""></a>
          <a href=""><img class="invert w-14" src="{{URL::asset('asset/icons8-linkedin-logo-250.png')}}" alt=""></a>
        </div>
      </div>
      <a class="content-center" href="{{route('contacts')}}">
        <button type="button" class="border-0 text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3 text-xl px-4 py-2 my-8 text-center">Contattami</button>
      </a>
    </div>
  </div>
  
  
</x-main>