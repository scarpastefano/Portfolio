<x-main>
  
  <div class="container">
    <ul class="background">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
   </ul>
    <div class="grid grid-cols-1 sm:grid-cols-12 gap-3 min-h-screen justify-center content-center">
      <div class="text-gray-50 sm:col-span-8 p-14">
        <p class="font-bold text-5xl">Ciao, sono <span class="text-orange-500">Stefano</span></p>
        <p><span class="text-orange-500 font-extrabold text-6xl">Full-Stack Web Developer</span></p>
      </div>
      <div class="text-gray-50 sm:col-span-4 grid justify-items-center content-center">
        <img class="h-56 rounded-xl" src="{{URL::asset('asset/IMG_5344.jpeg')}}" alt="">
      </div>
    </div>
    <div class="grid justify-items-center -mt-12 sm:mt-[-80px] mb-12 animate-bounce">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16 text-gray-50">
        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
      </svg>
    </div>
  </div>
  
  <div class="container h-screen">
    <h2 class="h1 text-gray-50 text-center font-bold">Skills</h2>
    <h4 class="h3 text-gray-50 text-center font-thin">Skills</h4>
    <div class="grid grid-cols-1 sm:grid-cols-6 justify-items-center mx-12 my-12 gap-3">
      <img class="w-36" src="{{URL::asset('asset/icons8-html-logo-240.png')}}" alt="">
      <img class="w-36" src="{{URL::asset('asset/icons8-css-logo-240.png')}}" alt="">
      <img class="w-36" src="{{URL::asset('asset/icons8-javascript-240.png')}}" alt="">
      <img class="w-36" src="{{URL::asset('asset/icons8-php-logo-480.png')}}" alt="">
      <img class="w-36" src="{{URL::asset('asset/icons8-laravel-96.png')}}" alt="">
      <img class="w-36" src="{{URL::asset('asset/icons8-mysql-logo-240.png')}}" alt="">
    </div>
    <h2 class="h1 text-gray-50 text-center font-bold mt-[150px]">Skills</h2>
    <h4 class="h3 text-gray-50 text-center font-thin">I'm studing</h4>
    <div class="grid grid-cols-1 sm:grid-cols-2 justify-items-center mx-12 my-12">
      <img class="w-36" src="{{URL::asset('asset/icons8-tailwind-css-240.png')}}" alt="">
      <img class="w-36" src="{{URL::asset('asset/icons8-react-native-240.png')}}" alt="">
    </div>
  </div>
  
  <div class="container-none bg-gray-800">
    <div class="w-full grid grid-cols-1 sm:grid-cols-2 container justify-items-center content-center h-[300px]">
      <div class="flex flex-column justify-center align-items-center">
        <p class="text-gray-100 font-semibold h5">Per contattarmi clicca il pulsante</p>
        <p class="text-gray-100 font-thin my-3">o</p>
        <div class="flex flex-wrap gap-4">
          <span><img class="invert w-14" src="{{URL::asset('asset/icons8-github-240.png')}}" alt=""></span>
          <span><img class="invert w-14" src="{{URL::asset('asset/icons8-linkedin-logo-250.png')}}" alt=""></span>
        </div>
      </div>
      <a class="content-center" href="{{route('contacts')}}">
        <button type="button" class="border-0 text-white bg-orange-500 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-orange-500 dark:hover:bg-orange-500 dark:focus:ring-orange-500">Contattami</button>
      </a>
    </div>
  </div>
  
</x-main>