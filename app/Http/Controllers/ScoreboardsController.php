<?php

namespace App\Http\Controllers;

use App\Http\Requests\Scoreboard\ScoreboardStoreRequest;
use App\Services\Scoreboard\ScoreboardServiceInterface;

class ScoreboardsController extends Controller
{
    private ScoreboardServiceInterface $scoreboardService;

    public function __construct(ScoreboardServiceInterface $scoreboardService)
    {
        $this->scoreboardService = $scoreboardService;
    }

    public function store(ScoreboardStoreRequest $request)
    {
        $attributes = $request->validated();
        try {
            return $this->scoreboardService->create($attributes);
        } catch (\Exception $exception) {
            return response()->json($exception->getMessage());
        }
    }

}
