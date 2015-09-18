<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pode colocar o use CodeDelivery\Models\User;
        //factory(\CodeDelivery\Models\User::class, 10)->create();// Antigo apenas para usuarios sem relacionamento com o Cliente

        factory(\CodeDelivery\Models\User::class, 10)->create()->each(function($u){
            $u->client()->save(factory(\CodeDelivery\Models\Client::class)->make());
        });
    }
}
