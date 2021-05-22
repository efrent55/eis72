<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\tblequiptran;

use App\Models\Equipments;
use App\Models\tblequipclassification;


use DB;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class transactioncontroller extends Controller
{
    //
    public function index()
    {
        //Fetch all Users [Offices] Model DBf connection 

        
        //Display office Page
        
        $users = User::all();
        //return view('admin.register'); display only
        // return view('admin.register')->with('users',$users);


        return view('admin.transactionview')
             ->withdata($users);
    }

    public function transactionindex($id)
    {
        //Fetch all Users [Offices] Model DBf connection 

        
        //Display office Page
        
        // $equipments = Equipments::orderBy('description', 'asc')->get();
        // $users = User::all();

        //$equipments = Equipments::findorFail($id)
        //            ->select('serialnr')
        //            ->get();

        //Display Contents
        //return $equipments = Equipments::findorFail($id);
        // where('first_name', 'LIKE', '%' . $term . '%')

        $trantbl = DB::table('tblequiptran')
                ->where('tblequiptran.sn','LIKE', '%' . $id . '%')
                ->join('tblequipments', 'tblequiptran.pid', '=', 'tblequipments.serialnr') 
                ->select('tblequipments.serialnr', 'tblequipments.description', 'tblequiptran.sn')
                ->get();

                
                // $cadets = Profile::where('profile_type', '=', 'Cadet')->get();

                //$conversation = DB::table('conversation_messages')
                //->where('belongsTo', $id)
                //->join('users', 'conversation_messages.sender', '=', 'users.id')
                //->join('user_avatars', 'conversation_messages.sender', '=', 'user_avatars.id')
                //->select('users.name', 'conversation_messages.*', 'user_avatars.name', 'user_avatars.filetype')
                //->get();
            ///return $conversation;


        return view('admin.transaction.personalview')
             ->withdata($trantbl);

             // return view('admin.equipment.edit')->with('equipment',$equipments);

             //$offices = Office::orderBy('office', 'asc')->get();
             //$user = User::where('id', $id)->first();
             //return view('manage.users.edit')->withUser($user)->withOffices($offices);
    }

    public function issuanceindex()
    {
        //Fetch all Users [Offices] Model DBf connection 

        
        //Display office Page
        $equipments = Equipments::orderBy('description', 'asc')->get();
        
        // $users = User::all();
        // return view('admin.register'); display only
        // return view('admin.register')->with('users',$equipments);

        return view('admin.transaction.issuance')
             ->withdata($equipments);
    }






    

    

    public function store(Request $request)
    {
        $equipments = new Equipments();

        $equipments->serialnr = $request->input('serialnr');
        $equipments->description = $request->input('description');
        $equipments->dt_acquired = $request->input('dt_acquired');

        $equipments->unitmeasure = $request->input('unitmeasure');
        $equipments->unitvalue = $request->input('unitvalue');
        $equipments->equipstatid = $request->input('equipstatid');
        $equipments->equipclassid = $request->input('equipclassid');

        $equipments->save();
        return redirect('/equipmentmgt')->with('status','Succesfully Added New Equipment Data ');

    }

    public function edit($id)
    {
        // public function edit($id)

         $equipments = Equipments::findorFail($id);

        //display content
        // return $equipments = Equipments::findorFail($id);
        
        // return view('admin.office.edit')->with('*variable',*dataset);                                       
        return view('admin.equipment.edit')->with('equipment',$equipments);
    }

    public function update(Request $request,$id)
    {
        $equipments = Equipments::findorFail($id);

        //Display Contents
        // return $equipments = Equipments::findorFail($id);

        $equipments->serialnr = $request->input('serialnr');
        $equipments->description = $request->input('description');
        $equipments->dt_acquired = $request->input('dt_acquired');

        $equipments->unitmeasure = $request->input('unitmeasure');
        $equipments->unitvalue = $request->input('unitvalue');
        $equipments->equipstatid = $request->input('equipstatid');
        $equipments->equipclassid = $request->input('equipclassid');


        $equipments->update();
        return redirect('/equipmentmgt')->with('status','Equipment Data Updated');
   
   }

   public function delete($id)
    {
        $equipment = Equipments::findorFail($id);
        $equipment->delete();
        return redirect('/equipmentmgt')->with('status','Equipment Deleted');
    }

    public function view_qr($id)
    {
        $data = [
          'content' => $id
                       
          ];                             
        return view('admin.QrCodeViewer',$data);
    }

    //Route::get('qrcode', function () {
    //    return QrCode::size(300)->generate('A basic example of QR code!');
    // });

}


