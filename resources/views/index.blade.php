@extends('layouts.main')

@section('content')
<div class="p-4 sm:ml-96">
    <div class="p-4">
  
      <!-- Logo Section -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="bg-gray-50">
          <a href="https://flowbite.com" class="flex items-center md:ml-2 md:mr-4">
            <img src="{{ asset('storage/logo.png') }}" class="h-20 me-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold sm:text-4xl whitespace-nowrap text-gray-800">FLOOD GUARD</span>
          </a>
        </div>
      </div>
  
      <!-- Main Cards Section -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <!-- Card 1 -->
        <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md">
          <!-- Circular Progress -->
          <div class="w-24 h-24 rounded-full flex items-center justify-center bg-gray-50 relative">
            <svg class="-rotate-90 w-20 h-20">
                <circle style="color: #ffffff" stroke-width="8" stroke="currentColor" fill="transparent" r="32" cx="40" cy="40" />
                <circle style="color: #6FCF97" stroke-width="8" stroke="currentColor" fill="transparent" stroke-linecap="round" r="32" cx="40" cy="40" stroke-dasharray="150" stroke-dashoffset="0" />
            </svg>
            <span class="absolute font-quicksand font-bold text-lg text-dark">75%</span>
          </div>
          <!-- Text Content -->
          <div class="text-center">
            <p class="text-lg text-gray-600">Status</p>
            <h1 class="text-2xl text-gray-900">Aman</h1>
          </div>
        </div>
        
        <!-- Card 2 -->
        <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md">
          <!-- Circular Progress -->
          <div class="w-24 h-24 rounded-full flex items-center justify-center bg-gray-50 relative">
            <svg class="-rotate-90 w-20 h-20">
                <circle style="color: #ffffff" stroke-width="8" stroke="currentColor" fill="transparent" r="32" cx="40" cy="40" />
                <circle style="color: #6FCF97" stroke-width="8" stroke="currentColor" fill="transparent" stroke-linecap="round" r="32" cx="40" cy="40" stroke-dasharray="150" stroke-dashoffset="0" />
            </svg>
            <span class="absolute font-quicksand font-bold text-lg text-dark">75%</span>
          </div>
          <!-- Text Content -->
          <div class="text-center">
            <p class="text-lg text-gray-600">Curah Hujan</p>
            <h1 class="text-2xl text-gray-900">0</h1>
          </div>
        </div>
        
        <!-- Card 3 -->
        <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md">
          <!-- Circular Progress -->
          <div class="w-24 h-24 rounded-full flex items-center justify-center bg-gray-50 relative">
            <svg class="-rotate-90 w-20 h-20">
                <circle style="color: #ffffff" stroke-width="8" stroke="currentColor" fill="transparent" r="32" cx="40" cy="40" />
                <circle style="color: #6FCF97" stroke-width="8" stroke="currentColor" fill="transparent" stroke-linecap="round" r="32" cx="40" cy="40" stroke-dasharray="150" stroke-dashoffset="0" />
            </svg>
            <span class="absolute font-quicksand font-bold text-lg text-dark">75%</span>
          </div>
          <!-- Text Content -->
          <div class="text-center">
            <p class="text-lg text-gray-600">Debit Air</p>
            <h1 class="text-2xl text-gray-900">3.258</h1>
          </div>
        </div>
        
        <!-- Card 4 -->
        <div class="bg-white p-4 rounded-md flex flex-col items-center justify-center space-y-4 shadow-md">
          <!-- Circular Progress -->
          <div class="w-24 h-24 rounded-full flex items-center justify-center bg-gray-50 relative">
            <svg class="-rotate-90 w-20 h-20">
                <circle style="color: #ffffff" stroke-width="8" stroke="currentColor" fill="transparent" r="32" cx="40" cy="40" />
                <circle style="color: #6FCF97" stroke-width="8" stroke="currentColor" fill="transparent" stroke-linecap="round" r="32" cx="40" cy="40" stroke-dasharray="150" stroke-dashoffset="0" />
            </svg>
            <span class="absolute font-quicksand font-bold text-lg text-dark">75%</span>
          </div>
          <!-- Text Content -->
          <div class="text-center">
            <p class="text-lg text-gray-600">Water Level</p>
            <h1 class="text-2xl text-gray-900">625.24</h1>
          </div>
        </div>
        
      </div>
  
      {{-- <!-- Additional Cards Section -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <!-- Card ke-5 -->
        <div class="bg-white p-4 rounded-md shadow-md">
          <!--... (Isi card Anda di sini) ...-->
        </div>

        <!-- Card ke-6 -->
        <div class="bg-white p-4 rounded-md shadow-md flex flex-col items-center justify-center h-full">
            <img src="{{ asset('storage/logo.png') }}" class="h-1/2" alt="FlowBite Logo" /> 
            <h1 class="text-2xl text-gray-900 font-bold">Siaga Warga Majalaya</h1>
            <button type="button" class="mt-5 text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-24 py-3 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55">
                <a href="#" class="text-2xl font-bold">GET APP</a>
                
            </button>
        </div>
      </div>
  
      <!-- Single Card Section -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
        <div class="bg-white p-4 rounded-md shadow-md">
            
        </div>
      </div> --}}
  
    </div>


   <!-- Additional Cards Section -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
    <!-- Card ke-5 -->
    <div class="bg-white p-4 rounded-md shadow-md col-span-3">
        <!--... (Isi card Anda di sini) ...-->
    </div>

    <!-- Card ke-6 -->
    <div class="bg-white p-4 rounded-md shadow-md col-span-1 flex flex-col items-center justify-center h-full">
        <img src="{{ asset('storage/logo.png') }}" class="h-1/2" alt="FlowBite Logo" /> 
        <h1 class="text-2xl text-gray-900 font-bold">Siaga Warga Majalaya</h1>
        <button type="button" class="mt-5 text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-24 py-3 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55">
            <a href="#" class="text-2xl font-bold">GET APP</a>
        </button>
    </div>
