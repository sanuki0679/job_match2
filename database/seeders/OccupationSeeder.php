<?php

namespace Database\Seeders;

use App\Models\Occupation;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!DB::table('occupations')->first()) {
            Occupation::create(['name' => 'フロントエンドエンジニア']);
            Occupation::create(['name' => 'サーバーサイドエンジニア']);
            Occupation::create(['name' => 'デザイナー']);
            Occupation::create(['name' => 'プロジェクトリーダー']);
            Occupation::create(['name' => 'プロダクトマネージャー']);
        }
    }
}
