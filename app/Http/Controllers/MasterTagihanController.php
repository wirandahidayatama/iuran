<?php

namespace App\Http\Controllers;

use App\Models\MasterTagihan;
use Illuminate\Http\Request;

class MasterTagihanController extends Controller
{

    public function show($id)
    {
        $tagihan =MasterTagihan::where('id',$id)->first();
        return view('admin.v_m_tagihan_detail',[
            'judul' => 'detail tagihan',
            'tagihan' => $tagihan
        ]);
    }

    public function edit($id)
    {
        $tagihan =MasterTagihan::where('id',$id)->first();
        return view('admin.v_m_tagihan_edit',[
            'judul' => 'Edit tagihan',
            'tagihan' => $tagihan
        ]);
    }

}
