<x-main>
    
    <div class="container-sm my-8 sm:my-16 py-16">

        <div class="flex flex-row justify-between">
            <a class="flex flex-row text-sm pe-3 sm:pe-4 py-2 sm:py-3 mb-3 underline" href="{{ route('dashboard') }}">
                <svg class="h-5 w-5 sm:h-7 sm:w-7 me-1" xmlns="http://www.w3.org/2000/svg" height="" viewBox="0 -960 960 960" width="" fill="#e8eaed"><path d="M560-267.69 347.69-480 560-692.31 588.31-664l-184 184 184 184L560-267.69Z"/></svg>
                torna alla dashboard
            </a>
            @if (Auth::check())
            <a class="h-10 bg-orange-500 hover:bg-orange-400 px-3 py-0 mb-0 flex items-center rounded-sm sm:rounded-lg text-sm" href="{{ route('tecnologie.create') }}">Aggiungi</a>
            @else
            <a class="hidden bg-orange-500 hover:bg-orange-400 px-3 py-0 mb-0 items-center rounded-sm text-sm" href="{{ route('tecnologie.create') }}">Aggiungi</a>
            @endif
        </div>

    <div class="overflow-x-auto overflow-y-auto mt-3 shadow-md rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right">
            <thead class="text-xs bg-zinc-500">
                <tr>
                    <th scope="col" class="px-3 sm:px-6 py-3 hidden sm:block">
                        ID
                    </th>
                    <th scope="col" class="px-3 sm:px-6 py-3">
                        Immagine
                    </th>
                    <th scope="col" class="px-3 sm:px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-3 sm:px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tecnologie as $tech)
                <tr class="border-b">
                    <th scope="row" class="ps-1 pe-3 sm:pe-6 sm:ps-3 py-3 hidden sm:block">
                        <p class="text-sm sm:text-md font-light">#{{ $tech->id }}</p>
                    </th>
                    <td class="px-3 sm:px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-8 h-8" src="{{ Storage::URL($tech->icon) }}" alt="nessuna icona">
                    </td>
                    <td class="px-3 sm:px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <p class="text-sm sm:text-lg">{{ $tech->name }}</p>
                    </td>
                    
                    @if (Auth::check())    
                    <td class="px-3 py-3 flex flex-row content-center">
                        <a href="{{ route('tecnologie.show', ['tecnologie' => $tech->id]) }}"
                            class="btn me-md-2 stroke-gray-50 hover:stroke-orange-500">
                            <svg class="stroke-gray-50 hover:stroke-orange-500 h-5 w-5 sm:h-7 sm:w-7" fill="none" height="" viewBox="0 0 24 24" width="" xmlns="http://www.w3.org/2000/svg"><g class="stroke-gray-50 hover:stroke-orange-500" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m1 12s4-8 11-8 11 8 11 8"/><path d="m1 12s4 8 11 8 11-8 11-8"/><circle cx="12" cy="12" r="3"/></g></svg>
                        </a>
                        <a href="{{ route('tecnologie.edit', ['tecnologie' => $tech->id]) }}"
                            class="btn me-md-2">
                            <svg class="stroke-gray-50 hover:stroke-orange-500 h-5 w-5 sm:h-7 sm:w-7"
                            width=""
                            height=""
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            >
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                    </a>
                    <form class="inline-block btn me-md-2" action="{{ route('tecnologie.destroy', ['tecnologie' => $tech->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" rounded-full">
                            <svg class="stroke-gray-50 hover:stroke-orange-500 h-5 w-5 sm:h-7 sm:w-7" fill="none" height="" viewBox="0 0 24 24" width="" xmlns="http://www.w3.org/2000/svg"><g fill="#292d32"><path d="m20.9997 6.72998c-.02 0-.05 0-.08 0-5.29-.53-10.57-.73-15.80003-.2l-2.04.2c-.42.04-.79-.26-.83-.68s.26-.78.67-.82l2.04-.2c5.32003-.54 10.71003-.33 16.11003.2.41.04.71.41.67.82-.03.39-.36.68-.74.68z"/><path d="m8.50074 5.72c-.04 0-.08 0-.13-.01-.4-.07-.68-.46-.61-.86l.22-1.31c.16-.96.38-2.29 2.70996-2.29h2.62c2.34 0 2.56 1.38 2.71 2.3l.22 1.3c.07.41-.21.8-.61.86-.41.07-.8-.21-.86-.61l-.22-1.3c-.14-.87-.17-1.04-1.23-1.04h-2.62c-1.05996 0-1.07996.14-1.22996 1.03l-.23 1.3c-.06.37-.38.63-.74.63z"/><path d="m15.2104 22.7501h-6.42001c-3.49 0-3.63-1.93-3.74-3.49l-.65-10.07003c-.03-.41.29-.76999.7-.79999.42-.02.77.29.8.7l.65 10.07002c.11 1.52.15 2.09 2.24 2.09h6.42001c2.1 0 2.14-.57 2.24-2.09l.65-10.07002c.03-.41.39-.72.8-.7.41.03.73.37999.7.79999l-.65 10.07003c-.11 1.56-.25 3.49-3.74 3.49z"/><path d="m13.6601 17.25h-3.33c-.41002 0-.75002-.34-.75002-.75s.34-.75.75002-.75h3.33c.41 0 .75.34.75.75s-.34.75-.75.75z"/><path d="m14.5 13.25h-5c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h5c.41 0 .75.34.75.75s-.34.75-.75.75z"/></g></svg>
                        </button>
                    </form>
                </td>
                @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</x-main>