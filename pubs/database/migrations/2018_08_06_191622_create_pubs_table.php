<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pubs', function (Blueprint $table) {
            $table->increments('PUBID');
            $table->string('rsPubName');
            $table->string('rsAddress');
            $table->string('Add2');
            $table->string('Add3');
            $table->string('rsTown');
            $table->string('rsCounty');
            $table->string('rsPostCode');
            $table->string('Region');
            $table->string('PremisesType');
            $table->string('NumberEmployees');
            $table->string('Industry');
            $table->string('SIC');
            $table->string('Turnover');
            $table->string('rsTel');
            $table->string('rsFax');
            $table->string('rsWebsite');
            $table->string('Title');
            $table->string('Forename');
            $table->string('Surname');
            $table->string('Position');
            $table->string('Email');
            $table->string('EmailStatus');
            $table->string('DateEmailValidated');
            $table->string('PostalSearch');
            $table->string('rsLat');
            $table->string('rsLong');
            $table->string('rsAboutpub');
            $table->string('rsUser1');
            $table->string('rsPass1');
            $table->string('icon');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('offer1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pubs');
    }
}
