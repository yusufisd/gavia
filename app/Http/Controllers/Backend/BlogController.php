<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\EnBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::latest()->get();
        return view('backend.blog.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::latest()->get();
        return view('backend.blog.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $explode_start = explode(' ',$request->add_start_blog_date_tr);
        $import_start = explode('.',$explode_start[0])[2] . '-' . explode('.',$explode_start[0])[1] . '-' . explode('.',$explode_start[0])[0] . ' ' . $explode_start[1];
        $explode_finish = explode(' ',$request->add_finish_blog_date_tr);
        $import_finish = explode('.',$explode_finish[0])[2] . '-' . explode('.',$explode_finish[0])[1] . '-' . explode('.',$explode_finish[0])[0] . ' ' . $explode_finish[1];

        $blog = new Blog();
        $blog->title = $request->blog_name_tr;
        $blog->short_description = $request->blog_summary_tr;
        $blog->description = $request->tinymce_blog_detail_tr;
        $blog->category_id = $request->category;
        $blog->link = $request->blog_url_tr;
        $blog->queue = $request->blog_detail_tr_no;
        $blog->live_start = $import_start;
        $blog->live_finish = $import_finish;
        $blog->seo_title = $request->blog_seo_title_tr;
        $blog->seo_description = $request->blog_seo_description_tr;
        $blog->seo_key = $request->blog_seo_keywords_tr;

        if($request->file('blog_image') != null){
            $image = $request->file('blog_image');
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $save_url = '/uploads/blog/'.$image_name;
            \Image::make($image)->resize(300,300)->save('assets'.$save_url);
            $blog->image = $save_url;
        }
        $blog->save();

        $explode_start_en = explode(' ',$request->add_start_blog_date_en);
        $import_start_en = explode('.',$explode_start_en[0])[2] . '-' . explode('.',$explode_start_en[0])[1] . '-' . explode('.',$explode_start_en[0])[0] . ' ' . $explode_start_en[1];
        $explode_finish_en = explode(' ',$request->add_finish_blog_date_en);
        $import_finish_en = explode('.',$explode_finish_en[0])[2] . '-' . explode('.',$explode_finish_en[0])[1] . '-' . explode('.',$explode_finish_en[0])[0] . ' ' . $explode_finish_en[1];

        $blog_en = new EnBlog();
        $blog_en->title = $request->blog_name_en;
        $blog_en->short_description = $request->blog_summary_en;
        $blog_en->description = $request->tinymce_blog_detail_en;
        $blog_en->link = $request->blog_url_en;
        $blog_en->blog_id = $blog->id;
        $blog_en->queue = $request->blog_detail_en_no;
        $blog_en->live_start = $import_start_en;
        $blog_en->live_finish = $import_finish_en;
        $blog_en->seo_title = $request->blog_seo_title_en;
        $blog_en->seo_description = $request->blog_seo_description_en;
        $blog_en->seo_key = $request->blog_seo_keywords_en;
        $blog_en->save();

        Alert::success('Blog Başarıyla Eklendi');
        return redirect()->route('admin.blog.list');
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
        $categories = BlogCategory::latest()->get();
        $data_tr = Blog::findOrFail($id);
        $data_en = EnBlog::where('blog_id',$id)->first();
        return view('backend.blog.edit',compact('data_tr','data_en','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $blog = Blog::findOrFail($id);
        $blog_en = EnBlog::where('blog_id',$id)->first();

        $explode_start = explode(' ',$request->add_start_blog_date_tr);
        $import_start = explode('.',$explode_start[0])[2] . '-' . explode('.',$explode_start[0])[1] . '-' . explode('.',$explode_start[0])[0] . ' ' . $explode_start[1];
        $explode_finish = explode(' ',$request->add_finish_blog_date_tr);
        $import_finish = explode('.',$explode_finish[0])[2] . '-' . explode('.',$explode_finish[0])[1] . '-' . explode('.',$explode_finish[0])[0] . ' ' . $explode_finish[1];

        $blog->title = $request->blog_name_tr;
        $blog->short_description = $request->blog_summary_tr;
        $blog->description = $request->tinymce_blog_detail_tr;
        $blog->category_id = $request->category;
        $blog->link = $request->blog_url_tr;
        $blog->queue = $request->blog_detail_tr_no;
        $blog->live_start = $import_start;
        $blog->live_finish = $import_finish;
        $blog->seo_title = $request->blog_seo_title_tr;
        $blog->seo_description = $request->blog_seo_description_tr;
        $blog->seo_key = $request->blog_seo_keywords_tr;

        if($request->file('blog_image') != null){
            $image = $request->file('blog_image');
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $save_url = '/uploads/blog/'.$image_name;
            \Image::make($image)->resize(300,300)->save('assets'.$save_url);
            $blog->image = $save_url;
        }
        $blog->save();

        $explode_start_en = explode(' ',$request->add_start_blog_date_en);
        $import_start_en = explode('.',$explode_start_en[0])[2] . '-' . explode('.',$explode_start_en[0])[1] . '-' . explode('.',$explode_start_en[0])[0] . ' ' . $explode_start_en[1];
        $explode_finish_en = explode(' ',$request->add_finish_blog_date_en);
        $import_finish_en = explode('.',$explode_finish_en[0])[2] . '-' . explode('.',$explode_finish_en[0])[1] . '-' . explode('.',$explode_finish_en[0])[0] . ' ' . $explode_finish_en[1];

        $blog_en->title = $request->blog_name_en;
        $blog_en->short_description = $request->blog_summary_en;
        $blog_en->description = $request->tinymce_blog_detail_en;
        $blog_en->link = $request->blog_url_en;
        $blog_en->blog_id = $blog->id;
        $blog_en->queue = $request->blog_detail_en_no;
        $blog_en->live_start = $import_start_en;
        $blog_en->live_finish = $import_finish_en;
        $blog_en->seo_title = $request->blog_seo_title_en;
        $blog_en->seo_description = $request->blog_seo_description_en;
        $blog_en->seo_key = $request->blog_seo_keywords_en;
        $blog_en->save();

        Alert::success('Blog Başarıyla Düzenlendi');
        return redirect()->route('admin.blog.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
