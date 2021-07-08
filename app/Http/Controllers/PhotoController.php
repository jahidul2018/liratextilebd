<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Photo;

use Illuminate\Http\Request;

use Image;
use File;

class PhotoController extends Controller
{
  public function man()
  {
    $man = Photo::where('b_type','man')->orderBy('priority', 'asc')->get();
      return view('backend.pages.sliders.mini', compact('man'));
  }
  public function woman()
  {
    $woman = Photo::where('b_type','woman')->orderBy('priority', 'asc')->get();
      return view('backend.pages.sliders.brand', compact('woman'));
  }

  public function client()
  {
    $clients = Photo::where('b_type','client')->orderBy('priority', 'asc')->get();
      return view('backend.pages.sliders.client', compact('clients'));
  }

  public function own()
  {
    $own = Photo::where('b_type','own')->orderBy('priority', 'asc')->get();
      return view('backend.pages.sliders.own', compact('own'));
  }
  public function logo()
  {
    $logo = Photo::where('b_type','logo')->orderBy('priority', 'asc')->get();
      return view('backend.pages.sliders.logo', compact('logo'));
  }
  
  public function store(Request $request)
  {
    $this->validate($request, [
      'title'  => 'required',
      'image'  => 'required|image',
      'priority'  => 'required',
      'b_type'  => 'required',
      //'button_link'  => 'nullable|url'
    ],
    [
      'title.required'  => 'Please provide slider title',
      'priority.required'  => 'Please provide slider priority',
      'b_type.required'  => 'Please provide slider type',
      'image.required'  => 'Please provide slider image',
      'image.image'  => 'Please provide a valid slider image',
      //'button_link.url'  => 'Please provide a valid slider button link'
    ]);

    $slider = new Photo();
    $slider->title = $request->title;
    //$slider->button_text = $request->button_text;
    $slider->b_type = $request->b_type;
    //$slider->button_link = $request->button_link;
    //$slider->section_id = $request->section_id;
    $slider->priority = $request->priority;
    //section_id

      if ($request->image > 0) {
          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $thumbnailPath='img/sliders/';
          //Image::make($image)->save($location);
          $image->move($thumbnailPath,$img);
          $slider->image = $img;
      }
        $slider->save();
          session()->flash('success', 'A new slider has added successfully !!');
            return redirect()->back();
  }
  
  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'title'  => 'required',
      'image'  => 'nullable|image',
      // 'priority'  => 'required',
      'b_type'  => 'required',
      // 'button_link'  => 'nullable|url'
      ],
      [
      'title.required'  => 'Please provide slider title',
      // 'priority.required'  => 'Please provide slider priority',
      'b_type.required'  => 'Please provide slider type',
      'image.image'  => 'Please provide a valid slider image',
      // 'button_link.url'  => 'Please provide a valid slider button link'
      ]);

      $slider = Photo::find($id);
      $slider->title = $request->title;
      //$slider->button_text = $request->button_text;
      //$slider->button_link = $request->button_link;
      $slider->b_type = $request->b_type;
      $slider->priority = $request->priority;
      //$slider->section_id = $request->section_id;

      if ($request->image > 0) {
          // Delete the old Photo
          if (File::exists('img/sliders/'.$slider->image)) {
              File::delete('img/sliders/'.$slider->image);
            }
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $thumbnailPath='img/sliders/';
            //Image::make($image)->save($location);
            $image->move($thumbnailPath,$img);
            $slider->image = $img;
      }
        $slider->save();
          session()->flash('success', 'Photo has updated successfully !!');
            return redirect()->back();
  }
  
  public function delete($id)
  {
    $slider = Photo::find($id);
    if (!is_null($slider)) {
      //Delete Image
      if (File::exists('img/sliders/'.$slider->image)) {
          File::delete('img/sliders/'.$slider->image);
        }
        $slider->delete();
    }
          session()->flash('success', 'Photo has deleted successfully !!');
            return back();
  }
}