</div>

  
      <!-- Single Card Section -->
      <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-8">
        <div class="bg-white p-4 rounded-md shadow-md">
            <h1 class="text-2xl font-bold py-1">Riwayat Debit Air</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                    <div>
                        <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5" type="button">
                            <svg class="w-3 h-3 text-gray-500 me-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                            </svg>
                            Last 30 days
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" fill="currentColor" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow" style="position: absolute;">
                            <ul class="p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownRadioButton">
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                        <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last day</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                        <input checked id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last 7 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                        <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last 30 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                        <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last month</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                        <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last year</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="p-4">Product name</th>
                            <th scope="col" class="px-6 py-3">Color</th>
                            <th scope="col" class="px-6 py-3">Category</th>
                            <th scope="col" class="px-6 py-3">Price</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-50 border-b hover:bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">Silver</td>
                            <td class="px-6 py-4">Laptop</td>
                            <td class="px-6 py-4">$2999</td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 border-b hover:bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">White</td>
                            <td class="px-6 py-4">Laptop PC</td>
                            <td class="px-6 py-4">$1999</td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 border-b hover:bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">Black</td>
                            <td class="px-6 py-4">Accessories</td>
                            <td class="px-6 py-4">$99</td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 border-b hover:bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Apple Watch
                            </th>
                            <td class="px-6 py-4">Silver</td>
                            <td class="px-6 py-4">Accessories</td>
                            <td class="px-6 py-4">$179</td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 hover:bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                iPad
                            </th>
                            <td class="px-6 py-4">Gold</td>
                            <td class="px-6 py-4">Tablet</td>
                            <td class="px-6 py-4">$699</td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 hover:bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Apple iMac 27"
                            </th>
                            <td class="px-6 py-4">Silver</td>
                            <td class="px-6 py-4">PC Desktop</td>
                            <td class="px-6 py-4">$3999</td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
    
        </div>
    </div>
  </div>
@endsection

    
        







