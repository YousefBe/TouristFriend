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
            'longtiude' => " 35.5103509",
            'details' => "Under 5 minutes’ walk from trendy Mono Street in Beirut’s Achrafieh district, Albergo Hotel provides rooms with handpicked furniture and hot tub baths. Its rooftop features a restaurant.
            Suites all have separate living areas with crystal chandeliers and oriental rugs. They have their own balconies and bathrooms with branded toiletries. Included is a satellite flat-screen TV and DVD player.
            Guests can enjoy views across the city to the Mediterranean. Professional massages are also available at Hotel Albergo.
            Offering inlaid wooden furniture and scenic city views, the rooftop restaurant provides a wide variety of à la carte meals.
            There is an on-site gift shop in the Albergo Hotel. Its staff can arrange reservations, as well as travel assistance and room service.
            Located 10 minutes’ drive from Rafic Hariri Airport, the Albergo offers free private parking.",
            'rate' => "5 stars",
            'price' => "starts with 280 USD per night",
            'country_id' => 1,
        ]);
        $AlbergoHotel->images()->createMany([
            ['file_name' => "Albergo Hotel.jpg"],
            ['file_name' => "Albergo Hotel2.jpg"],
            ['file_name' => "Albergo Hotel3.jpg"],
            ['file_name' => "Albergo Hotel4.jpg"],
            ['file_name' => "Albergo Hotel5.jpg"],
            ['file_name' => "Albergo Hotel6.jpg"],
            ['file_name' => "Albergo Hotel7.jpg"],
            ['file_name' => "Albergo Hotel8.jpg"],
        ]);

        $InterContinentalPhoeniciaBeirut = Hotel::create([
            'name' => 'InterContinental Phoenicia Beirut',
            'latitude' => "33.9006104",
            'longtiude' => "35.4950886",
            'details' => "Overlooking the Beirut Marina and the Mediterranean Sea, the InterContinental Phoenicia features indoor and outdoor pools, a full-service spa and a gym. The seafront Corniche promenade is just steps away.
            All rooms are decorated with earthy hues and Phoenician art on the walls. They also feature custom-made curtains and recessed lighting. Each room has free high-speed internet, laptop-sized safe, a mini-bar and satellite LCD TV.
            The InterContinental Phoenicia Beirut offers an outdoor swimming pool surrounded with loungers. For complete relaxation, guests can treat themselves to a spa treatment or use the sauna, hot tub or solarium.
            The hotel’s all-day restaurant serves delectable dishes inspired by the Lebanese kitchen, as well as international classics. The bar has a wide range of drinks and cocktails on offer.
            Rafic Hariri International Airport is 9 km from Hotel Phoenicia. Trendy Monot Street is just a 10-minute drive away.",
            'rate' => "5 stars",
            'price' => "starts with 361 USD per night",
            'country_id' => 1,
        ]);
        $InterContinentalPhoeniciaBeirut->images()->createMany([
            ['file_name' => "InterContinental Phoenicia Beirut.jpg"],
            ['file_name' => "InterContinental Phoenicia Beirut2.jpg"],
            ['file_name' => "InterContinental Phoenicia Beirut3.jpg"],
            ['file_name' => "InterContinental Phoenicia Beirut4.jpg"],
            ['file_name' => "InterContinental Phoenicia Beirut5.jpg"],
            ['file_name' => "InterContinental Phoenicia Beirut6.jpg"],
            ['file_name' => "InterContinental Phoenicia Beirut7.jpg"],
        ]);

        $KempinskiSummerlandHotel = Hotel::create([
            'name' => 'Kempinski Summerland Hotel & Resort',
            'latitude' => "33.8668192",
            'longtiude' => "35.4826616",
            'details' => ":Located in Beirut, the 5 star Kempinski Summerland Hotel & Resort offers a labyrinth of pools, including the legendary Summerland 'Cascade Waterfall' and an indoor pool. The resort features free WiFi throughout the property.
            All 153 rooms at the Kempinski Summerland are air conditioned and equipped with a flat-screen TV with satellite channels. Some rooms have a seating area for your convenience. Certain rooms include views of the sea or pool. Every room is fitted with a private bathroom. For your comfort, you can relax at the European Luxury Resense Spa, a renaissance of the classical European spa, a fusion of modern and traditional design, art, music, therapies, and bathing.",
            'rate' => "5 stars",
            'price' => "starts with 417 USD per night",
            'country_id' => 1,
        ]);
        $KempinskiSummerlandHotel->images()->createMany([
            ['file_name' => "Kempinski Summerland Hotel.jpg"],
            ['file_name' => "Kempinski Summerland Hotel2.jpg"],
            ['file_name' => "Kempinski Summerland Hotel3.jpg"],
            ['file_name' => "Kempinski Summerland Hotel4.jpg"],
            ['file_name' => "Kempinski Summerland Hotel5.jpg"],
            ['file_name' => "Kempinski Summerland Hotel6.jpg"],
            ['file_name' => "Kempinski Summerland Hotel7.jpg"],
            ['file_name' => "Kempinski Summerland Hotel9.jpg"],
            ['file_name' => "Kempinski Summerland Hotel10.jpg"],
            ['file_name' => "Kempinski Summerland Hotel11.jpg"],
            ['file_name' => "Kempinski Summerland Hotel12.jpg"],
        ]);

        $LeGray = Hotel::create([
            'name' => 'Le Gray',
            'latitude' => "33.8973453",
            'longtiude' => "35.5071728",
            'details' => "nestled in the heart of downtown Beirut. Perfectly located for both business and leisure, the hotel offers the ultimate in hospitality for every guest, with state of the art facilities, meeting rooms and suites. One of Beirut’s most iconic luxury hotels, Le Gray, Beirut is a Campbell Gray Hotel and member of The Leading Hotels of the World.
            Guests are greeted daily with fresh flowers and fruits, as well as breath-taking views of beautiful Beirut from the hotel fifth floor terraces. Facilities include 103 rooms and suites designed with relaxation and comfort in mind. Blending inspiring interior design with sophistication, the hotel boasts an outdoor heated rooftop infinity pool, a plethora of restaurants and bars including an opulent cigar lounge, a large atrium with a spiral staircase, and a rooftop terrace and bar offering 360 views of the city.",
            'rate' => "5 stars",
            'price' => "starts with 469 USD per night",
            'country_id' => 1,
        ]);
        $LeGray->images()->createMany([
            ['file_name' => "Le Gray.jpg"],
            ['file_name' => "Le Gray2.jpg"],
            ['file_name' => "Le Gray3.jpg"],
            ['file_name' => "Le Gray4.jpg"],
            ['file_name' => "Le Gray5.jpg"],
            ['file_name' => "Le Gray6.jpg"],
            ['file_name' => "Le Gray7.jpg"],
            ['file_name' => "Le Gray8.jpg"],
            ['file_name' => "Le Gray9.jpg"],
            ['file_name' => "Le Gray10.jpg"],
            ['file_name' => "Le Gray11.jpg"],
            ['file_name' => "Le Gray12.jpg"],
            ['file_name' => "Le Gray13.jpg"],
            ['file_name' => "Le Gray14.jpg"],
        ]);
        $TheSmallville = Hotel::create([
            'name' => 'The Smallville Hotel',
            'latitude' => "33.8773273",
            'longtiude' => "35.5169408",
            'details' => "The Smallville Hotel is a contempory luxurious 5-star hotel strategically located in the midst of Beirut's eclectic residential neighbourhood of Badaro. This hotel is situated within close proximity to the National Museum and the Mim museum. Other local attractions also within a walking distance are The Hippodrome and the Horsh Beirut.",
            'rate' => "5 stars",
            'price' => "starts with 266 USD per night",
            'country_id' => 1,
        ]);
        $TheSmallville->images()->createMany([
            ['file_name' => "The Smallville Hotel.jpg"],
            ['file_name' => "The Smallville Hotel2.jpg"],
            ['file_name' => "The Smallville Hotel3.jpg"],
            ['file_name' => "The Smallville Hotel4.jpg"],
            ['file_name' => "The Smallville Hotel5.jpg"],
            ['file_name' => "The Smallville Hotel6.jpg"],
            ['file_name' => "The Smallville Hotel7.jpg"],
        ]);
        // eof lebanon
        // italy
        $AtlanteStarHotel  = Hotel::create([
            'name' => 'Atlante Star Hotel ',
            'latitude' => "41.9048608",
            'longtiude' => "12.4619217",
            'details' => "One of the highlights of the luxurious Atlante Star Hotel has to be its rooftop restaurant where you can enjoy spectacular panoramic views of St. Peter’s Basilica while you dine or enjoy an evening aperitif. Free WiFi is available.
            This elegant hotel is set in the heart of Rome’s historic centre, just a 5-minute walk from the Vatican where you can visit the magnificent museums including the Sistine Chapel.",
            'rate' => "4 stars",
            'price' => " starts with 68 euro per night",
            'country_id' => 2,
        ]);
        $AtlanteStarHotel->images()->createMany([
            ['file_name' => "Atlante Star Hotel1.jpg"],
            ['file_name' => "Atlante Star Hotel2.jpg"],
            ['file_name' => "Atlante Star Hotel3.jpg"],
            ['file_name' => "Atlante Star Hotel4.jpg"],
            ['file_name' => "Atlante Star Hotel5.jpg"],
            ['file_name' => "Atlante Star Hotel6.jpg"],
            ['file_name' => "Atlante Star Hotel7.jpg"],
        ]);
        $BauerPalazzo  = Hotel::create([
            'name' => 'Bauer Palazzo',
            'latitude' => " 45.4329234",
            'longtiude' => "12.3357607",
            'details' => "Just a 2 minutes' walk from Venice's St. Mark’s Square, Bauer Hotel offers spacious, elegant rooms with a satellite flat-screen TV. It features a gourmet restaurant and a terrace overlooking the Grand Canal.
            Air-conditioned rooms at the Bauer include a minibar and a classic Venetian-style décor. Some have a balcony and city or canal views.",
            'rate' => "5 stars",
            'price' => "starts with 200 euro per night",
            'country_id' => 2,
        ]);
        $BauerPalazzo->images()->createMany([
            ['file_name' => "Bauer Palazzo1.jpg"],
            ['file_name' => "Bauer Palazzo2.jpg"],
            ['file_name' => "Bauer Palazzo3.jpg"],
            ['file_name' => "Bauer Palazzo4.jpg"],
            ['file_name' => "Bauer Palazzo5.jpg"],
            ['file_name' => "Bauer Palazzo6.jpg"],
        ]);
        $HotelCroceDiMalta  = Hotel::create([
            'name' => 'Hotel Croce Di Malta',
            'latitude' => "43.7735114",
            'longtiude' => "11.2483021",
            'details' => "Just around the corner from Santa Maria Novella Church and the train station, Florence's Hotel Croce di Malta is a former convent featuring a lovely inner garden with swimming pool. The rooftop terrace offers spectacular views over the city’s beautiful domes and bell towers.
            The rooms offer air conditioning, free Wi-Fi, and a satellite flat-screen TV. Some rooms have 2 private bathrooms or offer views of the garden. The floors are carpeted or in terracotta tiles.",
            'rate' => "4 stars",
            'price' => "starts with 119 euro per night",
            'country_id' => 2,
        ]);
        $HotelCroceDiMalta->images()->createMany([
            ['file_name' => "Croce Di Malta1.jpg"],
            ['file_name' => "Croce Di Malta2.jpg"],
            ['file_name' => "Croce Di Malta3.jpg"],
            ['file_name' => "Croce Di Malta4.jpg"],
            ['file_name' => "Croce Di Malta5.jpg"],
        ]);
        $HiltonMolinoStuckyVenice   = Hotel::create([
            'name' => 'Hilton Molino Stucky Venice ',
            'latitude' => "45.4282112121582",
            'longtiude' => "12.3203134536743 ",
            'details' => "Set on the peaceful banks of Giudecca Island, the Hilton Molino Stucky is a former flour mill refurbished to become a unique hotel. This Venetian masterpiece features a rooftop swimming pool and a large spa.
            With contemporary décor and elegant furnishings, the air-conditioned rooms and suites include a flat-screen TV, a marble bathroom, and a coffee maker. Some have views of the town and the canal.",
            'rate' => "5 stars",
            'price' => "starts with 130 euro per night",
            'country_id' => 2,
        ]);
        $HiltonMolinoStuckyVenice->images()->createMany([
            ['file_name' => "Hilton Molino Stucky.jpg"],
            ['file_name' => "Hilton Molino Stucky2.jpg"],
            ['file_name' => "Hilton Molino Stucky3.jpg"],
            ['file_name' => "Hilton Molino Stucky4.jpg"],
            ['file_name' => "Hilton Molino Stucky5.jpg"],
            ['file_name' => "Hilton Molino Stucky6.jpg"],
        ]);
        $HotelGiolliNazionale   = Hotel::create([
            'name' => 'Hotel Giolli Nazionale',
            'latitude' => "41.8992805480957",
            'longtiude' => "12.4912528991699",
            'details' => "Hotel Giolli offers large rooms with Wi-Fi access, friendly service, and a 24-hour front desk. It is located on Via Nazionale, a short walk from Roma Termini Railway Station.",
            'rate' => " 4 stars",
            'price' => "starts with 81 euro per night",
            'country_id' => 2,
        ]);
        $HotelGiolliNazionale->images()->createMany([
            ['file_name' => "Hotel Giolli Nazionale1.jpg"],
            ['file_name' => "Hotel Giolli Nazionale2.jpg"],
            ['file_name' => "Hotel Giolli Nazionale3.jpg"],
            ['file_name' => "Hotel Giolli Nazionale4.jpg"],
            ['file_name' => "Hotel Giolli Nazionale5.jpg"],
        ]);
        // eof italy
        // USA
        $fourseasonshotelatlanta   = Hotel::create([
            'name' => 'four seasons hotel atlanta',
            'latitude' => "33.78718688321973",
            'longtiude' => "-84.3853231",
            'details' => "This swanky luxury hotel is a 10-minute walk from Piedmont Park, a 6-minute walk from the High Museum of Art and a mile from the Atlanta Botanical Garden.
            Posh rooms feature marble bathrooms with soaking tubs, plus cable TV, DVD players and Wi-Fi access.
            Upgraded rooms and suites add private terraces, separate living rooms, panoramic views and/or whirlpool tubs.
            There's an upscale restaurant and a chic lounge.
            Amenities include an indoor saltwater pool, and a gym with a sauna, as well as a spa, a 24-hour business center and 15,500 sq ft of meeting space,Free Wi-Fi,Parking ,Accessible,Indoor pool,     Air-conditioned, Laundry service",
            'rate' => " 4 stars",
            'price' => "starts with 501.69 USD per night",
            'country_id' => 3,
        ]);
        $fourseasonshotelatlanta->images()->createMany([
            ['file_name' => "four seasons hotel atlanta1.jpg"],
            ['file_name' => "four seasons hotel atlanta2.jpg"],
            ['file_name' => "four seasons hotel atlanta3.jpg"],
            ['file_name' => "four seasons hotel atlanta4.jpg"],
            ['file_name' => "four seasons hotel atlanta5.jpg"],
            ['file_name' => "four seasons hotel atlanta6.jpg"],
            ['file_name' => "four seasons hotel atlanta7.jpg"],
            ['file_name' => "four seasons hotel atlanta8.jpg"],
            ['file_name' => "four seasons hotel atlanta9.jpg"],
            ['file_name' => "four seasons hotel atlanta10.jpg"],
        ]);
        $GaylordOprylandResortConventionCenter = Hotel::create([
            'name' => 'Gaylord Opryland Resort & Convention Center',
            'latitude' => "36.21226320120085",
            'longtiude' => "-86.69423266931712",
            'details' => "Situated 9 miles from the Country Music Hall of Fame and Museum, this upscale resort with a sprawling atrium is a 10-minute walk from the Grand Ole Opry and 8 miles from Nashville International Airport.
            Traditional rooms offer Wi-Fi (fee) and flat-screen TVs, plus minifridges and coffeemakers.
            Suites add separate living rooms with pull-out sofas.
            Room service is available.
            Amenities include an exercise room, a spa, and 19 restaurants and bars, as well as an indoor pool, 2 outdoor pools, and 9 acres of indoor gardens (boat tours are available).
            There's also an 18-hole golf course and over 750,000 sq ft of event space, including 6 ballrooms.
            Paid Wi-Fi, Paid parking , Accessible, Indoor and outdoor pool ,Air-conditioned and a Business center",
            'rate' => " 4 stars",
            'price' => " starts with 276.82 USD per night",
            'country_id' => 3,
        ]);
        $GaylordOprylandResortConventionCenter->images()->createMany([
            ['file_name' => "Gaylord Opryland Resort.jpg"],
            ['file_name' => "Gaylord Opryland Resort2.jpg"],
            ['file_name' => "Gaylord Opryland Resort3.jpg"],
            ['file_name' => "Gaylord Opryland Resort4.jpg"],
            ['file_name' => "Gaylord Opryland Resort5.jpg"],
            ['file_name' => "Gaylord Opryland Resort6.jpg"],
            ['file_name' => "Gaylord Opryland Resort7.jpg"],
            ['file_name' => "Gaylord Opryland Resort8.jpg"],
            ['file_name' => "Gaylord Opryland Resort9.jpg"],
            ['file_name' => "Gaylord Opryland Resort10.jpg"],
        ]);
        $LotteNewYorkPalace = Hotel::create([
            'name' => 'Lotte New York Palace',
            'latitude' => "40.75811995216388",
            'longtiude' => "-73.97486699615735",
            'details' => "Occupying a landmark 19th-century mansion and a 55-story modern tower, this luxury hotel opposite St.
            Patrick's Cathedral is a 4-minute walk from the 51st Street subway station.
            The plush rooms provide free Wi-Fi and flat-screen TVs, along with luxe linens and designer toiletries.
            Suites add furnished terraces with sweeping Manhattan views, plus dining tables, minifridges and stocked cocktail bars.
            Room service is available.
            There's a French-influenced bakery and a wood-paneled bar, plus an upscale eatery and a cocktail lounge. 
            Other amenities include a spa and a fitness center with steam rooms.
            Advantages:- Free Wi-Fi, Parking, Accessible, Air-conditioned, Laundry service and Business center",
            'rate' => "4 stars",
            'price' => "starts with 762.36 USD per night",
            'country_id' => 3,
        ]);
        $LotteNewYorkPalace->images()->createMany([
            ['file_name' => "Lotte New York Palace.jpg"],
            ['file_name' => "Lotte New York Palace2.jpg"],
            ['file_name' => "Lotte New York Palace3.jpg"],
            ['file_name' => "Lotte New York Palace4.jpg"],
            ['file_name' => "Lotte New York Palace5.jpg"],
            ['file_name' => "Lotte New York Palace6.jpg"],
            ['file_name' => "Lotte New York Palace7.jpg"],
            ['file_name' => "Lotte New York Palace8.jpg"],
            ['file_name' => "Lotte New York Palace9.jpg"],
            ['file_name' => "Lotte New York Palace10.jpg"],
            ['file_name' => "Lotte New York Palace11.jpg"],
        ]);
        $moheganSunHotel = Hotel::create([
            'name' => 'mohegan sun hotel',
            'latitude' => "41.492239914051936",
            'longtiude' => "-72.09162766136782",
            'details' => "This vast 34-story casino, hotel and entertainment complex features Native American-style decor.
            The property is situated along the Thames River and is 4.4 miles from Norwich.
            The traditionally decorated rooms offer flat-screen TVs and Wi-Fi access.
            Suites include separate living rooms, and upgraded suites add butler service.
            In addition to 3 lively casinos, entertainment options include a 10,000-seat arena, an arcade for kids and several nightclubs.
            The complex also features a 55-ft indoor waterfall, 46 restaurants and bars, and indoor and outdoor pools, plus a solarium, a spa and shops.
            There's also an 18-hole golf course.
            Free Wi-Fi , Breakfast  ,Free parking , Accessible , Indoor pool and Air-conditioned",
            'rate' => "4 stars",
            'price' => "starts with 204.38 USD per night",
            'country_id' => 3,
        ]);
        $moheganSunHotel->images()->createMany([
            ['file_name' => "mohegan sun hotel1.jpg"],
            ['file_name' => "mohegan sun hotel2.jpg"],
            ['file_name' => "mohegan sun hotel3.jpg"],
            ['file_name' => "mohegan sun hotel4.jpg"],
            ['file_name' => "mohegan sun hotel5.jpg"],
            ['file_name' => "mohegan sun hotel6.jpg"],
            ['file_name' => "mohegan sun hotel7.jpg"],
            ['file_name' => "mohegan sun hotel8.jpg"],
            ['file_name' => "mohegan sun hotel9.jpg"],
            ['file_name' => "mohegan sun hotel10.jpg"],
            ['file_name' => "mohegan sun hotel11.jpg"],
            ['file_name' => "mohegan sun hotel12.jpg"],
        ]);
        $TheBreakersPalmBeach = Hotel::create([
            'name' => 'The Breakers Palm Beach',
            'latitude' => "26.715555751829438",
            'longtiude' => "-80.0335980619271",
            'details' => "This Italian Renaissance-style resort on a private beach is a 5-minute walk from the Flagler Museum, a 5-minute drive from West Palm Beach and within a mile of restaurants, shops and galleries.
            Classic, polished rooms feature free Wi-Fi, flat-screen TVs and DVD players; some have balconies.
            Suites add wet bars and pull-out sofas. Club-level rooms on the top 2 floors include access to a private lounge and terrace.
            Amenities include 2 golf courses (surcharge), 10 tennis courts, 4 pools, on-site shopping, a fitness center and a spa (surcharge).
            There are 9 restaurants and several lounges.
            Advantages: Free Wi-Fi , Breakfast  ,Free parking , Accessible , Indoor pool and Air-conditioned",
            'rate' => "4 stars",
            'price' => "starts with 456 USD per night",
            'country_id' => 3,
        ]);
        $TheBreakersPalmBeach->images()->createMany([
            ['file_name' => "The Breakers Palm Beach hotel1.jpg"],
            ['file_name' => "The Breakers Palm Beach hotel2.jpg"],
            ['file_name' => "The Breakers Palm Beach hotel3.jpg"],
            ['file_name' => "The Breakers Palm Beach hotel4.jpg"],
            ['file_name' => "The Breakers Palm Beach hotel5.jpg"],
            ['file_name' => "The Breakers Palm Beach hotel6.jpg"],
            ['file_name' => "The Breakers Palm Beach hotel7.jpg"],
            ['file_name' => "The Breakers Palm Beach hotel8.jpg"],
            ['file_name' => "The Breakers Palm Beach hotel9.jpg"],
            ['file_name' => "The Breakers Palm Beach hotel10.jpg"],
        ]);
        //eof USA
        // Morocco
        $iberostarClubPalmeraieMarrakech = Hotel::create([
            'name' => 'iberostar club palmeraie marrakech',
            'latitude' => "31.6639232635498",
            'longtiude' => "-7.89964580535889",
            'details' => "Palace and 16 km from Marrakesh Menara Airport.
            Relaxed rooms come with TVs, minibars and free Wi-Fi, plus balconies or terraces; some provide garden views.
            Family rooms add living rooms with sofas.
            Dining venues include an informal buffet restaurant, a seasonal Italian eatery and 3 bars.
            Parking and shuttles to the city center are also included.
            The hotel offers 2 outdoor pools (1 heated) and a kids' pool, along with a gym, a spa and 10 tennis courts.
            Advantages: Free Wi-Fi , Breakfast  ,Free parking , Accessible , Indoor pool and Air-conditioned",
            'rate' => "4 stars",
            'price' => "starts with 1380.06 MAD per night",
            'country_id' => 4,
        ]);
        $iberostarClubPalmeraieMarrakech->images()->createMany([
            ['file_name' => "Iberostar Club Palmeraie Marrakech1.jpg"],
            ['file_name' => "Iberostar Club Palmeraie Marrakech2.jpg"],
            ['file_name' => "Iberostar Club Palmeraie Marrakech3.jpg"],
            ['file_name' => "Iberostar Club Palmeraie Marrakech4.jpg"],
            ['file_name' => "Iberostar Club Palmeraie Marrakech5.jpg"],
            ['file_name' => "Iberostar Club Palmeraie Marrakech6.jpg"],
            ['file_name' => "Iberostar Club Palmeraie Marrakech7.jpg"],
            ['file_name' => "Iberostar Club Palmeraie Marrakech8.jpg"],
            ['file_name' => "Iberostar Club Palmeraie Marrakech9.jpg"],
            ['file_name' => "Iberostar Club Palmeraie Marrakech10.jpg"],
        ]);
        $michlifenResortGolf = Hotel::create([
            'name' => 'michlifen resort golf',
            'latitude' => "33.533466",
            'longtiude' => "-5.102987",
            'details' => "In the Atlas mountains, this upscale, modern resort is 2 km from Le Lion d'Ifrane landmark and 8 km from the Parc National d'Ifrane.
            Elegant rooms have light wood accents and a mix of contemporary and classic decor.
            All have balconies offering garden or forest views, and come with minibars, flat-screen TVs and free Wi-Fi.
            Opulent suites and apartments add separate living areas and sofabeds; some include fireplaces.
            There are 3 restaurants offering local and European fare, plus a pool bar and a rustic-chic lobby bar with a grand piano.
            Other amenities include indoor and outdoor pools, and a luxe spa, plus tennis, horseback riding and a gym.
            Advantages: Free Wi-Fi , Breakfast  ,Free parking , Accessible , Indoor pool and Air-conditioned",
            'rate' => "4 stars",
            'price' => "starts with 3080.33 MAD per night",
            'country_id' => 4,
        ]);
        $michlifenResortGolf->images()->createMany([
            ['file_name' => "michlifen resort golf in morocco1.jpg"],
            ['file_name' => "michlifen resort golf in morocco2.jpg"],
            ['file_name' => "michlifen resort golf in morocco3.jpg"],
            ['file_name' => "michlifen resort golf in morocco4.jpg"],
            ['file_name' => "michlifen resort golf in morocco5.jpg"],
            ['file_name' => "michlifen resort golf in morocco6.jpg"],
            ['file_name' => "michlifen resort golf in morocco7.jpg"],
            ['file_name' => "michlifen resort golf in morocco8.jpg"],
            ['file_name' => "michlifen resort golf in morocco9.jpg"],
            ['file_name' => "michlifen resort golf in morocco10.jpg"],
        ]);
        $mosaicHostel = Hotel::create([
            'name' => 'mosaic hostel',
            'latitude' => "31.634740775617118",
            'longtiude' => "-7.990451815341434 ",
            'details' => "In a long-standing house adorned with mosaic tiles, this colorful hostel is a 13-minute walk from the bustling Jemaa el-Fnaa square, 5 km from Marrakech Railway Station and 8 km from Marrakesh Menara Airport.
            Featuring vibrant tile walls and ceilings, the relaxed mixed-gender and all-female dorms have bunk beds and shared bathrooms.
            Private rooms offer en suite facilities.
            Amenities include a bright common lounge, a dining area and a rooftop terrace.
            Advantages: Free Wi-Fi , Breakfast  ,Free parking , Accessible , Indoor pool and Air-conditioned",
            'rate' => "4 stars",
            'price' => "starts with 137.44 MAD per night",
            'country_id' => 4,
        ]);
        $mosaicHostel->images()->createMany([
            ['file_name' => "mosaic hostel1.jpg"],
            ['file_name' => "mosaic hostel2.jpg"],
            ['file_name' => "mosaic hostel3.jpg"],
            ['file_name' => "mosaic hostel4.jpg"],
            ['file_name' => "mosaic hostel5.jpg"],
            ['file_name' => "mosaic hostel6.jpg"],
            ['file_name' => "mosaic hostel7.jpg"],
            ['file_name' => "mosaic hostel8.jpg"],
            ['file_name' => "mosaic hostel9.jpg"],
            ['file_name' => "mosaic hostel10.jpg"],
        ]);
        $royalMansourMarrakech = Hotel::create([
            'name' => 'royal mansour marrakech',
            'latitude' => "31.625163",
            'longtiude' => "-7.998346",
            'details' => "Set on landscaped grounds, this opulent luxury hotel is 14 minutes' walk from Jemaa el-Fnaa, a lively square in Marrakesh's Medina (old city), and 5 km from Marrakesh Menara Airport.
            Lavish 3-story traditional houses feature courtyard patios, living rooms, and rooftop terraces with plunge pools and fireplaces.
            All have flat-screen TVs, free Wi-Fi and minibars.
            Upgraded houses add kitchens with personal butlers, steam rooms and hammams.
            There are 2 fine dining restaurants, plus a Mediterranean eatery with a terrace. There's a chic bar, a sleek piano bar and a cigar bar.
            Other amenities include indoor and outdoor pools, a spa and a kids' club.
            Advantages: Free Wi-Fi , Breakfast  ,Free parking , Accessible ,  Indoor and outdoor pool  ,Air-conditioned",
            'rate' => "4 stars",
            'price' => "starts with 10953.63 MAD per night",
            'country_id' => 4,
        ]);
        $royalMansourMarrakech->images()->createMany([
            ['file_name' => "Royal Mansour Marrakech1.jpg"],
            ['file_name' => "Royal Mansour Marrakech2.jpg"],
            ['file_name' => "Royal Mansour Marrakech3.jpg"],
            ['file_name' => "Royal Mansour Marrakech4.jpg"],
            ['file_name' => "Royal Mansour Marrakech5.jpg"],
            ['file_name' => "Royal Mansour Marrakech6.jpg"],
            ['file_name' => "Royal Mansour Marrakech7.jpg"],
            ['file_name' => "Royal Mansour Marrakech8.jpg"],
        ]);
        $SelmanMarrakech = Hotel::create([
            'name' => 'Selman Marrakech',
            'latitude' => "31.5735740661621",
            'longtiude' => "-8.01865577697754",
            'details' => "Offering views of the Atlas Mountains, this high-end hotel, set in a rural house with stables, is a 14-minute walk from both Argan Golf Resort and Oasiria water park.
            Refined rooms feature free Wi-Fi, sitting areas, and terraces with mountain or garden views.
            Suites add separate living rooms, while swanky villas have private pools and butler service. Room service is available 24/7.
            Continental breakfast is available for a fee.
            There are 3 upscale restaurants; 1 with regular live music and 1 with an opulent cocktail bar, plus a relaxed bar by an outdoor pool with a sundeck.
            Other amenities include a gym, an indoor pool and a posh spa.
            Advantages: Free Wi-Fi, Free breakfast, Free parking, Accessible, Outdoor pool, Air-conditioned",
            'rate' => "4 stars",
            'price' => "starts with 3896.89 MAD per night",
            'country_id' => 4,
        ]);
        $SelmanMarrakech->images()->createMany([
            ['file_name' => "Selman Marrakech1.jpg"],
            ['file_name' => "Selman Marrakech2.jpg"],
            ['file_name' => "Selman Marrakech3.jpg"],
            ['file_name' => "Selman Marrakech4.jpg"],
            ['file_name' => "Selman Marrakech5.jpg"],
            ['file_name' => "Selman Marrakech6.jpg"],
            ['file_name' => "Selman Marrakech7.jpg"],
            ['file_name' => "Selman Marrakech8.jpg"],
            ['file_name' => "Selman Marrakech9.jpg"],
            ['file_name' => "Selman Marrakech10.jpg"],
            ['file_name' => "Selman Marrakech11.jpg"],
        ]);
        // eof Morocco
        // Czech
        $CosmopolitanBobycentrum = Hotel::create([
            'name' => 'Cosmopolitan Bobycentrum',
            'latitude' => "49.212418422810636",
            'longtiude' => "16.60814143299275",
            'details' => "Located on the edge of Brno's centre, just a few minutes by public transport from the heart of the city. Hotel is part of a multi-purpose sports, culture and business complex and set next to the sport area and shopping centres. Villa Tugendhat is 500 m from the property. Czech and international cuisine can be enjoyed in the restaurant and cafe - bar. All air-conditioned rooms of the hotel feature satellite TV and internet access. Guests can enjoy numerous sports activities within the complex at an additional cost. Various café bars, shops and restaurants can be found in the vicinity. Garage parking safety. Reservation is not needed. Excellent transport connection by car from D1 into all major traffic routes.",
            'rate' => "4 stars",
            'price' => "starts with 45 Euro per night",
            'country_id' => 5,
        ]);
        $CosmopolitanBobycentrum->images()->createMany([
            ['file_name' => "Hotel Cosmopolitan Bobycentrum1.jpg"],
            ['file_name' => "Hotel Cosmopolitan Bobycentrum2.jpg"],
            ['file_name' => "Hotel Cosmopolitan Bobycentrum3.jpg"],
            ['file_name' => "Hotel Cosmopolitan Bobycentrum4.jpg"],
            ['file_name' => "Hotel Cosmopolitan Bobycentrum5.jpg"],
            ['file_name' => "Hotel Cosmopolitan Bobycentrum6.jpg"],
        ]);
        $HotelPassage = Hotel::create([
            'name' => 'Hotel Passage',
            'latitude' => "49.212418422810636",
            'longtiude' => "16.607017900460146",
            'details' => "Newly renovated hotel in the Brno city center with 103 cosy rooms and big convention center. Hotel Passage was completely refurbished and opened again in January 2020. Its location in the city center makes it a perfect place for business or leisure stay and for meetings and conferences. There are enough parking places at the hotel garage. You can enjoy delicious breakfast with a lot of organic and local choices or taste some of the creative coctails at our lobby bar. At the relax zone there are fitness centre, massages and yoga lessons.",
            'rate' => "3 stars",
            'price' => "starts with 65E Euro per night",
            'country_id' => 5,
        ]);
        $HotelPassage->images()->createMany([
            ['file_name' => "Hotel Passage1.jpg"],
            ['file_name' => "Hotel Passage2.jpg"],
            ['file_name' => "Hotel Passage3.jpg"],
            ['file_name' => "Hotel Passage4.jpg"],
            ['file_name' => "Hotel Passage5.jpg"],
        ]);
        $HotelPegasBrno = Hotel::create([
            'name' => 'Hotel Pegas Brno ',
            'latitude' => "49.19637114378888",
            'longtiude' => "16.607160373473526",
            'details' => "Hotel Pegas Brno is a family hotel located in the centre of the City of Brno, directly beneath Špilberk Castle. The hotel is associated with the first private brewery in Moravia, where special beers are brewed right in front of its guests.",
            'rate' => "4 stars",
            'price' => "starts with 92E Euro per night",
            'country_id' => 5,
        ]);
        $HotelPegasBrno->images()->createMany([
            ['file_name' => "Hotel Pegas Brno1.jpg"],
            ['file_name' => "Hotel Pegas Brno2.jpg"],
            ['file_name' => "Hotel Pegas Brno3.jpg"],
            ['file_name' => "Hotel Pegas Brno4.jpg"],
            ['file_name' => "Hotel Pegas Brno5.jpg"],
        ]);
        $EAHotelMozart = Hotel::create([
            'name' => 'EA Hotel Mozart',
            'latitude' => "50.22230687701128",
            'longtiude' => "12.881853573433123",
            'details' => "EA Hotel Mozart is located on the left bank of the Tepla river, 350 feet from the main colonnade, in a historical building, where J. W. ... Find thermal spa facilities, the lido, a sauna, tennis courts, a golf course and other services (hairdresser, massage, beauty salon) in the surroundings of the hotel.",
            'rate' => "4 stars",
            'price' => " starts with 96E Euro per night",
            'country_id' => 5,
        ]);
        $EAHotelMozart->images()->createMany([
            ['file_name' => "EA Hotel Mozart1.jpg"],
            ['file_name' => "EA Hotel Mozart2.jpg"],
            ['file_name' => "EA Hotel Mozart3.jpg"],
            ['file_name' => "EA Hotel Mozart4.jpg"],
            ['file_name' => "EA Hotel Mozart5.jpg"],
        ]);
        $GarniHotelPensionFan  = Hotel::create([
            'name' => 'Garni Hotel/Pension Fan',
            'latitude' => "49.19637114378888",
            'longtiude' => "16.607160373473526",
            'details' => "Garnihotel/Pension FAN, 2006 certificated by the Hotel and Restaurant Associon of Czech Republic is a two-storied building, situated in the spa town of Karlovy Vary, district Bohatice.You can expect polished, cosy and quiet rooms with helpful staff and excellent connectiveness to the city centre with municipal transport. There is a kitchen unit in every room so you can cook your own meal or you can enjoy Czech breakfast every morning downstairs.Rooms are equipped with private bathroom and a toilette, satelite TV, fridge, coffee maker, alarm-clock, cooking stove and anti-allergic pillows and blankets.There is WLAN available in every room on request.Regardin your children, we can provide you children cots,stools and variety of boardgames free of charge.There is also a secured parking lot behind FAN.You can buy municipal transport tickets at the reception and we can store your golf bags/bikes in a secured room.",
            'rate' => "4 stars",
            'price' => " starts with 45 Euro per night",
            'country_id' => 5,
        ]);
        $GarniHotelPensionFan->images()->createMany([
            ['file_name' => "Garni HotelPension Fan1.jpg"],
            ['file_name' => "Garni HotelPension Fan2.jpg"],
            ['file_name' => "Garni HotelPension Fan3.jpg"],
            ['file_name' => "Garni HotelPension Fan4.jpg"],
            ['file_name' => "Garni HotelPension Fan5.jpg"],
        ]);
        // eof Czech
        // canda
        $HiltonToronto  = Hotel::create([
            'name' => 'Hilton Toronto',
            'latitude' => "43.65007785114315",
            'longtiude' => "-79.38551118399138",
            'details' => "Hilton Toronto is an excellent choice for travelers visiting Toronto, offering a quiet environment alongside many helpful amenities designed to enhance your stay.
            You’ll enjoy relaxing rooms that offer a flat screen TV, air conditioning, and a refrigerator, and you can stay connected during your stay as Toronto Hilton offers guests free internet access.
            The hotel features room service and a concierge. Plus, Hilton Toronto Hotel offers a pool and breakfast, providing a pleasant respite from your busy day. For guests with a vehicle, parking is available.
            For those interested in checking out popular landmarks while visiting Toronto, Hilton Toronto Hotel is located a short distance from The Air Canada Centre (0.6 mi) and Rogers Centre (0.6 mi).
            During your visit, be sure to check out one of Toronto's popular lobster restaurants such as 360 The Restaurant at the CN Tower, ALO RESTAURANT, and Canoe Restaurant & Bar, all a short distance from Hilton Toronto.
            Should time allow, CN Tower, St. Lawrence Market, and Graffiti Alley are some popular attractions that are within walking distance.",
            'rate' => "4 stars",
            'price' => " starts with 172 Euro per night",
            'country_id' => 6,
        ]);
        $HiltonToronto->images()->createMany([
            ['file_name' => "hilton-toronto.jpg"],
            ['file_name' => "hilton-toronto1.jpg"],
            ['file_name' => "hilton-toronto2.jpg"],
            ['file_name' => "hilton-toronto3.jpg"],
            ['file_name' => "hilton-toronto5.jpg"],
        ]);
        $SpringHillSuites  = Hotel::create([
            'name' => 'SpringHill Suites',
            'latitude' => "45.50636319934037",
            'longtiude' => "-73.55437055337364",
            'details' => "Offering a prime location in the heart of old town, SpringHill Suites Old Montreal makes it easy to access both leisure and business destinations along the St. Lawrence River. From our hotel, you can explore the Historic District, as well as visit the Old Port of Montreal (Vieux Port) and see shows at the Bell Center. When it's time to relax, retreat to our stylishly appointed suites, each featuring complimentary high-speed Wi-Fi, spacious layouts and pullout sofas. In the mornings, fuel up for another adventure with our complimentary breakfast with all your morning favorites. You can also visit Avie Spa, directly attached to our hotel and providing soothing body treatments. Wellness enthusiasts can stay on track with access to a fitness centre and indoor pool. Ideal for incoming event guests, we offer exclusive group rates and access to nearby meeting venues. Whatever your reason for traveling, we're ready to meet all your travel needs during a stay at SpringHill Suites Old Montreal.",
            'rate' => "4 stars",
            'price' => " starts with 91 Euro per night",
            'country_id' => 6,
        ]);
        $SpringHillSuites->images()->createMany([
            ['file_name' => "SpringHill Suites by Marriott Old Montreal.jpg"],
            ['file_name' => "SpringHill Suites by Marriott Old Montreal2.jpg"],
            ['file_name' => "SpringHill Suites by Marriott Old Montreal3.jpg"],
            ['file_name' => "SpringHill Suites by Marriott Old Montreal4.jpg"],
            ['file_name' => "SpringHill Suites by Marriott Old Montreal5.jpg"],
            ['file_name' => "SpringHill Suites by Marriott Old Montreal6.jpg"],
            ['file_name' => "SpringHill Suites by Marriott Old Montreal7.jpg"],
        ]);
        $BestWesternVilleMarieMontrealHotelSuites  = Hotel::create([
            'name' => 'DoubleTree by Hilton Toronto Airport & Suites',
            'latitude' => "45.502353930770205",
            'longtiude' => "-73.57681309939989",
            'details' => "See why so many travelers make Best Western Ville-Marie Montreal Hotel & Suites their hotel of choice when visiting Montreal. Providing an ideal mix of value, comfort and convenience, it offers a family-friendly setting with an array of amenities designed for travelers like you.
            Nearby landmarks such as Bell Centre (0.6 mi) and Chinatown (0.9 mi) make Best Western Ville-Marie Montreal Hotel & Suites a great place to stay when visiting Montreal.
            Rooms at Best Western Montreal provide a flat screen TV, air conditioning, and a refrigerator, and guests can stay connected with free wifi.
            In addition, while staying at Best Western Ville Marie Hotel guests have access to a 24 hour front desk, room service, and a concierge. You can also enjoy a fitness center and a lounge. Need a place to park? Parking is available at Best Western Ville-Marie Montreal Hotel & Suites.
            During your visit, be sure to check out one of Montreal's popular lobster restaurants such as Au Pied de Cochon, Le Bremner, and Garde Manger, all a short distance from Montreal Best Western.
            Should time allow, Mount Royal Park, Old Montreal, and Underground City are some popular attractions that are within walking distance.
            At Best Western Ville-Marie Montreal Hotel & Suites, your comfort and satisfaction come first, and they look forward to welcoming you to Montreal.",
            'rate' => "4 stars",
            'price' => " starts with 133 Euro per night",
            'country_id' => 6,
        ]);
        $BestWesternVilleMarieMontrealHotelSuites->images()->createMany([
            ['file_name' => "Best Western Ville-Marie Montreal Hotel.jpg"],
            ['file_name' => "Best Western Ville-Marie Montreal Hotel2.jpg"],
            ['file_name' => "Best Western Ville-Marie Montreal Hotel3.jpg"],
            ['file_name' => "Best Western Ville-Marie Montreal Hotel4.jpg"],
            ['file_name' => "Best Western Ville-Marie Montreal Hotel5.jpg"],
            ['file_name' => "Best Western Ville-Marie Montreal Hotel6.jpg"],
            ['file_name' => "Best Western Ville-Marie Montreal Hotel7.jpg"],
        ]);
        $DoubleTreebyHiltonTorontoAirport  = Hotel::create([
            'name' => 'DoubleTree by Hilton Toronto Airport',
            'latitude' => "43.68633739690533",
            'longtiude' => "-79.59636438399258",
            'details' => "a stylish hotel with contemporary comforts. Walk to major corporations and attractions in the Dixon Road area, and enjoy convenient 24-hour shuttle service to/from Pearson Airport. Business travelers are minutes from the Congress Centre and International Centre, and families will love the proximity to Canada’s Wonderland. From the airport, it’s just a 20-minute train ride downtown on the Union-Pearson Express. Kick off your stay with a warm DoubleTree chocolate chip cookie at check-in. Our modern guest rooms feature complimentary WiFi, a 42-inch TV, mini-fridge, ergonomic workspace and coffee maker, and some rooms offer premium views of the airport in action. Here a few days? Choose a suite for a separate living area and kitchenette. Additional amenities include 7,000 sq. ft. of event space, on-site restaurant and bar, heated indoor pool, fitness center, and business center.",
            'rate' => "4 stars",
            'price' => " starts with 93 Euro per night",
            'country_id' => 6,
        ]);
        $DoubleTreebyHiltonTorontoAirport->images()->createMany([
            ['file_name' => "DoubleTree by Hilton Toronto Airport.jpg"],
            ['file_name' => "DoubleTree by Hilton Toronto Airport2.jpg"],
            ['file_name' => "DoubleTree by Hilton Toronto Airport3.jpg"],
            ['file_name' => "DoubleTree by Hilton Toronto Airport4.jpg"],
            ['file_name' => "DoubleTree by Hilton Toronto Airport5.jpg"],
        ]);
        $HamptonInn  = Hotel::create([
            'name' => 'Hampton Inn',
            'latitude' => "43.65199019823386",
            'longtiude' => "-79.60106805330715",
            'details' => "As you fly into Toronto, feel confident and secure knowing that you have a comfortable home away from home located just minutes from baggage claim at the Hampton Inn by Hilton® Toronto Airport Corporate Centre. Whether you're on business or up for a little fun, our airport area hotel in Toronto puts you in touch with Toronto.",
            'rate' => "4 stars",
            'price' => "starts with 77 Euro per night",
            'country_id' => 6,
        ]);
        $HamptonInn->images()->createMany([
            ['file_name' => "Hampton Inn by Hilton Toronto Airport Corporate Centre.jpg"],
            ['file_name' => "Hampton Inn by Hilton Toronto Airport Corporate Centre2.jpg"],
            ['file_name' => "Hampton Inn by Hilton Toronto Airport Corporate Centre3.jpg"],
            ['file_name' => "Hampton Inn by Hilton Toronto Airport Corporate Centre4.jpg"],
            ['file_name' => "Hampton Inn by Hilton Toronto Airport Corporate Centre5.jpg"],
        ]);
        // eof canda
        //egypt
        $cairomariot  = Hotel::create([
            'name' => 'Cairo Marriott Hotel And Omar Elkhayam Casino',
            'latitude' => "31.225095",
            'longtiude' => "30.057234",
            'details' => "Get the celebrity treatment with world-class service at Cairo Marriott Hotel & Omar Khayyam Casino
            One of our top picks in Cairo.
           Located in Cairo’s Zamalek district, the Marriott Omar Khayyam offers luxurious rooms with a balcony overlooking the Nile or the gardens. It features a casino and 15 food and beverage outlets. The hotel's Cairo Twin Towers provide panoramic views of the Nile and six acres of the palace gardens.
           
           All guest rooms at the Cairo Marriott feature satellite TV, a minibar, tea/coffee facilities and elegant bathrooms. Some rooms also feature panoramic views of the Nile River.
           
           The Cairo Marriott Hotel serves Japanese, Italian and Middle Eastern cuisine at its restaurants. Meals are served indoors and al fresco. The hotel also has 6 cafés and bars where drinks and light refreshments are available.
           
           The Gabalaya Park and Aquarium are just a 2-minute walk from the Cairo Marriott.
           
           Couples particularly like the location — they rated it 8.8 for a two-person trip.
           
           We speak your language!
           
           Cairo Marriott Hotel & Omar Khayyam Casino has been welcoming Booking.com guests since 1 Jul 2008.
           Hotel chain/brand: Marriott Hotels & Resorts",
            'rate' => "5 stars",
            'price' => "starts with 1,431 pound per night",
            'country_id' => 7,
        ]);
        $cairomariot->images()->createMany([
            ['file_name' => "mariot (1).jpg"],
            ['file_name' => "mariot (2).jpg"],
            ['file_name' => "mariot (3).jpg"],
            ['file_name' => "mariot (4).jpg"],
            ['file_name' => "mariot (5).jpg"],
            ['file_name' => "mariot (6).jpg"],
            ['file_name' => "mariot (7).jpg"],
            ['file_name' => "mariot (8).jpg"],
            ['file_name' => "mariot (9).jpg"],
            ['file_name' => "mariot (10).jpg"],
            ['file_name' => "mariot (11).jpg"],
            ['file_name' => "mariot (12).jpg"],
            ['file_name' => "mariot (13).jpg"],
            ['file_name' => "mariot (14).jpg"],
            ['file_name' => "mariot (15).jpg"],
            ['file_name' => "mariot (16).jpg"],
            ['file_name' => "mariot (17).jpg"],
            ['file_name' => "mariot (18).jpg"],
            ['file_name' => "mariot (19).jpg"],
            ['file_name' => "mariot (20).jpg"],
            ['file_name' => "mariot (21).jpg"],
            ['file_name' => "mariot (22).jpg"],
            ['file_name' => "mariot (23).jpg"],
            ['file_name' => "mariot (24).jpg"],
           
        ]);
        $fairmont  = Hotel::create([
            'name' => 'Fairmont Nile City Hotel',
            'latitude' => "31.227940",
            'longtiude' => "31.227940",
            'details' => "Get the celebrity treatment with world-class service at Fairmont Nile City
            One of our top picks in Cairo.
           Located in the Nile City Towers by the River Nile, this 5-star hotel features a rooftop pool deck with spectacular views across Cairo to the Pyramids. It offers 7 food and beverage venues.
           
           All of the Fairmont Nile City rooms are soundproof and decorated with elegant Art Deco furnishings. They come equipped with a work desk and interactive IPTV. The bathrooms have rain showers with sliding shutters. Some rooms offer a panoramic Nile view or city view.
           
           Fairmont Nile City provides modern equipment at its spacious fitness centre. There is also a well equipped business centre on site.
           
           Guests can enjoy gourmet dining at the Asian Fusion Saigon Restaurant and Lounge as well as Italian favorites at L’Uliveto. Guests can also enjoy Al fresco dining on the panoramic rooftop terrace. Bab El Nil offers night-time entertainment and Middle Eastern cuisine.
           
           Fairmont Nile City is located just 23.5 km from Cairo Int’l Airport and Cairo Museum is within 10 minutes drive away. Nile Towers Mall is footsteps away from the hotel.
           
           Couples particularly like the location — they rated it 8.6 for a two-person trip.
           
           We speak your language!
           
           Fairmont Nile City has been welcoming Booking.com guests since 14 Mar 2010.
           Hotel chain/brand: Fairmont Hotels & Resorts",
            'rate' => "5 stars",
            'price' => "starts with 1,151 pound per night",
            'country_id' => 7,
        ]);
        $firmont->images()->createMany([
            ['file_name' => "fairmont (1).jpg"],
            ['file_name' => "fairmont (2).jpg"],
            ['file_name' => "fairmont (3).jpg"],
            ['file_name' => "fairmont (4).jpg"],
            ['file_name' => "fairmont (5).jpg"],
            ['file_name' => "fairmont (6).jpg"],
            ['file_name' => "fairmont (7).jpg"],
            ['file_name' => "fairmont (8).jpg"],
            ['file_name' => "fairmont (9).jpg"],
            ['file_name' => "fairmont (10).jpg"],
            ['file_name' => "fairmont (11).jpg"],
            ['file_name' => "fairmont (12).jpg"],
            ['file_name' => "fairmont (13).jpg"],
            ['file_name' => "fairmont (14).jpg"],
            ['file_name' => "fairmont (15).jpg"],
            ['file_name' => "fairmont (16).jpg"],
            ['file_name' => "fairmont (17).jpg"],
            ['file_name' => "fairmont (18).jpg"],
            ['file_name' => "fairmont (19).jpg"],
            ['file_name' => "fairmont (20).jpg"],
            ['file_name' => "fairmont (21).jpg"],
            ['file_name' => "fairmont (22).jpg"],
            ['file_name' => "fairmont (23).jpg"],
            ['file_name' => "fairmont (24).jpg"],
            ['file_name' => "fairmont (25).jpg"],
            ['file_name' => "fairmont (26).jpg"],
            ['file_name' => "fairmont (27).jpg"],
            ['file_name' => "fairmont (28).jpg"],
            ['file_name' => "fairmont (29).jpg"],
            ['file_name' => "fairmont (30).jpg"],
            ['file_name' => "fairmont (31).jpg"],
            ['file_name' => "fairmont (32).jpg"],
            ['file_name' => "fairmont (33).jpg"],
            ['file_name' => "fairmont (34).jpg"],
        ]);
        $grandnile  = Hotel::create([
            'name' => 'Grand Nile Tower Hotel',
            'latitude' => "31.227057",
            'longtiude' => "30.034842",
            'details' => "One of our top picks in Cairo.
            Luxurious rooms and suites offer views across the River Nile at Grand Nile Tower. The wellness centre also overlooks the Nile and the hotel features 8 restaurants and an outdoor pool.
            
            The elegantly decorated rooms and suites at Grand Nile Tower come with a work desk, satellite TV and minibar. Each offers a modern bathroom stocked with amenities and a hairdryer.
            
            Guests can enjoy views of the Nile from the revolving restaurant, which serves International dishes. Japanese, Indian and Italian cuisine are also available, and live entertainment is organised regularly on the hotel’s private yacht.
            
            Guests can work out in the gym or enjoy a warm hot-tub session. It is also possible to relax on the waterfront terrace or to visit the hotel’s Galleria shopping and entertainment centre. The property offers a supervised kid's club offering activities for children.
            
            Cairo International Airport is 20 km from the property. The Egyptian Museum is a 15-minute walk away.
            
            Couples particularly like the location — they rated it 8.8 for a two-person trip.
            
            We speak your language!
            
            Grand Nile Tower has been welcoming Booking.com guests since 15 Nov 2011.",
            'rate' => "5 stars",
            'price' => "starts with 906 pound per night",
            'country_id' => 7,
        ]);
        $grandnile->images()->createMany([
            ['file_name' => "grandnile (1).jpg"],
            ['file_name' => "grandnile (2).jpg"],
            ['file_name' => "grandnile (3).jpg"],
            ['file_name' => "grandnile (4).jpg"],
            ['file_name' => "grandnile (5).jpg"],
            ['file_name' => "grandnile (6).jpg"],
            ['file_name' => "grandnile (7).jpg"],
            ['file_name' => "grandnile (8).jpg"],
            ['file_name' => "grandnile (9).jpg"],
            ['file_name' => "grandnile (10).jpg"],
            ['file_name' => "grandnile (11).jpg"],
            ['file_name' => "grandnile (12).jpg"],
            ['file_name' => "grandnile (13).jpg"],
            ['file_name' => "grandnile (14).jpg"],
            ['file_name' => "grandnile (15).jpg"],
            ['file_name' => "grandnile (16).jpg"],
            ['file_name' => "grandnile (17).jpg"],
            ['file_name' => "grandnile (18).jpg"],
            ['file_name' => "grandnile (19).jpg"],
            ['file_name' => "grandnile (20).jpg"],
            ['file_name' => "grandnile (21).jpg"],
            ['file_name' => "grandnile (23).jpg"],
            ['file_name' => "grandnile (24).jpg"],
            ['file_name' => "grandnile (25).jpg"],
            ['file_name' => "grandnile (26).jpg"],
            ['file_name' => "grandnile (27).jpg"],
            ['file_name' => "grandnile (28).jpg"],
            ['file_name' => "grandnile (29).jpg"],
            ['file_name' => "grandnile (30).jpg"],
            ['file_name' => "grandnile (31).jpg"],
        ]);
            $kempinski   = Hotel::create([
                'name' => 'kempinski Nile Hotel ',
                'latitude' => "31.230441",
                'longtiude' => "30.038903",
                'details' => "One of our top picks in Cairo.
                Located in Cairo’s affluent Garden City district, Kempinski Nile Hotel offers luxurious rooms on the shores of the Nile River. It features a wellness centre and a rooftop swimming pool.
                
                Each of Kempinski’s rooms offer free WiFi, high definition LCD TVs with satellite channels and free soft drinks from the mini bar. For guests’ comfort, we offer the butler service, concierge and pillow menu.
                
                Kempinski’s full-service spa and wellness centre offers complimentary hot tubs, steam rooms, and saunas. Guests can also enjoy professional massages, or cool off in the outdoor swimming pool on the hotel’s rooftop.
                
                Kempinski Nile Hotel boasts variety of restaurants and bars, including the Osmanly restaurant offering Ottoman ( Turkish ) cuisine, The Blue restaurant serving an Italian cuisine and the Jazz Bar on Floor 10. Also guests can stop in anytime throughout the day to recharge with a cup of coffee, tea, cold beverages, fruits and cookies at the Executive Lounge..
                
                Kempinski Nile Hotel is 5 minutes’ walk from downtown Cairo and from the Egyptian Museum. Cairo International Airport is 25 km away, the Pyramids of Giza and the Cairo Citadel are 20 minutes away by car.
                
                Couples particularly like the location — they rated it 9.0 for a two-person trip.
                
                We speak your language!
                
                Kempinski Nile Hotel, Cairo has been welcoming Booking.com guests since 22 Jul 2010.",
                'rate' => "5 stars",
                'price' => "starts with 1,509 pound per night",
                'country_id' => 7,
            ]);
            $kempinski ->images()->createMany([
                ['file_name' => "kempniski (1).jpg"],
                ['file_name' => "kempniski (2).jpg"],
                ['file_name' => "kempniski (3).jpg"],
                ['file_name' => "kempniski (4).jpg"],
                ['file_name' => "kempniski (5).jpg"],
                ['file_name' => "kempniski (6).jpg"],
                ['file_name' => "kempniski (7).jpg"],
                ['file_name' => "kempniski (8).jpg"],
                ['file_name' => "kempniski (9).jpg"],
                ['file_name' => "kempniski (10).jpg"],
                ['file_name' => "kempniski (11).jpg"],
                ['file_name' => "kempniski (12).jpg"],
                ['file_name' => "kempniski (13).jpg"],
                ['file_name' => "kempniski (14).jpg"],
                ['file_name' => "kempniski (15).jpg"],
                ['file_name' => "kempniski (16).jpg"],
                ['file_name' => "kempniski (17).jpg"],
                ['file_name' => "kempniski (18).jpg"],
                ['file_name' => "kempniski (19).jpg"],
                ['file_name' => "kempniski (20).jpg"],
                ['file_name' => "kempniski (21).jpg"],
                ['file_name' => "kempniski (22).jpg"],
                ['file_name' => "kempniski (23).jpg"],
                ['file_name' => "kempniski (24).jpg"],
                ['file_name' => "kempniski (25).jpg"],
                ['file_name' => "kempniski (26).jpg"],
                ['file_name' => "kempniski (27).jpg"],
                ['file_name' => "kempniski (28).jpg"],
                ['file_name' => "kempniski (29).jpg"],
                ['file_name' => "kempniski (30).jpg"],
                ['file_name' => "kempniski (31).jpg"],
                ['file_name' => "kempniski (32).jpg"],
                ['file_name' => "kempniski (33).jpg"],
                ['file_name' => "kempniski (34).jpg"],
                ['file_name' => "kempniski (35).jpg"],
                ['file_name' => "kempniski (36).jpg"],
            ]);
            $ramseshilton  = Hotel::create([
                'name' => 'Ramses Hilton Hotel And Casino',
                'latitude' => "31.232076",
                'longtiude' => "30.050428",
                'details' => "Overlooking the Nile River and just a 5-minute walk from the Cairo Museum, the Ramses Hilton boasts an elevated pool terrace heated in the winter, an on-site casino and gym. Guest rooms feature balconies offering Nile or panoramic city views.

                All air-conditioned rooms are spacious and feature warm decoration. They come furnished with sofa and chairs and a work desk. There is also satellite flat-screen TV, a safe box and an alarm clock. Some rooms also feature panoramic views of the Nile River.
                
                An array of international cuisines along with evening entertainment are available for guests at Ramses Hilton to enjoy. Ranging from Mediterranean specialties to traditional English cuisine at the Sherlock Holmes Pub. Maharaja Indian Restaurant offers a delicious authentic Indian cuisine. An oriental café, Garden Court operates daily with live evening entertainment.
                
                This Cairo Hilton features a billiards room and for those seeking relaxation, there is a spa offering massages, saunas and a hot tub. The Ramses also features an on-site shopping galleria with 250 shops and an arcade.
                
                Cairo International Airport is 24.1 km away and an airport transfer to the hotel is available (at a charge).
                
                Couples particularly like the location — they rated it 8.1 for a two-person trip.
                
                We speak your language!
                
                Ramses Hilton Hotel & Casino has been welcoming Booking.com guests since 5 Aug 2009.",
                'rate' => "5 stars",
                'price' => "starts with 1,026 pound per night",
                'country_id' => 7,
            ]);
            $ramseshilton->images()->createMany([
                ['file_name' => "ramsishilton (1).jpg"],
                ['file_name' => "ramsishilton (2).webg"],
                ['file_name' => "ramsishilton (3).jpg"],
                ['file_name' => "ramsishilton (4).jpg"],
                ['file_name' => "ramsishilton (5).jpg"],
                ['file_name' => "ramsishilton (6).jpg"],
                ['file_name' => "ramsishilton (7).jpg"],
                ['file_name' => "ramsishilton (8).jpg"],
                ['file_name' => "ramsishilton (9).jpg"],
                ['file_name' => "ramsishilton (10).jpg"],
                ['file_name' => "ramsishilton (11).jpg"],
                ['file_name' => "ramsishilton (12).jpg"],
                ['file_name' => "ramsishilton (13).jpg"],
                ['file_name' => "ramsishilton (14).jpg"],
                ['file_name' => "ramsishilton (15).jpg"],
                ['file_name' => "ramsishilton (16).jpg"],
                ['file_name' => "ramsishilton (17).jpg"],
                ['file_name' => "ramsishilton (18).jpg"],
                ['file_name' => "ramsishilton (19).jpg"],
                ['file_name' => "ramsishilton (20).jpg"],
                ['file_name' => "ramsishilton (21).jpg"],
                ['file_name' => "ramsishilton (22).jpg"],
                ['file_name' => "ramsishilton (23).jpg"],
                ['file_name' => "ramsishilton (24).jpg"],
                ['file_name' => "ramsishilton (25).jpg"],
                ['file_name' => "ramsishilton (26).jpg"],
                ['file_name' => "ramsishilton (27).jpg"],
                ['file_name' => "ramsishilton (28).jpg"],
                ['file_name' => "ramsishilton (29).jpg"],
                ['file_name' => "ramsishilton (30).jpg"],
                ['file_name' => "ramsishilton (31).jpg"],
                ['file_name' => "ramsishilton (32).jpg"],
                ['file_name' => "ramsishilton (33).jpg"],
                ['file_name' => "ramsishilton (34).jpg"],
                ['file_name' => "ramsishilton (35).jpg"],
                ['file_name' => "ramsishilton (36).jpg"],
                ['file_name' => "ramsishilton (37).jpg"],
                ['file_name' => "ramsishilton (38).jpg"],
                ['file_name' => "ramsishilton (39).jpg"],
                ['file_name' => "ramsishilton (40).jpg"],
                ['file_name' => "ramsishilton (41).jpg"],
                ['file_name' => "ramsishilton (42).jpg"],
               
            ]);
        // eof egypt
    }
}