<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [BookController::class, 'index'])
    ->name('home');

Route::view('add', "books.add")
    ->name('books.addForm');
Route::post('add', [BookController::class, 'addBook'])
    ->name('books.addRequest');

Route::get('edit/{id}', [BookController::class, 'renderFormEditBook'])
    ->where(['id' => '[0-9]+'])
    ->name('books.editForm');
Route::post('edit/{id}', [BookController::class, 'editBook'])
    ->where(['id' => '[0-9]+'])
    ->name('books.editRequest');

Route::get('del/{id}', [BookController::class, 'renderFormDelBook'])
    ->where(['id' => '[0-9]+'])
    ->name('books.delForm');
Route::post('del/{id}', [BookController::class, 'delBook'])
    ->where(['id' => '[0-9]+'])
    ->name('books.delRequest');

Route::group(
    [
        'prefix' => 'users'
    ],
    function () {
        Route::get('/', [UserController::class, 'index'])
            ->name('users');

        Route::view('add', 'users.add')
           ->name('users.addForm');
        Route::post('add', [UserController::class, 'addUser'])
            ->name('users.addRequest');

        Route::get('{id}', [UserController::class, 'renderUser'])
            ->where(['id' => '[0-9]+'])
            ->name('users.editForm');
        Route::post('{id}/name', [UserController::class, 'editUser'])
            ->where(['id' => '[0-9]+'])
            ->name('users.editRequest');

        Route::get('{id}/books', [UserController::class, 'renderBooks'])
            ->where(['id' => '[0-9]+'])
            ->name('users.userBooks');
        Route::post('{id}/books', [UserController::class, 'bindBook'])
            ->where(['id' => '[0-9]+'])
            ->name('users.bundBook');
        Route::post('{id}/return', [UserController::class, 'returnBook'])
            ->where(['id' => '[0-9]+'])
            ->name('users.returnBook');

        Route::get('del/{id}', [UserController::class, 'renderFormDelUser'])
            ->where(['id' => '[0-9]+'])
            ->name('users.delForm');
        Route::post('del/{id}', [UserController::class, 'delUser'])
            ->where(['id' => '[0-9]+'])
            ->name('users.delRequest');
    }
);
Route::group(
    [
        'prefix' => 'publishers'
    ],
    function () {
        Route::get('/', [PublisherController::class, 'index'])
            ->name('pub');

        Route::view('add', 'publishers.add')
            ->name('pub.addForm');
        Route::post('add', [PublisherController::class, 'addPublisher'])
            ->name('pub.addRequest');

        Route::get('{id}/bind', [PublisherController::class, 'renderFormBindPublisher'])
            ->where(['id' => '[0-9]+'])
            ->name('pub.publisherBook');
        Route::post('{id}/bind', [PublisherController::class, 'bindPublisher'])
            ->where(['id' => '[0-9]+'])
            ->name('pub.bindBook');
        Route::get('{id}/edit', [PublisherController::class, 'renderFormEditPublisher'])
            ->where(['id' => '[0-9]+'])
            ->name('pub.editForm');
        Route::post('{id}/edit', [PublisherController::class, 'editPublisher'])
            ->where(['id' => '[0-9]+'])
            ->name('pub.editRequest');

        Route::get('{id}/del', [PublisherController::class, 'renderFormDelPublisher'])
            ->where(['id' => '[0-9]+'])
            ->name('pub.delForm');
        Route::post('{id}/del', [PublisherController::class, 'delPublisher'])
            ->where(['id' => '[0-9]+'])
            ->name('pub.delRequest');
    }
);
Route::group(
    [
        'prefix' => 'sections'
    ],
    function () {
        Route::get('/', [SectionController::class, 'index'])
            ->name('sections');

        Route::view('add', 'sections.add')
            ->name('sections.addForm');
        Route::post('add', [SectionController::class, 'addSection'])
        ->name('sections.addRequest');

        Route::get('{id}/edit', [SectionController::class, 'renderFormEditSection'])
            ->where(['id' => '[0-9]+'])
            ->name('sections.editForm');
        Route::post('{id}/edit', [SectionController::class, 'editSection'])
            ->where(['id' => '[0-9]+'])
            ->name('sections.editRequest');

        Route::get('{id}/del', [SectionController::class, 'renderFormDelSection'])
            ->where(['id' => '[0-9]+'])
            ->name('sections.delForm');
        Route::post('{id}/del', [SectionController::class, 'delSection'])
            ->where(['id' => '[0-9]+'])
            ->name('sections.delRequest');

        Route::get('{id}/bind', [SectionController::class, 'renderFormBindSection'])
            ->where(['id' => '[0-9]+'])
            ->name('sections.sectionBook');
        Route::post('{id}/bind', [SectionController::class, 'bindSection'])
            ->where(['id' => '[0-9]+'])
            ->name('sections.bindBook');
    }
);

Route::post('search', [SearchController::class, 'index'])
    ->name('search');
