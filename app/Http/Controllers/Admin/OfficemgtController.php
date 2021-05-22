<?php

namespace App\Http\Controllers\Admin;


use App\Models\Offices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;


class OfficemgtController extends Controller
{
    //

    public function index()
    {
        //Fetch all Users [Offices] Model DBf connection 

        $offices = Offices::orderBy('name', 'asc')->get();

        // where  
        // $offices = Offices::where('name', 'AICTC')->get();       
        
        //Display office Page 

        return view('admin.officemgt')
             ->withdata($offices);
    }

    public function indexlist()
    {
        //Fetch all Users [Offices] Model DBf connection 

        $offices = Offices::orderBy('name', 'asc')->get();

        // where  
        // $offices = Offices::where('name', 'AICTC')->get();       
        
        //Display office Page 

        return view('admin.officeview')
             ->withdata($offices);
    }

    public function customerindex()
    {
        //Fetch all Users [Offices] Model DBf connection 

        $data = Offices::orderBy('name', 'asc')->get();

        // where  
        // $offices = Offices::where('name', 'AICTC')->get();       
        
        //Display office Page 

        return view('admin.customerview')
             ->withdata($data);
    }



    public function store(Request $request)
    {
        $offices = new Offices();

        $offices->name = $request->input('name');
        $offices->location = $request->input('location');
        $offices->grpid = $request->input('grpid');

        $offices->save();
        return redirect('/officemgt')->with('status','Succesfully Added New Office Data ');

    }

    public function edit($id)
    {
        // public function edit($id)

         $offices = Offices::findorFail($id);

        //display content
        //return $offices = Offices::findorFail($id);
        
        // return view('admin.office.edit')->with('*variable',*dataset);                                       
          return view('admin.office.edit')->with('offices',$offices);
    }

    //public function edit($id)
    //{
    //  $offices = Office::orderBy('office', 'asc')->get();
    //  $user = User::where('id', $id)->first();
    //  return view('manage.users.edit')->withUser($user)->withOffices($offices);
   // }

    public function update(Request $request,$id)
    {
        $offices = Offices::findorFail($id);
        $offices->name = $request->input('name');
        $offices->location = $request->input('location');
        $offices->grpid = $request->input('grpid');
        $offices->update();

        return redirect('/officemgt')->with('status','Office Data Updated');
    }

    public function delete($id)
    {
        $offices = Offices::findorFail($id);
        $offices->delete();
        return redirect('/officemgt')->with('status','Office Data Deleted');
    }

    public function pdf()
    {
        
        // $data = Offices::all();
        $data = Offices::orderBy('name', 'desc')->get();
        // where  
        // $offices = Offices::where('name', 'AICTC')->get();       
        

        //$data = [
            // 'title' => 'First PDF for Medium',
            // 'title' => 'Title Office List',
            // 'heading' => 'Office List Head',

          //'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum '
                       
         // ]; 

         // $data = [
            // 'offices' => $offices->id,
            //'content' => 'content',

         // ];


        
        //Display office Page 

        //return view('admin.officeview')
        //     ->withdata($offices);
        
           // $pdf = PDF::loadView('pdf_view', $data);

           // $pdf = PDF::loadView('pdf', $data);

          
          $pdf = PDF::loadView('pdf_view',compact('data'))->setPaper('a4', 'portrait');

          
          //download PDF file with download method
          return $pdf->download('officelist.pdf');

          // view pdf file
          //return $pdf->stream('officelist.pdf');

// From New  
// Fetch all customers from database
// $data = Customer::get();

// Send data to the view using loadView function of PDF facade
//$pdf = PDF::loadView('pdf.customers', $data);

// If you want to store the generated pdf to the server then you can use the store function
//$pdf->save(storage_path().'_filename.pdf');

// Finally, you can download the file using download function
// return $pdf->download('customers.pdf');
// End

 }


    public function convert_customer_data_html()
    {
        // $customer_data = $this->get_customer_data();
        $offices = Offices::orderBy('name', 'asc')->get();
        $output = '
            <tr>
                <th class="w-10p">ID</th>
                <th class="w-10p">Name</th>
                <th class="w-10p">Location</th>
                <th class="w-10p">Group ID</th>
            </tr>
        ';

        foreach ($offices as $field)
        {
            $output .= '
            <h3> align="center">Office List</h3>    
            <table>
                <tr>
                <td>'.$field->id.'</td>
                <td>'.$field->name.'</td>
                <td>'.$field->location.'</td>
                <td>'.$field->grpid.'</td>
                </tr> 
                '; 
        }
        $output .= '</table>';
        return $output;

    }
        //Customer Example

        public function export_pdf()
        {
          // Fetch all customers from database
          $data = Customer::get();

          // Send data to the view using loadView function of PDF facade
          $pdf = PDF::loadView('pdf.customers', $data);

          // If you want to store the generated pdf to the server then you can use the store function
          $pdf->save(storage_path().'_filename.pdf');

          // Finally, you can download the file using download function
          return $pdf->download('customers.pdf');
        }
 
    
    

}        
        
        
                                  
        

    

