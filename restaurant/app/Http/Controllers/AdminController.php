<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Reservation;
use App\Models\User;
use Dotenv\Loader\Resolver;
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
        $data = Food::all();
        return view('admin.foodmenu', compact('data'));
    }

    // Store new menu
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

    // delete menu
    public function deletemenu($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    // get the user edit id and redirect it
    public function updateview($id)
    {
        $data = Food::find($id);
        return view('admin.updateview', compact('data'));
    }


    // update menu

    public function update(Request $request, $id)
    {
        $data = Food::find($id);
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

    // Store new reservation
    public function reservation(Request $request)
    {
        $data = new Reservation;


        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();
    }

    // view reservations
    public function viewreservation()
    {
        $data = Reservation::all();
        return view('admin.adminreservation', compact('data'));
    }
}
