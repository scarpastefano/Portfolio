<x-main>
<div class="container my-36">
    <p class="h6">Lista tecnologie</p>
    @foreach ($tecnologies as $tecnologie)
        <p class="h3 text-orange-500 border-bottom">{{$tecnologie->tecnologie}}</p>
        <a href="{{ route('tecnologie.show', ['tecnologie' => $tecnologie->id]) }}"
            class="btn me-md-2 stroke-gray-50 hover:stroke-orange-500">
            <svg class="stroke-gray-50 hover:stroke-orange-500" fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><g class="stroke-gray-50 hover:stroke-orange-500" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m1 12s4-8 11-8 11 8 11 8"/><path d="m1 12s4 8 11 8 11-8 11-8"/><circle cx="12" cy="12" r="3"/></g></svg>
        </a>
        <a href="{{ route('tecnologie.edit', ['tecnologie' => $tecnologie->id]) }}"
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
    @endforeach
</div>

</x-main>