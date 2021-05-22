<?php

namespace App\Http\Controllers\Admin;

use App\Models\Equipments;
use App\Models\tblequipclassification;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class equipmentmgtcontroller extends Controller
{
    //
    public function index()
    {
        //Fetch all Users [Offices] Model DBf connection 

        $equipments = Equipments::orderBy('description', 'asc')->get();
        $classifications = tblequipclassification::orderby('classification','asc')->get();


        // where  
        // $offices = Offices::where('name', 'AICTC')->get();       
        
        //Display office Page 

        return view('admin.equipmentmgt')
             ->withdata($equipments)
             ->withclassifications($classifications);
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


