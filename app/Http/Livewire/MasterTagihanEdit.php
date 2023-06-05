<?php

namespace App\Http\Livewire;

use App\Models\MasterTagihan;
use Livewire\Component;

class MasterTagihanEdit extends Component
{

    public $tagihan_id;
    public $kode_tagihan;
    public $nama_tagihan;
    public $nominal_tagihan;

    public function mount($tagihan)
    {
        $this->tagihan_id = $tagihan->id;
        $this->kode_tagihan = $tagihan->kode_tagihan;
        $this->nama_tagihan = $tagihan->nama_tagihan;
        $this->nominal_tagihan = $tagihan->nominal_tagihan;
    }


    public function render()
    {
        return view('livewire.master-tagihan-edit');
    }

    public function update()
    {
        $this->validate([
            'kode_tagihan'=>'required|min:2|unique:master_tagihans,kode_tagihan,'.$this->tagihan_id,
            'nama_tagihan'=>'required|string',
            'nominal_tagihan'=>'required'
        ]);

        MasterTagihan::where('id',$this->tagihan_id)->update([
            'kode_tagihan'=>$this->kode_tagihan,
            'nama_tagihan'=>$this->nama_tagihan,
            'nominal_tagihan'=>$this->nominal_tagihan
        ]);

        $this->kode_tagihan = NULL;
        $this->nama_tagihan = NULL;
        $this->nominal_tagihan = NULL;

        redirect()->route('m_tagihan.home')->with('success','Master Tagihan Berhasil Di Edit');

    }
}
