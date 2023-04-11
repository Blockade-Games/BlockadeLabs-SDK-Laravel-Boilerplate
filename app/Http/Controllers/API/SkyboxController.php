<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use BlockadeLabs\SDK\Facades\BlockadeLabsClient;

class SkyboxController extends Controller
{
    public function getSkyboxStyles()
    {
        return response()->json(
            BlockadeLabsClient::getSkyboxStyles()
        );
    }

    public function generateSkybox()
    {
        return response()->json(
            BlockadeLabsClient::generateSkybox(request()->all())
        );
    }
}
