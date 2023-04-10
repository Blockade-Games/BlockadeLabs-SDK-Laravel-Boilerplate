<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use BlockadeLabs\SDK\Facades\BlockadeLabsClient;
use Illuminate\Http\Request;

class SkyboxController extends Controller
{
    public function index()
    {
        return response()->json(BlockadeLabsClient::getSkyboxStyles());
    }
}
