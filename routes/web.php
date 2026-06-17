<?php

use App\Http\Controllers\BiodataController;
use App\Models\Biodata;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('biodata.create');
});

Route::get('/biodata/create', [BiodataController::class, 'create'])->name('biodata.create');
Route::post('/biodata/store', [BiodataController::class, 'store'])->name('biodata.store');
Route::get('/biodata/success/{id}', [BiodataController::class, 'success'])->name('biodata.success');
Route::get('/biodata/download/{id}', [BiodataController::class, 'downloadPdf'])->name('biodata.download');
Route::get('/biodata/view/{id}', [BiodataController::class, 'viewPdf'])->name('biodata.view');

Route::get('/test',function(){
    $id = 1;

    $biodata = Biodata::findOrFail($id);
    $lang = 'bn';
    return view('pdf.biodata-dark-navy-blue',compact('biodata','lang'));
});