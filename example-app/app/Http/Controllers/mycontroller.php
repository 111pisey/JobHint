<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Symfony\Component\Console\Input\Input;

class mycontroller extends Controller
{
    //
    function insert(Request $req)
    {
       $name= $req->get('cname');
       $position = $req->get('cdescribe');
       $pimage= $req->file('image')->getClientOriginalName();

       $req->image->move(public_path('images'),$pimage);
        $prod= new product();
        $prod->PName = $name;
        $prod->PPosition = $position;
        $prod->PImage = $pimage;
        $prod->save();

        return redirect('/');
    }
    function readdata(){
        $pdata = product::all();
        return view('insertRead',['data'=>$pdata]);
    }
    function updateordelete(Request $req){
         $id = $req->get('id');
         $name = $req->get('cname');
         $position = $req->get('cdescribe');
        if($req->get('update') == 'Update'){
           return view('updateview',['pid'=>$id ,'pname'=>$name , 'pdescribe'=>$position]); 
        }
        else{
            $prod = product::find($id);
            $prod->delete();
        }
        return redirect('/');

    }
    function update(Request $req){
        
        $id = $req->get('id');
        $name = $req->get('cname');
        $position = $req->get('cdescribe');
        
        //$code =$req->find($id);
        $prod = new product();
        $prod = product::find($id);
        $prod->PName = $name;
        $prod->PPosition = $position;
        $prod->save();
        return redirect('/');
    }

}
