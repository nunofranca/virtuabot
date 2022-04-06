<?php

namespace App\View\Components\Dashboard;

use App\Services\Duel\DuelServiceInterface;
use Illuminate\View\Component;

class NextDuelsComponents extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $duels;

    public function __construct(DuelServiceInterface $duelService)
    {
        $this->duels = $duelService->nextDuels();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.next-duels-components');
    }
}
