<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CitaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\HistorialController;
use App\Http\Controllers\Admin\HorarioController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderMenuController;
use App\Http\Controllers\Admin\PacienteController as AdminPacienteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Doctor\CitaController as DoctorCitaController;
use App\Http\Controllers\Doctor\HistorialController as DoctorHistorialController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Paciente\CitaController as PacienteCitaController;
use App\Http\Controllers\Paciente\DocumentoController;
use App\Http\Controllers\Paciente\HistorialController as PacienteHistorialController;
use App\Http\Controllers\Paciente\HorarioController as PacienteHorarioController;
use App\Http\Controllers\Paciente\PacienteController;
use App\Models\OrderMenu;
use Illuminate\Support\Facades\Route;



Route::get('/', [WelcomeController::class, 'index']);

Route::get('/categories', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [FrontendCategoryController::class, 'show'])->name('categories.show');
Route::get('/menus', [FrontendMenuController::class, 'index'])->name('menus.index');

Route::get('/reservation/step-one', [FrontendReservationController::class, 'stepOne'])->name('reservations.step.one');
Route::post('/reservation/step-one', [FrontendReservationController::class, 'storeStepOne'])->name('reservations.store.step.one');
Route::get('/reservation/step-two', [FrontendReservationController::class, 'stepTwo'])->name('reservations.step.two');
Route::post('/reservation/step-two', [FrontendReservationController::class, 'storeStepTwo'])->name('reservations.store.step.two');

Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');


Route::put('cita/{cita}/cancel', [CitaController::class, 'cancel'])->name('cita.cancel');
Route::put('cita/{cita}/approve', [CitaController::class, 'approve'])->name('cita.approve');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('admin/cita/create', [CitaController::class, 'create'])->name('admin.cita.create');
Route::get('admin/cita/{cita}/edit', [CitaController::class, 'edit'])->name('admin.cita.edit');
Route::put('admin/cita/{cita}', [CitaController::class, 'update'])->name('admin.cita.update');
Route::get('admin/cita/{cita}', [CitaController::class, 'show'])->name('admin.cita.show');
Route::resource('/reservations', ReservationController::class);
Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('paciente', AdminPacienteController::class);
    Route::resource('hospital', HospitalController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('horario', HorarioController::class);
    Route::resource('cita', CitaController::class);
    Route::resource('admin/historial', HistorialController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
    Route::resource('/orders', OrderController::class);
    Route::resource('/ordersmenu', OrderMenuController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/invoices', InvoiceController::class);
});

Route::middleware(['auth'])->name('paciente.')->prefix('paciente')->group(function() {
    Route::get('/', [PacienteController::class, 'index'])->name('index');
    // Rutas para Historiales Médicos
    Route::resource('historial', PacienteHistorialController::class);
    // Rutas para Citas Médicas
    Route::get('cita/create', [PacienteCitaController::class, 'create'])->name('cita.create');
    Route::get('cita/{cita}/edit', [PacienteCitaController::class, 'edit'])->name('cita.edit');
    Route::put('cita/{cita}', [PacienteCitaController::class, 'update'])->name('cita.update');
    Route::get('cita/{cita}', [PacienteCitaController::class, 'show'])->name('cita.show');
    Route::resource('cita', PacienteCitaController::class);
    Route::resource('documento', DocumentoController::class);
    Route::resource('horario', PacienteHorarioController::class);
    // Rutas para Perfil del Paciente
    Route::get('perfil', [PacienteController::class, 'show'])->name('perfil.show');
    Route::get('perfil/edit', [PacienteController::class, 'edit'])->name('perfil.edit');
    Route::put('perfil/update', [PacienteController::class, 'update'])->name('perfil.update');
});

Route::middleware(['auth'])->name('doctor.')->prefix('doctor')->group(function() {
    Route::get('/', [DoctorController::class, 'index'])->name('index');
    Route::resource('historial', DoctorHistorialController::class);
    Route::resource('cita', DoctorCitaController::class);
});

require __DIR__.'/auth.php';
