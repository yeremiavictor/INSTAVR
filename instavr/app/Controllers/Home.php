<?php

namespace App\Controllers;
use App\Models\PostModel;

class Home extends BaseController
{
    public function index()
    {
        $data['namaSistem'] = 'VRINSTA';
        $Post = new PostModel();
        $data['Posts'] = $Post->findALL();
        echo view('home', $data);
    }

    public function like($ID){
        $Post = new PostModel();
        $Post->update($id, [
            'like' => $this->request->getPost('post'),
        ]);
        return redirect()->to(base_url('/post')); 


    }

    
}
