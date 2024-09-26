<?php

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(TestCase::class, RefreshDatabase::class)->in('Feature');

it('has test user', function () {
    Artisan::call('migrate');
    $this->seed();
    expect(User::where('email', 'test@example.com')->count() > 0)->toBeTrue();
});
