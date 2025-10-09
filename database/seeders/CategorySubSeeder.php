<?php

namespace Database\Seeders;

use App\Models\CategorySub;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataSubMenu = [
            // Living Room
            [
                'name' => 'Coffe Table',
                'image' => 'https://plus.unsplash.com/premium_photo-1722843459670-cc2560c22b36?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGNvZmZlJTIwdGFibGV8ZW58MHwxfDB8fHww',
                'category_id' => 1,
            ],
            [
                'name' => 'Chairs',
                'image' => 'https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?q=80&w=765&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 1,
            ],
            [
                'name' => 'Chairs',
                'image' => 'https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?q=80&w=765&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 1,
            ],
            [
                'name' => 'Living Decor',
                'image' => 'https://plus.unsplash.com/premium_photo-1676321688617-f8309eabc322?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 1,
            ],
            [
                'name' => 'Side Table',
                'image' => 'https://images.unsplash.com/photo-1522527829109-5605383a51dc?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 1,
            ],
            [
                'name' => 'Mirrors',
                'image' => 'https://images.unsplash.com/photo-1612392549386-b6969764af6f?q=80&w=728&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 1,
            ],
            [
                'name' => 'Accessories',
                'image' => 'https://images.unsplash.com/photo-1599108859613-88a1fff8e2e4?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 1,
            ],

            // DIning Room & Kitchen
            [
                'name' => 'Dining Table',
                'image' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 2,
            ],
            [
                'name' => 'Chairs',
                'image' => 'https://images.unsplash.com/photo-1567016544815-4f7b15e6b1e3?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 2,
            ],
            [
                'name' => 'Accessories',
                'image' => 'https://images.unsplash.com/photo-1639136384967-476d8030bb1c?q=80&w=688&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 2,
            ],
            [
                'name' => 'Mirrors',
                'image' => 'https://images.unsplash.com/photo-1605665852523-fb68ef1779f4?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 2,
            ],

            // Bathroom
            [
                'name' => 'Compact Vanity Unit',
                'image' => 'https://images.unsplash.com/photo-1596182707168-54208fec1b3f?q=80&w=712&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 3,
            ],
            [
                'name' => 'Bathtub',
                'image' => 'https://images.unsplash.com/photo-1610178169668-530baa052915?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 3,
            ],
            [
                'name' => 'Bathroom Decor',
                'image' => 'https://images.unsplash.com/photo-1650894622076-e09ab837c502?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8QmF0aHJvb20lMjBEZWNvcnxlbnwwfDF8MHx8fDA%3D',
                'category_id' => 3,
            ],
            [
                'name' => 'Mirrors',
                'image' => 'https://plus.unsplash.com/premium_photo-1676823552684-d66c241f06f1?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8QmF0aHJvb20lMjBNaXJyb3JzfGVufDB8MXwwfHx8MA%3D%3D',
                'category_id' => 3,
            ],

            // Garden
            [
                'name' => 'Garden Table',
                'image' => 'https://images.unsplash.com/photo-1748192489934-eff2ac55e956?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 4,
            ],
            [
                'name' => 'Garden Chairs',
                'image' => 'https://plus.unsplash.com/premium_photo-1675744019445-d50281f652d8?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 4,
            ],
            [
                'name' => 'Garden Decor',
                'image' => 'https://images.unsplash.com/photo-1692627806647-2ca49614fa44?q=80&w=688&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 4,
            ],
            [
                'name' => 'Garden Lamp',
                'image' => 'https://images.unsplash.com/photo-1698844263220-76fe1b7fc7de?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGdhcmRlbiUyMGxhbXB8ZW58MHwxfDB8fHww',
                'category_id' => 4,
            ],
            [
                'name' => 'Fountain',
                'image' => 'https://images.unsplash.com/photo-1582191798855-30fcde9dbb0e?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 4,
            ],
            [
                'name' => 'Garden Tile',
                'image' => 'https://plus.unsplash.com/premium_photo-1667223580243-0822a6a4c139?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8R2FyZGVuJTIwVGlsZXxlbnwwfDF8MHx8fDA%3D',
                'category_id' => 4,
            ],

            // Wall & Tiles
            [
                'name' => 'Parquet',
                'image' => 'https://images.unsplash.com/photo-1581858726788-75bc0f6a952d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8UGFycXVldHxlbnwwfDF8MHx8fDA%3D',
                'category_id' => 5,
            ],
            [
                'name' => 'Mosaics',
                'image' => 'https://plus.unsplash.com/premium_photo-1699533134685-a4e9a968d508?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 5,
            ],
            [
                'name' => 'Wall Clading',
                'image' => 'https://plus.unsplash.com/premium_photo-1672275246615-c269a69ea64a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8V2FsbCUyMENsYWRkaW5nfGVufDB8MXwwfHx8MA%3D%3D',
                'category_id' => 5,
            ],
            [
                'name' => 'Tiles',
                'image' => 'https://images.unsplash.com/photo-1523350165414-082d792c4bcc?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category_id' => 5,
            ],
        ];

        foreach ($dataSubMenu as $data) {
            CategorySub::create($data);
        }
    }
}
