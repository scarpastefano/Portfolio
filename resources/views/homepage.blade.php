<x-main>
  
  <div class="container-lg">
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
        <img class="h-56 rounded-xl shadow-lg" src="{{URL::asset('asset/IMG_5344.jpeg')}}" alt="">
      </div>
    </div>
    <div class="grid justify-items-center -mt-12 sm:mt-[-80px] mb-12">
      {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-bounce size-16 text-gray-50">
        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
      </svg> --}}
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-bounce size-16 text-gray-50 -m-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
      </svg>
    </div>
  </div>
  
  
  <div class="container-none mt-[80px]">
    <div class="container-full bg-gray-800 h-96 flex justify-content-center align-items-center flex-col">
      <h5 class="text-gray-50 font-semibold h4">Per visualizzare la mia dashboard con tutti i progetti e le tecnologie clicca qui</h5>
      <div class="flex relative justify-center">
        {{-- <a href="" class="text-orange-500 font-bold h4 mt-5 w-44 h-12 bg-orange-500 hover:bg-orange-800 px-5 py-2.5 rounded-3 animate-ping absolute inline-flex opacity-80 duration-1000"></a> --}}
        <a href="{{route('dashboard')}}" class="text-gray-50 font-bold h4 mt-5 bg-orange-500 hover:bg-orange-800 px-5 py-2.5 rounded-3 relative inline-flex animate-pulse">Dashboard</a>
      </div>
      
    </div>
  </div>
  
  
  <div class="container h-screen grid grid-cols-1 sm:grid-cols-2">
    <div class="justify-center content-center">
      <h2 class="h1 text-gray-50 text-center font-bold">Tecnologie che uso</h2>
      <p class="font-thin text-gray-50 text-center">Le tecnologie che attualmente sto utilizzando per i miei progetti</p>
      {{-- <h4 class="h3 text-gray-50 text-center font-thin">Skills</h4> --}}
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-3 justify-items-center content-center mx-12 my-12 gap-5">
      {{-- <img class="w-28" src="{{URL::asset('asset/icons8-html-logo-240.png')}}" alt=""> --}}
      <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-28 fill-orange-500">
        <path d="m5.902 27.201-2.247-25.201h24.69l-2.25 25.197-10.11 2.803z" fill="#e44f26"/><path d="m16 27.858 8.17-2.265 1.922-21.532h-10.092z" fill="#f1662a"/><path d="m16 13.407h-4.09l-.282-3.165h4.372v-3.091h-.011-7.739l.074.83.759 8.517h6.917z" fill="#ebebeb"/><path d="m16 21.434-.014.004-3.442-.929-.22-2.465h-1.673-1.43l.433 4.852 6.332 1.758.014-.004z" fill="#ebebeb"/><g fill="#fff"><path d="m15.989 13.407v3.091h3.806l-.358 4.009-3.448.93v3.216l6.337-1.757.046-.522.726-8.137.076-.83h-.833z"/><path d="m15.989 7.151v1.92 1.164.007h7.456.01l.062-.694.141-1.567.074-.83z"/></g>
      </svg>
      {{-- <img class="w-28" src="{{URL::asset('asset/icons8-css-logo-240.png')}}" alt=""> --}}
      <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-28 fill-orange-500">
        <path d="m5.902 27.201-2.246-25.201h24.688l-2.249 25.197-10.11 2.803z" fill="fill-orange-500"/><path d="m16 27.858 8.17-2.265 1.922-21.532h-10.092z" fill="fill-orange-700"/><path d="m16 13.191h4.09l.282-3.165h-4.372v-3.091h.011 7.739l-.074.829-.759 8.518h-6.917z" fill="#fff"/><path d="m16.019 21.218-.014.004-3.442-.93-.22-2.465h-1.673-1.43l.433 4.853 6.331 1.758.015-.004z" fill="#ebebeb"/><path d="m19.827 16.151-.372 4.139-3.447.93v3.216l6.336-1.756.047-.522.537-6.007z" fill="#fff"/><g fill="#ebebeb"><path d="m16.011 6.935v1.92 1.163.008h-7.456-.01l-.062-.695-.141-1.567-.074-.829z"/><path d="m16 13.191v1.92 1.163.008h-3.389-.01l-.062-.695-.14-1.567-.074-.829z"/></g>
      </svg>
      {{-- <img class="w-28" src="{{URL::asset('asset/icons8-javascript-240.png')}}" alt=""> --}}
      <svg preserveAspectRatio="xMidYMid" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" class="w-28 text-orange-500">
        <path d="m0 0h256v256h-256z" fill="#f97316"/><path d="m67.311746 213.932292 19.590908-11.856051c3.7794539 6.701105 7.2175746 12.370896 15.464432 12.370896 7.905117 0 12.88899-3.092318 12.88899-15.120254v-81.798096h24.057499v82.13821c0 24.917333-14.605816 36.258946-35.915175 36.258946-19.2451048 0-30.4164571-9.96734-36.0870603-21.995683"/><path d="m152.380952 211.354413 19.58847-11.341613c5.156572 8.421181 11.858489 14.607035 23.714946 14.607035 9.968153 0 16.324673-4.983873 16.324673-11.857676 0-8.248483-6.529625-11.170134-17.527873-15.980089l-6.012749-2.579505c-17.357206-7.387835-28.871111-16.667225-28.871111-36.257727 0-18.04353 13.7472-31.791543 35.228444-31.791543 15.294172 0 26.292013 5.327645 34.195911 19.247137l-18.731073 12.028343c-4.124444-7.388648-8.591034-10.309486-15.464431-10.309486-7.045689 0-11.513905 4.467809-11.513905 10.309486 0 7.217574 4.468216 10.139631 14.777702 14.607847l6.013968 2.577473c20.449524 8.764546 31.963428 17.699353 31.963428 37.804292 0 21.653537-17.012215 33.509588-39.86692 33.509588-22.339454 0-36.774603-10.653664-43.819073-24.573562"/>
      </svg>
      {{-- <img class="w-28" src="{{URL::asset('asset/icons8-php-logo-480.png')}}" alt=""> --}}
      <svg fill="none" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-28">
        <circle cx="16" cy="16" fill="#f97316" r="14"/><g fill="#fff"><path d="m14.4392 10h1.68l-.4748 2.5242h1.5096c.8279.0177 1.4446.2027 1.8505.5551.4139.3523.5357 1.0221.3653 2.0088l-.8157 4.4008h-1.7044l.7791-4.2026c.0811-.4406.0568-.7533-.073-.9383s-.4098-.2775-.84-.2775l-1.3514-.0132-.9983 5.4316h-1.68z"/><path clip-rule="evenodd" d="m6.74092 12.5243h3.26268c.9576.0087 1.6516.3084 2.0818.8986.4302.5903.5722 1.3964.4261 2.4185-.0567.4671-.1826.9251-.3774 1.3745-.1867.4493-.4463.8545-.7791 1.2158-.4059.4581-.8401.7488-1.3027.8723-.46261.1234-.94154.185-1.43655.185h-1.46091l-.46262 2.511h-1.69222zm.69393 5.4713.72802-3.9515h.24592c.08936 0 .18261-.0045.28001-.0132.64937-.0088 1.18894.0573 1.6192.1982.4382.1409.5843.674.4382 1.5991-.1784 1.1014-.5276 1.7445-1.04694 1.9295-.51936.1763-1.16873.2599-1.94788.2511h-.17044c-.0487 0-.09739-.0045-.14609-.0132z" fill-rule="evenodd"/><path clip-rule="evenodd" d="m24.4365 12.5243h-3.2627l-1.7409 9.4757h1.6922l.4627-2.511h1.4609c.495 0 .9739-.0616 1.4365-.185.4627-.1235.8968-.4142 1.3027-.8723.3328-.3613.5924-.7665.7791-1.2158.1948-.4494.3207-.9074.3774-1.3745.1461-1.0221.0042-1.8282-.4261-2.4185-.4302-.5902-1.1241-.8899-2.0818-.8986zm-1.8407 1.5198-.728 3.9515c.0487.0087.0974.0132.1461.0132h.1704c.7792.0088 1.4285-.0748 1.9479-.2511.5193-.185.8685-.8281 1.047-1.9295.1461-.9251 0-1.4582-.4383-1.5991-.4302-.1409-.9698-.207-1.6192-.1982-.0974.0087-.1906.0132-.28.0132z" fill-rule="evenodd"/></g>
      </svg>
      {{-- <img class="w-28" src="{{URL::asset('asset/icons8-laravel-96.png')}}" alt=""> --}}
      <svg preserveAspectRatio="xMidYMid" viewBox="0 0 256 264" xmlns="http://www.w3.org/2000/svg" class="w-28">
        <path d="m255.855641 59.619717c.094924.3513426.144359.7135979.144359 1.0775366v56.5680914c0 1.477861-.790591 2.842804-2.072582 3.57804l-47.478632 27.335401v54.181012c0 1.474524-.783663 2.835623-2.062271 3.57804l-99.107585 57.052725c-.22685.128892-.474322.211383-.721795.29903-.092802.030934-.180448.087646-.278406.113424-.6928.182443-1.421028.182443-2.113828 0-.113425-.030934-.216538-.092802-.324808-.134047-.226849-.082491-.464011-.15467-.680549-.278407l-99.08696173-57.052725c-1.28121047-.736019-2.07258227-2.100466-2.07258227-3.57804v-169.7042732c0-.3712087.05155677-.7321061.14435896-1.0826922.03093407-.1185806.10311355-.2268498.14435897-.3454304.07733516-.2165384.14951464-.4382325.26293954-.639304.07733516-.1340476.19076006-.2423168.28356225-.3660531.11858058-.1649816.2268498-.335119.36605309-.4794779.11858058-.1185806.27325089-.2062271.4072985-.3093407.14951464-.1237362.28356225-.2577838.4536996-.3557417h.00515568l49.54605871-28.52636244c1.276705-.73465813 2.8478368-.73465813 4.1245418 0l49.5460589 28.52636244h.010311c.164982.1031135.304185.2320055.4537.350586.134047.1031136.283562.1959158.402143.3093407.144359.1495146.247472.319652.371208.4846336.087647.1237363.206228.2320055.278407.3660531.118581.2062271.185604.4227656.268095.639304.041246.1185806.113425.2268498.144359.3505861.094925.3513425.143456.7135978.144359 1.0775365v105.9955692l41.286664-23.772828v-54.1861681c0-.3608974.051557-.7269505.144359-1.0723809.03609-.1237362.103113-.2320054.144359-.350586.082491-.2165385.15467-.4382326.268095-.639304.077335-.1340476.19076-.2423168.278407-.3660531.123736-.1649817.226849-.335119.371208-.479478.118581-.1185806.268096-.2062271.402143-.3093406.15467-.1237363.288718-.2577839.4537-.3557417h.005155l49.551215-28.5263625c1.276422-.7357166 2.84812-.7357166 4.124542 0l49.546058 28.5263625c.175293.1031135.309341.2320054.464011.350586.128892.1031136.278407.1959157.396988.3093406.144358.1495147.247472.319652.371208.4846337.092802.1237363.206227.2320055.278407.3660531.11858.2010714.185604.4227655.268095.639304.046401.1185806.113425.2268498.144359.350586zm-8.115036 55.258549v-47.0403994l-17.338543 9.9813913-23.953276 13.7914367v47.0403994l41.296975-23.772828zm-49.546059 85.094454v-47.071334l-23.561445 13.456318-67.281589 38.399484v47.514722zm-189.93515099-160.1765821v160.1765821l90.83272249 52.294035v-47.504411l-47.4528538-26.855923-.015467-.010311-.0206227-.010312c-.159826-.092802-.2938736-.226849-.4433883-.340274-.1288919-.103114-.2784066-.185605-.3918315-.29903l-.0103113-.015467c-.1340476-.128892-.2268498-.288718-.3402747-.433077-.1031136-.139203-.2268498-.257783-.3093406-.402142l-.0051557-.015467c-.0928022-.154671-.1495147-.340275-.2165385-.515568-.0670238-.15467-.1546703-.299029-.1959157-.464011v-.005156c-.0515568-.195916-.0618681-.402143-.0824908-.603214-.0206228-.15467-.0618682-.309341-.0618682-.464011v-.010311-110.7491042l-23.948121-13.7965924-17.33854269-9.9710799zm45.42151689-30.90312969-41.281508 23.76251659 41.2711967 23.7625166 41.2763523-23.7676722-41.2763523-23.75736099zm21.4682402 148.29790179 23.948121-13.786281v-103.6084911l-17.3385427 9.9813912-23.9532767 13.7914367v103.6084912zm127.1750919-120.256173-41.276353 23.7625166 41.276353 23.7625166 41.271196-23.7676723zm-4.129698 54.6759576-23.953276-13.7914367-17.338543-9.9813913v47.0403994l23.948121 13.786281 17.343698 9.986547zm-94.977887 106.0058804 60.543119-34.56366 30.263825-17.271519-41.245418-23.74705-47.488943 27.340557-43.2819113 24.917388z" fill="#f97316"/>
      </svg>
      {{-- <img class="w-28" src="{{URL::asset('asset/icons8-mysql-logo-240.png')}}" alt=""> --}}
      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-28 fill-orange-500">
        <path d="M16.405 5.676c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.87h-.927a50.854 50.854 0 0 0-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 0 0-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008L4.25 13.34h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.79h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483h.88zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.763c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156s-.803.45-1.384.45c-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 0 0 .3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 0 0-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 0 0-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 0 0-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 0 0-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 0 1-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 0 1-.35-.4 8.76 8.76 0 0 1-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 0 1-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 0 1 2.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z"/>
      </svg>
    </div>
    
    <div class="justify-center content-center">
      <h2 class="h1 text-gray-50 text-center font-bold">Tecnologie che studio</h2>
      <p class="font-thin text-gray-50 text-center">Le tecnologie che attualmente sto studiando</p>
      {{-- <h4 class="h3 text-gray-50 text-center font-thin">I'm studing</h4> --}}
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 justify-items-center content-center mx-12 my-12">
      {{-- <img class="w-28" src="{{URL::asset('asset/icons8-tailwind-css-240.png')}}" alt=""> --}}
      <svg preserveAspectRatio="xMidYMid" viewBox="0 0 256 154" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-28">
        <path d="m128 0c-34.1333333 0-55.4666667 17.0666667-64 51.2 12.8-17.0666667 27.7333333-23.4666667 44.8-19.2 9.737481 2.4343704 16.697363 9.4985481 24.401067 17.3184 12.549689 12.7383704 27.07437 27.4816 58.798933 27.4816 34.133333 0 55.466667-17.0666667 64-51.2-12.8 17.0666667-27.733333 23.4666667-44.8 19.2-9.737481-2.4343704-16.697363-9.4985481-24.401067-17.3184-12.549689-12.7383704-27.07437-27.4816-58.798933-27.4816zm-64 76.8c-34.1333333 0-55.46666667 17.0666667-64 51.2 12.8-17.066667 27.7333333-23.466667 44.8-19.2 9.7374815 2.43437 16.697363 9.498548 24.4010667 17.3184 12.5496889 12.73837 27.0743703 27.4816 58.7989333 27.4816 34.133333 0 55.466667-17.066667 64-51.2-12.8 17.066667-27.733333 23.466667-44.8 19.2-9.737481-2.43437-16.697363-9.498548-24.401067-17.3184-12.549689-12.7383704-27.07437-27.4816-58.798933-27.4816z" fill="#f97316"/>
      </svg>
      {{-- <img class="w-28" src="{{URL::asset('asset/icons8-react-native-240.png')}}" alt=""> --}}
      <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" class="w-28">
        <path d="m-1088-64h1280v800h-1280z" fill="none"/><g fill="#f97316"><circle cx="32.001" cy="31.955" r="4.478"/><path d="m32.33 22.516c7.635.052 15.965.609 21.683 5.708.168.15.33.306.488.467 1.349 1.375 2.054 3.595.965 5.422-2.234 3.751-7.23 5.387-12.067 6.394-7.234 1.506-14.798 1.518-22.029.192-4.161-.764-8.416-2.103-11.373-4.904-1.151-1.09-2.135-2.524-1.981-4.12.25-2.582 2.727-4.239 4.812-5.361 5.791-3.116 12.847-3.813 19.502-3.798zm-.554 1.173c-7.224.049-15.043.51-20.621 5.129-.195.161-.383.33-.564.507-.117.114-.23.233-.339.355-.979 1.1-1.316 2.867-.392 4.188.93 1.329 2.342 2.288 3.796 3.07 5.438 2.924 11.864 3.443 18.129 3.465 6.343.023 12.884-.555 18.487-3.452 2.232-1.155 4.744-2.851 4.655-5.035-.082-2.004-2.036-3.242-3.499-4.126-.396-.239-.803-.46-1.216-.668-5.562-2.787-12.08-3.447-18.436-3.433z"/><path d="m42.115 10.703c2.793.071 4.24 3.429 4.431 5.909.038.493.052.988.046 1.483-.006.536-.035 1.072-.082 1.606-.589 6.612-3.608 12.909-7.163 18.724-3.477 5.688-7.717 11.36-13.485 13.996-1.907.872-4.175 1.41-5.863.437-2.314-1.333-2.567-4.451-2.524-6.816.011-.581.049-1.162.109-1.741.889-8.56 5.228-16.669 10.658-23.655 3.168-4.076 6.937-8.119 11.632-9.583.739-.231 1.326-.371 2.241-.36zm-.134 1.172c-3.279.052-6.223 2.482-8.83 5.007-6.854 6.637-11.905 15.464-13.937 24.721-.157.717-.289 1.439-.386 2.166-.075.563-.13 1.129-.159 1.697-.023.452-.031.905-.017 1.358.01.354.033.708.072 1.06.029.269.068.537.117.803.037.197.08.393.13.588.041.158.087.315.139.471.409 1.233 1.463 2.411 2.878 2.45 3.301.09 6.409-2.317 9.096-4.933 4.717-4.591 8.232-10.36 10.978-16.424 2.216-4.896 4.243-10.218 3.111-15.607-.043-.204-.093-.406-.15-.606-.047-.163-.1-.324-.158-.483-.44-1.199-1.475-2.271-2.884-2.268z"/><path d="m22.109 10.747c3.564.069 6.765 2.488 9.607 5.197 5.186 4.943 9.011 11.231 11.913 17.849 2.248 5.127 4.316 10.882 2.478 16.292-.579 1.705-2.044 3.265-3.997 3.305-3.581.072-6.9-2.532-9.78-5.335-7.225-7.034-12.589-16.32-14.427-26.168-.132-.704-.237-1.414-.309-2.127-.059-.582-.096-1.167-.106-1.752-.008-.472.002-.944.035-1.414.022-.314.054-.626.097-.937.041-.292.093-.583.158-.871.043-.191.091-.38.146-.568.539-1.843 1.941-3.485 4.185-3.471zm-.135 1.173c-2.087.046-3.042 2.507-3.234 4.234-.039.354-.063.711-.074 1.068-.014.456-.008.913.015 1.369.328 6.599 3.278 12.979 6.838 18.821 3.352 5.5 7.4 10.978 12.968 13.794 1.608.813 3.562 1.452 4.951.684 1.742-.964 1.956-3.261 2.049-4.973.025-.466.028-.934.013-1.401-.018-.586-.064-1.171-.133-1.753-.642-5.437-3.05-10.582-5.816-15.444-3.442-6.048-7.659-12.076-13.627-15.225-1.236-.652-2.574-1.185-3.95-1.174z"/></g>
      </svg>
    </div>
  </div>


  <div class="container-sm flex flex-row flex-wrap w-full gap-5 justify-between my-12">
    @forelse ($posts as $post)
    
    <div class="max-w-sm bg-gray-800 rounded-lg shadow w-[22rem]">
      <a href="#">
        <img class="rounded-t-lg w-full h-72 object-cover" src="{{ Storage::url($post->image) }}" alt="nessuna immagine" />
      </a>
      <div class="p-5">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->description }}</p>
        <a href="{{ route('post.show', ['post' => $post->id]) }}" class="inline-flex items-center underline py-2 text-sm font-medium text-center text-orange-500">
          Visualizza
          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg>
        </a>
      </div>
    </div>
    
    @empty
    
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
      </a>
      <div class="p-5">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Read more
          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg>
        </a>
      </div>
    </div>
    
    @endforelse

  </div>

  
  <div class="container-none bg-gray-700 py-12">
    <div class="w-full grid grid-cols-1 sm:grid-cols-2 container justify-items-center content-center h-[300px]">
      <div class="flex flex-column justify-center align-items-center">
        <p class="text-gray-100 font-semibold h5">Per contattarmi clicca il pulsante</p>
        <p class="text-gray-100 font-thin my-3">o</p>
        <div class="flex flex-wrap gap-4">
          <a href=#""><img class="invert w-14" src="{{URL::asset('asset/icons8-github-240.png')}}" alt=""></a>
          <a href=""><img class="invert w-14" src="{{URL::asset('asset/icons8-linkedin-logo-250.png')}}" alt=""></a>
        </div>
      </div>
      <a class="content-center" href="{{route('contacts')}}">
        <button type="button" class="border-0 text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3 text-xl px-4 py-2 text-center">Contattami</button>
      </a>
    </div>
  </div>
  
</x-main>