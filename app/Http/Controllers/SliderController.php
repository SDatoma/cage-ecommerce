<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $slider= new Slider();

        if ($request->HasFile('file')) {
            $cover = $request->file('file');
            $image = Image::make($cover)->encode('jpg');
            $image->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            Image::make($image)->save('files_upload/slider/'.$request->text_slider.'.jpg');

            $file_name ='files_upload/slider/'.$request->text_slider.'.jpg';

          }else{

            $file_name ="";
         }

        $slider->text_slider=$request->text_slider;
        $slider->image_slider=$file_name;
        $slider->etat_slider=1;

        $slider->save();

        Session()->flash('succes',"Enregistrement effectué avec succè");
        return redirect()->back();
    }


    public function getAllSlider()
    {
        $sliders = Slider::where(['etat_slider' =>1])->get();

        return view('pages_backend/slider/list_slider',compact('sliders'));
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
        $slider = Slider::where(['id_slider' =>$id])->first() ;

        if ($request->HasFile('file')) {
            $cover = $request->file('file');
            $image = Image::make($cover)->encode('jpg');
            $image->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            Image::make($image)->save('files_upload/slider/'.$id.'.jpg');

            $file_name ='files_upload/slider/'.$id.'.jpg';

          }else{

            $file_name =$slider->image_slider;
         }

        $slider->text_slider=$request->text_slider;
        $slider->image_slider=$file_name;
        $slider->etat_slider=1;

        $slider->save();

        Session()->flash('succes',"Modification effectuée avec succè");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
