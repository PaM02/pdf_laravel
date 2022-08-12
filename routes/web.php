<?php



use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
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

    return view('invoice');


});

Route::get('/invoice', function () {
    //return view('invoice');

    $pdf = PDF::loadView('invoice')
    ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
    return $pdf->download('invoice.pdf');




});

Route::get('/invoice-pdf', function () {
    // return view('invoice-pdf');
    $pdf = PDF::loadView('invoice-pdf')
    ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
    return $pdf->download('invoice-pdf.pdf');


});
