<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurSolidStoneController extends Controller
{
    // Marble
    public function black_marble()
    {
        return view('our-solid-stone.marble.black-marble');
    }

    public function cream_marble()
    {
        return view('our-solid-stone.marble.cream-marble');
    }

    public function grey_pg_marble()
    {
        return view('our-solid-stone.marble.grey-pg-marble');
    }

    public function grey_dk_marble()
    {
        return view('our-solid-stone.marble.grey-dk-marble');
    }

    public function grey_dr_marble()
    {
        return view('our-solid-stone.marble.grey-dr-marble');
    }
    public function light_grey_marble()
    {
        return view('our-solid-stone.marble.light-grey-marble');
    }
    public function red_marble()
    {
        return view('our-solid-stone.marble.red-marble');
    }
    public function cocoa_brown_marble()
    {
        return view('our-solid-stone.marble.cocoa-brown-marble');
    }

    public function traventine_marble()
    {
        return view('our-solid-stone.marble.traventine-marble');
    }

    // Onyx
    public function sunset_onyx()
    {
        return view('our-solid-stone.onyx.sunset-onyx');
    }
    public function ivory_onyx()
    {
        return view('our-solid-stone.onyx.ivory-onyx');
    }
    public function bw_onyx()
    {
        return view('our-solid-stone.onyx.bw-onyx');
    }
    public function pct_onyx()
    {
        return view('our-solid-stone.onyx.pct-onyx');
    }


    // Another

    public function granite_local()
    {
        return view('our-solid-stone.granite-local');
    }

    public function petrified_wood()
    {
        return view('our-solid-stone.petrified-wood');
    }

    public function river_stone()
    {
        return view('our-solid-stone.river-stone');
    }
    public function lava_stone()
    {
        return view('our-solid-stone.lava-stone');
    }
    public function lime_stone()
    {
        return view('our-solid-stone.lime-stone');
    }
    public function ziolit_stone()
    {
        return view('our-solid-stone.ziolit-stone');
    }
    public function terrazzo()
    {
        return view('our-solid-stone.terrazzo');
    }
}
