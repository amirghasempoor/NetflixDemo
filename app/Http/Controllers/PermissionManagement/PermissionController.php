<?php

namespace App\Http\Controllers\PermissionManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\StoreRequest;
use App\Http\Requests\Permission\UpdateRequest;
use App\Http\Resources\PermissionResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(PermissionResource::collection(Permission::all()));
    }

    /**
     * Store a newly created resource in storage.
     * @throws \Throwable
     */
    public function store(StoreRequest $request): JsonResponse
    {
        try
        {
            Permission::create([
                'name' => $request->name
            ]);

            return response()->json([
                'message' => 'created successfully',
            ], 200);

        }
        catch (\Throwable $th)
        {
            Log::error($th->getMessage());

            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission): JsonResponse
    {
        return response()->json([
            'permission' => $permission
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     * @throws \Throwable
     */
    public function update(UpdateRequest $request, Permission $permission): JsonResponse
    {
        try
        {
            $permission->update($request->all());

            return response()->json([
                'message' => 'updated successfully'
            ], 200);

        }
        catch (\Throwable $th)
        {
            Log::error($th->getMessage());

            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     * @throws \Throwable
     */
    public function destroy(Permission $permission): JsonResponse
    {
        try
        {
            $permission->delete();

            return response()->json([
                'message' => 'deleted successfully'
            ], 200);

        }
        catch (\Throwable $th)
        {
            Log::error($th->getMessage());

            throw $th;
        }
    }
}
