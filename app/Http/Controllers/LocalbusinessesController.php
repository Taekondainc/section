<?php

namespace App\Http\Controllers;


use App\localbusinesses;
use Illuminate\Http\Request;
use App\products;
use App\vacancies;
use App\covid;
use Illuminate\Support\Facades\Mail;
use App\Mail\subscribe;
use App\blog;
use App\question;
use App\comments;
use App\events;
use App\subscriber;
use App\queries;
use App\rating;
use App\review;
use App\trating;
use Cloudder;
class LocalbusinessesController extends Controller
{
public function getallreviews(request $request)
{
        $query = review::orderByDesc('id')->get();
        return response()->json(["data" => $query], 200);
}
    public function subscribe()
    {
    $request=new subscriber();
    $request->email=request("email");
    $request->save();
    }
   public function entry(request $request)
   {$bgt= request('rewgion');
   //    echo $bgt;
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
        $request->approved="Disapprove";
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

            $request->approved = "null";
            $request->file = $image;
            $request->save();
            $query = localbusinesses::where("approved", "null")->get();
            return response()->json(["success" => "Application Success uploaded, Return in a Week to see AD"]);

}


   }
      public function getbusiness(request $request)
    {
        $id = request('id');
        $lb = localbusinesses::where("id", $id)->orderByDesc('id')->get();

            return response()->json(["localb" => $lb],200);
    }
    public function reviewget(request $request)
    {
        $id = request('id');
        $lb = review::where("uid", $id)->orderByDesc('id')->get();

        return response()->json($lb, 200);
    }
    public function localbsearch(request $request)
    {
        $id = request("data");

        $lb = localbusinesses::where("name",'like', "%{$id}%")->orderByDesc('id')->get();

        return response()->json(["data" => $lb], 200);
    }public function searchreview(request $request)
    {
        $id = request("data");

        $lb = review::where("review", 'like', "%{$id}%")->orderByDesc('id')->get();

        return response()->json(["data" => $lb], 200);
    }
    public function localbsearcht(request $request)
    {
        $id = request("data");

        $lb = localbusinesses::where("category", 'like', "%{$id}%")->orderByDesc('id')->get();

        return response()->json(["data" => $lb], 200);
    }

    public function getproducts(request $request)
    {

        $getter = request('name');
        $products = products::where("name", $getter)->get();
        if (count($products) > 0) {
            foreach ($products as $product) {
                $name = $product['name'] . " Products";
            }
            return response()->json(["products" => $products, "name" => $name]);
        } else {
            $headers
                = header('Content-type: application/json');
            $data = "NO Products for " . $getter;
            return response()->json(["data" => $data, "name" => $getter], 200);
        }
    }
    public function gtrate(request $request)
    {
        $reques = request("id");
        $db = trating::where("uid", $reques)->count();
        if (
            $db != 0
        ) {
            $db = trating::where("uid", $reques)->get();
            return response()->json($db, 200);
        } else {
            return 0;
        }
    }
    public function createrate(request $request)
    {
        $rating = request("rating");
        $id = request("uid");
        $query=rating::where("uid",$id)->count();
        if($query==0){
$request=new rating();
$request->uid=request("uid");
$request->sum=request("rating");
$request->total=request("rating");
$request->save();
$request=new trating();
$request->uid=request("uid");
$request->total=request("rating");
$request->save();
 $rating = request("rating");
return response()->json($rating, 200);
        }else{
            $request = new rating();
            $request->uid = request("uid");
            $request->sum = request("rating");
            $req = request("uid");
            $checker = rating::where("uid", $req)->sum("sum");
            $camt = rating::where("uid", $req)->count();
            $total = $checker / $camt;
            $request->total = $total;
            $request->save();
            $req=request("uid");
            $checker1=rating::where("uid",$req)->sum("sum");
            $camt1=rating::where("uid",$req)->count();
            $total1=$checker1/$camt1;

            $requpdated = rating::where("uid", $req)->update(['total' => $total1]);
            $requpdate=trating::where("uid",$req)->update(['total' => $total1]);
            return response()->json($total1, 200);
        }

    }

    public function products(request $request)
    {
        // $request=request("company");
        //  $request=request("file");



        $file = request('productfile');
        foreach ($file as $filer => $x){
        $selected = request('products');

            $request = new products();
            $company = request('company');
            $request->name = $company;




            $request->products =  $selected[$filer];


                $request->file = base64_encode(file_get_contents($file[$filer]));

                $request->approved = "approved";
                $request->save();

        }
return response()->json(['success'=>"Your products has been added"]);
 // $query = products::all();
            //    return response()->json(['success' => $query]);
        //  $last_name = $request->last_name;
        // for ($count = 0; $count < count($first_name); $count++) {
        ///    $data = array(
        //    'first_name' => $first_name[$count]
        //  'last_name'  => $last_name[$count]
        ///    );

        // }

    }
    public function vacancies(request $request)
    {
    $request=new vacancies();
    $request->company=request("company");
    $request->location=request("location");
    $request->salary=request("salary");
    $request->requirement=request("requirements");
    $request->jobdesc = request("jobdesc");
     $request->contact = request("contact");
    $request->save();
    }
    public function display(request $request)
    {
    $query=localbusinesses::orderByDesc('id')->get();
 return response()->json(["data"=>$query], 200);
    }
    public function productsview(request $request)
    {
        $query = products::orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function vacants(request $request)
    {
        $query = vacancies::orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function product()
    {
       $getter=request('id');
       $products=products::where("name",$getter)->get();
if (count($products)>0){
    foreach ($products as $product){
$name=$product['name']." Products";

    }
       return response()->json(["products"=>$products,"name"=>$name]);}
       else{
           $headers
            = header('Content-type: application/json');
         $data="NO Products for ".$getter;
            return response()->json(["data"=>$data, "name" => $getter],200);

       }

    }

    public function addcoivd()
    {
        $request = new covid();


        $request->name=request("name");
        $request->aid = request("aid");
        $request->prefix= request("prefix");
        $request->address= request("address");
        $request-> region= request("region");
        $request->contact= request("contact");
        $request->members=request("members");
        $request->disable=request("disable");
        $request->nonemp=request("non");
        $request->parent=request("parent");
        $request->assist=request("assist");
        $request->pensioner=request("pensioner");
        $request->employment=request("employment");

       $request->save();


    }public function review(request $request)
    {
        $request = new review();


        $request->review = request("review");
        $request->uid = request("uid");


        $request->save();
        return response()->json( "Your Submission was a  Success", 200);
    }
    public function blog(request $request)
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
        $request->approved = "not approved";
        $request->image = $image;
        $request->save();
              $query = subscriber::all();
              foreach ($query as $product) {
                  $name = $product->email;

            $st= request("title");
                $stp = request("content");
            $data
                = array(

                    'email'=> $name,
                    'subject' => $st,
                    'message' =>  $stp,
                );
                Mail::to($name)
                ->cc('gggrowgy@gmail.com')
                ->bcc('gggrowgy@gmail.com')
                ->send(new subscribe($data));

                if (Mail::failures()) {
                    // return with failed message
                }


            }

//$subject=request("title");
//$message=request("description");


              //  mail($name, $subject, $message);

             //   Mail::to(serialize($name))->send(new subscribe($data));



        return response()->json(["data" => "Success"], 200);
        } else {
            $thumbnail = base64_encode(file_get_contents($request->file('thumbnail')));
            $pic = request('file')->getClientOriginalName();
            $picture = request('file');
      //  $contain = $pic.$picture;

            $ft = Cloudder::uploadVideo($picture, null, array("timeout" => 200000, 'original_filename' => $pic, "folder" => 'growgy'));
            //  $image_url = Cloudder::show( array ("folder" => 'growgy'));
            $tg = Cloudder::getResult($ft);
             $url=$tg['url'];
         //   echo $tg['url'];
            $request = new blog();
            // $request->file = $image;

            $request->author = request('author');
            $request->title = request('title');
            $request->content = request('content');
            $request->category = request('category');
            $request->approved = "null";
            $request->url = $url;
            $request->image = $thumbnail;
            $request->save();
            $query = subscriber::all();
            foreach ($query as $product) {
                $name = $product->email;

                $st = request("title");
                $stp = request("content");
                $data
                    = array(

                        'email' => $name,
                        'subject' => $st,
                        'message' =>  $stp,
                    );
                Mail::to($name)
                    ->cc('gggrowgy@gmail.com')
                    ->bcc('gggrowgy@gmail.com')
                    ->send(new subscribe($data));

                if (Mail::failures()) {
                    // return with failed message
                }
            }
            // $query = subscriber::all();
            // foreach ($query as $product) {
            //    $name = $product['email'];

            //    $to = $name;
            //    $subject = request('title');
            //    $from = "GrowGuyana.com";
            //    Mail::send(new subscribe($to, $subject, $from));

            //    return response()->json([
            //        'message' => 'Email has been sent.'
            //    ]);
            // }
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
    public function bloginfo(request $request)
    {

        $query = blog::orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function blogcontent(request $request)
    {
        $search_id=request("id");
        $query = blog::where('id',$search_id)->orderByDesc('id')->get();
        return response()->json($query, 200);
    }

    public function searchevent(request $request)
    {
        $search_id = request("data");
        //echo $search_id;
        $query = events::where('name', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function regionsget(request $request)
    {

        //echo $search_id;
        $query = localbusinesses::where('region', "1")->orderByDesc('id')->get();

        $query2 = localbusinesses::where('region', "2")->orderByDesc('id')->get();

        $query3 = localbusinesses::where('region', "3")->orderByDesc('id')->get();

        $query4 = localbusinesses::where('region', "4")->orderByDesc('id')->get();

        $query5 = localbusinesses::where('region', "5")->orderByDesc('id')->get();

        $query6 = localbusinesses::where('region', "6")->orderByDesc('id')->get();

        $query7 = localbusinesses::where('region', "7")->orderByDesc('id')->get();

        $query8 = localbusinesses::where('region', "8")->orderByDesc('id')->get();

        $query9 = localbusinesses::where('region', "9")->orderByDesc('id')->get();

        $query10 = localbusinesses::where('region', "10")->orderByDesc('id')->get();
        return response()->json([
            "data" => $query,
             "data1" => $query2,
             "data2" => $query3,
            "data3" => $query4,
            "data4" => $query5,
            "data5" =>$query6,
            "data6" => $query7,
            "data7" => $query8,
            "data8" => $query9,
            "data0" => $query10
        ], 200);

    }
    public function Fashion(request $request)
    {

        $search_id = "Fashion";
        $query =
            blog::where('category', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function agriblog(request $request)
    {

        $search_id = "Agriculture";
        $query =
            blog::where('category', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function blogbus(request $request)
    {

        $search_id = "usiness";
        $query =
            blog::where('category', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function blogsports(request $request)
    {

        $search_id = "sports";
        $query =
            blog::where('category', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function blogfood(request $request)
    {

        $search_id = "food";
        $query =
            blog::where('category', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function blogTravel(request $request)
    {

        $search_id = "Travel";
        $query =
            blog::where('category', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }

    public function blogEducation(request $request)
    {

        $search_id = "Education";
        $query =
            blog::where('category', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }

    public function blogothers(request $request)
    {

        $search_id = "others";
        $query =
            blog::where('category', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function blogpolitic(request $request)
    {

        $search_id = "politic";
        $query =
            blog::where('category', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }

     public function searchblogcontent(request $request)
    {
        $search_id=request("data");
        //echo $search_id;
        $query = blog::where('title','like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function searchvinfo(request $request)
    {
        $search_id = request("data");
        //echo $search_id;
        $query = vacancies::where('jobdesc', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
public function getb(request $request)
{
        $query = Blog::orderBy('id', 'desc')->take(6)->get();
        return response()->json($query, 200);
}
public function QNA(request $request)
{
       $ft=request("file");
       if(!empty($ft)){
            $file = base64_encode(file_get_contents($request->file("file")));
            $request = new question();
            $request->name = request("name");
            $request->description = request("description");
            $request->approved = "null";
             $request->file = $file;
            $request->save();

    }else{

            $request = new question();
            $request->name = request("name");
            $request->description = request("description");
            $request->file = "null";
            $request->approved = "null";
            $request->save();
        }

}  public function QNAS(request $request)
    {

        $query = question::orderByDesc('id')->get();
        return response()->json( $query, 200);
    }
    public function searchqinfo(request $request)
    {
        $search_id = request("data");
       // echo $search_id;
        //echo $search_id;
        $query =question::where('description', 'like', "%{$search_id}%")->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function getquest(request $request)
    {
        $search_id = request("id");
        $query = question::where('id', $search_id)->orderByDesc('id')->get();
        return response()->json($query, 200);
    }
    public function relpy(request $request)
    {
      //  $id = request("id");
        //$comment = request("comment");
        $ft = request("file");
        if (!empty($ft)) {
            $file = base64_encode(file_get_contents($request->file("file")));
            $request = new comments();
            $request->cid = request("id");
            $request->name = request("name");
            $request->reply = request("comment");
            $request->file = $file;
            $request->save();
            $id = request("id");
            $query = comments::where('cid', $id)->orderByDesc('id')->get();
            return response()->json($query, 200);
        } else {

            $request = new comments();
            $request->cid = request("id");
            $request->name = request("name");
            $request->reply = request("comment");
            $request->file = "null";
            $request->save();
            $id = request("id");
            $query = comments::where('cid', $id)->orderByDesc('id')->get();
            return response()->json($query, 200);
        }}
        public function comments(request $request)
        {
        $id = request("id");
        $query = comments::where('cid', $id)->orderByDesc('id')->get();
        return response()->json($query, 200);
        }
 public function gettotal()
 {
        $query = localbusinesses::orderByDesc('id')->get()->count();
        $query2 = products::orderByDesc('id')->get()->count();
        $query3 = events::orderByDesc('id')->get()->count();
        $query4 = blog::orderByDesc('id')->get()->count();
        $query5 = question::orderByDesc('id')->get()->count();
        $query6 = vacancies::orderByDesc('id')->get()->count();
        return response()->json(["data" => $query ,"data1" =>$query2, "data2" =>$query3,
         "data3" => $query4,
         "data4" => $query5, "data5" => $query6]);
 }
}
