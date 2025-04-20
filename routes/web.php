<?php

use App\Http\Controllers\admin\ClassDataController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\MaterialDataController;
use App\Http\Controllers\admin\ReportCardDataController;
use App\Http\Controllers\admin\SppDataController;
use App\Http\Controllers\Admin\StudentDataController;
use App\Http\Controllers\admin\TeacherDataController;
use App\Http\Controllers\ClassDeeniyatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentSppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\student\DashboardController as StudentDashboardController;
use App\Http\Controllers\student\ReportCardDataController as StudentReportCardDataController;
use App\Http\Controllers\student\SppDataController as StudentSppDataController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\teacher\DashboardController as TeacherDashboardController;
use App\Http\Controllers\teacher\ReportCardDataController as TeacherReportCardDataController;
use App\Http\Controllers\teacher\StudentDataController as TeacherStudentDataController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\admin\Dashboard;
use App\Models\ClassDeeniyat;
use App\Models\Login;
use App\Models\Role;
use App\Models\Student;
use App\Models\teacher\ReportCardData;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    $user = Auth::user();

    if ($user->role == 'admin') {
        return redirect('/admin/dashboard');
    } elseif ($user->role == 'student') {
        return redirect('/student/dashboard');
    } elseif ($user->role == 'teacher') {
        return redirect('/teacher/dashboard');
    } else {
        Auth::logout();
        return redirect('/')->withErrors('Role pengguna tidak dikenali.');
    }
});

Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [SesiController::class, 'logout']);
    Route::post('/logout',[SesiController::class, 'logout'])->name('logout');
});





// admin
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/student-data', [StudentDataController::class, 'index'])->name('admin.studentdata');
Route::get('/admin/student-data/create', [StudentDataController::class, 'create']);
Route::resource('/admin/studentdata', StudentDataController::class)->names('studentdata');



Route::post('/admin/student-data/create', [StudentDataController::class, 'create']);
Route::put('/admin/student-data/updated{id}', [StudentDataController::class, 'update']);
Route::delete('/admin/student-data/delete{id}', [StudentDataController::class, 'destroy']);

Route::get('/admin/class-data', [ClassDataController::class, 'index'])->name('admin.classdata.classdata');
Route::get('/admin/classdata/create', [ClassDataController::class, 'create']);
Route::resource('/admin/classdata', ClassDataController::class)->names('classdata');
Route::get('/admin/classdata/{id}/students', [ClassDataController::class, 'showStudents'])->name('classdata.students');



Route::post('/admin/class-data/create', [ClassDataController::class, 'create']);
Route::put('/admin/class-data/updated{id}', [ClassDataController::class, 'update']);
Route::delete('/admin/class-data/delete{id}', [ClassDataController::class, 'destroy']);

Route::get('/admin/teacher-data', [TeacherDataController::class, 'index'])->name('admin.teacherdata');
Route::get('/admin/teacherdata/create', [TeacherDataController::class, 'create']);
Route::resource('/admin/teacherdata', TeacherDataController::class)->names('teacherdata');

Route::post('/admin/teacher-data/create', [TeacherDataController::class, 'create']);
Route::put('/admin/teacher-data/updated{id}', [TeacherDataController::class, 'update']);
Route::delete('/admin/teacher-data/delete{id}', [TeacherDataController::class, 'destroy']);

Route::get('/admin/spp-data', [SppDataController::class, 'index'])->name('admin.sppdata');
Route::get('/admin/sppdata/create', [SppDataController::class, 'create']);
Route::resource('/admin/sppdata', SppDataController::class)->names('sppdata');

Route::post('/admin/spp-data/create', [SppDataController::class, 'create']);
Route::put('/admin/spp-data/updated{id}', [SppDataController::class, 'update']);
Route::delete('/admin/spp-data/delete{id}', [SppDataController::class, 'destroy']);

Route::get('/admin/report-card-data', [ReportCardDataController::class, 'index'])->name('admin.reportcarddata');
Route::get('/admin/reportcarddata/create', [ReportCardDataController::class, 'create']);
Route::resource('/admin/reportcarddata', ReportCardDataController::class)->names('reportcarddata');

Route::post('/admin/report-card-data/create', [ReportCardDataController::class, 'create']);
Route::put('/admin/report-card-data/updated{id}', [ReportCardDataController::class, 'update']);
Route::delete('/admin/report-card-data/delete{id}', [ReportCardDataController::class, 'destroy']);

Route::get('/admin/material-data', [MaterialDataController::class, 'index'])->name('admin.materialdata');
Route::get('/admin/materialdata/create', [MaterialDataController::class, 'create']);
Route::resource('/admin/materialdata', MaterialDataController::class)->names('materialdata');
Route::put('admin/materialdata/{materialdatum}', [MaterialDataController::class, 'update'])->name('materialdata.update');


Route::post('/admin/rmaterial-data/create', [MaterialDataController::class, 'create']);
Route::put('/admin/material-data/updated{id}', [MaterialDataController::class, 'update']);
Route::delete('/admin/material-data/delete{id}', [MaterialDataController::class, 'destroy']);

// student
Route::get('/student/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');

