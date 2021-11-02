<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\models\Food;
use App\models\Reservation;
use App\models\Chefs;
use App\models\Order;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    //
    public function user(){
        $data=user::all();
        return view("Admin.users",compact("data"));
    }
    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    function foodmenu(){
        $data=Food::all();
        return view('Admin.foodmenu',compact('data'));
    }
    function deletefoodmenu($id){
     $data=Food::find($id)->delete();
     return back ()->with ('food-delete','food has been deleted from menu successfuly!');
    }
    function Addfood(Request $request){
        $food=new Food();
        $image=$request->image;
        $imagename=time() .'.'. $image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $food->image=$imagename;
        $food->title=$request->title;
        $food->price=$request->price;
        $food->description=$request->description;
        $food->save();
        return back()->with ('addfood','food has been added successfuly!');

    }
    function updatefoodview($id){
        $data=Food::find($id);
        return view('Admin.udataeview',compact('data'));
       }

       function updatefood(Request $request ,$id){
        $data=Food::find($id);
        $image=$request->image;
        $imagename=time() .'.'. $image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $food->image=$imagename;
        $food->title=$request->title;
        $food->price=$request->price;
        $food->description=$request->description;
        $food->save();
        return back()->with ('updatefood','food has been updated successfuly!');
       }
       function reservation(Request $request){
        $request->validate([
           'name'=>'required',
           'email'=>'required',
           'phone'=>'required',
           'guest'=>'min:1',
        ]);
        $data=new Reservation();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->time=$request->time;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->message=$request->message;
        $data->date=$request->date;
        $data->save();
        return back()->with('reservation_created','you have booked successfuly');
        }
        function Adminreservation(){
            if(Auth::id())
            {
            $data=Reservation::orderBy('id','Desc')->get();
            return view('Admin.Adminreservation',compact('data'));
            }
            else{
                return redirect('login');
            }
        }
function Adminchefs(){
    $data=Chefs::orderBy('id','Desc')->get();
    return view("Admin.Adminchefs",compact('data'));
}
function chefupload(Request $request){
    $data=new Chefs();
    $data->speciality=$request->speciality;
    $data->name=$request->name;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Chefsimage',$imagename);
        $data->image=$imagename;
        $data->save();
        return back ()->with('Chef_uploaded','new Chef uploaded successfully!');
}

function editchef($id){
    $data=Chefs::find($id);
    return view('Admin.editchef',compact('data'));
}
function savechefs(Request $request,$id){
$data=Chefs::find($id);

$data->speciality=$request->speciality;
$data->name=$request->name;
$image=$request->image;
$imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('Chefsimage',$imagename);
    $data->image=$imagename;
    $data->save();
    return back ()->with('Chef_updated','new Chef updated successfully!');

}
function Orders(){
    $data=Order::all();
    return view('Admin.Orders', compact('data'));
}
public function search(Request $req)
{
$search=$req->search;
$data=Order::where('name','LIKE','%'.$search.'%')->get();
return view('Admin.orders',compact('data'));
}
}

