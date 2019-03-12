<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/contact', function (){
//   returnb "contact";
//});
//Route::get('/aboutus', function (){
//    return "aboutus";
//});
//
//Route::get('/post/{id}/{name}', function ($id , $name){
//    return "شماره صفحه برابر است با :" ." " . $id ." "."$name";
//});

////Route::get('/admin/post/example', function (){
//   $url = Route('admin');
//   return "این صفحه برای ادمین می باشد و url=" . $url;
//})->name('admin');

//Route::get('/admin', function (){
//    return "این صفحه برای ورود admin می باشد";
//});

//Route::redirect('/admin/post' , '/admin/post/example' , 301);

//Route::prefix('user')->group(function (){
//   Route::get('/post', function (){
//       return "صفحه ادمین ";
//   });
//   Route::get('/login', function (){
//       return "صفحه لاگین";
//   });
//});

//Route::get('/posts/{id}' , 'PostsController@myView');
//Route::get('/contact', 'PostsController@contact');
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/insert','PostsController@insert');
//Route::get('/select' , 'Postscontroller@select');
//Route::get('update', 'PostsController@updatepost');
//Route::get('delete', 'PostsController@deletepost');

//Route::get('modelpost', 'PostsController@getallposts');
//Route::get('save-post', 'PostsController@savePost');
//Route::get('update-post', 'PostsController@newupdatePost');
//Route::get('delete-post', 'PostsController@newDeletePost');
//Route::get('date-trash', 'PostsController@withworktrash');
//Route::get('restor-post', 'PostsController@restorPost');
//Route::get('force-delete-post', 'PostsController@forceDeletePost');

//Route::get('user/{id}/post', function () {
//    $user_post = \App\User::find(1)->post;
//    return $user_post;
//});
//Route::get('post/{id}/user', function ($id){
//   $post_user = \App\Post::find($id)->user;
//   return $post_user;
//});

//Route::get('user/{id}/posts', function ($id) {
//    $user_posts = \App\User::find($id)->posts;
//    foreach ($user_posts as $post){
//        echo $post->title;
//        echo "</br>";
//    }
//
//    Route::get('user/{id}/roles', function ($id) {
//        $user = \App\User::find($id);
//        foreach ($user->roles as $role){
//            echo $role->name;
//            echo "</br>";
//    };
//
//});
//Route::get('/user/pivot', function () {
//    $user = \App\User::find(1);
//    foreach ($user->roles as $role){
//        return $role->pivot->created_at;
//    }
//});
//
//Route::get('user/country', function () {
//    $country = \App\Country::find(1);
//    foreach ($country->posts as $post){
//        echo $post->title;
//        echo "</br>";
//    }
//});
//Route::get('user/photos', function () {
//    $user = \App\User::find(1);
//    foreach ($user->photos as $photo){
//        echo $photo->path;
//        echo "</br>";
//    }
//});
//Route::get('post/photos', function () {
//    $post = \App\Post::find(2);
//    foreach ($post->photos as $photo){
//        echo $photo->path;
//        echo "</br>";
//    }
//});
//Route::get('photo/{id}/post', function ($id) {
//    $photo = \App\Photo::find($id);
//    return $photo->imageable;
//});
//
//Route::get('post/tags', function () {
//    $post = \App\Post::find(2);
//    foreach ($post->tags as $tag);
//    echo $tag->name;
//});

