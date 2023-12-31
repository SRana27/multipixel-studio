<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/service',[WebsiteController::class,'service'])->name('service');
Route::get('/project',[WebsiteController::class,'project'])->name('project');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');
Route::get('/blog',[WebsiteController::class,'blog'])->name('blog');
Route::get('/team',[WebsiteController::class,'team'])->name('team');
Route::get('/client-comment',[WebsiteController::class,'comment'])->name('comment');
Route::post('/form',[ContactController::class,'contactForm'])->name('save.message');
Route::get('/service_detail/{service_id}',[ServiceController::class,'detail'])->name('detail.service');
Route::get('/video',[ServiceController::class,'video'])->name('video');
Route::get('/blog-detail/{blog_id}',[BlogController::class,'detailBlog'])->name('detail.blog');


    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function ()
    {
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
        Route::get('/messages',[ContactController::class,'contactMessage'])->name('client.message');
        Route::get('/message/{message_id}',[ContactController::class,'statusMessage'])->name('view.message');



       Route::controller(SectionController::class)->group(function()
        {
            Route::get('/add-section','addSection')->name('add.section');
            Route::post('/store-section','saveSection')->name('save.section');
            Route::get('/manage-section','manageSection')->name('manage.section');
            Route::get('/edit-section/{section_id}','editSection')->name('edit.section');
            Route::post('/update-section','updateSection')->name('update.section');
        });
       Route::controller(CarouselController::class)->group(function()
       {
           Route::get('/add-carousel','addCarousel')->name('add.carousel');
           Route::post('/store-carousel','saveCarousel')->name('save.carousel');
           Route::get('/manage-carousel','manageCarousel')->name('manage.carousel');
           Route::get('/edit-carousel/{carousel_id}','editCarousel')->name('edit.carousel');
           Route::post('/update-carousel','updateCarousel')->name('update.carousel');
           Route::get('/update-status/{carousel_id}','statusUpdate')->name('updateStatus.carousel');
           Route::post('/delete-carousel','deleteCarousel')->name('delete.carousel');
       });

        Route::controller(AboutController::class)->group(function()
        {
            Route::get('/add-about','addAbout')->name('add.about');
            Route::post('/store-about','saveAbout')->name('save.about');
            Route::get('/manage-about','manageAbout')->name('manage.about');
            Route::get('/edit-about/{about_id}','editAbout')->name('edit.about');
            Route::post('/update-about','updateAbout')->name('update.about');
            Route::post('/delete-about','deleteAbout')->name('delete.about');
        });

        Route::controller(ServiceController::class)->group(function()
        {
            Route::get('/add-service','addService')->name('add.service');
            Route::post('/store-service','saveService')->name('save.service');
            Route::get('/manage-service','manageService')->name('manage.service');
            Route::get('/edit-service/{service_id}','editService')->name('edit.service');
            Route::post('/update-service','updateService')->name('update.service');
            Route::get('/update-status-service/{service_id}','statusUpdate')->name('updateStatus.service');
            Route::post('/delete-service','deleteService')->name('delete.service');
        });

        Route::controller(TeamController::class)->group(function()
        {
            Route::get('/add-member','addMember')->name('add.member');
            Route::post('/store-member','saveMember')->name('save.member');
            Route::get('/manage-member','manageMember')->name('manage.member');
            Route::get('/edit-member/{member_id}','editMember')->name('edit.member');
            Route::post('/update-member','updateMember')->name('update.member');
            Route::post('/delete-member','deleteMember')->name('delete.member');
        });
        Route::controller(BlogController::class)->group(function()
        {
            Route::get('/add-blog','addBlog')->name('add.blog');
            Route::post('/store-blog','saveBlog')->name('save.blog');
            Route::get('/manage-blog','manageBlog')->name('manage.blog');
            Route::get('/edit-blog/{blog_id}','editBlog')->name('edit.blog');
            Route::post('/update-blog','updateBlog')->name('update.blog');
            Route::post('/delete-blog','deleteBlog')->name('delete.blog');
        });

        Route::controller(CommentController::class)->group(function()
        {
            Route::get('/add-comment','addComment')->name('add.comment');
            Route::post('/store-comment','saveComment')->name('save.comment');
            Route::get('/manage-comment','manageComment')->name('manage.comment');
            Route::get('/edit-comment/{comment_id}','editComment')->name('edit.comment');
            Route::post('/update-comment','updateComment')->name('update.comment');
            Route::get('/update-status-comment/{comment_id}','statusUpdate')->name('updateStatus.comment');
            Route::post('/delete-comment','deleteComment')->name('delete.comment');
        });


    });
