<?php

namespace App\Http\Controllers;
use App\Marketplace;
use Illuminate\Http\Request;
use App\MarketplaceAttachment;
use RealRashid\SweetAlert\Facades\Alert;

class MarketplaceController extends Controller
{
    //
    public function index(Request $request)
    {
        $min = null;
        $max = null;
        $markeplaces = Marketplace::with('user', 'attachment')->get();
        if($request->min)
        {
            $min = $request->min;
            $max = $request->max;
            $markeplaces = Marketplace::whereBetween('price',[$min,$max])->with('user')->get();
        }
        // dd($markeplaces);
      
        return view('marketplace.index', array(
            'header' => 'Marketplace',
            'markeplaces' => $markeplaces,
            'min' => $min,
            'max' => $min,

        ));
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $marketplace = new Marketplace;
        $marketplace->user_id = auth()->user()->id;
        $marketplace->property_name = $request->property_name;
        $marketplace->contact_number = $request->contact_number;
        $marketplace->contact_person = $request->contact_person;
        $marketplace->description = $request->description;
        $marketplace->price = $request->price;
        $marketplace->location = $request->location;
        $marketplace->save();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $path = $file->getClientOriginalName();
                $name = time() . '-' . $path;
                $attachment = new MarketplaceAttachment();
                $file->move(public_path() . '/marketplace-images/', $name);
                $file_name = '/marketplace-images/' . $name;
                $attachment->attachment = $file_name;
                $attachment->marketplace_id = $marketplace->id;
                $attachment->save();
            }
            
        }
        Alert::success('Successfully posted', 'Others can now inquire.')->persistent('Dismiss');
        return back();
    }
    public function markAsSold(Request $request, $id){
        // dd($request->all());

        $markeplaces = Marketplace::findOrFail($id);
        $markeplaces->status = "Sold";
        $markeplaces->save();
        return back();
    }
}
