<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <title>EZ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>



<body>
  
  <div class="video-bg">
 <video width="320" height="240" autoplay loop muted>
  <source src="{{asset('video/background video.mp4')}}" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>
<div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
     <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
   </div>
<div class="app">
 <div class="header">
  <img src="{{asset('images/10.png')}}" class="menuLogo" alt="">
  <div class="header-menu">
   <a class="menu-link layoutHome" href="{{route('welcome')}}" onclick="topMenu()">Home</a>
   <a class="menu-link layoutNearbyMe"  href="{{route('nearMe')}}" onclick="topMenu()">Nearby Me</a>
   <a class="menu-link layoutContactUs" href="{{route('contactUs')}}" onclick="topMenu()">Contact Us</a>
   <a class="menu-link layoutAboutUs" href="{{route('aboutUs')}}" onclick="topMenu()">About Us</a>
  </div>
  <form action="{{route('propertiesContent')}}" method="post">
      @csrf
  <div class="search-bar">
   <input type="search" placeholder="Search" aria-label="Search" name="keyword">
  </div>
  </form>
  <div class="header-profile">
  <a href="{{route('notification')}}">
   <div class="notification">
    <span class="notification-number">1</span>
    <svg viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
     <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0"></path>
    </svg>
 </div>
 </a>
 </div>
 </div>
 <div class="wrapper">
  <div class="left-side">
  <div class="top-left">
   <img class="profile-img" src="https://images.unsplash.com/photo-1600353068440-6361ef3a86e8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="profilePicture">
 
   @guest
                              @if (Route::has('login'))
                                          <a class="sign-in" href="{{ route('login') }}">{{ __('Login') }}</a>
                              @endif      
                              @else
      <div class>
     
   <p class="layoutUserName">{{ Auth::user()->name }}</p>
      
      </div>


   <div>                            
                                    
                                    <a href="{{ route('logout') }}" class="sign-in"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                @endguest
   </div>
   <div class="side-wrapper">
    <div class="side-title">Recent</div>
    <div class="side-menu">
     <a href="{{route('favourite')}}">
     <svg  viewBox="0 0 468.207 468.207" fill="currentColor" >
		<path d="M268.662,35.005c-17.826-17.826-45.935-18.72-65.069-3.129c-1.284,1.04-2.609,1.943-3.804,3.129    L7.141,227.661c-9.527,9.519-9.519,24.963,0.008,34.481c1.187,1.187,2.479,2.235,3.829,3.129c4.056,2.682,8.738,4.016,13.42,4.016    s8.145-1.479,12.201-4.162c1.349-0.894,1.853-1.796,3.04-2.983l13.892-15.899v111.361c0,49.089,47.39,89.74,98.738,89.74h171.667    c50.316,0,87.252-39.814,87.252-89.74V250.388l13.762,11.762c4.755,4.763,12.006,7.145,18.241,7.145    c6.235,0,12.981-2.382,17.745-7.145c9.527-9.519,9.779-24.963,0.252-34.481L268.662,35.005z M362.417,357.604    c0,23.036-15.046,40.968-38.481,40.968H152.269c-24.483,0-49.966-18.712-49.966-40.968V197.471L230.295,69.487l132.122,132.122    V357.604z"/>
		<path d="M139.686,254.282c0,1.821,0.098,3.633,0.276,5.43c0.309,3.203,0.935,6.308,1.756,9.332    c0.138,0.512,0.244,1.032,0.398,1.544c0.122,0.398,0.26,0.78,0.39,1.171c15.607,49.983,91.804,89.065,91.804,89.065    s76.197-39.09,91.804-89.065c0.13-0.39,0.268-0.772,0.39-1.171c0.146-0.512,0.26-1.024,0.398-1.544    c0.821-3.024,1.447-6.129,1.756-9.332c0.179-1.796,0.276-3.609,0.276-5.43c0-30.954-25.093-56.055-56.055-56.055    c-14.957,0-28.507,5.893-38.562,15.444c-10.055-9.543-23.605-15.444-38.562-15.444    C164.787,198.227,139.686,223.32,139.686,254.282z"/>

</svg>
      Favourite
     </a>
     <a href="{{route('rating')}}">
     <svg viewBox="0 0 330 330" fill="currentColor">
	<path d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M165,300   c-74.439,0-135-60.561-135-135S90.561,30,165,30s135,60.561,135,135S239.439,300,165,300z"/>
	<path d="M247.157,128.196l-47.476-6.9l-21.23-43.019c-2.527-5.12-7.741-8.362-13.451-8.362s-10.924,3.242-13.451,8.362   l-21.23,43.019l-47.476,6.9c-5.65,0.821-10.345,4.779-12.108,10.209c-1.765,5.43-0.293,11.391,3.796,15.376l34.353,33.486   l-8.109,47.282c-0.965,5.628,1.349,11.315,5.968,14.671c4.618,3.355,10.741,3.799,15.797,1.142L165,228.039l42.462,22.323   c2.195,1.154,4.592,1.723,6.979,1.723c0.017,0,0.033,0,0.05,0c8.271-0.015,14.972-6.725,14.972-15c0-1.152-0.13-2.274-0.375-3.352   l-7.97-46.466l34.352-33.486c4.089-3.985,5.561-9.946,3.796-15.376C257.502,132.975,252.808,129.017,247.157,128.196z"/>
