<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ActivityCategory;
use App\Models\EnActivityCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ActivityCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ActivityCategory::latest()->get();
        return view('backend.activityCategory.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.activityCategory.add');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $activityCategory = new ActivityCategory();
        $activityCategory->title = $request->add_activity_category_name_tr;
        $activityCategory->description = $request->add_activity_text_tr;
        $activityCategory->link = $request->add_activity_category_url_tr;
        $activityCategory->queue = $request->add_activity_category_detail_no_tr;
        $activityCategory->seo_title = $request->add_activity_category_seo_title_tr;
        $activityCategory->seo_description = $request->add_activity_category_seo_description_tr;
        $activityCategory->seo_key = $request->add_activity_category_seo_keywords_tr;
        if(!isset($request->allowadd_activity_caetgory_seo_tr)){
            $activityCategory->seo_statu = 0;
        }
        if(!isset($request->allowadd_activity_category_detail_tr)){
            $activityCategory->status = 0;
        }
        $activityCategory->save();

        $activityCategoryEN = new EnActivityCategory();
        $activityCategoryEN->title = $request->add_activity_category_name_en;
        $activityCategoryEN->description = $request->add_activity_text_en;
        $activityCategoryEN->link = $request->add_activity_category_url_en;
        $activityCategoryEN->activity_category_id = $activityCategory->id;
        $activityCategoryEN->queue = $request->add_activity_category_detail_no_en;
        $activityCategoryEN->seo_title = $request->add_activity_category_seo_title_en;
        $activityCategoryEN->seo_description = $request->add_activity_category_seo_description_en;
        $activityCategoryEN->seo_key = $request->add_activity_category_seo_keywords_en;
        if(!isset($request->allowadd_activity_category_seo_en)){
            $activityCategoryEN->seo_statu = 0;
        }
        if(!isset($request->allowadd_activity_category_detail_en)){
            $activityCategoryEN->status = 0;
        }
        $activityCategoryEN->save();

        
        Alert::success('Etkinlik Kategorisi Başarıyla Eklendi');
        return redirect()->route('admin.activityCategory.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_tr = ActivityCategory::findOrFail($id);
        $data_en = EnActivityCategory::where('activity_category_id',$id)->first();
        return view('backend.activityCategory.edit',compact('data_tr','data_en'));
        
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
