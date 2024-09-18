<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $tag1 = \App\Models\Tag::create([
            'name' => 'TAG 1',
        ]);
        $tag2 = \App\Models\Tag::create([
            'name' => 'TAG 2',
        ]);
        $tag3 = \App\Models\Tag::create([
            'name' => 'TAG 3',
        ]);
        $tag4 = \App\Models\Tag::create([
            'name' => 'TAG 4',
        ]);

        $admin1 = \App\Models\User::create([
            'name' => 'admin',
            'password' => 'admin',
        ]);

        $admin1k1 = \App\Models\Knowledge::create([
            'title' => 'title1',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-02',
            'creator' => $admin1->name,
        ]);
        $admin1k2 = \App\Models\Knowledge::create([
            'title' => 'title2',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-02',
            'creator' => $admin1->name,
        ]);
        $admin1k3 = \App\Models\Knowledge::create([
            'title' => 'title3',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-03',
            'creator' => $admin1->name,
        ]);
        $admin1k4 = \App\Models\Knowledge::create([
            'title' => 'title4',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-03',
            'creator' => $admin1->name,
        ]);
        $admin1k5 = \App\Models\Knowledge::create([
            'title' => 'title4',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-04',
            'creator' => $admin1->name,
        ]);

        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin1k1->id,
            'name' => $tag1->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin1k2->id,
            'name' => $tag2->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin1k3->id,
            'name' => $tag3->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin1k4->id,
            'name' => $tag4->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin1k5->id,
            'name' => $tag1->name,
        ]);        

        \App\Models\Image::create([
            'knowledge_id' => $admin1k1->id,
            'name' => 'images/1.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin1k2->id,
            'name' => 'images/2.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin1k3->id,
            'name' => 'images/3.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin1k4->id,
            'name' => 'images/4.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin1k5->id,
            'name' => 'images/5.jpg',
        ]);


        $admin2 = \App\Models\User::create([
            'name' => 'ntw_001',
            'password' => 'ntw_001_pwd',
        ]);

        $admin2k1 = \App\Models\Knowledge::create([
            'title' => 'title1',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-02',
            'creator' => $admin2->name,
        ]);
        $admin2k2 = \App\Models\Knowledge::create([
            'title' => 'title2',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-02',
            'creator' => $admin2->name,
        ]);
        $admin2k3 = \App\Models\Knowledge::create([
            'title' => 'title3',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-03',
            'creator' => $admin2->name,
        ]);
        $admin2k4 = \App\Models\Knowledge::create([
            'title' => 'title4',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-03',
            'creator' => $admin2->name,
        ]);
        $admin2k5 = \App\Models\Knowledge::create([
            'title' => 'title4',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-04',
            'creator' => $admin2->name,
        ]);

        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin2k1->id,
            'name' => $tag1->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin2k2->id,
            'name' => $tag2->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin2k3->id,
            'name' => $tag3->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin2k4->id,
            'name' => $tag4->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin2k5->id,
            'name' => $tag1->name,
        ]);        

        \App\Models\Image::create([
            'knowledge_id' => $admin2k1->id,
            'name' => 'images/1.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin2k2->id,
            'name' => 'images/2.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin2k3->id,
            'name' => 'images/3.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin2k4->id,
            'name' => 'images/4.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin2k5->id,
            'name' => 'images/5.jpg',
        ]);

        $admin3 = \App\Models\User::create([
            'name' => 'ntw_002',
            'password' => 'ntw_002_pwd',
        ]);
        $admin3k1 = \App\Models\Knowledge::create([
            'title' => 'title1',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-02',
            'creator' => $admin3->name,
        ]);
        $admin3k2 = \App\Models\Knowledge::create([
            'title' => 'title2',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-02',
            'creator' => $admin3->name,
        ]);
        $admin3k3 = \App\Models\Knowledge::create([
            'title' => 'title3',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-03',
            'creator' => $admin3->name,
        ]);
        $admin3k4 = \App\Models\Knowledge::create([
            'title' => 'title4',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-03',
            'creator' => $admin3->name,
        ]);
        $admin3k5 = \App\Models\Knowledge::create([
            'title' => 'title4',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-04',
            'creator' => $admin3->name,
        ]);

        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin3k1->id,
            'name' => $tag1->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin3k2->id,
            'name' => $tag2->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin3k3->id,
            'name' => $tag3->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin3k4->id,
            'name' => $tag4->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin3k5->id,
            'name' => $tag1->name,
        ]);        

        \App\Models\Image::create([
            'knowledge_id' => $admin3k1->id,
            'name' => 'images/1.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin3k2->id,
            'name' => 'images/2.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin3k3->id,
            'name' => 'images/3.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin3k4->id,
            'name' => 'images/4.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin3k5->id,
            'name' => 'images/5.jpg',
        ]);

        $admin4 = \App\Models\User::create([
            'name' => 'ntw_003',
            'password' => 'ntw_003_pwd',
        ]);

        $admin4k1 = \App\Models\Knowledge::create([
            'title' => 'title1',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-02',
            'creator' => $admin4->name,
        ]);
        $admin4k2 = \App\Models\Knowledge::create([
            'title' => 'title2',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-02',
            'creator' => $admin4->name,
        ]);
        $admin4k3 = \App\Models\Knowledge::create([
            'title' => 'title3',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-03',
            'creator' => $admin4->name,
        ]);
        $admin4k4 = \App\Models\Knowledge::create([
            'title' => 'title4',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-03',
            'creator' => $admin4->name,
        ]);
        $admin4k5 = \App\Models\Knowledge::create([
            'title' => 'title4',
            'excerpt' => 'asdf',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, atque?',
            'date' => '2024-09-04',
            'creator' => $admin4->name,
        ]);

        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin4k1->id,
            'name' => $tag1->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin4k2->id,
            'name' => $tag2->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin4k3->id,
            'name' => $tag3->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin4k4->id,
            'name' => $tag4->name,
        ]);
        \App\Models\TagKnowledge::create([
            'knowledge_id' => $admin4k5->id,
            'name' => $tag1->name,
        ]);        

        \App\Models\Image::create([
            'knowledge_id' => $admin4k1->id,
            'name' => 'images/1.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin4k2->id,
            'name' => 'images/2.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin4k3->id,
            'name' => 'images/3.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin4k4->id,
            'name' => 'images/4.jpg',
        ]);
        \App\Models\Image::create([
            'knowledge_id' => $admin4k5->id,
            'name' => 'images/5.jpg',
        ]);

    }
}