</svg>
      Rating
      <span class="notification-number updates">0</span>
     </a>
     <a href="{{route('recommend')}}">
     <svg viewBox="0 0 296.096 296.096" fill="currentColor">
	<path d="M101.15,175.142c6.966,0,14.634,0.68,21.634,1.966v-20.969h51v37.424c6,2.203,10.381,4.579,14.494,7.567   c7.797,5.664,12.082,13.099,12.339,21.254c9.925-2.345,19.028-6.321,26.905-11.737c2.846-1.956,6.262-3.668,8.262-5.137v-58.243   L148.047,49.23l-89.263,98.628v35.247c6-1.521,11.468-3.156,17.806-4.884C84.086,176.178,92.405,175.142,101.15,175.142z"/>
	<polygon points="148.446,25.313 247.63,136.139 270.251,136.139 148.247,0 97.784,55.572 97.784,33.139 60.784,33.139    60.784,96.454 25.201,136.139 48.144,136.139  "/>
	<path d="M259.083,214.931c-5.494,0-12.89,2.44-22.289,8.901c-17.182,11.811-38.215,17.012-57.433,17.012   c-15.623,0-30.045-3.435-40.23-9.546c-5.046-3.028-5.031-4.039-2.104-4.039c5.878,0,23.504,4.079,35.449,4.079   c5.878,0,10.379-0.987,11.432-3.934c4.867-13.628-14.001-18.016-33.73-26c-14.444-5.848-32.073-10.262-48.861-10.263   c-6.999,0-13.914,0.767-20.332,2.517c-29.141,7.945-50.199,13.93-56.199,15.873v76.48c12-4.413,25.9-8.642,33.81-8.642   c14.516,0,73.253,18.726,106.51,18.726c4.658,0,8.829-0.367,12.298-1.204c28.227-6.814,77.232-46.725,90.533-60.351   C274.323,227.998,271.797,214.931,259.083,214.931z"/>
</svg>
      Recommended
     </a>
     <a href="{{route('chat')}}">
     <svg viewBox="0 0 60 60" fill="currentColor">
	<path d="M42,25.759c-9.925,0-18,7.286-18,16.241s8.075,16.241,18,16.241c2.482,0,4.884-0.448,7.145-1.332   c4.043,2.266,9.479,3.048,9.716,3.081c0.046,0.007,0.093,0.01,0.139,0.01c0.375,0,0.724-0.211,0.895-0.554   c0.192-0.385,0.116-0.85-0.188-1.153c-1.262-1.263-2.142-3.96-2.489-7.618C59.039,48.079,60,45.088,60,42   C60,33.045,51.925,25.759,42,25.759z M33,46c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4S35.206,46,33,46z M42,46   c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4S44.206,46,42,46z M51,46c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4   S53.206,46,51,46z"/>
	<path d="M22,42c0-10.059,8.972-18.241,20-18.241c7.689,0,14.367,3.983,17.714,9.801C59.9,32.215,60,30.859,60,29.5   C60,13.233,46.767,0,30.5,0S1,13.233,1,29.5c0,5.146,1.346,10.202,3.896,14.65L0.051,58.684c-0.116,0.349-0.032,0.732,0.219,1   C0.462,59.889,0.728,60,1,60c0.085,0,0.17-0.011,0.254-0.033l15.867-4.175c5.198,2.648,11.182,3.671,16.996,2.967   C26.999,55.964,22,49.506,22,42z"/>
