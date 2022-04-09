<?php

namespace App\Http\Controllers;

use App\Http\Requests\Strategy\StrategyStoreRequest;
use App\Services\SIgnal\SignalServiceInterface;
use App\Services\Strategy\StrategyServiceInterface;
use Illuminate\Http\Request;

class StrategiesController extends Controller
{
    private StrategyServiceInterface $strategyService;
    private SignalServiceInterface $signalService;

    public function __construct(StrategyServiceInterface $strategyService, SignalServiceInterface $signalService)
    {

        $this->strategyService = $strategyService;
        $this->signalService = $signalService;
    }


    public function index()
    {
        return view('pages.strategy.index', [
            'strategies' => $this->strategyService->getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(StrategyStoreRequest $request)
    {
        $attributes = $request->validated();

        try {
            $this->strategyService->create($attributes);
            return redirect()->back();
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }


    public function show($id)
    {
        return view('pages.strategy.show', [
            'strategy' => $this->strategyService->getById($id),
            'signals' => $this->signalService->getByStrategy($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
