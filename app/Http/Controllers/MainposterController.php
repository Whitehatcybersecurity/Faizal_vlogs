<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mainposter;
use Illuminate\Http\Request;
use App\Traits\common;

class MainposterController extends Controller
{

    use Common;
    public function mainposterStore(Request $request){

        $request->validate(
            [
                'txtMainposterName' => 'required',
                'fileMainposterImage' => ($request->hdMainposterId == null) ? 'required' : '',
                // Remove validation for update scenario
            ],
            [
                'fileMainposterImage.required' => 'Mainposter Image is Required',
                'txtMainposterName.required' => 'Mainposter Name is Required'
            ]
        );

        if($request->hdMainposterId == null){

            $mainposter = Mainposter::Create([
                'mainposter_tittle' => $request->txtMainposterName,
            ]);
            
            if ($request->hasFile('fileMainposterImage')) {
                $file = $request->file('fileMainposterImage');
                $extension = $file->getClientOriginalExtension();
                $fileName = $this->generateRandom(16) . '.' . $extension;
    
                Mainposter::findorfail($mainposter->id)->update([
                    'mainposter_image' => $this->fileUpload($file, 'upload/mainposter/' . $mainposter->id, $fileName)
                ]);
            }
            $notification = array(
                'message' => 'Mainposter Created Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);

        }else{

            $oldImage = $request->hdMainposterImage;
                if ($request->hasFile('fileMainposterImage')) {
                    @unlink($oldImage);
                    $files = $request->file('fileMainposterImage');
                    $extensions = $files->getClientOriginalExtension();
                    $fileNames = $this->generateRandom(16) . '.' . $extensions;
                }

                Mainposter::findorFail($request->hdBrandId)->update([
                    'mainposter_tittle' => $request->txtMainposterName,
                    'mainposter_image' => ($request->hasFile('fileMainposterImage')) ? $this->fileUpload($request->file('fileMainposterImage'), 'upload/mainposter/' . $request->hdMainposterId, $fileNames) : $oldImage,
                   
                ]);

                $notification = array(
                    'message' => 'Mainposter Updated Successfully',
                    'alert-type' => 'success'
                );

                return redirect()->back()->with($notification);
        }
    }
}
