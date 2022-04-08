<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        dd(env('DUSK_DRIVER_URL'));
        $this->browse(function (Browser $browser) {
            $browser->visit('/');
//                ->waitFor('.vr-ResultsNavBarButton')
//                ->click('.vr-ResultsNavBarButton');
//                ->waitForTextIn('.vrr-FixtureDetails_Event ', 'Euro Cup');
        });
    }
}
