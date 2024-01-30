<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\admincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('home-hair-salon', function () {
    return view('home-hair-salon');
});
Route::get('home-beauty-salon', function () {
    return view('home-beauty-salon');
});
Route::get('about', function () {
    return view('about');
});

Route::get('appointment', function () {
    return view('appointment');
});
Route::get('service', function () {
    return view('service');
});


Route::get('team', function () {
    return view('team');
});
Route::get('team-details', function () {
    return view('team-details');
});
Route::get('gallery', function () {
    return view('gallery');
});
Route::get('price', function () {
    return view('price');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('blog-details', function () {
    return view('blog-details');
});
Route::get('blog-grid-2-columns', function () {
    return view('blog-grid-2-columns');
});
Route::get('blog-left-sidebar', function () {
    return view('blog-left-sidebar');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('blog-list', function () {
    return view('blog-list');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('shop', function () {
    return view('shop');
});
Route::get('shop-details', function () {
    return view('shop-details');
});
Route::get('fetchdate', function () {
    return view('dashboard');
});
Route::get('insertservice', function () {
    return view('addservice');
});
Route::get('insertproduct', function () {
    return view('addproduct');
});
Route::get('receptionist', function () {
    return view('Receptionist');
});
Route::get('stylist', function () {
    return view('stylist');
});
Route::get('stylistsalary', function () {
    return view('stylistsalary');
});
Route::get('stylistlogin', function () {
    return view('stylistlogin');
});
Route::get('receptionlogin', function () {
    return view('receptionlogin');
});
Route::get('receptionsalary', function () {
    return view('receptionsalary');
});
Route::get('addgallery', function () {
    return view('addgallery');
});
Route::get('addpro', function () {
    return view('insertreceptionproduct');
});
Route::get('addblog', function () {
    return view('Insertblog');
});
Route::get('wishlist', function () {
    return view('wishlist');
});

Route::get('/userproduct/{proid}',[admincontroller::class,('userproduct')]);
Route::get('/cartproduct/{cartid}',[admincontroller::class,('usercart')]);
Route::get('cart', function () {
    return view('cart');
});
// Route::get('checkout', function () {
//     return view('checkout');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role == 0)
        {
            return view('dashboard');
        }
         else if(Auth::User()->role == 1)
         {
             return view('userscreen');
         }
        else
        {
            return view('index');
        }
        
    })->name('dashboard');
});



// contact routing
Route::post('/inserted',[admincontroller::class,('insertcontact')]); 
Route::get('/fetch',[admincontroller::class,('fetchcontact')]);
Route::get('/contactdelete/{contactid}',[admincontroller::class,('deletecontactrecord')]);
Route::get('usercontact',[admincontroller::class,('usercontactfetch')]);
//user routing
Route::get('/Userrecord',[admincontroller::class,('fetchsignup')]);
Route::get('/signupdelete/{signupid}',[admincontroller::class,('deletesignuprecord')]);
Route::get('/signupupdate/{signupid}',[admincontroller::class,('updatesignuprecord')]);
Route::post('/admindataupdated/{signupid}',[admincontroller::class,('adminupdatedrecord')]);
//date&time dynamic
Route::post('/dateinsert',[admincontroller::class,('insertdate')]); 
Route::get('/fetchdate',[admincontroller::class,('fetchdate')]);
Route::get('/datedelete/{dateid}',[admincontroller::class,('deletedaterecord')]);
Route::get('appointment',[admincontroller::class,('viewdaterecord')]);
//appointment record
Route::post('/appointed',[admincontroller::class,('insertappointment')]);
Route::get('/fetchappointment',[admincontroller::class,('fetchappointment')]);
Route::get('/appointment',[admincontroller::class,('fetchappointmentuser')]);
Route::get('/appointmentdelete/{appointmentid}',[admincontroller::class,('deleteappointmentrecord')]);
Route::get('appointupdate/{appointid}',[admincontroller::class,('appointmentstatus')]);
Route::post('fetchappointment/{appointid}',[admincontroller::class,('appointupdated')]);
Route::post('userfilterdata',[admincontroller::class,('usersearch')]);
Route::get('appointmentrecord',[admincontroller::class,('userappointment')]);

// review routing
Route::post('/reviewinsert',[admincontroller::class,('insertreview')]); 
Route::get('/fetchreview',[admincontroller::class,('fetchreview')]);
Route::get('about',[admincontroller::class,('viewreviewforabout')]);
Route::get('shop-details',[admincontroller::class,('viewreviewforuser')]);
Route::get('/feedbackdelete/{feedbackid}',[admincontroller::class,('deletereviewrecord')]);
Route::get('userfeedback',[admincontroller::class,('userfeedfetch')]);

// add service
Route::post('/insertservice',[admincontroller::class,('addservice')]);
Route::get('viewservice',[admincontroller::class,('adminserviceview')]);
Route::get('service',[admincontroller::class,('viewserviceforuser')]);
Route::get('/servicedelete/{serviceid}',[admincontroller::class,('deleteservicerecord')]);

//add product
Route::post('/insertproduct',[admincontroller::class,('addproduct')]);
Route::get('viewproduct',[admincontroller::class,('adminproductview')]);
Route::get('/productdelete/{productid}',[admincontroller::class,('deleteproductrecord')]);
Route::get('shop',[admincontroller::class,('viewproductforuser')]);

// add receptionist
Route::post('/insertreceptionist',[admincontroller::class,('insertreception')]);
Route::get('viewreception',[admincontroller::class,('adminreceptionview')]);
Route::get('/',[admincontroller::class,('viewreceptionforuser')]);
Route::get('/receptiondelete/{recid}',[admincontroller::class,('deletereceptionrecord')]);
Route::get('recupdate/{recid}',[admincontroller::class,('receptionupdate')]);
Route::post('recupdate/{recid}',[admincontroller::class,('receptionupdated')]);
// add stylist
Route::post('/insertstylist',[admincontroller::class,('insertstylist')]);
Route::get('viewstylist',[admincontroller::class,('adminstylistview')]);
Route::get('/',[admincontroller::class,('viewreceptionforuser')]);
Route::get('/stylistdelete/{styleid}',[admincontroller::class,('deletestylistrecord')]);
Route::get('/stylistupdate/{styleid}',[admincontroller::class,('updatestylistrecord')]);
Route::post('/stylistdataupdated/{styleid}',[admincontroller::class,('stylistupdatedrecord')]);

// stylish login
Route::post('/stylistinserted',[admincontroller::class,('stylistlogin')]); 
// reception login
Route::post('/receptionistinserted',[admincontroller::class,('receptionlogin')]); 
//appoint for reception
Route::get('/receptionfetchappointment',[admincontroller::class,('receptionappointfetch')]);
//appoint for stylist
Route::get('/stylistfetchappointment',[admincontroller::class,('stylistappointfetch')]);

// gallery routing
Route::post('/insertgallery',[admincontroller::class,('addgallery')]);
Route::get('viewgallery',[admincontroller::class,('adminviewgallery')]);
Route::get('/gallerydelete/{galid}',[admincontroller::class,('deletegalleryrecord')]);

// checkoutrouting
Route::post('/insertcheck',[admincontroller::class,('insertcheck')]); 
Route::get('/checkout',[admincontroller::class,('checkout')]);
Route::get('/fetchcheck',[admincontroller::class,('fetchcheckout')]);
Route::get('/checkoutdelete/{checkoutid}',[admincontroller::class,('deletecheckoutrecord')]);
Route::get('usercheck',[admincontroller::class,('usercheckinfetch')]);
//ContactExcelExport Routing
Route::get('/exceldata',[admincontroller::class,('exportexcel')]);
//UserExcelExport Routing
Route::get('/exceldata1',[admincontroller::class,('exportuserexcel')]);
//FeedbackExcelExport Routing
Route::get('/exceldata2',[admincontroller::class,('exportfeedbackexcel')]);
//serviceExcelExport Routing
Route::get('/exceldata3',[admincontroller::class,('exportserviceexcel')]);
//checkoutExcelExport Routing
Route::get('/exceldata4',[admincontroller::class,('exportcheckoutexcel')]);
//productExcelExport Routing
Route::get('/exceldata5',[admincontroller::class,('exportproductexcel')]);
//appointmentExcelExport Routing
Route::get('/exceldata6',[admincontroller::class,('exportappointmentexcel')]);
//appointmentExcelExport Routing
Route::get('/exceldata7',[admincontroller::class,('exportreceptionistexcel')]);
//appointmentExcelExport Routing
Route::get('/exceldata8',[admincontroller::class,('exportstylistexcel')]);
//appointdateExport Routing
Route::get('/exceldata9',[admincontroller::class,('exportapointdateexcel')]);
//search Routing
// // Route::post('SearchDashboardFiles',[admincontroller::class,('filesearch')]);

// recproduct
Route::post('/insertrecproduct',[admincontroller::class,('addrecproduct')]);
Route::get('viewrecproduct',[admincontroller::class,('recproductview')]);
Route::get('/recproductdelete/{recproductid}',[admincontroller::class,('deleterecproductrecord')]);
//  blog routing
Route::post('/insertblog',[admincontroller::class,('bloginsert')]);
Route::get('fetchblog',[admincontroller::class,('blogview')]);

Route::get('/logout',[Authcontroller::class,('logout')]);

//styliost salary
Route::post('/stylistsalary',[admincontroller::class,('stylistsalaryinsert')]); 
Route::get('viewstylistsalary',[admincontroller::class,('fetchstylistsalary')]);

//reception salary
Route::post('/receptionsalary',[admincontroller::class,('receptionsalaryinsert')]); 
Route::get('viewsalaryreception',[admincontroller::class,('fetchreceptionsalary')]);
Route::get('/blogdelete/{recid}',[admincontroller::class,('deleteblogrecord')]);