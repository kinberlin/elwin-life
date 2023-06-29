<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Wishlist;
use App\Models\WishlistItems;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class ShopController extends Controller
{
    //
    public function addwish(Request $request)
    {
        try {
            DB::beginTransaction();
            $quantity = $request->input('quantity');
            $wishlist = DB::select(
                'SELECT * 
                FROM wishlist 
                WHERE customer_id ='.Auth::user()->id
            );
            if(count($wishlist) > 0)
            {
                $wi = new WishlistItems();
                $wi->product_id = $request->input('id');
                $wi->wishlist_id = $wishlist[0]->wishlist_id;
                $wi->quantity = $request->input('quantity');
                if($quantity > 0)
                {$wi->save();}
                DB::commit();          
            }
            else {
                $newwishlist = new Wishlist();
                $newwishlist->customer_id = Auth::user()->id;
                $newwishlist->save();
                DB::commit();
                $wi = new WishlistItems();
                $wi->product_id = $request->input('id');
                $wi->wishlist_id = $newwishlist->wishlist_id;
                $wi->quantity = $request->input('quantity');
                if($quantity > 0)
                {$wi->save();}
            }
            return redirect()->back()->with('error', "Article ajouter au panier.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors du retrait du panier");
        }
    }
    public function delwish(Request $request)
    {
        try {
            DB::beginTransaction();
            $wish = WishlistItems::where('id', $request->input('wishlistitem_id'));
            $wish->delete();
            DB::commit();
            return redirect()->back()->with('error', "Article retirer du panier.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors du retrait du panier");
        }
    }

    public function editwish(Request $request)
    {
        try {
            DB::beginTransaction();
            $wish = WishlistItems::find($request->input('wishlistitem_id'));
            $wish->quantity = $request->input('quantity');
            $wish->save();
            DB::commit();
            return redirect()->back()->with('error', "Article modifier avec succès.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la modification");
        }
    }

    public function checkout()
    {
        $client = new ClientController();
        $wishlist = DB::select(
            'SELECT w.*,p.image, p.name, p.price, p.description, DATE_FORMAT(w.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
            FROM wishlist_items w
            LEFT JOIN products p 
            ON p.product_id = w.product_id
            JOIN wishlist wh 
            ON wh.wishlist_id = w.wishlist_id
            WHERE wh.customer_id ='.Auth::user()->id
        );
        $sum = DB::select(
            'SELECT sum(w.quantity * p.price) "total"
            FROM wishlist_items w
            LEFT JOIN products p 
            ON p.product_id = w.product_id
            JOIN wishlist wh 
            ON wh.wishlist_id = w.wishlist_id
            WHERE wh.customer_id ='.Auth::user()->id
        );
        return view('customer.checkout', ["total"=>$sum[0],"wishlist" => $wishlist,"personal" => $client->personalinfo(), "subinfo" => $client->suscribeinfo()]);
    }

}
