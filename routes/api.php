<?php



use App\Http\Controllers\CustomerController;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use App\DTO\CustomerDTO;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customers', function ():JsonResponse{
    $customerCollection = new CustomerController();
    $CollectionList =  $customerCollection->getAllCustomers(); // gettype ->  "collectionClass": "App\\DTO\\Customer"
    $CustomerDTO_Array = $CollectionList->get(); // An array of CustomerDTO
    $CustomerDTO = $CustomerDTO_Array[0]; // Grab the first CustomerDTO

   // $CustomerDTO->name
  //  $CustomerDTO->email
  //  $CustomerDTO->address

    return response()->json($CustomerDTO->address);
});
