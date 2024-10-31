<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\InvoiceController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/viewer', function () {
    return view('viewer');
});
// 添加一个路由来访问报表文件
Route::get('/reports/Invoice_green_ipa.rdlx-json', function () {
    return response()->file(resource_path('reports/Invoice_green_ipa.rdlx-json'));
});
Route::get('/api/sales', function () {
    $sales = [];
    if (($open = fopen(storage_path() . "/100 Sales Records.csv", "r")) !== FALSE) {
        $header = fgetcsv($open);
        $keys=array("region", "itemType", "unitsSold");
        while (($data = fgetcsv($open)) !== FALSE) {
            $sales[] = array_combine($keys, array($data[0], $data[2], $data[8]));
        }
        fclose($open);
    }
    return response()->json($sales);
});

//Route::apiResource('invoices', InvoiceController::class);

