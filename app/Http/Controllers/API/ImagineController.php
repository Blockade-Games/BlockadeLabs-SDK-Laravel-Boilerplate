<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use BlockadeLabs\SDK\Facades\BlockadeLabsClient;

class ImagineController extends Controller
{
    public function getGenerators()
    {
        return response()->json(
            BlockadeLabsClient::getGenerators()
        );
    }

    public function generateImagine()
    {
        return response()->json(
            BlockadeLabsClient::generateImagine(request()->all())
        );
    }

    public function getImagineById($id)
    {
        return response()->json(
            BlockadeLabsClient::getImagineById($id)
        );
    }

    public function getImagineByObfuscatedId($obfuscatedId)
    {
        return response()->json(
            BlockadeLabsClient::getImagineByObfuscatedId($obfuscatedId)
        );
    }

    public function getImagineHistory()
    {
        return response()->json(
            BlockadeLabsClient::getImagineHistory(request()->all())
        );
    }

    public function cancelImagine($id)
    {
        return response()->json(
            BlockadeLabsClient::cancelImagine($id)
        );
    }

    public function cancelAllPendingImagines()
    {
        return response()->json(
            BlockadeLabsClient::cancelAllPendingImagines()
        );
    }

    public function deleteImagine($id)
    {
        return response()->json(
            BlockadeLabsClient::deleteImagine($id)
        );
    }
}
