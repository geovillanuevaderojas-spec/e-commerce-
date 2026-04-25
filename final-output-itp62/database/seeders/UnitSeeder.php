<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create([
            'name' => 'Downtown Oasis',
            'description' => 'A stylish escape in the heart of the city. Enjoy modern comfort, natural light, and stunning skyline views — your perfect retreat from the urban rush.',
            'mainpic' => 'images/amazing-bedroom-in-condo-apartment-condo-renovations-etobicoke-768x512.jpg',
            'video' => 'assets/video/1114.mp4',
            'details' => 'Entire Apartment',
            'location_image' => 'images/location-point-perfect-symbols-more-600nw-2249221541.jpg',
            'location_name' => 'Downtown, Metro City',
            'guests' => '2 guests',
            'beds' => '1 bed',
            'slug' => 'downtown-oasis',
            'image2' => 'images/Gemini_Generated_Image_wxdlr0wxdlr0wxdl.png',
            'image3' => 'images/Gemini_Generated_Image_zi0b7szi0b7szi0b.png',
        ]);

        Unit::create([
            'name' => 'Vista Lounge',
            'description' => 'Experience elevated living with breathtaking city views. This modern space blends elegance and comfort, creating the perfect balance between style and relaxation.',
            'mainpic' => 'images/Untitled design.jpg',
            'video' => 'assets/video/1114(2).mp4',
            'details' => 'Entire Apartment',
            'location_image' => 'images/location-point-perfect-symbols-more-600nw-2249221541.jpg',
            'location_name' => 'Upper East Side, Metro City',
            'guests' => '2 guests',
            'beds' => '1 bed',
            'slug' => 'vista-lounge',
            'image2' => 'images/vista-lounge-1.png',
            'image3' => 'images/vista-lounge-2.png',
        ]);

        Unit::create([
            'name' => 'Boho Nook',
            'description' => 'A cozy retreat filled with warm tones, natural textures, and effortless charm — where comfort meets bohemian style for the perfect laid-back escape.',
            'mainpic' => 'images/Untitled design unit.png',
            'video' => 'assets/video/1114(1).mp4',
            'details' => 'Entire Apartment',
            'location_image' => 'images/location-point-perfect-symbols-more-600nw-2249221541.jpg',
            'location_name' => 'Upper East Side, Metro City',
            'guests' => '2 guests',
            'beds' => '1 bed',
            'slug' => 'boho-nook',
            'image2' => 'images/Gemini_Generated_Image_q5ber0q5ber0q5be.png',
            'image3' => 'images/Gemini_Generated_Image_8yecix8yecix8yec.png',
        ]);
    }
}   
