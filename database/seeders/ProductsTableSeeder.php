<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //women
            Product::create([
                'name' => 'Phase Eight Tameka Broderie Anglaise Top, White',
                'slug' => 'phase-eight-tameka-broderie-anglaise-top-white',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);
              Product::create([
                'name' => 'Ro&Zo Polka Dot Top, White/Black',
                'slug' => 'ro-zo-polka-dot-top-white-black',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);

               Product::create([
                'name' => 'Reiss Emily Wool Blend Blazer, Oatmeal',
                'slug' => 'reiss-emily-wool-blend-blazer-oatmeal',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);


               Product::create([
                'name' => 'hush Georgina Paisley Print Blouse, Pink/Orange',
                'slug' => 'hush-georgina-paisley-print-blouse-pink-orange',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);

               Product::create([
                'name' => 'Mint Velvet Single Breasted Blazer, Ivory',
                'slug' => 'mint-velvet-single-breasted-blaze',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);
               Product::create([
                'name' => 'White Stuff Alaia Cat Print Shirt, Ivory/Multi',
                'slug' => 'white-stuff-alaia-cat-print-shirt-ivory-multi',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);

               Product::create([
                'name' => 'Mango Oversized Denim Jacket, White',
                'slug' => 'mango-oversized-denim-jacket',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);

                Product::create([
                'name' => 'Somerset by Alice Temperley Wide Leg Cropped Denim Jeans, Mid Blue',
                'slug' => 'somerset-by-alice-temperley-wide-leg-cropped-denim-jeans-mid-blue',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);

                Product::create([
                'name' => 'Joules Ariella Tie Waist Midi Dress, Blue',
                'slug' => 'joules-ariella-tie-waist-midi-dress-blue',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);

               

               /* MEN*/

          Product::create([
                'name' => 'Tommy Hilfiger Slim Fit Polo Shirt, Glazed Green',
                'slug' => 'tommy-hilfiger-slim-fit-polo-shirt-glazed-green',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);
            Product::create([
                'name' => 'Barbour International Ariel Polarquilt Quilted Jacket, Black',
                'slug' => 'barbour-international-ariel-polarquilt-quilted-jacket-black',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);
            Product::create([
                'name' => 'Barbour Tartan Pique Polo Shirt, Slate Marl',
                'slug' => 'barbour-tartan-pique-polo-shirt-slate-marl',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);

              Product::create([
                'name' => 'John Lewis & Partners Supima Cotton Pique Polo Shirt, Sapphire',
                'slug' => 'john-lewis-partners-supima-cotton-pique-polo-shirt',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);

               Product::create([
                'name' => 'Barbour Lifestyle Sports Mixed Piqué Polo Top, Blue',
                'slug' => 'barbour-lifestyle-sports-mixed-pique-polo-top-blue',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);

                Product::create([
                'name' => 'Barbour Sports Short Sleeve Polo Shirt, Raspberry',
                'slug' => 'barbour-sports-short-sleeve-polo-shirt',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);

                Product::create([
                'name' => 'Barbour Lifestyle Styhead Stripe Polo Shirt, Navy',
                'slug' => 'barbour-lifestyle-styhead-stripe-polo-shirt-navy',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' =>rand(100,500),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                ]);


         //children

         //accesories
    }
}
