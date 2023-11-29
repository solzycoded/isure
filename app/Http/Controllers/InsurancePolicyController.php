<?php

namespace App\Http\Controllers;

use App\Models\InsurancePolicy;
use Illuminate\Http\Request;

class InsurancePolicyController extends Controller
{
    // READ
    public function index(){
        $insurancePolicies = InsurancePolicy::all();

        return view('dashboard.index', compact('insurancePolicies'));
    }

    public function find(Request $request, ?InsurancePolicy $insurancePolicy){
        view("dashboard.create", compact('insurancePolicy'));
    }

    // UPDATE
    public function edit(InsurancePolicy $insurancePolicy){
        return view('dashboard.edit', compact('insurancePolicy'));
    }

    public function update(Request $request, InsurancePolicy $insurancePolicy){
        $attributes = $this->validateInsurancePolicyInput($request);

        $insurancePolicy->update($attributes);

        return redirect('/');
    }

    // INPUT VALIDATION
    protected function validateInsurancePolicyInput($request){
        return $request->validate([
            'description'          => 'required|string|max:200',
            'default_premium'      => 'required|numeric|decimal:2',
            'terms_and_conditions' => 'required|string',
        ]);
    }
}
