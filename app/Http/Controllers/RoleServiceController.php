<?php

// app/Http/Controllers/RoleServiceController.php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleServiceController extends Controller
{
    public function index()
    {
        return Role::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string',
        ]);

        return Role::create($request->all());
    }

    public function show($id)
    {
        return Role::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'role_name' => 'required|string',
        ]);

        $role = Role::findOrFail($id);
        $role->update($request->all());

        return $role;
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return $role;
    }
}

