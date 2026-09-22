<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return redirect()->route('tickets.index');
});

<<<<<<< HEAD
Route::get('/tickets', [TicketController::class, 'index'])
    ->name('tickets.index');

Route::get('/tickets/create', [TicketController::class, 'create'])
    ->name('tickets.create');

Route::post('/tickets', [TicketController::class, 'store'])
    ->name('tickets.store');

Route::get('/tickets/{ticket}/edit', [TicketController::class, 'edit'])
    ->name('tickets.edit');

Route::put('/tickets/{ticket}', [TicketController::class, 'update'])
    ->name('tickets.update');

Route::patch('/tickets/{ticket}/status', [TicketController::class, 'status'])
    ->name('tickets.status');

Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy'])
    ->name('tickets.destroy');
=======
Route::resource('tickets', TicketController::class);

    
>>>>>>> d788b7efdef19113aba295f277e4b4d011d824a0
