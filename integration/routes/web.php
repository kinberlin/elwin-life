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

Route::get('/', function () {
    $liste = \App\Models\Slide::all();
    $ar = DB::select(
        'SELECT a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        where ch.etat = 1
        ORDER BY a.createdat DESC;'
    );
    $vd = DB::select(
        'SELECT v.video "cover_image", v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        where ch.etat = 1
        ORDER BY v.createdat DESC;'
    );
    $ara = collect($ar)->toArray();
    $vda = collect($vd)->toArray();
    $final = collect(array_merge($ara, $vda));
    $final = $final->shuffle();
    $final = $final->sortBy('fmt_date');

    $ch = \App\Models\Channel::where("etat", 1)->get();
    return view('customer.welcome.index', ['slide'=>$liste, 'channel'=>$ch, 'final'=>$final ]);
});
Route::get('/notfound', function () {
    return view('customer.404');
});
Route::group(['namespace' => 'App\Http\Controllers'], function () { //customers
    Route::get('/login', 'UserController@login')->name('client.login');
    Route::get('/shop', 'ClientController@shop')->name('client.shop');
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
    Route::get('/bien-etre', 'BlogController@bien_etre')->name('blog.bien-etre');
    Route::get('/bien-nourrir', 'BlogController@bien_nourrir')->name('blog.bien-nourrir');
    Route::get('/bien-soigner', 'BlogController@bien_soigner')->name('blog.bien-soigners');
    Route::get('/art', 'BlogController@art')->name('blog.arts');
    Route::get('/musique', 'BlogController@musique')->name('blog.musiques');
    Route::get('/cinema', 'BlogController@cinema')->name('blog.cinemas');
    Route::post('/signup', 'UserController@store')->name('client.signuppost');
    Route::get('/iblog', 'ClientController@iblog')->name('client.iblog');
    Route::get('/iblog/article/{id}', 'ClientController@iblog_article')->name('client.iblog_article');
    Route::get('/iblog/video/{id}', 'ClientController@iblog_video')->name('client.iblog_video');
});
Route::group(['middleware' => ['auth'], 'namespace' => 'App\Http\Controllers'], function () { //customers
    Route::get('/dashboard', 'ClientController@dashboard')->name('client.dashboard');
    Route::get('/account', 'ClientController@account')->name('client.account');
    Route::get('/partnership', 'ClientController@partnership')->name('client.partnership');
    Route::get('/settings', 'ClientController@settings')->name('client.settings');
    Route::post('/settings', 'ClientController@settingpost')->name('client.settingpost');
    Route::get('/channels', 'ClientController@channels')->name('client.channels');
    Route::get('/subscribe/{id}', 'ClientController@subscribe')->name('client.suscribe');
    Route::get('/unsubscribe/{id}', 'ClientController@unsubscribe')->name('client.unsuscribe');
    Route::get('/channel/{id}', 'ClientController@channel')->name('client.channel');
    Route::get('/history', 'ClientController@history')->name('client.history');
    Route::get('/blog', 'ClientController@blog')->name('client.blog');
    Route::get('/blog/article/{id}', 'ClientController@blog_article')->name('client.blog_article');
    Route::get('/blog/video/{id}', 'ClientController@blog_video')->name('client.blog_video');
    Route::get('/store', 'ClientController@prostore')->name('client.prostore');
    Route::get('/checkout', 'ShopController@checkout')->name('client.checkout');
    Route::post('/addwish', 'ShopController@addwish')->name('client.addwish');
    Route::post('/delwish', 'ShopController@delwish')->name('client.delwish');
    Route::post('/editwish', 'ShopController@editwish')->name('client.editwish');
    Route::get('/pro-detail/{id}', 'ClientController@prodetail')->name('client.pro-detail');
    Route::get('/contact', 'ContactController@create')->name('contact.create');
    Route::post('/contact', 'ContactController@store')->name('contact.store');
    Route::get('/comment', 'ContactController@create')->name('contact.create');
    Route::post('/comment/video/{id}', 'CommentController@store')->name('newcomment.video');
    Route::post('/comment/newarticle/{id}', 'ClientController@store')->name('newcomment.aticle');
    Route::post('/comment/newproduit/{id}', 'ClientController@store')->name('newcomment.produit');

    //administrator
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/admin/account', 'AdminController@account')->name('admin.account');
    Route::get('/admin/chat', 'ContactController@adminchat')->name('admin.chat');
    Route::post('/admin/response', 'ContactController@response')->name('admin.response');
    Route::post('/admin/upresponse', 'ContactController@upresponse')->name('admin.upresponse');
    Route::get('/admin/users', 'AdminController@clients')->name('admin.clients');
    Route::get('/admin/user/status/{id}', 'UserController@status')->name('user.status');
    Route::get('/admin/settings', 'AdminController@settings')->name('admin.settings');
    Route::post('/admin/settings', 'AdminController@settingpost')->name('admin.settingpost');
    Route::get('/admin/abonnements', 'AdminController@abonnements')->name('admin.abonnements');
    Route::get('/admin/channels', 'AdminController@channels')->name('admin.channels');
    Route::post('/admin/channel', 'AdminController@channelpost')->name('admin.channelpost');
    Route::post('/admin/channel/update/{id}', 'AdminController@channelupdate')->name('admin.channelupdate');
    Route::get('/admin/channel/delete/{id}', 'AdminController@channeldelete')->name('admin.channeldelete');
    Route::get('/admin/channel/status/{id}', 'AdminController@channelstatus')->name('admin.channelstatus');
    Route::get('/admin/channel', 'AdminController@channel')->name('admin.channel');
    Route::get('/admin/history', 'AdminController@history')->name('admin.history');
    Route::get('/admin/blog', 'AdminController@blog')->name('admin.blog');
    Route::get('/admin/blog/article', 'AdminController@blog_article')->name('admin.blog_article');
    Route::post('/admin/blog/article', 'ArticleController@store')->name('article.store');
    Route::post('/admin/blog/article/update', 'ArticleController@update')->name('article.update');
    Route::get('/admin/blog/article/delete/{id}', 'ArticleController@destroy')->name('article.delete');
    Route::get('/admin/blog/video', 'AdminController@blog_video')->name('admin.blog_video');
    Route::post('/admin/blog/video', 'VideoController@store')->name('video.store');
    Route::post('/admin/blog/video/update', 'VideoController@update')->name('video.update');
    Route::get('/admin/blog/video/delete/{id}', 'VideoController@destroy')->name('video.delete');
    Route::get('/admin/pubs', 'AdminController@pubshow')->name('admin.pub');
    Route::post('/admin/newpub', 'AdminController@pub_post')->name('admin.pubpost');
    Route::get('/admin/updatepub/{id}', 'AdminController@pub_update')->name('admin.pubupdate');
    Route::get('/admin/delpub/{id}', 'AdminController@pub_delete')->name('admin.pubdelete');
    Route::get('/admin/etatpub/{id}', 'AdminController@pub_state')->name('admin.pubetat');
    Route::get('/admin/slides', 'AdminController@slideshow')->name('admin.slide');
    Route::post('/admin/newslide', 'AdminController@slide_post')->name('admin.slidepost');
    Route::post('/admin/updateslide/{id}', 'AdminController@slide_update')->name('admin.slide');
    Route::get('/admin/delslide/{id}', 'AdminController@slide_delete')->name('admin.slidedelete');
    Route::get('/admin/shop/categorie', 'AdminController@shopcategorie')->name('admin.shopcategorie');
    Route::post('/admin/shop/categorie', 'AdminController@shopcategorie_post')->name('admin.shopcategoriepost');
    Route::post('/admin/shop/categorie/{id}', 'AdminController@shopcategorie_update')->name('admin.shopcategorieupdate');
    Route::post('/admin/shop/categorie/delete/{id}', 'AdminController@shopcategorie_delete')->name('admin.shopcategoriedelete');
    Route::get('/admin/shop/produit', 'AdminController@shopproduit')->name('admin.shopproduit');
    Route::post('/admin/shop/produit', 'AdminController@shopproduit_post')->name('admin.shopproduitpost');
    Route::get('/admin/shop/produit/etat/{id}', 'AdminController@shopproduit_etat')->name('admin.shopproduitetat');
    Route::post('/admin/shop/produit/{id}', 'AdminController@shopproduit_update')->name('admin.shopproduitupdate');
    Route::post('/admin/shop/produit/delete/{id}', 'AdminController@shopproduit_delete')->name('admin.shopproduitdelete');
    Route::get('/admin/shop-detail', 'AdminController@shopdetail')->name('admin.shop-detail');
    Route::get('/admin/contact', 'AdminController@contact')->name('admin.contact');
    Route::get('/admin/login', 'AdminController@login')->name('admin.login');
    Route::get('/admin/settings', 'AdminController@settings')->name('admin.settings');
    Route::post('/admin/login', 'AdminController@loginpost')->name('admin.loginpost');
    Route::get('/admin/register', 'AdminController@signup')->name('admin.signup');
    Route::post('/admin/signup', 'AdminController@signuppost')->name('admin.signuppost');
    //iframes
    Route::post('/iframe/blog/article', 'ArticleController@create')->name('article.create');
    Route::post('/iframe/blog/article/update', 'ArticleController@edit')->name('article.edit');
    Route::post('/iframe/blog/video', 'VideoController@create')->name('video.create');
    Route::post('/iframe/blog/video/update', 'VideoController@edit')->name('video.edit');
});