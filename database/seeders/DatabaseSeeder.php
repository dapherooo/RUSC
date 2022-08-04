<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::create([
             'name' => 'DAP',
             'username' => 'dap88',
             'email' => 'dap88@gmail.com',
             'password' => bcrypt('12345')
         ]);
        
        User::factory(3)->create();

        Category::create([
            'nama' => 'Bicycle',
            'slug' => 'Bicycle',
        ]);

        Category::create([
            'nama' => 'Volley-ball',
            'slug' => 'Volley-ball',
        ]);

        Category::create([
            'nama' => 'Futsal',
            'slug' => 'Futsal',
        ]);

        Category::create([
            'nama' => 'Swimming',
            'slug' => 'Swimming',
        ]);

        Category::create([
            'nama' => 'Badminton',
            'slug' => 'Badminton',
        ]);

        Category::create([
            'nama' => 'BasketBall',
            'slug' => 'Basketball',
        ]);

        Post::factory(30)->create();


        // Post::create([
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'title' => 'judul 1',
        //     'excerpt' => 'Lorem 1',
        //     'slug' => 'judul-1',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, et minima delectus voluptate necessitatibus quaerat in earum sapiente natus odit facere quas quod sed rem iusto ipsam. Quam mollitia suscipit, obcaecati corporis doloremque molestiae sint magnam soluta quaerat cum at animi ex vitae aliquid enim earum blanditiis saepe rerum nemo eveniet alias. Eum molestias</p><p>expedita possimus laudantium eligendi, optio minus labore velit doloremque quam? Molestiae neque tempora ea corporis aut delectus numquam eos voluptatibus natus maiores, fugiat minus sapiente provident odio cum repellat exercitationem sed praesentium at nemo? Voluptatem consequuntur, id debitis soluta asperiores neque reiciendis fuga placeat mollitia illo fugiat, aut obcaecati</p> <p>sapiente nisi eveniet deserunt! Non maiores sequi nam consequuntur reiciendis, quasi eveniet perspiciatis et alias id, esse facere blanditiis voluptatem maxime hic, numquam cumque quas mollitia doloribus laudantium amet. Amet voluptates ad magnam est in, quo cum consequuntur doloribus delectus, nobis impedit dolorem praesentium voluptate enim corrupti atque. Laboriosam iste a minus. Autem fuga iusto suscipit odio ea repellat expedita quam voluptatum illo quisquam voluptas molestias sunt voluptate maxime et minima ipsum, quis neque exercitationem dolorum totam cupiditate a soluta? Aliquid vero ea animi asperiores autem exercitationem, architecto obcaecati iusto odio aperiam velit, maiores alias</p><p>quod quam? Nobis dicta a sit expedita ex doloremque tempore, modi quo velit cum reiciendis aliquid ad unde animi ipsam necessitatibus natus nostrum cumque, similique dolorum, blanditiis nam veritatis? Optio alias delectus veniam unde dicta minus modi obcaecati? Hic, perspiciatis inventore quia sunt aliquid libero aliquam fugiat delectus consectetur nesciunt molestiae ipsa necessitatibus dolor rem error iste, natus ab. Expedita porro voluptatibus voluptas odit, sunt, quis doloremque, sed dignissimos deserunt alias rem error magni tempora facere ipsum. Soluta vel ipsam consectetur facere vero ratione eveniet natus? Quam, earum unde cupiditate eum quae quas recusandae autem deserunt ad laboriosam qui possimus sit iusto.</p>'
        // ]);


    }
}