</svg>
      Chat
     </a>
    </div>
   </div>
   <div class="side-wrapper">
    <div class="side-title">Categories</div>
    <div class="side-menu">
     <a href="{{route('apartment')}}">
     <svg viewBox="0 0 512 512" fill="currentColor">
		<rect x="281.6" y="290.133" width="25.6" height="17.067"/>
		<rect x="204.8" y="153.6" width="25.6" height="17.067"/>
		<rect x="281.6" y="221.867" width="25.6" height="17.067"/>
		<rect x="204.8" y="221.867" width="25.6" height="17.067"/>
		<rect x="281.6" y="358.4" width="25.6" height="17.067"/>
		<rect x="204.8" y="85.333" width="25.6" height="17.067"/>
		<rect x="204.8" y="358.4" width="25.6" height="17.067"/>
		<rect x="281.6" y="85.333" width="25.6" height="17.067"/>
		<rect x="204.8" y="290.133" width="25.6" height="17.067"/>
		<rect x="281.6" y="153.6" width="25.6" height="17.067"/>
		<rect x="426.667" y="238.933" width="25.6" height="17.067"/>
		<rect x="426.667" y="375.467" width="25.6" height="17.067"/>
		<rect x="426.667" y="307.2" width="25.6" height="17.067"/>
		<rect x="59.733" y="307.2" width="25.6" height="17.067"/>
		<rect x="59.733" y="238.933" width="25.6" height="17.067"/>
		<rect x="59.733" y="375.467" width="25.6" height="17.067"/>
		<rect x="59.733" y="170.667" width="25.6" height="17.067"/>
		<path d="M512,179.2v-34.133c0-5.12-3.413-8.533-8.533-8.533h-128c-5.12,0-8.533,3.413-8.533,8.533V179.2    c0,5.12,3.413,8.533,8.533,8.533v256H358.4V51.2c5.12,0,8.533-3.413,8.533-8.533V8.533c0-5.12-3.413-8.533-8.533-8.533H153.6    c-5.12,0-8.533,3.413-8.533,8.533v34.133c0,5.12,3.413,8.533,8.533,8.533v392.533h-17.067V119.467c5.12,0,8.533-3.413,8.533-8.533    V76.8c0-5.12-3.413-8.533-8.533-8.533h-128C3.413,68.267,0,71.68,0,76.8v34.133c0,5.12,3.413,8.533,8.533,8.533v324.267    c-5.12,0-8.533,3.413-8.533,8.533v51.2C0,508.587,3.413,512,8.533,512h494.933c5.12,0,8.533-3.413,8.533-8.533v-51.2    c0-5.12-3.413-8.533-8.533-8.533v-256C508.587,187.733,512,184.32,512,179.2z M102.4,401.067c0,5.12-3.413,8.533-8.533,8.533H51.2    c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533h42.667c5.12,0,8.533,3.413,8.533,8.533V401.067z     M102.4,332.8c0,5.12-3.413,8.533-8.533,8.533H51.2c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533    h42.667c5.12,0,8.533,3.413,8.533,8.533V332.8z M102.4,264.533c0,5.12-3.413,8.533-8.533,8.533H51.2    c-5.12,0-8.533-3.413-8.533-8.533V230.4c0-5.12,3.413-8.533,8.533-8.533h42.667c5.12,0,8.533,3.413,8.533,8.533V264.533z     M102.4,196.267c0,5.12-3.413,8.533-8.533,8.533H51.2c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533    h42.667c5.12,0,8.533,3.413,8.533,8.533V196.267z M128,102.4H17.067V85.333H128V102.4z M247.467,384    c0,5.12-3.413,8.533-8.533,8.533h-42.667c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533h42.667    c5.12,0,8.533,3.413,8.533,8.533V384z M247.467,315.733c0,5.12-3.413,8.533-8.533,8.533h-42.667c-5.12,0-8.533-3.413-8.533-8.533    V281.6c0-5.12,3.413-8.533,8.533-8.533h42.667c5.12,0,8.533,3.413,8.533,8.533V315.733z M247.467,247.467    c0,5.12-3.413,8.533-8.533,8.533h-42.667c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533h42.667    c5.12,0,8.533,3.413,8.533,8.533V247.467z M247.467,179.2c0,5.12-3.413,8.533-8.533,8.533h-42.667    c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533h42.667c5.12,0,8.533,3.413,8.533,8.533V179.2z     M247.467,110.933c0,5.12-3.413,8.533-8.533,8.533h-42.667c-5.12,0-8.533-3.413-8.533-8.533V76.8c0-5.12,3.413-8.533,8.533-8.533    h42.667c5.12,0,8.533,3.413,8.533,8.533V110.933z M324.267,384c0,5.12-3.413,8.533-8.533,8.533h-42.667    c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533h42.667c5.12,0,8.533,3.413,8.533,8.533V384z     M324.267,315.733c0,5.12-3.413,8.533-8.533,8.533h-42.667c-5.12,0-8.533-3.413-8.533-8.533V281.6c0-5.12,3.413-8.533,8.533-8.533    h42.667c5.12,0,8.533,3.413,8.533,8.533V315.733z M324.267,247.467c0,5.12-3.413,8.533-8.533,8.533h-42.667    c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533h42.667c5.12,0,8.533,3.413,8.533,8.533V247.467z     M324.267,179.2c0,5.12-3.413,8.533-8.533,8.533h-42.667c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533    h42.667c5.12,0,8.533,3.413,8.533,8.533V179.2z M324.267,110.933c0,5.12-3.413,8.533-8.533,8.533h-42.667    c-5.12,0-8.533-3.413-8.533-8.533V76.8c0-5.12,3.413-8.533,8.533-8.533h42.667c5.12,0,8.533,3.413,8.533,8.533V110.933z     M349.867,34.133H162.133V17.067h187.733V34.133z M469.333,401.067c0,5.12-3.413,8.533-8.533,8.533h-42.667    c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533H460.8c5.12,0,8.533,3.413,8.533,8.533V401.067z     M469.333,332.8c0,5.12-3.413,8.533-8.533,8.533h-42.667c-5.12,0-8.533-3.413-8.533-8.533v-34.133c0-5.12,3.413-8.533,8.533-8.533    H460.8c5.12,0,8.533,3.413,8.533,8.533V332.8z M469.333,264.533c0,5.12-3.413,8.533-8.533,8.533h-42.667    c-5.12,0-8.533-3.413-8.533-8.533V230.4c0-5.12,3.413-8.533,8.533-8.533H460.8c5.12,0,8.533,3.413,8.533,8.533V264.533z     M494.933,170.667H384V153.6h110.933V170.667z"/>
