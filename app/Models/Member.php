<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    public function GetMemberByAdvCriteria($householdId, $lName, $fName, $mName){

        ini_set('max_execution_time', 360); //6mins
        ini_set('memory_limit', '2048M');	//2 GB
		//ERROR:   Allowed memory size of 134217728 bytes exhausted (tried to allocate 83468448 bytes)

        $allMa = DB::table('mcct_active_2022');
        //crieteria
        if ($householdId != '') { $allMa->where('HOUSEHOLD_ID', $householdId); }           
        if ($lName != '')       { $allMa->where('LAST_NAME', 'like', $lName); }
        if ($fName != '')       { $allMa->where('FIRST_NAME', 'like', $fName); }
        if ($mName != '')       { $allMa->where('MIDDLE_NAME', 'like', $mName); }
        
        $allMi = DB::table('mcct_inactive_2022');
        if ($householdId != '') { $allMi->where('HOUSEHOLD_ID', $householdId); }           
        if ($lName != '')       { $allMi->where('LAST_NAME', 'like', $lName); }
        if ($fName != '')       { $allMi->where('FIRST_NAME', 'like', $fName); }
        if ($mName != '')       { $allMi->where('MIDDLE_NAME', 'like', $mName); }

        $allRa = DB::table('rcct_active_2022');
        if ($householdId != '') { $allRa->where('HOUSEHOLD_ID', $householdId); }           
        if ($lName != '')       { $allRa->where('LAST_NAME', 'like', $lName); }
        if ($fName != '')       { $allRa->where('FIRST_NAME', 'like', $fName); }
        if ($mName != '')       { $allRa->where('MIDDLE_NAME', 'like', $mName); }

        $allRi = DB::table('rcct_inactive_2022');
        if ($householdId != '') { $allRi->where('HOUSEHOLD_ID', $householdId); }           
        if ($lName != '')       { $allRi->where('LAST_NAME', 'like', $lName); }
        if ($fName != '')       { $allRi->where('FIRST_NAME', 'like', $fName); }
        if ($mName != '')       { $allRi->where('MIDDLE_NAME', 'like', $mName); }

        $allMiSql = $allMa->select('*');
        $allRaSql = $allMi->select('*')->union($allMiSql);
        $allRiSql = $allRa->select('*')->union($allRaSql);
        $allMaSql = $allRi->select('*')->union($allRiSql)->orderBy('LAST_NAME')->get();
        return $allMaSql;

    }
}
