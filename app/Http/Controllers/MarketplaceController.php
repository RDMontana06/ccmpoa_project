<?php

namespace App\Http\Controllers;
use App\Marketplace;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class MarketplaceController extends Controller
{
    //
    public function index()
    {
        $markeplaces = Marketplace::with('user')->get();
        return view('marketplace.index', array(
            'header' => 'marketplace',
            'markeplaces' => $markeplaces,

        ));
    }

    public function create(Request $request)
    {
        $marketplace = new Marketplace;
        $marketplace->user_id = auth()->user()->id;
        $marketplace->property_name = $request->property_name;
        $marketplace->contact_number = $request->contact_number;
        $marketplace->contact_person = $request->contact_person;
        $marketplace->description = $request->description;
        $marketplace->price = $request->price;
        $marketplace->location = $request->location;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $path = $file->getClientOriginalName();
            $name = time() . '-' . $path;
            $file->move(public_path() . '/marketplace-images/', $name);
            $file_name = '/marketplace-images/' . $name;
            $marketplace->cover_photo = $file_name;
        }
        $marketplace->save();
        Alert::success('Successfully posted', 'Others can now inquire.')->persistent('Dismiss');
        return back();
    }
}
