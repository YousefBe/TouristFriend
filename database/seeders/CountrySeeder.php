<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lebanon = Country::create([
            'name' => 'Lebanon',
            'longtiude' =>  "35.8964804",
            'latitude' => " 33.8606972",
            'weather' => "Average temperatures in Lebanon vary greatly. Considering humidity, temperatures feel nice most of the year, excluding some hot weeks in the summer, with a low chance of precipitation most of the year. The area is somewhat temperate — in the 53rd percentile for pleasant weather — compared to tourist destinations worldwide. If you’re looking for the very warmest time to visit Lebanon, the hottest months are August, July, and then September. The warmest time of year is generally early August where highs are regularly around 92.3°F (33.5°C) with temperatures rarely dropping below 73.4°F (23°C) at night.",
            'details' => 'Lebanon is a very old nation rich in natural beauty. It provides charming seashores and internal mountainous area with fresh surroundings. Accommodations vary from extravagance establishments to mid-range hotels providing to families. Leisure can be set up in these hotels for both children and parents. Transportations in Lebanon are easy to access; buses and taxis are all over the place. Lebanon is famous for its old and new attractions for example museums, grottos and ski resorts. Cities as well are attractions to tourists; in each city there is something new to learn about and experience.',
            'contnent' => 'Africa',
            'currency' => 'The Lebanese Pound',
            'population' => 'almost 7 milion ',
            'budget' => 'average L£2,318,026 ($1,400) per week',
            'budget_flag' => 'medium',
            'weather_flag' => 'moderate',
        ]);
        $lebanon->images()->createMany([
            ['file_name' => 'lebanon0.jpg'],
            ['file_name' => 'lebanon1.jpg'],
            ['file_name' => 'lebanon2.png'],
            ['file_name' => 'lebanon3.png'],
            ['file_name' => 'lebanon4.png'],
            ['file_name' => 'lebanon5.png'],
            ['file_name' => 'lebanon6.jpg'],
            ['file_name' => 'lebanon8.png'],
        ]);

        // italy
        $italy = Country::create([
            'name' => 'italy',
            'longtiude' =>  " 12.646361",
            'latitude' => "42.504154",
            'weather' => "In Italy, there are different types of climate: mild continental in the Po Valley, cold in the Alps, Mediterranean on coasts and islands, and finally, cool and windy in the Apennines. July and August are the hottest and sunniest months, except in the Alpine region, where thunderstorms in the afternoon are quite frequent. ",
            'details' => 'Italy has a rich cultural heritage and it is a heaven for the tourists who love art.
            The beautiful mountains, lakes and landscapes make it a perfect place for the tourists to spend their vacations. 
            The accommodation facilities are very good and affordable. 
            The transportation system is favorable for the tourists, connecting all the major tourist destinations together. 
            The crime rates are low which makes it a safer place for the tourists. The Grand Tour Italy is a very nice facility which allows tourists to visit and enjoy popular destination of Italy in a cost effective way.',
            'contnent' => 'Europe',
            'currency' => 'euro',
            'population' => '60,461,826 person',
            'budget' => '1000 euro aweek',
            'budget_flag' => 'medium',
            'weather_flag' => 'moderate',
        ]);
        // images
        $italy->images()->createMany([
            ['file_name' => "italy.jpg"],
            ['file_name' => "italy2.jpg"],
            ['file_name' => "italy3.jpg"],
            ['file_name' => "italy4.jpg"],
            ['file_name' => "italy5.jpg"],
        ]);
        // eof italy

        $USA = Country::create([
            'name' => 'United States of America ',
            'longtiude' =>  " -95.665",
            'latitude' => "37.6",
            'weather' => "t has a continental climate, with cold winters (often frigid) and hot summers (sometimes very hot), with a different season duration depending on latitude and distance from the sea.
            There are, however, some exceptions: on the west coast overlooking the Pacific Ocean, the climate is cool and damp in the northern part and Mediterranean in the southern part; on the coast of the Gulf of Mexico, the climate is mild in winter and hot and muggy in summer, while in Florida, it is almost tropical; the mountainous areas are cold in winter and cool to cold even in summer; and finally, there are deserts which are mild in winter and scorchingly hot in summer.
            Since there are no obstacles to cold air masses from Canada, almost all of the country can experience sudden cold waves in winter, but they have different intensity and duration depending on area.
            Cold spells last a few days in the south, where the temperature drops a few degrees below freezing (0 °C or 32 °F) in winter, while they are intense and sometimes long in inland areas, in the highlands and in the north-east.
            The summer heat waves can be intense as well, especially in inland areas.
            In general, the western half of the country is more arid than the eastern one, with the exception of the north-central coast of the Pacific, which is rainy.",
            'details' => "The U.S. is a country of 50 states covering a vast swath of North America, with Alaska in the northwest and Hawaii extending the nation’s presence into the Pacific Ocean.
            Major Atlantic Coast cities are New York, a global finance and culture center, and capital Washington, DC.
            Midwestern metropolis Chicago is known for influential architecture and on the west coast, Los Angeles' Hollywood is famed for filmmaking. 
            The United States of America (USA), commonly known as the United States (U.S. or US), or America, is a country primarily located in North America, consisting of 50 states, a federal district, five major self-governing territories, and various possessions.
            At 3.8 million square miles (9.8 million square kilometers), it is the world's third- or fourth-largest country by total area.
            With a population of more than 328 million people, it is the third most populous country in the world.
            The national capital is Washington, D.C., and the most populous city is New York City.
            Paleo-Indians migrated from Siberia to the North American mainland at least 12,000 years ago, and European colonization began in the 16th century.
            The United States emerged from the thirteen British colonies established along the East Coast.
            Disputes over taxation and political representation with Great Britain led to the American Revolutionary War (1775–1783), which established independence.
            In the late 18th century, the U.S. began vigorously expanding across North America, gradually acquiring new territories, oftentimes displacing Native Americans, and admitting new states; by 1848, the United States spanned the continent.
            Slavery was legal in the southern United States until the second half of the 19th century when the American Civil War led to its abolition.
            The Spanish–American War and World War I established the U.S. as a world power, a status confirmed by the outcome of World War II. During the Cold War, the United States and the Soviet Union engaged in various proxy wars but avoided direct military conflict.
            They also competed in the Space Race, culminating in the 1969 spaceflight that first landed humans on the Moon.
            The Soviet Union's collapse in 1991 ended the Cold War, leaving the United States as the world's sole superpower.",
            'contnent' => 'North America',
            'currency' => 'The United States dollar (symbol $)',
            'population' => '328.2 million in 2019',
            'budget' => 'A vacation to the United States of America for one week usually costs around $1,568 for one person.
            So, a trip to the United States of America for two people costs around $3,137 for one week.
            A trip for two weeks for two people costs $6,274 in the United States of America',
            'budget_flag' => 'medium',
            'weather_flag' => 'hot',
        ]);
        $USA->images()->createMany([
            ['file_name' => "USA.jpg"],
            ['file_name' => "USA10.jpg"],
            ['file_name' => "USA11.jpg"],
            ['file_name' => "USA12.jpg"],
            ['file_name' => "USA2.jpg"],
            ['file_name' => "USA3.jpg"],
            ['file_name' => "USA4.jpg"],
            ['file_name' => "USA5.jpg"],
            ['file_name' => "USA6.jpg"],
            ['file_name' => "USA7.jpg"],
            ['file_name' => "USA8.jpg"],
            ['file_name' => "USA9.jpg"],

        ]);

        $Morocco = Country::create([
            'name' => 'Morocco',
            'longtiude' =>  " -6.472819048546225",
            'latitude' => "32.59195581431424",
            'weather' => "Morocco gets plenty of sun all year round.
            The northern and coastal areas have a Mediterranean climate with 30°C summers.
            Spring and autumn are warm and pleasant times to visit.
            Winters rarely get cold with temperatures around 20°C, but November to March has the most rain.
            Inland and in the south the climate gets more extreme.
            Close to the Sahara it’s scorching in summer and winter nights get surprisingly cold.",
            'details' => "It overlooks the Mediterranean Sea to the north and the Atlantic Ocean to the west, with land borders with Algeria to the east and Western Sahara (status disputed) to the south.
            Morocco also claims the exclaves of Ceuta, Melilla and Peñón de Vélez de la Gomera, all of them under Spanish jurisdiction, as well as several small Spanish-controlled islands off its coast.
            The capital is Rabat and the largest city is Casablanca.
            Morocco spans an area of 710,850 km2 (274,460 sq mi).
            The traditional domain of indigenous peoples now collectively known as Berbers (self-name Imazighen; singular, Amazigh), Morocco has been subject to extensive migration and has long been the location of urban communities that were originally settled by peoples from outside the region.
            Controlled by Carthage from an early date, the region was later the westernmost province of the Roman Empire.
            Following the Arab conquest of the late 7th century CE, the broader area of North Africa came to be known as the Maghrib (Arabic: “the West”), and the majority of its people accepted Islam.
            Subsequent Moroccan kingdoms enjoyed political influence that extended beyond the coastal regions, and in the 11th century the first native Amazigh dynasty of North Africa, the Almoravids, gained control of an empire stretching from Andalusian (southern) Spain to parts of sub-Saharan Africa.
            Attempts by Europeans to establish permanent footholds in Morocco beginning in the late 15th century were largely repulsed, but the country later became the subject of Great Power politics in the 19th century.
            Morocco was made a French protectorate in 1912 but regained independence in 1956.
            Today it is the only monarchy in North Africa. 
            Morocco borders Algeria to the east and southeast, Western Sahara to the south, the Atlantic Ocean to the west, and the Mediterranean Sea to the north.
            It is the only African country with coastal exposure to both the Atlantic Ocean and the Mediterranean Sea.
            Its area—excluding the territory of Western Sahara, which Morocco controls—is slightly larger than the U.S. state of California.
            Two small Spanish enclaves, Ceuta and Melilla, are situated on the country’s northern coast.
            Most of Morocco lies at high elevations, averaging about 2,600 feet (800 metres) above sea level.
            Two chains of mountains divide eastern from Atlantic Morocco:- the Rif Mountains in the north form a buffer along the Mediterranean coastline, whereas the Atlas Mountains create a barrier across the centre.
            The two parts of the country are connected by the narrow Taza Gap in the northeast as well as by roads that follow older traditional routes.
             The Atlas and Rif ranges were formed during the Paleogene and Neogene periods (between about 65 to 2.6 million years ago) by the folding and uplifting of sediment that had accumulated in the Tethys Sea, which, at that time, bordered the northern coast of Africa.",
            'contnent' => 'North America',
            'currency' => 'The Moroccan Dirham is the currency of Morocco.',
            'population' => 'has a population of over 37 million.',
            'budget' => ' a mid range day would cost a person 120-130$ ',
            'budget_flag' => 'low',
            'weather_flag' => 'hot',
        ]);
        $Morocco->images()->createMany([
            ['file_name' => "morocco1.jpg"],
            ['file_name' => "morocco2.jpg"],
            ['file_name' => "morocco3.jpg"],
            ['file_name' => "morocco4.jpg"],
            ['file_name' => "morocco5.jpg"],
            ['file_name' => "morocco6.jpg"],
            ['file_name' => "morocco7.jpg"],
            ['file_name' => "morocco8.jpg"],
            ['file_name' => "morocco9.jpg"],
            ['file_name' => "morocco10.jpg"],
            ['file_name' => "morocco11.jpg"],
        ]);
        $Czech = Country::create([
            'name' => 'Czech',
            'longtiude' =>  " 15.4749",
            'latitude' => "49.8038",
            'weather' => " The climate in the Czech Republic is moderately continental, with cold winters, during which the temperature is often below freezing, and warm summers, during which nights remain cool. ... Summer, from June to August, is usually warm.",
            'contnent' => 'Europe',
            'details' => "The Czech Republic has become one of the major tourist destinations in Europe, receiving over 20 million visitors yearly.[1] The capital, Prague, is the most popular destination, by itself receiving over 8 million visitors annually out of which almost 7 million are foreign.[2] Other highly visited destinations include Karlštejn Castle, Kutná Hora, Brno, Český Krumlov, České Budějovice, Olomouc and the Lednice–Valtice Cultural Landscape. Prague attracts large numbers of foreign tourists, mostly from Germany, Russia, Poland, the United States and the United Kingdom.",
            'currency' => ' Czech Koruna',
            'population' => ' 10.69 M',
            'budget' => 'A vacation to the Czech Republic for one week usually costs around Kč13,617  "almost 620 dollar" for one person.',
            'budget_flag' => 'medium',
            'weather_flag' => 'cold',
        ]);
        $Czech->images()->createMany([
            ['file_name' => "Czech.jpg"],
            ['file_name' => "Czech2.jpg"],
            ['file_name' => "Czech3.jpg"],
            ['file_name' => "Czech4.jpg"],
            ['file_name' => "Czech5.jpg"],
        ]);
        $Canada = Country::create([
            'name' => 'Canada',
            'longtiude' =>  "-113.38790643461951",
            'latitude' => "60.20339848414126",
            'weather' => " The climate in the Czech Republic is moderately continental, with cold winters, during which the temperature is often below freezing, and warm summers, during which nights remain cool. ... Summer, from June to August, is usually warm.",
            'contnent' => 'Europe',
            'details' => "Canada is a country in the northern part of North America. Its ten provinces and three territories extend from the Atlantic to the Pacific and northward into the Arctic Ocean, covering 9.98 million square kilometres (3.85 million square miles), making it the world's second-largest country by total area. Its southern and western border with the United States, stretching 8,891 kilometres (5,525 mi), is the world's longest bi-national land border. Canada's capital is Ottawa, and its three largest metropolitan areas are Toronto, Montreal, and Vancouver.",
            'currency' => 'Canadian Dollar',
            'population' => '37.59M',
            'budget' => 'A vacation to Canada for one week usually costs around CA$1,289 for one person.',
            'budget_flag' => 'expensive',
            'weather_flag' => 'cold',
        ]);
        $Canada->images()->createMany([
            ['file_name' => "Canada.jpg"],
            ['file_name' => "Canada2.jpg"],
            ['file_name' => "Canada3.jpg"],
            ['file_name' => "Canada4.jpg"],
        ]);
    }
}