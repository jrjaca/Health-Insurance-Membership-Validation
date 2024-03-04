<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    //
    public function __construct()
    {
        $this->member = new Member();
    }

    public function searching(Request $request){

        $householdId = trim($request['household_id']);
        $lName = trim(strtoupper($request['last_name']));
        $fName = trim(strtoupper($request['first_name']));
        $mName = trim(strtoupper($request['middle_name']));

        $rules = array(
            'last_name' => ['required_with:first_name'], //file //if is_hardcopy is false, require attachment
            'first_name' => ['required_with:last_name'],
            'household_id' => ['required_without_all:last_name,first_name'],
        );    
        $messages = array(
            'last_name.required_with' => 'Last name is also required.',
            'first_name.required_with' => 'First name is also required.',
            'household_id.required_without_all' => 'Please provide at least one criteria.',
        );
        
        $validator = Validator::make( $request->all(), $rules, $messages );                
        if ($validator->fails()){
            return Redirect()->back()->withInput()->withErrors($validator->messages()->get('*')); 
        } 

        $members = $this->member->GetMemberByAdvCriteria($householdId, $lName, $fName, $mName); 
        // dd($members);
        return view('result-list', compact('members'));
    }
}
