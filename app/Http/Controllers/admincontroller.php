<?php

namespace App\Http\Controllers;

use DB;
use Excel;
use App\Models\blog;
use App\Models\checkin;
use App\Models\contact;
use App\Models\gallery;
use App\Models\product;
use App\Models\service;
use App\Models\stylist;
use App\Models\feedback;
use App\Models\recproduct;
use App\Exports\UserExport;
use App\Models\appointdate;
use App\Models\appointment;
use App\Models\cartproduct;
use App\Models\receptionist;
use Illuminate\Http\Request;
use App\Models\stylistsalary;
use App\Exports\ContactExport;
use App\Exports\ProductExport;
use App\Exports\ServiceExport;
use App\Exports\StylistExport;
use App\Exports\CheckoutExport;
use App\Exports\FeedbackExport;
use App\Models\receptionsalary;
use App\Exports\ReceptionExport;
use App\Exports\AppointdateExport;
use App\Exports\AppointmentExport;
use Illuminate\Foundation\Auth\User;

class admincontroller extends Controller
{
    public function insertcontact(Request $contact)
    {
        $contact->validate ([
            "uname" => "required",
            "uemail" => "required",
            "unumber"=>"required",
            "usubject"=>"required",
            "umessage"=>"required",
        ]);
        $mydata = new contact();
        $mydata->Name =$contact ->uname;
        $mydata->Email =$contact ->uemail;
        $mydata->Number =$contact ->unumber;
        $mydata->Gender =$contact ->usubject;
        $mydata->Message =$contact ->umessage;
        $mydata->save();
     return redirect()->back()->with(["contactmessage"=>"Record Submitted"]);

    }
    public function fetchcontact()
    {
        $contactrecord = contact::all();
        return view('contactdata',compact("contactrecord"));
    }
    public function deletecontactrecord($contactid)
    {
        $mydata = contact::find($contactid);
        $mydata->delete();
        return redirect()->back();
    }
    public function fetchsignup()
    {
        $abc = User::all();
        return view('userdata',compact("abc"));
    }
    public function deletesignuprecord($signupid)
    {
        $mydata = User::find($signupid);
        $mydata->delete();
        return redirect()->back();
    }
    public function updatesignuprecord($signupid)
    {
        $mydata = User::find($signupid);
        return view('userupdate',compact("mydata"));
        
    }
    public function adminupdatedrecord($signupid, Request $req)
    {
        $data = User::find($signupid);  
        $data->name= $req->name; 
        $data->email= $req->email; 
        $data->role= $req->role; 
        $data->update();
        $abc = User::all();
        return view('userdata',compact("abc"));
    }

    public function insertdate(Request $date)
    {
        $mydata = new appointdate();
        $mydata->date =$date ->date;
        $mydata->time =$date ->time;
        $mydata->category =$date ->category;
        $mydata->save();
        return redirect()->back()->with(["dateandtime"=>"Record Submitted"]);
    }
    public function fetchdate()
    {
        $appointrecord = appointdate::all();
        return view('appointdata',compact("appointrecord"));
    }

    public function deletedaterecord($dateid)
    {
        $mydata = appointdate::find($dateid);
        $mydata->delete(); 
        return redirect()->back();
    }
    public function viewdaterecord()
    {
        $view = appointdate::all();
          return view('appointment',compact("view"));

    }
    public function insertappointment(Request $date)
    {
        $date->validate ([
            "fname" => "required",
            "lname" => "required",
            "email"=>"required",
            "phone"=>"required",
            "category"=>"required",
            "date"=>"required",
            "time"=>"required",
        ]);
        $mydata = new appointment();
        $mydata->First_name =$date ->fname;
        $mydata->Last_name =$date ->lname;
        $mydata->Email =$date ->email;
        $mydata->Phone =$date ->phone;
        $mydata->Category =$date ->category;
        $mydata->Date =$date ->date;
        $mydata->Time =$date ->time;
        $mydata->save();
        return redirect()->back()->with(["appointmessage"=>"Record Submitted"]);
    }
    public function fetchappointment()
    {
        $appointrecord = appointment::all();
        return view('appointmentdata',compact("appointrecord"));
    }
    public function receptionappointfetch()
    {
        $appointrecord = appointment::all();
        return view('receptionappoint',compact("appointrecord"));
    }
    public function stylistappointfetch()
    {
        $appointrecord = appointment::all();
        return view('stylistappoint',compact("appointrecord"));
    }

