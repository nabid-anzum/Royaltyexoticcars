<?php

namespace App\Http\Controllers;

use App\Model\VehicleBrand;
use Illuminate\Http\Request;

class VehicleBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = VehicleBrand::all();
        return view('admin.vehicle-brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);


        $category = new VehicleBrand();
        $category->name = $request->name;
        $category->slug = str_replace([' ','/'],'-',$request->name).'-'.uniqid();
        //$category->status = $request->status;

        if ($request->hasFile('photo')) {
            $image      = $request->file('photo');
            $imageName  = 'category_'.date('ymdhis').'.'.$image->getClientOriginalExtension();
            $path       = 'images/vehicle_brand/';
            $image->move($path, $imageName);
            $imageUrl   = $path . $imageName;

            $category->photo = $imageUrl;
        }

        $category->save();



        return back()->withSuccess('Product Category Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request, [
            'name' => 'required',
        ]);


        $category = VehicleBrand::find($id);
        $category->name = $request->name;
        $category->status = $request->status;

        if ($request->hasFile('photo')) {
            $image      = $request->file('photo');
            $imageName  = 'category_'.date('ymdhis').'.'.$image->getClientOriginalExtension();
            $path       = 'images/vehicle_brand/';
            $image->move($path, $imageName);
            $imageUrl   = $path . $imageName;

            $category->photo = $imageUrl;
        }

        $category->save();

        return back()->withSuccess('Product Category Successfully Modified!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $category = VehicleBrand::destroy($id);
        return back()->withSuccess('Product Category Successfully Removed!');
    }
}
