<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Exception;

class ChatController extends Controller
{
    public function sendMessage(Request $request): JsonResponse
    {
        // 1. استقبال البيانات وتأكيد وجودها
        $request->validate([
            'user_id' => 'required',
            'user'    => 'required|string',
            'message' => 'required|string',
        ]);

        // 2. إرسال البيانات لـ API الشات بوت
        $apiUrl = 'https://path-thud-isolation.ngrok-free.dev/';

        try {
            $response = Http::withHeaders([
                'ngrok-skip-browser-warning' => 'true',
                'Content-Type' => 'application/json',
            ])->post($apiUrl, [
                'user_id' => $request->user_id,
                'user'    => $request->user,
                'message' => $request->message,
            ]);

            // 3. إرجاع الرد القادم من الشات بوت للفرونت إند
            if ($response->successful()) {
                return new JsonResponse([
                    'status' => 'success',
                    'data'   => $response->json()
                ]);
            }

            return new JsonResponse([
                'status'  => 'error',
                'message' => 'حدث خطأ في الاستجابة من الشات بوت'
            ], 500);

        } catch (Exception $e) {
            return new JsonResponse([
                'status'  => 'error',
                'message' => 'تعذر الاتصال بسيرفر الشات بوت: ' . $e->getMessage()
            ], 500);
        }
    }
}