    public function fetchappointmentuser()
    {
        $appointrecord = appointdate::all(); 
        $about = feedback::all();
        return view('appointment',compact([("appointrecord"),("about")]));

    }
    public function deleteappointmentrecord($appointmentid)
    {
        $mydata = appointment::find($appointmentid);
        $mydata->delete();
        return redirect()->back();
    }
    public function appointmentstatus($appointid)
{
$mydata = appointment::find($appointid);
return view('appointmentupdate',compact("mydata"));
}
    public function appointupdated( $appointid , Request $req)
{

    $data = appointment::find($appointid);
    $data->Status = $req->Status;
    $data->update();
    $appointrecord = appointment::all();
    return view('appointmentdata',compact("appointrecord"));
}
public function userappointment()
{
    $data = appointment::all();
    return view('appointresult',compact("data"));
}
public function usersearch(Request $sea)
{
    $userdata = $sea->usersearch;

    if($userdata != "")
    {
        // Search Here
$ext = "%" . $userdata . "%";
$mydata = appointment::where("First_name", $userdata)->get();
return view("appointsearchdata",compact("mydata"));

    }

    else
    {

    }
}




public function insertreview(Request $feedback)
    {
        $feedback->validate ([
            "name" => "required",
            "email" => "required",
            "message"=>"required",
            "star"=>"required",
        ]);
        $mydata = new feedback();
        $mydata->name =$feedback ->name;
        $mydata->email =$feedback ->email;
        $mydata->message =$feedback ->message;
        $mydata->rating =$feedback ->star;
        $mydata->save();
        return redirect()->back()->with(["FEEDBACKMESSAGE"=>"Record Submitted"]);

    }
    public function fetchreview()
    {
        $reviewrecord = feedback::all();
        return view('reviewdata',compact("reviewrecord"));
    }
    public function viewreviewforuser()

{
   $shop = feedback::all();
    return view('shop-details',compact("shop"));
}
    public function deletereviewrecord($feedbackid)
    {
        $mydata = feedback::find($feedbackid);
        $mydata->delete();
        return redirect()->back();
    }
    public function addservice(Request $req)
    {
        $product = new service();
        $product->service_name = $req->proname;
        $product->service_detail = $req->prodetails;
        $myimage =  $req->file('image');
        $number = rand() . "." . $myimage->getClientOriginalName();
       $abc =  $myimage->move('assets/images/',$number);
       $product->service_image = $abc;
       $product->save();
       return redirect()->back()->with(["insertservice"=>"Record Submitted"]);
    }

    public function adminserviceview()
{
    $viewservice = service::all();
    return view('adminviewservice',compact("viewservice"));
}
public function deleteservicerecord($serviceid)
{
    $mydata = service::find($serviceid);
    $mydata->delete();
    return redirect()->back();
}
public function viewserviceforuser()

{
   $ser =service::all();
    return view('service',compact("ser"));
}

// public function addproduct (Request $req)
//     {
//         $product = new product();
//         $product->Name = $req->name;
//         $product->Quantity = $req->quantity;
//         $product->Price = $req->price;
//         $product->Type = $req->type;
//         $product->Details = $req->details;
//         $myimage =  $req->file('image');
//         $number = rand() . "." . $myimage->getClientOriginalName();
//        $abc =  $myimage->move('assets/images/',$number);
//        $product->Image = $abc;
//        $product->save();
//        return redirect()->back()->with(["insertproduct"=>"Record Submitted"]);
//     }
//     public function adminproductview()
//     {
//         $viewproduct = product::all();
//         return view('adminviewproduct',compact("viewproduct"));
//     }
//     public function deleteproductrecord($productid)
// {
//     $mydata = product::find($productid);
//     $mydata->delete();
//     return redirect()->back();
// }
 public function viewproductforuser()

{
   $pro =recproduct::all();
    return view('shop',compact("pro"));
}

public function insertreception(Request $req)
{
    $mydata = new receptionist();
    $mydata->Name =$req ->name;
        $mydata->Email = $req->email;
        $mydata->Time = $req->time;
        $mydata->Shift = $req->shift;
        $mydata->Password = $req->pass;
        $myimage =  $req->file('profile');
        $number = rand() . "." . $myimage->getClientOriginalName();
       $abc =  $myimage->move('assets/images/',$number);
       $mydata->Profile = $abc;
       $mydata->save();
       return redirect()->back()->with(["insertrec"=>"Record Submitted"]);
}
public function adminreceptionview()
{
    $viewreception = receptionist::all();
    return view('adminviewreception',compact("viewreception"));
}
public function deletereceptionrecord($recid)
{
    $mydata = receptionist::find($recid);
    $mydata->delete();
    return redirect()->back();
}
public function viewreceptionforuser()

{
   $rep = receptionist::all();
   $spe = stylist::all();
   $blog = blog::all();
    return view('index',compact([("rep"),("spe"),("blog")]));
}
public function insertstylist(Request $req)
{
    $mydata = new stylist();
    $mydata->Name =$req ->name;
        $mydata->Email = $req->email;
        $mydata->Password = $req->pass;
        $mydata->Time = $req->time;
        $mydata->Shift = $req->shift;
        $myimage =  $req->file('profile');
        $number = rand() . "." . $myimage->getClientOriginalName();
       $abc =  $myimage->move('assets/images/',$number);
       $mydata->Profile = $abc;
       $mydata->save();
       return redirect()->back()->with(["insertstyle"=>"Record Submitted"]);
}
public function adminstylistview()
{
    $viewstylist = stylist::all();
    return view('adminviewstylist',compact("viewstylist"));
}
public function deletestylistrecord($styleid)
{
    $mydata = stylist::find($styleid);
    $mydata->delete();
    return redirect()->back();
}
public function updatestylistrecord($styleid)
    {
        $mydata = stylist::find($styleid);
        return view('stylistupdate',compact("mydata"));
        
    }
    public function stylistupdatedrecord($styleid, Request $req)
    {
        $data = stylist::find($styleid);  
        $data->Time= $req->time; 
        $data->Shift= $req->shift; 
        $data->update();
       $viewstylist = stylist::all();
    return view('adminviewstylist',compact("viewstylist"));
    }

public function viewstylistforuser()

{
   $pro = stylist::all();
    return view('index',compact("pro"));
}

