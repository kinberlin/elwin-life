<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\OrderItems;
use App\Models\orders;
use App\Models\Users;
use App\Models\Wishlist;
use App\Models\WishlistItems;
use Auth;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = new ClientController();
        $orders = Orders::where("user", Auth::user()->id)->get();

        return view('customer.orders', ["orders" => $orders, "personal" => $client->personalinfo(), "subinfo" => $client->suscribeinfo()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$orders = Orders::orderBy('createdat','DESC')->get();
        $orders = DB::select("select *, DATE_FORMAT(createdat, '%W %e, %M %Y %H:%i') AS fmt_date FROM orders order by createdat");
        return view('admin.pages-orders', ["orders" => $orders]);
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
                WHERE wh.customer_id =' . Auth::user()->id
            );
            if (count($wsh) < 1) {
                throw new Exception("Vous n'avez aucun article dans le panier", 1);
            }
            DB::beginTransaction();
            $or = new Orders();
            $or->name = $request->input('name');
            $or->address = $request->input('address');
            $or->email = $request->input('email');
            $or->phone = $request->input('phone');
            $or->city = $request->input('city');
            $or->amount = $request->input('amount');
            $or->country = $request->input('country');
            $or->user = Auth::user()->id;
            $or->status = 'Pending';
            $or->payment = $request->input('payment');
            $or->save();
            DB::commit();

            //$wsh = Wishlist::where('customer_id',Auth::user()->id)->get();
            foreach ($wsh as $w) {
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
    public function extracosts(Request $request, $id)
    {
        try {
            $or = orders::find($id);
            if ($or === null) {
                throw new Exception("Nous n'avons pas trouvé cette commande", 1);
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
    public function show($id)
    {
        try {
            $or = DB::select("select *, DATE_FORMAT(createdat, '%W %e, %M %Y %H:%i') AS fmt_date FROM orders where order_id =".$id." order by createdat");
            if ($or === null) {
                throw new Exception("Nous n'avons pas trouvé cette commande", 1);
            }
            $user = Users::where("id", $or[0]->user)->get()->first();
            $info = Info::find(1);
            $oi = DB::select("SELECT i.*, p.name, p.price
        FROM order_items i
        JOIN products p 
        ON p.product_id = i.product_id
        WHERE i.order_id =" . $or[0]->order_id);
            return view('admin.pages-invoice', ["o" => $or[0], "i" => $info, "u" => $user, "oi" => $oi]);
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function iframeshow($id)
    {
        try {
            $or = DB::select("select *, DATE_FORMAT(createdat, '%W %e, %M %Y %H:%i') AS fmt_date FROM orders where order_id = " . $id . " order by createdat");
            if (count($or) < 1) {
                throw new Exception("Nous n'avons pas trouvé cette commande", 1);
            }
            $user = Users::where("id", $or[0]->user)->get()->first();
            $info = Info::find(1);
            $oi = DB::select("SELECT i.*, p.name, p.price
        FROM order_items i
        JOIN products p 
        ON p.product_id = i.product_id
        WHERE i.order_id =" . $or[0]->order_id);
            $crypt = encrypt($or[0]->order_id);
            return view('admin.pages-iframe-invoice', ["o" => $or[0], "i" => $info, "crypt" => $crypt, "u" => $user, "oi" => $oi]);
        } catch (Throwable $th) {
            return redirect("/notfound");
        }
    }
    /**
     * Send invoice to customer
     */
    public function invoice_validate(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $ore = Orders::find($id);
            $info = Info::find(1);
            if ($ore === null) {
                throw new Exception("Nous n'avons pas trouvé cette commande", 1);
            }
            $ore->status = "Waiting for Payment";
            $ore->save();
            if ($request->input('state') === "valider") {
                $or = DB::select("select *, DATE_FORMAT(createdat, '%W %e, %M %Y %H:%i') AS fmt_date FROM orders where order_id = " . $id . " order by createdat");
                if (count($or) < 1) {
                    throw new Exception("Nous n'avons pas trouvé cette commande", 1);
                }
                $user = Users::where("id", $or[0]->user)->get()->first();
                $oi = DB::select("SELECT i.*, p.name, p.price
                                FROM order_items i
                                JOIN products p 
                                ON p.product_id = i.product_id
                                WHERE i.order_id =" . $or[0]->order_id);
                $crypt = encrypt($or[0]->order_id);
                Mail::send('admin.pages-iframe-invoice', ["o" => $or[0], "i" => $info, "crypt" => $crypt, "u" => $user, "oi" => $oi], function ($message) use ($request) {
                    $message->to("support@elwin.com");
                    $message->subject('Votre Commande est Prête');
                });
            } else {
                $or = DB::select("select *, DATE_FORMAT(createdat, '%W %e, %M %Y %H:%i') AS fmt_date FROM orders where order_id = " . $id . " order by createdat");
                if (count($or) < 1) {
                    throw new Exception("Nous n'avons pas trouvé cette commande", 1);
                }
                $user = Users::where("id", $or[0]->user)->get()->first();
                $oi = DB::select("SELECT i.*, p.name, p.price
                                FROM order_items i
                                JOIN products p 
                                ON p.product_id = i.product_id
                                WHERE i.order_id =" . $or[0]->order_id);
                $crypt = encrypt($or[0]->order_id);
                Mail::send('admin.pages-iframe-invoice', ["o" => $or[0],  "i" => $info,"crypt" => $crypt, "u" => $user, "oi" => $oi], function ($message) use ($request) {
                    $message->to("support@elwin.com");
                    $message->subject('Rappel de Commandes');
                });
            }
            DB::commit();
            return redirect("/admin/shop/orders");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function livrer($id)
    {
        try {
            DB::beginTransaction();
            $ore = Orders::find($id);
            $info = Info::find(1);
            if ($ore === null) {
                throw new Exception("Nous n'avons pas trouvé cette commande", 1);
            }
            $ore->status = "Livrer";
            $info->caf += $ore->amount;
            $ore->save();
            $info->save();
            DB::commit();
            return redirect("/admin/shop/orders");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    /**
     * Customer pay invoice
     */
    public function invoice_payshow($ref)
    {
        try {
            $id = decrypt($ref);
            $ore = Orders::find($id);
            $info = Info::find(1);
            if ($ore === null) {
                throw new Exception("Nous n'avons pas trouvé cette commande", 1);
            }
            $or = DB::select("select *, DATE_FORMAT(createdat, '%W %e, %M %Y %H:%i') AS fmt_date FROM orders where order_id = " . $id . " order by createdat");
            if (count($or) < 1) {
                throw new Exception("Nous n'avons pas trouvé cette commande", 1);
            }
            $user = Users::where("id", $or[0]->user)->get()->first();
            $oi = DB::select("SELECT i.*, p.name, p.price
                                FROM order_items i
                                JOIN products p 
                                ON p.product_id = i.product_id
                                WHERE i.order_id =" . $or[0]->order_id);
            $crypt = encrypt($or[0]->order_id);
            return view('admin.pages-iframe-payment', ["o" => $or[0], "u" => $user, "i" => $info, "crypt" => $crypt, "oi" => $oi]);
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified order.
     */
    public function invoice_cancel($ref)
    {
        try {
            $id = decrypt($ref);
            $ore = Orders::find($id);
            if ($ore === null) {
                throw new Exception("Nous n'avons pas trouvé cette commande", 1);
            }
            DB::beginTransaction();
            $ore = Orders::find($id);
            $ore->status = "Annuler";
            $ore->save();
            DB::commit();
            return redirect()->back()->with('error', "Votre Commande a été annuler");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

    }

    public function invoice_confirm($ref)
    {
        try {
            $id = decrypt($ref);
            $ore = Orders::find($id);
            if ($ore === null) {
                throw new Exception("Nous n'avons pas trouvé cette commande", 1);
            }
            DB::beginTransaction();
            $ore = Orders::find($id);
            $ore->status = "Confirmer";
            $ore->save();
            DB::commit();
            return redirect()->back()->with('error', "Votre Commande a été confirmer");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $order = Orders::find($request->input("order"));
            if ($order === null) {
                throw new Exception("Nous n'avons pas trouvé cette commande", 1);
            }
            DB::beginTransaction();
            $order->delete();
            DB::commit();
            return redirect()->back()->with('error', "Votre Commande a été supprimer avec succès");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}