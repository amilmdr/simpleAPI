<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;


class DeviceController extends Controller
{
    function list($id=null){
        return $id?Device::find($id):Device::all();
    }
    function add(Request $request){
       
        $device=new Device();
        $device->id=$request->id;
        $device->name=$request->name;
        $device->address=$request->address;
        // dd($device);
        $result=$device->save();
        if($result){
            return ["result"=>"success"];   
        }
        else{
            return ["result"=>"fail"];
        }
       
    }
    function update(Request $request){
        $device=Device::find($request->id);
        $device->name=$request->name;
        $device->address=$request->address;
        //  dd($device);
        $result=$device->save();
        if($result){
            return ["result"=>"success"];   
        }
        else{
            return ["result"=>"fail"];
        }

    }
    function search($name){
       
        $device=Device::where("name","like","%".$name."%")->get();
       if($device->isEmpty()){
        return  ["result"=>"Not found"];
       }
       else{
        return $device;
       }
      

    }
    function delete($id){
        $device=Device::find($id); 
        $result=$device->delete();
if($result)  {
    return  ["result"=>"delete completed ".$id];
}
else{
    return  ["result"=>"delete could not completed"];
}
    }
}
