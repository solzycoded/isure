<?php

namespace App\Http\Controllers\Api\I1;

use App\Http\Controllers\Controller;

use App\Http\Controllers\InsurancePolicyCoverController;
use App\Http\Requests\Requests\CreateInsuranceCoverRequest;
use App\Http\Resources\InsuranceCoverResource;

use App\Models\InsuranceCover;
use App\Models\InsurancePolicy;

// the api controller, holds the "store / create", "delete" and "indexing" for the insurance policy covers / types
class InsuranceCoverController extends Controller
{
    // CREATE
    public function store(CreateInsuranceCoverRequest $request){
        $insurancePolicy = $this->findInsurance($request['type']);

        if(isset($insurancePolicy->id)){
            $insuranceCover = (new InsurancePolicyCoverController())->store($request->validated());

            return response()->json([
                'success' => isset($insuranceCover->id) ? true : false
            ], 200);
        }

        return response()->json([
            'success' => false,
            'not found' => $request['type'] . ' insurance policy not found!'
        ], 302);
    }

    private function findInsurance($type){
        return InsurancePolicy::filter(['name' => $type])->first();
    }

    // READ
    public function index(){
        return InsuranceCoverResource::collection(InsuranceCover::all());
    }

    // DELETE
    public function destroy(int $id){
        $insuranceCover = InsuranceCover::find($id);
        $insuranceCover->delete();

        $response = !isset($insuranceCover->id) ? $this->message('not found', 'insurance cover not found', 402) : $this->message('success', true, 200);

        return response()->json([
            $response['response'] => $response['msg'],
        ], $response['status']);
    }

    private function message($response, $msg, $status){
        return ['response' => $response, 'msg' => $msg, 'status' => $status];
    }
}
