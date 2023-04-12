<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

class ImageUploadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $data = Session::get('account');
        $imageName = time().'.'.$request->image->extension();  

        $request->image->move(public_path('img'), $imageName);
  
        DB::table('accounts')
            ->where('Email', $data['Email'])
            ->update(['Photo' => $imageName]);

        $img = Image::make('img/'.$imageName);

        // now you are able to resize the instance
        $img->fit(100);

        // create empty canvas with transparent background
        $canvas = Image::canvas(100, 100);
    
        // draw a black circle on it
        $canvas->circle(100, 50, 50, function ($draw) {
            $draw->background('#000000');
        });
    
        // Mask your image with the shape
        $img->mask($canvas->encode('png', 30), true);
        $img->resize(98, 98);
        $img->save('img/'.$imageName);
            
        // Update the pass value of account
        $data['Photo'] = $imageName;
            
        // Set the modified value of account back to the session
        Session::put('account', $data);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName); 
    }
}