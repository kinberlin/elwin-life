<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/notfound', function () {
    return view('customer.404');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () { 
    //visitors
    Route::get('/search', 'SearchController@index')->name('search');
    Route::get('/info-utiles', 'ClientController@infoutile')->name('info.utiles');
    Route::get('/forget-password', 'UserController@showForgetPasswordForm')->name('forget.password.get');
    Route::post('/forget-password', 'UserController@submitForgetPasswordForm')->name('forget.password.post');
    Route::get('/reset-password/{token}', 'UserController@showResetPasswordForm')->name('reset.password.get');
    Route::post('/reset-password', 'UserController@submitResetPasswordForm')->name('reset.password.post');
    Route::get('/', 'ClientController@visitor')->name('client.visitor');
    Route::get('/login', 'UserController@login')->name('client.login');
    Route::get('/reset-password', 'UserController@Auth')->name('client.passreset');
    Route::get('/shop/{name?}', 'ClientController@shop')->name('client.shop');
    Route::get('/shopdetail/{id}', 'ClientController@shopdetail')->name('client.shopdetail');
    Route::post('/login', 'UserController@authenticate')->name('client.authenticate');
    Route::get('/logout', 'UserController@logout')->name('user.logout');
    Route::get('/register', 'UserController@create')->name('client.signup');
    Route::get('/formation', 'BlogController@formations')->name('blog.formations');
    Route::get('/entrepreunariat', 'BlogController@entreprenariats')->name('blog.entreprenariats');
    Route::get('/jeux', 'BlogController@jeux')->name('blog.jeux');
    Route::get('/sante', 'BlogController@sante')->name('blog.sante');
    Route::get('/tradition', 'BlogController@tradition')->name('blog.tradition');
    Route::get('/humour', 'BlogController@humour')->name('blog.humour');
    Route::get('/fable', 'BlogController@fable')->name('blog.fable');
    Route::get('/laststep/{ref}', 'OrderController@payment_laststep')->name('order.laststep');
    Route::get('/invoice/{id}', 'OrderController@iframeshow')->name('order.invoiceiframe');
    Route::post('/flutterpay', 'OrderController@flutterpay')->name('order.flutterpay');
    Route::get('/payment/callback/{ref}', 'OrderController@handlePaymentCallback')->name('payment.callback');
    Route::get('/invoice/payment/{ref}', 'OrderController@invoice_payshow')->name('admin.invoicepay');
    Route::get('/invoice/cancel/{ref}', 'OrderController@invoice_cancel')->name('admin.invoicecancel');
    Route::get('/invoice/confirm/{ref}', 'OrderController@invoice_confirm')->name('admin.invoiceconfirm');
    Route::get('/bien-etre', 'BlogController@bien_etre')->name('blog.bien-etre');
    Route::get('/bien-nourrir', 'BlogController@bien_nourrir')->name('blog.bien-nourrir');
    Route::get('/bien-soigner', 'BlogController@bien_soigner')->name('blog.bien-soigners');
    Route::get('/art', 'BlogController@art')->name('blog.arts');
    Route::get('/musique', 'BlogController@musique')->name('blog.musiques');
    Route::get('/cinema', 'BlogController@cinema')->name('blog.cinemas');
    Route::post('/signup', 'UserController@store')->name('client.signuppost');
    Route::get('/iblog', 'BlogController@iblog')->name('client.iblog');
    Route::get('/iblog/article/{id}', 'ClientController@iblog_article')->name('client.iblog_article');
    Route::get('/iblog/video/{id}', 'ClientController@iblog_video')->name('client.iblog_video');
});
Route::group(['middleware' => ['auth', 'role:2'], 'namespace' => 'App\Http\Controllers'], function () {
    //customers
    Route::get('/csearch', 'SearchController@customerindex')->name('customer.search');
    Route::get('/dashboard', 'ClientController@dashboard')->name('client.dashboard');
    Route::get('/account', 'ClientController@account')->name('client.account');
    Route::get('/partnership', 'ClientController@partnership')->name('client.partnership');
    Route::post('/partnerships', 'ClientController@newpartnership')->name('client.newpartnership');
    Route::get('/settings', 'ClientController@settings')->name('client.settings');
    Route::post('/settings', 'ClientController@settingpost')->name('client.settingpost');
    Route::get('/channels', 'ClientController@channels')->name('client.channels');
    Route::get('/commandes', 'OrderController@index')->name('orders.index');
    Route::get('/subscribe/{id}', 'ClientController@subscribe')->name('client.suscribe');
    Route::get('/unsubscribe/{id}', 'ClientController@unsubscribe')->name('client.unsuscribe');
    Route::get('/channel/{id}', 'ClientController@channel')->name('client.channel');
    Route::get('/history', 'ClientController@history')->name('client.history');
    Route::get('/blog/article/{id}', 'ClientController@blog_article')->name('client.blog_article');
    Route::get('/blog/video/{id}', 'ClientController@blog_video')->name('client.blog_video');
    Route::get('/blog/{category?}', 'ClientController@blogc')->name('blog.blog');
    Route::get('/blog/{category?}/{page?}', 'ClientController@blogc')->name('client.blog');
    Route::get('/store', 'ClientController@prostore')->name('client.prostore');
    Route::get('/checkout', 'ShopController@checkout')->name('client.checkout');
    Route::post('/addwish', 'ShopController@addwish')->name('client.addwish');
    Route::post('/delwish', 'ShopController@delwish')->name('client.delwish');
    Route::post('/editwish', 'ShopController@editwish')->name('client.editwish');
    Route::get('/pro-detail/{id}', 'ClientController@prodetail')->name('client.pro-detail');
    Route::get('/contact', 'ContactController@create')->name('contact.create');
    Route::post('/contact', 'ContactController@store')->name('contact.store');
    Route::post('/neworder', 'OrderController@store')->name('order.store');
    Route::post('/delorder', 'OrderController@destroy')->name('order.delete');
    Route::post('/comment/video/{id}', 'CommentController@store')->name('newcomment.video');
    Route::post('/comment/article/{id}', 'CommentController@storea')->name('newcomment.aticle');
    Route::post('/comment/newproduit/{id}', 'ClientController@store')->name('newcomment.produit');
});

