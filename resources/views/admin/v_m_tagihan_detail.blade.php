@extends('layouts_admin.main')

    @section('container')
    {{-- isi content --}}
    <h2 class="text-4xl font-extrabold dark:text-white text-center">detail Master Tagihan</h2>

    <div class="md:flex mb-6 py-2">
        <div class="md:w-1/3">
            <label  class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                Kode Tagihan
            </label>
        </div>
        <div class="md:w-2/3">
            <input value="{{ $tagihan->kode_tagihan }}" class="form-input block w-full focus:bg-white" id="my-textfield" type="text" disabled>
            
        </div>
    </div>

    <div class="md:flex mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                Nama Tagihan
            </label>
        </div>
        <div class="md:w-2/3">
            <input  value="{{ $tagihan->nama_tagihan }}" class="form-input block w-full focus:bg-white" id="my-textfield" type="text" disabled>

        </div>
    </div>

    <div class="md:flex mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                Nominal Tagihan
            </label>
        </div>
        <div class="md:w-2/3">
            <input value="{{ $tagihan->nominal_tagihan }}" class="form-input block w-full focus:bg-white" id="my-textfield" type="text" disabled>

        </div>
    </div>

    <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
            <a href="/admin/m_tagihan" type="submit" class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>
    </div>

    @endsection