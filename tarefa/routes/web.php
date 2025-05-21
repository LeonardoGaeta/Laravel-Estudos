<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TarefaController::class, 'index']);
Route::get('create', [TarefaController::class, 'create']);
Route::post('store-data', [TarefaController::class, 'store']);

Route::get('details/{tarefa}', [TarefaController::class, 'details']);
Route::get('edit/{id}', [TarefaController::class, 'edit']);
Route::post('/update/{id}', [TarefaController::class, 'update']);

Route::get('/delete/{id}', [TarefaController::class, 'delete']);
