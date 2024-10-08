<x-main>
    
    
    <div class="flex min-h-full flex-col justify-center px-6 py-[100px] lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <p class="h1 text-gray-50 font-bold text-center">Stefano<span class="text-orange-500">Scarpa</span></p>
            <h2 class="mt-1 text-center text-2xl font-bold leading-9 tracking-tight text-gray-50">Sign in to your account</h2>
        </div>
        
        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('register')}}" method="POST">
                @csrf
                
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-50">Nome</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="name" autocomplete="email" required class="outline-none border-0 border-gray-300 text-sm rounded-lg block w-full p-3 mb-6 bg-zinc-700 dark:border-gray-600 placeholder-gray-400 text-white" placeholder="nome">
                    </div>
                </div>
                @error('name')
                <span>{{ $message}}</span>
                @enderror
                
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-50">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="outline-none border-0 border-gray-300 text-sm rounded-lg block w-full p-3 mb-6 bg-zinc-700 dark:border-gray-600 placeholder-gray-400 text-white" placeholder="email">
                    </div>
                </div>
                @error('email')
                <span>{{ $message}}</span>
                @enderror
                
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-50">Password</label>
                        {{-- <div class="text-sm">
                            <a href="#" class="font-semibold text-orange-500 hover:text-orange-700">Forgot password?</a>
                        </div> --}}
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="outline-none border-0 border-gray-300 text-sm rounded-lg block w-full p-3 mb-6 bg-zinc-700 dark:border-gray-600 placeholder-gray-400 text-white" placeholder="password">
                    </div>
                </div>
                @error('password')
                <span>{{ $message}}</span>
                @enderror
                
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-50">Conferma Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required class="outline-none border-0 border-gray-300 text-sm rounded-lg block w-full p-3 mb-6 bg-zinc-700 dark:border-gray-600 placeholder-gray-400 text-white" placeholder="conferma password">
                    </div>
                </div>
                @error('password_confirmation')
                <span>{{ $message}}</span>
                @enderror
                
                <div>
                    <button type="submit" class="my-12 flex w-full mx-auto justify-center rounded-lg bg-orange-500 p-2.5 text-md font-semibold leading-6 text-white shadow-sm hover:bg-orange-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
            </form>
            
            <p class="mt-10 text-center text-sm text-gray-500">
                Hai già un account?
                <a href="{{route('login')}}" class="font-semibold leading-6 text-orange-500 hover:text-orange-700">Accedi</a>
            </p>
        </div>
    </div>
    
    
</x-main>