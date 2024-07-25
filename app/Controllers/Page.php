<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Page extends BaseController
{
    public function about()
    {
        echo view("about");
    }
    public function contact()
    {
        echo view("contact");
    }
    public function faqs()
    {
        echo view("faqs");
    }
}
