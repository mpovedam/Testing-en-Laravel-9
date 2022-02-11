<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tag;
use App\Http\Controllers\TagController;
use PhpParser\Node\Expr\AssignOp\Concat;

Route::get('/', function () {

    $tags = Tag::get();

    return view('welcome', compact('tags'));
});

Route::post('tags', [TagController::class, 'store']);

Route::delete('tags/{tag}', [TagController::class, 'destroy']);



