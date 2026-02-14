<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    /**
     * Display a listing of doctors
     */
    public function index()
    {
        $doctors = Doctor::all();
        
        return response()->json([
            'success' => true,
            'doctors' => $doctors
        ], 200);
    }

    /**
     * Store a newly created doctor
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors,email',
            'phone' => 'required|string|max:20',
            'license_number' => 'required|string|unique:doctors,license_number',
            'bio' => 'nullable|string',
            'photo_url' => 'nullable|url'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $doctor = Doctor::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Doctor created successfully',
            'doctor' => $doctor
        ], 201);
    }

    /**
     * Display the specified doctor
     */
    public function show($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json([
                'success' => false,
                'message' => 'Doctor not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'doctor' => $doctor
        ], 200);
    }

    /**
     * Update the specified doctor
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json([
                'success' => false,
                'message' => 'Doctor not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'specialty' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:doctors,email,' . $id,
            'phone' => 'sometimes|required|string|max:20',
            'license_number' => 'sometimes|required|string|unique:doctors,license_number,' . $id,
            'bio' => 'nullable|string',
            'photo_url' => 'nullable|url'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $doctor->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Doctor updated successfully',
            'doctor' => $doctor
        ], 200);
    }

    /**
     * Remove the specified doctor
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json([
                'success' => false,
                'message' => 'Doctor not found'
            ], 404);
        }

        $doctor->delete();

        return response()->json([
            'success' => true,
            'message' => 'Doctor deleted successfully'
        ], 200);
    }
}