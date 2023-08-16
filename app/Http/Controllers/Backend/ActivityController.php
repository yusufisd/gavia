<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ActivityCategory;
use App\Models\EnActivity;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Activity::latest()->get();
        return view('backend.activity.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ActivityCategory::latest()->get();
        return view('backend.activity.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $explode_start1 = explode(' ', $request->add_activity_start_date_input_tr);
        $activity_start_tr = explode('.', $explode_start1[0])[2] . '-' . explode('.', $explode_start1[0])[1] . '-' . explode('.', $explode_start1[0])[0] . ' ' . $explode_start1[1];

        $explode_finish = explode(' ', $request->add_activity_end_date_input_tr);
        $activity_finish_tr = explode('.', $explode_finish[0])[2] . '-' . explode('.', $explode_finish[0])[1] . '-' . explode('.', $explode_finish[0])[0] . ' ' . $explode_finish[1];

        $explode_start2 = explode(' ', $request->add_activity_start_date_en);
        $activity_start_en = explode('.', $explode_start2[0])[2] . '-' . explode('.', $explode_start2[0])[1] . '-' . explode('.', $explode_start2[0])[0] . ' ' . $explode_start2[1];

        $explode_finish2 = explode(' ', $request->add_activity_end_date_input_en);
        $activity_finish_en = explode('.', $explode_finish2[0])[2] . '-' . explode('.', $explode_finish2[0])[1] . '-' . explode('.', $explode_finish2[0])[0] . ' ' . $explode_finish2[1];


        $live_start_tr = explode(' ', $request->add_activity_puslish_start_date_date_input_tr);
        $live_start_tr2 = explode('.', $live_start_tr[0])[2] . '-' . explode('.', $live_start_tr[0])[1] . '-' . explode('.', $live_start_tr[0])[0] . ' ' . $live_start_tr[1];

        $live_finish_tr = explode(' ', $request->activity_puslish_end_date_input_tr);
        $live_finish_tr2 = explode('.', $live_finish_tr[0])[2] . '-' . explode('.', $live_finish_tr[0])[1] . '-' . explode('.', $live_finish_tr[0])[0] . ' ' . $live_finish_tr[1];

        $live_start_en = explode(' ', $request->add_activity_puslish_start_date_date_input_en);
        $live_start_en2 = explode('.', $live_start_en[0])[2] . '-' . explode('.', $live_start_en[0])[1] . '-' . explode('.', $live_start_en[0])[0] . ' ' . $live_start_en[1];

        $live_finish_en = explode(' ', $request->activity_puslish_end_date_input_en);
        $live_finish_en2 = explode('.', $live_finish_en[0])[2] . '-' . explode('.', $live_finish_en[0])[1] . '-' . explode('.', $live_finish_en[0])[0] . ' ' . $live_finish_en[1];




        $activity = new Activity();
        $activity->title = $request->activity_name_tr;
        $activity->short_description = $request->activity_summary_tr;
        $activity->description = $request->tinymce_activity_detail_tr;
        $activity->address = $request->activity_location_tr;
        $activity->place = $request->activity_on_location_tr;
        $activity->link = $request->activity_url_tr;
        $activity->seo_title = $request->activity_seo_title_tr;
        $activity->seo_description = $request->activity_seo_description_tr;
        $activity->seo_key = $request->activity_seo_keywords_tr;
        $activity->category_id = $request->category;

        $activity->start = $activity_start_tr;
        $activity->finish = $activity_finish_tr;
        $activity->live_start = $live_start_tr2;
        $activity->live_finish = $live_finish_tr2;
        if(!isset($request->allowactivity_detail_tr)){
            $activity->status = 0;
        };
        if(!isset($request->allowactivity_seo_tr)){
            $activity->seo_statu = 0;
        };
        $activity->save();
        

        $activity_en = new EnActivity();
        $activity_en->title = $request->activity_name_en;
        $activity_en->short_description = $request->activity_summary_en;
        $activity_en->description = $request->tinymce_activity_detail_en;
        $activity_en->address = $request->activity_location_en;
        $activity_en->place = $request->activity_on_location_en;
        $activity_en->link = $request->activity_url_en;
        $activity_en->activity_id = $activity->id;
        $activity_en->seo_title = $request->activity_seo_title_en;
        $activity_en->seo_description = $request->activity_seo_description_en;
        $activity_en->seo_key = $request->activity_seo_keywords_en;

        $activity_en->start = $activity_start_en;
        $activity_en->finish = $activity_finish_en;
        $activity_en->live_start = $live_start_en2;
        $activity_en->live_finish = $live_finish_en2;
        if(!isset($request->allowactivity_detail_en)){
            $activity_en->status = 0;
        };
        if(!isset($request->allowactivity_seo_en)){
            $activity_en->seo_statu = 0;
        };
        $activity_en->save();

        Alert::success('Etkinlik Başarıyla Eklendi');
        return redirect()->route('admin.activity.list');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data_tr = Activity::findOrFail($id);
        $data_en = EnActivity::where('activity_id',$id)->first();
        return view('backend.activity.edit',compact('data_tr','data_en'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
