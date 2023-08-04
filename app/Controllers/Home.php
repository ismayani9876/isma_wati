<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $menu = [
            'beranda'=> [
            'title'=> 'Beranda',
            'link'=> base_url(),
            'icon'=> 'fa-solid fa-house'
            ],
        ];
        $data['menu'] = $menu;
        return view('template/content', $data);
    }
}
