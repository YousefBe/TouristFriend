<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // lebanon
        $Baalbek = City::create([
            'name' => "Baalbek",
            'longtiude' => "36.2197732",
            'latitude' => "34.0047058",
            'details' => "Baalbek is one of the most visited sites in Lebanon for its history and cultural relevance. People from all over the world come every year to experience everything the Lebanese district has to offer , like the Roman Ruins, the Stone of the Pregnant Woman or Attend the Baalbek International Festival .",
            'weather' => "The best time to visit Baalbek in Lebanon is from may until october, when you will have a pleasant or warm temperature and limited rainfall. The highest average temperature in Baalbek is 28°C in july and the lowest is 9°C in january.",
            'country_id' => 1,
        ]);
        $Beirut = City::create([
            'name' => "Beirut",
            'longtiude' => "35.512123",
            'latitude' => "33.8866277",
            'details' => "Beirut is Lebanon’s capital. This is the largest, the most populous with a population of 1,916,100 people and largest cities in Lebanon. With commercial trading points, banks, and local and foreign businesses, the ancient city is the most important commercial port in Lebanon.  Its rich cultural heritage has developed over centuries of interaction with different people from various countries and societies. The town attracts a huge number of tourists to the museums such as the National Museum of Beirut, the Sursock Museum, and the Archaeological Museum of the American University of Beirut. Beirut has hosted many sporting activities such as the Pan Arab Games in its stadiums; Camille Chamoun Sports City Stadium and the Beirut Municipal Stadium.",
            'weather' => "Average temperatures in Beirut vary greatly. Considering humidity, temperatures feel nice most of the year, excluding some hot weeks in the summer, with a low chance of precipitation most of the year.",
            'country_id' => 1,
        ]);
        $Tripoli = City::create([
            'name' => "Tripoli",
            'longtiude' => "35.84972",
            'latitude' => "34.43667",
            'details' => "Tripoli is the second-largest, second-most-populous and one of the biggest cities in Lebanon. This city located in the northern region of Lebanon. Tripoli has a population of 229,398 people. Like Beirut, Tripoli is an ancient city with great archaeological importance due to its rich architectural heritage that has developed throughout the centuries of its existence. Tripoli served as an important financial center and a port during the early centuries of its establishment and has remained a major port in Lebanon. The city has important tourist attractions like the clock tower and the Palm Islands Nature Reserves. Tripoli is an important religious center too with mosques and churches, educational centers, and transport and communication center.",
            'weather' => "In Tripoli, the summers are warm, muggy, arid, and clear and the winters are cool, wet, windy, and mostly clear. Over the course of the year, the temperature typically varies from 52°F to 86°F and is rarely below 46°F or above 88°F.",
            'country_id' => 1,
        ]);
        // eof lebanon

        //italy
        $Florence = City::create([
            'name' => "Tripoli",
            'longtiude' => "11.24626",
            'latitude' => "43.77925",
            'details' => "Florence (Firenze) is one of Italy's most important Renaissance architectural and art centers. Its Duomo and Baptistery are magnificent but crowded with tourists, as is their large piazza. Florence has several excellent museums with many famous paintings and sculptures, including Michelangelo's 'David' and Botticelli's 'Birth of Venus.' There are also Medici palaces and gardens. Florence is in the region of Tuscany and is the gateway for exploring Tuscany's smaller cities and countryside.",
            'weather' => "Considering the weather, we would say Florence's best travel months (also its busiest and most expensive) are April, May, June, September, and October. These months combine the convenience of peak season with pleasant weather.
            The most grueling thing about travel in Florence is the summer heat in July and August, when temperatures hit the high 80s and 90s.   
            We consider the best time to visit Florence is between May and September when warm weather ushers in art and music festivals, open-air dining and the kind of Italian lifestyle you dream of experiencing",
            'country_id' => 2,
        ]);
        $rome = City::create([
            'name' => "rome",
            'longtiude' => "12.51133",
            'latitude' => "41.89193",
            'details' => "Rome, Italy, commonly referred to as the Eternal City, is a top travel destination that draws millions of visitors each year. An exuberant and modern world capital, Rome offers travelers fascinating reminders of its imperial past at every turn. It's also an international hub for contemporary fashion, design, art, and culture.",
            'weather' => "There’s no bad time to visit Rome. The eternal city is stunning in all seasons, but October has the upper hand. The weather in Rome, Italy is cold during the winter and sweltering in the summer, but Rome in October is warm during the day and cool at night. Romans call it Ottobrata Romana, recognizing October’s beautiful weather and magical sunsets.",
            'country_id' => 2,
        ]);
        $Venice = City::create([
            'name' => "Venice",
            'longtiude' => "12.327145",
            'latitude' => "45.438759",
            'details' => "In a city as filled with tourist attractions as Venice, it's hard to know where to begin. Perhaps the best way is to simply get lost for a few hours wandering through its enchanting little streets and passageways, strolling beside its canals, and finding its secret corners.
            At every turn, you'll see something worth remembering with a photo. No matter where this exploration takes you, it's easy to find your way back to Piazza San Marco and the Grand Canal. Most of the best sights you'll want to visit lie around these two landmarks.",
            'weather' => "Mediterranean climate with hot and humid summers, and cold winters",
            'country_id' => 2,
        ]);

        // eof italy

        // USA
        $Washington‏ = City::create([
            'name' => "Washington‏",
            'longtiude' => "-119.80124076923778",
            'latitude' => "47.31060842004315",
            'details' => "Washington  is the capital city of the United States of America.
            It is located on the Potomac River bordering Maryland and Virginia, with Congress holding its first session there in 1800.
            The city was named for George Washington, the first president of the United States and a Founding Father, and the federal district is named after Columbia, a female personification of the nation.
            As the seat of the U.S. federal government and several international organizations, the city is an important world political capital.
            It is one of the most visited cities in the U.S., with over 20 million visitors in 2016.
            The U.S. Constitution provided for a federal district under the exclusive jurisdiction of U.S. Congress; the district is therefore not a part of any U.S. state.
            The signing of the Residence Act on July 16, 1790, approved the creation of a capital district located along the Potomac River near the country's East Coast.
            The City of Washington was founded in 1791 to serve as the national capital.
            In 1801, the land, formerly part of Maryland and Virginia (including the settlements of Georgetown and Alexandria), officially became recognized as the federal district.
            In 1846, Congress returned the land originally ceded by Virginia, including the city of Alexandria; in 1871, it created a single municipal government for the remaining portion of the district.
            The city had an estimated population of 705,749 as of July 2019, making it the 20th-most populous city in the U.S. and giving it a population larger than that of two U.S. states.
            Commuters from the surrounding Maryland and Virginia suburbs raise the city's daytime population to more than one million during the workweek.
            Washington's metropolitan area, the country's sixth-largest (including parts of Maryland, Virginia and West Virginia), had a 2017 estimated population of 6.2 million residents.
            The three branches of the U.S. federal government are centered in the district: Congress (legislative), the president (executive), and the Supreme Court (judicial).
            Washington is home to many national monuments and museums, primarily situated on or around the National Mall.
            The city hosts 177 foreign embassies as well as the headquarters of many international organizations, trade unions, non-profits, lobbying groups, and professional associations, including the World Bank Group, the International Monetary Fund, the Organization of American States, the AARP, the National Geographic Society, the Human Rights Campaign, the International Finance Corporation, and the American Red Cross.",
            'weather' => "In Washington, D.C., the summers are warm and muggy, the winters are very cold, and it is partly cloudy year round.
            Over the course of the year, the temperature typically varies from 29°F to 88°F and is rarely below 17°F or above 96°F.
            Based on the tourism score, the best times of year to visit Washington, D.C. for warm-weather activities are for the entire month of June and from mid August to early October.",
            'country_id' => 3,
        ]);
        $NewYork‏ = City::create([
            'name' => "NewYork‏",
            'longtiude' => "-73.47084470009882",
            'latitude' => "41.84039978637212 ",
            'details' => "often called simply New York, is the most populous city in the United States.
            With an estimated 2019 population of 8,336,817 distributed over about 302.6 square miles (784 km2), New York City is also the most densely populated major city in the United States.
            Located at the southern tip of the State of New York, the city is the center of the New York metropolitan area, the largest metropolitan area in the world by urban landmass.
            With almost 20 million people in its metropolitan statistical area and approximately 23 million in its combined statistical area, it is one of the world's most populous megacities.
            New York City has been described as the cultural, financial, and media capital of the world, significantly influencing commerce, entertainment, research, technology, education, politics, tourism, art, fashion, and sports.
            Home to the headquarters of the United Nations, New York is an important center for international diplomacy.
            Situated on one of the world's largest natural harbors, New York City is composed of five boroughs, each of which is a county of the State of New York.
            The five boroughs—Brooklyn, Queens, Manhattan, the Bronx, and Staten Island—were created when local governments were consolidated into a single city in 1898.
            The city and its metropolitan area constitute the premier gateway for legal immigration to the United States. 
            As many as 800 languages are spoken in New York, making it the most linguistically diverse city in the world.
            New York is home to more than 3.2 million residents born outside the United States",
            'weather' => "In New York City, the summers are warm and humid, the winters are very cold and windy, and it is wet and partly cloudy year round.
            Over the course of the year, the temperature typically varies from 28°F to 85°F and is rarely below 14°F or above 92°F.
            Based on the tourism score, the best times of year to visit New York City for warm-weather activities are from mid June to early July and from early August to late September.",
            'country_id' => 3,
        ]);
        $LosAngeles = City::create([
            'name' => "LosAngeles",
            'longtiude' => "-117.51198759694158",
            'latitude' => "37.31120632681945",
            'details' => "L.A. is the largest city in California.
            With an estimated population of nearly four million people, it is the second most populous city in the United States (after New York City) and the third most populous city in North America (after Mexico City and New York City).
            Los Angeles is known for its Mediterranean climate, ethnic diversity, Hollywood entertainment industry, and its sprawling metropolis.
            Los Angeles lies in a basin in Southern California, adjacent to the Pacific Ocean, with mountains as high as 10,000 feet (3,000 m), and deserts.
            The city, which covers about 469 square miles (1,210 km2),is the seat of Los Angeles County, the most populous county in the United States.
            The Los Angeles metropolitan area (MSA) is home to 13.1 million people, making it the second-largest metropolitan area in the nation after New York.
            Greater Los Angeles includes metro Los Angeles as well as the Inland Empire and Ventura County.
            It is the second most populous U.S. combined statistical area, also after New York, with a 2015 estimate of 18.7 million people.
            Home to the Chumash and Tongva, the area that became Los Angeles was claimed by Juan Rodríguez Cabrillo for Spain in 1542.
            The city was founded on September 4, 1781, under Spanish governor Felipe de Neve, on the village of Yaanga.
            It became a part of Mexico in 1821 following the Mexican War of Independence. In 1848, at the end of the Mexican–American War, Los Angeles and the rest of California were purchased as part of the Treaty of Guadalupe Hidalgo, and thus became part of the United States.
            Los Angeles was incorporated as a municipality on April 4, 1850, five months before California achieved statehood.
            the discovery of oil in the 1890s brought rapid growth to the city.
            The city was further expanded with the completion of the Los Angeles Aqueduct in 1913, which delivers water from Eastern California.",
            'weather' => "in Los Angeles, the summers are warm, arid, and clear and the winters are long, cool, wet, and partly cloudy.
            Over the course of the year, the temperature typically varies from 48°F to 85°F and is rarely below 42°F or above 93°F.
            Based on the tourism score, the best time of year to visit Los Angeles for warm-weather activities is from late May to mid October.",
            'country_id' => 3,
        ]);
        // eof usa

        // Morocco‏
        $Rabat‏ = City::create([
            'name' => "Rabat‏",
            'longtiude' => "-6.851607186343285",
            'latitude' => "33.99525139006816",
            'details' => "is the capital city of Morocco and the country's seventh largest city with an urban population of approximately 580,000 (2014)and a metropolitan population of over 1.2 million.
            It is also the capital city of the Rabat-Salé-Kénitra administrative region.
            Rabat is located on the Atlantic Ocean at the mouth of the river Bou Regreg, opposite Salé, the city's main commuter town.
            Rabat was founded in the 12th century by the Almohad ruler Abd al-Mu'min as a military town.
            The city steadily grew but went into an extended period of decline following the collapse of the Almohads.
            In the 17th century Rabat became a haven for Barbary pirates. The French established a protectorate over Morocco in 1912 and made Rabat its administrative center.
            Morocco achieved independence in 1955 and Rabat became its capital.
            Rabat, Temara, and Salé form a conurbation of over 1.8 million people.
            Silt-related problems have diminished Rabat's role as a port; however, Rabat, and Salé still maintain important textile, food processing and construction industries.
            In addition, tourism and the presence of all foreign embassies in Morocco serve to make Rabat one of the most important cities in the country.
            The Moroccan capital was ranked at second place by CNN in its 'Top Travel Destinations of 2013'.
            It is one of four Imperial cities of Morocco, and the medina of Rabat is listed as a World Heritage Site.
            Rabat is accessible by train through the ONCF system and by plane through the nearby Rabat–Salé Airport.",
            'weather' => "During the month of May and October you are most likely to experience good weather with pleasant average temperatures that fall between 20 degrees Celsius (68°F) and 25 degrees Celsius (77°F).
            On average, the warmest month(s) are July and August.
            Rabat has dry periods in January, February, March, June, July, August, September, October, November and December.
            The warmest month is July with an average maximum temperature of 32°C (89°F).
            The coldest month is January with an average maximum temperature of 12°C (53°F).
            April is the most wet month. This month should be avoided if you are not a big fan of rain.
            July is the driest month.
            July is the most sunny month.",
            'country_id' => 4,
        ]);
        $Fès = City::create([
            'name' => "Fès",
            'longtiude' => "-5.010713463011395",
            'latitude' => "34.036479194877536",
            'details' => "is a city in northern inland Morocco and the capital of the Fès-Meknès administrative region.
            It is the second largest city in Morocco after Casablanca,[4] with a population of 1.22 million (2020).
            Located to the northeast of the Atlas Mountains, Fez is situated at a crossroad connecting the important cities of different regions; 206 km (128 mi) from Tangier to the northwest, 246 km (153 mi) from Casablanca, 189 km (117 mi) from Rabat to the west, and 387 km (240 mi) from Marrakesh to the southwest which leads to the Trans-Saharan trade route. It is surrounded by hills and the old city is centered around the Fez River (Oued Fes) flowing from west to east.
            Fez was founded under Idrisid rule during the 8th-9th centuries CE.
            It initially consisted of two autonomous and competing settlements.
            Successive waves of mainly Arab immigrants from Ifriqiya (Tunisia) and al-Andalus (Spain/Portugal) in the early 9th century gave the nascent city its Arab character.
            After the downfall of the Idrisid dynasty, other empires came and went until the 11th century when the Almoravid Sultan Yusuf ibn Tashfin united the two settlements into what is today's Fes el-Bali quarter.
            Under Almoravid rule, the city gained a reputation for religious scholarship and mercantile activity.
            Fez reached its zenith in the Marinid era (13th-15th centuries), regaining its status as political capital.
            Numerous new madrasas and mosques were constructed, many of which survive today, while other structures were restored.
            These buildings are counted among the hallmarks of Moorish and Moroccan architectural styles. 
            In 1276 the Marinid sultan Abu Yusuf Yaqub also founded the royal administrative district of Fes el-Jdid, where the royal palace is still located today, to which extensive gardens were later added.
            During this period the Jewish population of the city grew and the Mellah (Jewish quarter) was formed on the south side of this new district.
            After the overthrow of the Marinid dynasty, Fez largely declined and subsequently competed with Marrakesh for political and cultural influence, but remained as the capital under the Wattasids and in modern times up until 1912.
            Today, the city consists of two old medina quarters, Fes el-Bali and Fes el-Jdid, and the much larger modern urban Ville Nouvelle area founded during the French colonial era.
            The medina of Fez is listed as a World Heritage Site and is believed to be one of the world's largest urban pedestrian zones (car-free areas).
            It has the University of Al Quaraouiyine which was founded in 859 and is considered by some to be the oldest continuously functioning institute of higher education in the world.
            It also has Chouara Tannery from the 11th century, one of the oldest tanneries in the world.
            The city has been called the 'Mecca of the West' and the 'Athens of Africa,' a nickname it shares with Cyrene in Libya.",
            'weather' => "In Fès, the summers are short, hot, arid, and mostly clear and the winters are long, cold, wet, and partly cloudy.
            Over the course of the year, the temperature typically varies from 42°F to 97°F and is rarely below 35°F or above 107°F.
            Based on the beach/pool score, the best time of year to visit Fès for hot-weather activities is from mid June to mid September.",
            'country_id' => 4,
        ]);
        $casablanca = City::create([
            'name' => "casablanca",
            'longtiude' => "-7.416526525396697",
            'latitude' => "34.14940633511711",
            'details' => " is the largest city of Morocco.
            Located in the central-western part of Morocco bordering the Atlantic Ocean, it is the largest city in the Maghreb region and the eighth-largest in the Arab world. Casablanca is Morocco's chief port and one of the largest financial centers in Africa.
            According to the 2019 population estimate, the city has a population of about 3.71 million in the urban area and over 4.27 million in the Greater Casablanca.
            Casablanca is considered the economic and business center of Morocco, although the national political capital is Rabat.
            The leading Moroccan companies and many international corporations doing business in the country have their headquarters and main industrial facilities in Casablanca.
            Recent industrial statistics show Casablanca holds its recorded position as the primary industrial zone of the nation. The Port of Casablanca is one of the largest artificial ports in the world, and the second largest port of North Africa, after Tanger-Med 40 km (25 mi) east of Tangier.
            Casablanca also hosts the primary naval base for the Royal Moroccan Navy.",
            'weather' => "August is the hottest month in Casablanca with an average temperature of 23°C (73°F) and the coldest is January at 12.5°C (55°F) with the most daily sunshine hours at 10 in August.
            The wettest month is February with an average of 70mm of rain.
            The best month to swim in the sea is in August when the average sea temperature is 23°C (73°F).",
            'country_id' => 4,
        ]);
        // eof Morocco

        //Czech
        $Prague = City::create([
            'name' => 'Prague',
            'longtiude' => '14.418540',
            'latitude' => '50.073658',
            'weather' => 'In Prague, the summers are comfortable; the winters are very cold, dry, and windy; and it is partly cloudy year round. Over the course of the year, the temperature typically varies from 26°F to 77°F and is rarely below 11°F or above 88°F.
           the best time of year to visit Prague for warm-weather activities is from mid June to early September',
            'details' => ' Prague is the capital and largest city in the Czech Republic, the 13th largest city in the European Union and the historical capital of Bohemia',
            'country_id' => 5,
        ]);
        $KarlovyVary = City::create([
            'name' => 'Karlovy Vary',
            'longtiude' => '12.882512809523101',
            'latitude' => '50.299185734318996',
            'weather' => 'n Karlovy Vary, the summers are comfortable and partly cloudy and the winters are freezing, dry, windy, and mostly cloudy. Over the course of the year, the temperature typically varies from 25°F to 73°F and is rarely below 11°F or above 85°F.
            the best time of year to visit Karlovy Vary for warm-weather activities is from late June to late August.',
            'details' => 'is a spa city in the Karlovy Vary Region of the Czech Republic. It has about 48,000 inhabitants. It lies on the confluence of the rivers Ohře and Teplá, approximately 130 km (81 mi) west of Prague. It is named after Charles IV, Holy Roman Emperor and the King of Bohemia, who founded the city in 1370. It is the site of numerous hot springs (13 main springs, about 300 smaller springs, and the warm-water Teplá River), and is the most visited spa town in the Czech Republic Until 1945, when the German-speaking inhabitants were expelled, the city was overwhelmingly German-speaking.',
            'country_id' => 5,
        ]);
        $Brno  = City::create([
            'name' => 'Brno',
            'longtiude' => '16.66997992234663',
            'latitude' => '49.34266099599851',
            'weather' => 'In Brno, the summers are comfortable; the winters are freezing, dry, and windy; and it is partly cloudy year round. Over the course of the year, the temperature typically varies from 25°F to 78°F and is rarely below 12°F or above 88°F.
            the best time of year to visit Brno for warm-weather activities is from mid June to early September.',
            'details' => 'Brno is a city in the South Moravian Region of the Czech Republic. Located at the confluence of the Svitava and Svratka rivers, Brno has about 380,000 inhabitants making it the second-largest city in the Czech Republic after the main capital Prague, and one of the 100 largest cities of the EU. The Brno metropolitan area has more than 600,000 inhabitants',
            'country_id' => 5,
        ]);
        // eof Czech

        // Canada
        $Vancouver  = City::create([
            'name' => 'Vancouver',
            'longtiude' => '-122.97386971982397',
            'latitude' => '49.4029229917607',
            'weather' => 'In Vancouver, the summers are short, comfortable, and partly cloudy and the winters are long, very cold, wet, and mostly cloudy. Over the course of the year, the temperature typically varies from 35°F to 73°F and is rarely below 24°F or above 80°F.
            the best time of year to visit Vancouver for warm-weather activities is from mid July to late August.',
            'details' => 'Vancouver is a major city in western Canada, located in the Lower Mainland region of British Columbia. As the most populous city in the province, the 2016 census recorded 631,486 people in the city, up from 603,502 in 2011. The Greater Vancouver area had a population of 2,463,431 in 2016, making it the third-largest metropolitan area in Canada. Vancouver has the highest population density in Canada, with over 5,400 people per square kilometre,which makes it the fifth-most densely populated city with over 250,000 residents in North America, behind New York City, Guadalajara, San Francisco, and Mexico City. Vancouver is one of the most ethnically and linguistically diverse cities in Canada: 52% of its residents are not native English speakers,48.9% are native speakers of neither English nor French, and 50.6% of residents belong to visible minority groups.',
            'country_id' => 6,
        ]);
        $Toronto   = City::create([
            'name' => 'Toronto',
            'longtiude' => '-79.20226700481173',
            'latitude' => '44.067992379931155',
            'weather' => 'In Toronto, the summers are comfortable; the winters are freezing, dry, and windy; and it is partly cloudy year round. Over the course of the year, the temperature typically varies from 17°F to 78°F and is rarely below 1°F or above 85°F.
            the best time of year to visit Toronto for warm-weather activities is from late June to early September.',
            'details' => 'Toronto is the capital city of the Canadian province of Ontario. With a recorded population of 2,731,571 in 2016,it is the most populous city in Canada and the fourth most populous city in North America. The city is the anchor of the Golden Horseshoe, an urban agglomeration of 9,245,438 people (as of 2016) surrounding the western end of Lake Ontario,while the Greater Toronto Area (GTA) proper had a 2016 population of 6,417,516. Toronto is an international centre of business, finance, arts, and culture, and is recognized as one of the most multicultural and cosmopolitan cities in the world',
            'country_id' => 6,
        ]);
        $Montreal   = City::create([
            'name' => 'Montreal',
            'longtiude' => '-73.57099123008675',
            'latitude' => '45.57285867711843',
            'weather' => 'In Montréal, the summers are long and warm; the winters are freezing, snowy, and windy; and it is partly cloudy year round. Over the course of the year, the temperature typically varies from 9°F to 79°F and is rarely below -9°F or above 87°F.
            the best time of year to visit Montréal for warm-weather activities is from late June to early September.',
            'details' => 'Montreal is the second-most populous city in Canada and most populous city in the Canadian province of Quebec. Founded in 1642 as Ville-Marie, or "City of Mary",it is named after Mount Royal, the triple-peaked hill in the heart of the city. The city is centred on the Island of Montreal, which got its name from the same origin as the city,and a few much smaller peripheral islands, the largest of which is Île Bizard. The city is situated 196 km (122 mi) east of the national capital Ottawa, and 258 km (160 mi) south-west of the provincial capital, Quebec City.',
            'country_id' => 6,
        ]);
    }
}