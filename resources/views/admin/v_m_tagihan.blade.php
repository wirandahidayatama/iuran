@extends('layouts_admin.main')

    @section('container')
    {{-- isi content --}}


    <h2 class="text-4xl font-extrabold dark:text-white text-center">Tambah Master Tagihan</h2>

   
        @livewire('master-tagihan-create')
    
    
    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <div>
            @livewire('master-tagihan-table')
        </div>

    @endsection