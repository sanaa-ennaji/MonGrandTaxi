

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
    <style>
      #bgf{
     background-color: rgb(225, 232, 153)
         
      }
  </style>
</head>
@auth
@if(auth()->user()->role == 'Passanger')
<body id="bgf">
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
                  <a href="/reserved" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent"> reservations</a>
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
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                    <span
                        class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            <form action="/logout" method="POST">
                                @csrf
                                <button id="bot">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only"> menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">

        </div>
    </div>
</nav>

<div class="space-y-2 text-center py-5" >
  <h2 class="text-3xl font-bold">Choose the your trajet </h2>
</div>

<div class=" flex justify-center items-center mt-5">
  <form action="/search" method="GET" class="max-w-[480px] w-full px-4">
    @csrf
      <div class="relative">
          <input type="text" name="query" class="w-full border h-12 shadow p-4 rounded-full" placeholder="search">
          <button type="submit">
              <svg class="text-teal-400 h-5 w-5 absolute top-3.5 right-3 fill-current"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                  x="0px" y="0px" viewBox="0 0 56.966 56.966"
                  style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                  <path
                      d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                  </path>
              </svg>
      </button>
      </div>
  </form>
</div>

  <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 items-center m-5">
    <div class="lg:flex-col items-center justify-center w-full cards-container grid grid-cols-1 lg:grid-cols-3 gap-7">
      @foreach ($trajets as $trajet)
        <div tabindex="0" aria-label="card 1" class="focus:outline-none bg-white p-6 shadow rounded ">
            <div class="flex items-center border-b border-gray-200 pb-6">
                <img src="{{ asset('storage/img/' . $trajet->driver->profile)}}" alt="coin avatar" class="w-12 h-12 rounded-full" />
                <div class="flex items-start justify-between w-full">
                    <div class="pl-3 w-full">
                        <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">{{$trajet->driver->name}}</p>
                        
                    </div>
                    <div role="img" aria-label="bookmark">
                        <svg  class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="px-2">
                <div  class="text-sm font-semibold flex items-center space-x-2">
                    <button class="text-sm font-semibold flex items-center space-x-2">
                        <span>{{$trajet['destination']}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                    <button class="text-sm font-semibold flex items-center space-x-2 py-5">
                        <span>{{$trajet['departure']}}</span>
                    </button>
                </div> 
                <div tabindex="0" class="focus:outline-none flex">
                    <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"> <button id="button{{ $trajet->id }}" onclick="toggleModal('progress-modal{{ $trajet->id }}', 'button{{ $trajet->id }}')">reserve</button></div>

                   
                </div>
            </div>
            <form class="flex items-center mt-6 space-x-4 rtl:space-x-reverse" method="POST" action="/createcomments">
                @csrf
                <input type="hidden" name="trajet_id" value="{{$trajet->id }}">
                <input type="text" name="commentaire" id="commentaire" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                <label for="commentaire" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">comments</label>
                <button type="submit"
                class="text-white bg-yellow-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">comment</button>
            </form>
            {{-- @foreach ($comments as $comment)
              
            <label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{$comment['commentair']}}</label>
            @endforeach --}}
        </div>
      
    <!-- Main modal -->
    
    <div id="progress-modal{{ $trajet->id }}"
      class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
    
              <form class="p-4 md:p-5 mt-5" method="POST" action="{{ route('create.reservation') }}">
                  @csrf
                  <input type="hidden" name="trajet_id" value="{{ $trajet->id }}">
                  <div class="relative">
                   
                      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                              viewBox="0 0 20 20">
                              <path
                                  d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                          </svg>
                      </div>
                      <input type="date" name="reservation_date"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Select date start">
                  </div>
                  <input type="time" name="reservation_time"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-5"
                      placeholder="Select date start">
                  <!-- Modal footer -->
                  <div class="flex items-center mt-6 space-x-4 rtl:space-x-reverse">
                      <button type="submit"
                          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">confirm</button>
                          <button onclick="closeModal('progress-modal{{ $trajet->id }}')" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
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
              <a href="#" class="rounded-md bg-yellow-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-600  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
              <a href="#" class="text-sm font-semibold text-gray-900">Contact support <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>
        </main>
        @endif

 @endauth
        <script>
            function toggleModal(modalId) {
                const modal = document.getElementById(modalId);
                modal.classList.toggle('hidden');
            }
       
    function toggleModal(modalId, buttonId) {
        const modal = document.getElementById(modalId);
        const button = document.getElementById(buttonId);
        const rect = button.getBoundingClientRect();
        modal.style.top = rect.bottom + 'px';
        modal.style.left = rect.left + 'px';

        modal.classList.toggle('hidden');
    }
    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.style.top = '0';
        modal.style.left = '0';

        modal.classList.add('hidden');
    }

        </script>
</body>
</html>