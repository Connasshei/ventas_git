<?php

/* class EmpleadoController extends Controller { }
class TurnoController extends Controller { }
 */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;        //con esto le estas diciendo que vamos a usar estas rutas de controladores
use App\Http\Controllers\TurnoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('turnos', TurnoController::class); //apuntar carpeta, poner controlador
Route::resource('empleados', EmpleadoController::class);