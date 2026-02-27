<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AnnonceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StagiaireController;

/*
{{Route::get('/home',function(){
$products=[
        ["title"=>"chfenj","price"=>300],
        ["title"=>"l7liib","price"=>200],
        ["title"=>"lkaachiir","price"=>400],
        ];
    return view("products", compact("products") )

     ;

});}}
*/



Route::post("/calculer",function(Request $request){

    $inp1= $request->input("inp1");
$inp2= $request->input("inp2");
$operation= $request->input("operation");
$resultat="";
switch ($operation) {
    case '/':
        $resultat=$inp1/$inp2;
        break;
    case '+':
    $resultat=$inp1+$inp2;
    break;
    case'*' :
        $resultat=$inp1*$inp2;
        break;
    case'-':
        $resultat=$inp1-$inp2;
        break;



}

    return view("result",compact("resultat"));


})->name("post");Route::get('/', function () {
    return view('home');})->name('home');

Route::get('/about', function () {
    return view('about');})->name('about');

Route::get('/contact', function () {
    return view('contact');})->name('contact');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');



Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');



Route::post('/account/store', [AccountController::class, 'store'])->name('account.store');

Route::get('/account/create', [AccountController::class, 'create'])->name('account.create');
Route::resource('stagiaire',StagiaireController::class);
route::get('/stagiaire/create', [StagiaireController::class, 'create'])->name('stagiaires.create');
route::post('/stagiaire/store', [StagiaireController::class, 'store'])->name('stagiaires.store');
route::get('/stagiaire', [StagiaireController::class, 'index'])->name('stagiaires.index');
route::get('/stagiaire/{id}', [StagiaireController::class, 'show'])->name('stagiaires.show');
route::get('/stagiaire/{id}/edit', [StagiaireController::class, 'edit'])->name('stagiaires.edit');
route::put('/stagiaire/{id}', [StagiaireController::class, 'update'])->name('stagiaires.update');
route::delete('/stagiaire/{id}', [StagiaireController::class, 'destroy'])->name('stagiaires.destroy');
Route::resource('annonces',     AnnonceController::class);
route::get('/annonces/create', [AnnonceController::class, 'create'])->name('annonces.create');
route::post('/annonces/store', [AnnonceController::class, 'store'])->name('annonces.store');
route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces.index');
route::get('/annonces/{id}', [AnnonceController::class, 'show'])->name('annonces.show');
route::get('/annonces/{id}/edit', [AnnonceController::class, 'edit'])->name('annonces.edit');
route::put('/annonces/{id}', [AnnonceController::class, 'update'])->name('annonces.update');
route::delete('/annonces/{id}', [AnnonceController::class, 'destroy'])->name('annonces.destroy');