<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // lebanon
        $Jai = Restaurant::create([
            'name' => 'Jai',
            'longtiude' => '35.4921537',
            'latitude' => '33.8957422',
            'details' =>  'Jaï is a take-out restaurant with an open kitchen, where hungry customers can watch chef Wael Lazkani cook their dinner right in front of them. The concept is relaxed and intimate, and certainly conducive to fun conversations from across the bar. The menu itself is ripe with items such as chicken, shrimp rolls, fish cakes, noodle soups and curry. You will find an irresistible mix of spicy Indian, Thai and Vietnamese dishes, making Jaï the ideal destination for all lovers of Asian cuisine. All food can be taken away and enjoyed while strolling around Beirut’s Kantari neighborhood',
            'rate' => '4',
            'country_id' => 1,
        ]);
        $Jai->images()->createMany([
            ['file_name' => "Jaï1.jpg"],
            ['file_name' => "Jaï2.png"],
            ['file_name' => "Jaï3.png"],
            ['file_name' => "Jaï4.png"],
        ]);
        $EmShrief = Restaurant::create([
            'name' => 'Em Shrief',
            'longtiude' => '35.50076273098912',
            'latitude' => '33.900271833041096',
            'details' =>  'In the Achrafieh district, Em Sherif restaurant is fine dining of the old world. The decor recalls that of a lavish, antique mansion in the Oriental style. A seasonal menu encompasses local delicacies from manakish zaatar to lahme mechwiye',
            'rate' => '5',
            'country_id' => 1,
        ]);
        $EmShrief->images()->createMany([
            ['file_name' => "Em Sherif.jpg"],
            ['file_name' => "Em Sherif2.jpg"],
            ['file_name' => "Em Sherif3.jpg"],
            ['file_name' => "Em Sherif4.jpg"],
            ['file_name' => "Em Sherif5.jpg"],
            ['file_name' => "Em Sherif7.jpg"],
            ['file_name' => "Em Sherif8.jpg"],
            ['file_name' => "Em Sherif10.jpg"],
            ['file_name' => "Em Sherif11.jpg"],
            ['file_name' => "Em Sherif12.jpg"],
        ]);
        $AppetitoTrattoria = Restaurant::create([
            'name' => 'Appetito Trattoria',
            'longtiude' => '35.4781816',
            'latitude' => '33.8964876',
            'details' =>  'This affable restaurant is one of the best places for Italian cuisine in the city. The venue has a cosy, slightly ramshackle quality – fulfilling the promise of the "trattoria" in the name. All the hallmarks of the traditional Italian eaterie are present and correct, from red and white chequered tablecloths to the paintings of the Tuscan countryside that adorn the walls. The menu is packed with genuine Italian "soul food", prepared freshly and authentically. Alongside the usual suspects (pizzas, linguini), the menu throws up some less classic dishes – leave space for the quirky pizza di mele, a sort of cross between a pizza and a tarte tatin. ',
            'rate' => '4',
            'country_id' => 1,
        ]);
        $AppetitoTrattoria->images()->createMany([
            ['file_name' => "Appetito Trattoria.png"],
            ['file_name' => "Appetito Trattoria2.png"],
            ['file_name' => "Appetito Trattoria3.png"],
            ['file_name' => "Appetito Trattoria4.png"],
            ['file_name' => "Appetito Trattoria6.png"],
            ['file_name' => "Appetito Trattoria7.png"],
            ['file_name' => "Appetito Trattoria8.png"],
        ]);
        $Tawlet = Restaurant::create([
            'name' => 'Tawlet',
            'longtiude' => '35.5260571',
            'latitude' => '33.8971136',
            'details' =>  'Tawlet has a great concept behind it. A branch of Souk el Tayeb, a market where small-scale farmers from every region of Lebanon come together to sell their produce, Tawlet offers typical Lebanese food made with fresh ingredients brought by the farmers themselves, served as a buffet. But in addition to the high-quality food, Tawlet’s most characteristic feature is that every day, a different guest chef from a different village in Lebanon cooks a lunch based on the culinary delicacies of his or her area, making Tawlet the venue to sample Lebanese cuisine in all its regional variations. At Tawlet, food reflects culture and for those who really want to get in touch with Lebanon’s culinary culture, the restaurant also offers cooking classes.',
            'rate' => '4',
            'country_id' => 1,
        ]);
        $Tawlet->images()->createMany([
            ['file_name' => "Tawlet.jpg"],
            ['file_name' => "Tawlet2.jpg"],
            ['file_name' => "Tawlet3.jpg"],
            ['file_name' => "Tawlet4.jpg"],
            ['file_name' => "Tawlet5.jpg"],
            ['file_name' => "Tawlet6.jpg"],
        ]);
        $TMarbouta = Restaurant::create([
            'name' => 'T Marbouta',
            'longtiude' => '35.4830318',
            'latitude' => '33.8957816',
            'details' =>  'Tucked away in the corner of a shopping plaza, this socially focused cafe and restaurant is quite a surprise to discover, with its buzzy garden atrium. Good-quality food is served in generous portions at a decent price; the meat platters come with pita, chips and hummus and are a substantial feed by themselves. Service is very scatty.',
            'rate' => '4',
            'country_id' => 1,
        ]);
        $TMarbouta->images()->createMany([
            ['file_name' => "T Marbouta.jpg"],
            ['file_name' => "T Marbouta2.png"],
            ['file_name' => "T Marbouta3.png"],
            ['file_name' => "T Marbouta4.png"],
            ['file_name' => "T Marbouta5.png"],
            ['file_name' => "T Marbouta6.jpg"],
            ['file_name' => "T Marbouta7.jpg"],
        ]);
        // eof lebanon
        // italy 
        $ClubdelDoge = Restaurant::create([
            'name' => 'Club del Doge',
            'longtiude' => '12.333442',
            'latitude' => '45.4316922',
            'details' =>  "Situated along the Grand Canal in the luxurious Gritti Palace hotel, Club del Doge Restaurant is the place to go for a Venetian meal with a view. Condé Nast Traveler voted it one of the world's most spectacular waterfront restaurants. Make sure to plan your visit between May and October to enjoy the terrace.",
            'rate' => 'three Michelin stars',
            'country_id' => 2,
        ]);
        $ClubdelDoge->images()->createMany([
            ['file_name' => "Club del Doge1.jpg"],
            ['file_name' => "Club del Doge2.jpg"],
            ['file_name' => "Club del Doge3.jpg"],
            ['file_name' => "Club del Doge4.jpg"],
            ['file_name' => "Club del Doge5.jpg"],
            ['file_name' => "Club del Doge6.jpg"],

        ]);
        $DaVittorio = Restaurant::create([
            'name' => 'Da Vittorio (Brusaporto)',
            'longtiude' => '9.7720184',
            'latitude' => '45.6774187',
            'details' =>  "Da Vittorio restaurant, located in the Da Vittorio Relais & Chateaux resort, has earned three Michelin stars for its cuisine. Some of the ingredients you'll find on the menu include meat from Piedmont and langoustines from Mazara del Vallo.",
            'rate' => 'three Michelin stars',
            'country_id' => 2,
        ]);
        $DaVittorio->images()->createMany([
            ['file_name' => "Da Vittorio1.jpg"],
            ['file_name' => "Da Vittorio2.jpg"],
            ['file_name' => "Da Vittorio3.jpg"],
        ]);
        $EnotecaPinchiorri = Restaurant::create([
            'name' => 'Enoteca Pinchiorri (Florence)',
            'longtiude' => '11.2623411',
            'latitude' => '43.7699524',
            'details' =>  'Chef Annie Féolde is the first woman in Italy to earn three Michelin stars. Her innovative Italian cooking is heightened by an incredible wine selection by sommelier Giorgio Pinchiorri. Dishes range from a risotto of fregola, pumpkin flowers, saffron, and prawns to a rack of lamb crusted with dried fruit.',
            'rate' => 'three Michelin stars',
            'country_id' => 2,
        ]);
        $EnotecaPinchiorri->images()->createMany([
            ['file_name' => "Enoteca Pinchiorri1.jpg"],
            ['file_name' => "Enoteca Pinchiorri2.jpg"],
            ['file_name' => "Enoteca Pinchiorri3.jpg"],
        ]);
        $ilDesco = Restaurant::create([
            'name' => 'il desco (verona)',
            'longtiude' => '10.9999599',
            'latitude' => '45.4416842',
            'details' =>  "Il Desco made superstar chef Mario Batali's list of places to eat in Italy. Chef Elio Rizzo and his son Matteo work together in the kitchen to create beautiful dishes made with traditional Italian ingredients.",
            'rate' => 'Michelin Star',
            'country_id' => 2,
        ]);
        $ilDesco->images()->createMany([
            ['file_name' => "il desco1.jpg"],
            ['file_name' => "il desco2.jpg"],
            ['file_name' => "il desco3.jpg"],
            ['file_name' => "il desco4.jpg"],
            ['file_name' => "il desco5.jpg"],
        ]);
        $LaPergola = Restaurant::create([
            'name' => 'La Pergola (Rome)',
            'longtiude' => '12.4466625',
            'latitude' => '41.9189349',
            'details' =>  "Located in the Waldorf Astoria's esteemed Rome Cavalieri hotel, La Pergola is the only restaurant in Rome with a three Michelin star rating. In addition to seven- and nine-course tasting menus, and a water menu with 29 selections, there's also a cheese cart. ",
            'rate' => 'three Michelin stars',
            'country_id' => 2,
        ]);
        $LaPergola->images()->createMany([
            ['file_name' => "La Pergola1.jpg"],
            ['file_name' => "La Pergola2.jpg"],
            ['file_name' => "La Pergola3.jpg"],
            ['file_name' => "La Pergola4.jpg"],
        ]);
        // eof italy
        // USA
        $CarminesItalian  = Restaurant::create([
            'name' => "Carmine's Italian ",
            'longtiude' => '-73.98648233863426',
            'latitude' => '40.75790434244823',
            'details' =>  "Carmine’s is a family style restaurant offering exceptional value to its guests through the many dishes of Southern Italian cuisine.
            Restaurateur Artie Cutler crafted Carmine’s with a singular vision; bringing his guests “wow-factor” sized portions and making any meal feel like an Italian American wedding feast.
            Platters of homestyle antipasto, pasta, decadent seafood or meat entrees, and of course homemade desserts are all staples at Carmine’s, meant for sharing amongst friends and family.
            When great food and wine are supported by friendly and knowledgeable service, the results are magic - we want every day to feel like a Sunday afternoon at Grandma’s!
            Carmine’s first location opened August 14, 1990 at 2450 Broadway on the Upper West Side of Manhattan.
            The classic decor of this flagship Carmine’s evokes the image of marquee New York restaurants that made this city into what it is today.
            With elements drawn from America’s “Golden Age”, Carmine’s has the quintessential NYC feel, resonating with its customers and looking like it has always been a part of the Upper West Side- and always will be!
            The interior style at Carmine’s started a trend in Italian dining rooms around the country, and the eclectic, spirited environment has become the perfect place for family celebrations.
            The restaurant was an immediate hit.
            Long lines of hungry diners became a nightly occurrence on Upper Broadway as word got out that something exciting- and tasty- was happening.
            The great food spoke for itself, but customers also marveled at the huge portions available at reasonable prices.
            Each dining experience was enhanced by the long lineup of cocktails spilling over the edge of enormous glasses, and a wine list featuring great value and a strong selection of varieties from Italy and the rest of the world.
            The Upper West Side could not get enough, and Carmine’s became the New York institution it is to this day. ",
            'rate' => '4.5 out of 5',
            'country_id' => 3,
        ]);
        $CarminesItalian->images()->createMany([
            ['file_name' => "Carmine_s Italian.jpg"],
            ['file_name' => "Carmine_s Italian2.jpg"],
            ['file_name' => "Carmine_s Italian3.jpg"],
            ['file_name' => "Carmine_s Italian4.jpg"],
            ['file_name' => "Carmine_s Italian5.jpg"],
            ['file_name' => "Carmine_s Italian6.jpg"],
            ['file_name' => "Carmine_s Italian7.jpg"],
            ['file_name' => "Carmine_s Italian8.jpg"],
            ['file_name' => "Carmine_s Italian9.jpg"],
            ['file_name' => "Carmine_s Italian10.jpg"],
        ]);
        $Daniel  = Restaurant::create([
            'name' => "Daniel",
            'longtiude' => '-73.96757690218017',
            'latitude' => '40.766982982409765',
            'details' =>  "a New French restaurant located at 60 East 65th Street (between Madison Avenue and Park Avenue), on the Upper East Side in Manhattan, in New York City.
            It is owned and run by French celebrity chef Daniel Boulud, New York's longest-reigning four-star chef.
            The restaurant moved to its current location in early 1999.
            Since 2013, Ghaya Oliveira has been the executive pastry chef.
            Since 2002, Daniel has been a recipient of the Wine Spectator Grand Award.
            In 2013, Zagats gave it a food rating of 28 (the second-highest rating on the Upper East Side), and decor and service ratings of 28 (each the highest on the Upper East Side).
            It ranked it the 4th-best restaurant in New York City.[9]
            In 2012, The Infatuation gave it a rating of 8.9/10 and included it on their 2020 list of The Best Restaurants on the Upper East Side.
            It was one of only five restaurants awarded four stars by The New York Times,however it was downgraded to three stars by restaurant critic Pete Wells.
            It is two-star rated by the Michelin Guide.
             In October 2019, Forbes magazine rated Daniel 'top-ranked restaurant in America'.",
            'rate' => '4.6  out of 5',
            'country_id' => 3,
        ]);
        $Daniel->images()->createMany([
            ['file_name' => "Daniel.jpg"],
            ['file_name' => "Daniel2.jpg"],
            ['file_name' => "Daniel3.jpg"],
            ['file_name' => "Daniel4.jpg"],
            ['file_name' => "Daniel5.jpg"],
            ['file_name' => "Daniel6.jpg"],
            ['file_name' => "Daniel7.jpg"],
            ['file_name' => "Daniel8.jpg"],
            ['file_name' => "Daniel9.jpg"],
            ['file_name' => "Daniel10.jpg"],
        ]);
        $GWFins  = Restaurant::create([
            'name' => "GW Fins",
            'longtiude' => '-90.06888151534146',
            'latitude' => '29.95619699012669',
            'details' =>  "From the day GW Fins opened its doors in 2001, our Chefs have been recognized for their discerning standards … only selecting the absolute most pristine fish from all corners of the globe to serve to our guests.
            Locally owned by Gary Wollerman and Chef Tenney Flynn, their impeccable attention to detail has earned them a reputation as being two of the most meticulous restaurant owners in this culinary capital.
            Chef Tenney Flynn has become known as one of the country’s foremost seafood authorities, being referred to as “the fishmonger czar of the South” by The Wall Street Journal, and is a nationally-recognized expert on Gulf Seafood.
            GW Fins’ menu philosophy is simple … Nature writes our Menu.
            Chef/Owner Tenney Flynn and Executive Chef Michael Nelson locate the highest quality fish from all parts of the world to augment the bounty of wonderful seafood they locally source from the Gulf of Mexico.
            Using seasonal ingredients and subtle culinary techniques, the wonderful flavors and textures of each variety of fish are showcased in elegant simplicity.
            Working on a daily basis with dozens of trusted purveyors from local and international regions enables our chefs the ability to ensure that every variety of seafood is served at its seasonal peak.
            Once the chefs receive flawless whole fish their keen butchering skills are employed.  Masters of their craft, the chefs work on a specially created refrigerated table, enabling the fish to consistently maintain a cold temperature, insuring optimal freshness.
            Based on the variety of fish they receive each day, the chefs create the perfect presentation to bring out the natural flavors and textures of each type of fish.
            This continually evolving variety of seafood is why GW Fins prints our menu every afternoon!
            The wine list at GW Fins, which has been awarded the prestigious Wine Spectator Award of Excellence every year since 2002, features more than 100 boutique and large production wines from California, France, Italy, Spain and Argentina, 50 of which are available by the glass.
            Our knowledgeable staff is happy to recommend the perfect wine to complement your dining selections.
            The energy in GW Fins’ dining room is constantly palpable. 
            The contemporary space is at once relaxed and exhilarating, creating a magnificent dining experience",
            'rate' => '4.8  out of 5',
            'country_id' => 3,
        ]);
        $GWFins->images()->createMany([
            ['file_name' => "GW Fins.jpg"],
            ['file_name' => "GW Fins2.jpg"],
            ['file_name' => "GW Fins3.jpg"],
            ['file_name' => "GW Fins4.jpg"],
            ['file_name' => "GW Fins5.jpg"],
            ['file_name' => "GW Fins6.jpg"],
            ['file_name' => "GW Fins7.jpg"],
            ['file_name' => "GW Fins8.jpg"],
            ['file_name' => "GW Fins9.jpg"],
            ['file_name' => "GW Fins10.jpg"],
        ]);
        $HallsChophouse  = Restaurant::create([
            'name' => "Halls Chophouse",
            'longtiude' => '-79.9379585460243',
            'latitude' => '32.78931484833814',
            'details' =>  "Halls Chophouse is American-Fine Dining, serving prime steaks, Lowcountry and fresh seafood specialties in an energetic, visually striking environment.
            Complemented by signature desserts, an extensive wine list, a vibrant bar and innovative, rich decor true to old-world steakhouses, Halls Chophouse is the latest restaurant offering in the heart of Charleston's Upper King Street design and dining district.
            A traditional American steakhouse with superior service and a knowledgeable staff, Halls Chophouse offers a classic and comfortable dining experience that will entice our guests to visit and enjoy time after time.
            We offer 2 private dining rooms for groups of up to 32 guests each with audio visual capabilities.",
            'rate' => '4.8 out of 5',
            'country_id' => 3,
        ]);
        $HallsChophouse->images()->createMany([
            ['file_name' => "Halls Chophouse, Charleston.jpg"],
            ['file_name' => "Halls Chophouse, Charleston2.jpg"],
            ['file_name' => "Halls Chophouse, Charleston3.jpg"],
            ['file_name' => "Halls Chophouse, Charleston4.jpg"],
            ['file_name' => "Halls Chophouse, Charleston5.jpg"],
            ['file_name' => "Halls Chophouse, Charleston6.jpg"],
            ['file_name' => "Halls Chophouse, Charleston7.jpg"],
            ['file_name' => "Halls Chophouse, Charleston8.jpg"],
            ['file_name' => "Halls Chophouse, Charleston9.jpg"],
            ['file_name' => "Halls Chophouse, Charleston10.jpg"],
        ]);
        //eof USA 
        // Morocco

        $AlFassia  = Restaurant::create([
            'name' => "Al Fassia",
            'longtiude' => '-8.014510071061578',
            'latitude' => '31.637021410777535',
            'details' =>  "Al Fassia, the internationally famous à la carte restaurant in Marrakech, has now developed its business further by opening this luxury hotel of the same name near the Aguedal gardens.
            Al Fassia Aguedal boasts modern facilities, traditional architecture and magnificent views of the Atlas Mountains.
            The 3 patios with fountains give a feeling of space.
            The guest rooms include free wired internet access, en suite facilities, satellite TV, minibar and a work desk.
            During your stay, enjoy a candlelit meal in the restaurant.
            Savour regional Moroccan specialities prepared with fresh ingredients, and international wines.
            Free wired internet access is available in the public areas.
            During your stay, stroll in the nearby gardens and visit the snow-peaked mountains.
            Just a short walk away you will find a cinema and shopping complex.",
            'rate' => '4.3 out of 5',
            'country_id' => 4,
        ]);
        $AlFassia->images()->createMany([
            ['file_name' => "Al Fassia1.jpg"],
            ['file_name' => "Al Fassia2.jpg"],
            ['file_name' => "Al Fassia3.jpg"],
            ['file_name' => "Al Fassia4.jpg"],
            ['file_name' => "Al Fassia5.jpg"],
            ['file_name' => "Al Fassia6.jpg"],
            ['file_name' => "Al Fassia7.jpg"],
            ['file_name' => "Al Fassia8.jpg"],
            ['file_name' => "Al Fassia9.jpg"],
            ['file_name' => "Al Fassia10.jpg"],
            ['file_name' => "Al Fassia11.jpg"],
        ]);
        $DarZellij  = Restaurant::create([
            'name' => "Dar Zellij",
            'longtiude' => '-7.992675553414348',
            'latitude' => '31.637981178894773',
            'details' =>  "Once upon a time Dar Zellij was a guesthouse.
            In fact, it was one of the first traditional houses to be converted into a maison d’hote and was thus partly responsible for kick-starting the whole ‘riad boom’ that has infected Marrakech ever since.
            In contrast with many other ‘designer’ spots, Dar Zellij was a spartan affair with 17th-century detailing left nakedly on display rather than being restored by modern artisans.
            The fine stucco detailing, cedarwood ceilings, decorated doors and eponymous tiling are still the big draw now, even though the place is run as a restaurant.
            The main courtyard is an appealing blend of whitewashed pillars and walls, and red carpets and rose petals.
            Aside from the main dining area there’s a series of more intimate alcoves, rooms and patios to dine in, as well as a charming roof terrace where you can enjoy an aperitif.
            The menu is resolutely Moroccan – pastilles, tajines and couscous galore – and comes in the shape of a couple of fixed menu options (350dh/400dh), and à la carte.
            Musicians play lively Arabo-Andalucian music nightly.",
            'rate' => '4.5 out of 5',
            'country_id' => 4,
        ]);
        $DarZellij->images()->createMany([
            ['file_name' => "Dar Zellij1.jpg"],
            ['file_name' => "Dar Zellij2.jpg"],
            ['file_name' => "Dar Zellij3.jpg"],
            ['file_name' => "Dar Zellij4.jpg"],
            ['file_name' => "Dar Zellij5.jpg"],
            ['file_name' => "Dar Zellij6.jpg"],
            ['file_name' => "Dar Zellij7.jpg"],
            ['file_name' => "Dar Zellij8.jpg"],
            ['file_name' => "Dar Zellij9.jpg"],
            ['file_name' => "Dar Zellij10.jpg"],
        ]);
        $LaGrandeTableFrançaise  = Restaurant::create([
            'name' => "La Grande Table Française",
            'longtiude' => '-7.998881988939713',
            'latitude' => '31.62546405340619',
            'details' =>  "This is the only hotel in the world offering that unique concept of private Riads within one luxury complex.
            Each Riad is uniquely decorated in regard of Moroccan authenticity and has a distinctive character where beautiful fabrics of silks and brocades, original and contemporary work of art compliment the finest custom made furniture.
            With a fascinating fusion between tradition and modernity, the Riad roofs are equipped with rain sensors and automatically close at the first drop of rain.
            La Grande Table Française offers a creative and contemporary culinary experience.
            Meals are inspired by Moroccan traditions and by using local materials.
            The signature chef of the restaurant is Yannick Alléno who was honoured as Chef of the Year 2015 by the leading French restaurant guide Gault&Millau.
            One of the most impressive qualities of the Royal Mansour is its gastronomic offering.
            The hotel has three restaurants; La Table offers an informal choice for those looking for simplicity.
             La Grande Table Marocaine is a place synonymous with sublime Moroccan flavours that are served in a traditional ambiance, combined with refinedness and flavourful servings.",
            'rate' => '4.5 out of 5',
            'country_id' => 4,
        ]);
        $LaGrandeTableFrançaise->images()->createMany([
            ['file_name' => "la grande table francaise1.jpg"],
            ['file_name' => "la grande table francaise2.jpg"],
            ['file_name' => "la grande table francaise3.jpg"],
            ['file_name' => "la grande table francaise4.jpg"],
            ['file_name' => "la grande table francaise5.jpg"],
            ['file_name' => "la grande table francaise6.jpg"],
            ['file_name' => "la grande table francaise7.jpg"],
            ['file_name' => "la grande table francaise8.jpg"],
            ['file_name' => "la grande table francaise9.jpg"],
            ['file_name' => "la grande table francaise10.jpg"],
        ]);
        $LaTablebyMadada  = Restaurant::create([
            'name' => "La Table by Madada",
            'longtiude' => '-9.770650038634264',
            'latitude' => '31.512078041770195',
            'details' =>  "In a former warehouse of the sultan's Jewish traders, this is one of three Madada brand businesses in Essaouira.
            The restaurant and bar offers fresh seafood prepared imaginatively and according to the seasons.
            Try the monkfish tagine with caramelized apples or the lobster pastilla. You can also pop in to enjoy tapas and a cocktail.
            There is live music on the weekends.
            While pricier than other establishments in the area, Madada's enduring popularity with residents of the local upscale hotels proves it's worth every penny.
            Be sure to reserve a table ahead of time, especially in summer.
            Restored carefully with respect for tradition and heritage, la 'Table Madada' is a former warehouse where the Jewish traders, 'the 'kings traders', stored carob.
            This fruit of the carob tree, a tree in the legume family which grows in the region of Essaouira, was then exported via the port towards Europe.
            The seeds of the carob have a strangely regular weight, which gave the name to the unit of measure 'carat'.
            Its seeds but also the sap of carob tree, is nowadays used in the form of a stabilizer found in sweets and ice cream.
            Originally a sub-Saharan slave at the service of privileged families, the dada in time became a cook, nanny and confidante.
            Loved and feared at the same time, she represented the guard of the home and passed on her traditional cuisine.
            Some of these dadas became famous for having a particular dish",
            'rate' => '4.6 out of 5',
            'country_id' => 4,
        ]);
        $LaTablebyMadada->images()->createMany([
            ['file_name' => "La Table by Madada, Essaouira1.jpg"],
            ['file_name' => "La Table by Madada, Essaouira2.jpg"],
            ['file_name' => "La Table by Madada, Essaouira3.jpg"],
            ['file_name' => "La Table by Madada, Essaouira4.jpg"],
            ['file_name' => "La Table by Madada, Essaouira5.jpg"],
            ['file_name' => "La Table by Madada, Essaouira6.jpg"],
            ['file_name' => "La Table by Madada, Essaouira7.jpg"],
            ['file_name' => "La Table by Madada, Essaouira8.jpg"],
            ['file_name' => "La Table by Madada, Essaouira9.jpg"],
            ['file_name' => "La Table by Madada, Essaouira10.jpg"],
        ]);
        //eof Morocco
        // Czech
        $AmiciPizzaBurgers = Restaurant::create([
            'name' => "Amici Pizza & Burgers",
            'longtiude' => '16.595126632992287',
            'latitude' => '49.224188798693326',
            'details' =>  "PRICE RANGE
            €2 - €7
            CUISINES
            Italian, American, Pizza, Fast Food, European
            SPECIAL DIETS
            Vegetarian Friendly, Vegan Options
            MEALS
            Lunch, Dinner
            FEATURES
            Delivery, Takeout, Seating, Wine and Beer, Accepts Mastercard, Accepts Visa, Digital Payments, Free Wifi, Table Service",
            'rate' => '4.5 out of 5',
            'country_id' => 5,
        ]);
        $AmiciPizzaBurgers->images()->createMany([
            ['file_name' => "Amici Pizza _ Burgers (Brno-Kr. Pole)1.jpg"],
            ['file_name' => "Amici Pizza _ Burgers (Brno-Kr. Pole)2.jpg"],
            ['file_name' => "Amici Pizza _ Burgers (Brno-Kr. Pole)3.jpg"],
            ['file_name' => "Amici Pizza _ Burgers (Brno-Kr. Pole)4.jpg"],
            ['file_name' => "Amici Pizza _ Burgers (Brno-Kr. Pole)5.jpg"],
            ['file_name' => "Amici Pizza _ Burgers (Brno-Kr. Pole)6.jpg"],
        ]);
        $borgoAgnese = Restaurant::create([
            'name' => "borgo agnese",
            'longtiude' => '16.601611117651405',
            'latitude' => '49.19170467697779',
            'details' =>  "PRICE RANGE
            €10 - €51
            CUISINES
            Mediterranean, European, Central European
            SPECIAL DIETS
            Vegetarian Friendly, Vegan Options, Gluten Free Options
            MEALS
            Lunch, Dinner
            FEATURES
            Reservations, Outdoor Seating, Private Dining, Seating, Parking Available, Validated Parking, Highchairs Available, Wheelchair Accessible, Serves Alcohol, Full Bar, Free Wifi, Accepts Credit Cards, Table Service",
            'rate' => '4.5 out of 5',
            'country_id' => 5,
        ]);
        $borgoAgnese->images()->createMany([
            ['file_name' => "Borgo Agnese1.jpg"],
            ['file_name' => "Borgo Agnese2.jpg"],
            ['file_name' => "Borgo Agnese3.jpg"],
            ['file_name' => "Borgo Agnese4.jpg"],
            ['file_name' => "Borgo Agnese5.jpg"],
        ]);
        $bageLounge = Restaurant::create([
            'name' => "bage Lounge",
            'longtiude' => '12.868384244597259',
            'latitude' => '50.2301498188915',
            'details' =>  "PRICE RANGE
            €2 - €10
            CUISINES
            Cafe, Street Food
            SPECIAL DIETS
            Vegetarian Friendly, Vegan Options, Gluten Free Options
            MEALS
            Breakfast, Lunch, Dinner, Drinks
            FEATURES
            Delivery, Takeout, Reservations, Outdoor Seating, Seating, Television, Highchairs Available, Wheelchair Accessible, Serves Alcohol, Wine and Beer, Accepts American Express, Accepts Mastercard, Accepts Visa, Digital Payments, Free Wifi, Accepts Discover, Accepts Credit Cards, Table Service",
            'rate' => '5 out of 5',
            'country_id' => 5,
        ]);
        $bageLounge->images()->createMany([
            ['file_name' => "Bagel Lounge1.jpg"],
            ['file_name' => "Bagel Lounge2.jpg"],
            ['file_name' => "Bagel Lounge3.jpg"],
            ['file_name' => "Bagel Lounge4.jpg"],
            ['file_name' => "Bagel Lounge5.jpg"],
        ]);
        $LeMarche = Restaurant::create([
            'name' => "Le Marche",
            'longtiude' => '12.883581715762185',
            'latitude' => '50.21833154454528',
            'details' =>  "PRICE RANGE
            €4 - €41
            CUISINES
            French, Seafood, European, Contemporary
            SPECIAL DIETS
            Vegetarian Friendly, Gluten Free Options
            MEALS
            Lunch, Dinner, Drinks
            FEATURES
            Gift Cards Available, Reservations, Outdoor Seating, Seating, Parking Available, Highchairs Available, Serves Alcohol, Free Wifi, Accepts Credit Cards, Table Service, Street Parking, Wine and Beer, Digital Payments",
            'rate' => '4.5 out of 5',
            'country_id' => 5,
        ]);
        $LeMarche->images()->createMany([
            ['file_name' => "Le Marché1.jpg"],
            ['file_name' => "Le Marché2.jpg"],
            ['file_name' => "Le Marché3.jpg"],
            ['file_name' => "Le Marché4.jpg"],
            ['file_name' => "Le Marché5.jpg"],
            ['file_name' => "Le Marché6.jpg"],
        ]);
        $charlesbridgerestaurant = Restaurant::create([
            'name' => "charles bridge restaurant",
            'longtiude' => '14.4138490041228',
            'latitude' => '50.085998991930495',
            'details' =>  "The entrance is located in the busy passage between Kžízovnické namesti and Novotného Lávka. Make your way to us and you will find a stylish environment, a quiet private area by the water and friendly staff. Our main goal is to have satisfied customers from tourists, but equally welcome Czech customers with a perfectly prepared meal from fresh and quality ingredients. Customers can also enjoy the atmosphere of the historical part of Prague right on the water on a pontoon with a view of Charles Bridge or in the historical hall of the restaurant. The restaurant serves international and traditional Czech cuisine. In addition to the permanent menu we also prepare seasonally themed dishes. A wide range of hot and cold drinks, delicious coffee and homemade desserts are on offer. All this is complemented by a wide range of Czech and foreign wines, which the staff will be happy to recommend. The wine list is varied with something to suit everyone's palette.
            ",
            'rate' => '4.2 out of 5',
            'country_id' => 5,
        ]);
        $charlesbridgerestaurant->images()->createMany([
            ['file_name' => "Charles Bridge Restaurant1.jpg"],
            ['file_name' => "Charles Bridge Restaurant2.jpg"],
            ['file_name' => "Charles Bridge Restaurant3.jpg"],
            ['file_name' => "Charles Bridge Restaurant4.jpg"],
            ['file_name' => "Charles Bridge Restaurant5.jpg"],
        ]);
        //eof Czech
        // Canada
        $‪AbsintheBistro‬‏ = Restaurant::create([
            'name' => "‪Absinthe Bistro‬‏",
            'longtiude' => '-123.0692349688585',
            'latitude' => '49.276251969984244',
            'details' =>  " Absinthe Bistro offers modern and classic french cooking on Commercial Drive
            PRICE RANGE
            €17 - €27
            SPECIAL DIETS
            Gluten Free Options
            MEALS
            Dinner
            CUISINES
            French, European
            FEATURES
            Gift Cards Available, Reservations, Outdoor Seating, Wheelchair Accessible, Serves Alcohol, Accepts Credit Cards, Street Parking, Wine and Beer, BYOB, Non-smoking restaurants",
            'rate' => '4.5 out of 5',
            'country_id' => 6,
        ]);
        $‪AbsintheBistro‬‏->images()->createMany([
            ['file_name' => "Absinthe Bistro.jpg"],
            ['file_name' => "Absinthe Bistro2.jpg"],
            ['file_name' => "Absinthe Bistro3.jpg"],
            ['file_name' => "Absinthe Bistro4.jpg"],
            ['file_name' => "Absinthe Bistro5.jpg"],
            ['file_name' => "Absinthe Bistro6.jpg"],
        ]);
        $Damas = Restaurant::create([
            'name' => "‪Damas‬‏",
            'longtiude' => '-73.61328388405849',
            'latitude' => '45.522762901911214',
            'details' =>  "Damas, an upscale Syrian restaurant located on Avenue Van Horne. You will be charmed by the Oriental decor and most impressed by their refined and rich cuisine. This modern but authentic gastronomy will make your mouth water with all their specialties starting from the fattouche, the appetizing mouth-melting lamb leg to the cherry kebab. The blend of aromas and the tasting of the delicious preparations will make the experience worthwhile.
            ",
            'rate' => '4.5 out of 5',
            'country_id' => 6,
        ]);
        $Damas->images()->createMany([
            ['file_name' => "Damas Restaurant.jpg"],
            ['file_name' => "Damas Restaurant2.jpg"],
            ['file_name' => "Damas Restaurant3.jpg"],
            ['file_name' => "Damas Restaurant4.jpg"],
            ['file_name' => "Damas Restaurant5.jpg"],
            ['file_name' => "Damas Restaurant6.jpg"],
        ]);
        $goodfellasWoodOvenPizza = Restaurant::create([
            'name' => "goodfellas wood oven pizza‬‏",
            'longtiude' => '-79.87719586864458',
            'latitude' => '43.51815076217271',
            'details' =>  "Goodfellas is a fully licensed restaurant concept that specializes in the preparation of authentic Neapolitan-style wood oven pizza, salad, and Italian inspired dishes. Our traditional home made recipes are created with a rustic Italian 'backyard' flavour only found south of Rome. More than just a pizza, Goodfellas it's an exceptional food experience to be shared with family or friends. Whether it's a quick lunch or an evening out, Goodfellas will romance you with our exclusive Italian wines and dishes that made southern Italy infamous",
            'rate' => '4.5 out of 5',
            'country_id' => 6,
        ]);
        $goodfellasWoodOvenPizza->images()->createMany([
            ['file_name' => "Goodfellas Wood Oven Pizza.jpg"],
            ['file_name' => "Goodfellas Wood Oven Pizza2.jpg"],
            ['file_name' => "Goodfellas Wood Oven Pizza3.jpg"],
            ['file_name' => "Goodfellas Wood Oven Pizza4.jpg"],
            ['file_name' => "Goodfellas Wood Oven Pizza5.jpg"],
        ]);
        $saintHoublonqQartierLatin = Restaurant::create([
            'name' => "saint houblon quartier latin‬‏",
            'longtiude' => '-73.56217791104501',
            'latitude' => '45.514950481914994',
            'details' =>  "PRICE RANGE
            €5 - €21
            SPECIAL DIETS
            Vegetarian Friendly, Vegan Options, Gluten Free Options
            MEALS
            Lunch, Dinner, Brunch, Drinks
            CUISINES
            Bar, Pub, Brew Pub, Fusion
            FEATURES
            Reservations, Outdoor Seating, Seating, Serves Alcohol, Full Bar, Free Wifi, Accepts Credit Cards, Table Service, Wine and Beer, Digital Payments",
            'rate' => '4.5 out of 5',
            'country_id' => 6,
        ]);
        $saintHoublonqQartierLatin->images()->createMany([
            ['file_name' => "Saint-Houblon Quartier Latin.jpg"],
            ['file_name' => "Saint-Houblon Quartier Latin2.jpg"],
            ['file_name' => "Saint-Houblon Quartier Latin3.jpg"],
            ['file_name' => "Saint-Houblon Quartier Latin4.jpg"],
            ['file_name' => "Saint-Houblon Quartier Latin5.jpg"],
            ['file_name' => "Saint-Houblon Quartier Latin6.jpg"],
        ]);
        $theTiltedDogPubKitchen = Restaurant::create([
            'name' => "the tilted dog pub & kitchen‬‏",
            'longtiude' => '-79.36754292262324',
            'latitude' => '43.66302436827946',
            'details' =>  "In the heart of Cabbagetown, this local favorite offers the choice of an array of classic dishes for lunch and dinner - burger, po' boy, steak frites, fajitas and Burritos, pastas and popular pub grub, and of course an amazing Craft Beer Selection!. And weekend brunch offers both egg and savory options. Nightly entertainment includes Trivia Night on Wednesday, live music on Thursdays, and Sunday Jazz.",
            'rate' => '4.5 out of 5',
            'country_id' => 6,
        ]);
        $theTiltedDogPubKitchen->images()->createMany([
            ['file_name' => "The Tilted Dog Pub _ Kitchen.jpg"],
            ['file_name' => "The Tilted Dog Pub _ Kitchen2.jpg"],
            ['file_name' => "The Tilted Dog Pub _ Kitchen3.jpg"],
            ['file_name' => "The Tilted Dog Pub _ Kitchen4.jpg"],
            ['file_name' => "The Tilted Dog Pub _ Kitchen5.jpg"],
        ]);
        // eof Canada

    }
}