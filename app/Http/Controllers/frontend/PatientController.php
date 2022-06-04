<?php

namespace App\Http\Controllers\frontend;

use App\Models\Room;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PatientController extends Controller
{
    public function store(Request $request)
    {
        $room = Room::where('is_avalble', 0)->first();
        if ($room) {
            $this->validate($request, [
                'name'=>'required|string|max:250',
                 'age'=>'required|integer|min:18|max:100',
                'address'=>'required|string|max:255',
                'national_id'=>'required|integer',
                'email'=>'required|email|unique:App\Models\Patient,email',
                'phone'=>'required|numeric|starts_with:010,011,012,015',
                'is_have_chronic_disease'=>'required|in:1,0|boolean',
                'surgeries_before'=>'required|string|max:250',
                 'serious_injuries_before'=>'required|string|max:250',
                'blood_type'=>'required',
               'glucose_measurement'=>'required|int',
                'pressure_gauge'=>'required|int',

            ]);
            if ($validator->fails()) {
                return redirect('admin/patient-create')
                            ->withErrors($validator)
                            ->withInput();
            }
            Patient::create($request->except('_token'));
        }else{
            return Redirect::back()->with('msg', 'عفوا لا يوجد غرف لدينا متاحه في الوقت الحالي  من فضلك حاول لاحقااو ابحث في مكان اخر');

        }
    }
}