</svg>
      Apartment
     </a>
     <a href="{{route('doubleStorey')}}">
     <svg viewBox="0 0 70.429 70.429" fill="currentColor">
		<path d="M69.828,32.048l-11.422-11.42v-7.456c0-1.136-0.92-2.056-2.055-2.056c-1.139,0-2.059,0.92-2.059,2.056v3.345l-7.541-7.544    c-0.807-0.803-2.104-0.803-2.906,0l-9.049,9.048l-3.612-3.611c-0.802-0.803-2.105-0.803-2.907,0L0.603,42.085    c-0.803,0.804-0.803,2.104,0,2.906c0.802,0.804,2.104,0.804,2.907,0l26.223-26.224l26.223,26.224    c0.4,0.399,0.928,0.604,1.454,0.604c0.524,0,1.052-0.201,1.452-0.604c0.803-0.804,0.803-2.104,0-2.906L45.045,28.269v-9.112    c0-1.136-0.922-2.057-2.057-2.057s-2.057,0.921-2.057,2.057v5.002l-3.229-3.23l7.596-7.594L66.92,34.956    c0.4,0.399,0.929,0.602,1.453,0.602c0.525,0,1.053-0.201,1.455-0.602C70.629,34.153,70.629,32.852,69.828,32.048z"/>
		<path d="M52.981,44.447L31.186,22.648c-0.386-0.385-0.909-0.602-1.453-0.602c-0.545,0-1.068,0.217-1.454,0.602L6.482,44.447    c-0.291,0.289-0.487,0.659-0.565,1.062c-0.061,0.313-0.091,0.631-0.091,0.942V57.09c0,2.739,2.229,4.969,4.969,4.969h10.637    c1.377,0,2.706-0.582,3.645-1.597c0.854-0.924,1.324-2.12,1.324-3.373v-7.812c0-1.896,1.453-3.479,3.33-3.658    c1.877,0.179,3.331,1.763,3.331,3.658v7.812c0,1.253,0.47,2.449,1.324,3.373c0.938,1.014,2.267,1.596,3.646,1.596h10.64    c2.74,0,4.969-2.229,4.969-4.969V46.452c0-0.312-0.029-0.631-0.092-0.943C53.467,45.106,53.272,44.736,52.981,44.447z"/>
</svg>
      Double-storey
     </a>
     <a href="{{route('singleStorey')}}">
     <svg viewBox="0 0 16.16 16.16" fill="currentColor" >
		<polygon points="7.95,2.625 14.359,6.292 15.774,6.298 12.656,1.237 11.233,1.239 11.233,0 9.584,0     9.584,1.242 8.035,1.253 3.503,1.261 0.386,6.416 2.041,6.407   "/>
		<path d="M14.588,7.393l-6.58-3.656L1.73,7.447v6.968H0.756v1.745h14.73v-1.745h-0.898V7.393z M4.763,12.098    H2.844V8.86h1.918L4.763,12.098L4.763,12.098z M9.353,14.511L9.353,14.511H6.7V8.986h2.653V14.511z M13.458,12.098H11.54V8.86    h1.918V12.098z"/>
