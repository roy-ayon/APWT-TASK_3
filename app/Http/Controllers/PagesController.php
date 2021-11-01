<?php

namespace App\Http\Controllers;
use App\Models\advertisement;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function flatOwnerDash(){
        return view('pages.flatOwnerDash');
    }
    public function adminDash(){
        return view('pages.adminDash');
    }
    public function bachelorDash(){
        return view('pages.bachelorDash');
    }
    public function managerDash(){
        return view('pages.managerDash');
    }
    public function advertisement(){
        return view('pages.advertisement');
    }
    public function advertisementCheck(Request $request){
        $this->validate(
            $request,
            [
                'address'=>'required',
                'houseno'=>'required',
                'floorno'=>'required',
                'flatinfo'=>'required',
                'rent'=>'required',
                'select'=>'required'
            ]
        );

        $user = new Advertisement();
        $user->address = $request->address;
        $user->houseno = $request->houseno;
        $user->floorno = $request->floorno;
        $user->flatinfo = $request->flatinfo;
        $user->rent = $request->rent;
        $user->status = $request->select;
        $user->permission = "Pending";
        $user->save();


        return "ok";
    }
    public function advertisementlist(){
        $advertisements = Advertisement::all();
        return view('pages.advertisementlist',compact('advertisements'));
    }

    public function advertisementdetails($id){
        $advertisements = Advertisement::find($id);
        return view('pages.advertisementdetails')->with('advertisements',$advertisements);
    }
    public function advertisementedit($id){
        $advertisements = Advertisement::find($id);
        return view('pages.advertisementedit')->with('advertisements',$advertisements);
    }

    public function advertisementupdate(Request $request, $id){
        $this->validate(
            $request,
            [
                'address'=>'required',
                'houseno'=>'required',
                'floorno'=>'required',
                'flatinfo'=>'required',
                'rent'=>'required',
                'select'=>'required'
            ]
        );

        
        $advertisements = Advertisement::find($id);
        $advertisements->address = $request->address;
        $advertisements->houseno = $request->houseno;
        $advertisements->floorno = $request->floorno;
        $advertisements->flatinfo = $request->flatinfo;
        $advertisements->rent = $request->rent;
        $advertisements->status = $request->select;
        $advertisements->save();


        return redirect('/');
    }
    public function advertisementdelete($id)
    {
        $advertisements = Advertisement::find($id);
        return view('pages.advertisementdelete')->with('advertisements',$advertisements);
    }
    public function advertisementdel($id)
    {
        $advertisements = Advertisement::destroy($id);
        if($advertisements){
            return redirect('/flatOwner/advertisementlist');
        }

    }
     
}