//Route::get('create', function () {
//    $user = \App\User::find(1);
//    $post = new App\Post();
//    $post->title = 'New Post';
//    $post->content = 'New Content';
//    $user->posts()->save($post);
//});
//Route::get('read', function () {
//    $user = \App\User::find(1);
//    foreach ($user->posts as $post){
//        echo $post->title;
//        echo "</br>";
//    }
//});
//Route::get('update', function () {
//    $user= \App\User::find(1);
//    $user->posts()->Where('id',10)->update(['title' => 'آپدیت پست از Crud', 'content' => 'بروزرساتی توضیحات']);
//});
//Route::get('delete', function () {
//    $user = \App\User::find(1);
//    $user->posts()->where('id',10)->delete();
//});
//
//Route::get('create', function () {
//    $user = \App\User::find(1);
//    $role = new App\Role();
//    $role->name = 'نویسنده';
//    $user->roles()->save($role);
//});
//Route::get('read', function () {
//    $user = \App\User::find(1);
//    foreach ($user->roles as $role){
//        echo $role->name;
//        echo "</br>";
//    }
//});
//Route::get('update', function () {
//    $user = \App\User::find(1);
//    if ($user->has('roles')){
//        foreach ($user->roles as $role){
//            if ($role->name == 'Aouthor'){
//                $role->name = 'نویسنده';
//                $role->save();
//            }
//        }
//    }
//});
//Route::get('delete', function () {
//    $user = \App\User::find(1);
//    if ($user->has('roles')){
//        foreach ($user->roles as $role){
//            if ($role->name == 'نویسنده'){
//                $role->delete();
//            }
//        }
//    }
//});
//Route::get('detach', function () {
//    $user = \App\User::find(1);
//    $user->roles()->detach(1);
//});
//Route::get('attach', function () {
//    $user = \App\User::find(1);
//    $user->roles()->attach(1);
//});
//Route::get('sync', function () {
//    $user = \App\User::find(1);
//    $user->roles()->sync([1,2,3]);
//});
//Route::get('create', function () {
//    $video = \App\Video::find(1);
//    $video->tags()->create(['name'=>'morph video']);
//});
//Route::get('read', function () {
//    $video = \App\Video::find(1);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo "</br>";
//    }
//});
//Route::get('update', function () {
//    $video = \App\Video::find(1);
//    $tag =$video->tags;
//    $newtag =$tag->where('id',3)->first();
//    $newtag->name = 'تگ جدید';
//    $newtag->save();
//});
//Route::get('delete', function () {
//    $video = \App\Video::find(1);
//    $tag = $video->tags;
//    $deletetag = $tag->where('id',3)->first();
//    $deletetag->delete();
//});
//Route::get('detach', function () {
//    $video = \App\Video::find(1);
//    $video->tags()->detach();
//});
//Route::get('attach', function () {
//    $video = \App\Video::find(1);
//    $video->tags()->attach(1);
//});
//Route::get('sync', function () {
//    $video = \App\Video::find(1);
//    $video->tags()->sync([2]);
//});


Route::get('file', function () {
    //$file = \Illuminate\Support\Facades\Storage::disk('public')->get('images/kqN9fzTui2ABH3GKkzlEODGJCrq0BtavLLid3TTD.jpeg');
    //echo \Illuminate\Support\Facades\Storage::Url('images/kqN9fzTui2ABH3GKkzlEODGJCrq0BtavLLid3TTD.jpeg');
    //echo storage_path('images/kqN9fzTui2ABH3GKkzlEODGJCrq0BtavLLid3TTD.jpeg');
    //return \Illuminate\Support\Facades\Storage::disk('files')->download('Penguins.jpg');
    //\Illuminate\Support\Facades\Storage::copy('/images/kqN9fzTui2ABH3GKkzlEODGJCrq0BtavLLid3TTD.jpeg', '/photos/kqN9fzTui2ABH3GKkzlEODGJCrq0BtavLLid3TTD.jpeg');
});



Auth::routes(['verify'=>true]);


Route::middleware(['auth','verified'])->group(function (){
    Route::get('/home','HomeController@index')->name('home');
    Route::resource('/posts','PostsController');
    Route::get('/');
});

//Route::get('/', function () {
//    $user = Auth::user();
//    $id = Auth::id();
//    if (Auth::check()) {
//        echo "Hello:" . $user->name;
//        echo "</br>";
//        echo "user id:" . $id;
//    }else
//        {
//            return redirect()->to('home');
////        }
//     $email = 'morteza@yahoo.com';
//     $password = '12345678';
//     //$auth = Auth::attempt(['email'=>$email , 'password'=>$password]);
//    $auth = Auth::once(['email'=>$email , 'password'=>$password]);
//     dd($auth);
//    $main_user = \App\User::findOrFail(3);
//    $user = Auth::login($main_user);
//    dd($user);
//});

Route::get('/admin', function () {
    echo "hello is Admin page";
})->middleware('isAdmin:مدیر');

Route::get('sesion', function (Request $request) {
    //$request->session()->put(["username"=>"morteza"]);
    //session(['email'=>'morteza.oboudi']);
    //$request->session()->forget('username');
    $request->session()->keep('message');
    return $request->session()->all();
});
Route::prefix('fa')->group(function (){
   \Illuminate\Support\Facades\App::setLocale('fa');
//    $locale = \Illuminate\Support\Facades\App::getLocale();
//    if (\Illuminate\Support\Facades\App::isLocale('fa')){
//        dd("زبان فارسی شد");
   // }
    Route::get('message', function () {
        return view('messages');
    });
});
