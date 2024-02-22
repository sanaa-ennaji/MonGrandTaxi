<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <style>
        #bgf{
       background-color: rgb(225, 232, 153)
           
        }
    </style>
</head>
<body id="bgf">
   @auth 
{{-- @if(auth()->user()->role == 'Passanger') --}}
 <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center ">
            <h2 class="font-bold text-2xl">Grand<span class="bg-[#FFD700] text-white px-2 rounded-md">Taxi</span></h2>
        </a>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="/home" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">Home</a>
                </li>
              
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">contact</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">drivers</a>
                </li>
                <li>
                    <a href="/trajet" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">trajets</a>
                </li>
            </ul>
        </div>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">


      <button type="button" class="dropdown-toggle flex items-center" id="user-menu-button" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <div class="flex-shrink-0 w-10 h-10 relative">
            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                <img class="w-10 h-8 rounded-full" src="{{ asset('storage/img/' . auth()->user()->profile)}}" alt="user photo"/>
            </div>
        </div>
        <div class="px-2 md:block text-left">
            <h2 class="text-sm font-semibold text-gray-800">{{ auth()->user()->name}}</h2>
            <p class="text-xs text-gray-500">{{ auth()->user()->role}}</p>
        </div>                
    </button>

        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name}}</span>
            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email}}</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">home</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"> 
                <form action="/logout" method="POST">
                @csrf
                <button  id="bot">
                  <i class="fas fa-sign-out-alt"></i>
                  <span >Logout</span>
              </button>
            </form></a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only"> menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">

    </div>
    </div>
  </nav>




  <div class="space-y-2 text-center py-5" >
    <h2 class="text-3xl font-bold">your reservations</h2>
  </div>
    <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 items-center m-5">
        <div class="lg:flex-col items-center justify-center w-full cards-container grid grid-cols-1 lg:grid-cols-3 gap-7">
            @foreach ($reservations as $reservation)
            <div tabindex="0" aria-label="card 1" class="focus:outline-none bg-white p-6 shadow rounded ">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <img    src="{{ asset('storage/img/' . $reservation->passanger->profile) }}" alt="coin avatar" class="w-12 h-12 rounded-full" />
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">{{ $reservation->passanger->name }}</p>
               
                        </div>
                       
                    </div>
                </div>
                <div class="px-2">
                    <span> trajet:{{ $reservation->trajetreserve->id }}</span>
                    <div  class="text-sm font-semibold flex items-center space-x-2">
                        
                        <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">{{$reservation['reserved_time']}}</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">{{$reservation['status']}}</p>
                       
                    </div> 
                    <div tabindex="0" class="focus:outline-none flex mt-3">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-green-100 "> <button>reserved</button></div>
                        <div class="px-4 py-2 text-xs leading-3 text-indigo-700 rounded-full bg-yellow-100 ">
                            <button id="button{{ $reservation->id }}" onclick="toggleModal('progress-modal{{ $reservation->id }}', 'button{{ $reservation->id }}')">update</button>
                          </div>
                    </div>
                   
                </div>
            </div>
       
        </section>

        <div id="progress-modal{{ $reservation->id }}"
            class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
          
                <form class="p-4 md:p-5 mt-5" method="POST" action="/update/reservation/{{ $reservation->id }}">
                    @csrf
                    @method('PATCH') 
                    <div class="relative">
                        <label for="statu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">status</label>
                        <select name="status" id="statu"
                            class="citySelect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="pending" {{ $reservation->status === 'pending' ? 'selected' : '' }}>pending</option>
                            <option value="canceled" {{ $reservation->status === 'canceled' ? 'selected' : '' }}>canceled</option>
                        </select>
                    </div>
                    <div class="flex items-center mt-6 space-x-4 rtl:space-x-reverse">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">confirm</button>
                        <button onclick="closeModal('progress-modal{{ $reservation->id }}')" type="button"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                    </div>
                </form>
                
                </div>
            </div>
      
        </div>
    @endforeach  

    @else

    <main class="grid min-h-full place-items-center bg-white px-6  lg:px-8">
      <div class="text-center">
          <img src="img/404.png" alt="">
          <h1 class="text-3xl font-bold tracking-tight text-yellow-500 sm:text-5xl">Page not found</h1>
     
        <div class="mt-6 flex items-center justify-center gap-x-5">
          <a href="/home" class="rounded-md bg-yellow-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-600  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
          <a href="#" class="text-sm font-semibold text-gray-900">Contact support <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
    </main>
    {{-- @endif --}}
    @endauth
    <script src="js/cities.js"></script>
</body>
</html>