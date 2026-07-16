<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Models\User;

Route::get('/signup', function () {
    return view('pages.createuser');
});

Route::post('/users',[UserController::class,'store'])->name('users.store');


Route::get('/email/verify/{id}/{hash}', function ($id, $hash) {

    $user = User::findOrFail($id);

    if (! hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
        abort(403);
    }

    if (! $user->hasVerifiedEmail()) {
        $user->markEmailAsVerified();
    }

    return "Email Verified!";

})->name('verification.verify');
