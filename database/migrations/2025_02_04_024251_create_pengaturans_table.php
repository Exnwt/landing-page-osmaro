<?php

use App\Models\pengaturan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use OpenSpout\Reader\ODS\Helper\SettingsHelper;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaturans', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')
            ->nullable();
            $table->string('type');
            $table->timestamps();
        });

        pengaturan::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Coba',
            'type'=>'text',
        ]);
        pengaturan::create([
            'key'=>'_location',
            'label'=>'Alamat Kantor',
            'value'=>'Buana Central Park',
            'type'=>'text',
        ]);
        pengaturan::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://www.instagram.com/osmarolab.id/',
            'type'=>'text',
        ]);
        pengaturan::create([
            'key'=>'_facebook',
            'label'=>'Facebook',
            'value'=>'https://www.facebook.com/OsmaroLab.id',
            'type'=>'text',
        ]);
        pengaturan::create([
            'key'=>'_linkedin',
            'label'=>'Linkedin',
            'value'=>'https://id.linkedin.com/company/osmaro-laboratory-clinic',
            'type'=>'text',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturans');
    }
};
