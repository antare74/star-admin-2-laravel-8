<?php

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
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'pages'], function () {
    Route::group(['prefix' => 'ui-features'], function () {
        Route::get('buttons', function () {
            return view('pages.ui-features.buttons');
        })->name('buttons');

        Route::get('dropdowns', function () {
            return view('pages.ui-features.dropdowns');
        })->name('dropdowns');

        Route::get('typography', function () {
            return view('pages.ui-features.typography');
        })->name('typography');

        Route::group(['prefix' => 'forms'], function () {
            Route::get('basic-elements', function () {
                return view('pages.forms.basic-elements');
            })->name('basic-elements');
        });
        Route::group(['prefix' => 'charts'], function () {
            Route::get('chartjs', function () {
                return view('pages.charts.chartjs');
            })->name('chartjs');
        });

        Route::group(['prefix' => 'tables'], function () {
            Route::get('basic-tables', function () {
                return view('pages.tables.basic-table');
            })->name('basic-tables');
        });

        Route::group(['prefix' => 'icons'], function () {
            Route::get('icons-font-awesome', function () {
                return view('pages.icons.mdi');
            })->name('mdi');
        });
        Route::get('login', function () {
            return view('pages.samples.login');
        })->name('login');
    });
});
