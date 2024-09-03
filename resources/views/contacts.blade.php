<x-main>


    <div class="container-sm my-36">
        <p class="h4 text-gray-50 font-bold">Contattami</p>
        <p class="h6 text-gray-50 font-thin mb-20">Utilizzando il form qui sotto potrai contattarmi per collaborazioni o informazioni</p>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid gap-6 mb-3 md:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-white">Nome e cognome</label>
                <input type="text" id="first_name" class="outline-none border-0 border-gray-300 text-sm rounded-lg block w-full p-3 mb-6 bg-zinc-700 dark:border-gray-600 placeholder-gray-400 text-white" placeholder="Nome e cognome" required />
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-white">Email</label>
                <input type="email" id="last_name" class="outline-none border-0 border-gray-300 text-sm rounded-lg block w-full p-3 mb-6 bg-zinc-700 dark:border-gray-600 placeholder-gray-400 text-white" placeholder="email" required />
            </div>
        </div>
        
        <label for="description" class="block mb-2 text-sm font-medium text-white">Descrizione</label>
        <textarea id="description" name="description" rows="4" class="outline-none block p-3 w-full text-sm border-0 border-gray-300 rounded-lg mb-6 bg-zinc-700 dark:border-gray-600 placeholder-gray-400 text-white" placeholder="Inserisci una descrizione"></textarea>
        
        
        <button type="submit" class="my-4 text-gray-50 font-black bg-orange-500 focus:outline-none hover:bg-orange-700 focus:ring-4 focus:ring-gray-100 rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Invia</button>
        
    </form>
</div>

</x-main>