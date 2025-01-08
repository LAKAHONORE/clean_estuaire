<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Blanchisserie;
use App\Models\Pressing;
use App\Models\Repassage;
use App\Models\CollecteLivraison;
use App\Models\Config;// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/


        Blanchisserie::create([
            "text"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis culpa illo provident repellat, nulla tempore voluptatibus quia voluptas incidunt esse delectus soluta architecto, dolor rem expedita exercitationem, consectetur debitis libero?",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem illum at corrupti odit nostrum ducimus, itaque minus eveniet voluptatum exercitationem rerum natus. Soluta possimus quod reiciendis cumque enim provident ad. Commodi non qui laudantium amet delectus, est eveniet, quia ipsam praesentium sint, facere fugiat explicabo! Numquam cumque est sapiente suscipit unde facilis perspiciatis officia possimus quae quam odit, nisi ea? Esse inventore optio dolore culpa nobis quo, maiores sapiente! Nulla nobis dignissimos, maxime a debitis dicta doloribus sunt perferendis voluptates iure, commodi quibusdam quam quod ad magnam sed temporibus delectus. Culpa, assumenda quae porro numquam non rem, hic odit, quo modi itaque libero dignissimos veniam saepe omnis officia obcaecati. Laborum iste recusandae cumque fuga, officiis molestias error repellendus aspernatur eos? Nam, cum modi tempora hic provident aliquam magni! Veritatis ab perspiciatis aliquam obcaecati cupiditate atque, totam sapiente deserunt nostrum maiores pariatur tempore rem. Fugit tempore, voluptates aliquid eius laudantium odit. Qui voluptatum, ea assumenda laboriosam quisquam optio tenetur veniam doloribus, quis, quaerat a fuga tempore eum rem unde. Amet sequi veritatis dolore aliquam fugit maiores eum possimus distinctio voluptate aperiam. A, non autem asperiores, hic placeat, unde facere sit eveniet debitis totam nesciunt quos doloribus maiores! Quia ex nihil dolorum quaerat aspernatur! Fugit deleniti saepe, veritatis accusantium non sint debitis? Pariatur, cum earum possimus iste aliquid architecto, beatae odio vel soluta molestias neque vero deleniti recusandae aut. Laborum vel aliquam voluptates, numquam obcaecati quibusdam accusamus fuga sunt libero eos necessitatibus!"
        ]);


        Pressing::create([
            "text"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis culpa illo provident repellat, nulla tempore voluptatibus quia voluptas incidunt esse delectus soluta architecto, dolor rem expedita exercitationem, consectetur debitis libero?",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem illum at corrupti odit nostrum ducimus, itaque minus eveniet voluptatum exercitationem rerum natus. Soluta possimus quod reiciendis cumque enim provident ad. Commodi non qui laudantium amet delectus, est eveniet, quia ipsam praesentium sint, facere fugiat explicabo! Numquam cumque est sapiente suscipit unde facilis perspiciatis officia possimus quae quam odit, nisi ea? Esse inventore optio dolore culpa nobis quo, maiores sapiente! Nulla nobis dignissimos, maxime a debitis dicta doloribus sunt perferendis voluptates iure, commodi quibusdam quam quod ad magnam sed temporibus delectus. Culpa, assumenda quae porro numquam non rem, hic odit, quo modi itaque libero dignissimos veniam saepe omnis officia obcaecati. Laborum iste recusandae cumque fuga, officiis molestias error repellendus aspernatur eos? Nam, cum modi tempora hic provident aliquam magni! Veritatis ab perspiciatis aliquam obcaecati cupiditate atque, totam sapiente deserunt nostrum maiores pariatur tempore rem. Fugit tempore, voluptates aliquid eius laudantium odit. Qui voluptatum, ea assumenda laboriosam quisquam optio tenetur veniam doloribus, quis, quaerat a fuga tempore eum rem unde. Amet sequi veritatis dolore aliquam fugit maiores eum possimus distinctio voluptate aperiam. A, non autem asperiores, hic placeat, unde facere sit eveniet debitis totam nesciunt quos doloribus maiores! Quia ex nihil dolorum quaerat aspernatur! Fugit deleniti saepe, veritatis accusantium non sint debitis? Pariatur, cum earum possimus iste aliquid architecto, beatae odio vel soluta molestias neque vero deleniti recusandae aut. Laborum vel aliquam voluptates, numquam obcaecati quibusdam accusamus fuga sunt libero eos necessitatibus!"
        ]);


        Repassage::create([
            "text"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis culpa illo provident repellat, nulla tempore voluptatibus quia voluptas incidunt esse delectus soluta architecto, dolor rem expedita exercitationem, consectetur debitis libero?",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem illum at corrupti odit nostrum ducimus, itaque minus eveniet voluptatum exercitationem rerum natus. Soluta possimus quod reiciendis cumque enim provident ad. Commodi non qui laudantium amet delectus, est eveniet, quia ipsam praesentium sint, facere fugiat explicabo! Numquam cumque est sapiente suscipit unde facilis perspiciatis officia possimus quae quam odit, nisi ea? Esse inventore optio dolore culpa nobis quo, maiores sapiente! Nulla nobis dignissimos, maxime a debitis dicta doloribus sunt perferendis voluptates iure, commodi quibusdam quam quod ad magnam sed temporibus delectus. Culpa, assumenda quae porro numquam non rem, hic odit, quo modi itaque libero dignissimos veniam saepe omnis officia obcaecati. Laborum iste recusandae cumque fuga, officiis molestias error repellendus aspernatur eos? Nam, cum modi tempora hic provident aliquam magni! Veritatis ab perspiciatis aliquam obcaecati cupiditate atque, totam sapiente deserunt nostrum maiores pariatur tempore rem. Fugit tempore, voluptates aliquid eius laudantium odit. Qui voluptatum, ea assumenda laboriosam quisquam optio tenetur veniam doloribus, quis, quaerat a fuga tempore eum rem unde. Amet sequi veritatis dolore aliquam fugit maiores eum possimus distinctio voluptate aperiam. A, non autem asperiores, hic placeat, unde facere sit eveniet debitis totam nesciunt quos doloribus maiores! Quia ex nihil dolorum quaerat aspernatur! Fugit deleniti saepe, veritatis accusantium non sint debitis? Pariatur, cum earum possimus iste aliquid architecto, beatae odio vel soluta molestias neque vero deleniti recusandae aut. Laborum vel aliquam voluptates, numquam obcaecati quibusdam accusamus fuga sunt libero eos necessitatibus!"
        ]);


        CollecteLivraison::create([
            "text"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis culpa illo provident repellat, nulla tempore voluptatibus quia voluptas incidunt esse delectus soluta architecto, dolor rem expedita exercitationem, consectetur debitis libero?",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem illum at corrupti odit nostrum ducimus, itaque minus eveniet voluptatum exercitationem rerum natus. Soluta possimus quod reiciendis cumque enim provident ad. Commodi non qui laudantium amet delectus, est eveniet, quia ipsam praesentium sint, facere fugiat explicabo! Numquam cumque est sapiente suscipit unde facilis perspiciatis officia possimus quae quam odit, nisi ea? Esse inventore optio dolore culpa nobis quo, maiores sapiente! Nulla nobis dignissimos, maxime a debitis dicta doloribus sunt perferendis voluptates iure, commodi quibusdam quam quod ad magnam sed temporibus delectus. Culpa, assumenda quae porro numquam non rem, hic odit, quo modi itaque libero dignissimos veniam saepe omnis officia obcaecati. Laborum iste recusandae cumque fuga, officiis molestias error repellendus aspernatur eos? Nam, cum modi tempora hic provident aliquam magni! Veritatis ab perspiciatis aliquam obcaecati cupiditate atque, totam sapiente deserunt nostrum maiores pariatur tempore rem. Fugit tempore, voluptates aliquid eius laudantium odit. Qui voluptatum, ea assumenda laboriosam quisquam optio tenetur veniam doloribus, quis, quaerat a fuga tempore eum rem unde. Amet sequi veritatis dolore aliquam fugit maiores eum possimus distinctio voluptate aperiam. A, non autem asperiores, hic placeat, unde facere sit eveniet debitis totam nesciunt quos doloribus maiores! Quia ex nihil dolorum quaerat aspernatur! Fugit deleniti saepe, veritatis accusantium non sint debitis? Pariatur, cum earum possimus iste aliquid architecto, beatae odio vel soluta molestias neque vero deleniti recusandae aut. Laborum vel aliquam voluptates, numquam obcaecati quibusdam accusamus fuga sunt libero eos necessitatibus!"
        ]);


        Config::create([
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem illum at corrupti odit nostrum ducimus, itaque minus eveniet voluptatum exercitationem rerum natus. Soluta possimus quod reiciendis cumque enim provident ad. Commodi non qui laudantium amet delectus, est eveniet, quia ipsam praesentium sint, facere fugiat explicabo! Numquam cumque est sapiente suscipit unde facilis perspiciatis officia possimus quae quam odit, nisi ea? Esse inventore optio dolore culpa nobis quo, maiores sapiente! Nulla nobis dignissimos, maxime a debitis dicta doloribus sunt perferendis voluptates iure, commodi quibusdam quam quod ad magnam sed temporibus delectus. Culpa, assumenda quae porro numquam non rem, hic odit, quo modi itaque libero dignissimos veniam saepe omnis officia obcaecati. Laborum iste recusandae cumque fuga, officiis molestias error repellendus aspernatur eos? Nam, cum modi tempora hic provident aliquam magni! Veritatis ab perspiciatis aliquam obcaecati cupiditate atque, totam sapiente deserunt nostrum maiores pariatur tempore rem. Fugit tempore, voluptates aliquid eius laudantium odit. Qui voluptatum, ea assumenda laboriosam quisquam optio tenetur veniam doloribus, quis, quaerat a fuga tempore eum rem unde. Amet sequi veritatis dolore aliquam fugit maiores eum possimus distinctio voluptate aperiam. A, non autem asperiores, hic placeat, unde facere sit eveniet debitis totam nesciunt quos doloribus maiores! Quia ex nihil dolorum quaerat aspernatur! Fugit deleniti saepe, veritatis accusantium non sint debitis? Pariatur, cum earum possimus iste aliquid architecto, beatae odio vel soluta molestias neque vero deleniti recusandae aut. Laborum vel aliquam voluptates, numquam obcaecati quibusdam accusamus fuga sunt libero eos necessitatibus!",
            "tel_1"=>"696898987",
            "tel_2"=>"696969696",
            "email"=>"test@gmail.com"
        ]);
    }
}
