<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $user = Auth::user();
        $plan = Plan::findOrFail($request->plan_id);

        $user->newSubscription('default', $plan->stripe_plan)
             ->create($request->paymentMethod);

        return redirect()->route('dashboard')->with('success', 'Subscription successful!');
    }
}
