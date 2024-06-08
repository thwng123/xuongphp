<?php
namespace Nguyenvanthuong\Xuongphp\Controllers\Client;


// use Nguyenvanthuong\Xuongphp\Commons\Controller;


use Nguyenvanthuong\Xuongphp\Commons\Controller;
use Nguyenvanthuong\Xuongphp\Commons\Helper;
use Nguyenvanthuong\Xuongphp\Models\Product;


class HomeController extends Controller
{
    private Product $product;

    public function __construct(){
        $this->product = new Product();
    }
    public function index(){

        // $name = "DUCTV44";

        // $products = $this->product->all();


        // $this->renderViewClient('home', [
        //     'name' => $name,
        //     'products' => $products
        // ]);
        [$products , $totalPage] = $this->product->paginate($_GET['page'] ?? 1 );

        $this->renderViewClient('home', [
            'products' => $products,
            'totalPage' => $totalPage,
            'page' => $_GET['page'] ?? 1,
        ]);

        
    }
}