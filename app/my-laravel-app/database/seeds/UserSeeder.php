<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //一般ユーザー（ログイン用)
      factory(App\User::class)
      ->create([
          'name' => 'tani',
          'email' => 'tani@example.com',
          'password' => bcrypt('tanikuni')
          /*20201014
          なぜusersテーブルにきちんと入ったのか疑問。
          name = usersテーブルのカラムだから？
          次の講義を照らし合わせればわかるかも
          */
      ]);
      // 一般ユーザー
      factory(App\User::class, 50)->create();
    }
}