</svg>
      Single Storey
     </a>
     <a href="{{route('semiD')}}">
     <svg viewBox="0 0 512.002 512.002" fill="currentColor">
			<rect x="93.866" y="256" width="68.267" height="17.067"/>
			<path d="M136.532,298.667c0,4.71-3.823,8.533-8.533,8.533s-8.533-3.823-8.533-8.533v-8.533h-25.6v34.133h68.267v-34.133h-25.6     V298.667z"/>
			<path d="M255.997,307.2c-23.526,0-42.667,19.14-42.667,42.667V512h85.333V349.867C298.663,326.34,279.523,307.2,255.997,307.2z      M238.862,409.6h-8.533c-4.71,0-8.533-3.823-8.533-8.533s3.823-8.533,8.533-8.533h8.533c4.71,0,8.533,3.823,8.533,8.533     S243.572,409.6,238.862,409.6z"/>
			<rect x="349.866" y="256" width="68.19" height="17.067"/>
			<path d="M383.999,298.667c-4.71,0-8.533-3.823-8.533-8.533h-25.6v34.133h68.19v-34.133h-25.523     C392.532,294.844,388.71,298.667,383.999,298.667z"/>
			<path d="M353.51,421.777c9.284-27.068,35.277-46.31,64.623-46.31c20.13,0,38.536,9.19,51.2,23.612V221.867h6.741     c7.927,0,14.865-4.787,17.673-12.194c2.816-7.407,0.802-15.59-5.12-20.855L292.582,14.916     c-20.548-19.789-52.753-19.789-73.045-0.239l-66.005,58.556V51.2h8.533c4.71,0,8.533-3.823,8.533-8.533V8.533     c0-4.71-3.823-8.533-8.533-8.533h-102.4c-4.719,0-8.533,3.823-8.533,8.533v34.133c0,4.71,3.814,8.533,8.533,8.533h8.533v17.067     h34.202c4.71,0,8.533,3.823,8.533,8.533s-3.823,8.533-8.533,8.533H68.198v63.599l-44.706,39.663     c-5.965,5.291-7.996,13.534-5.171,20.992c2.833,7.458,9.822,12.279,17.801,12.279h6.477v177.289     c12.663-14.464,31.104-23.689,51.268-23.689c29.346,0,55.339,19.243,64.623,46.31c16.29,5.589,29.645,17.289,37.777,32.068     V349.867c0-32.939,26.795-59.733,59.733-59.733s59.733,26.795,59.733,59.733v103.979     C323.865,439.066,337.219,427.366,353.51,421.777z M435.199,341.333h-8.61h-85.257h-8.533c-4.71,0-8.533-3.823-8.533-8.533     c0-4.71,3.823-8.533,8.533-8.533V281.6v-34.133c0-4.71,3.823-8.533,8.533-8.533h85.257h0.077c4.719,0,8.533,3.823,8.533,8.533     V281.6c0,0.128-0.068,0.239-0.077,0.375v42.291h0.077c4.719,0,8.533,3.823,8.533,8.533     C443.732,337.51,439.918,341.333,435.199,341.333z M179.199,341.333h-8.533H85.332h-8.533c-4.71,0-8.533-3.823-8.533-8.533     c0-4.71,3.823-8.533,8.533-8.533V281.6v-34.133c0-4.71,3.823-8.533,8.533-8.533h85.333c4.71,0,8.533,3.823,8.533,8.533V281.6     v42.667c4.71,0,8.533,3.823,8.533,8.533C187.732,337.51,183.91,341.333,179.199,341.333z M51.131,204.8h-15.01     c-0.905,0-1.519-0.427-1.835-1.271c-0.324-0.845-0.145-1.57,0.529-2.167l58.872-52.233l56.969-50.534l0.009-0.008l80.452-71.381     c6.929-6.673,15.812-10.018,24.721-10.018c9.003,0,18.039,3.413,25.156,10.257l196.309,174.148     c0.23,0.205,0.939,0.836,0.495,2.022c-0.461,1.186-1.408,1.186-1.724,1.186h-15.275H51.131z"/>
			<path d="M468.72,435.812c-3.823-24.482-25.045-43.281-50.586-43.281c-25.54,0-46.771,18.799-50.586,43.281     c-24.491,3.814-43.281,25.054-43.281,50.586c0,7.049,1.451,13.935,4.309,20.489c1.357,3.106,4.429,5.111,7.825,5.111h163.465     c3.388,0,6.46-2.005,7.817-5.111c2.867-6.536,4.318-13.431,4.318-20.489C512.001,460.866,493.21,439.626,468.72,435.812z      M438.316,451.675c-1.024,0.401-2.074,0.597-3.115,0.597c-3.413,0-6.63-2.057-7.945-5.419c-0.043,0-1.937-3.123-9.122-3.123     c-6.332,0-10.061,4.873-10.095,4.924c-2.722,3.849-8.038,4.77-11.895,2.048c-3.849-2.714-4.762-8.038-2.048-11.887     c3.183-4.514,11.827-12.151,24.038-12.151c15.411,0,22.972,8.772,25.003,13.952C444.869,445.002,442.71,449.952,438.316,451.675z     "/>
			<path d="M144.453,435.816c-3.814-24.491-25.054-43.281-50.586-43.281c-25.54,0-46.771,18.79-50.586,43.281     c-24.491,3.814-43.281,25.045-43.281,50.586c0,7.04,1.451,13.935,4.309,20.48c1.357,3.106,4.429,5.12,7.825,5.12H175.6     c3.388,0,6.46-2.014,7.817-5.12c2.867-6.545,4.318-13.44,4.318-20.48C187.734,460.861,168.935,439.631,144.453,435.816z      M114.049,451.68c-1.024,0.401-2.082,0.589-3.115,0.589c-3.405,0-6.63-2.057-7.945-5.419c-0.043,0-1.937-3.115-9.122-3.115     c-6.34,0-10.061,4.873-10.095,4.924c-2.722,3.849-8.047,4.762-11.895,2.048c-3.849-2.722-4.762-8.047-2.048-11.895     c3.183-4.514,11.836-12.143,24.038-12.143c15.42,0,22.98,8.772,25.011,13.952C120.602,445.007,118.435,449.956,114.049,451.68z"/>
</svg>
      Semi-D
     </a>
     <a href="{{route('cluster')}}">
     <svg viewBox="0 0 60 60" fill="currentColor">
	<path d="M57.821,27.693c1.195-1.287,1.033-3.32-0.35-4.402L32.041,3.396L30,1.5l-2.041,1.896L2.529,23.291   c-1.383,1.082-1.545,3.115-0.35,4.402c1.055,1.136,2.801,1.281,4.028,0.335L30,9.688l23.792,18.34   C55.02,28.974,56.766,28.829,57.821,27.693z"/>
	<path d="M59,47.5c-0.553,0-1,0.448-1,1v1h-1v-1c0-0.552-0.447-1-1-1s-1,0.448-1,1v1h-2v-22v-0.083L30,9.688L7,27.417V27.5v22H5v-1   c0-0.552-0.447-1-1-1s-1,0.448-1,1v1H2v-1c0-0.552-0.447-1-1-1s-1,0.448-1,1v9c0,0.552,0.447,1,1,1s1-0.448,1-1v-1h1v1   c0,0.552,0.447,1,1,1s1-0.448,1-1v-1h2v2h26v-18h12v18h8v-2h2v1c0,0.552,0.447,1,1,1s1-0.448,1-1v-1h1v1c0,0.552,0.447,1,1,1   s1-0.448,1-1v-9C60,47.948,59.553,47.5,59,47.5z M3,54.5H2v-3h1V54.5z M7,54.5H5v-3h2V54.5z M20,50.5h-5v-4h5V50.5z M20,44.5h-5v-4   h5V44.5z M27,50.5h-5v-4h5V50.5z M27,44.5h-5v-4h5V44.5z M27,34.5H15v-4h12V34.5z M27,28.5H15v-2h12V28.5z M45,34.5H33v-2h12V34.5z    M45,30.5H33v-4h12V30.5z M55,54.5h-2v-3h2V54.5z M58,54.5h-1v-3h1V54.5z"/>
