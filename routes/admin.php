<?php
use Nguyenvanthuong\Xuongphp\Controllers\Admin\DashboardController;
use Nguyenvanthuong\Xuongphp\Controllers\Admin\ProductController;
use Nguyenvanthuong\Xuongphp\Controllers\Admin\UserController;

// CRUD bao gồm: Danh sách, thêm, sửa, xem, xóa
// User:
//      GET     -> USER/INDEX   -> INDEX          -> Danh sách
//      GET     -> USER/CREATE  -> CREATE         -> HIỂN THỊ FORM THÊM MỚI
//      POST    -> USER/STORE   -> STORE          -> LƯU DỮ LIỆU TỪ FORM THÊM MỚI VÀO DB
//      GET     -> USER/ID      -> SHOW ($id)     -> XEM CHI TIẾT
//      GET     -> USER/ID/EDIT -> EDIT ($id)     -> HIỂN THỊ FORM CẬP NHẬT
//      PUT     -> USER/ID      -> UPDATE ($id)   -> LƯU DỮ LIỆU TỪ FORM CẬP NHẬT VÀO DB
//      DELETE  -> USER/ID      -> DELETE ($id)   -> XÓA BẢNG

$router->before('GET|POST', '/admin/*.*', function() {
    if (! isset($_SESSION['user'])) {
        header('location: ' . url('login') );
        exit();
    }
}); 




$router->mount('/admin', function () use ($router) {

    // CRUD USER
    $router->get('/',               DashboardController::class . '@dashboard');
    
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');
        $router->get('/create',         UserController::class . '@create');
        $router->post('/store',         UserController::class . '@store');
        $router->get('/{id}/show',      UserController::class . '@show');
        $router->get('/{id}/edit',      UserController::class . '@edit');
        $router->post('/{id}/update',   UserController::class . '@update');
        $router->get('/{id}/delete',    UserController::class . '@delete');
    });

    $router->mount('/products', function () use ($router) {
        $router->get('/',               ProductController::class . '@index');  // Danh sách
        $router->get('/create',         ProductController::class . '@create'); // Show form thêm mới
        $router->post('/store',         ProductController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      ProductController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      ProductController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   ProductController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    ProductController::class . '@delete'); // Xóa
    });
    
    
});


// $router->mount('/admin/users', function () use ($router) {

    
//     $router->get('/',           UserController::class . '@index');
//     $router->get('/create',     UserController::class . '@create');
//     $router->post('/store',     UserController::class . '@store');
//     $router->get('/{id}',       UserController::class . '@show');
//     $router->get('/{id}/edit',  UserController::class . '@edit');
//     $router->put('/{id}',       UserController::class . '@update');
//     $router->delete('/{id}',    UserController::class . '@delete');


// });

