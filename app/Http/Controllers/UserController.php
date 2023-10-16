<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * dashboard.
     */
    public function dashboard(Request $request)
    {
        $params = $request->query();
        $job_offers = JobOffer::myJobOffer($params)->paginate(5);
        
        return view('dashboard', compact('job_offers'));
    }
}
