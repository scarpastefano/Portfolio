<x-main>

    <div class="container-sm my-5 py-5 h-full">
        
        <h1 class="h1 text-gray-50 font-semibold my-12">Dashboard Amministratore</h1>

        @if (session('success'))    
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-500 role="alert">
            <span class="font-medium">{{session('success')}}</span>
        </div>
        @endif

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 min-h-52">

        <div class="shadow flex flex-col rounded-3 bg-orange-500 p-4">
            <p class="text-gray-50 font-semibold h3 mb-auto">Post creati</p>
            <p class="text-gray-50 font-semibold h3">{{ $posts->count() }}</p>
        </div>
        <div class="shadow flex flex-col rounded-3 bg-orange-500 p-4">
            <p class="text-gray-50 font-semibold h3 mb-auto">Utenti</p>
            <p class="text-gray-50 font-semibold h3">{{ $users->count() }}</p>
        </div>
        <div class="shadow flex flex-col rounded-3 bg-orange-500 p-4">
            <p class="text-gray-50 font-semibold h3 mb-auto">Post creati</p>
            <p class="text-gray-50 font-semibold h3">{{ $posts->count() }}</p>
        </div>
        

    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 min-h-52 mt-3">

        <div class="shadow rounded-3 bg-orange-50 justify-items-center content-center p-4">
            <a href="{{route('post.index')}}" class="h-full w-full">
                <p class="text-orange-500 h-full font-semibold h4">Visualizza i post</p>
            </a>
        </div>
        <div class="shadow rounded-3 bg-orange-50 justify-items-center content-center p-4">
            <a href="{{route('post.create')}}" class="h-full w-full">
                <p class="text-orange-500 h-full font-semibold h4">Crea un post</p>
            </a>
        </div>

    </div>
</div>


      


</x-main>