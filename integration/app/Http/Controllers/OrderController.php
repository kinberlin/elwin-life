<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use App\Models\orders;
use App\Models\Wishlist;
use App\Models\WishlistItems;
use Auth;
use DB;
use Exception;
use Illuminate\Http\Request;
use Throwable;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$orders = Orders::orderBy('createdat','DESC')->get();
        $orders = DB::select("select *, DATE_FORMAT(createdat, '%W %e, %M %Y %H:%i') AS fmt_date FROM orders order by createdat");
        return view('admin.pages-orders', ["orders"=>$orders]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $wsh = DB::select(
                'SELECT w.quantity, w.product_id, p.price, w.id  
                FROM wishlist_items w
                LEFT JOIN products p 
                ON p.product_id = w.product_id
                JOIN wishlist wh 
                ON wh.wishlist_id = w.wishlist_id
                WHERE wh.customer_id ='.Auth::user()->id
            );
            if(count($wsh) <1)
            {throw new Exception("Vous n'avez aucun article dans le panier", 1);
            }
            DB::beginTransaction();
            $or = new Orders();
            $or->name = $request->input('name');
            $or->address = $request->input('address');
            $or->email = $request->input('email');
            $or->phone = $request->input('phone');
            $or->city = $request->input('city');
            $or->country = $request->input('country');
            $or->user = Auth::user()->id;
            $or->status = 'Pending';
            $or->payment = $request->input('payment');
            $or->save();
            DB::commit();
            
            //$wsh = Wishlist::where('customer_id',Auth::user()->id)->get();
            foreach($wsh as $w)
            {
                $oi = new OrderItems();
                $oi->quantity = $w->quantity;
                $oi->product_id = $w->product_id;
                $oi->order_id = $or->order_id;
                $oi->price = $w->price;
                $oi->save();
                $wish = WishlistItems::find($w->id);
                $wish->delete();
            }
            return redirect()->back()->with('error', "Commande créer avec succès.Et en cours de traitement.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function extracosts(Request $request,$id)
    {
        try {
            $or = orders::find($id);
            if($or === null)
            {throw new Exception("Nous n'avons pas trouvé cette commande", 1);
            }
            DB::beginTransaction();
            $or->delivery_fee = $request->input('delivery');
            $or->discount = $request->input('discount');
            $or->save();
            DB::commit();
            return redirect()->back()->with('error', "Commande modifier avec succès.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orders $orders)
    {
        //
    }
}