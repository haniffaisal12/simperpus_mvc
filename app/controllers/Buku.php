<?php

class Buku extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Daftar Buku"
        ];
        $this->view('templates/header', $data);
        $this->view('buku/index');
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        echo "Ini merupakan halaman buku/detail dengan parameter id = $id";
    }
}
