<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\StudentsController;
use App\Http\Controllers\Backend\AdminAccessController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\PermissionController;


Route::get('/admin', function () {
    return view('backend.login');
})->name('admin');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', function () {
            return view('backend.index');
        })->name('dashboard');
    });

    // Permissions Routes
    Route::resource('roles', RoleController::class);
    Route::get('/roles', [RoleController::class, 'index'])->name('roles');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::resource('permissions', PermissionController::class);
    Route::get('permissions', [PermissionController::class, 'index'])->name('permission.form');
    Route::post('permissions/store', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('admin-access', [AdminAccessController::class, 'index'])->name('access.index');
    Route::post('admin-access/assign', [AdminAccessController::class, 'assign'])->name('access.assign');
    Route::get('role-permissions', [AdminAccessController::class, 'permissionToRoleForm'])->name('role.permissions.form');
    Route::post('role-permissions', [AdminAccessController::class, 'assignPermissionsToRole'])->name('role.permissions.assign');
    Route::get('/role/{id}/permissions', [AdminAccessController::class, 'getRolePermissions'])->name('admin.role.permissions.get');


    // Employee Routes
    Route::get('register', [AuthController::class, 'registerForm'])->name('register.form');
    Route::post('register', [AuthController::class, 'register'])->name('register');


    // Students Route
    Route::get('students', [StudentsController::class, 'index'])->name('students');
    Route::get('add/students/form', [StudentsController::class, 'addStudentsForm'])->name('add.students.form');
    Route::post('add/students', [StudentsController::class, 'registerStudents'])->name('add.students');
    Route::get('students/data', [StudentsController::class, 'getStudentsData'])->name('students.data');
    Route::get('/students/details/{id}', [StudentsController::class, 'studentsDetailsPage'])->name('student.details');
    Route::post('/update-student', [StudentsController::class, 'UpdateStudents'])->name('update.student');
    Route::post('/update-student-course', [StudentsController::class, 'uploadCourseDetails'])->name('update.student.course');
});
