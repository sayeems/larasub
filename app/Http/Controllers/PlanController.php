<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Inertia\Inertia;
use Inertia\Response;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return Inertia::render('Plans', ['plans' => $plans]);
    }
}
