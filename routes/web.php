<?php

declare(strict_types=1);

use App\Livewire\Backend\ProfileEditor;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Models\Player;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'player' => Player::first(),
    ]);
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('profile', ProfileEditor::class)
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
