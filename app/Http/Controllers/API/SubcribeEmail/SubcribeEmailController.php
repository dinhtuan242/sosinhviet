<?php

namespace App\Http\Controllers\API\SubcribeEmail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SubcribeEmailService;

class SubcribeEmailController extends Controller
{
    protected $subcribeEmailService;

    public function __construct(SubcribeEmailService $subcribeEmailService)
    {
        $this->subcribeEmailService = $subcribeEmailService;
    }

    public function store(Request $request)
    {
        $validated = $this->validation($request);
        if (!$validated) {
            return response()->json([], 204);
        }
        $params = $this->getParams($request);
        $created = $this->subcribeEmailService->store($params);
        if (!$created) {
            return response()->json([], 400);
        }
        return response()->json([], 200);
    }

    public function validation(Request $request)
    {
        return $request->validate([
            'email' => 'required'
        ]);
    }

    public function getParams(Request $request)
    {
        return $request->only(['email']);
    }
}
