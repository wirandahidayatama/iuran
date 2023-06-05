<?php

namespace App\Http\Livewire;

use App\Models\MasterTagihan;
use Livewire\Component;

class MasterTagihanTable extends Component
{

    protected $listeners = ['tagihanStore' => 'render'];

    public function render()
    {
        return view('livewire.master-tagihan-table',[
            'tagihan'=>MasterTagihan::orderBy('id','desc')->get()
        ]);
    }

    public function delete($id)
    {
        $tagihan = MasterTagihan::find($id);
        $tagihan->delete();
        session()->flash('success','Master Data Tagihan Berhasil Dihapus !!!');
    }
}