</svg>
      Cluster
     </a>
     <a href="{{route('bungalow')}}">
     <svg viewBox="0 0 55.906 55.906"fill="currentColor">
		<path d="M42.633,8.35V6.504c0-0.583-0.472-1.056-1.054-1.056h-3.253c-0.582,0-1.056,0.472-1.056,1.056V8.35h-9.317h-9.317V6.504    c0-0.583-0.473-1.056-1.056-1.056h-3.253c-0.582,0-1.054,0.472-1.054,1.056V8.35h-7.12L0,14.943v1.32h1.098v33.14    c0,0.584,0.472,1.055,1.055,1.055h25.8h25.801c0.583,0,1.054-0.471,1.054-1.055v-33.14h1.099v-1.32L49.754,8.35H42.633z     M12.13,43.622H8.438v-4.087h3.692V43.622z M12.13,25.689H8.438v-4.086h3.692V25.689z M31.712,48.37h-3.759h-3.758V35.25    c1.186-1.253,3.758-1.45,3.758-1.45s2.572,0.196,3.759,1.45V48.37z M32.7,26.415h-4.747h-4.747v-7.186    c1.911-1.318,4.747-1.318,4.747-1.318s2.837,0,4.747,1.317V26.415z M33.755,15.823h-5.802h-5.802c-0.582,0-0.693-0.305-0.25-0.681    l5.247-4.439c0.444-0.376,1.167-0.376,1.61,0l5.247,4.439C34.448,15.518,34.336,15.823,33.755,15.823z M47.467,43.622h-3.69    v-4.087h3.69V43.622z M47.467,25.689h-3.69v-4.086h3.69V25.689z"/>
</svg>
      Bungalow
</a>
    </div>
   </div>
   
   <div class="side-wrapper">
    <div class="side-title">Follow Us</div>
    <div class="side-menu">
     <a href="#">
     <svg viewBox="0 0 29.94 29.94" fill="currentColor">
	<path d="M27.56,0.684H2.383C1.065,0.684,0,1.748,0,3.064v23.813c0,1.312,1.065,2.379,2.383,2.379H27.56   c1.312,0,2.38-1.066,2.38-2.379V3.064C29.939,1.748,28.871,0.684,27.56,0.684z M20.125,9.167c-0.619-0.362-1.11-0.648-1.727-0.648   c-0.604,0-1.12,0.151-1.384,0.405c-0.264,0.252-0.395,0.74-0.395,1.461v1.067h3.229l-0.699,2.968h-2.53v9.862h-4.056V14.42H10.67   v-2.968h1.895v-1.133c0-1.193,0.143-1.907,0.425-2.496c0.281-0.587,0.826-1.241,1.584-1.611c0.757-0.369,1.877-0.555,3.036-0.555   c1.188,0,2.116,0.396,3.254,0.715L20.125,9.167z"/>
</svg>
      Facebook
     </a>
     <a href="#">
     <svg viewBox="0 0 455.73 455.73" fill="currentColor">
