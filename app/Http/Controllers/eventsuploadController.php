<?php

namespace App\Http\Controllers;

use Cloudder;
use Illuminate\Http\Request;
use App\events;


class eventsuploadController extends Controller
{
    public function Aindex(request $request)
    {




        $stan = request("file");
        $mat = request("file")->getClientOriginalName();
        $material = $mat . '.' . $stan->getClientOriginalExtension();
        $allowed = array("jpg", "JPG", "PNG", "jpeg", "bmp", "gif", "png");

        $file_ext = pathinfo($material, PATHINFO_EXTENSION);

        if (in_array($file_ext, $allowed)) {
            $image = base64_encode(file_get_contents($request->file('file')));
            $request = new events();
            // $request->file = $image;

            $request->name = request('name');
            $request->description = request('description');
            $ft = request("url");
            if (!empty($ft)) {
                $request->urltext = request('url');
            } else {
                $request->urltext = "None Given";
            }


            $request->url = "null";
            $request->approved =  request('approved');
            $request->image = $image;
            $request->save();
            return response()->json(["data" => "Success"], 200);
        } else {
            //  $thumbnail = base64_encode(file_get_contents($request->file('thumbnail')));
            $pic = request('file')->getClientOriginalName();
            $picture = request('file');
            //  $contain = $pic.$picture;

            $ft = Cloudder::uploadVideo($picture, null, array("timeout" => 200000, 'original_filename' => $pic, "folder" => 'growgy'));
            //  $image_url = Cloudder::show( array ("folder" => 'growgy'));
            $tg = Cloudder::getResult($ft);
            $url = $tg['url'];
          //  echo $tg['url'];
            $request = new events();
            // $request->file = $image;

            $request->name = request('name');
            $request->description = request('description');
            if (!empty($ft)) {
                $request->urltext = request('url');
            } else {
                $request->urltext = "None Given";
            }



            $request->url = $url;
            $request->image = "null";
            $request->approved =  request('approved');
            $request->save();
            return response()->json(["data" => "Success"], 200);
        }




        //  $pic = request('upload')->getClientOriginalName();
        //   $picture = request('upload');
        //  $contain = $pic.$picture;



        //$ft=Cloudder::uploadVideo($picture, null, array("timeout" => 100000, 'original_filename'=> $pic,"folder"=>'growgy') );
        //  $image_url = Cloudder::show( array ("folder" => 'growgy'));
        //  $tg= Cloudder::getResult($ft);

        //echo $tg['url'];


    }
public function index(request $request)
{




        $stan = request("file");
        $mat = request("file")->getClientOriginalName();
        $material = $mat . '.' . $stan->getClientOriginalExtension();
        $allowed = array("jpg", "JPG", "PNG", "jpeg", "bmp", "gif", "png");

        $file_ext = pathinfo($material, PATHINFO_EXTENSION);

        if (in_array($file_ext, $allowed)) {
            $image = base64_encode(file_get_contents($request->file('file')));
            $request = new events();
            // $request->file = $image;

            $request->name = request('name');
            $request->description = request('description');
            $ft=request("url");
            if(!empty($ft)){
              $request->urltext = request('url');
            }else {
                $request->urltext = "None Given";
            }


            $request->url ="null";
            $request->approved = "not approved";
            $request->image = $image;
            $request->save();
            return response()->json(["data" => "Success"], 200);
        } else {
          //  $thumbnail = base64_encode(file_get_contents($request->file('thumbnail')));
            $pic = request('file')->getClientOriginalName();
            $picture = request('file');
            //  $contain = $pic.$picture;

            $ft = Cloudder::uploadVideo($picture, null, array("timeout" => 200000, 'original_filename' => $pic, "folder" => 'growgy'));
            //  $image_url = Cloudder::show( array ("folder" => 'growgy'));
            $tg = Cloudder::getResult($ft);
            $url = $tg['url'];
           // echo $tg['url'];
            $request = new events();
            // $request->file = $image;

            $request->name = request('name');
            $request->description = request('description');
            if (!empty($ft)) {
                $request->urltext = request('url');
            } else {
                $request->urltext = "None Given";
            }



            $request->url = $url;
            $request->image ="null";
             $request->approved = "null";
             $request->save();
            return response()->json(["data" => "Success"], 200);
        }




    //  $pic = request('upload')->getClientOriginalName();
     //   $picture = request('upload');
      //  $contain = $pic.$picture;



//$ft=Cloudder::uploadVideo($picture, null, array("timeout" => 100000, 'original_filename'=> $pic,"folder"=>'growgy') );
      //  $image_url = Cloudder::show( array ("folder" => 'growgy'));
 //  $tg= Cloudder::getResult($ft);

//echo $tg['url'];


}

public function getads()
{
    $query=events::orderByDesc('id')->get();
        return response()->json($query, 200);
}
    public function Eventcontent(request $request)
    {
        $request=request("id");
        $query = events::where("id",$request)->orderByDesc('id')->get();
        return response()->json($query, 200);
    }

}
