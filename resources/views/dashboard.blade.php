<x-main>

    <div class="container-sm my-5 py-5 h-screen">
        
        <h1 class="h1 text-gray-50 font-semibold mt-12">Dashboard Personale</h1>
        <p class="text-gray-50 font-thin h6 mb-12">Qui trovi la dashboard con i miei progetti e le tenologie che uso e quelle che sto imparando</p>

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

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 min-h-52">

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
            <p class="text-gray-50 font-semibold h3">{{ $posts->count() }}</p>
        </div>
        

    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 min-h-52 mt-3">

        <div class="shadow rounded-3 bg-orange-50 hover:bg-orange-200 justify-items-center content-center p-4">
            <a href="{{route('post.index')}}" class="h-full w-full flex flex-col">
                <p class="text-orange-500 font-semibold h4">Visualizza i post</p>
                <p class="text-orange-500 font-thin h6 mb-auto">Attenzione! Puoi accedere solo se sei amministratore</p>
                <svg viewBox="0 0 16 16" class="bi bi-arrow-right-circle w-12 fill-orange-500" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z"/>
                  </svg>
            </a>
        </div>
        <div class="shadow rounded-3 bg-orange-50 hover:bg-orange-200 justify-items-center content-center p-4">
            <a href="{{route('post.create')}}" class="h-full w-full flex flex-col">
                <p class="text-orange-500 font-semibold h4">Crea un post</p>
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