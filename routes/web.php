<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| Web Routes - منصة سواقني
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('HomePageCase1');
});

Route::get('/login', function () {
    return view('Home_page_login');
})->name('login');

Route::get('/admin/login', function () {
    return view('admin_login');
})->name('admin.login');

Route::get('/index', function () {
    return view('index');
});

Route::get('/register_student', function () {
    return view('register_trainee');
});
Route::get('/register/student', function () {
    return view('register_trainee');
});

Route::get('/captain_profile_setup', function () {
    return view('captain_profile_setup');
});
Route::get('/register/captain', function () {
    return view('captain_profile_setup');
});

/*
|--------------------------------------------------------------------------
| مسارات مدارس القيادة (عرض صفحة التسجيل + استقبال البيانات + لوحة الدخول)
|--------------------------------------------------------------------------
*/

// مسار عرض صفحة إنشاء حساب مدرسة جديد (GET)
Route::get('/register_school', function () {
    return view('register-school');
});
Route::get('/register/school', function () {
    return view('register-school');
});

// مسار استقبال بيانات التسجيل وتحويل المستخدم فوراً للوحة التحكم (POST)
Route::post('/register/school', function () {
    // يمكنك لاحقاً إضافة منطق حفظ بيانات المدرسة في قاعدة البيانات هنا
    
    // التحويل الفوري لصفحة لوحة التحكم الخاصة بالمدرسة
    return redirect('/school-dashboard');
});

// مسار تسجيل الدخول ولوحة التحكم للمدارس
Route::get('/school-dashboard', function () {
    return view('school-dashboard');
});

Route::post('/send-message', [ChatController::class, 'sendMessage']);

Route::get('/{page}', function ($page) {
    $cleanPage = str_replace('.html', '', $page);

    $fileNameOnly   = basename($cleanPage);                     
    $underscorePath = str_replace('/', '_', $cleanPage);  
    $dotPath        = str_replace('/', '.', $cleanPage);  

    if (view()->exists($cleanPage)) {
        return view($cleanPage);
    } elseif (view()->exists($dotPath)) {
        return view($dotPath);
    } elseif (view()->exists($underscorePath)) {
        return view($underscorePath);
    } elseif (view()->exists($fileNameOnly)) {
        return view($fileNameOnly);
    }

    abort(404);
})->where('page', '.*');