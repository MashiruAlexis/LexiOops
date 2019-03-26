<?php
use App\Controller\Kernel\Routes as Route;

Route::post('test', 'test@index');
Route::get('test', 'test@index');

print_r(Route::getUrls());