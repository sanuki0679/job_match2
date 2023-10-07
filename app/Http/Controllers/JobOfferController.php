<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use App\Models\Occupation;
use App\Http\Requests\JobOfferStoreRequest;
use App\Http\Requests\JobOfferUpdateRequest;

class JobOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $occupations = Occupation::all();
        return view('job_offers.create', compact('occupations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobOfferStoreRequest $request)
    {
        $job_offer = new JobOffer($request->all());
        $job_offer->company_id = $request->user()->company->id;

        try {
            // 登録
            $job_offer->save();
        } catch (\Exception $e) {
            return back()->withInput()
                ->withErrors('求人情報登録処理でエラーが発生しました');
        }

        return redirect()
            ->route('job_offers.show', $job_offer)
            ->with('notice', '求人情報を登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobOffer $job_offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobOffer $job_offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobOfferUpdateRequest $request, JobOffer $job_offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobOffer $job_offer)
    {
        //
    }
}
