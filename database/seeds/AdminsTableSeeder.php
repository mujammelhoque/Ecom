<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            [
                'id'=>1,
                'name'=>'admin',
                'type'=>'admin',
                'mobile'=>'1265546',
                'email'=>'admin@admin.com',
                'password'=>'$2y$10$N8HfNaYBno8WIMTYvvwkM.P9x62sKoR6zwvx1TfRS/qByIkmmmoly',
                'image'=>'', 'status'=>1,
            ],
            [
                'id'=>2,
                'name'=>'john',
                'type'=>'subadmin',
                'mobile'=>'1265546',
                'email'=>'john@admin.com',
                'password'=>'$2y$10$N8HfNaYBno8WIMTYvvwkM.P9x62sKoR6zwvx1TfRS/qByIkmmmoly',
                'image'=>'', 'status'=>1,
            ],
            [
                'id'=>3,
                'name'=>'steve',
                'type'=>'subadmin',
                'mobile'=>'1265546',
                'email'=>'steve@admin.com',
                'password'=>'$2y$10$N8HfNaYBno8WIMTYvvwkM.P9x62sKoR6zwvx1TfRS/qByIkmmmoly',
                'image'=>'', 'status'=>1,
            ],
            [
                'id'=>4,
                'name'=>'amit',
                'type'=>'subadmin',
                'mobile'=>'1265546',
                'email'=>'amit@admin.com',
                'password'=>'$2y$10$N8HfNaYBno8WIMTYvvwkM.P9x62sKoR6zwvx1TfRS/qByIkmmmoly',
                'image'=>'', 'status'=>1,
            ]
            ];
            DB::table('admins')->insert($adminRecords);
            // foreach ($adminRecords as $key => $value) {
            //    \App\Admin::create($value);
            // }
    }
}
