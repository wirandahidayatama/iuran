<?php

namespace App\Http\Livewire;

use App\Models\MasterTagihan;
use Livewire\Component;

class MasterTagihanCreate extends Component
{

    public $kode_tagihan;
    public $nama_tagihan;
    public $nominal_tagihan;


    public function render()
    {
        return view('livewire.master-tagihan-create');
    }

    public function store()
    {
        $this->validate([
            'kode_tagihan'=>'required|unique:master_tagihans,kode_tagihan|min:2',
            'nama_tagihan'=>'required|string',
            'nominal_tagihan'=>'required'
        ]);

        MasterTagihan::create([
            'kode_tagihan'=>$this->kode_tagihan,
            'nama_tagihan'=>$this->nama_tagihan,
            'nominal_tagihan'=>$this->nominal_tagihan
        ]);

        $this->kode_tagihan = NULL;
        $this->nama_tagihan = NULL;
        $this->nominal_tagihan = NULL;

        session()->flash('success','Data Tagihan Berhasil Ditambah !!!');

        $this->emit('tagihanStore');
    }
}
