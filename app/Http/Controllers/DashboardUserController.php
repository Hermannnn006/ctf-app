<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Tables\DashboardUsers;
use ProtoneMedia\Splade\Facades\Toast;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'users' => DashboardUsers::build(),
            'roles' => Role::all()
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->role_id = $request->role_id;
        $user->update();
        Toast::success('User role changed!')->autoDismiss(3);
    }

    public function destroy(User $user)
    {
        $user->delete();
        Toast::danger('User deleted!')->autoDismiss(3);
        return redirect('/dashboard/user');
    }
}
