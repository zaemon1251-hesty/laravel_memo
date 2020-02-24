<?php

use Illuminate\Database\Seeder;
use App\Memo;

class MemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memo')->delete();//最初に全件削除

        Memo::create([
            'title'=>'12/13 laravel講習会', 'content'=>'データの読み取りと追加を行いました。'
        ]);

        Memo::create([
            'title'=>'12/6 laravel講習会', 'content'=>'ビューの設定を行いました。'
        ]);

    }
}
