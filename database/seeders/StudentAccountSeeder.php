<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student_group = [
            ['id' => '7', 'role_id' => '3', 'name' => 'sleepyflea', 'email' => 'sleepyflea@us2uml.org', 'password' => bcrypt('xGj#6L0N4'), 'username' => 'sleepyflea'],
            ['id' => '8', 'role_id' => '3', 'name' => 'chuckle', 'email' => 'chuckle@us2uml.org', 'password' => bcrypt('9rL8na78&'), 'username' => 'chuckle'],
            ['id' => '9', 'role_id' => '3', 'name' => 'mondayblues', 'email' => 'mondayblues@us2uml.org', 'password' => bcrypt('wSP170qN21@J'), 'username' => 'mondayblues'],
            ['id' => '10', 'role_id' => '3', 'name' => 'alphalab', 'email' => 'alphalab@us2uml.org', 'password' => bcrypt('4m9vX@05#2^l'), 'username' => 'alphalab'],
            ['id' => '11', 'role_id' => '3', 'name' => 'starguardian', 'email' => 'starguardian@us2uml.org', 'password' => bcrypt('Vsc273zd&8Q^'), 'username' => 'starguardian'],
            ['id' => '12', 'role_id' => '3', 'name' => 'castor', 'email' => 'castor@us2uml.org', 'password' => bcrypt('AgF9h4I+e!S6'), 'username' => 'castor'],
            ['id' => '13', 'role_id' => '3', 'name' => 'clownfiesta', 'email' => 'clownfiesta@us2uml.org', 'password' => bcrypt('@ULbGgDzuDQs'), 'username' => 'clownfiesta'],
            ['id' => '14', 'role_id' => '3', 'name' => 'apvision', 'email' => 'apvision@us2uml.org', 'password' => bcrypt('QPQQmbRy8&km'), 'username' => 'apvision'],
            ['id' => '15', 'role_id' => '3', 'name' => 'kamyonrider', 'email' => 'kamyonrider@us2uml.org', 'password' => bcrypt('Ubxb$(N*e3Gn'), 'username' => 'kamyonrider'],
            ['id' => '16', 'role_id' => '3', 'name' => 'error404', 'email' => 'error404@us2uml.org', 'password' => bcrypt(')M$xJy#@)^Eg'), 'username' => 'error404'],
            ['id' => '17', 'role_id' => '3', 'name' => 'yilongma', 'email' => 'yilongma@us2uml.org', 'password' => bcrypt('M)XQ5nUh!uwK'), 'username' => 'yilongma'],
            ['id' => '18', 'role_id' => '3', 'name' => 'heuristix', 'email' => 'heuristix@us2uml.org', 'password' => bcrypt('@qBTbBD9U&r)'), 'username' => 'heuristix'],
            ['id' => '19', 'role_id' => '3', 'name' => 'delights', 'email' => 'delights@us2uml.org', 'password' => bcrypt('x%L)cf5+IxJF'), 'username' => 'delights'],
            ['id' => '20', 'role_id' => '3', 'name' => 'heptagram', 'email' => 'heptagram@us2uml.org', 'password' => bcrypt('q*mqKk(w+v%P'), 'username' => 'heptagram'],
            ['id' => '21', 'role_id' => '3', 'name' => 'enamorang', 'email' => 'enamorang@us2uml.org', 'password' => bcrypt('Lp%xde2@mCzw'), 'username' => 'enamorang'],
            ['id' => '22', 'role_id' => '3', 'name' => 'dwarfspace', 'email' => 'dwarfspace@us2uml.org', 'password' => bcrypt('ZKEqK$&rqk5h'), 'username' => 'dwarfspace'],
            ['id' => '23', 'role_id' => '3', 'name' => 'membuayawu', 'email' => 'membuayawu@us2uml.org', 'password' => bcrypt('cs(DI#5NNN^H'), 'username' => 'membuayawu'],
            ['id' => '24', 'role_id' => '3', 'name' => 'gammarad', 'email' => 'gammarad@us2uml.org', 'password' => bcrypt('3b+uBjq)d2CQ'), 'username' => 'gammarad'],
            ['id' => '25', 'role_id' => '3', 'name' => 'cheers', 'email' => 'cheers@us2uml.org', 'password' => bcrypt('59EIGQ&2gwhc'), 'username' => 'cheers'],
            ['id' => '26', 'role_id' => '3', 'name' => 'dusted', 'email' => 'dusted@us2uml.org', 'password' => bcrypt('PpGkWjx)kRWu'), 'username' => 'dusted'],
            ['id' => '27', 'role_id' => '3', 'name' => 'abcde', 'email' => 'abcde@us2uml.org', 'password' => bcrypt('UtRTjUx*Z2xM'), 'username' => 'abcde'],
            // ['id' => '1', 'role_id' => '1', 'name' => 'admin', 'email' => 'admin@us2uml.org', 'password' => bcrypt('Fcsit-unimas23'), 'username' => 'adminus2uml'],
        ];

        foreach ($student_group as $key){
            $user = User::find($key['id']);
            if ($user){
                $user->update($key);
            }else{
                User::create($key);
            }
        }
    }
}
