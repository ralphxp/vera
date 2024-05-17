<?php
namespace Codx\Comic\Controller;

use Codx\Ralph\Engine as View;
use Codx\Comic\Model\House;
use Codx\Comic\Request;


class HouseController extends Controller{

    public function __construct()
    {
        $this->needAuth();
    }

    public function index()
    {
        $houses = House::get();
        $empty_houses = House::where('status', 'empty')->count();
        $occupied_houses = House::where('status', 'occupied')->count();
        $comp_houses = House::where('compartment', 'yes')->count();
        $no_compartment = House::where('compartment', 'no')->count();
        return View::view('admin.house.index', compact(
            'houses',
            'occupied_houses',
            'empty_houses',
            'comp_houses',
            'no_compartment'
        ));
    }

    public function add()
    {
        return View::view('admin.house.add');
    }

    public function store($request)
    {
        $request = $_REQUEST;
        $name = $request['name'];
        $compartment = $request['compartment'];
        $cost = $request['cost'];
        if(House::create([
            "house_name" => $name,
            "compartment" => $compartment,
            'rent_per_month' => $cost,
            'status' => 'Empty'
        ])){
        echo "<script>alert('house added')</script>";
        header('location: /houses');
        }else{
            header('refresh');
        }
    }

    public function edit(Request $request)
    {
        $house = House::findOrFail($request->id);
        $message = '';
        View::view('admin.house.edit', compact('house', 'message'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $house = House::findOrFail( $id);
        if($house)
        {
            $house->house_name = $request->house_name;
            $house->compartment = $request->compartment;
            $house->rent_per_month = $request->rent_per_month;
            $house->status = $request->status;
            $house->save();
            $message = "House info updated successfully";
            View::view('admin.house.edit', compact('house', 'message'));
        }else{
            throw new \Exception("Error Processing Request", 500);
            
        }
    }


}