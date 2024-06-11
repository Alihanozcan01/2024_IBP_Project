<?php
use App\Models\Message;
use App\Http\Controllers\Director;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Route::middleware('auth')->group(function () {
    Route::get('/admin/panel', function () {
        return view('admin_panel');
    })->name('admin_panel');

    Route::get('/User/panel', function () {
        $userId = 1;
        $messages = Message::where(function ($query) use ($userId) {
            $query->where('sender_id', Auth::id())->where('receiver_id', $userId);
        })->orWhere(function ($query) use ($userId) {
            $query->where('sender_id', $userId)->where('receiver_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();

        return view('kullanici_panel', compact('messages'));
    })->name('user_panel');
});
Route::get('/home', [Director::class, 'home'])->name('home');
Route::get('/login', [Director::class, 'login'])->name('login');
Route::post('/login', [Director::class, 'loginPost'])->name('login.post');
Route::get('/registration', [Director::class, 'registration'])->name('registration');
Route::post('/registration', [Director::class, 'registrationPost'])->name('registration.post');
Route::get('/forgot_my_password', [Director::class, 'forgot_my_password'])->name('forgot_my_password');
Route::post('/forgot_my_password', [Director::class, 'forgot_my_passwordPost'])->name('forgot_my_password.post');
Route::get('/logout', [Director::class, 'logout'])->name('logout');
Route::get('/addUser', [Director::class, 'addUser'])->name('addUser');
Route::post('/addUser', [Director::class, 'addUserPost'])->name('addUser.post');
Route::get('/Userupdate', [Director::class, 'updateUser'])->name('updateUser');
Route::post('/Userupdate', [Director::class, 'updateUserPost'])->name('updateUser.post');
Route::get('/deleteUser', [Director::class, 'deleteUser'])->name('deleteUser');
Route::post('/deleteUser', [Director::class, 'deleteUserPost'])->name('deleteUser.post');
Route::get('/showallUsers', [Director::class, 'showAllUsers'])->name('showAllUsers');
Route::get('/addShop', [Director::class, 'addShop'])->name('addShop');
Route::post('/addShop', [Director::class, 'addShopPost'])->name('addShop.post');
Route::get('/Shopupdate', [Director::class, 'updateShop'])->name('updateShop');
Route::post('/Shopupdate', [Director::class, 'updateShopPost'])->name('updateShop.post');
Route::get('/deleteShop', [Director::class, 'deleteShop'])->name('deleteShop');
Route::post('/deleteShop', [Director::class, 'deleteShopPost'])->name('deleteShop.post');
Route::get('/showallShops', [Director::class, 'showAllShops'])->name('showAllShops');
Route::get('/addReport', [Director::class, 'addReport'])->name('addReport');
Route::post('/addReport', [Director::class, 'addReportPost'])->name('addReport.post');
Route::get('/editlastReport', [Director::class, 'editLastReport'])->name('editLastReport');
Route::post('/editlastReport', [Director::class, 'editLastReportPost'])->name('editLastReport.post');
Route::get('/showallReports', [Director::class, 'showAllReports'])->name('showAllReports');
Route::get('/messages', [Director::class, 'messages'])->name('messages');
Route::post('/messages', [Director::class, 'messagesPost'])->name('messages.post');
Route::get('/chat', [Director::class, 'messageChat'])->name('messageChat');
Route::post('/chat', [Director::class, 'messageChatPost'])->name('messageChat.post');
Route::post('/homechat', [Director::class, 'messageChatHomePost'])->name('messageChatHome.post');
Route::get('/usermessages', [Director::class, 'usermessages'])->name('usermessages');
Route::post('/usermessages', [Director::class, 'usermessagesPost'])->name('usermessages.post');
// Route::get('/userchat', [Director::class, 'usermessageChat'])->name('usermessageChat');
// Route::post('/userchat', [Director::class, 'usermessageChatPost'])->name('usermessageChat.post');
Route::get('/usershowallReports', [Director::class, 'usershowAllReports'])->name('usershowAllReports');
Route::get('/userchat', [Director::class, 'userChat'])->name('userChat');
Route::post('/userchat', [Director::class, 'userChatPost'])->name('userChatPost.post');
Route::get('/duyurular', [Director::class, 'userReports'])->name('userReports');
Route::post('/duyurular', [Director::class, 'userReportsPost'])->name('userReports.post');
