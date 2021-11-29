<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Book;
use App\Models\Detail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Buat Seeder table kategori
        Category::create([
            'category' => 'Fiction'
        ]);

        Category::create([
            'category' => 'Science'
        ]);

        Category::create([
            'category' => 'Computer'
        ]);

        Category::create([
            'category' => 'Education'
        ]);

        // Buat Seeder table Books
        Book::create([
            'category_id' => '1',
            'title' => 'The Planets of Rongkosuu'
        ]);
        Book::create([
            'category_id' => '2',
            'title' => 'Rongkosuu, Misteri sains yang tak terpecahkan'
        ]);
        Book::create([
            'category_id' => '1',
            'title' => 'Rufi si manusia bebal'
        ]);
        Book::create([
            'category_id' => '3',
            'title' => 'Teka-teki C++'
        ]);
        Book::create([
            'category_id' => '2',
            'title' => 'How STUPIDITY Conquer Rufi?'
        ]);
        Book::create([
            'category_id' => '3',
            'title' => 'Tutorial be a Indian Programmer'
        ]);
        Book::create([
            'category_id' => '1',
            'title' => 'The God and 12 Kinds'
        ]);
        Book::create([
            'category_id' => '2',
            'title' => 'Misteri Leonardo da Vinci'
        ]);
        Book::create([
            'category_id' => '1',
            'title' => 'Fruit Basket'
        ]);
        Book::create([
            'category_id' => '1',
            'title' => 'Eros art Online'
        ]);
        Book::create([
            'category_id' => '1',
            'title' => 'Kisah para nabi-nabi'
        ]);
        Book::create([
            'category_id' => '2',
            'title' => 'Isaac Newton, sang jenius'
        ]);
        Book::create([
            'category_id' => '1',
            'title' => '89 Years'
        ]);
        Book::create([
            'category_id' => '1',
            'title' => 'Ruler of God'
        ]);
        Book::create([
            'category_id' => '1',
            'title' => 'DICE'
        ]);

        // Buat seeder untuk table Details
        Detail::create([
            'book_id' => '1',
            'author' => 'Yuki Tresnomukabeh',
            'publisher' => 'Walalangi N Partners',
            'year' => '2019',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ratione ex excepturi repudiandae neque laudantium repellendus quisquam quod quis dolores ea quos quia a, natus saepe? Esse, quos maxime! Ex, harum! Doloribus rerum aliquid quam ipsa vel cupiditate quisquam similique hic quaerat sunt quas explicabo maiores, quia in doloremque, nostrum, provident atque ad error. Saepe sed modi veniam nostrum doloremque voluptate. Dolore ratione pariatur possimus voluptatem libero repudiandae maxime officia facere reprehenderit'
        ]);

        Detail::create([
            'book_id' => '2',
            'author' => 'Salsabila Chargogo Rongkosuu',
            'publisher' => 'Tapos Company',
            'year' => '2020',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ratione ex excepturi repudiandae neque laudantium repellendus quisquam quod quis dolores ea quos quia a, natus saepe? Esse, quos maxime! Ex, harum! Doloribus rerum aliquid quam ipsa vel cupiditate quisquam similique hic quaerat sunt quas explicabo maiores, quia in doloremque, nostrum, provident atque ad error. Saepe sed modi veniam nostrum doloremque voluptate. Dolore ratione pariatur possimus voluptatem libero repudiandae maxime officia facere reprehenderit reiciendis doloribus harum autem, repellat, delectus soluta aliquam quam aspernatur fuga ipsam tempora deleniti? Nisi tempore quis voluptas, beatae deserunt vero dicta commodi totam eos accusantium. Ducimus, in?'
        ]);
        Detail::create([
            'book_id' => '3',
            'author' => 'Andaini Iskandar',
            'publisher' => 'Kartox',
            'year' => '2009',
            'description' => 'suscipit nam eligendi saepe corrupti nisi! Sapiente architecto et veritatis odit similique rerum est nemo. Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde. Ad quam natus velit explicabo corporis impedit unde, itaque earum sunt animi eligendi quas quisquam dolores quaerat, esse aspernatur! Aperiam neque inventore ullam expedita facere architecto natus impedit velit.'
        ]);
        Detail::create([
            'book_id' => '4',
            'author' => 'Syon Al-bukhori',
            'publisher' => 'Medan Sejahtera',
            'year' => '2016',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis dolor voluptatum quidem officiis adipisci minima. Nostrum magni, quibusdam itaque cumque, incidunt eligendi modi, aspernatur recusandae optio cupiditate consequatur eaque illum! Neque repudiandae obcaecati nobis expedita eius, vel praesentium? Ea omnis, deleniti nihil minima quidem, nostrum nisi nobis quisquam excepturi necessitatibus optio laudantium velit eaque dolores illum eos fugiat facilis? Nesciunt cupiditate voluptatibus debitis ad deleniti doloribus, dolor unde architecto suscipit nam eligendi saepe corrupti nisi! Sapiente architecto et veritatis odit similique rerum est nemo. Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde. Ad quam natus velit explicabo corporis impedit unde, itaque earum sunt animi eligendi quas quisquam dolores quaerat, esse aspernatur! Aperiam neque inventore ullam expedita facere architecto natus impedit velit.'
        ]);
        Detail::create([
            'book_id' => '5',
            'author' => 'Niko Vegeta',
            'publisher' => 'Bekasi Pride',
            'year' => '2011',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ratione ex excepturi repudiandae neque laudantium repellendus quisquam quod quis dolores ea quos quia a, natus saepe? Esse, quos maxime! Ex, harum! Doloribus rerum aliquid quam ipsa vel cupiditate quisquam similique hic quaerat sunt quas explicabo maiores, quia in doloremque, nostrum, provident atque ad error. Saepe sed modi veniam nostrum doloremque voluptate. Dolore ratione pariatur possimus voluptatem libero repudiandae maxime officia facere reprehenderit reiciendis doloribus harum autem, repellat, delectus soluta aliquam quam aspernatur fuga ipsam tempora deleniti? Nisi tempore quis voluptas, beatae deserunt vero dicta commodi totam eos accusantium. Ducimus, in?'
        ]);
        Detail::create([
            'book_id' => '6',
            'author' => 'Rapep Pratama',
            'publisher' => 'Ribang Gale',
            'year' => '2021',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis dolor voluptatum quidem officiis adipisci minima. Nostrum magni, quibusdam itaque cumque, incidunt eligendi modi, aspernatur recusandae optio cupiditate consequatur eaque illum! Neque repudiandae obcaecati nobis expedita eius, vel praesentium? Ea omnis, deleniti nihil minima quidem, nostrum nisi nobis quisquam excepturi necessitatibus optio laudantium velit eaque dolores illum eos fugiat facilis? Nesciunt cupiditate voluptatibus debitis ad deleniti doloribus, dolor unde architecto suscipit nam eligendi saepe corrupti nisi! Sapiente architecto et veritatis odit similique rerum est nemo. Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde.'
        ]);
        Detail::create([
            'book_id' => '7',
            'author' => 'Gur Guranto',
            'publisher' => 'Gatorox',
            'year' => '2013',
            'description' => 'Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde. Ad quam natus velit explicabo corporis impedit unde, itaque earum sunt animi eligendi quas quisquam dolores quaerat, esse aspernatur! Aperiam neque inventore ullam expedita facere architecto natus impedit velit.'
        ]);
        Detail::create([
            'book_id' => '8',
            'author' => 'Herman Papilo',
            'publisher' => 'Gramadia',
            'year' => '2012',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ipsam sapiente quaerat vitae autem eligendi magnam libero? Maxime a doloribus obcaecati, magnam totam ea quibusdam sequi! Tempore eveniet velit, facilis doloremque voluptatum at eius autem nobis cumque blanditiis accusantium tenetur soluta dolores perferendis doloribus consectetur quia molestiae voluptates, corporis sapiente incidunt. Quasi reprehenderit corrupti, veritatis, veniam fugiat atque, tenetur quam eius illo dolore quibusdam optio sint consequuntur voluptatum! Voluptate quas facere soluta odio ab itaque iure est fugit exercitationem delectus quibusdam, ipsa dolores optio, reprehenderit fuga pariatur quos! Perferendis illo officia laudantium nihil nostrum neque ipsa porro magnam sapiente blanditiis.'
        ]);
        Detail::create([
            'book_id' => '9',
            'author' => 'Karina Veronica',
            'publisher' => 'Lexi Media',
            'year' => '2018',
            'description' => 'Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde. Ad quam natus velit explicabo corporis impedit unde, itaque earum sunt animi eligendi quas quisquam dolores quaerat, esse aspernatur! Aperiam neque inventore ullam expedita facere architecto natus impedit velit.'
        ]);
        Detail::create([
            'book_id' => '10',
            'author' => 'Ratna Puspitaningtyas',
            'publisher' => 'Depok Pride',
            'year' => '2008',
            'description' => 'Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde. Ad quam natus velit explicabo corporis impedit unde, itaque earum sunt animi eligendi quas quisquam dolores quaerat, esse aspernatur! Aperiam neque inventore ullam expedita facere architecto natus impedit velit.'
        ]);
        Detail::create([
            'book_id' => '11',
            'author' => 'Cokay Pardaidai',
            'publisher' => 'Emeli',
            'year' => '2018',
            'description' => 'Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde. Ad quam natus velit explicabo corporis impedit unde, itaque earum sunt animi eligendi quas quisquam dolores quaerat, esse aspernatur! Aperiam neque inventore ullam expedita facere architecto natus impedit velit.'
        ]);
        Detail::create([
            'book_id' => '12',
            'author' => 'Azelole',
            'publisher' => 'Cawa Media',
            'year' => '2017',
            'description' => 'Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde. Ad quam natus velit explicabo corporis impedit unde, itaque earum sunt animi eligendi quas quisquam dolores quaerat, esse aspernatur! Aperiam neque inventore ullam expedita facere architecto natus impedit velit.'
        ]);
        Detail::create([
            'book_id' => '13',
            'author' => 'Odik Hansup',
            'publisher' => 'Cawa Media',
            'year' => '2010',
            'description' => 'Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde. Ad quam natus velit explicabo corporis impedit unde, itaque earum sunt animi eligendi quas quisquam dolores quaerat, esse aspernatur! Aperiam neque inventore ullam expedita facere architecto natus impedit velit.'
        ]);
        Detail::create([
            'book_id' => '14',
            'author' => 'Farhan Alexander',
            'publisher' => 'Depok Pride',
            'year' => '2020',
            'description' => 'Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde. Ad quam natus velit explicabo corporis impedit unde, itaque earum sunt animi eligendi quas quisquam dolores quaerat, esse aspernatur! Aperiam neque inventore ullam expedita facere architecto natus impedit velit.'
        ]);
        Detail::create([
            'book_id' => '15',
            'author' => 'Kyon',
            'publisher' => 'Jyuushi',
            'year' => '2016',
            'description' => 'Nemo sed quaerat unde eligendi odit culpa nostrum labore voluptate aperiam laudantium, in id dolorum assumenda odio possimus perferendis eius beatae delectus non quibusdam numquam magnam ducimus hic ad. Praesentium, iste soluta? Iure perferendis aut voluptatibus earum maiores deserunt perspiciatis voluptates exercitationem! Magni, incidunt veritatis excepturi blanditiis, autem nihil dolore tempore ratione numquam deserunt nesciunt officiis harum. Recusandae obcaecati ullam asperiores at, est deserunt esse doloremque nemo? Tempore alias, dolorem harum nihil rerum, ratione, sapiente at possimus deleniti sed architecto doloremque laborum. Hic error perferendis nam unde. Ad quam natus velit explicabo corporis impedit unde, itaque earum sunt animi eligendi quas quisquam dolores quaerat, esse aspernatur! Aperiam neque inventore ullam expedita facere architecto natus impedit velit.'
        ]);
    }
}
