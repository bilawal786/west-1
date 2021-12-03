<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Admin',
            'lname' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => '0',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg'
        ]);

        \App\Content::create([
            'logo' => 'front/images/logo.png',
            'sitename' => 'West Indes Care 1',
            'phone' => '1.800.321.9876',
            'email' => 'info@westindescare1.com',
            'address' => '70 Greenview Ave. Temple Hills MD 20748, USA',
            'facebook' => 'www.facebook.com',
            'instagram' => 'www.instagram.com',
            'time' => 'Mon to Friday',
            'footer_text' => 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'footer_logo' => 'front/images/logo-footer.png',

            'simage1' => 'front/images/slide-1.jpg',
            'simage2' => 'front/images/slide-2.jpg',
            'simage3' => 'front/images/slide-3.jpg',

            'stext1' => 'Serenity is inside you',
            'stext2' => 'Inspiration for joyful living',
            'stext3' => 'Flexibility is a second power',

            'video' => 'oX6I6vs1EFs',

            'about' => 'Nous vous aidons à développer pour vous-même un style de vie sain, des habitudes diététiques et un régime alimentaire qui vont de pair avec ces besoins.
                        Nous vous aidons à développer pour vous-même un style de vie sain, des habitudes diététiques et un régime alimentaire qui vont de pair avec ces besoins.',
            'aboutimage' => 'front/images/home_01/1.jpg',
        ]);
    }
}