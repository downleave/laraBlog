<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->delete();

	    for ($i=0; $i < 10; $i++) {
	        \App\Article::create([
	            'title'   => '标题啦啦啦：'.$i,
	            'body'    => '内容啦啦啦：'.$i,
	            'user_id' => 1,
	        ]);
	    }
    }
}
