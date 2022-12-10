<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Role;
use App\Models\User;

class UserController extends Controller
{

    /*
    Client ID: 3
    Client secret: qCV3HTJTGWr1xVj2vocHmMWTojcc3VfAc9xU2Sxn
    */

    const DEFAULT_PASSWORD = '123456789';

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $users = User::with(['Role'])->get();
        $roles = Role::all();

        // vista return
        return view('user.index', ['users' => $users, 'roles' => $roles]);
    }

    protected function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'role_id' => ['required', 'integer'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make(self::DEFAULT_PASSWORD),
        ]);

        return redirect('/user');
    }

    public function actionEdit($id)
    {
        $user = User::find($id);
        //dd($user);
        $roles = Role::all();

        if (empty($user)) {
            return redirect('/user');
        }

        return view('/user.edit', ['user' => $user, 'roles' => $roles]);
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'role_id' => ['required', 'integer'],
        ]);

        $user = User::find($id);

        if (empty($user)) {
            return redirect('/user');
        }

        $user->name = $request->name;
        $user->role_id = $request->role_id;

        $user->save();

        return redirect('/user');
    }
}
