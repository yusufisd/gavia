<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCategory as RequestsBlogCategory;
use App\Models\BlogCategory;
use App\Models\EnBlogCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BlogCategory::latest()->get();
        return view('backend.blogCategory.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogCategory.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestsBlogCategory $request)
    {
        $blogCategory = new BlogCategory();
        $blogCategory->title = $request->blog_category_name_tr;
        $blogCategory->link = $request->blog_category_url_tr;
        $blogCategory->queue = $request->blog_category_detail_no;
        $blogCategory->seo_title = $request->blog_category_seo_title_tr;
        $blogCategory->seo_description = $request->blog_category_seo_description_tr;
        $blogCategory->seo_key = $request->blog_category_seo_keywords_tr;
        $blogCategory->save();

        $blogCategoryEN = new EnBlogCategory();
        $blogCategoryEN->title = $request->blog_category_name_en;
        $blogCategoryEN->blog_category_id = $blogCategory->id;
        $blogCategoryEN->link = $request->blog_category_url_en;
        $blogCategoryEN->seo_title = $request->blog_category_seo_title_en;
        $blogCategoryEN->seo_description = $request->blog_category_seo_description_en;
        $blogCategoryEN->seo_key = $request->blog_category_seo_keywords_en;
        $blogCategoryEN->save();

        Alert::success('Blog Kategorisi Eklendi');
        return redirect()->route('admin.blogCategory.list');
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
        $data_tr = BlogCategory::findOrFail($id);
        $data_en = EnBlogCategory::where('blog_category_id',$id)->first();
        return view('backend.blogCategory.edit',compact('data_tr','data_en'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blogCategory = BlogCategory::findOrFail($id);
        $blogCategoryEN = EnBlogCategory::where('blog_category_id',$id)->first();

        $blogCategory->title = $request->blog_category_name_tr;
        $blogCategory->link = $request->blog_category_url_tr;
        $blogCategory->queue = $request->blog_category_detail_no;
        $blogCategory->seo_title = $request->blog_category_seo_title_tr;
        $blogCategory->seo_description = $request->blog_category_seo_description_tr;
        $blogCategory->seo_key = $request->blog_category_seo_keywords_tr;
        $blogCategory->save();

        $blogCategoryEN->title = $request->blog_category_name_en;
        $blogCategoryEN->blog_category_id = $blogCategory->id;
        $blogCategoryEN->link = $request->blog_category_url_en;
        $blogCategoryEN->seo_title = $request->blog_category_seo_title_en;
        $blogCategoryEN->seo_description = $request->blog_category_seo_description_en;
        $blogCategoryEN->seo_key = $request->blog_category_seo_keywords_en;
        $blogCategoryEN->save();

        Alert::success('Blog Kategorisi Düzenlendi');
        return redirect()->route('admin.blogCategory.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
