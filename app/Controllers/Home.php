<?php


namespace App\Controllers;
use App\Models\PostModel;

class Home extends BaseController
{
    public function index()
    {
        //Buat object model $post
        $post = new PostModel();
        /*
        siapkan data untuk dikirim ke view dengan nama $posts
        dan isi datanya dengan post yang sudah terbit
        */
        $data['posts'] = $post->where('status', 'published')->findAll();
    
        // kirim data ke view
        echo view('home', $data);
    }
}
