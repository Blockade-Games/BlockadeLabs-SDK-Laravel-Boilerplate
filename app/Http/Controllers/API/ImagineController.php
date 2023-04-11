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
            BlockadeLabsClient::generateImagine([
                'generator' => request()->generator,
                'prompt' => request()->prompt,
                // 'init_image' => request()->file('init_image') - example for the file params
                // check the docs for other available params
            ])
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
            BlockadeLabsClient::getImagineHistory([
                'status' => request()->status,
                'limit' => request()->limit,
                'offset' => request()->offset,
                'order' => request()->order,
                'imagine_id' => request()->imagine_id,
                'query' => request()->query,
                'generator' => request()->generator,
            ])
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
