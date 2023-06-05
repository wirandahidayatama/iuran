<div>
    <div>
        {{-- The Master doesn't talk, he acts. --}}
    
       
        <form wire:submit.prevent="update">
            <div class="md:flex mb-6 py-2">
                <div class="md:w-1/3">
                    <label  class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                        Kode Tagihan
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input wire:model="kode_tagihan" class="form-input block w-full focus:bg-white" id="my-textfield" type="text" readonly>
                    @error('kode_tagihan')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"> {{ $message }}</p>
                    @enderror
                    
                </div>
            </div>
    
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                        Nama Tagihan
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input wire:model="nama_tagihan" class="form-input block w-full focus:bg-white" id="my-textfield" type="text">
                    @error('nama_tagihan')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"> {{ $message }}</p>
                @enderror
                </div>
            </div>
    
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                        Nominal Tagihan
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input wire:model="nominal_tagihan" class="form-input block w-full focus:bg-white" id="my-textfield" type="text">
                    @error('nominal_tagihan')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"> {{ $message }}</p>
                @enderror
                </div>
            </div>
    
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <a href="/admin/m_tagihan" type="submit" class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                        Kembali
                    </a>
                    <button type="submit" class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                        Update
                    </button>
                </div>
            </div>
    
        </form>
    
    </div>
    <!--/Card-->
    </div>
    
</div>
