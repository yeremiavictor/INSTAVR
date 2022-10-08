<?php

namespace App\Controllers;
use App\Models\PostModel;

class Post extends BaseController
{
    public function index()
    {
        $data['namaSistem'] = 'VRINSTA';
        $Post = new PostModel();
        $data['Posts'] = $Post->findALL();
        echo view('post/list', $data);
    }


}
