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
                            Dashboard Admin
                        </a>
                    </li>
                </ol>
            </nav>
        </div>

        {{-- <p class="max-w-lg text-3xl font-semibold leading-normal text-gray-900">
            Selamat Datang, {{ auth()->user()->name }}
        </p> --}}
        
        <p id="login-success-message"></p>


        {{-- TULISAN DASHBOARD ADMIN --}}
        <div class="flex items-center justify-left h-1 mb-4 mt-10 rounded ">
            
            <p class="text-lg font-medium text-gray-700">Dashboard Admin</p>
        </div>
        

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-10">
            <!-- Gunakan grid untuk menyusun tautan akses cepat -->
            <a href="#"
                class="block max-w-sm p-6 bg-white rounded-lg shadow-lg border border-gray-200 hover:border-gray-300 hover:shadow-xl active:border-blue-500 h-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Jumlah Pengguna Biasa</h5>
                <h5 class="mb-2 text-6xl font-bold tracking-tight text-gray-900">10</h5>
            </a>

            <a href="#"
                class="block max-w-sm p-6 bg-white rounded-lg shadow-lg border border-gray-200 hover:border-gray-300 hover:shadow-xl active:border-blue-500 h-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Jumlah Admin</h5>
                <h5 class="mb-2 text-6xl font-bold tracking-tight text-gray-900">10</h5>
            </a>

            <a href="#"
                class="block max-w-sm p-6 bg-white rounded-lg shadow-lg border border-gray-200 hover:border-gray-300 hover:shadow-xl active:border-blue-500 h-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Jumlah Seluruh Pengguna</h5>
                <h5 class="mb-2 text-6xl font-bold tracking-tight text-gray-900">20</h5>
            </a>
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

@endsection
