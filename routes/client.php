<?php
use Nguyenvanthuong\Xuongphp\Controllers\Client\AboutController;
use Nguyenvanthuong\Xuongphp\Controllers\Client\CartController;
use Nguyenvanthuong\Xuongphp\Controllers\Client\ContactController;
use Nguyenvanthuong\Xuongphp\Controllers\Client\HomeController;
use Nguyenvanthuong\Xuongphp\Controllers\Client\LoginController;
use Nguyenvanthuong\Xuongphp\Controllers\Client\OrderController;
use Nguyenvanthuong\Xuongphp\Controllers\Client\ProductController;

$router->get('/',               HomeController::class       . '@index');
$router->get('/about',          AboutController::class      . '@index');

$router->get('/contact',        ContactController::class    . '@index');
$router->post('/contact/store', ContactController::class    . '@store');

$router->get('/products',       ProductController::class    . '@index');
$router->get('/products/{id}',  ProductController::class    . '@detail');


$router->get('/login',               LoginController::class    . '@showFormLogin');
$router->post( '/handle-login',     LoginController::class    . '@login');
$router->get( '/logout',            LoginController::class    . '@logout');


$router->get('cart/add',           CartController::class . '@add');
$router->get('cart/quantityInc',   CartController::class . '@quantityInc');
$router->get('cart/quantityDec',   CartController::class . '@quantityDec');
$router->get('cart/remove',        CartController::class . '@remove');
$router->get('cart/detail',        CartController::class . '@detail');

$router->post('order/checkout',     OrderController::class . '@checkout');

