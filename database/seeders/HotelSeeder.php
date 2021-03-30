<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // lebanon
        $AlbergoHotel = Hotel::create([
            'name' => 'Albergo Hotel',
            'latitude' => "33.8880066",
            'longitude' => " 35.5103509",
            'details' => "Under 5 minutes’ walk from trendy Mono Street in Beirut’s Achrafieh district, Albergo Hotel provides rooms with handpicked furniture and hot tub baths. Its rooftop features a restaurant.
            Suites all have separate living areas with crystal chandeliers and oriental rugs. They have their own balconies and bathrooms with branded toiletries. Included is a satellite flat-screen TV and DVD player.
            Guests can enjoy views across the city to the Mediterranean. Professional massages are also available at Hotel Albergo.
            Offering inlaid wooden furniture and scenic city views, the rooftop restaurant provides a wide variety of à la carte meals.
            There is an on-site gift shop in the Albergo Hotel. Its staff can arrange reservations, as well as travel assistance and room service.
            Located 10 minutes’ drive from Rafic Hariri Airport, the Albergo offers free private parking.",
            'rate' => "5 stars",
            'price' => "$280 per night",
            'country_id' => 1,
        ]);
    }
}