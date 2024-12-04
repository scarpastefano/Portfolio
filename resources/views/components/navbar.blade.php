<nav class="bg-zinc-950 border-dark-800 dark:bg-dark-900 container-none p-3 m-0 w-full fixed top-0 z-50 backdrop-blur">
  <div class="container-xl flex flex-wrap items-center justify-between mx-auto">
    <a href="{{route('homepage')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-50"><span class="text-orange-500">Stefano</span>Scarpa</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      
      {{-- <a href="asset/cv-stefano-scarpa.pdf" target="_blank" >view cv</a>
      <a href="asset/cv-stefano-scarpa.pdf" download>download cv</a> --}}
      

      <a href="asset/cv-stefano-scarpa.pdf" download>
        <button type="button" class="bg-zinc-600 hidden lg:block text-zinc-50 hover:bg-zinc-400 hover:text-white hover:border-transparent focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-full text-sm px-4 py-2 text-center">Download CV</button>
      </a>
      
      <button data-collapse-toggle="navbar-cta" type="button" class="outline-none inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
    
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col text-end pt-12 gap-10 md:gap-1 font-medium md:p-0 border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row mt-0 md:mt-0 md:border-0 ">
      <li>
        <a href="{{route('homepage')}}" class="block link-menu text-base font-thin py-2 px-3 md:p-0 text-gray-100 rounded md:hover:bg-transparent md:hover:text-orange-500 md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
      </li>
      <li>
        <a href="{{route('aboutme')}}" class="block link-menu text-base font-thin py-2 px-3 md:p-0 text-gray-100 rounded md:hover:bg-transparent md:hover:text-orange-500 md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About me</a>
      </li>
      <li>
        <a href="{{route('project')}}" class="block link-menu text-base font-thin py-2 px-3 md:p-0 text-gray-100 rounded md:hover:bg-transparent md:hover:text-orange-500 md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Project</a>
      </li>
      <li>
        <a href="{{route('contacts')}}" class="block link-menu text-base font-thin py-2 px-3 md:p-0 text-gray-100 rounded md:hover:bg-transparent md:hover:text-orange-500 md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
      <li>
        <a href="{{route('dashboard')}}" class="block link-menu text-base font-thin py-2 px-3 md:p-0 text-gray-100 rounded md:hover:bg-transparent md:hover:text-orange-500 md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Dashboard</a>
      </li>
      <li>
        <a href="asset/cv-stefano-scarpa.pdf" download>
          <button type="button" class="bg-zinc-600 lg:hidden text-zinc-50 hover:bg-zinc-400 hover:text-white hover:border-transparent focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-full text-sm px-4 py-2 mb-5 text-center">Download CV</button>
        </a>
      </li>
    </ul>
  </div>
</div>
</nav>
