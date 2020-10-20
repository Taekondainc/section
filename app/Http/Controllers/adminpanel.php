<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\localbusinesses;

use App\products;
use App\vacancies;
use App\covid;
use App\blog;
use App\question;
use App\comments;
use App\events;
use App\review;
use App\sitereview;
use App\queries;
use Cloudder;
class adminpanel extends Controller
{
    public function sponsor(request $request)
    {
        $query = queries::orderByDesc('id')->get();
        return response()->json(["data" => $query], 200);
    }

    public function getspon(Type $var = null)
    {
      $query = queries::orderBy('id', 'desc')->take(6)->get();
        return response()->json($query, 200);
    }
  public function sponsoradd(request $request)
    {
        $file = base64_encode(file_get_contents($request->file("file")));
        $request = new queries();
        $request->name = request("name");
        $request->image =$file;;
        $request->quote = request("quote");

        $request->save();
    }
public function reviewresponses(request $request)
{

        $request = new sitereview();
        $request->name = request("name");
        $request->description = request("description");
        $request->email = request("email");

        $request->save();
}
    public function getreviewresponses(request $request)
    {

        $query = sitereview::orderBy('id', 'desc')->take(6)->get();
        return response()->json($query, 200);
    }
    public function Questionsupd(request $request)
    {

        $ft = request("file");
        if (!empty($ft)) {
            $file = base64_encode(file_get_contents($request->file("file")));
            $request = new question();
            $request->name = request("name");
            $request->description = request("description");
            $request->approved = request("approve");
            $request->file = $file;
            $request->save();
        } else {

            $request = new question();
            $request->name = request("name");
            $request->description = request("description");
            $request->file = "null";
           $request->approved = request("approve");
            $request->save();}
    }
    public function sponsoredit(request $request)
    {

        $changed = request("changed");
        if (!empty($changed)) {
            $id = request("id");
            $reqc = request("name");
            $request1 = queries::where('id', $id)->update(['name' => $reqc]);
            $da = request("quote");
            $request2 = queries::where('id', $id)->update(['quote' => $da]);


            $stan = request("file");
            $mat = request("file")->getClientOriginalName();
            $material = $mat . '.' . $stan->getClientOriginalExtension();
            $allowed = array("jpg", "JPG", "PNG", "jpeg", "bmp", "gif", "png");

            $file_ext = pathinfo($material, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {
                $image = base64_encode(file_get_contents($request->file('file')));
                $request = queries::where('id', $id)->update(['image' => $image]);

            } else {
               echo "empty";
            }
        } else {
            $id = request("id");
            $reqc = request("name");
            $request1 = queries::where('id', $id)->update(['name' => $reqc]);
            $da = request("quote");
            $request2 = queries::where('id', $id)->update(['quote' => $da]);
        }
    }
    public function comdelet(request $request)
    {
        $id = request("id");
        $query = comments::where('id', $id)->delete();
        return response()->json("Success", 200);
    }
    public function sponsordelete(request $request)
    {
        $id = request("id");
        $query = queries::where('id', $id)->delete();
        return response()->json("Success", 200);
    }
    public function qdcm(request $request)
    {
        $id = request("id");
        $query = comments::where('cid', $id)->get();
        return response()->json($query, 200);
    }
    public function revdedit(request $request)
    {
        $id = request("id");
        $query = review::where('id', $id)->get();
        return response()->json($query, 200);
    }
    public function sponsorid(request $request)
    {
        $id = request("id");
        $query = queries::where('id', $id)->get();
        return response()->json($query, 200);
    }

    public function reviewupd(request $request)
    {

            $id = request('id');


            $name = request("review");
            $request1 = review::where('id', $id)->update(['review' => $name]);




    }
    public function QuestionsupdED(request $request)
    {
        $changed = request("changed");

        if (!empty($changed)) {

            $id = request('id');


            $name = request("name");
            $request1 = question::where('id', $id)->update(['name' => $name]);

            $description = request("description");
            $request2 = question::where('id', $id)->update(['description' => $description]);

            $approved = request("approve");
            $request2 = question::where('id', $id)->update(['approved' => $approved]);

            $file = base64_encode(file_get_contents($request->file("file")));
            $request2 = question::where('id', $id)->update(['file' => $file]);
        } else {
            $id = request('id');

            $name = request("name");
            $request1 = question::where('id', $id)->update(['name' => $name]);

            $description = request("description");
            $request2 = question::where('id', $id)->update(['description' => $description]);

            $approved = request("approve");
            $request2 = question::where('id', $id)->update(['approved' => $approved]);
        }
    }
public function adminproducts(request $request)
{



        $file = request('productfile');
        foreach ($file as $filer => $x) {
            $selected = request('products');

            $request = new products();
            $company = request('company');
            $request->approved=request('approved');
            $request->name = $company;




            $request->products =  $selected[$filer];


            $request->file = base64_encode(file_get_contents($file[$filer]));

            $request->save();
        }
        return response()->json(['success' => "Your products has been added"]);
 // $query = products::all();
            //    return response()->json(['success' => $query]);
        //  $last_name = $request->last_name;
        // for ($count = 0; $count < count($first_name); $count++) {
        ///    $data = array(
        //    'first_name' => $first_name[$count]
        //  'last_name'  => $last_name[$count]
        ///    );

        //
}
public function localbupdt(request $request)
{
        $changed = request("changed");

        if (!empty($changed)) {

        $id = request('id');

        $name = request('business');
        $request1 = localbusinesses::where('id', $id)->update(['name' => $name]);
        $description = request('description');
        $request2 = localbusinesses::where('id', $id)->update(['description' => $description]);
        $contact = request('contact');
        $request4 = localbusinesses::where('id', $id)->update(['contact' => $contact]);

            $region= request('region');
            $request1 = localbusinesses::where('id', $id)->update(['region' => $region]);
            $email = request('email');
            $request2 = localbusinesses::where('id', $id)->update(['email' => $email]);
            $street = request('street');
            $request3 = localbusinesses::where('id', $id)->update(['street' => $street]);
            $con= request('county');
            $request4 = localbusinesses::where('id', $id)->update(['county' => $con]);
            $website = request('website');
            $request3 = localbusinesses::where('id', $id)->update(['website' => $website]);
            $category = request('category');
            $request4 = localbusinesses::where('id', $id)->update(['category' =>$category]);

        $image = base64_encode(file_get_contents($request->file('file')));
        $request5= localbusinesses::where('id', $id)->update(['file' => $image]);
            $approved = request('approve');
            echo $approved;
            $request6 = localbusinesses::where('id', $id)->update(['approved' => $approved]);

        //  $header=header('content-type', "multi-part/formdata");
        // $file->move(public_path('upload'), $picture);
        //  $name = request('name');
        // $file = request('file')->getClientOriginalName();
        //  $file_move = $file . '.' . request('file')->getClientOriginalExtension();
        //$rf    = $request->file->move($upload_path, $file_move);
        //$img = file_get_contents( $rf );
        //$generated_new_name = $img;
        //      $package = $generated_new_name;

        // $send = base64_encode($package);
        // $request = new localbusinesses();
        // $request->file = base64_encode($send);
        // $request->name = request('name');
        //$request->save();
        //  $file_name = $request->$file->getClientOriginalName();
        //  $generated_new_name = time() . '.' .$request->$file_name->getClientOriginalExtension();
        //$img = file_get_contents($package);


        // return response()->json(['success' => $send]);

        return response()->json(["success" => "Application Success uploaded, Return in a Week to see AD"]);


        }else{

            $id = request('id');
            $name = request('business');
            $request1 = localbusinesses::where('id', $id)->update(['name' => $name]);
            $description = request('description');
            $request2 = localbusinesses::where('id', $id)->update(['description' => $description]);

            $region = request('region');
            $request1 = localbusinesses::where('id', $id)->update(['region' => $region]);
            $email = request('email');
            $request2 = localbusinesses::where('id', $id)->update(['email' => $email]);
            $street = request('street');
            $request3 = localbusinesses::where('id', $id)->update(['street' => $street]);
            $con = request('county');
            $request4 = localbusinesses::where('id', $id)->update(['county' => $con]);
            $website = request('website');
            $request3 = localbusinesses::where('id', $id)->update(['website' => $website]);
            $category = request('category');
            $request4 = localbusinesses::where('id', $id)->update(['category' => $category]);
            $contact = request('contact');
            $request4 = localbusinesses::where('id', $id)->update(['contact' => $contact]);
            $approved = request('approve');
            $request5 = localbusinesses::where('id', $id)->update(['approved' => $approved]);
            return response()->json(["success" => "Application Success uploaded, Return in a Week to see AD"]);
        }
}
   public function approvedevent(request $request )
   {
        $request=request("id");
      //  echo $request;
        $request = events::where('id', $request)->update(['approved' => "Approved"]);
        return response()->json(["tl" => "Success"], 200);
   }

    public function productA(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = products::where('id', $request)->update(['Approved' => "Approved"]);
        return response()->json(["tl" => "Success"], 200);
    }
    public function localbA(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = localbusinesses::where('id', $request)->update(['approved' => "Approved"]);
        return response()->json(["tl" => "Success"], 200);
    }
    public function localbD(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = localbusinesses::where('id', $request)->update(['approved' => "DisApproved"]);
        return response()->json(["data" => "Success"], 200);
    }
    public function localbdelet(request $reques)
    {
        $request = request("id");
        //  echo $request;
        $request = localbusinesses::where('id', $request)->delete();
        return response()->json(["tl" => "Success"], 200);
    }
    public function
    revdelet(request $reques)
    {
        $request = request("id");
        //  echo $request;
        $request = review::where('id', $request)->delete();
        return response()->json(["tl" => "Success"], 200);
    }

    public function QA(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = question::where('id', $request)->update(['approved' => "Approved"]);
        return response()->json(["tl" => "Success"], 200);
    }
    public function QD(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = question::where('id', $request)->update(['approved' => "DisApproved"]);
        return response()->json(["data" => "Success"], 200);
    }
    public function Qdelet(request $reques)
    {
        $request = request("id");
        //  echo $request;
        $request = question::where('id', $request)->delete();
        return response()->json(["tl" => "Success"], 200);
    }

public function blogupda(request $request)
{
        $request = request("id");
        //  echo $request;
        $request = blog::where('id', $request)->update(['Approved' => "Approved"]);
        return response()->json(["tl" => "Success"], 200);
}
public function productD(request $request)
    {
        $request = request("id");
      //  echo $request;
        $request = products::where('id', $request)->update(['approved' => "DisApproved"]);
        return response()->json(["data" => "Success"], 200);
    }

 public function blogupd(request $request)
    {
        $request = request("id");
      //  echo $request;
        $request = blog::where('id', $request)->update(['Approved' => "DisApproved"]);
        return response()->json(["data" => "Success"], 200);
    }
public function blogdelet(request $reques)
{
        $request = request("id");
        //  echo $request;
        $request = blog::where('id', $request)->delete();
        return response()->json(["tl" => "Success"], 200);
}
    public function Deletevent(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = events::where('id', $request)->delete();
        return response()->json(["tl" => "Success"], 200);
    }
    public function Deletvaca(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = vacancies::where('id', $request)->delete();
        return response()->json(["tl" => "Success"], 200);
    }
    public function productDelet(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = products::where('id', $request)->delete();
        return response()->json(["tl" => "Success"], 200);
    }

    public function Dapprovedevent(request $request)
    {
        $request = request("id");
      //  echo $request;
        $request = events::where('id', $request)->update(['Approved' => "DisApproved"]);
        return response()->json(["data" => "Success"], 200);
    }
    public function lbinfo(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = localbusinesses::where('id', $request)->get();
        return response()->json(["data" => $request], 200);
    }
    public function QAINFO(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = question::where('id', $request)->get();
        return response()->json(["data" => $request], 200);

    }
    public function blogedit(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = blog::where('id', $request)->get();
        return response()->json(["data" => $request], 200);
    }
    public function qdedit(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = question::where('id', $request)->get();
        return response()->json(["data" => $request], 200);
    }
    public function productedit(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = products::where('id', $request)->get();
        return response()->json(["data" => $request], 200);
    }
    public function vacantedit(request $request)
    {
        $request = request("id");
        //  echo $request;
        $request = vacancies::where('id', $request)->get();
        return response()->json(["data" => $request], 200);
    }

    public function Editevent(request $request)
    {
         $request = request("id");
      //  echo $request;
        $request = events::where('id', $request)->get();
        return response()->json(["data" => $request], 200);
    }
    public function updatetevent(request $request)
    {
        $changed = request("changed");
        if (!empty($changed)) {
            $id = request("id");
            $Approved = request("Approve");
           $request1 = events::where('id', $id)->update(['Approved' => $Approved]);
            $reqc = request("name");
            $request1 = events::where('id', $id)->update(['name' => $reqc]);
            $da = request("description");
            $request2 = events::where('id', $id)->update(['description' => $da]);
            $request3 = request("url");
            $request2 = events::where('id', $id)->update(['urltext' => $request3]);


            $stan = request("file");
            $mat = request("file")->getClientOriginalName();
            $material = $mat . '.' . $stan->getClientOriginalExtension();
            $allowed = array("jpg", "JPG", "PNG", "jpeg", "bmp", "gif", "png");

            $file_ext = pathinfo($material, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {
                $image = base64_encode(file_get_contents($request->file('file')));
                $request = events::where('id', $id)->update(['image' => $image]);
                $request = events::where('id', $id)->update(['url' => 'null']);
            } else {
                $pic = request('file')->getClientOriginalName();
                $picture = request('file');
                $ft = Cloudder::uploadVideo($picture, null, array("timeout" => 200000, 'original_filename' => $pic, "folder" => 'growgy'));
                $tg = Cloudder::getResult($ft);
                $url = $tg['url'];
               $request = events::where('id', $id)->update(['url' => $url]);
                $request = events::where('id', $id)->update(['image' => 'null']);
            }


        } else {
            $id = request("id");
            $Approved = request("Approve");
            $request1 = events::where('id', $id)->update(['Approved' => $Approved]);
            $reqc = request("name");
            $request1 = events::where('id', $id)->update(['name' => $reqc]);
            $da = request("description");
            $request2 = events::where('id', $id)->update(['description' => $da]);
            $request3 = request("url");
            $request2 = events::where('id', $id)->update(['urltext' => $request3]);

        }

    }
    public function cancel(request $request){
$request;
 die($this->updatetevent($request));
    }
public function admineditupd(request $request)
{

        $changed = request("changed");

        if (!empty($changed)) {
  $id = request('id');
                $author = request('author');
                $request1 = blog::where('id', $id)->update(["author" => $author]);
                $title = request('title');
                $request2 = blog::where('id', $id)->update(["title" => $title]);
                $content = request('content');
                $request3 = blog::where('id', $id)->update(["content" => $content]);
            $category = request('category');
                $request5 = blog::where('id', $id)->update(["category" => $category]);
                $approved = request('Approve');
                $request6 = blog::where('id', $id)->update(["approved" => $approved]);
            $image = base64_encode(file_get_contents($request->file("file")));

            $stan = request("file");
            $mat = request("file")->getClientOriginalName();
            $material = $mat . '.' . $stan->getClientOriginalExtension();
            $allowed = array("jpg", "JPG", "PNG", "jpeg", "bmp", "gif", "png");

            $file_ext = pathinfo($material, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {

                // $request->file = $image;

                $url = "null";
                $request4 = blog::where('id', $id)->update(["url" => $url]);
                $category = request('category');

                $image = base64_encode(file_get_contents($request->file('file')));
                $request7 = blog::where('id', $id)->update(["image" => $image]);
                return response()->json(["data" => "Success"], 200);
            } else {
             $thubm= request("thumbnail2");
                if (!empty($thubm))
               { $thumbnail = base64_encode(file_get_contents($request->file('thumbnail2')));}else{
                    $thumbnail="null";
               }
                $pic = request('file')->getClientOriginalName();
                $picture = request('file');
                //  $contain = $pic.$picture;
                $ft = Cloudder::uploadVideo($picture, null, array("timeout" => 200000, 'original_filename' => $pic, "folder" => 'growgy'));
                //  $image_url = Cloudder::show( array ("folder" => 'growgy'));
                $tg = Cloudder::getResult($ft);
                $url = $tg['url'];
               // echo $tg['url'];
                $request4 = blog::where('id', $id)->update(["url" => $url]);
                $request7 = blog::where('id', $id)->update(["image" => $thumbnail]);

                return response()->json(["data" => "Success"], 200);
            }
        } else {
            $id = request('id');
            $author = request('author');
            $request1 = blog::where('id', $id)->update(["author" => $author]);
            $title = request('title');
            $request2 = blog::where('id', $id)->update(["title" => $title]);
            $content = request('content');
            $request3 = blog::where('id', $id)->update(["content" => $content]);

            $category = request('category');
            $request5 = blog::where('id', $id)->update(["category" => $category]);
            $approved = request('Approve');
            $request6 = blog::where('id', $id)->update(["approved" => $approved]);
        }
}
    public function searchproductinfo(request $request)
    {
        $search_id = request("data");
        //echo $search_id;
        $query = products::where('products', 'like', "%{$search_id}%")->get();
        return response()->json($query, 200);
    }
    public function searchreviewdis(request $request)
    {
        $search_id = request("data");
        //echo $search_id;
        $query = sitereview::where('description', 'like', "%{$search_id}%")->get();
        return response()->json($query, 200);
    }
    public function searchlbinfo(request $request)
    {
        $search_id = request("data");
        //echo $search_id;
        $query = localbusinesses::where('name', 'like', "%{$search_id}%")->get();
        return response()->json(["data" => $query], 200);
    }
    public function searchQAINFO(request $request)
    {
        $search_id = request("data");
        //echo $search_id;
        $query = question::where('name', 'like', "%{$search_id}%")->get();
        return response()->json(["data" => $query], 200);
    }
    public function localbusinessesedt(request $request)
    {
          //    $file=
        //$request->file('file');
        //$filename  = $file->getClientOriginalName();
        //$extension = $file->getClientOriginalExtension();
        //$picture   = date('His') . '-' . $filename;
        //$encode=base64_encode($picture);

$bgt= request('rewgion');
     //  echo $bgt;
       $red=request("website");
if(!empty($red)){
        //    $file=
        //$request->file('file');
        //$filename  = $file->getClientOriginalName();
        //$extension = $file->getClientOriginalExtension();
        //$picture   = date('His') . '-' . $filename;
        //$encode=base64_encode($picture);
$image = base64_encode(file_get_contents($request->file('file')));
        $request = new localbusinesses();
            //$request->file = $image;

            $request->name = request('business');
            $request->description = request('description');
            $request->products = request('product');
            $request->contact = request('contact');

            $request->category = request('category');

            $request->products = request('category');
            $request->region = request('region');
            $request->street = request('street');
            $request->county= request('county');

            $request->website= request('website');
            $request->email = request('email');
            $request->approved = request('approve');
        $request->file = $image;
        $request->save();
      //  $header=header('content-type', "multi-part/formdata");
  // $file->move(public_path('upload'), $picture);
        //  $name = request('name');
       // $file = request('file')->getClientOriginalName();
      //  $file_move = $file . '.' . request('file')->getClientOriginalExtension();
  //$rf    = $request->file->move($upload_path, $file_move);
//$img = file_get_contents( $rf );
//$generated_new_name = $img;
  //      $package = $generated_new_name;

       // $send = base64_encode($package);
       // $request = new localbusinesses();
       // $request->file = base64_encode($send);
       // $request->name = request('name');
        //$request->save();
        //  $file_name = $request->$file->getClientOriginalName();
        //  $generated_new_name = time() . '.' .$request->$file_name->getClientOriginalExtension();
 //$img = file_get_contents($package);


       // return response()->json(['success' => $send]);
       $query=localbusinesses::where("approved","null")->get();
    return response()->json(["success"=>"Application Success uploaded, Return in a Week to see AD"]);
}else{
            $image = base64_encode(file_get_contents($request->file('file')));
            $request = new localbusinesses();
            //$request->file = $image;

            $request->name = request('business');
            $request->description = request('description');
            $request->products = request('product');
            $request->contact = request('contact');

            $request->category = request('category');

            $request->products = request('category');
            $request->region = request('region');
            $request->street = request('street');
            $request->county = request('county');
            $request->email = request('category');
            $request->website = "None";
            $request->email = request('email');

            $request->approved = request('approve');
            $request->file = $image;
            $request->save();
            $query = localbusinesses::where("approved", "null")->get();
            return response()->json(["success" => "Application Success uploaded, Return in a Week to see AD"]);

}

      //  $header=header('content-type', "multi-part/formdata");
  // $file->move(public_path('upload'), $picture);
        //  $name = request('name');
       // $file = request('file')->getClientOriginalName();
      //  $file_move = $file . '.' . request('file')->getClientOriginalExtension();
  //$rf    = $request->file->move($upload_path, $file_move);
//$img = file_get_contents( $rf );
//$generated_new_name = $img;
  //      $package = $generated_new_name;

       // $send = base64_encode($package);
       // $request = new localbusinesses();
       // $request->file = base64_encode($send);
       // $request->name = request('name');
        //$request->save();
        //  $file_name = $request->$file->getClientOriginalName();
        //  $generated_new_name = time() . '.' .$request->$file_name->getClientOriginalExtension();
 //$img = file_get_contents($package);


       // return response()->json(['success' => $send]);


    }
    public function  vacantinfo(request $request)
    {

        $query = vacancies::all();
        return response()->json($query, 200);
    }
    public function vacantentry(request $request)
    {
        $request = new vacancies();
        $request->company = request("company");
        $request->location = request("location");
        $request->salary = request("salary");
        $request->requirement = request("requirements");
        $request->jobdesc = request("jobdesc");
        $request->contact = request("contact");
        $request->save();
    }
    public function admineditvaca(request $request)
    {
        $id = request('id');
        $author = request('company');
        $request1 = vacancies::where('id', $id)->update(["company" => $author]);
        $author2 = request('location');
        $request1 = vacancies::where('id', $id)->update(["location" => $author2]);
        $author3 = request('salary');
        $request1 = vacancies::where('id', $id)->update(["salary" => $author3]);
        $author4 = request('requirements');
        $request1 = vacancies::where('id', $id)->update(["requirement" => $author4]);
        $author5 = request('jobdesc');
        $request1 = vacancies::where('id', $id)->update(["jobdesc" => $author5]);
        $author6 = request('contact');
        $request1 = vacancies::where('id', $id)->update(["contact" => $author6]);

    }

    public function searchvacaninfo(request $request)
    {
        $search_id = request("data");
        //echo $search_id;
        $query = vacancies::where('company', 'like', "%{$search_id}%")->get();
        return response()->json($query, 200);
    }

public function blogadmin(request $request)
{
        $image = base64_encode(file_get_contents($request->file('file')));

        $stan = request("file");
        $mat = request("file")->getClientOriginalName();
        $material = $mat . '.' . $stan->getClientOriginalExtension();
        $allowed = array("jpg", "JPG", "PNG", "jpeg", "bmp", "gif", "png");

        $file_ext = pathinfo($material, PATHINFO_EXTENSION);

        if (in_array($file_ext, $allowed)) {
            $request = new blog();
            // $request->file = $image;

            $request->author = request('author');
            $request->title = request('title');
            $request->content = request('content');
            $request->url = "null";
            $request->category = request('category');
            $request->approved = request('approved');
            $request->image = $image;
            $request->save();
            return response()->json(["data" => "Success"], 200);
        } else {
            $thumbnail = base64_encode(file_get_contents($request->file('thumbnail')));
            $pic = request('file')->getClientOriginalName();
            $picture = request('file');
            //  $contain = $pic.$picture;

            $ft = Cloudder::uploadVideo($picture, null, array("timeout" => 200000, 'original_filename' => $pic, "folder" => 'growgy'));
            //  $image_url = Cloudder::show( array ("folder" => 'growgy'));
            $tg = Cloudder::getResult($ft);
            $url = $tg['url'];
            echo $tg['url'];
            $request = new blog();
            // $request->file = $image;

            $request->author = request('author');
            $request->title = request('title');
            $request->content = request('content');
            $request->category = request('category');
            $request->approved = request('approved');
            $request->url = $url;
            $request->image = $thumbnail;
            $request->save();
            return response()->json(["data" => "Success"], 200);
        }

       //  $imagef=
       // $request = new blog();
        //$request->file = $image;

        //$request->author = request('author');
      //  $request->title = request('title');
       // $request->content = request('content');
       // $request->category = request('category');
       // $request->approved = "null";
       // $request->image = $image;
       // $request->save();
      //  return response()->json(["data" => "Success"], 200);
}
public function producteditentry(request $request)
    {
        $changed = request("changed");
        if (!empty($changed)) {
            $id = request("id");
            $Approved = request("approved");
           $request1 = products::where('id', $id)->update(['approved' => $Approved]);
            $reqc = request("name");
            $request1 = products::where('id', $id)->update(['name' => $reqc]);
            $da = request("products");
            $request2 = products::where('id', $id)->update(['products' => $da]);


            $stan = request("file");
            $mat = request("file")->getClientOriginalName();
            $material = $mat . '.' . $stan->getClientOriginalExtension();

            $allowed = array("jpg", "JPG", "PNG", "jpeg", "bmp", "gif", "png");

            $file_ext = pathinfo($material, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {
                $image = base64_encode(file_get_contents($request->file('file')));
           // echo $image;
            $request = products::where('id', $id)->update(['file' => $image]);
   } else {
              echo "empty"; }


        } else {
            $id = request("id");
            $Approved = request("approved");
            $request1 = products::where('id', $id)->update(['approved' => $Approved]);
            $reqc = request("name");
            $request1 = products::where('id', $id)->update(['name' => $reqc]);
            $da = request("products");
            $request2 = products::where('id', $id)->update(['products' => $da]);

        }

    }


}
