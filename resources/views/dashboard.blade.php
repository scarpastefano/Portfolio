<x-main>
    

    {{-- message notification --}}
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
    @if (session('delete'))    
    <div class="container-sm justify-center flex">
        <div id="toast-success" class="container-sm slide-bottom flex fixed items-center max-w-xs content-center justify-center p-3 mb-3 rounded-lg shadow text-zinc-400 bg-red-900" role="alert">
          <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
            </svg>
              <span class="sr-only">Error icon</span>
          </div>
          <div class="ms-3 text-sm font-normal">{{ session('delete') }}</div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 text-zinc-400 hover:bg-zinc-600 hover:text-zinc-500 rounded-lg focus:ring-2 focus:ring-zinc-300 p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-success" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
          </button>
        </div>
      </div>
    @endif
    @if (session('update'))    
    <div class="container-sm justify-center flex">
        <div id="toast-success" class="container-sm slide-bottom flex fixed items-center max-w-xs content-center justify-center p-3 mb-3 rounded-lg shadow text-zinc-400 bg-blue-900" role="alert">
          <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 1v5h-5M2 19v-5h5m10-4a8 8 0 0 1-14.947 3.97M1 10a8 8 0 0 1 14.947-3.97"/>
            </svg>
              <span class="sr-only">Refresh icon</span>
          </div>
          <div class="ms-3 text-sm font-normal">{{ session('update') }}</div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 text-zinc-400 hover:bg-zinc-600 hover:text-zinc-500 rounded-lg focus:ring-2 focus:ring-zinc-300 p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-success" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
          </button>
        </div>
      </div>
    @endif



    <div class="container-sm my-5 py-5 min-h-screen">
        
        <h1 class="h1 text-gray-50 font-semibold mt-12">Dashboard Personale</h1>
        <p class="text-gray-50 font-thin h6">Qui trovi la dashboard con i miei progetti e le tenologie che uso e quelle che sto imparando</p>
        
        @if (Auth::check())
        <p class="text-white font-thin mb-10 text-lg">Ciao, <span class="font-bold text-orange-500">{{ Auth::user()->name }}</span></p>
        @else
            <p class="mb-10"></p>
        @endif
        
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 min-h-52">
            
            <div class="shadow flex flex-col rounded-3 bg-orange-500 p-4">
                <p class="text-gray-50 font-semibold h3 mb-auto">Progetti</p>
                <p class="text-gray-50 font-semibold h3">{{ $posts->count() }}</p>
            </div>
            <div class="shadow flex flex-col rounded-3 bg-orange-500 p-4">
                <p class="text-gray-50 font-semibold h3 mb-auto">Utenti</p>
                <p class="text-gray-50 font-semibold h3">{{ $users->count() }}</p>
            </div>
            <div class="shadow flex flex-col rounded-3 bg-orange-500 p-4">
                <p class="text-gray-50 font-semibold h3 mb-auto">Tecnologie</p>
                <p class="text-gray-50 font-semibold h3">{{ $tecnologie->count() }}</p>
                <a href="{{ route('tecnologie.index') }}">vai alle tecnologie</a>
            </div>
            
            
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-2 gap-3 min-h-52 mt-3">
            
            <div class="shadow rounded-3 bg-orange-50 hover:bg-orange-200 justify-items-center content-center p-4">
                <a href="{{route('post.index')}}" class="h-full w-full flex flex-col">
                    <p class="text-orange-500 font-semibold h4">Visualizza i progetti</p>
                    <p class="text-orange-500 font-thin h6 mb-auto">Attenzione! Puoi accedere solo se sei amministratore</p>
                    <svg viewBox="0 0 16 16" class="bi bi-arrow-right-circle w-12 fill-orange-500" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z"/>
                    </svg>
                </a>
            </div>
            <div class="shadow rounded-3 bg-orange-50 hover:bg-orange-200 justify-items-center content-center p-4">
                <a href="{{route('post.create')}}" class="h-full w-full flex flex-col">
                    <p class="text-orange-500 font-semibold h4">Crea un progetto</p>
                    <p class="text-orange-500 font-thin h6 mb-auto">Attenzione! Puoi accedere solo se sei amministratore</p>
                    <svg viewBox="0 0 16 16" class="bi bi-arrow-right-circle w-12 fill-orange-500" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z"/>
                    </svg>
                </a>
            </div>
            
        </div>
    </div>
    
    
    
    
    
</x-main>