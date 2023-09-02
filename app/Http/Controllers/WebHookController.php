<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Message;
use App\Models\Number;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class WebHookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $device = Device::latest()->get();
        return $device;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function battery(Request $request)
    {
        info(json_encode($request->all()));

        $validator = Validator::make($request->all(), [
            'api_secret' => 'required|string',
            'device_name' => 'required|string',
            'device_code' => 'required|string',
            'charging' => 'required|boolean',
            'battery_level' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ], 422);
        }

        try {
            // Checking if api_secret is matched
            if ($request->input('api_secret') !== env('SMS_GATEWAY_SECRET')) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Unauthorized. Invalid api_secret.',
                ], 401);
            }

            // Update the device based on device_code
            $device = Device::where('code', $request->input('device_code'))->first();

            if (!$device) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Device not found.',
                ], 404);
            }

            $device->charging = $request->input('charging');
            $device->battery_level = $request->input('battery_level');
            $device->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Data validated and processed successfully.',
            ], 200);
        } catch (\Throwable $th) {
            info('Failed to Save SMS: ' . $th->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong while updating data to the database.',
            ], 500); // You can use a 500 Internal Server Error here
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
