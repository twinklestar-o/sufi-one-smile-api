<?php

use App\Http\Controllers\API\AreaController;
use App\Http\Controllers\API\AssetCombinedController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\JabatanController;
use App\Http\controllers\API\TypeController;
use App\Http\Controllers\API\DropdownController;
use App\Http\Controllers\API\CollectionController;
use App\Http\Controllers\API\DealerController;
use App\Http\Controllers\API\DirectVisitController;
use App\Http\Controllers\API\JabatanSFIController;
use App\Http\Controllers\API\MsAssetBranchController;
use App\Http\Controllers\API\BranchController;
use App\Http\Controllers\API\DamsController;
use App\Http\Controllers\API\DamsListMasterController;
use App\Http\Controllers\API\purposeController;
use Database\Seeders\JabatanSeeder;
use Database\Seeder\TypeSeeder;
use App\Http\Controllers\API\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);
Route::get("profile/{id}", [UserController::class, "profile"]);
Route::get("jabatan", [JabatanController::class, "allJabatan"]);
Route::get("type", [TypeController::class, "allType"]); 
Route::get("collection", [CollectionController::class, "allCollection"]);
Route::get("purpose", [purposeController::class, "purpose"]);
Route::get("product", [ProductController::class, "allProduct"]);
Route::post("product/add", [ProductController::class, "addProduct"]);
Route::get("jabatansfi", [JabatanSFIController::class, "allJabatanSFI"]);
Route::put('direct-visit/{id}', [DirectVisitController::class, 'update']);


//Area
    Route::get("area", [AreaController::class, "allArea"]);
    Route::post("area/add", [AreaController::class, "addArea"]);
    Route::delete("area/delete/{name}", [AreaController::class, "deleteArea"]);

    Route::post('asset-branches/asset', [MsAssetBranchController::class, 'asset']);
    // Route::put('asset-branches/asset', [MsAssetBranchController::class, 'updateAsset']);

//Protected Routes
Route::group([
    "middleware" => ["auth:sanctum"]
], function (){
    Route::get("profile", [UserController::class, "allProfile"]);
    Route::get("logout", [AuthController::class, "logout"]);
    Route::post("change-password", [AuthController::class, "changePassword"]);
    Route::post("collection/add", [CollectionController::class, "addCollection"]);
    Route::post("jabatan/add", [JabatanController::class, "addJabatan"]);
    Route::post("type/add", [TypeController::class, "addType"]);
    Route::post("purpose/add", [purposeController::class, "addpurpose"]);
    Route::post("jabatansfi/add", [JabatanSFIController::class, "addJabatanSFI"]);

    Route::post('direct-visit', [DirectVisitController::class,'store']);
    Route::get('direct-visit/planning', [DirectVisitController::class,'showTaskVisitPlanning']);
    Route::get('direct-visit/history', [DirectVisitController::class,'showTaskVisitHistory']);

    Route::put('asset-branches', [MsAssetBranchController::class, 'updateAsset']);
    Route::get('asset-branches', [MsAssetBranchController::class, 'allHistoryStockOpname']);
    Route::get('asset-branches/{id}', [MsAssetBranchController::class, 'getStockDetail']);
    Route::put('asset-branches/update/{id}', [MsAssetBranchController::class, 'updateHistoryStockOpname']);

    // List Master DAMS
    Route::get('status-asset', [DamsListMasterController::class, 'allStatusAsset']);
    Route::get('kondisi-asset', [DamsListMasterController::class, 'allKondisiAsset']);
    Route::get('status-user-asset', [DamsListMasterController::class, 'allStatusUserAsset']);
    Route::get('posisi-user', [DamsListMasterController::class, 'allPosisiUser']);
    Route::get('divisi-user', [DamsListMasterController::class, 'allDivisiUser']);
    Route::get('lokasi-user', [DamsListMasterController::class, 'allLokasiUser']);
    Route::get('lantai-user', [DamsListMasterController::class, 'allLantaiUser']);
    
});


Route::get('areas',     [DropdownController::class,'areas']);
Route::get('branch',     [BranchController::class,'allBranch']);
Route::get('branches',     [DropdownController::class,'branches']);
Route::get('products',  [DropdownController::class,'products']);
Route::get('dealer',   [DropdownController::class,'dealers']);
Route::get('dealers',   [DealerController::class,'allDealer']);
Route::post('dealers/add',   [DealerController::class,'addDealer']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('areas', [DropdownController::class, 'areas']);
    Route::get('branches', [DropdownController::class, 'branches']);
    Route::get('products', [DropdownController::class, 'products']);
    Route::get('dealers', [DropdownController::class, 'dealers']);
    Route::post('direct-visit', [DirectVisitController::class, 'store']);
});