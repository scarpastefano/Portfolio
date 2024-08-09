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
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-1 p-1.5 text-gray-50 shadow-sm ring-1 bg-gray-800 ring-inset ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-1 p-1.5 text-gray-50 bg-gray-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                Hai già un account?
                <a href="{{route('login')}}" class="font-semibold leading-6 text-orange-500 hover:text-orange-700">Accedi</a>
            </p>
        </div>
    </div>
    
    
</x-main>