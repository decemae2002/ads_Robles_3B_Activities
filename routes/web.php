<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
 
Route::get('/students/create', function () {
    $student = new  Student();
    $student ->first_name = 'Decemae';
    $student ->last_name = 'Robles';
    $student ->email = 'decemaerobles69@gmail.com';
    $student ->save();
    return 'Student Created!';
});

Route::get('/students', function () {
    $students = Student::all();
    return $students;
});

Route::get('/students/update', function () {
    $student = Student::where('email', 'decemaerobles69@gmail.com')->first();
    $student->email = 'decemaerobles69@gmail.com';
    $student->save();
    return 'Student Updated!';
});

Route::get('/students/delete', function () {
    $student = Student::where('email', 'decemaerobles69@gmaisl.com')->first();
    $student->delete();
    return 'Student Deleted!';
});

Route::get('/courses/create', function () {
    $course = new Course();
    $course->course_name = 'Introduction to Database';
    $course->save();
    return 'Course Created'; 
});
Route::get('/course/{id}/students', function ($id){
    $course = Course::find($id);
    return $course->students;
});
?>