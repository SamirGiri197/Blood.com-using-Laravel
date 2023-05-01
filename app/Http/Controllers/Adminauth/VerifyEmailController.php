<?php

namespace App\Http\Controllers\Adminauth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Adminauth\Events\Verified;
use Illuminate\Foundation\Adminauth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->admn()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::Admin_HOME.'?verified=1');
        }

        if ($request->admin()->markEmailAsVerified()) {
            event(new Verified($request->admin()));
        }

        return redirect()->intended(RouteServiceProvider::Admin_HOME.'?verified=1');
    }
}
