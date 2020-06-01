<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->role = 'ADMIN';
        $admin->firstname = 'admin';
        $admin->lastname = 'monfin';
        $admin->telephone = '0932545698';
        $admin->username = 'admin';
        $admin->password = Hash::make('123456789');
        $admin->email = 'admin@hotmail.com';
        $admin->email_verified_at = now();
        $admin->image = '/storage/images/users/admin.png';
        $admin->save();

        $admin = new User;
        $admin->role = 'USER';
        $admin->firstname = 'Korrakot';
        $admin->lastname = 'Triwichein';
        $admin->telephone = '0932813460';
        $admin->username = 'korrakot1396';
        $admin->password = Hash::make('123456789');
        $admin->email = 'korrakot.tr@ku.th';
        $admin->email_verified_at = now();
        $admin->image = '/storage/images/users/user1.jpg';
        $admin->save();

        $admin = new User;
        $admin->role = 'USER';
        $admin->firstname = 'Nipath';
        $admin->lastname = 'Palasinkulkit';
        $admin->telephone = '0971266629';
        $admin->username = 'nipath.p';
        $admin->password = Hash::make('123456789');
        $admin->email = 'nipath.p@ku.th';
        $admin->email_verified_at = now();
        $admin->image = '/storage/images/users/user2.jpg';
        $admin->save();

        $admin = new User;
        $admin->role = 'USER';
        $admin->firstname = 'Park';
        $admin->lastname = 'Hyung Seok';
        $admin->telephone = '0698547854';
        $admin->username = 'park_hyung';
        $admin->password = Hash::make('123456789');
        $admin->email = 'park_hyung@ku.th';
        $admin->email_verified_at = now();
        $admin->image = '/storage/images/users/user5.jpg';
        $admin->save();

        $admin = new User;
        $admin->role = 'USER';
        $admin->firstname = 'Komsorn';
        $admin->lastname = 'Singhakun';
        $admin->telephone = '0985478569';
        $admin->username = 'komsorn';
        $admin->password = Hash::make('123456789');
        $admin->email = 'komsorn@ku.th';
        $admin->email_verified_at = now();
        $admin->image = '/storage/images/users/user3.jpg';
        $admin->save();

        $admin = new User;
        $admin->role = 'USER';
        $admin->firstname = 'Pimpapa';
        $admin->lastname = 'Pisarn';
        $admin->telephone = '0875489623';
        $admin->username = 'pimpapa';
        $admin->password = Hash::make('123456789');
        $admin->email = 'pimpapa@ku.th';
        $admin->email_verified_at = now();
        $admin->image = '/storage/images/users/user4.jpg';
        $admin->save();
        

        factory(User::class, 20)->create();
    }
}
