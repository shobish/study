<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\CartProduct;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedCategories();
        $this->seedProducts();
        $this->seedusers();
        $this->seedcart();
        $this->seedcart_products();

       
    }

    private function seedCategories(){
        $categories = [
            [
                'id' => 1,
                'parent_id' => null,
                'name' => 'Electronics',
                'description' => null,
            ],

            [
                'id' => 2,
                'parent_id' => 1,
                'name' => 'Audio',
                'description' => null,
            ],
            [
                'id' => 3,
                'parent_id' => 1,
                'name' => 'Gaming',
                'description' => null,
            ],
            [
                'id' => 4,
                'parent_id' => 2,
                'name' => 'Headphones',
                'description' => null,
            ],

            [
                'id' => 5,
                'parent_id' => null,
                'name' => 'Fasion',
                'description' => null,
            ],

            [
                'id' => 6,
                'parent_id' => 4,
                'name' => 'Men\'s',
                'description' => null,
            ],
            [
                'id' => 7,
                'parent_id' => 4,
                'name' => 'Women\'s',
                'description' => null,
            ],

        ];
        Category::insert($categories);
    }
    private function seedProducts()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'samsung',
                'description' => null,
                'category_id' => 1,
                'price' => 1200,
            ],
            [
                'id' => 2,
                'name' => 'Earpodes',
                'description' => null,
                'category_id' => 2,
                'price' => 12200,
            ],
            [
                'id' => 3,
                'name' => 'pant',
                'description' => null,
                'category_id' => 6,
                'price' => 2200,
            ],
            [
                'id' => 4,
                'name' => 'churidar',
                'description' => null,
                'category_id' => 7,
                'price' => 200,
            ],
            [
                'id' => 5,
                'name' => 'apple',
                'description' => null,
                'category_id' => 1,
                'price' => 22200,
            ],
            [
                'id' => 6,
                'name' => 'watch',
                'description' => null,
                'category_id' => 1,
                'price' => 2200,
            ],
            [
                'id' => 7,
                'name' => 'playstation',
                'description' => null,
                'category_id' => 3,
                'price' => 200,
            ],
            [
                'id' => 8,
                'name' => 't-shirt',
                'description' => null,
                'category_id' => 6,
                'price' => 2500,
            ],
            [
                'id' => 9,
                'name' => 'bluetooth Headset',
                'description' => null,
                'category_id' => 2,
                'price' => 25800,
            ],
            [
                'id' => 10,
                'name' => 'shirt',
                'description' => null,
                'category_id' => 6,
                'price' => 25400,
            ],

        ];
        Product::insert($products);
    }
    private function seedusers()   {
        $user = [
            [
                'name' => 'admi',
                'email' => 'admin@123',
                'password' => '$2y$12$II2/VELMIyA.3R1UBUqK0ed0G6j9mvW9u5eHBZIK08VK5lOAraMYK',
                
            ],
         

        ];
        User::insert($user);
    }
    private function seedcart()
    {
        $cart = [
            [
                'id' => 1,
                'user_id' => 1,
                

            ],
            [
                'id' => 2,
                'user_id' => 2,
               
            ],


        ];
        Cart::insert($cart);
    }
    private function seedcart_products()
    {
        $cart_products = [
            [
                'id' => 1,
                'cart_id' => 1,
                'product_id' => 1,
                'qty' => 1,

            ],
            [
                'id' => 2,
                'cart_id' => 1,
                'product_id' => 2,
                'qty' => 1,

            ],


        ];
        CartProduct::insert($cart_products);
    }
}
