<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Traits\common;

class DestinationController extends Controller
{
    use common;
    Public function destinationView()
    {
        // $mainposters = Mainposter::first();
        return view('back_end.destination');

    }

    
      public function destinationStore(Request $request){

        $request->validate(
            [
                'txtDestinationName' => 'required',
                'txtDestinationVlog' => 'required',
                'fileDestinationImage' => ($request->hdDestinationId == null) ? 'required' : '',
                // Remove validation for update scenario
            ],
            [
                'fileDestinationImage.required' => 'Destination Image is Required',
                'txtDestinationName.required' => 'Destination Name is Required',
                'txtDestinationVlog.required' => 'Destination Vlog is Required',
            ]
        );

        if($request->hdDestinationId == null){

            $destination = Destination::Create([
                'destination_name' => $request->txtDestinationName,
                'destination_vlog' => $request->txtDestinationVlog,
            ]);
            
            if ($request->hasFile('fileDestinationImage')) {
                $file = $request->file('fileDestinationImage');
                $extension = $file->getClientOriginalExtension();
                $fileName = $this->generateRandom(16) . '.' . $extension;
    
                Destination::findorfail($destination->id)->update([
                    'destination_image' => $this->fileUpload($file, 'upload/destination/' . $destination->id, $fileName)
                ]);
            }
            $notification = array(
                'message' => 'Destination Created Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);

        }else{

            $oldImage = $request->hdDestinationImage;
                if ($request->hasFile('destination_image')) {
                    @unlink($oldImage);
                    $files = $request->file('destination_image');
                    $extensions = $files->getClientOriginalExtension();
                    $fileNames = $this->generateRandom(16) . '.' . $extensions;
                }

                Destination::findorFail($request->hdDestinationId)->update([
                    'destination_name' => $request->txtDestinationName,
                    'destination_vlog' => $request->txtDestinationVlog,
                    'destination_image' => ($request->hasFile('fileDestinationImage')) ? $this->fileUpload($request->file('fileDestinationImage'), 'upload/destination/' . $request->hdDestinationId, $fileNames) : $oldImage,
                   
                ]);

                $notification = array(
                    'message' => 'Destination Updated Successfully',
                    'alert-type' => 'success'
                );

                return redirect()->back()->with($notification);
        }
    }

    public function getDestinationData(){

        $destination = Destination::orderBy('id', 'ASC')
            ->get();
        return datatables()->of($destination)
            ->addColumn('action', function ($row) {
                $html = "";
                // $html = '<i class="text-primary ri-pencil-line"
                // onclick="doEdit(' . $row->id . ');"></i> ';
                $html = '<button class="btn btn-success waves-effect waves-light"
                onclick="doEdit(' . $row->id . ');">Edit</button> ';
                $html .= '<button class="btn btn-danger waves-effect waves-light" id="confrim-color(' . $row->id . ')" onclick="showDelete(' . $row->id . ');">Delete</button>';
                return $html;
            })->toJson();
    }

    public function getDestinationById($id){

        $destination = Destination::where('id', $id)->first();
            return response()->json([
                'destination' => $destination
            ]);

    }

    public function deleteDestination(Request $request, $id){

        $destination = Destination::findorfail($id);
        $destination->delete();

        $notification = array(
            'message' => 'Destination Deleted Successfully',
            'alert' => 'success'
        );

        return response()->json([
            'responseData' => $notification
        ]);
    }

}
