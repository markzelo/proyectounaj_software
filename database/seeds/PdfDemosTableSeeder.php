<?php

use Illuminate\Database\Seeder;
use App\PdfDemo;

class PdfDemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PdfDemo::create([
        	'title' => 'Configurar Impresora',
        	'path' => 'C:\Users\Fernando\Downloads\5bc7d203baf07_SamplePDF.pdf',
        	'user_id' => '1'
        ]);
        PdfDemo::create([
        	'title' => 'Configurar Monitor',
        	'path' => 'C:\Users\Fernando\Downloads\5bc7d203baf07_SamplePDF.pdf',
        	'user_id' => '1'
        ]);
    }
}
