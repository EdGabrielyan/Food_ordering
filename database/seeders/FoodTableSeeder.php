<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::insert([
                [
                    'name' => 'Cheeseburger',
                    'price' => 8.99,
                    'description' => 'A juicy beef patty with melted cheese, lettuce, tomato, and special sauce.',
                    'type' => 'Western',
                    'picture' => 'food_images/cheeseburger.jpg',
                ],
                [
                    'name' => 'Pepperoni Pizza',
                    'price' => 12.99,
                    'description' => 'Classic pizza topped with spicy pepperoni, mozzarella, and tomato sauce.',
                    'type' => 'Western',
                    'picture' => 'food_images/pepperoni_pizza.jpg',
                ],
                [
                    'name' => 'Grilled Steak',
                    'price' => 18.99,
                    'description' => 'Tender and juicy steak grilled to perfection with garlic butter.',
                    'type' => 'Western',
                    'picture' => 'food_images/grilled_steak.jpg',
                ],
                [
                    'name' => 'Caesar Salad',
                    'price' => 7.99,
                    'description' => 'Fresh romaine lettuce with Caesar dressing, parmesan cheese, and croutons.',
                    'type' => 'Western',
                    'picture' => 'food_images/caesar_salad.jpg',
                ],
                [
                    'name' => 'Spaghetti Bolognese',
                    'price' => 10.99,
                    'description' => 'Classic Italian pasta with rich meat sauce and parmesan cheese.',
                    'type' => 'Western',
                    'picture' => 'food_images/spaghetti_bolognese.jpg',
                ],
                [
                    'name' => 'Fish and Chips',
                    'price' => 11.99,
                    'description' => 'Crispy battered fish served with golden fries and tartar sauce.',
                    'type' => 'Western',
                    'picture' => 'food_images/fish_and_chips.jpg',
                ],
                [
                    'name' => 'BBQ Ribs',
                    'price' => 15.99,
                    'description' => 'Slow-cooked ribs glazed with smoky barbecue sauce.',
                    'type' => 'Western',
                    'picture' => 'food_images/bbq_ribs.jpg',
                ],
                [
                    'name' => 'Kung Pao Chicken',
                    'price' => 10.99,
                    'description' => 'Spicy stir-fried chicken with peanuts, vegetables, and chili peppers.',
                    'type' => 'Chinese',
                    'picture' => 'food_images/kung_pao_chicken.jpg',
                ],
                [
                    'name' => 'Sweet and Sour Pork',
                    'price' => 12.99,
                    'description' => 'Crispy pork pieces in a tangy sweet and sour sauce.',
                    'type' => 'Chinese',
                    'picture' => 'food_images/sweet_and_sour_pork.jpg',
                ],
                [
                    'name' => 'Peking Duck',
                    'price' => 22.99,
                    'description' => 'Roast duck served with thin pancakes, hoisin sauce, and scallions.',
                    'type' => 'Chinese',
                    'picture' => 'food_images/peking_duck.jpg',
                ],
                [
                    'name' => 'Dim Sum',
                    'price' => 8.99,
                    'description' => 'A variety of bite-sized dumplings, buns, and rolls served in bamboo steamers.',
                    'type' => 'Chinese',
                    'picture' => 'food_images/dim_sum.jpg',
                ],
                [
                    'name' => 'Mapo Tofu',
                    'price' => 9.99,
                    'description' => 'Silky tofu in a spicy, numbing Sichuan pepper sauce with ground pork.',
                    'type' => 'Chinese',
                    'picture' => 'food_images/mapo_tofu.jpg',
                ],
                [
                    'name' => 'Chow Mein',
                    'price' => 11.99,
                    'description' => 'Stir-fried noodles with vegetables, chicken, and soy sauce.',
                    'type' => 'Chinese',
                    'picture' => 'food_images/chow_mein.jpg',
                ],
                [
                    'name' => 'Spring Rolls',
                    'price' => 6.99,
                    'description' => 'Crispy golden-brown rolls filled with vegetables and meat.',
                    'type' => 'Chinese',
                    'picture' => 'food_images/spring_rolls.jpg',
                ],
                [
                    'name' => 'Sushi',
                    'price' => 15.99,
                    'description' => 'Fresh vinegared rice topped with raw fish, seafood, and vegetables.',
                    'type' => 'Japanese',
                    'picture' => 'food_images/sushi.jpg',
                ],
                [
                    'name' => 'Ramen',
                    'price' => 12.99,
                    'description' => 'Delicious Japanese noodle soup with rich broth and toppings.',
                    'type' => 'Japanese',
                    'picture' => 'food_images/ramen.jpg',
                ],
                [
                    'name' => 'Tempura',
                    'price' => 10.99,
                    'description' => 'Lightly battered and deep-fried seafood and vegetables.',
                    'type' => 'Japanese',
                    'picture' => 'food_images/tempura.png',
                ],
                [
                    'name' => 'Takoyaki',
                    'price' => 8.99,
                    'description' => 'Savory octopus-filled balls topped with sauce and bonito flakes.',
                    'type' => 'Japanese',
                    'picture' => 'food_images/takoyaki.jpg',
                ],
                [
                    'name' => 'Teriyaki Chicken',
                    'price' => 14.99,
                    'description' => 'Grilled chicken glazed with sweet and savory teriyaki sauce.',
                    'type' => 'Japanese',
                    'picture' => 'food_images/teriyaki.jpg',
                ],
                [
                    'name' => 'Khorovats',
                    'price' => 12.99,
                    'description' => 'Armenian-style barbecue made with grilled marinated pork, beef, or lamb.',
                    'type' => 'Armenian',
                    'picture' => 'food_images/khorovats.jpg',
                ],
                [
                    'name' => 'Tolma',
                    'price' => 10.99,
                    'description' => 'Grape leaves stuffed with a mixture of minced meat, rice, and herbs.',
                    'type' => 'Armenian',
                    'picture' => 'food_images/tolma.jpg',
                ],
                [
                    'name' => 'Harissa',
                    'price' => 9.99,
                    'description' => 'A thick porridge made of wheat and slow-cooked chicken or lamb.',
                    'type' => 'Armenian',
                    'picture' => 'food_images/harissa.jpg',
                ],
                [
                    'name' => 'Ghapama',
                    'price' => 11.99,
                    'description' => 'Baked pumpkin stuffed with rice, dried fruits, and nuts.',
                    'type' => 'Armenian',
                    'picture' => 'food_images/ghapama.jpg',
                ],
            ]
        );
    }
}
