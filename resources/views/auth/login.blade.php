<x-main>
    
    
    <div class="flex min-h-full flex-col justify-center px-6 py-[160px] lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <p class="h1 text-gray-50 font-bold text-center">Stefano<span class="text-orange-500">Scarpa</span></p>
            <h2 class="mt-1 text-center text-2xl font-bold leading-9 tracking-tight text-gray-50">Sign in to your account</h2>
        </div>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('login')}}" method="POST">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-50">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="outline-none border-0 border-gray-300 text-sm rounded-lg block w-full p-3 mb-6 bg-zinc-700 dark:border-gray-600 placeholder-gray-400 text-white">
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
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="outline-none border-0 border-gray-300 text-sm rounded-lg block w-full p-3 mb-6 bg-zinc-700 dark:border-gray-600 placeholder-gray-400 text-white">
                    </div>
                </div>
                @error('password')
                <span>{{ $message}}</span>
                @enderror
                
                
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-orange-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
            </form>
            
            <p class="mt-10 text-center text-sm text-gray-500">
                Non hai un account?
                <a href="{{route('register')}}" class="font-semibold leading-6 text-orange-500 hover:text-orange-700">Registrati</a>
            </p>
        </div>
    </div>
    
    
</x-main>