<path d="M227.86,182.55c-24.98,0-45.32,20.33-45.32,45.31c0,24.99,20.34,45.33,45.32,45.33c24.99,0,45.32-20.34,45.32-45.33  C273.18,202.88,252.85,182.55,227.86,182.55z M227.86,182.55c-24.98,0-45.32,20.33-45.32,45.31c0,24.99,20.34,45.33,45.32,45.33  c24.99,0,45.32-20.34,45.32-45.33C273.18,202.88,252.85,182.55,227.86,182.55z M303.36,108.66H152.37  c-24.1,0-43.71,19.61-43.71,43.71v150.99c0,24.1,19.61,43.71,43.71,43.71h150.99c24.1,0,43.71-19.61,43.71-43.71V152.37  C347.07,128.27,327.46,108.66,303.36,108.66z M227.86,306.35c-43.27,0-78.48-35.21-78.48-78.49c0-43.27,35.21-78.48,78.48-78.48  c43.28,0,78.49,35.21,78.49,78.48C306.35,271.14,271.14,306.35,227.86,306.35z M308.87,165.61c-10.24,0-18.57-8.33-18.57-18.57  s8.33-18.57,18.57-18.57s18.57,8.33,18.57,18.57S319.11,165.61,308.87,165.61z M227.86,182.55c-24.98,0-45.32,20.33-45.32,45.31  c0,24.99,20.34,45.33,45.32,45.33c24.99,0,45.32-20.34,45.32-45.33C273.18,202.88,252.85,182.55,227.86,182.55z M303.36,108.66  H152.37c-24.1,0-43.71,19.61-43.71,43.71v150.99c0,24.1,19.61,43.71,43.71,43.71h150.99c24.1,0,43.71-19.61,43.71-43.71V152.37  C347.07,128.27,327.46,108.66,303.36,108.66z M227.86,306.35c-43.27,0-78.48-35.21-78.48-78.49c0-43.27,35.21-78.48,78.48-78.48  c43.28,0,78.49,35.21,78.49,78.48C306.35,271.14,271.14,306.35,227.86,306.35z M308.87,165.61c-10.24,0-18.57-8.33-18.57-18.57  s8.33-18.57,18.57-18.57s18.57,8.33,18.57,18.57S319.11,165.61,308.87,165.61z M227.86,182.55c-24.98,0-45.32,20.33-45.32,45.31  c0,24.99,20.34,45.33,45.32,45.33c24.99,0,45.32-20.34,45.32-45.33C273.18,202.88,252.85,182.55,227.86,182.55z M0,0v455.73h455.73  V0H0z M380.23,303.36c0,42.39-34.48,76.87-76.87,76.87H152.37c-42.39,0-76.87-34.48-76.87-76.87V152.37  c0-42.39,34.48-76.87,76.87-76.87h150.99c42.39,0,76.87,34.48,76.87,76.87V303.36z M303.36,108.66H152.37  c-24.1,0-43.71,19.61-43.71,43.71v150.99c0,24.1,19.61,43.71,43.71,43.71h150.99c24.1,0,43.71-19.61,43.71-43.71V152.37  C347.07,128.27,327.46,108.66,303.36,108.66z M227.86,306.35c-43.27,0-78.48-35.21-78.48-78.49c0-43.27,35.21-78.48,78.48-78.48  c43.28,0,78.49,35.21,78.49,78.48C306.35,271.14,271.14,306.35,227.86,306.35z M308.87,165.61c-10.24,0-18.57-8.33-18.57-18.57  s8.33-18.57,18.57-18.57s18.57,8.33,18.57,18.57S319.11,165.61,308.87,165.61z M227.86,182.55c-24.98,0-45.32,20.33-45.32,45.31  c0,24.99,20.34,45.33,45.32,45.33c24.99,0,45.32-20.34,45.32-45.33C273.18,202.88,252.85,182.55,227.86,182.55z M227.86,182.55  c-24.98,0-45.32,20.33-45.32,45.31c0,24.99,20.34,45.33,45.32,45.33c24.99,0,45.32-20.34,45.32-45.33  C273.18,202.88,252.85,182.55,227.86,182.55z M227.86,182.55c-24.98,0-45.32,20.33-45.32,45.31c0,24.99,20.34,45.33,45.32,45.33  c24.99,0,45.32-20.34,45.32-45.33C273.18,202.88,252.85,182.55,227.86,182.55z M303.36,108.66H152.37  c-24.1,0-43.71,19.61-43.71,43.71v150.99c0,24.1,19.61,43.71,43.71,43.71h150.99c24.1,0,43.71-19.61,43.71-43.71V152.37  C347.07,128.27,327.46,108.66,303.36,108.66z M227.86,306.35c-43.27,0-78.48-35.21-78.48-78.49c0-43.27,35.21-78.48,78.48-78.48  c43.28,0,78.49,35.21,78.49,78.48C306.35,271.14,271.14,306.35,227.86,306.35z M308.87,165.61c-10.24,0-18.57-8.33-18.57-18.57  s8.33-18.57,18.57-18.57s18.57,8.33,18.57,18.57S319.11,165.61,308.87,165.61z M227.86,182.55c-24.98,0-45.32,20.33-45.32,45.31  c0,24.99,20.34,45.33,45.32,45.33c24.99,0,45.32-20.34,45.32-45.33C273.18,202.88,252.85,182.55,227.86,182.55z M227.86,182.55  c-24.98,0-45.32,20.33-45.32,45.31c0,24.99,20.34,45.33,45.32,45.33c24.99,0,45.32-20.34,45.32-45.33  C273.18,202.88,252.85,182.55,227.86,182.55z M227.86,182.55c-24.98,0-45.32,20.33-45.32,45.31c0,24.99,20.34,45.33,45.32,45.33  c24.99,0,45.32-20.34,45.32-45.33C273.18,202.88,252.85,182.55,227.86,182.55z M303.36,108.66H152.37  c-24.1,0-43.71,19.61-43.71,43.71v150.99c0,24.1,19.61,43.71,43.71,43.71h150.99c24.1,0,43.71-19.61,43.71-43.71V152.37  C347.07,128.27,327.46,108.66,303.36,108.66z M227.86,306.35c-43.27,0-78.48-35.21-78.48-78.49c0-43.27,35.21-78.48,78.48-78.48  c43.28,0,78.49,35.21,78.49,78.48C306.35,271.14,271.14,306.35,227.86,306.35z M308.87,165.61c-10.24,0-18.57-8.33-18.57-18.57  s8.33-18.57,18.57-18.57s18.57,8.33,18.57,18.57S319.11,165.61,308.87,165.61z M227.86,182.55c-24.98,0-45.32,20.33-45.32,45.31  c0,24.99,20.34,45.33,45.32,45.33c24.99,0,45.32-20.34,45.32-45.33C273.18,202.88,252.85,182.55,227.86,182.55z"/>
</svg>
      Instagram
     </a>
     <a href="#">
     <svg  viewBox="0 0 455 455" fill="currentColor" >
