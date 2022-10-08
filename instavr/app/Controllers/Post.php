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

    public function add()
    {
        $data['namaSistem'] = 'VRINSTA';
        $validation =  \Config\Services::validation();
        $validation->setRules(['post' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            
            //get foto
                $foto = $this->request->getFile('foto');

            //check upload
            if($foto->getError() == 4){
                //nothing
            } else {
                //getname
                $namafoto = $foto->getName();
                //acak nama
                $namafoto = $foto->getRandomName();
                // move to img
                $foto->move('img', $namafoto);
            }

            $Post = new PostModel();
            $Post->insert([
                'id'=>$this->request->getPost('id'),
                'post'=>$this->request->getPost('post'),
                // 'foto'=>$this->request->getPost('foto'),
                'foto'=>$namafoto,
                'comment'=>$this->request->getPost('comment'),
                'like'=>$this->request->getPost('like'),
            ]);
            return redirect()->to(base_url('/Post'));
        }

        echo view('post/add', $data);


    }

    public function delete($id){
        $Post = new PostModel();
            //cari gambar by id
                $foto = $Post->find($id);
                //cek jika gambar adalah default
                if ($foto['foto'] != null){
                    //hapus gambar
                    unlink('img/'. $foto['foto']);
                }
            //
        $Post->delete($id);
        return redirect()->to(base_url('/Post')); 
    }
}
