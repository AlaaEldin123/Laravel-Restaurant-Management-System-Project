<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Order;
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

    //view chef
    public function viewchef()
    {
        $data = Foodchef::all();
        return view('admin.adminchef', compact('data'));
    }

    // create new chef
    public function uploadchef(Request $request)
    {
        $data = new Foodchef;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);

        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->back();
    }

    // get chef and redirect it
    public function updatechef($id)
    {
        $data = Foodchef::find($id);

        return view('admin.updatechef', compact('data'));
    }

    // update chef
    public function updatefoodchef(Request $request, $id)
    {
        $data = Foodchef::find($id);
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefimage', $imagename);
            $data->image = $imagename;
        }


        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->route('viewchef');
    }

    // delete chef
    public function deletechef($id)
    {
        $data = Foodchef::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }


    //show orders
    public function orders()
    {
        $data = Order::all();
        return view('admin.orders', compact('data'));
    }

    public function search(Request $request)
    {

        $search = $request->search;
        $data = Order::where('name', 'Like', '%' . $search . '%')->get();
        return view('admin.orders', compact('data'));
    }
}
