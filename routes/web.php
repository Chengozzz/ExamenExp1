<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function () {
    
    //Tomar de ejemplo el sigeco para establecer que metodos permitira las tareas 
    Route::get('/tareas', [TareasController::class, 'index'])->name('tareas/index');
    Route::get('/tareas/create', [TareasController::class, 'create'])->name('tareas/create');
    Route::post('/tareas/save', [TareasController::class, 'save'])->name('tareas/save');
    Route::get('/tareas/edit/{id}', [TareasController::class, 'edit'])->name('tareas/edit');
    Route::put('/tareas/edit/{id}', [TareasController::class, 'update'])->name('tareas/update');
    Route::get('/tareas/delete/{id}', [tareasController::class, 'delete'])->name('tareas/delete');

   // Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
    // Route::get('/admin/products/buscar', [ProductController::class, 'buscar'])->name('admin/products/buscar');
});
require __DIR__.'/auth.php';
