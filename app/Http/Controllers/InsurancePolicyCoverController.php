<?php

namespace App\Http\Controllers;

use App\Facade\InsuranceLister;
use App\Factory\InsuranceFactory;
use App\Models\InsuranceCover;
use App\Models\InsurancePolicy;

use Illuminate\Http\Request;

class InsurancePolicyCoverController extends Controller
{
    // CREATE
    public function create(InsurancePolicy $insurancePolicy){
        return view("dashboard.create", compact('insurancePolicy'));
    }

    // This function implements the factory pattern
    public function store(array $attributes){
        $insurance = InsuranceFactory::build($attributes['type'], $attributes); 

        $insuranceCover = $insurance->createInsurance();

        $insurance->createInsuranceClause($insuranceCover);

        return $insuranceCover;
    }

    // READ
    public function index(Request $request, string $type){ 
        $insuranceCovers = $this->list($type);

        return view("dashboard.insurance.index", compact('insuranceCovers', 'type'));
    }
 
    // Insurance lister is called here and it returns a method, depending on the type that's passed from "index"
    private function list($type){
        $insurance = new InsuranceLister();

        switch ($type) {
            case 'home':
                return $insurance->getHomeInsurancePolicies();
            
            case 'car':
                    return $insurance->getCarInsurancePolicies();
            
            case 'life':
                return $insurance->getLifeInsurancePolicies();

            default:
                return [];
        }
    }

    // DELETE
    public function destroy(InsuranceCover $insuranceCover){
        $insuranceCover->delete();

        return back()->with('success', 'Insurance Cover successfully deleted!');
    }
}
