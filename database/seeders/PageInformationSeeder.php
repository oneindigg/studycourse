<?php

namespace Database\Seeders;

use App\Models\PageInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_infos')->truncate();
        $data = array(
            array(
                'title' => 'Meet our Teachers',
                'sub_title' =>  'Experienced Professionals',
                'description'   =>  'Staff Descriptions',
                'slug'          =>  'staffs',
            ),
            array(
                'title' => 'Meet our Teachers',
                'sub_title' =>  'Experienced Professionals',
                'description'   =>  'Staff Descriptions',
                'slug'          =>  'facilities',
            ),
        );
        DB::table('page_infos')->insert($data);
    }
}