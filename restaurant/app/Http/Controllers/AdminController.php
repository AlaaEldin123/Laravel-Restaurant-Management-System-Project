<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // view all user
    public function user()
    {
        $data = User::all();
        return view('admin.users', compact('data'));
    }

    // delete user
    public function deleteuser($id)
    {

        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    // return to food view
    public function foodmenu()
    {
        return view('admin.foodmenu');
    }

    public function upload(Request $request)
    {
        $data = new Food;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->descripition = $request->descripition;
        $data->save();
        return redirect()->back();
    }
}
