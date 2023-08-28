<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $user = auth()->user();
        $loginHistory = $user->logins;

        return view('admin.dashboard', compact('loginHistory'));
    }
    public function listarUsuarios()
    {

        $users = User::with('logins')->get(); // Carrega os registros de login relacionados
        return view('admin.listar-usuarios', compact('users'));
    }
}
