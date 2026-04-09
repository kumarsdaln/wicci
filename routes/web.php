<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventItemController;
use App\Http\Controllers\Admin\InitiativeItemController;
use App\Http\Controllers\Admin\MediaItemController;
use App\Http\Controllers\Admin\ResourceItemController;
use App\Http\Controllers\Admin\SubmissionController;
use App\Http\Controllers\FormSubmissionController;
use App\Http\Controllers\PublicEventController;
use App\Http\Controllers\PublicInitiativeController;
use App\Http\Controllers\PublicMediaController;
use App\Http\Controllers\PublicResourceController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/members', 'pages.members')->name('members');
Route::get('/initiatives', [PublicInitiativeController::class, 'index'])->name('initiatives');
Route::get('/initiatives/{initiative:slug}', [PublicInitiativeController::class, 'show'])->name('initiatives.show');
Route::get('/events', [PublicEventController::class, 'index'])->name('events');
Route::get('/events/{event:slug}', [PublicEventController::class, 'show'])->name('events.show');
Route::get('/resources', [PublicResourceController::class, 'index'])->name('resources');
Route::get('/resources/{resource:slug}', [PublicResourceController::class, 'show'])->name('resources.show');
Route::get('/media', [PublicMediaController::class, 'index'])->name('media');
Route::get('/media/{media:slug}', [PublicMediaController::class, 'show'])->name('media.show');
Route::view('/join', 'pages.join')->name('join');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');

Route::post('/contact', [FormSubmissionController::class, 'submitContact'])->name('forms.contact');
Route::post('/join/membership', [FormSubmissionController::class, 'submitMembership'])->name('forms.membership');
Route::post('/join/volunteer', [FormSubmissionController::class, 'submitVolunteer'])->name('forms.volunteer');
Route::post('/events/register', [FormSubmissionController::class, 'submitEventRegistration'])->name('forms.event');
Route::post('/newsletter/subscribe', [FormSubmissionController::class, 'submitNewsletter'])->name('forms.newsletter');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn () => redirect()->route('admin.dashboard'));

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

    Route::middleware('admin.auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/resources', ResourceItemController::class)->except(['show']);
        Route::resource('/events', EventItemController::class)->except(['show']);
        Route::resource('/initiatives', InitiativeItemController::class)->except(['show']);
        Route::resource('/media', MediaItemController::class)->except(['show']);
        Route::get('/submissions', [SubmissionController::class, 'index'])->name('submissions.index');
    });
});
