<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Memeriksa apakah pengguna terautentikasi
            $user = JWTAuth::parseToken()->authenticate();

            $workStatus = $request->input('work_status');
            $projectTypeId = $request->input('project_type_id');
            $contactId = $request->input('contact_id');
            $projectValue = $request->input('project_value');

            $query = Project::query();

            if ($workStatus) {
                $query->where('work_status', $workStatus);
            }

            if ($projectTypeId) {
                $query->where('project_type_id', $projectTypeId);
            }

            if ($contactId) {
                $query->where('contact_id', $contactId);
            }

            if ($projectValue) {
                $query->where('project_value', $projectValue);
            }

            $projects = $query->get();

            return response()->json(['projects' => $projects], 200);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Failed to authenticate.'], 401);
        }
    }

    public function show($id)
    {
        try {
            // Memeriksa apakah pengguna terautentikasi
            $user = JWTAuth::parseToken()->authenticate();

            $project = Project::find($id);

            if (!$project) {
                return response()->json(['error' => 'Project not found'], 404);
            }

            return response()->json(['project' => $project], 200);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Failed to authenticate.'], 401);
        }
    }

    public function store(Request $request)
    {
        try {
            // Memeriksa apakah pengguna terautentikasi
            $user = JWTAuth::parseToken()->authenticate();

            $validator = Validator::make($request->all(), [
                // Aturan validasi lengkap
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            $projectData = $request->all();
            $projectData['user_id'] = $user->id;

            $project = Project::create($projectData);

            return response()->json(['project' => $project], 201);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Failed to authenticate.'], 401);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Memeriksa apakah pengguna terautentikasi
            $user = JWTAuth::parseToken()->authenticate();

            $project = Project::find($id);

            if (!$project) {
                return response()->json(['error' => 'Project not found'], 404);
            }

            $validator = Validator::make($request->all(), [
                // Aturan validasi lengkap
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            $project->update($request->all());

            return response()->json(['project' => $project], 200);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Failed to authenticate.'], 401);
        }
    }

    public function destroy($id)
    {
        try {
            // Memeriksa apakah pengguna terautentikasi
            $user = JWTAuth::parseToken()->authenticate();

            $project = Project::find($id);

            if (!$project) {
                return response()->json(['error' => 'Project not found'], 404);
            }

            $project->delete();

            return response()->json(['message' => 'Project deleted successfully'], 200);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Failed to authenticate.'], 401);
        }
    }
}
