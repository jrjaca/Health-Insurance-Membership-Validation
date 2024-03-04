<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('REGION')->nullable();	
            $table->string('PROVINCE')->nullable();	
            $table->string('MUNICIPALITY')->nullable();	
            $table->string('BARANGAY')->nullable();	
            $table->string('HOUSEHOLD_ID')->nullable();	
            $table->string('ENTRY_ID')->nullable();	
            $table->string('LAST_NAME')->nullable();	
            $table->string('FIRST_NAME')->nullable();	
            $table->string('MIDDLE_NAME')->nullable();	
            $table->string('EXTENSION_NAME')->nullable();	
            $table->string('SEX')->nullable();	
            $table->string('BIRTHDAY')->nullable();	
            $table->string('AGE')->nullable();	
            $table->string('RELATIONSHIP_TO_HH_HEAD')->nullable();	
            $table->string('GRANTEE')->nullable();	
            $table->string('FOR_ENROLMENT')->nullable();	
            $table->string('FOR_3_IN_1')->nullable();	
            $table->string('CATEGORY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('”member”');
    }
}
