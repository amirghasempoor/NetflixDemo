<?php

namespace App\Http\Controllers\RoleManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdateRequest;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'roles' => Role::with('permissions')->get()
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {

            $role = Role::create([
                'name' => $request->name
            ]);

            $role->givePermissionTo($request->permission_id);

            return response()->json([
                'message' => 'created successfully',
            ], 200);

        } catch (\Throwable $th) {

            Log::error($th->getMessage());

            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return response()->json([
            'role' => $role->load('permissions'),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Role $role)
    {
        try {

            $role->update([
                'name' => $request->name
            ]);

            $role->syncPermissions($request->permission_id);

            return response()->json([
                'message' => 'updated successfully'
            ], 200);

        } catch (\Throwable $th) {

            Log::error($th->getMessage());

            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        try {

            $role->syncPermissions([]);

            $role->delete();

            return response()->json([
                'message' => 'deleted successfully'
            ], 200);

        } catch (\Throwable $th) {

            Log::error($th->getMessage());

            throw $th;
        }
    }
}
