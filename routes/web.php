<?php

use App\Http\Controllers\admin\ClassController;
use App\Http\Controllers\admin\ClassDataController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\MaterialController;
use App\Http\Controllers\admin\MaterialDataController;
use App\Http\Controllers\admin\PaymentSppController as AdminPaymentSppController;
use App\Http\Controllers\admin\ReportCardDataController;
use App\Http\Controllers\admin\ReportController as AdminReportController;
use App\Http\Controllers\admin\SppDataController;
use App\Http\Controllers\admin\StudentController as AdminStudentController;
use App\Http\Controllers\Admin\StudentDataController;
use App\Http\Controllers\admin\TeacherController as AdminTeacherController;
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

Route::get('/admin/student-data', [AdminStudentController::class, 'index'])->name('admin.studentdata');
Route::get('/admin/student-data/create', [AdminStudentController::class, 'create']);
Route::resource('/admin/studentdata', AdminStudentController::class)->names('studentdata');



Route::post('/admin/student-data/create', [AdminStudentController::class, 'create']);
Route::put('/admin/student-data/updated{id}', [AdminStudentController::class, 'update']);
Route::delete('/admin/student-data/delete{id}', [AdminStudentController::class, 'destroy']);


Route::get('/admin/class-data', [ClassController::class, 'index'])->name('admin.class.index');
Route::get('/admin/material-data', [MaterialController::class, 'index'])->name('admin.material.index');
Route::get('/admin/payment-spp-data', [AdminPaymentSppController::class, 'index'])->name('admin.paymentspp.index');
Route::get('/admin/report-data', [AdminReportController::class, 'index'])->name('admin.report.index');
Route::get('/admin/student-data', [AdminStudentController::class, 'index'])->name('admin.student.index');
Route::get('/admin/teacher-data', [AdminTeacherController::class, 'index'])->name('admin.teacher.index');



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

Route::get('/register', function () {
    return view('register');
})->name('register');
