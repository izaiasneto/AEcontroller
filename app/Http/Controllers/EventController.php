<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

use khill\Lavacharts\Lavacharts;

class EventController extends Controller
{

    public function index() {

        $events = Event::all();

        return view('welcome',['events' => $events]);

    }

    public function create() {
        return view('events.modal.create');
    }

    public function store(Request $request) {

        $event = new Event;

        $event->status = $request->status;
        $event->name = $request->name;
        $event->phone = $request->phone;
        $event->date = $request->date;
        $event->description = $request->description;
        $event->street = $request->street;
        $event->number = $request->number;
        $event->district = $request->district;
        $event->city = $request->city;
        $event->value = $request->value;

        $user = auth()->user();
        $event->user_id = $user->id;


        $event->save();

        return redirect('products')->with('msg', 'Pedido cadastrado criado com sucesso!');


    }

    public function show($id) {

        $event = Event::findOrFail($id);


        return view('events.modal.show', ['event' => $event]);

    }

    public function dashboard() {
        $products = Event::all();

        $loc = array();

        foreach($products as $product){
            $loc[$product->district - 1];
        }

        return view('events.dashboard', ['products' => $products]);

    }

    public function products() {

        $events = Event::orderBy('created_at')->get();

        $bairros = Event::orderBy('district', 'asc')->get();

        return view('events.products', compact('events', 'bairros'));

    }


    public function destroy(Request $request){
        $product_id = $request->input('delete_product_id');
        $product = Event::findOrFail($product_id);
        $product->delete();

        return redirect()->back()->with('msg', 'Evento excluído com sucesso');
    }

    public function edit($id){
        $event = Event::findOrFail($id);

        return response()->json([
            'status' => 200,
            'product' => $event,
        ]);

    }

    public function update(request $request){

        $product_id = $request->input('product_id1');
        $event = Event::find($product_id);

        $event->status = $request->input('status1');
        $event->name = $request->input('name1');
        $event->phone = $request->input('phone1');
        $event->date = $request->input('date1');
        $event->description = $request->input('description1');
        $event->street = $request->input('street1');
        $event->number = $request->input('number1');
        $event->district = $request->input('district1');
        $event->city = $request->input('city1');
        $event->value = $request->input('value1');

        $event->update();

        return redirect('/dashboard')->with('msg', 'Pedido atualiadocriado com sucesso!');
    }

    public function search(){

        $events = Event::all();

        if($_GET['nome']){
            $search_text = $_GET['nome'];
            $events=Event::where('name', 'LIKE', '%' . $search_text . '%')->get();
        }

        if($_GET['bairro_id']){
            $search_text = $_GET['bairro_id'];
            $events=Event::where('district', 'LIKE', '%' . $search_text . '%')->get();
        }

        if($_GET['data']){
            $search_text = $_GET['data'];
            $events=Event::where('date', 'LIKE', '%'.$search_text.'%')->get();
        }


        $bairros = Event::orderBy('district')->get();

        return view('events.products', compact('events', 'bairros'));
    }

}
