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
    $pages = ['Characters', 'Comics', 'Movie', 'TV', 'Games', 'Collectibles', 'Videos', 'Fans', 'News', 'Shop'];
    $comics = config('comics');
    $banners = [
        [
            'image' => 'buy-comics-digital-comics.png',
            'text' => 'Digital Comics',
        ],
        [
            'image' => 'buy-comics-merchandise.png',
            'text' => 'DC MERCHANDISE',
        ],
        [
            'image' => 'buy-comics-subscriptions.png',
            'text' => 'SUBSCRIPTION',
        ],
        [
            'image' => 'buy-comics-shop-locator.png',
            'text' => 'COMIC SHOP LOCATOR',
        ],
        [
            'image' => 'buy-dc-power-visa.svg',
            'text' => 'DC POWER VISA',
        ]
    ];
    return view('home', compact('pages', 'comics', 'banners'));
})->name('home');