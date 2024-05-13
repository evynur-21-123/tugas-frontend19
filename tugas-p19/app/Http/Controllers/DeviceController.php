<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Log;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return response()->json($devices);
    }

    public function logs($deviceId)
    {
        $logs = Log::where('device_id', $deviceId)->get();
        return response()->json($logs);
    }
}
