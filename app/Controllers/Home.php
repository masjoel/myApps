<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    function datapeserta()
    {
        $rec = $this->db->table('users as a')->select('a.*, b.iddosen, b.fakultas, b.progdi, b.semester, b.pembimbing, b.foto_ktm')->join('kkn_user_detail as b', 'b.iduser=a.id', 'left')->get()->getResult();
        $data = [
            'title' => 'Daftar Mahasiswa Bimbingan', 'uriSeg' => $this->req->uri->getSegment(1), 'rec' => $rec
        ];
        return view('datapeserta', $data);
    }
}
