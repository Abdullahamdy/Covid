<?php

namespace App\Http\Controllers\frontend;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function store(Request $request)
    {
      
            $validator = Validator::make($request->all(), [
                'name'=>'required|string|max:250',
                 'age'=>'required|integer|min:18|max:100',
                'address'=>'required|string|max:255',
                'national_id'=>'required|integer',
                'email'=>'required|email|unique:App\Models\Patient,email',
                'phone'=>'required|starts_with:010,011,012,015',
                'is_have_chronic_disease'=>'required|in:1,0|boolean',
                'surgeries_before'=>'required|string|max:250',
                 'serious_injuries_before'=>'required|string|max:250',
                'blood_type'=>'required',
               'glucose_measurement'=>'required|int',
                'pressure_gauge'=>'required|int',
                'is_avalible'=>'nullable',

            ]);
            
            if ($validator->fails()) {
                return redirect('admin/patient-create')
                            ->withErrors($validator)
                            ->withInput();
            }else{
                
                Patient::create($request->except('_token'));
                return redirect()->back()->with('msgeSuccess', 'تم الحجز بنجاح');
            }
            
       
        

       
    }
}



