<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Models\UserLogin;
use Carbon\Carbon;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $url = '';
        // dd($request->user()->role);

        if($request->user()->role === 'admin'){

            $url = '/admin/dashboard';

            // Após o usuário ter sido autenticado com sucesso
            $user = auth()->user();
            $login = new UserLogin([
                'user_id' => $user->id,
                'login_at' => Carbon::now(),
            ]);
            $login->save();

        }else if($request->user()->role === 'agent'){

            $url = '/agent/dashboard';
            $user = auth()->user();
            $login = new UserLogin([
                'user_id' => $user->id,
                'login_at' => Carbon::now(),
            ]);
            $login->save();

        }else {

            $url = '/dashboard';
            $user = auth()->user();
            $login = new UserLogin([
                'user_id' => $user->id,
                'login_at' => Carbon::now(),
            ]);
            $login->save();
        }

        return redirect()->intended($url);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