    public function stylistlogin(Request $req)
    {
        $req->validate ([
            "email" => "required",
            "pass"=>"required",
        ]);
        $email=$req->email;
        $password=$req->pass;
        $Login=DB::table("stylists")->where(["Email"=>$email,"Password"=> $password])->first();
        if($Login!="")
        {
            return view("stylishscreen");
        }
        else{
            return redirect()->back()->with(["style"=>"Record Submitted"]);
        }
    }
    public function receptionlogin(Request $req)
    {
        $req->validate ([
            "email" => "required",
            "pass"=>"required",
        ]);
        $email=$req->email;
        $password=$req->pass;
        $Login=DB::table("receptionists")->where(["Email"=>$email,"Password"=> $password])->first();
        if($Login!="")
        {
            return view("receptionscreen");
        }
        else{
            return redirect()->back()->with(["recep"=>"Record Submitted"]);
        }
    }
  
    public function addgallery (Request $req)
    {
        $product = new gallery();
        $product->Name = $req->name;
        $product->Detail = $req->detail;
        $myimage =  $req->file('profile');
        $number = rand() . "." . $myimage->getClientOriginalName();
       $abc =  $myimage->move('assets/images/',$number);
       $product->Profile = $abc;
       $product->save();
       return redirect()->back()->with(["insertgallery"=>"Record Submitted"]);
    }
    public function adminviewgallery()
{
    $viewgallery = gallery::all();
    return view('viewgallery',compact("viewgallery"));
}
public function deletegalleryrecord($galid)
{
    $mydata = gallery::find($galid);
    $mydata->delete();
    return redirect()->back();
}

public function insertcheck(Request $contact)
    {
        $mydata = new checkin();
        $mydata->state =$contact ->state;
        $mydata->first_name =$contact ->firstname;
        $mydata->last_name =$contact ->lastname;
        $mydata->city =$contact ->city;
        $mydata->country =$contact ->country;
        $mydata->category =$contact ->category;
        $mydata->zipcode =$contact ->zipcode;
        $mydata->email =$contact ->email;
        $mydata->phone =$contact ->phone;
        $mydata->Payment_method =$contact ->payment;
        $mydata->save();
     return redirect()->back()->with(["CHECKOUTMESSAGE"=>"Record Submitted"]);

    }
    public function checkout()
    {
        $checkid = appointdate::all();
        return view('checkout',compact("checkid"));
    }
    public function fetchcheckout()
    {
        $abc = checkin::all();
        return view('fetchcheck',compact("abc"));
    }
    public function deletecheckoutrecord($checkoutid)
    {
        $mydata = checkin::find($checkoutid);
        $mydata->delete();
        return redirect()->back();
    }
     public function exportexcel()
     {
        return Excel::download(new ContactExport, 'Contact_recordl.xlsx');
     }
     public function exportuserexcel()
     {
        return Excel::download(new UserExport, 'User_recordl.xlsx');
     } 
      public function exportfeedbackexcel()
     {
        return Excel::download(new FeedbackExport, 'Feedback_recordl.xlsx');
     }
     public function exportserviceexcel()
     {
        return Excel::download(new ServiceExport, 'service_recordl.xlsx');
     }
     public function exportcheckoutexcel()
     {
        return Excel::download(new CheckoutExport, 'checkout_recordl.xlsx');
     }
     public function exportproductexcel()
     {
        return Excel::download(new ProductExport, 'Product_recordl.xlsx');
     }
     public function exportappointmentexcel()
     {
        return Excel::download(new AppointmentExport, 'Appointment_recordl.xlsx');
     }
     public function exportreceptionistexcel()
     {
        return Excel::download(new ReceptionExport, 'Receptionist_recordl.xlsx');
     }
     public function exportstylistexcel()
     {
        return Excel::download(new StylistExport, 'Stylist_recordl.xlsx');
     }
     public function exportapointdateexcel()
     {
        return Excel::download(new AppointdateExport, 'Category_recordl.xlsx');
     }




// public function filesearch(Request $sea)
// {
//     $userdata = $sea->usersearch;

//     if($userdata != "")
//     {
//         // Search Here
// $ext = "%" . $userdata . "%";
// $mydata = appointment::where("First_name", $userdata)->get();
// return view("dashboardsearch",compact("mydata"));

//     }

//     else
//     {

//     }
// }

public function receptionupdate($recid)
{
$mydata = receptionist::find($recid);
return view('receptionupdate',compact("mydata"));
}
public function receptionupdated($recid , Request $req)
{

    $data = receptionist::find($recid);
    $data->Time = $req->time;
    $data->Shift = $req->shift;
    $data->update();
    $viewreception = receptionist::all();
    return view('adminviewreception',compact("viewreception"));
}
public function addrecproduct (Request $req)
    {
        $product = new recproduct();
        $productid = rand();
        $product-> Productid = $productid;
        $product->Name = $req->name;
        $product->Quantity = $req->quantity;
        $product->Price = $req->price;
        $product->Type = $req->type;
        $product->Details = $req->details;
        $myimage =  $req->file('image');
        $number = rand() . "." . $myimage->getClientOriginalName();
       $abc =  $myimage->move('assets/images/',$number);
       $product->Image = $abc;
       $product->save();
       return redirect()->back()->with(["InsertReceptionProduct"=> "Product Added Successfully", "Product_id" => $productid ]);
    }
    public function recproductview()
    {
        $viewproduct = recproduct::all();
        return view('Recviewproduct',compact("viewproduct"));
    }
    public function deleterecproductrecord($recproductid)
{
    $mydata = recproduct::find($recproductid);
    $mydata->delete();
    return redirect()->back();
}


public function userproduct($proid)
{
    $product = recproduct::find($proid);
    return view('wishlist',compact("product"));
}



public function usercart($cartid)
{
    $pro = recproduct::find($cartid);
    return view('cart',compact("pro"));
}


