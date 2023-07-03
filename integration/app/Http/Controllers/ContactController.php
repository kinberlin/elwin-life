<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\InfoUtiles;
use App\Models\Response;
use App\Models\Info;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Request;
use Throwable;

class ContactController extends Controller
{
    public function create()
    {
        $client = new ClientController();
         try {
            /*$messages = DB::select(
                'SELECT c.*, u.firstname "sender_name", rs.id "resid", rs.message "response" , u.image "sender_image",r.firstname "receiver_name" , r.image "receiver_image", DATE_FORMAT(c.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
                FROM contact c
                LEFT JOIN response rs
                ON rs.contact = c.id
                JOIN user u
                ON c.sender = u.id
                JOIN user r
                ON rs.sender = r.id
                WHERE c.sender = '.Auth::user()->id
            );*/
            $messages = DB::select(
                'SELECT c.*, u.firstname "sender_name", rs.id "resid", rs.message "response" , u.image "sender_image",r.firstname "receiver_name" , r.image "receiver_image", DATE_FORMAT(c.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
                FROM contact c
                LEFT JOIN response rs
                ON rs.contact = c.id
                JOIN user u
                ON c.sender = u.id
                LEFT JOIN user r
                ON rs.sender = r.id
                WHERE c.sender = '.Auth::user()->id .'
                ORDER BY c.createdat DESC'
            );
        $infoutil = InfoUtiles::all();
        $info = Info::find(1);
        return view('customer.contact', ["infoutil" => $infoutil,"info" => $info, "messages"=>$messages, "personal" => $client->personalinfo(), "subinfo" => $client->suscribeinfo()]);
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la surpression");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();
            $co = new Contact();
            $adm = Users::where('role', 1)->get()->first();
            $co->message = $request->input('message');
            $co->sender = $request->input('rec');
            $co->receiver = $adm->id;
            $co->save();
            DB::commit();
            return redirect('/contact')->with('error', "Product successfully Added.");
        } catch (Throwable $th) {
            return response()->json($th->getMessage(), 513);
            //return redirect()->back()->with('error',"Echec lors de l'ajout'");
        }
    }
    public function response(Request $request)
    {
        try {
            DB::beginTransaction();
            $co = new Response();
            $adm = Users::where('role', 1)->get()->first();
            $co->message = $request->input('message');
            $co->sender = Auth::user()->id;
            $co->contact = $request->input('contact');
            $co->receiver = $request->input('rec');
            $co->save();
            DB::commit();
            $cn = Contact::find($request->input('contact'));
            $cn->status = 2;
            $cn->save();
            return redirect()->back()->with('error', "Product successfully Added.");
        } catch (Throwable $th) {
            return response()->json($th->getMessage(), 513);
            //return redirect()->back()->with('error',"Echec lors de l'ajout'");
        }
    }
    public function upresponse(Request $request)
    {
        try {
            DB::beginTransaction();
            $co = Response::where('id', $request->input('id'))->get()->first();
            $co->message = $request->input('message');
            $co->save();
            DB::commit();
            return redirect()->back()->with('error', "Product successfully Added.");
        } catch (Throwable $th) {
            return response()->json($th->getMessage(), 513);
            //return redirect()->back()->with('error',"Echec lors de l'ajout'");
        }
    }
    public function adminchat()
    {
        $client = new ClientController();
         try {
            $users = Users::where('role', 2)->get();
            $liste = DB::select(
                'SELECT c.*, sender.firstname,r.message "response", r.id "resid", sender.lastname, sender.phone, sender.email, sender.image, DATE_FORMAT(c.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date, DATE_FORMAT(r.createdat, \'%W %e, %M %Y %H:%i\') AS res_date
                FROM contact c
                LEFT JOIN response r
                ON c.id = r.contact
                JOIN user sender
                ON sender.id = c.sender
                ORDER BY c.createdat desc;'
            );
            
        $info = Info::find(1);
        return view('admin.pages-chat',["messages" => $liste]);
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la surpression");
        }
    }
}