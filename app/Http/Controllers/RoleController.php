<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the roles.
     */
    public function index()
    {
        $roles = Role::all();
        return view('pages.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new role.
     */
    public function create()
    {
        return view('pages.role.create');
    }

    /**
     * Store a newly created role in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Role::create([
            'name' => $request->name,
        ]);

        return redirect()->route('pages.role.index')->with('success', 'Role berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified role.
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('pages.role.edit', compact('role'));
    }

    /**
     * Update the specified role in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role = Role::findOrFail($id);
        $role->update([
            'name' => $request->name,
        ]);

        return redirect()->route('pages.role.index')->with('success', 'Role berhasil diperbarui.');
    }

    /**
     * Remove the specified role from storage.
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('pages.role.index')->with('success', 'Role berhasil dihapus.');
    }
}
