<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stefano Scarpa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  {{-- favicon --}}
  <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('asset/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('asset/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('asset/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{ URL::asset('asset/favicon/site.webmanifest')}}">


  <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
    <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-zinc-900 h-full text-gray-50">
  
  <x-navbar />
  
  {{$slot}}
  
  <x-footer />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  
  {{-- iubenda privacy policy e coockie banner --}}
  <script type="text/javascript">
    var _iub = _iub || [];
    _iub.csConfiguration = {"siteId":3748144,"cookiePolicyId":23255128,"lang":"it"};
  </script>
  <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/3748144.js"></script>
  <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
  
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-813VELTJS4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'G-813VELTJS4');
  </script>


</body>
</html>