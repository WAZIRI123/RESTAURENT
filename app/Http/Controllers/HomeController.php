<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\Food;
use App\models\Chefs;
use App\models\Cart;
use App\models\Order;
class HomeController extends Controller
{
    //
    public function index(){

        $data=Food::all();
        $data2=Chefs::all();
        $user_id=Auth::id();
        $count=Cart::where('user_id', $user_id)->count();
        return view('home', compact('data','data2','count'));
    }
    public function redirects(){
    $data=Food::all();
    $data2=Chefs::all();
    $usertype=Auth::user()->usertype;
    if($usertype=='1')
    {
        return view('Admin.AdminHome');
    }
    else
    {
        $user_id=Auth::id();
        $count=Cart::where('user_id', $user_id)->count();
        return view('home', compact('data','data2','count'));
         
     
    }
    }
    function addcart(Request $request,$id){
        if(Auth::id())
        {
            $user_id=Auth::id();
            $foodid=$id;
            $quantity=$request->quantity;
            $cart=new cart;
            $cart->user_id=$user_id;
            $cart->food_id=$foodid;
            $cart->quantity=$quantity;
            $cart->save();
            return redirect()->back();
        }
        else {
            
            return redirect ('/login');
        }
    }
    function showcart(Request $request,$id)
    {
        $count=cart::where('user_id',$id)->count();
        if(Auth::id()==$id)
        {
        $data2=cart::select('*')->where('user_id','=',$id)->get();
        $data=cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
        return view('showcart',compact('count','data2','data'));

    }
    else{
        return redirect()->back();
    }
}
    function removeshowcart($id){
  $data=cart::find($id);
  $data->delete();
  return redirect ()->back();
    }
    function orderconfirm(Request $request){
        foreach($request->foodname as $key=> $foodname)
        {
            $data=new order;
            $data->foodname=$foodname;
            $data->price=$request->price[$key];
            $data->quantity=$request->quantity[$key];
            $data->name=$request->name;
            $data->address=$request->address;
            $data->phone=$request->phone;
            $data->save();
        }
        return redirect()->back();
    }
}
  