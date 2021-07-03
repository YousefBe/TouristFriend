<?php

namespace Database\Seeders;

use App\Models\PointOfInterest;
use Illuminate\Database\Seeder;

class PointOfInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //lebanon

        $BattaraGorgeWaterfall = PointOfInterest::create([
            'name' => "Battara Gorge Waterfall",
            'longtiude' => "35.8705702",
            'latitude' => "34.1733927",
            'details' => "one of the places in Lebanon that are our pride and joy.
           Located in Tannourine, the waterfall drops 255 meters into the Balaa Pothole, a cave of Jurassic limestone located on the Lebanon Mountain Trail.
           Discovered to the western world in 1952 by French bio-speleologist Henri Coiffait, the waterfall and accompanying sinkhole were fully mapped in the 1980s by the Spéléo Club du Liban.",
            'cost' => " free",
            'working_hours' => "Open 24 hours, but the best time to visit is in the morning",
            'country_id' => 1,
        ]);
        $BattaraGorgeWaterfall->images()->createMany([
            ['file_name' => "Battara Gorge Waterfall.jpg"],
            ['file_name' => "Battara Gorge Waterfall2.jpg"],
            ['file_name' => "Battara Gorge Waterfall3.jpg"],
            ['file_name' => "Battara Gorge Waterfall4.jpg"],
            ['file_name' => "Battara Gorge Waterfall5.png"],
            ['file_name' => "Battara Gorge Waterfall6.png"],
        ]);
        $TheMohammadAlAminMosque = PointOfInterest::create([
            'name' => "The Mohammad Al-Amin Mosque",
            'longtiude' => "35.5063702",
            'latitude' => "33.8951824",
            'details' => "The Mohammad Al-Amin Mosque is a Sunni Muslim religious site located in the breathtaking place that is downtown Beirut.
            It is the biggest mosque in Lebanon. The design is evocative of the Ottomans’ monumental architecture, with a built area covering approximately 11,000 square meters, a 48-meter-high blue dome, and 65-meter-high minarets.
            Al-Amin mosque has become a dominant feature of the Beirut skyline.",
            'cost' => "free",
            'working_hours' => "Everyday from 12pm to 9pm",
            'country_id' => 1,
        ]);
        $TheMohammadAlAminMosque->images()->createMany([
            ['file_name' => "The Mohammad Al-Amin Mosque.jpg"],
            ['file_name' => "The Mohammad Al-Amin Mosque2.jpg"],
            ['file_name' => "The Mohammad Al-Amin Mosque3.jpg"],
            ['file_name' => "The Mohammad Al-Amin Mosque4.jpeg"],
            ['file_name' => "The Mohammad Al-Amin Mosque5.png"],
            ['file_name' => "The Mohammad Al-Amin Mosque6.jpg"],
            ['file_name' => "The Mohammad Al-Amin Mosque7.jpg"],
            ['file_name' => "The Mohammad Al-Amin Mosque8.jpg"],
        ]);
        $TheBaalbektemple = PointOfInterest::create([
            'name' => "The Baalbek temple",
            'longtiude' => "36.2039519",
            'latitude' => "34.0058703",
            'details' => "he Baalbek temple includes two of the largest and grandest Roman temple ruins: the Temple of Bacchus and the Temple of Jupiter. It was inscribed in 1984 as a UNESCO World Heritage site.
            The Temple of Bacchus is one of the best-preserved and grandest Roman ruins; its age is unknown, but its fine ornamentation can be dated to the second century CE.",
            'cost' => "$20 per Hour for one person",
            'working_hours' => "Everyday from 8am to 6pm",
            'country_id' => 1,
        ]);
        $TheBaalbektemple->images()->createMany([
            ['file_name' => "The Baalbek temple.jpg"],
            ['file_name' => "The Baalbek temple2.jpg"],
            ['file_name' => "The Baalbek temple3.png"],
            ['file_name' => "The Baalbek temple4.png"],
            ['file_name' => "The Baalbek temple5.png"],
            ['file_name' => "The Baalbek temple6.jpg"],
            ['file_name' => "The Baalbek temple7.jpg"],
        ]);
        $TheJeitaGrotto = PointOfInterest::create([
            'name' => "The Jeita Grotto",
            'longtiude' => "35.6411",
            'latitude' => "33.9427",
            'details' => "One of the Middle East's greatest natural wonders, the stunning Jeita Grotto cave system extends around 6km into the mountains 18km, northeast of Beirut. The simply extraordinary upper cavern, accessed via a cable car from the ticket office, has strategically positioned coloured lights that showcase the stalactites and stalagmites in all their crystalline glory. The flooded lower caves, reached via a tacky toy train, are explored by rowing boat and are closed when the flood levels rise too high.",
            'cost' => "$12 for one person",
            'working_hours' => "Everyday except mondays, from 9am to 5pm",
            'country_id' => 1,
        ]);
        $TheJeitaGrotto->images()->createMany([
            ['file_name' => "The Jeita Grotto.jpg"],
            ['file_name' => "The Jeita Grotto2.jpg"],
            ['file_name' => "The Jeita Grotto3.jpg"],
            ['file_name' => "The Jeita Grotto4.jpg"],
            ['file_name' => "Jeita_Grotto.jpg"],
        ]);
        $ZoukMikaelOldSouk = PointOfInterest::create([
            'name' => "Zouk Mikael Old Souk",
            'longtiude' => "35.6266556 ",
            'latitude' => "33.9692831",
            'details' => "Once a key commercial place in Lebanon of the 19th century, the Old Souk has nonetheless kept its vibrant authenticity and most of its heritage artisanship, which products are found throughout the souk.Located in Keserwan, the Old Souk of Zouk Mikael is an experience in itself, whether at day time or at night time. It’s there where you can enjoy hunting for beautiful handmade arts so typically Lebanese.",
            'cost' => "free",
            'working_hours' => "Everyday from 9am to 7pm",
            'country_id' => 1,
        ]);
        $ZoukMikaelOldSouk->images()->createMany([
            ['file_name' => "Zouk Mikael Old Souk.jpg"],
            ['file_name' => "Zouk Mikael Old Souk2.jpg"],
            ['file_name' => "Zouk Mikael Old Souk3.png"],
            ['file_name' => "Zouk Mikael Old Souk4.png"],
            ['file_name' => "Zouk Mikael Old Souk5.jpg"],
            ['file_name' => "Zouk Mikael Old Souk6.jpg"],
        ]);
        //eof lebanon
        // italy colosseum1
        $colosseumrome = PointOfInterest::create([
            'name' => "colosseum rome",
            'longtiude' => "12.492373",
            'latitude' => " 41.890251",
            'details' => "This huge amphitheater, the largest of its kind ever built by the Roman Empire and the largest of their constructions to survive, remained a model for sports facilities right up to modern times. Built by Vespasian in AD 72 and enlarged by the addition of a fourth story by his son, Titus, it was a venue for public spectacles and shows - even mock sea battles.
            A wooden floor that was 83 by 48 meters covered two additional underground stories with tunnels, rooms, cells, and passages that provided space for gladiators, workers, wild animals, and storage.
            Today, the structure stands in stark contrast to the modern development that surrounds it and is a prominent reminder of ancient times and the extensive history of Rome.",
            'cost' => "12 euros for one person",
            'working_hours' => "Everyday from 8am to 5pm",
            'country_id' => 2,
        ]);
        $colosseumrome->images()->createMany([
            ['file_name' => "colosseum1.jpg"],
            ['file_name' => "colosseum2.jpg"],
            ['file_name' => "colosseum3.jpg"],
            ['file_name' => "colosseum4.jpg"],
            ['file_name' => "colosseum5.jpg"],
            ['file_name' => "colosseum6.jpg"],
        ]);
        $LakeComo = PointOfInterest::create([
            'name' => "Lake Como",
            'longtiude' => "9.2666656",
            'latitude' => " 46.0",
            'details' => " Lake Como is one of Italy's most scenic areas, surrounded by mountains and lined by small picturesque towns. A haunt of the wealthy since Roman times, the lake has many opulent villas and palaces along its wooded shores; Villa Balbianello and Villa Carlotta are the best known, both surrounded by gardens that are open to the public.
            The mild climate that makes the lake shore ideal for gardens is also a draw for tourists, with characteristics similar to that of the Mediterranean. Along with the resort towns around the lake, there's an 11th-century abbey.",
            'cost' => "transportations only",
            'working_hours' => "Open 24 hours",
            'country_id' => 2,
        ]);
        $LakeComo->images()->createMany([
            ['file_name' => "Lake Como Lombardia1.jpg"],
            ['file_name' => "Lake Como Lombardia2.jpg"],
            ['file_name' => "Lake Como Lombardia3.jpg"],
            ['file_name' => "Lake Como Lombardia4.jpg"],
            ['file_name' => "Lake Como Lombardia5.jpg"],
            ['file_name' => "Lake Como Lombardia6.jpg"],
            ['file_name' => "Lake Como Lombardia7.jpg"],
            ['file_name' => "Lake Como Lombardia8.jpg"],
            ['file_name' => "Lake Como Lombardia9.jpg"],
        ]);
        $TheLeaningTowerofPisa = PointOfInterest::create([
            'name' => "The Leaning Tower of Pisa",
            'longtiude' => "10.396502",
            'latitude' => "43.723023",
            'details' => "The Leaning Tower of Pisa (La Torre Pendente) is just one of many attractions in the city of Pisa, one whose world fame comes not from the considerable elegance of its design, but from a flaw. Work began on the tower in the 1100s, and the sinking, which led to the lean, began by the time the tower reached the third story.
            Leaning more and more over the centuries, before restoration work in the 1990s, it was predicted to topple over by the year 2000. Today, visitors can climb up the stairs of the tower for a fabulous view over the city.",
            'cost' => "18 euro for one person",
            'working_hours' => "Everyday from 8am to 8pm",
            'country_id' => 2,
        ]);
        $TheLeaningTowerofPisa->images()->createMany([
            ['file_name' => "The Leaning Tower of Pisa pisa.jpg"],
            ['file_name' => "The Leaning Tower of Pisa pisa1.jpg"],
            ['file_name' => "The Leaning Tower of Pisa pisa2.jpg"],
            ['file_name' => "The Leaning Tower of Pisa pisa3.jpg"],
        ]);
        $TheVatican = PointOfInterest::create([
            'name' => "The Vatican",
            'longtiude' => "12.454628",
            'latitude' => "41.904755",
            'details' => " the smallest independent state in the world, with an area of less than half a square kilometer, most of it enclosed by the Vatican walls. Inside are the Vatican palace and gardens, St. Peter's Basilica, and St. Peter's Square, an area ruled by the Pope, supreme head of the Roman Catholic Church. This compact space offers a lot of things to see, between its museums and the great basilica itself.",
            'cost' => "21 euro for one person",
            'working_hours' => "Everyday from 9am to 6pm",
            'country_id' => 2,
        ]);
        $TheVatican->images()->createMany([
            ['file_name' => "vatican museums1.jpg"],
            ['file_name' => "vatican museums2.jpg"],
            ['file_name' => "vatican museums3.jpg"],
            ['file_name' => "vatican museums4.jpg"],
            ['file_name' => "vatican museums5.jpg"],
        ]);
        $VeniceGrandCanal = PointOfInterest::create([
            'name' => "Venice Grand Canal",
            'longtiude' => "12.3322",
            'latitude' => "45.4364",
            'details' => "A gondola ride through the canals of Venice is a tradition that travelers have been enjoying for centuries. Venice is a city of islands, and the canals have long been the city's main streets, connected by a labyrinth of narrow passageways.
            The Grand Canal is the largest and most famous of these waterways, cutting a wide S-shaped route through the city. Along its sides are the grandest of the palaces once owned by the wealthiest and most powerful families of the Venetian Republic. The best way to see many of the grand palaces, whose fronts face the water, is from a Vaporetto ride along the Grand Canal.",
            'cost' => "30 euro for one person",
            'working_hours' => "Open 24 hours",
            'country_id' => 2,
        ]);
        $VeniceGrandCanal->images()->createMany([
            ['file_name' => "Venice Grand Canal.jpg"],
            ['file_name' => "Venice Grand Canal2.jpg"],
            ['file_name' => "Venice Grand Canal3.jpg"],
            ['file_name' => "Venice Grand Canal4.jpg"],
            ['file_name' => "Venice Grand Canal5.jpg"],
        ]);
        // eof italy
        // usa Central Park Zoo
        $TheCentralParkZoo = PointOfInterest::create([
            'name' => "The Central Park Zoo",
            'longtiude' => "-73.97187641534144",
            'latitude' => "40.76863930981381",
            'details' => "located at the southeast corner of Central Park in New York City.
            It is part of an integrated system of four zoos and one aquarium managed by the Wildlife Conservation Society (WCS).
            In conjunction with the Central Park Zoo's operations, the WCS offers children's educational programs, is engaged in restoration of endangered species populations, and reaches out to the local community through volunteer programs.
            Its precursor, a menagerie, was founded in 1864, becoming the first public zoo to open in New York.
            The present facility first opened as a city zoo on December 2, 1934, and was part of a larger revitalization program of city parks, playgrounds and zoos initiated in 1934 by New York City Department of Parks and Recreation (NYC Parks) commissioner Robert Moses.
            It was built, in large part, through Civil Works Administration and Works Progress Administration (WPA) labor and funding.
            The Children's Zoo opened to the north of the main zoo in 1960, using funding from a donation by Senator Herbert Lehman and his wife Edith.
            After 49 years of operation as a city zoo run by NYC Parks, Central Park Zoo closed in 1983 for reconstruction.
            The closure was part of a five-year, $35 million renovation program, that completely replaced the zoo's cages with naturalistic environments.
            It was rededicated on August 8, 1988, as part of a system of five facilities managed by the WCS, all of which are accredited by the Association of Zoos and Aquariums (AZA).",
            'cost' => "$12  without the '4D experience' for one person, $18 with the full '4D package",
            'working_hours' => "Everyday from 10am to 4:30pm",
            'country_id' => 3,
        ]);
        $TheCentralParkZoo->images()->createMany([
            ['file_name' => "Central Park Zoo.jpg"],
            ['file_name' => "Central Park Zoo2.jpg"],
            ['file_name' => "Central Park Zoo3.jpg"],
            ['file_name' => "Central Park Zoo4.jpg"],
            ['file_name' => "Central Park Zoo5.jpg"],
            ['file_name' => "Central Park Zoo6.jpg"],
            ['file_name' => "Central Park Zoo7.jpg"],
            ['file_name' => "Central Park Zoo8.jpg"],
            ['file_name' => "Central Park Zoo9.jpg"],
            ['file_name' => "Central Park Zoo10.jpg"],
        ]);
        $DisneylandPark = PointOfInterest::create([
            'name' => "Disneyland Park",
            'longtiude' => "-117.91906003068286",
            'latitude' => "33.812965390685626",
            'details' => "Disneyland Park, originally Disneyland, is the first of two theme parks built at the Disneyland Resort in Anaheim, California, opened on July 17, 1955.
            It is the only theme park designed and built to completion under the direct supervision of Walt Disney.
            It was originally the only attraction on the property; its official name was changed to Disneyland Park to distinguish it from the expanding complex in the 1990s.
            It was the first Disney theme park.
            Walt Disney came up with the concept of Disneyland after visiting various amusement parks with his daughters in the 1930s and 1940s.
            He initially envisioned building a tourist attraction adjacent to his studios in Burbank to entertain fans who wished to visit; however, he soon realized that the proposed site was too small.
            After hiring a consultant to help him determine an appropriate site for his project, Disney bought a 160-acre (65 ha) site near Anaheim in 1953.
            Construction began in 1954 and the park was unveiled during a special televised press event on the ABC Television Network on July 17, 1955.
            Since its opening, Disneyland has undergone expansions and major renovations, including the addition of New Orleans Square in 1966, Bear Country (now Critter Country) in 1972, Mickey's Toontown in 1993, and Star Wars: Galaxy's Edge in 2019.
            Opened in 2001, Disney California Adventure Park was built on the site of Disneyland's original parking lot.
            Disneyland has a larger cumulative attendance than any other theme park in the world, with 726 million visits since it opened (as of December 2018).
            In 2018, the park had approximately 18.6 million visits, making it the second most visited amusement park in the world that year, behind only Magic Kingdom, the very park it inspired.
            According to a March 2005 Disney report, 65,700 jobs are supported by the Disneyland Resort, including about 20,000 direct Disney employees and 3,800 third-party employees (independent contractors or their employees).
            Disney announced 'Project Stardust' in 2019, which included major structural renovations to the park to account for higher attendance numbers.",
            'cost' => "$220 for one person",
            'working_hours' => "Everyday from 10am to 8pm",
            'country_id' => 3,
        ]);
        $DisneylandPark->images()->createMany([
            ['file_name' => "Disneyland Park.jpg"],
            ['file_name' => "Disneyland Park2.jpg"],
            ['file_name' => "Disneyland Park3.jpg"],
            ['file_name' => "Disneyland Park4.jpg"],
            ['file_name' => "Disneyland Park5.jpg"],
            ['file_name' => "Disneyland Park6.jpg"],
            ['file_name' => "Disneyland Park7.jpg"],
            ['file_name' => "Disneyland Park8.jpg"],
            ['file_name' => "Disneyland Park9.jpg"],
            ['file_name' => "Disneyland Park10.jpg"],
        ]);
        $MountRushmoreNationalMemorial = PointOfInterest::create([
            'name' => "Mount Rushmore National Memorial",
            'longtiude' => "-103.45408852039358",
            'latitude' => "43.87636481794818",
            'details' => "Mount Rushmore National Memorial is centered on a colossal sculpture carved into the granite face of Mount Rushmore in the Black Hills in Keystone, South Dakota.
            Sculptor Gutzon Borglum created the sculpture's design and oversaw the project's execution from 1927 to 1941 with the help of his son, Lincoln Borglum.
            The sculpture features the 60-foot (18 m) heads of Presidents George Washington (1732–1799), Thomas Jefferson (1743–1826), Theodore Roosevelt (1858–1919) and Abraham Lincoln (1809–1865), as recommended by Borglum.
            The four presidents were chosen to represent the nation's birth, growth, development and preservation, respectively.
            The memorial park covers 1,278 acres (2.00 sq mi; 5.17 km2) and the actual mountain has an elevation of 5,725 feet (1,745 m) above sea level.
            South Dakota historian Doane Robinson is credited with conceiving the idea of carving the likenesses of noted figures into the mountains of the Black Hills of South Dakota in order to promote tourism in the region.
            His initial idea was to sculpt the Needles; however, Gutzon Borglum rejected the Needles because of the poor quality of the granite and strong opposition from the Lakota (Sioux), who consider the Black Hills to be sacred ground; it was originally included in the Great Sioux Reservation.
            The United States broke up the territory after gold was discovered in the Black Hills.
            The mountain into which it was carved is known to the Lakota Sioux as Six Grandfathers.
            The sculptor and tribal representatives settled on Mount Rushmore, which also has the advantage of facing southeast for maximum sun exposure.
            Robinson wanted it to feature American West heroes, such as Lewis and Clark, their expedition guide Sacagawea, Oglala Lakota chief Red Cloud, Buffalo Bill Cody, and Oglala Lakota chief Crazy Horse.
            Borglum believed that the sculpture should have broader appeal and chose the four presidents.",
            'cost' => "free",
            'working_hours' => "Everyday from 5am to 11pm",
            'country_id' => 3,
        ]);
        $MountRushmoreNationalMemorial->images()->createMany([
            ['file_name' => "Mount Rushmore National Memorial.jpg"],
            ['file_name' => "Mount Rushmore National Memorial2.jpg"],
            ['file_name' => "Mount Rushmore National Memorial3.jpg"],
            ['file_name' => "Mount Rushmore National Memorial4.jpg"],
            ['file_name' => "Mount Rushmore National Memorial5.jpg"],
            ['file_name' => "Mount Rushmore National Memorial6.jpg"],
            ['file_name' => "Mount Rushmore National Memorial7.jpg"],
            ['file_name' => "Mount Rushmore National Memorial8.jpg"],
            ['file_name' => "Mount Rushmore National Memorial9.jpg"],
            ['file_name' => "Mount Rushmore National Memorial10.jpg"],
        ]);
        $SeaWorldSanDiego = PointOfInterest::create([
            'name' => "SeaWorld San Diego",
            'longtiude' => "-117.2262649",
            'latitude' => "32.764846496025996",
            'details' => "SeaWorld San Diego is an animal theme park, oceanarium, outside aquarium and marine mammal park, in San Diego, California, United States, inside Mission Bay Park.
            SeaWorld San Diego is a member of the Association of Zoos and Aquariums (AZA).
            Adjacent to the property is the Hubbs-SeaWorld Research Institute, which conducts research on marine biology and provides education and outreach on marine issues to the general public, including information in park exhibits.
            SeaWorld was founded on March 21, 1964 by four graduates of the University of California, Los Angeles.
            Although their original idea of an underwater restaurant was not feasible at the time, the idea was expanded into a 22-acre (8.9 ha) marine zoological park along the shore of Mission Bay in San Diego.
            After an investment of about $1.5 million, the park opened with 45 employees, several dolphins, sea lions and two seawater aquariums, and hosted more than 400,000 visitors in its first year of operation.
            Initially held as a private partnership, SeaWorld offered its stock publicly in 1968 enabling it to expand and open additional parks.
            The second SeaWorld location, SeaWorld Ohio, opened in 1970, followed by SeaWorld Orlando in 1973 and SeaWorld San Antonio (the largest of the parks) in 1988.
            The partnership later sold SeaWorld Ohio to Six Flags in January 2001.
            Harcourt Brace Jovanovich owned the parks between 1976 and 1989, when Anheuser-Busch Companies, Inc. purchased them.
            After InBev acquired Anheuser-Busch, it sold SeaWorld San Diego and the rest of the company's theme parks to the Blackstone Group in December 2009, which operates the park through its SeaWorld Parks & Entertainment division.
            SeaWorld currently leases the land from the City of San Diego with the lease expiring in 2048.
            The premises must be used as a marine mammal park and no other marine mammal park may be operated by SeaWorld within 560 miles of the City limits.",
            'cost' => "$93.99 for one person",
            'working_hours' => "only in weekends",
            'country_id' => 3,
        ]);
        $SeaWorldSanDiego->images()->createMany([
            ['file_name' => "SeaWorld San Diego.jpg"],
            ['file_name' => "SeaWorld San Diego2.jpg"],
            ['file_name' => "SeaWorld San Diego3.jpg"],
            ['file_name' => "SeaWorld San Diego4.jpg"],
            ['file_name' => "SeaWorld San Diego5.jpg"],
            ['file_name' => "SeaWorld San Diego6.jpg"],
            ['file_name' => "SeaWorld San Diego7.jpg"],
            ['file_name' => "SeaWorld San Diego8.jpg"],
            ['file_name' => "SeaWorld San Diego9.jpg"],
            ['file_name' => "SeaWorld San Diego10.jpg"],
        ]);
        $TheMuseumofModernArt = PointOfInterest::create([
            'name' => "The Museum of Modern Art",
            'longtiude' => "-73.9776216",
            'latitude' => "40.76190402910928",
            'details' => "The Museum of Modern Art (MoMA) is an art museum located in Midtown Manhattan, New York City, on 53rd Street between Fifth and Sixth Avenues.
            It plays a major role in developing and collecting modern art, and is often identified as one of the largest and most influential museums of modern art in the world.
            MoMA's collection offers an overview of modern and contemporary art, including works of architecture and design, drawing, painting, sculpture, photography, prints, illustrated books and artist's books, film, and electronic media.
            The MoMA Library includes approximately 300,000 books and exhibition catalogs, more than 1,000 periodical titles, and more than 40,000 files of ephemera about individual artists and groups.
            The archives hold primary source material related to the history of modern and contemporary art.
            The idea for the Museum of Modern Art was developed in 1929 primarily by Abby Aldrich Rockefeller (wife of John D. Rockefeller, Jr.) and two of her friends, Lillie P. Bliss and Mary Quinn Sullivan.
            They became known variously as 'the Ladies' or 'the adamantine ladies'.
            They rented modest quarters for the new museum in the Heckscher Building at 730 Fifth Avenue in Manhattan,and it opened to the public on November 7, 1929, nine days after the Wall Street Crash.
            Abby Rockefeller had invited A. Conger Goodyear, the former president of the board of trustees of the Albright Art Gallery in Buffalo, New York, to become president of the new museum. Abby became treasurer.
            At the time, it was America's premier museum devoted exclusively to modern art, and the first of its kind in Manhattan to exhibit European modernism.
            One of Rockefeller's early recruits for the museum staff was the noted Japanese-American photographer Soichi Sunami (at that time best known for his portraits of modern dance pioneer Martha Graham), who served the museum as its official documentary photographer from 1930 until 1968.
            Goodyear enlisted Paul J. Sachs and Frank Crowninshield to join him as founding trustees.
            Sachs, the associate director and curator of prints and drawings at the Fogg Museum at Harvard University, was referred to in those days as a 'collector of curators.'
            Goodyear asked him to recommend a director and Sachs suggested Alfred H. Barr, Jr., a promising young protege.
            Under Barr's guidance, the museum's holdings quickly expanded from an initial gift of eight prints and one drawing.
            Its first successful loan exhibition was in November 1929, displaying paintings by Van Gogh, Gauguin, Cézanne, and Seurat.
            First housed in six rooms of galleries and offices on the twelfth floor of Manhattan's Heckscher Building, on the corner of Fifth Avenue and 57th Street, the museum moved into three more temporary locations within the next ten years.
            Abby Rockefeller's husband, John D. Rockefeller, Jr., was adamantly opposed to the museum (as well as to modern art itself) and refused to release funds for the venture, which had to be obtained from other sources and resulted in the frequent shifts of location.
            Nevertheless, he eventually donated the land for the current site of the museum, plus other gifts over time, and thus became in effect one of its greatest benefactors.
            During that time the museum initiated many more exhibitions of noted artists, such as the lone Vincent van Gogh exhibition on November 4, 1935.
            Containing an unprecedented sixty-six oils and fifty drawings from the Netherlands, as well as poignant excerpts from the artist's letters, it was a major public success due to Barr's arrangement of the exhibit, and became 'a precursor to the hold van Gogh has to this day on the contemporary imagination'.",
            'cost' => "$25.00 for one person",
            'working_hours' => "Everyday from 10am to 5pm",
            'country_id' => 3,
        ]);
        $TheMuseumofModernArt->images()->createMany([
            ['file_name' => "the museum of modern art new york.jpg"],
            ['file_name' => "the museum of modern art new york2.jpg"],
            ['file_name' => "the museum of modern art new york3.jpg"],
            ['file_name' => "the museum of modern art new york4.jpg"],
            ['file_name' => "the museum of modern art new york5.jpg"],
            ['file_name' => "the museum of modern art new york6.jpg"],
            ['file_name' => "the museum of modern art new york7.jpg"],
            ['file_name' => "the museum of modern art new york8.jpg"],
            ['file_name' => "the museum of modern art new york9.jpg"],
            ['file_name' => "the museum of modern art new york10.jpg"],
            ['file_name' => "the museum of modern art new york11.jpg"],
        ]);
        // eof USA 
        // Morocco 
        $ErgChebbi = PointOfInterest::create([
            'name' => "Erg Chebbi",
            'longtiude' => "-3.983329",
            'latitude' => "31.166666",
            'details' => "one of Morocco's several ergs – large seas of dunes formed by wind-blown sand.
            There are several other ergs such as Erg Chigaga near M'hamid.
            Technically all these ergs are within an area of semi-arid Pre-Saharan Steppes and not part of the Sahara desert which lies some distance to the south.
            In places, the dunes of Erg Chebbi rise up to 150 meters from the surrounding hamada (rocky desert) and altogether it spans an area of 28 kilometers from north to south and up to 5–7 kilometers from east to west lining the Algerian border.
            The nearest sizable town is Erfoud, about 60 kilometers further north.
            One other city is Rissani, around 40 kilometers from Merzouga.
            Rissani was the site of a kingdom known as Sijilmassa, which became prosperous from the 8th to the 14th century due to its control of the caravan routes.
            Although rainfall is not very common,in 2006 flooding adjacent to the dunes destroyed many buildings and killed three people.
            Inland, in Morocco's eastern Sahara region, are the grand and rippling sand dunes of the Erg Chebbi, where would-be explorers and adventure-seekers head to get a dose of desert action.
            This is prime territory for dune-surfing, four-wheel-drive dune-bashing, and the (much more authentic) camel trekking.
            For those with less of an active nature, just sitting amid the sand dune splendor is worthy enough of the long journey out here.
            For most travelers who make it this far, the highlight is spending the evening at a desert camp amid the dunes themselves.",
            'cost' => "Sunset Camel Ride in Sahara Merzouga Desert Erg Chebbi Dunes from $15.85 for one person, Camel Trekking Excursion Overnight Desert Camp Merzouga Desert Erg Chebbi Dunesfrom $73.19",
            'working_hours' => "Open 24 hours",
            'country_id' => 4,
        ]);
        $ErgChebbi->images()->createMany([
            ['file_name' => "Erg Chebbi1.jpg"],
            ['file_name' => "Erg Chebbi2.jpg"],
            ['file_name' => "Erg Chebbi3.jpg"],
            ['file_name' => "Erg Chebbi4.jpg"],
            ['file_name' => "Erg Chebbi5.jpg"],
            ['file_name' => "Erg Chebbi6.jpg"],
            ['file_name' => "Erg Chebbi7.jpg"],
            ['file_name' => "Erg Chebbi8.jpg"],
            ['file_name' => "Erg Chebbi9.jpg"],
            ['file_name' => "Erg Chebbi10.jpg"],
            ['file_name' => "Erg Chebbi11.jpeg"],
        ]);
        $DaraValley = PointOfInterest::create([
            'name' => "Dara Valley",
            'longtiude' => "-11.120306",
            'latitude' => "28.681700",
            'details' => "Morocco's longest river, at 1,100 kilometres (680 mi).
            It is formed by the confluence of the Dadès River and Imini River.
            It flows from the High Atlas mountains, initially south-eastward to Tagounite, and from Tagounite mostly westwards to its mouth in the Atlantic Ocean somewhat north of Tan-Tan.
            In 1971, the (El) Mansour Eddahabi dam was constructed to service the regional capital of Ouarzazate and to regulate the flow of the Draa.
            Most of the year the part of the Draa after Tagounite falls dry.
            The water from the Draa is used to irrigate palm groves and small farms along the river.
            The inhabitants of the Draa are called in Arabic Drawa, in Shilha Idrawiyn, the most famous Drawi (singular of Drawa) undoubtedly being Sultan Mohammed ash-Sheikh (1490–1557).
            Outside of the Draa region this name is mostly used to refer to the dark skinned people of Draa, which make up the largest portion of its inhabitants.
            This valley, which connects the southeastern end of the High Atlas with the desert beyond, is prime territory for architecture and history fans.
            All the way to the town of Zagora, the road is rimmed by palm tree oases and scattered with beautifully preserved kasbahs made from mudbrick, which are fascinating to explore.
            It's a great place for a road trip, stopping off at villages along the way to admire the view and delve into the shady, dimly lit passages of the kasbahs.
            In particular check out Kasbah des Caids in Tamnougalt, which has been used as a location in plenty of Hollywood films, and Timidarte village, where the village's kasbah architecture has been finely restored.",
            'cost' => "free",
            'working_hours' => "Open 24 hours",
            'country_id' => 4,
        ]);
        $DaraValley->images()->createMany([
            ['file_name' => "Draa Valley1.jpg"],
            ['file_name' => "Draa Valley2.jpg"],
            ['file_name' => "Draa Valley3.jpg"],
            ['file_name' => "Draa Valley4.jpg"],
            ['file_name' => "Draa Valley5.jpg"],
            ['file_name' => "Draa Valley6.jpg"],
            ['file_name' => "Draa Valley7.jpg"],
            ['file_name' => "Draa Valley8.jpg"],
            ['file_name' => "Draa Valley9.jpg"],
            ['file_name' => "Draa Valley10.jpg"],
        ]);
        $Chefchaouen = PointOfInterest::create([
            'name' => "Chefchaouen",
            'longtiude' => "-5.268500",
            'latitude' => "35.169500",
            'details' => "Chefchaouen – or Chaouen, as it is often called by Moroccans – is a popular tourist destination because of its proximity to Tangier and the Spanish enclave of Ceuta.
            There are approximately two hundred hotels catering to the summer influx of European tourists.
            One distinction possessed by Chefchaouen is its blue-rinsed houses and buildings.  
            Chefchaouen is a popular shopping destination as well, as it offers many native handicrafts that are not available elsewhere in Morocco, such as wool garments and woven blankets.
            The goat cheese native to the area is also popular with tourists.
            The countryside around it has a reputation for being a prolific source of kief.
            The Chefchaouen region is one of the main producers of cannabis in Morocco. A nearby attraction is the Kef Toghobeit Cave, one of the deepest caves in Africa.
            Chefchaouen's blue walls are a popular subject of interest.
            There are several theories as to why the walls were painted blue. One popular theory is that the blue keeps mosquitos away.
            The blue is said to symbolize the sky and heaven, and serve as a reminder to lead a spiritual life.
            However, according to some locals, the walls were mandated to be painted blue simply to attract tourists at some point in the 1970s.
            The growing tourist industry is geared especially towards Spanish tourists, who are numerous during great Catholic feasts like Semana Santa and Christmas.",
            'cost' => "free",
            'working_hours' => "Open 24 hours",
            'country_id' => 4,
        ]);
        $Chefchaouen->images()->createMany([
            ['file_name' => "chefchaouen1.jpg"],
            ['file_name' => "chefchaouen2.jpg"],
            ['file_name' => "chefchaouen3.jpg"],
            ['file_name' => "chefchaouen4.jpg"],
            ['file_name' => "chefchaouen5.jpg"],
            ['file_name' => "chefchaouen6.jpg"],
            ['file_name' => "chefchaouen7.jpg"],
            ['file_name' => "chefchaouen8.jpg"],
            ['file_name' => "chefchaouen9.jpg"],
            ['file_name' => "chefchaouen10.jpg"],
        ]);
        $RiifMountains  = PointOfInterest::create([
            'name' => "Riif Mountains",
            'longtiude' => "-4.000000",
            'latitude' => "35.000000",
            'details' => "The Rif region was occupied by Spain.
            This mountainous and fertile area is bordered by Cape Spartel and Tangier to the West, by Berkane and the Moulouya River to the East, by the Mediterranean to the North, and by the Ouergha River to the South.
            It is separated into Eastern Rif (Nador, Driouch, Al Hoceima) and Western Rif (Tangier, Tetouan, Chefchaouen, Taounate).
            While much of Morocco's mountain scenery is craggy peaks surrounded by palm groves and arid plains, the Rif Mountains provide some lush green relief.
            For hikers, bikers, and day walkers, this is a good opportunity to head out into nature with plenty of trails for both advanced trekkers and those just wanting a short easy walk.
            Both Tetouan and Chefchaouen are the main bases from which to launch yourself out on a Rif Mountains adventure.
            Check out the trekking trails of Talassemtane National Park for its cedar and fir forest-covered mountain slopes and spectacular gorges and valleys to make the most of this region's natural beauty
            The Rif Mountains rise sharply from the Mediterranean to the east of Tangier.
            Their foothills lie close to Tetouan, where, contrasting strongly with the low hills and gentle colours of the Tangier hinterland, the landscape is impressively rugged.
            To the immediate east, trees cloak the limestone peaks as you climb towards the central Mount Tidiquin, the highest in the Rif range at 2,448 metres (8,000ft).
            Squat holm- and cork-oaks give way to high cedar forests and the kif plantations of Ketama.
            The further east you travel, the redder the hue of the mountain range, a change that strikes the traveller on the road to Al Hoceima where the terrain becomes denuded and barren.
            From Al Hoceima to Oujda on the Algerian border, south of a fertile coastal plain the land is desolate, crossed by cracked riverbeds.
            On the more inviting coast directly below the range are some of the finest sandy beaches to be found in Morocco.
            The increasing number of large hotels and holiday villages are fed by the international airport of Tangier and by well-off Moroccans from Fez and elsewhere, who flock to the area.
            But it is still possible to find gorgeous, unspoilt, secluded beaches between the pockets of development.
            Some of the country’s best fish restaurants are also found along this stretch of shoreline. The resorts include M’diq, Cabo Negro (which also has an impressive golf course) and Martil.",
            'cost' => "free",
            'working_hours' => "Open 24 hours",
            'country_id' => 4,
        ]);
        $RiifMountains->images()->createMany([
            ['file_name' => "Rif Mountains.jpg"],
            ['file_name' => "Rif Mountains1.jpg"],
            ['file_name' => "Rif Mountains2.jpg"],
            ['file_name' => "Rif Mountains3.jpg"],
            ['file_name' => "Rif Mountains5.jpg"],
            ['file_name' => "Rif Mountains6.jpg"],
            ['file_name' => "Rif Mountains7.jpg"],
            ['file_name' => "Rif Mountains8.jpg"],
            ['file_name' => "Rif Mountains9.jpg"],
            ['file_name' => "Rif Mountains10.jpg"],
        ]);
        $HassanIIMosque = PointOfInterest::create([
            'name' => "Hassan II Mosque",
            'longtiude' => "-7.632555",
            'latitude' => "33.608635",
            'details' => "Hassan II Mosque, known also as Grande Mosquée Hassan II, is a large modern mosque located in the central coastal part of Casablanca, the capital city of Morocco.
            It is the largest religious establishment in the country and the whole region.
            It is also on the list of Top 20 largest mosques in the world.
            But it is famous as well as being the tallest mosque in the world, with the height of its minarets exceeding 670 feet.
            It was opened in the end of the last century and designed by a group of leading local architects.
            The mosque rises above the Atlantic Ocean.
            The building is built partially on land and partially over the ocean.
            this siting was accomplished by creating a platform linking a natural rock outcrop reclaimed from the sea, where a swimming pool had previously been located.
            Two large breakwaters were also built, to protect the mosque from the erosive action of the ocean waves, which can be up to 10 metres (33 ft) in height.
            A temporary pier 800 metres (2,600 ft) in length had to be erected to protect the foundations of the pillars from the sea during the construction period.
            Its environmental advantage is that it is free of noise and pollution and receives a fresh breeze from the sea.",
            'cost' => "$30 for one person",
            'working_hours' => "Saturday to Thursday at 9AM, 10AM, 11AM and 2PM in the afternoon. Friday: 9AM and 10AM in the morning and 2PM.",
            'country_id' => 4,
        ]);
        $HassanIIMosque->images()->createMany([
            ['file_name' => "Hassan II Mosque1.jpg"],
            ['file_name' => "Hassan II Mosque2.jpg"],
            ['file_name' => "Hassan II Mosque3.jpg"],
            ['file_name' => "Hassan II Mosque4.jpg"],
            ['file_name' => "Hassan II Mosque5.jpg"],
            ['file_name' => "Hassan II Mosque6.jpg"],
            ['file_name' => "Hassan II Mosque7.jpg"],
            ['file_name' => "Hassan II Mosque8.jpg"],
            ['file_name' => "Hassan II Mosque9.jpg"],
            ['file_name' => "Hassan II Mosque10.jpg"],
        ]);
        // eof Morocco
        // czech 
        $moraviankarst = PointOfInterest::create([
            'name' => "moravian karst",
            'longtiude' => "16.699747846482413",
            'latitude' => "49.30787868714214",
            'details' => " is a karst landscape and protected nature reserve to the north of Brno in the eastern part of the Czech Republic, located near the town of Blansko. It encompasses a number of notable geological features, including roughly 1100 caverns and gorges and covers an area of roughly 92 km².[1] Currently,[when?] five of the cave systems (Punkva Caves (discovered by Karel Absolon), Balcarka Cave, Kateřinská Cave, Výpustek Cave and Sloupsko-šošůvské Caves+Kůlna Cave) are open for public tours; another - Amatérská Cave, Býčí skála Cave or Stránská skála (out of the border) only for science exploration.",
            'cost' => "7 Euro for one person",
            'working_hours' => "Everyday from 8am to 4pm",
            'country_id' => 5,
        ]);
        $moraviankarst->images()->createMany([
            ['file_name' => "Moravian karst1.jpg"],
            ['file_name' => "Moravian karst2.jpg"],
            ['file_name' => "Moravian karst3.jpg"],
            ['file_name' => "Moravian karst4.jpg"],
            ['file_name' => "Moravian karst5.jpg"],
        ]);
        $VillaTugendhat = PointOfInterest::create([
            'name' => "Villa Tugendhat",
            'longtiude' => "16.61604130230866",
            'latitude' => "49.20731291478078",
            'details' => "The Villa of Greta and Fritz Tugendhat, designed by the architect Ludwig Mies van der Rohe and built in 1929–1930, is a monument of modern architecture, and is the only example of modern architecture in the Czech Republic inscribed in the list of UNESCO World Cultural Heritage sites.",
            'cost' => "12 euro for adults, 7 for concessions",
            'working_hours' => "Everyday from 10am to 6pm",
            'country_id' => 5,
        ]);
        $VillaTugendhat->images()->createMany([
            ['file_name' => "Villa Tugendhat1.jpg"],
            ['file_name' => "Villa Tugendhat2.jpg"],
            ['file_name' => "Villa Tugendhat3.jpg"],
            ['file_name' => "Villa Tugendhat4.jpg"],
            ['file_name' => "Villa Tugendhat5.jpg"],
        ]);
        $DianaTower = PointOfInterest::create([
            'name' => "Diana Tower",
            'longtiude' => "12.872344475281993",
            'latitude' => "50.21912910703594",
            'details' => "The hill offering a breathtaking view of the spa town in the valley below was discovered as a destination for hikers by local cutler Václav Drumm and his uncle, chronicler August Leopold Stöhr, who had hewn their way through the thick woods and had placed two resting stools at the lookout point. Contemporary guides promoted the site as a lookout with the best view of the spa throughout the 19th century. As years went by, prominents began to appear among the hikers heading to the newly landscaped lookout point, including Johann Wolfgang Goethe or Theodor Körner. Until the beginning of the 20th century, they had to climb up the hill on foot.",
            'cost' => "from 2E to 9E for one person",
            'working_hours' => "Everyday from 9am to 5pm",
            'country_id' => 5,
        ]);
        $DianaTower->images()->createMany([
            ['file_name' => "Diana Tower1.jpg"],
            ['file_name' => "Diana Tower2.jpg"],
            ['file_name' => "Diana Tower3.jpg"],
            ['file_name' => "Diana Tower4.jpg"],
        ]);
        $locketCastle = PointOfInterest::create([
            'name' => "Diana Tower",
            'longtiude' => "12.754420875283293",
            'latitude' => "50.18721720301162",
            'details' => "is a 12th-century Gothic style castle about 12 kilometres (7 mi) from Karlovy Vary on a massive rock in the town of Loket, Karlovarský kraj, Czech Republic. It is surrounded on three sides by the Ohře river. Once known as 'the Impregnable Castle of Bohemia', because of its thick walls, it is one of the oldest and most valuable historical stone castles in the Czech lands. It is administered by the Loket Castle Foundation since 1993 and preserved today as a museum and national monument.
            Every year the town plays host to an Opera festival, with performances by the Czech National Opera in an outdoor amphitheatre with the castle as a backdrop
             and is also host for the Czech motocross grand prix.",
            'cost' => "15E for family, 6E for adults and 5 for studnts and under 18",
            'working_hours' => "Everyday from 9am to 4pm",
            'country_id' => 5,
        ]);
        $locketCastle->images()->createMany([
            ['file_name' => "Locket castle1.jpg"],
            ['file_name' => "Locket castle2.jpg"],
            ['file_name' => "Locket castle3.jpg"],
            ['file_name' => "Locket castle4.jpg"],
            ['file_name' => "Locket castle5.jpg"],
        ]);
        $CharlesBridge = PointOfInterest::create([
            'name' => "Charles Bridge",
            'longtiude' => "14.411447331087324",
            'latitude' => "50.08662164216385",
            'details' => "Charles Bridge is 516 meters long and 10 meters wide stone bridge across the Vltava River that connects two popular Prague districts, the Old Town and Lesser Town. The well-worn cobblestone bridge is one of the most famous sights and landmarks in Prague, and you shouldn't miss it out while exploring the capital of the Czech Republic.",
            'cost' => "Free",
            'working_hours' => "Open 24 hours",
            'country_id' => 5,
        ]);
        $CharlesBridge->images()->createMany([
            ['file_name' => "Charles Bridge1.jpg"],
            ['file_name' => "Charles Bridge2.jpg"],
            ['file_name' => "Charles Bridge3.jpg"],
            ['file_name' => "Charles Bridge4.jpg"],
            ['file_name' => "Charles Bridge5.jpg"],
        ]);
        // eof czech
        // Canada
        $CNTower = PointOfInterest::create([
            'name' => "CN Tower",
            'longtiude' => "-79.38706752632001",
            'latitude' => "43.64278357135298",
            'details' => "CN Tower is a 553.3 m-high (1,815.3 ft) concrete communications and observation tower located in Downtown Toronto, Ontario, Canada. Built on the former Railway Lands, it was completed in 1976. Its name 'CN' originally referred to Canadian National, the railway company that built the tower. Following the railway's decision to divest non-core freight railway assets prior to the company's privatization in 1995, it transferred the tower to the Canada Lands Company, a federal Crown corporation responsible for real estate development.",
            'cost' => "$195 + Tax for one person",
            'working_hours' => "Everyday from 10am to 8pm",
            'country_id' => 6,
        ]);
        $CNTower->images()->createMany([
            ['file_name' => "CN Tower1.jpg"],
            ['file_name' => "CN Tower2.jpg"],
            ['file_name' => "CN Tower3.jpg"],
            ['file_name' => "CN Tower4.jpg"],
            ['file_name' => "CN Tower5.jpg"],
        ]);
        $NotreDameBasilica = PointOfInterest::create([
            'name' => "Notre-Dame Basilica",
            'longtiude' => "-73.55619549940005",
            'latitude' => "45.50467576562489",
            'details' => "Notre-Dame Basilica is one of Montreal's most popular attractions, an imposing architectural sight with the kind of interior you'd expect to stumble on in the heart of Paris. But in this case, you're blocks away from the water's edge of a New World port, in a cobblestone neighborhood straight of an Old World picture book.",
            'cost' => "5 euro for one person",
            'working_hours' => "Monday to Friday from 8AM to 6:45PM, Saturday and Sunday from 8AM to 7:45PM",
            'country_id' => 6,
        ]);
        $NotreDameBasilica->images()->createMany([
            ['file_name' => "Notre-Dame Basilica1.jpg"],
            ['file_name' => "Notre-Dame Basilica2.jpg"],
            ['file_name' => "Notre-Dame Basilica3.jpg"],
            ['file_name' => "Notre-Dame Basilica4.jpg"],
            ['file_name' => "Notre-Dame Basilica5.jpg"],
        ]);
        $OldPortofMontreal = PointOfInterest::create([
            'name' => "The Old Port of Montreal",
            'longtiude' => "-73.54842497116806",
            'latitude' => "45.50952827077221",
            'details' => "The Old Port of Montreal (French: Vieux-Port de Montréal) is the historic port of Montreal, Quebec, Canada. Located in Old Montreal, it stretches for over 2 km (1.2 mi) along the Saint Lawrence River. It was used as early as 1611, when French fur traders used it as a trading post",
            'cost' => "free",
            'working_hours' => "Monday to Friday from 9AM to 5PM",
            'country_id' => 6,
        ]);
        $OldPortofMontreal->images()->createMany([
            ['file_name' => "Old Port of Montreal1.jpg"],
            ['file_name' => "Old Port of Montreal2.jpg"],
            ['file_name' => "Old Port of Montreal3.jpg"],
            ['file_name' => "Old Port of Montreal4.jpg"],
            ['file_name' => "Old Port of Montreal5.jpg"],
        ]);
        $StanleyPark = PointOfInterest::create([
            'name' => "Stanley Park",
            'longtiude' => "-123.14433802837932",
            'latitude' => "49.30439129654919",
            'details' => "Stanley Park is a 405-hectare (1,001-acre) public park that borders the downtown of Vancouver in British Columbia, Canada, and is mostly surrounded by waters of Burrard Inlet and English Bay.
            The park has a long history. The land was originally used by Indigenous peoples for thousands of years before British Columbia was colonized by the British during the 1858 Fraser Canyon Gold Rush and was one of the first areas to be explored in the city. For many years after colonization, the future park with its abundant resources would also be home to non-Indigenous settlers. The land was later turned into Vancouver's first park when the city incorporated in 1886. It was named after Lord Stanley, 16th Earl of Derby, a British politician who had recently been appointed Governor General. It was originally known as Coal Peninsula and was set aside for military fortifications to guard the entrance to Vancouver harbour. In 1886 Vancouver city council successfully sought a lease of the park which was granted for $1 per year. In September 1888 Lord Stanley opened the park in his name.",
            'cost' => "free",
            'working_hours' => "Every day from 9am to 5pm",
            'country_id' => 6,
        ]);
        $StanleyPark->images()->createMany([
            ['file_name' => "Stanley Park1.jpg"],
            ['file_name' => "Stanley Park2.jpg"],
            ['file_name' => "Stanley Park3.jpg"],
            ['file_name' => "Stanley Park4.jpg"],
            ['file_name' => "Stanley Park5.jpg"],
            ['file_name' => "Stanley Park6.jpg"],
        ]);
        // eof Canada
        //egypt
        $pyramids = PointOfInterest::create([
            'name' => "Pyramids",
            'longtiude' => "31.134230",
            'latitude' => "29.979397",
            'details' => " The last surviving of the Seven Wonders of the Ancient World, the Pyramids of Giza are one of the world's most recognizable landmarks.
            Built as tombs for the mighty Pharaohs and guarded by the enigmatic Sphinx, Giza's pyramid complex has awed travelers down through the ages and had archaeologists 
            (and a fair few conspiracy theorists) scratching their heads over how they were built for centuries.Today, these megalithic memorials to dead kings are still as wondrous a sight as they ever were.
             An undeniable highlight of any Egypt trip, Giza's pyramids should not be missed.",
            'cost' => "foreighners 200 egp , student foreighners 100 egp
            egyptions 30 egp , students 10 egp",
            'working_hours' => "Every day from 8am to 5pm",
            'country_id' => 7,
        ]);
        $pyramids->images()->createMany([
            ['file_name' => "pyramids (1).jpg"],
            ['file_name' => "pyramids (2).jpg"],
            ['file_name' => "pyramids (3).jpg"],
            ['file_name' => "pyramids (4).jpg"],
            ['file_name' => "pyramids (5).jpg"],
            ['file_name' => "pyramids (6).jpg"],
            ['file_name' => "pyramids (7).jpg"],
            ['file_name' => "pyramids (8).jpg"],
            ['file_name' => "pyramids (9).jpg"],
            ['file_name' => "pyramids (10).jpg"],
            ['file_name' => "pyramids (11).jpg"],
            ['file_name' => "pyramids (12).jpg"],
            ['file_name' => "pyramids (13).jpg"],
        ]);
        $Saqqara = PointOfInterest::create([
            'name' => "Saqqara Pyramid",
            'longtiude' => "31.216833",
            'latitude' => "29.853356",
            'details' => "Everyone's heard of Giza's Pyramids, but they're not the only pyramids Egypt has up its sleeve. Day-tripping from Cairo, Saqqara is the vast necropolis of the Old Kingdom pharaohs and showcases how the Ancient Egyptians advanced their architectural knowledge to finally create a true pyramid with the Step Pyramid, Bent Pyramid, and Red Pyramid being among the highlights here. The various tombs of court administrators, with interior walls covered with friezes describing daily scenes, scattered throughout the archaeological site are just as much a reason to visit as the pyramids themselves.",
            'cost' => "foreighner 180 egp , student 90 egp
            egyptian 20 egp , student 5 ",
            'working_hours' => "Every day from 9am to 4pm",
            'country_id' => 7,
        ]);
        $Saqqara->images()->createMany([
            ['file_name' => "saqqara (1).jpg"],
            ['file_name' => "saqqara (2).jpg"],
            ['file_name' => "saqqara (3).jpg"],
            ['file_name' => "saqqara (4).jpg"],
            
        ]);
        $egyptianmuseum = PointOfInterest::create([
            'name' => "Cairo's Egyptian Museum",
            'longtiude' => "31.233585",
            'latitude' => "30.047986",
            'details' => "A treasure trove of the Pharaonic world, Cairo's Egyptian Museum is one of the world's great museum collections. The faded pink mansion is home to a dazzling amount of exhibits. It's a higgledy-piggledy place with little labeling on offer and not much chronological order, but that's half of its old-school charm.

            Upstairs is the golden glory of King Tutankhamen and the fascinating royal mummies exhibits, but really every corner you turn here is home to some wonderful piece of ancient art or statuary that would form a highlight of any other museum.",
            'cost' => "foreIGNER:
                Adult: EGP 200\ Student: EGP 100
                Photography:
                (Personal Use –without Flash): EGP 50
                Video:
                (Personal Use –without Flash): EGP 300
                
                
                EGYPTIANS\ ARABS:
                Adult: EGP 30\ Student: EGP 10
                Photography:
                (Personal Use –without Flash): EGP 20
                Video:
                (Personal Use –without Flash): EGP 300
                
                Free entrance for children under 6 years ",
            'working_hours' => "Thursday 
            9AM–5PM
            5:30–9PM
            Friday
            9AM–4PM
            Saturday
            9AM–5PM
            Sunday
            9AM–5PM
            5:30–9PM
            Monday
            9AM–5PM
            Tuesday
            9AM–5PM
            Wednesday
            9AM–5PM
            ",
            'country_id' => 7,
        ]);
        $egyptianmuseum->images()->createMany([
            ['file_name' => "egpMuseum (1).jpg"],
            ['file_name' => "egpMuseum (2).jpg"],
            ['file_name' => "egpMuseum (3).jpg"],
            ['file_name' => "egpMuseum (4).jpg"],
            ['file_name' => "egpMuseum (5).jpg"],
            ['file_name' => "egpMuseum (6).jpg"],
            ['file_name' => "egpMuseum (7).jpg"],
            ['file_name' => "egpMuseum (8).jpg"],
            ['file_name' => "egpMuseum (9).jpg"],
            ['file_name' => "egpMuseum (10).jpg"],
            ['file_name' => "egpMuseum (11).jpg"],
            
            
        ]);
        $karnak = PointOfInterest::create([
            'name' => "Pyramids",
            'longtiude' => " 32.657284",
            'latitude' => "25.719479",
            'details' => " Famed for the Valley of the Kings, Karnak Temple, and the Memorial Temple of Hatshepsut, the Nile-side town of Luxor in Upper Egypt has a glut of tourist attractions. This is ancient Thebes, power base of the New Kingdom pharaohs, and home to more sights than most can see on one visit.

            While the East Bank brims with vibrant souk action, the quieter West Bank is home to a bundle of tombs and temples that has been called the biggest open-air museum in the world. 
            Spend a few days here exploring the colorful wall art of the tombs and gazing in awe at the colossal columns in the temples, and you'll see why Luxor continues to fascinate historians and archaeologists.",
            'cost' => "150 egp --> 240 egp for sound and light show ",
            'working_hours' => "Every day from 6am to 5:30pm",
            'country_id' => 7,
        ]);
        $karnak->images()->createMany([
            ['file_name' => "karnak (1).jpg"],
            ['file_name' => "karnak (2).jpg"],
            ['file_name' => "karnak (3).jpg"],
            ['file_name' => "karnak (4).jpg"],
            ['file_name' => "karnak (5).jpg"],
            ['file_name' => "karnak (6).jpg"],
            ['file_name' => "karnak (7).jpg"],
            ['file_name' => "karnak (8).jpg"],
            ['file_name' => "karnak (9).jpg"],
            ['file_name' => "karnak (10).jpg"],
            ['file_name' => "karnak (11).jpg"],
            ['file_name' => "karnak (12).jpg"],
            ['file_name' => "karnak (13).jpg"],
            ['file_name' => "karnak (14).jpg"],
        ]);
        $bluehole = PointOfInterest::create([
            'name' => "The Blue Hole",
            'longtiude' => " 28.572387",
            'latitude' => "34.537337",
            'details' => " The Blue Hole is a diving location on the southeast Sinai, a few kilometres north of Dahab, Egypt on the coast of the Red Sea.

            The Blue Hole is a submarine sinkhole, with a maximum depth within the hole of just over 100 m (328 feet). There is a shallow opening to the sea around 6 m (20 feet) deep, known as (the saddle), and a 26 m (85 feet) long tunnel, known as (the Arch), whose ceiling is at a depth of 55 m (181 feet),[1] and whose bottom falls away as it reaches the seaward side to about 120 m (394 feet).[2] On the seaward side the floor drops steeply to over 1,000 metres (3,300 ft).[3] The hole and the surrounding area have an abundance of coral and reef fish",
            'cost' => "$40 for one person ",
            'working_hours' => "Open 24 hours",
            'country_id' => 7,
        ]);
        $bluehole->images()->createMany([
            ['file_name' => "bluehole.jpg"],
            ['file_name' => "bluehole1.jpg"],
            ['file_name' => "bluehole2.jpg"],
            ['file_name' => "bluehole3.jpg"],
            ['file_name' => "bluehole4.jpg"],
            ['file_name' => "bluehole5.jpg"],
          
          
        ]);
 
    }
}