<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,0v455h455V0H0z M352.751,163.259c0.123,2.773,0.186,5.561,0.186,8.36  c0,85.403-65.002,183.876-183.873,183.876c-36.496,0-70.466-10.697-99.065-29.037c5.056,0.601,10.199,0.907,15.417,0.907  c30.278,0,58.143-10.331,80.262-27.668c-28.28-0.519-52.148-19.204-60.373-44.88c3.948,0.757,7.997,1.163,12.161,1.163  c5.894,0,11.604-0.794,17.027-2.268c-29.563-5.939-51.841-32.057-51.841-63.368c0-0.273,0-0.544,0.006-0.814  c8.712,4.84,18.676,7.748,29.271,8.084c-17.342-11.589-28.748-31.371-28.748-53.79c0-11.845,3.187-22.945,8.751-32.492  c31.873,39.101,79.493,64.828,133.203,67.526c-1.103-4.732-1.677-9.665-1.677-14.729c0-35.688,28.938-64.623,64.626-64.623  c18.589,0,35.385,7.847,47.173,20.406c14.719-2.895,28.551-8.276,41.038-15.681c-4.824,15.092-15.071,27.754-28.415,35.754  c13.074-1.563,25.528-5.038,37.118-10.178C376.336,142.766,365.38,154.149,352.751,163.259z"/>
</svg>
      Twitter
     </a>
     <a href="#">
     <svg viewBox="0 0 494.09 494.09" fill="currentColor">
<path id="XMLID_234_" d="M468.284,85.437H25.806C11.557,85.437,0,96.992,0,111.243v271.604c0,14.25,11.557,25.806,25.806,25.806  h442.477c14.25,0,25.806-11.556,25.806-25.806V111.243C494.09,96.992,482.533,85.437,468.284,85.437z M451.363,341.569  c6.997,5.814,7.961,16.197,2.154,23.193c-3.256,3.924-7.953,5.951-12.68,5.951c-3.708,0-7.439-1.248-10.511-3.796l-116.147-96.406  l-56.616,46.988c-3.048,2.533-6.786,3.795-10.518,3.795c-3.731,0-7.471-1.262-10.519-3.795l-56.614-46.988L63.764,366.917  c-6.989,5.814-17.37,4.857-23.194-2.155c-5.804-6.996-4.84-17.379,2.157-23.193l111.396-92.465L42.727,156.639  c-6.997-5.814-7.961-16.197-2.157-23.193c5.824-6.996,16.205-7.953,23.194-2.155l183.28,152.128L430.326,131.29  c6.996-5.798,17.385-4.841,23.191,2.155c5.807,6.997,4.842,17.379-2.154,23.193l-111.396,92.465L451.363,341.569z"/>
</svg>
      E-mail
     </a>
     <a href="#">
     <svg viewBox="0 0 504.4 504.4" fill="currentColor" >
		<path d="M254.8,119.4c-71.6,0-129.6,57.6-129.6,128.8c0,28,9.2,54.4,24.8,75.6l-16.4,48l50-16c20.4,13.6,45.2,21.2,71.6,21.2    c71.6,0,130-57.6,130-128.8C384.8,177,326.4,119.4,254.8,119.4z M330.8,301.4c-3.2,8.8-18.8,17.2-25.6,18s-6.8,5.6-45.6-9.2    c-38.4-15.2-62.8-54-64.8-56.8c-2-2.4-15.6-20.4-15.6-38.8c0-18.4,9.6-27.6,13.2-31.2c3.6-3.6,7.6-4.8,10-4.8    c2.4,0,5.2,0.4,7.2,0.4c2.4,0,5.2-1.2,8.4,6.4c3.2,7.6,10.8,26,11.6,28s1.6,4,0.4,6.4c-1.2,2.4-2,4-3.6,6.4c-2,2-4,4.8-5.6,6.4    c-2,2-4,4-1.6,7.6c2.4,3.6,10,16,21.2,26c14.4,12.8,26.8,16.8,30.4,18.8c3.6,2,6,1.6,8-0.8c2.4-2.4,9.6-10.8,12-14.8    c2.4-3.6,5.2-3.2,8.4-2c3.6,1.2,22,10.4,26,12.4c3.6,2,6.4,2.8,7.2,4.4C333.6,285,333.6,292.6,330.8,301.4z"/>
		<path d="M377.6,0.2H126.4C56.8,0.2,0,57,0,126.6v251.6c0,69.2,56.8,126,126.4,126H378c69.6,0,126.4-56.8,126.4-126.4V126.6    C504,57,447.2,0.2,377.6,0.2z M254.8,401.4c-27.2,0-52.4-6.8-74.8-19.2l-85.6,27.2l28-82c-14-23.2-22-50.4-22-79.2    c0-84.8,69.2-153.2,154.4-153.2s154.4,68.4,154.4,153.2S340,401.4,254.8,401.4z"/>
</svg>
      Whatsapp
     </a>
    </div>
   </div>

   <div class="side-wrapper">
    <div class="side-title"></div>
    <div class="side-menu">
    </div>
   </div>
  </div>
  <div class="main-container">
   <div class="main-header">
    <div class="header-menu">
     <a class="buy" href="{{route('welcome')}}" onclick="topMenu()">Buy</a>
     <a class="rent" href="{{route('rent')}}" onclick="topMenu()">Rent</a>
     <a class="yourProperty" href="{{route('yourProperty')}}" onclick="topMenu()">Your Properties</a>

    </div>
   </div>
   <div class="content-wrapper">
   @yield('content')
    <div class="content-section">
     
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="overlay-app"></div>
</div>
</body>
<script type="text/javascript" src="js/layout.js"></script>
</html>