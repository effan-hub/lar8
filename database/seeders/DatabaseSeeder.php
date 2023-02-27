<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
            'name' => 'Effan Najwaini',
            'username' => 'effan',
            'email' => 'effan@poliban.ac.id',
            'password' => bcrypt('rahasia')
        ]);

        // User::create([
        //     'name' => 'Farhana Afida',
        //     'email' => 'hana@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique maxime ducimus hic, alias corporis soluta? Saepe ad est harum provident, quas recusandae rem libero sunt quibusdam, eos, maxime aperiam numquam at officiis asperiores!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique maxime ducimus hic, alias corporis soluta? Saepe ad est harum provident, quas recusandae rem libero sunt quibusdam, eos, maxime aperiam numquam at officiis asperiores! Fugit molestias ipsa, a dolorem quod magni distinctio ratione perferendis possimus. Quaerat asperiores doloribus repellendus. </p> <p>At dignissimos, sunt architecto dolor vel corrupti magni ea sed, nostrum est quisquam recusandae. Veritatis repellendus debitis harum aliquid eius dolorum ipsum quos consectetur perspiciatis labore voluptatem cumque assumenda, atque numquam id dolore in voluptate fugiat illum. Eos harum expedita, eaque sequi iste molestias dolor fugiat quisquam quam illo numquam totam aliquam magnam? At quaerat voluptate odio eaque animi! Enim, placeat repellat recusandae maiores vero esse cumque odio, accusamus nobis laboriosam quos? Perferendis fugiat corporis nam rerum ad officia consectetur enim placeat, numquam odit? Obcaecati reprehenderit numquam doloremque voluptatibus laboriosam exercitationem, molestiae corrupti! Vel animi sequi voluptates! Sapiente dignissimos sunt officia facilis.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keuda',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique maxime ducimus hic, alias corporis soluta? Saepe ad est harum provident, quas recusandae rem libero sunt quibusdam, eos, maxime aperiam numquam at officiis asperiores!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique maxime ducimus hic, alias corporis soluta? Saepe ad est harum provident, quas recusandae rem libero sunt quibusdam, eos, maxime aperiam numquam at officiis asperiores! Fugit molestias ipsa, a dolorem quod magni distinctio ratione perferendis possimus. Quaerat asperiores doloribus repellendus. </p> <p>At dignissimos, sunt architecto dolor vel corrupti magni ea sed, nostrum est quisquam recusandae. Veritatis repellendus debitis harum aliquid eius dolorum ipsum quos consectetur perspiciatis labore voluptatem cumque assumenda, atque numquam id dolore in voluptate fugiat illum. Eos harum expedita, eaque sequi iste molestias dolor fugiat quisquam quam illo numquam totam aliquam magnam? At quaerat voluptate odio eaque animi! Enim, placeat repellat recusandae maiores vero esse cumque odio, accusamus nobis laboriosam quos? Perferendis fugiat corporis nam rerum ad officia consectetur enim placeat, numquam odit? Obcaecati reprehenderit numquam doloremque voluptatibus laboriosam exercitationem, molestiae corrupti! Vel animi sequi voluptates! Sapiente dignissimos sunt officia facilis.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique maxime ducimus hic, alias corporis soluta? Saepe ad est harum provident, quas recusandae rem libero sunt quibusdam, eos, maxime aperiam numquam at officiis asperiores!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique maxime ducimus hic, alias corporis soluta? Saepe ad est harum provident, quas recusandae rem libero sunt quibusdam, eos, maxime aperiam numquam at officiis asperiores! Fugit molestias ipsa, a dolorem quod magni distinctio ratione perferendis possimus. Quaerat asperiores doloribus repellendus. </p> <p>At dignissimos, sunt architecto dolor vel corrupti magni ea sed, nostrum est quisquam recusandae. Veritatis repellendus debitis harum aliquid eius dolorum ipsum quos consectetur perspiciatis labore voluptatem cumque assumenda, atque numquam id dolore in voluptate fugiat illum. Eos harum expedita, eaque sequi iste molestias dolor fugiat quisquam quam illo numquam totam aliquam magnam? At quaerat voluptate odio eaque animi! Enim, placeat repellat recusandae maiores vero esse cumque odio, accusamus nobis laboriosam quos? Perferendis fugiat corporis nam rerum ad officia consectetur enim placeat, numquam odit? Obcaecati reprehenderit numquam doloremque voluptatibus laboriosam exercitationem, molestiae corrupti! Vel animi sequi voluptates! Sapiente dignissimos sunt officia facilis.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique maxime ducimus hic, alias corporis soluta? Saepe ad est harum provident, quas recusandae rem libero sunt quibusdam, eos, maxime aperiam numquam at officiis asperiores!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique maxime ducimus hic, alias corporis soluta? Saepe ad est harum provident, quas recusandae rem libero sunt quibusdam, eos, maxime aperiam numquam at officiis asperiores! Fugit molestias ipsa, a dolorem quod magni distinctio ratione perferendis possimus. Quaerat asperiores doloribus repellendus. </p> <p>At dignissimos, sunt architecto dolor vel corrupti magni ea sed, nostrum est quisquam recusandae. Veritatis repellendus debitis harum aliquid eius dolorum ipsum quos consectetur perspiciatis labore voluptatem cumque assumenda, atque numquam id dolore in voluptate fugiat illum. Eos harum expedita, eaque sequi iste molestias dolor fugiat quisquam quam illo numquam totam aliquam magnam? At quaerat voluptate odio eaque animi! Enim, placeat repellat recusandae maiores vero esse cumque odio, accusamus nobis laboriosam quos? Perferendis fugiat corporis nam rerum ad officia consectetur enim placeat, numquam odit? Obcaecati reprehenderit numquam doloremque voluptatibus laboriosam exercitationem, molestiae corrupti! Vel animi sequi voluptates! Sapiente dignissimos sunt officia facilis.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
