<nav class="bg-transparent border-dark-800 dark:bg-dark-900 container-none p-3 m-0 fixed top-0 w-full z-50 backdrop-blur-sm">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
    <a href="{{route('homepage')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-50"><span class="text-orange-500">Stefano</span>Scarpa</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

      <a href="{{route('contacts')}}">
        <button type="button" class="border-0 text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3 text-md px-4 py-2 text-center dark:bg-orange-500 dark:focus:ring-orange-500">Contattami</button>
      </a>

        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
        </button>

    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
      <ul class="flex flex-col font-medium md:p-0 border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row mt-0 md:mt-0 md:border-0 ">
        <li>
          <a href="{{route('homepage')}}" class="block link-menu text-base font-thin py-2 px-3 md:p-0 text-gray-100 rounded md:hover:bg-transparent md:hover:text-orange-500 md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
        </li>
        <li>
          <a href="{{route('aboutme')}}" class="block link-menu text-base font-thin py-2 px-3 md:p-0 text-gray-100 rounded md:hover:bg-transparent md:hover:text-orange-500 md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About me</a>
        </li>
        <li>
          <a href="#" class="block link-menu text-base font-thin py-2 px-3 md:p-0 text-gray-100 rounded md:hover:bg-transparent md:hover:text-orange-500 md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Skills</a>
        </li>
        <li>
          <a href="{{route('contacts')}}" class="block link-menu text-base font-thin py-2 px-3 md:p-0 text-gray-100 rounded md:hover:bg-transparent md:hover:text-orange-500 md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
        <li>
          <a href="{{route('dashboard')}}" class="block link-menu text-base font-thin py-2 px-3 md:p-0 text-gray-100 rounded md:hover:bg-transparent md:hover:text-orange-500 md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Dashboard</a>
        </li>
      </ul>
    </div>
    </div>
</nav>
  