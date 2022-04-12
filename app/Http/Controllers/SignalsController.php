<?php

namespace App\Http\Controllers;

use App\Http\Requests\Signal\SignalStoreRequest;
use App\Http\Requests\Signal\SignalUpdateRequest;
use App\Services\Signal\SignalServiceInterface;
use Illuminate\Http\Request;

class SignalsController extends Controller
{


    private SignalServiceInterface $signalService;

    public function __construct(SignalServiceInterface $signalService)
    {
        $this->signalService = $signalService;
    }

    public function index()
    {
        return view('pages.signal.index', [
            'signals' => $this->signalService->getAll()
        ]);
    }

    public function store(SignalStoreRequest $request)
    {
        $attributes = $request->validated();


        try {
            $this->signalService->create($attributes);
            return redirect()->back();
        } catch (\Exception $exception) {
            return response()->json($exception->getMessage());
        }
    }

    public function update(SignalUpdateRequest $request, $id)
    {
        $attributes = $request->validated();


        try {
            $this->signalService->udpate($attributes, $id);
            return redirect()-> back();
        } catch (\Exception $exception) {
            return response()->json($exception->getMessage());
        }
    }

    public function getById($id)
    {
        return $this->signalService->getById($id);

    }

}
