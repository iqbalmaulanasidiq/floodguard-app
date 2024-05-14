@extends('layouts.app')

@section('content')
<div class="p-10 sm:ml-64 bg-white min-h-screen">
    <div class="p-4 ">
        <div class="grid grid-cols-3 gap-4 mb-4">
            {{-- BREADCRUMB --}}
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="/dashboard-adm"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white-800">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Dashboard Admin | Kelola Pengguna
                        </a>
                    </li>
                </ol>
            </nav>
        </div>

        {{-- <p class="max-w-lg text-3xl font-semibold leading-normal text-gray-900">
            Selamat Datang, {{ auth()->user() ? auth()->user()->name : 'Pengunjung' }}
        </p> --}}
        
        
        
        <p id="login-success-message"></p>


        {{-- TULISAN DASHBOARD ADMIN --}}
        <div class="flex items-center justify-left h-1 mb-4 mt-10 rounded ">
            
            <p class="text-lg font-medium text-gray-700 mb-10">Kelola Pengguna</p>
        </div>


         {{-- button untuk tambah pengguna --}}
         

<!-- Modal toggle -->
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-5" type="button">
    Tambah Pengguna
  </button>
  
  <!-- Main modal -->
  <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4  max-w-sm w-80 max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah Data Pengguna
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Pengguna</button>
                </form>
            </div>
        </div>
    </div>
</div>

  
       
        

        



        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Password
                        </th>
                        
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>

                @if ($userData)

                @foreach ( $userData as $id => $user )
                    
                
                    
                
                <tbody>
                    <tr class="bg-white dark:bg-gray-800">
                        
                        <td class="px-6 py-4">
                            {{ $user['email'] }}
                        </td>
                        <td class="px-6 py-4">
                            *****************
                        </td>
                        
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" 
                                data-modal-toggle="edit-user-modal" 
                                data-user-id="{{ $user['uid'] }}" 
                                data-user-email="{{ $user['email'] }}">
                                Ubah
                            </a>

                            

                            <form id="delete-form-{{ $user['uid'] }}" action="{{ route('users.destroy', ['user' => $user['uid']]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="uid" value="{{ $user['uid'] }}">
                                {{-- <button type="button" onclick="confirmDelete('{{ $user['uid'] }}')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button> --}}
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="confirmDelete('{{ $user['uid'] }}')">Hapus</a>
                            </form>
                        </td>
                        
                        
                        
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center">No users found.</td>
                        </tr>
                    @endif
                </tbody>
                
            </table>
        </div>
        



    </div>

    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="flex items-center justify-center h-48 mb-4 rounded">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <!-- Konten tambahan di sini jika dibutuhkan -->
                
            </div>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div id="edit-user-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 max-w-sm w-80 max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Ubah Data Pengguna</h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-user-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('users.update', ['user' => ':userId']) }}" method="POST" id="edit-user-form">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="uid" id="edit-uid">
                    <div>
                        <label for="edit-email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="edit-email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                    </div>
                    <div>
                        <label for="edit-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="edit-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah Pengguna</button>
                </form>
            </div>
        </div>
    </div>
</div>




    
    <script>

        document.querySelectorAll('[data-modal-toggle="edit-user-modal"]').forEach(button => {
            button.addEventListener('click', () => {
                const userId = button.getAttribute('data-user-id');
                const userEmail = button.getAttribute('data-user-email');

                const form = document.getElementById('edit-user-form');
                form.setAttribute('action', form.getAttribute('action').replace(':userId', userId));

                document.getElementById('edit-uid').value = userId;
                document.getElementById('edit-email').value = userEmail;
            });
        });



        function confirmDelete(uid) {
            if (confirm("Apakah Anda yakin ingin menghapus pengguna ini?")) {
                document.getElementById('delete-form-' + uid).submit();
            }
        }

        // close modal
        document.querySelectorAll('[data-modal-hide]').forEach(button => {
            button.addEventListener('click', () => {
                const modal = document.getElementById(button.getAttribute('data-modal-hide'));
                modal.classList.add('hidden');
                modal.setAttribute('aria-hidden', 'true');
            });
        });
    </script>
    


@endsection
