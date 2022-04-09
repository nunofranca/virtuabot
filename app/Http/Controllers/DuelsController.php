<?php

namespace App\Http\Controllers;

use App\Http\Requests\Duel\DuelStoreRequest;
use App\Services\Duel\DuelServiceInterface;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class DuelsController extends Controller
{
    private DuelServiceInterface $duelService;

    public function __construct(DuelServiceInterface $duelService)
    {
        $this->duelService = $duelService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    public function store(Request $request)
    {
        return $request;
        $attributes = $request->validated();
        return $attributes;

        try {
            return $this->duelService->create($attributes);

        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }

}
