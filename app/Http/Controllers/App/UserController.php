<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Traits\UserTrait;
use App\Models\Coverage;
use App\Models\Hobby;
use App\Models\Process;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use UserTrait;
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('app.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::where('id', '!=', 1)->where('id', '!=', 2)->pluck('name', 'id')->toArray();
        return view('app.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $role = Role::find($request->role_id);
        if (!$role) {
            return redirect()->back()->withErrors('Rol not found.');
        }

        $user = $this->createUser($request);
        $user->assignRole($role->name);

        $this->createUserProfile($user->id, $request);

        return redirect()->route('app.users.index')->with(
            'success',
            'User created successfully'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('app.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::where('id', '!=', 1)->where('id', '!=', 2)->pluck('name', 'id')->toArray();

        return view('app.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $role = Role::find($request->role_id);
        if (!$role) {
            return redirect()->back()->withErrors('Rol not found.');
        }
        $user = User::findOrFail($id);
        $this->updateUser($request, $id);
        $user->syncRoles([$role->name]);
        $this->updateUserProfile($user->id, $request);

        return redirect()->route('app.users.index')->with(
            'success',
            'User updated successfully'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('app.users.index')->with(
            'success',
            'User deleted successfully'
        );
    }
}