Route::get('/student/spp-data', [StudentSppDataController::class, 'index'])->name('student.sppdata');
Route::get('/student/sppdata/create', [StudentSppDataController::class, 'create']);
Route::resource('/student/sppdata', StudentSppDataController::class)->names('sppdata');

Route::post('/student/spp-data/create', [StudentSppDataController::class, 'create']);
Route::put('/student/spp-data/updated{id}', [StudentSppDataController::class, 'update']);
Route::delete('/student/spp-data/delete{id}', [StudentSppDataController::class, 'destroy']);

Route::get('/student/report-card-data', [StudentReportCardDataController::class, 'index'])->name('student.reportcarddata');

Route::post('/student/report-card-data/create', [StudentReportCardDataController::class, 'create']);
Route::put('/student/report-card-data/updated{id}', [StudentReportCardDataController::class, 'update']);
Route::delete('/student/report-card-data/delete{id}', [StudentReportCardDataController::class, 'destroy']);

// teacher
Route::get('/teacher/dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard');

Route::get('/teacher/student-data', [TeacherStudentDataController::class, 'index'])->name('teacher.studentdata');
Route::get('/teacher/studentdata/create', [TeacherStudentDataController::class, 'create']);
Route::resource('/teacher/studentdata', TeacherStudentDataController::class)->names('studentdata');


Route::post('/teacher/student-data/create', [TeacherStudentDataController::class, 'create']);
Route::put('/teacher/student-data/updated{id}', [TeacherStudentDataController::class, 'update']);
Route::delete('/teacher/student-data/delete{id}', [TeacherStudentDataController::class, 'destroy']);

Route::get('/teacher/report-card-data', [TeacherReportCardDataController::class, 'index'])->name('teacher.reportcarddata');
Route::get('/teacher/reportcarddata/create', [TeacherReportCardDataController::class, 'create']);
Route::resource('/teacher/reportcarddata', TeacherReportCardDataController::class)->names('reportcarddata');

Route::post('/teacher/report-card-data/create', [TeacherReportCardDataController::class, 'create']);
Route::put('/teacher/report-card-data/updated{id}', [TeacherReportCardDataController::class, 'update']);
Route::delete('/teacher/report-card-data/delete{id}', [TeacherReportCardDataController::class, 'destroy']);


//profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');



// Umum
// Route::get('/user', [UserController::class, 'index']);
// Route::post('/user/create', [UserController::class, 'create']);
// Route::put('/user/updated{id}', [UserController::class, 'update']);
// Route::delete('/user/delete{id}', [UserController::class, 'destroy']);

// Route::get('/role', [RoleController::class, 'index']);
// Route::get('/role/{id}', [RoleController::class, 'show']);
// Route::post('/role/create', [RoleController::class, 'create']);
// Route::put('/role/updated{id}', [RoleController::class, 'update']);
// Route::delete('/role/delete{id}', [RoleController::class, 'destroy']);

// Route::get('/teacher', [TeacherController::class, 'index']);
// Route::get('/teacher/{id}', [TeacherController::class, 'show']);
// Route::post('/teacher/create', [TeacherController::class, 'create']);
// Route::put('/teacher/updated{id}', [TeacherController::class, 'update']);
// Route::delete('/teacher/delete{id}', [TeacherController::class, 'destroy']); 

// Route::get('/student', [StudentController::class, 'index']);
// Route::get('/student/{id}', [StudentController::class, 'show']);
// Route::post('/student/create', [StudentController::class, 'create']);
// Route::put('/student/updated{id}', [StudentController::class, 'update']);
// Route::delete('/student/delete{id}', [StudentController::class, 'destroy']);

// Route::get('/class-deeniyat',[ClassDeeniyatController::class, 'index']);
// Route::get('/class-deeniyat/{id}', [ClassDeeniyatController::class, 'show']);
// Route::post('/class-deeniyat/create', [ClassDeeniyatController::class, 'create']);
// Route::put('/class-deeniyat/updated{id}', [ClassDeeniyatController::class, 'update']);
// Route::delete('/class-deeniyat/delete{id}', [ClassDeeniyatController::class, 'destroy']); 

// Route::get('/login', [LoginController::class, 'index']);
// Route::get('/login/{id}', [LoginController::class, 'show']);
// Route::post('/login/create', [LoginController::class, 'create']);
// Route::put('/login/updated{id}', [LoginController::class, 'update']);
// Route::delete('/login/delete{id}', [LoginController::class, 'destroy']);

// Route::get('/payment-spp', [PaymentSppController::class, 'index']);
// Route::get('/payment-spp/{id}', [PaymentSppController::class, 'show']);
// Route::post('/payment-spp/create', [PaymentSppController::class, 'create']);
// Route::put('/payment-spp/updated{id}', [PaymentSppController::class, 'update']);
// Route::delete('/payment-spp/delete{id}', [PaymentSppController::class, 'destroy']);

// Route::get('/report', [ReportController::class, 'index']);
// Route::get('/report/{id}', [ReportController::class, 'show']);
// Route::post('/report/create', [ReportController::class, 'create']);
// Route::put('/report/updated{id}', [ReportController::class, 'update']);
// Route::delete('/report/delete{id}', [ReportController::class, 'destroy']);

Route::get('/register', function () {
    return view('register');
})->name('register');
