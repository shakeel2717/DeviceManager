<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sms(Request $request)
    {
        info(json_encode($request->all()));

        $validator = Validator::make($request->all(), [
            'from' => 'required|string',
            'message' => 'required|string',
            'received_at' => 'required|string',
            'api_secret' => 'required|string',
            'sim_number' => 'required|string',
        ]);


        $validatedData = $validator->validated();

        if (!Str::startsWith($validatedData['sim_number'], '+')) {
            // If the sim_number doesn't start with '+', then add it.
            $validatedData['sim_number'] = '+' . $validatedData['sim_number'];
        }


        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ], 422);
        }
        try {
            $apireceived_at = $validatedData['received_at'];
            $received_at = Carbon::parse($apireceived_at)->format('Y-m-d H:i:s');
        } catch (\Throwable $th) {
            $received_at = now();
        }

        // finding the number in the database
        $number = Number::where('number', $validatedData['sim_number'])->where('status', true)->first();

        // checking if api_secret is matched
        if ($validatedData['api_secret'] != env('SMS_GATEWAY_SECRET')) {
            info('Invalid API Secret');
        }
        info("Sim Number: " . json_encode($number));
        if (empty($number)) {
            info("Sim Number is: " . $validatedData['sim_number']);
            info('Number not Found in the database');
        }
        info('Sim Number FOund in database');

        // getting this user id
        info('Checking if this userNumber status is active or, this number exist');

        try {

            info('Storing Message');
            // saving this message to server
            $message = new Message();
            $message->number_id = $number->id;
            $message->from = $validatedData['from'];
            $message->message = $validatedData['message'];
            $message->received_at = $received_at;
            $message->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Data validated and processed successfully.',
            ], 200);
        } catch (\Throwable $th) {
            info('Failed to Save SMS');
            return response()->json([
                'status' => 'error',
                'message' => 'Something Wrong While Saving SMS to Database',
            ], 422);
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