    public function bloginsert(Request $blog)
    {
        $mydata = new blog();
        $mydata->Author =$blog ->author;
        $mydata->Category =$blog ->category;
        $mydata->Date =$blog ->date;
        $mydata->Blog_title =$blog ->title;
        $mydata->Blog_link =$blog ->link;
        $myimage =  $blog->file('image');
        $number = rand() . "." . $myimage->getClientOriginalName();
       $abc =  $myimage->move('assets/images/',$number);
       $mydata->Image = $abc;
       $mydata->save();
       return redirect()->back()->with(["insertgallery"=>"Record Submitted"]);
    }
    public function blogview()
    {
        $viewblog = blog::all();
        return view('blogview',compact("viewblog"));
    }

    public function usercontactfetch()
    {
        $userconrecord = contact::all();
        return view('usercontact',compact("userconrecord"));
    }
    public function userfeedfetch()
    {
        $userfeedbackrecord = feedback::all();
        return view('userfeeback',compact("userfeedbackrecord"));
    }
    public function usercheckinfetch()
    {
        $usercheckrecord = checkin::all();
        return view('usercheckin',compact("usercheckrecord"));
    }
    public function viewreviewforabout()

{
   $about = feedback::all();
   $spe = stylist::all();
    return view('about',compact([("about"),("spe")]));
}

    public function stylistsalaryinsert(Request $date)
    {
        $mydata = new stylistsalary();
        $mydata->Name =$date ->name;
        $mydata->Salary =$date ->salary;
        $mydata->Date =$date ->date;
        $mydata->Account_No =$date ->account;
        $mydata->save();
        return redirect()->back()->with(["stylistsalary"=>"Record Submitted"]);
    }

    public function fetchstylistsalary()
    {
        $fetch = stylistsalary::all();
        return view('fetchsalarystylist',compact("fetch"));
    }

    public function receptionsalaryinsert(Request $date)
    {
        $mydata = new receptionsalary();
        $mydata->Name =$date ->name;
        $mydata->Salary =$date ->salary;
        $mydata->Date =$date ->date;
        $mydata->Account_No =$date ->account;
        $mydata->save();
        return redirect()->back()->with(["receptionsalary"=>"Record Submitted"]);
    }
    public function fetchreceptionsalary()
    {
        $view = receptionsalary::all();
        return view('fetchsalaryreception',compact("view"));
    }

    public function deleteblogrecord($blogproductid)
    {
        $mydata = blog::find($blogproductid);
        $mydata->delete();
        return redirect()->back();
    }
    

    
}





    