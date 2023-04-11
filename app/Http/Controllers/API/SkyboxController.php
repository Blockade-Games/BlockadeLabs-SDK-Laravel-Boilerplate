<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use BlockadeLabs\SDK\Facades\BlockadeLabsClient;
use Illuminate\Http\Request;

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
            BlockadeLabsClient::generateSkybox([
                'prompt' => request()->prompt,
                'skybox_style_id' => request()->skybox_style_id
                // check the docs for other available params
            ])
        );
    }
}
