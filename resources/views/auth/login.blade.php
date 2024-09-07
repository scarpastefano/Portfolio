<x-main>
    
    
    <div class="flex min-h-full flex-col justify-center px-6 py-[120px] lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <p class="h1 text-gray-50 font-bold text-center">Stefano<span class="text-orange-500">Scarpa</span></p>
            <h2 class="mt-1 text-center text-2xl font-bold leading-9 tracking-tight text-gray-50">Log in to your account</h2>
        </div>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('login')}}" method="POST">
                @csrf
                
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
                    <div class="my-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="outline-none border-0 border-gray-300 text-sm rounded-lg block w-full p-3 mb-6 bg-zinc-700 dark:border-gray-600 placeholder-gray-400 text-white" placeholder="password">
                    </div>
                </div>
                @error('password')
                <span>{{ $message}}</span>
                @enderror
                
                
                <div>
                    <button type="submit" class="my-12 flex w-full mx-auto justify-center rounded-lg bg-orange-500 p-2.5 text-md font-light leading-6 text-white shadow-sm hover:bg-orange-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log in</button>
                </div>
            </form>
            
            <p class="mt-10 text-center text-sm text-gray-500">
                Non hai un account?
                <a href="{{route('register')}}" class="font-semibold leading-6 text-orange-500 hover:text-orange-700">Registrati</a>
            </p>
            <a href="{{ url('auth/google') }}" class="my-12 flex w-full mx-auto justify-center rounded-lg bg-zinc-50 p-2.5 text-md font-light leading-6 text-zinc-800 shadow-sm hover:bg-zinc-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="me-3"  viewBox="0 0 48 48" width="24px" height="24px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                Accedi con Google
            </a> 
        </div>
    </div>
    
    
</x-main>