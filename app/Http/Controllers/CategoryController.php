<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = category::where('id_off',0)->get();
        return view('welcome',compact('category'));
    }

    public function getdata(Request $request)
    {   
        if ($request->ajax())
        {
            // if ($request->has('category'))
            // {
                $select=category::where('id_off',$request->category)->get();
                if (!$select)
                {
                    return response()->json([
                        'success'=>'false',
                        'error'=>'no more subcategories'
                    ],404);
                }
                else
                {
                    return response()->json([
                        'data'=>$select,
                        'message'=>'loaded'
                    ]);
                }
            // }
            // else
            // {
            //     //dd($request);
                                
            //     $select=category::where('id_off',$request->sub)->get();
            //     return response()->json([
            //         'data'=>$select,
            //         'message'=>'loaded'
            //     ]); 
            // }
        }
       

    }
}
