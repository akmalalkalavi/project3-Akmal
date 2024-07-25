<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Membuat data
        $posts_data = [
            [
                'title' => 'Mulai Coba Bahasa Codeigniter',
                'slug' => 'codeigniter-starter',
                'content' => 'Lorem ipsum dolor sit amet, consectetur
adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.'
            ],
            [
                'title' => 'Cara Membuat Hello World',
                'slug' => 'hello-world',
                'content' => 'Sed ut perspiciatis unde omnis iste natus error
sit voluptatem accusantium doloremque laudantium, totam rem aperiam.'
            ],
            [
                'title' => 'Meetup Himatika Koding',
                'slug' => 'meetup-himatika',
                'content' => 'At vero eos et accusamus et iusto odio
dignissimos ducimus qui blanditiis voluptatum deleniti atque corrupti quos.'
            ]
        ];

        foreach($posts_data as $data) {
            // Insert semua data ke tabel
            $this->db->table('posts')->insert($data);
        }
    }
}
