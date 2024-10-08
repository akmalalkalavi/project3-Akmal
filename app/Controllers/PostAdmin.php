<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseInterface;

class PostAdmin extends BaseController
{
    public function index()
    {
        $post = new PostModel();
        $data['posts'] = $post->findAll();
        echo view('admin/admin_post_list', $data);
    }

    public function preview($id)
    {
        $post = new PostModel();
        $data['post'] = $post->where('id', $id)->first();

        if (!$data['post']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('post_detail', $data);
    }

    public function create()
    {
        // Lakukan Validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'content' => 'required',
            'image' => 'uploaded[image]|mime_in[image,image/png,image/jpg,image/jpeg]|max_size[image,2048]'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // Jika data valid, simpan ke database 
        if ($isDataValid) {
            // Handle image upload
            $image = $this->request->getFile('image');
           
            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('assets', $newName);
                $imagePath = '' . $newName;
            }

            $post = new PostModel();
            $post->insert([
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
                "slug" => url_title($this->request->getPost('title'), '-', TRUE),
                "image" => $imagePath
            ]);
            return redirect('admin/post');
        }

        // Tampilkan form create
        echo view('admin/admin_post_create');
    }

    public function edit($id)
    {
        // Ambil artikel yang akan diedit
        $post = new PostModel();
        $data['post'] = $post->where('id', $id)->first();

        // lakukan validasi data artikel
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'uploaded[image]|mime_in[image,image/png,image/jpg,image/jpeg]|max_size[image,2048]'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, maka simpan ke database
        if ($isDataValid) {
             // Handle image upload
            $image = $this->request->getFile('image');
           
            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('assets', $newName);
                $imagePath = '' . $newName;
            } else {
                $imagePath = $data['post']['image'];
            }
            $post->update($id, [
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
                "image" => $imagePath
            ]);
            return redirect('admin/post');
        }

        // Tampilkan form edit
        echo view('admin/admin_post_update', $data);
    }

    public function delete($id)
    {
        $post = new PostModel();
        $post->delete($id);
        return redirect('admin/post');
    }

}
