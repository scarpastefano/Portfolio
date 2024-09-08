<x-main>
    




    <div class="container-sm my-5 py-5 min-h-screen">

        {{-- <div id="toast-default" class="fixed float-right flex items-center justify-items-center w-full max-w-xs p-4 rounded-lg shadow text-gray-400 bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.147 15.085a7.159 7.159 0 0 1-6.189 3.307A6.713 6.713 0 0 1 3.1 15.444c-2.679-4.513.287-8.737.888-9.548A4.373 4.373 0 0 0 5 1.608c1.287.953 6.445 3.218 5.537 10.5 1.5-1.122 2.706-3.01 2.853-6.14 1.433 1.049 3.993 5.395 1.757 9.117Z"/>
                </svg>
                <span class="sr-only">Fire icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">Set yourself free.</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 text-gray-500 hover:text-white bg-gray-800" data-dismiss-target="#toast-default" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div> --}}
        
        
        <h1 class="h1 text-gray-50 font-semibold mt-12">Dashboard Personale</h1>
        <p class="text-gray-50 font-thin h6">Qui trovi la dashboard con i miei progetti e le tenologie che uso e quelle che sto imparando</p>
        
        @if (Auth::check())
        <p class="text-white font-thin mb-10 text-lg">Ciao, <span class="font-bold text-orange-500">{{ Auth::user()->name }}</span></p>
        @else
            <p class="mb-10"></p>
        @endif
        
        

        @if (session('success'))    
        <div id="flash" class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-500 role="alert">
            <span class="font-medium">{{session('success')}}</span>
        </div>
        @endif
        @if (session('delete'))    
        <div id="flash" class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-500 role="alert">
            <span class="font-medium">{{session('delete')}}</span>
        </div>
        @endif
        @if (session('update'))    
        <div id="flash" class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-500 role="alert">
            <span class="font-medium">{{session('update')}}</span>
        </div>
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