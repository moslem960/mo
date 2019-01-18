<?php /** @noinspection ALL */

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
        //
        factory(\App\User::class,20)->create()->each(function ($user){
            $user->books()->create(factory(\App\books::class)->make()->toArray())->categories()->attach([1,2]);
        });

//        \App\User::create([
//            'name'=>'mondo',
//            'phone_number'=>'09171797181',
//            'password'=>bcrypt('123')
//
//        ]);
    }
}
