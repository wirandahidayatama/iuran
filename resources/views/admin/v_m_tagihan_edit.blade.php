@extends('layouts_admin.main')

    @section('container')
    {{-- isi content --}}


    <h2 class="text-4xl font-extrabold dark:text-white text-center">Edit Master Tagihan</h2>

   
        @livewire('master-tagihan-edit',['tagihan'=>$tagihan])
    
    
    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

    @endsection