/**
 * Administrative roles
 */
Route::group(['middleware' => ['auth', 'role:1'], 'namespace' => 'App\Http\Controllers'], function () {
    //super admin
    Route::get('/admin/managers', 'AdminController@managers')->name('admin.managers');
    Route::post('/admin/managers/add', 'AdminController@addmanagers')->name('admin.addmanagers');
    Route::post('/admin/managers/update/{id}', 'AdminController@updatemanagers')->name('admin.updatemanagers');
    Route::get('/admin/managers/del/{id}', 'AdminController@delmanagers')->name('admin.delmanagers');
    Route::get('/admin/chat', 'ContactController@adminchat')->name('admin.chat');
    Route::get('/admin/partnership', 'AdminController@partnership')->name('admin.partnership');
    Route::post('/admin/response', 'ContactController@response')->name('admin.response');
    Route::post('/admin/upresponse', 'ContactController@upresponse')->name('admin.upresponse');
    Route::get('/admin/users', 'AdminController@clients')->name('admin.clients');
    Route::get('/admin/user/status/{id}', 'UserController@status')->name('user.status');
});
Route::group(['middleware' => ['auth', 'role:1,3,10'], 'namespace' => 'App\Http\Controllers'], function () {
    //chaîne
    Route::get('/admin/channels', 'AdminController@channels')->name('admin.channels');
    Route::post('/admin/channel', 'AdminController@channelpost')->name('admin.channelpost');
    Route::post('/admin/channel/update/{id}', 'AdminController@channelupdate')->name('admin.channelupdate');
    Route::get('/admin/channel/delete/{id}', 'AdminController@channeldelete')->name('admin.channeldelete');
    Route::get('/admin/channel/status/{id}', 'AdminController@channelstatus')->name('admin.channelstatus');
});
Route::group(['middleware' => ['auth', 'role:1,5,10'], 'namespace' => 'App\Http\Controllers'], function () {
    //article
    Route::get('/admin/blog/article', 'AdminController@blog_article')->name('admin.blog_article');
    Route::post('/admin/blog/article', 'ArticleController@store')->name('article.store');
    Route::post('/admin/blog/article/update', 'ArticleController@update')->name('article.update');
    Route::get('/admin/blog/article/delete/{id}', 'ArticleController@destroy')->name('article.delete');
        //iframes
        Route::post('/iframe/blog/article', 'ArticleController@create')->name('article.create');
        Route::post('/iframe/blog/article/update', 'ArticleController@edit')->name('article.edit');
});
Route::group(['middleware' => ['auth', 'role:1,6,10'], 'namespace' => 'App\Http\Controllers'], function () {
    //Vidéo
    Route::get('/admin/blog/video', 'AdminController@blog_video')->name('admin.blog_video');
    Route::post('/admin/blog/video', 'VideoController@store')->name('video.store');
    Route::post('/admin/blog/video/update', 'VideoController@update')->name('video.update');
    Route::get('/admin/blog/video/delete/{id}', 'VideoController@destroy')->name('video.delete');
    //iframes
    Route::post('/iframe/blog/video', 'VideoController@create')->name('video.create');
    Route::post('/iframe/blog/video/update', 'VideoController@edit')->name('video.edit');
});
Route::group(['middleware' => ['auth', 'role:1,7,9'], 'namespace' => 'App\Http\Controllers'], function () {
    //Publicités
    Route::get('/admin/pubs', 'AdminController@pubshow')->name('admin.pub');
    Route::post('/admin/newpub', 'AdminController@pub_post')->name('admin.pubpost');
    Route::get('/admin/updatepub/{id}', 'AdminController@pub_update')->name('admin.pubupdate');
    Route::get('/admin/delpub/{id}', 'AdminController@pub_delete')->name('admin.pubdelete');
    Route::get('/admin/etatpub/{id}', 'AdminController@pub_state')->name('admin.pubetat');

});
Route::group(['middleware' => ['auth', 'role:1,8,9'], 'namespace' => 'App\Http\Controllers'], function () {
    //Annonces
    Route::get('/admin/slides', 'AdminController@slideshow')->name('admin.slide');
    Route::post('/admin/newslide', 'AdminController@slide_post')->name('admin.slidepost');
    Route::post('/admin/updateslide/{id}', 'AdminController@slide_update')->name('admin.slide');
    Route::get('/admin/delslide/{id}', 'AdminController@slide_delete')->name('admin.slidedelete');
});
Route::group(['middleware' => ['auth', 'role:1,11'], 'namespace' => 'App\Http\Controllers'], function () {
    //Boutique
    Route::get('/admin/shop/categorie', 'AdminController@shopcategorie')->name('admin.shopcategorie');
    Route::post('/admin/shop/categorie', 'AdminController@shopcategorie_post')->name('admin.shopcategoriepost');
    Route::post('/admin/shop/categorie/{id}', 'AdminController@shopcategorie_update')->name('admin.shopcategorieupdate');
    Route::post('/admin/shop/categorie/delete/{id}', 'AdminController@shopcategorie_delete')->name('admin.shopcategoriedelete');
    Route::get('/admin/shop/produit', 'AdminController@shopproduit')->name('admin.shopproduit');
    Route::post('/admin/shop/produit', 'AdminController@shopproduit_post')->name('admin.shopproduitpost');
    Route::get('/admin/shop/produit/etat/{id}', 'AdminController@shopproduit_etat')->name('admin.shopproduitetat');
    Route::post('/admin/shop/produit/{id}', 'AdminController@shopproduit_update')->name('admin.shopproduitupdate');
    Route::post('/admin/shop/produit/delete/{id}', 'AdminController@shopproduit_delete')->name('admin.shopproduitdelete');
    Route::get('/admin/shop/orders', 'OrderController@create')->name('order.create');
    Route::get('/admin/shop/invoice/{id}', 'OrderController@show')->name('order.invoice');
    Route::get('/admin/shop/invoice/livrer/{id}', 'OrderController@livrer')->name('order.invoice');
    Route::post('/admin/orders/extracost/{id}', 'OrderController@extracosts')->name('order.extra');
    Route::post('/admin/shop/invoice/validate/{id}', 'OrderController@invoice_validate')->name('admin.invoicevalide');

});

Route::group(['middleware' => ['auth', 'role:1,3,4,5,6,7,8,9,10,11'], 'namespace' => 'App\Http\Controllers'], function () {
    //common administrator priviledges
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::post('/admin/info_utiles', 'InfoController@utilcreate')->name('utiles.create');
    Route::post('/admin/info_utiles/update/{id}', 'InfoController@utilupdate')->name('utiles.update');
    Route::get('/admin/info_utiles/delete/{id}', 'InfoController@utildelete')->name('utiles.delete');
    Route::get('/admin/info', 'InfoController@create')->name('info.create');
    Route::post('/admin/info/map', 'InfoController@store')->name('admin.infomap');
    Route::post('/admin/info', 'InfoController@store')->name('admin.infopost');
    Route::get('/admin/settings', 'AdminController@settings')->name('admin.settings');
    Route::post('/admin/settings', 'AdminController@settingpost')->name('admin.settings');
});