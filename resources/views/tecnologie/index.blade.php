<x-main>
    
    <div class="container-sm my-16 py-16">
        @if (Auth::check())    
        <a href="{{ route('tecnologie.create') }}" class="bg-orange-500 hover:bg-orange-400 px-4 py-3 text-zinc-300 rounded-lg">Aggiungi</a> 
        @else
        <a href="#"></a>   
        @endif
    <div class="overflow-x-auto overflow-y-auto mt-10 shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right">
            <thead class="text-xs bg-zinc-500">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tecnologie as $tech)
                <tr class="border-b">
                    <th scope="row" class="px-6 py-4">
                        <p>#{{ $tech->id }}</p>
                    </th>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <p class="text-lg">{{ $tech->name }}</p>
                    </td>
                    <td>

                    </td>
                    @if (Auth::check())    
                    <td class="px-6 py-4">
                        <a href="{{ route('tecnologie.show', ['tecnologie' => $tech->id]) }}"
                            class="btn me-md-2 stroke-gray-50 hover:stroke-orange-500">
                            <svg class="stroke-gray-50 hover:stroke-orange-500" fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><g class="stroke-gray-50 hover:stroke-orange-500" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m1 12s4-8 11-8 11 8 11 8"/><path d="m1 12s4 8 11 8 11-8 11-8"/><circle cx="12" cy="12" r="3"/></g></svg>
                        </a>
                        <a href="{{ route('tecnologie.edit', ['tecnologie' => $tech->id]) }}"
                            class="btn me-md-2">
                            <svg class="stroke-gray-50 hover:stroke-orange-500"
                            width="24"
                            height="24"
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
                    </td>
                    @else
                    <td></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</x-main>