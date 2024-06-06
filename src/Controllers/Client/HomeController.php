<?php
namespace Nguyenvanthuong\Xuongphp\Controllers\Client;


// use Nguyenvanthuong\Xuongphp\Commons\Controller;


use Nguyenvanthuong\Xuongphp\Commons\Controller;


class HomeController extends Controller
{
    public function index(){

        $name = "DUCTV44";

        $this->renderViewClient('home', [
            'name' => $name
        ]);

        
    }
}