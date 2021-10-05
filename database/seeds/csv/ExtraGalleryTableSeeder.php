<?php
namespace Bpocallaghan\Titan\Seeds;
use Bpocallaghan\Titan\Models\ArticleCategory;
use Illuminate\Database\Seeder;
use Bpocallaghan\Titan\Models\Article;

class ExtraGalleryTableSeeder extends Seeder
{
    public function run(Faker\Generator $faker)
    {
        Article::truncate();
        ArticleCategory::truncate();

    }
}