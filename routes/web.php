<?php

/* class EmpleadoController extends Controller { }
class TurnoController extends Controller { }
 */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;        //con esto le estas diciendo que vamos a usar estas rutas de controladores
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\VentaController;
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
Route::resource('clientes', ClienteController::class);
Route::resource('inventarios', InventarioController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('detalle_pedidos', DetallePedidoController::class);
Route::resource('ventas', VentaController::class);
