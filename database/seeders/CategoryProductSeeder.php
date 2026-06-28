<?php

namespace Database\Seeders;

use App\Models\CategorySub;
use App\Models\CategoryProduct;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate existing data to prevent accumulation with foreign keys disabled
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        CategoryProduct::truncate();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        $subcategories = CategorySub::all();

        // Variations to create unique products
        $types = [
            'Premium', 'Classic', 'Luxury', 'Minimalist', 'Royal',
            'Modern', 'Rustic', 'Elegant', 'Exclusive', 'Vintage'
        ];

        $marbles = [
            'Carrara White', 'Nero Marquina', 'Calacatta Gold', 'Travertine Romano',
            'Arabescato', 'Emerald Onyx', 'Statutario', 'Crema Marfil',
            'Empirador Dark', 'Verde Alpi'
        ];

        // Curated Image Groups (all valid Unsplash IDs)
        $imagesBySub = [
            'Coffe Table' => [
                'https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1581428982868-e410dd047a90?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1595428774223-ef52624120d2?q=80&w=800&auto=format&fit=crop',
            ],
            'Side Table' => [
                'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1581428982868-e410dd047a90?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=800&auto=format&fit=crop',
            ],
            'Dining Table' => [
                'https://images.unsplash.com/photo-1577140917170-285929fb55b7?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1615066390971-03e4e1c36ddf?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=800&auto=format&fit=crop',
            ],
            'Garden Table' => [
                'https://images.unsplash.com/photo-1604014237800-1c9102c219da?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1615066390971-03e4e1c36ddf?q=80&w=800&auto=format&fit=crop',
            ],
            'Chairs' => [
                'https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1503602642458-232111445657?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1567016544815-4f7b15e6b1e3?q=80&w=800&auto=format&fit=crop',
            ],
            'Garden Chairs' => [
                'https://images.unsplash.com/photo-1591825729269-caeb344f6df2?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1567016544815-4f7b15e6b1e3?q=80&w=800&auto=format&fit=crop',
            ],
            'Mirrors' => [
                'https://images.unsplash.com/photo-1618220179428-22790b461013?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1612392549386-b6969764af6f?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1596182707168-54208fec1b3f?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1605665852523-fb68ef1779f4?q=80&w=800&auto=format&fit=crop',
            ],
            'Compact Vanity Unit' => [
                'https://images.unsplash.com/photo-1620626011761-996317b8d101?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1507652313519-d4e9174996dd?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1618219908412-a29a1bb7b86e?q=80&w=800&auto=format&fit=crop',
            ],
            'Bathtub' => [
                'https://images.unsplash.com/photo-1600566752355-35792bedcfea?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=800&auto=format&fit=crop',
            ],
            'Bathroom Decor' => [
                'https://images.unsplash.com/photo-1609766857041-ed402680b43c?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1595428774223-ef52624120d2?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1618219908412-a29a1bb7b86e?q=80&w=800&auto=format&fit=crop',
            ],
            'Living Decor' => [
                'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?q=80&w=800&auto=format&fit=crop',
            ],
            'Garden Decor' => [
                'https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1623358519330-00f61d89396b?q=80&w=800&auto=format&fit=crop',
            ],
            'Garden Lamp' => [
                'https://images.unsplash.com/photo-1698844263220-76fe1b7fc7de?q=80&w=800&auto=format&fit=crop',
            ],
            'Fountain' => [
                'https://images.unsplash.com/photo-1582191798855-30fcde9dbb0e?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1507089947368-19c1da9775ae?q=80&w=800&auto=format&fit=crop',
            ],
            'Garden Tile' => [
                'https://images.unsplash.com/photo-1590073844006-33379778ae09?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop',
            ],
            'Parquet' => [
                'https://images.unsplash.com/photo-1581858726788-75bc0f6a952d?q=80&w=800&auto=format&fit=crop',
            ],
            'Mosaics' => [
                'https://images.unsplash.com/photo-1523350165414-082d792c4bcc?q=80&w=800&auto=format&fit=crop',
            ],
            'Wall Clading' => [
                'https://images.unsplash.com/photo-1600585154526-990dced4db0d?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1504198453319-5ce911bafcde?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=800&auto=format&fit=crop',
            ],
            'Tiles' => [
                'https://images.unsplash.com/photo-1501183007986-d0d080b147f9?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1523350165414-082d792c4bcc?q=80&w=800&auto=format&fit=crop',
            ],
            'Accessories' => [
                'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1578500494198-246f612d3b3d?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1588854337236-6889d631faa8?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1639136384967-476d8030bb1c?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1590794056226-79ef3a8147e1?q=80&w=800&auto=format&fit=crop',
            ]
        ];

        // Generic fallback images if a subcategory name doesn't match keys exactly
        $genericImages = [
            'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1600573472591-ee6b68d14c68?q=80&w=800&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=800&auto=format&fit=crop',
        ];

        foreach ($subcategories as $sub) {
            $subName = $sub->name;
            $pool = $imagesBySub[$subName] ?? $genericImages;

            for ($i = 1; $i <= 10; $i++) {
                $type = $types[$i - 1];
                $marble = $marbles[($i + $sub->id) % count($marbles)];
                $name = "{$marble} {$subName} {$type}";

                // select up to 2 images from the pool
                $imgCount = count($pool);
                $selectedImages = [];
                if ($imgCount > 1) {
                    $idx1 = ($i - 1) % $imgCount;
                    $idx2 = ($i) % $imgCount;
                    $selectedImages = [$pool[$idx1], $pool[$idx2]];
                } else {
                    $selectedImages = [$pool[0] ?? $genericImages[0]];
                }

                $price = rand(15, 120) * 100000; // range 1.5jt to 12jt
                $discount = (rand(1, 10) > 7) ? rand(1, 4) * 5 : 0; // 30% chance of 5%, 10%, 15%, 20% discount

                $descPoints = [
                    "Bahan material {$marble} berkualitas tinggi",
                    "Desain {$type} yang sangat estetik",
                    "Dikerjakan oleh pengrajin profesional berpengalaman",
                    "Cocok untuk mempercantik area {$sub->category->name}"
                ];

                CategoryProduct::create([
                    'category_sub_id' => $sub->id,
                    'name' => $name,
                    'image' => $selectedImages,
                    'price' => $price,
                    'discount' => $discount,
                    'description' => "Nikmati keindahan abadi dan kemewahan sejati dengan {$name}. Dirancang khusus untuk memberikan nilai estetika tinggi dan ketahanan luar biasa pada ruangan Anda.",
                    'description_point' => $descPoints,
                    'width' => rand(30, 240),
                    'height' => rand(10, 150),
                    'depth' => rand(30, 100),
                ]);
            }
        }
    }
}
