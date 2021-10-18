<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChildCategory;
use Illuminate\Support\Str;


class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $child_categories = ChildCategory::paginate(12);
        return view('admin.childcategories.index',compact('child_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.childcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $request->hasFile('image') ){
            $path = $request->file('image')->store('public/childcategories');
            ChildCategory::create([
                'name'=>$request->name,
                'slug'=>Str::slug($request->name),
                'sub_category_id'=>$request->sub_category_id,
                'image'=>$path,
            ]);
            return redirect()->route('admin.childcategories.index')->with('message','The child categories has been created Succesfully!');
        }
        dd('error call to IT Support for childcategory');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $child_categories = ChildCategory::find($id);
        return view('admin.childcategories.edit',compact('child_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $child_categories = ChildCategory::find($id);
        if( $request->hasFile('image') ){
            $path = $request->file('image')->store('public/childcategories');
            $child_categories->update([
                'name'=>$request->name,
                'slug'=>Str::slug($request->name),
                'sub_category_id'=>$request->sub_category_id,
                'image'=>$pathm
            ]);
            return redirect()->route('admin.childcategories.index')->with('message','THE CHILDCATEGORY HAS BEEN UPDATED SUCCESSFULLY!!!!!');
        }else{
            $child_categories->update([
                'name'=>$request->name,
                'slug'=>Str::slug($request->name),
                'sub_category_id'=>$request->sub_category_id
            ]);
            return redirect()->route('admin.childcategories.index')->with('message','THE CHILDCATEGORY HAS BEEN UPDATED SUCCESSFULLY!!!!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $child_categories = ChildCategory::findOrFail($id);
        $child_categories->delete();
        return redirect()->route('admin.childcategories.index')->with('message','The childCategory has been deleted successfully');
    }
}
