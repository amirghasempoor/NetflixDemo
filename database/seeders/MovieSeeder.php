<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::insert([

            [
                'title' => 'Bad Boys',
                'description' => 'Two hip detectives protect a witness to a murder while investigating a case of stolen heroin from the evidence storage room from their police precinc',
                'genre' => 'comedy, action',
                'publish_day' => '1995-04-07',
                'image' => 'images/badboys.jpg',
            ],

            [
                'title' => 'Titanic',
                'description' => 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.',
                'genre' => 'drama, romance',
                'publish_day' => '1997-12-19',
                'image' => 'images/titanic.jpg',
            ],

            [
                'title' => 'Coda',
                'description' => 'As a CODA (Child of Deaf Adults) Ruby is the only hearing person in her deaf family. When the family\'s fishing business is threatened, Ruby finds herself torn between pursuing her passion at Berklee College of Music and her fear of abandoning her parents.',
                'genre' => 'comedy, drama',
                'publish_day' => '2021-01-29',
                'image' => 'images/coda.jpg',
            ],

            [
                'title' => 'Dune',
                'description' => 'A noble family becomes embroiled in a war for control over the galaxy\'s most valuable asset while its heir becomes troubled by visions of a dark future.',
                'genre' => 'action, adventure',
                'publish_day' => '2021-09-03',
                'image' => 'images/dune.jpg',
            ],

            [
                'title' => 'Tenet',
                'description' => 'Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.',
                'genre' => 'action',
                'publish_day' => '2020-08-22',
                'image' => 'images/tenet.jpg',
            ],

            [
                'title' => 'John Wick',
                'description' => 'An ex-hit-man comes out of retirement to track down the gangsters that killed his dog and took his car.',
                'genre' => 'action',
                'publish_day' => '2014-09-24',
                'image' => 'images/wick.jpg',
            ],

            [
                'title' => 'Interstellar',
                'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'genre' => 'adventure, drama',
                'publish_day' => '2013-10-26',
                'image' => 'images/interstellar.jpg',
            ],

            [
                'title' => 'Extraction',
                'description' => 'Tyler Rake, a fearless black market mercenary, embarks on the most deadly extraction of his career when he\'s enlisted to rescue the kidnapped son of an imprisoned international crime lord.',
                'genre' => 'action',
                'publish_day' => '2020-04-24',
                'image' => 'images/extraction.jpg',
            ],

            [
                'title' => 'Joker',
                'description' => 'The rise of Arthur Fleck, from aspiring stand-up comedian and pariah to Gotham\'s clown prince and leader of the revolution.',
                'genre' => 'action, drama',
                'publish_day' => '2019-06-30',
                'image' => 'images/joker.jpg',
            ],

            [
                'title' => 'The Godfather',
                'description' => 'Don Vito Corleone, head of a mafia family, decides to hand over his empire to his youngest son Michael. However, his decision unintentionally puts the lives of his loved ones in grave danger.',
                'genre' => 'drama',
                'publish_day' => '1972-03-15',
                'image' => 'images/TheGodfather.jpg'
            ],

            [
                'title' => 'Fury',
                'description' => 'A grizzled tank commander makes tough decisions as he and his crew fight their way across Germany in April, 1945.',
                'genre' => 'drama, action',
                'publish_day' => '2014-10-15',
                'image' => 'images/fury.jpg',
            ],

            [
                'title' => 'The Prestige',
                'description' => 'After a tragic accident, two stage magicians in 1890s London engage in a battle to create the ultimate illusion while sacrificing everything they have to outwit each other.',
                'genre' => 'drama',
                'publish_day' => '2006-10-17',
                'image' => 'images/theprestige.jpg',
            ],

            [
                'title' => 'The Wolf of Wall Street',
                'description' => 'Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government.',
                'genre' => 'comedy, crime',
                'publish_day' => '2013-10-09',
                'image' => 'images/wow.jpg',
            ],

            [
                'title' => 'Dunkirk',
                'description' => 'Allied soldiers from Belgium, the British Commonwealth and Empire, and France are surrounded by the German Army and evacuated during a fierce battle in World War II',
                'genre' => 'action, drama',
                'publish_day' => '2017-05-13',
                'image' => 'images/dunkirk.jpg',
            ],

            [
                'title' => 'Top Gun: Maverick',
                'description' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUN\'s elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
                'genre' => 'action, drama',
                'publish_day' => '2022-06-18',
                'image' => 'images/topgun.jpg',
            ],

            [
                'title' => 'Babylon',
                'description' => 'A tale of outsized ambition and outrageous excess, it traces the rise and fall of multiple characters during an era of unbridled decadence and depravity in early Hollywood.',
                'genre' => 'comedy, drama',
                'publish_day' => '2022-10-15',
                'image' => 'images/babylon.jpg',
            ],

            [
                'title' => 'The Big Short',
                'description' => 'In 2006-2007 a group of investors bet against the United States mortgage market. In their research, they discover how flawed and corrupt the market is.',
                'genre' => 'comedy, drama',
                'publish_day' => '2015-09-12',
                'image' => 'images/bigshort.jpg',
            ],

            [
                'title' => 'Deadpool',
                'description' => 'A wisecracking mercenary gets experimented on and becomes immortal yet hideously scarred, and sets out to track down the man who ruined his looks.',
                'genre' => 'comedy, action',
                'publish_day' => '2016-01-21',
                'image' => 'images/deadpool.jpg',
            ],

            [
                'title' => 'Baywatch',
                'description' => 'Devoted lifeguard Mitch Buchannon butts heads with a brash new recruit, as they uncover a criminal plot that threatens the future of the bay.',
                'genre' => 'comedy, action',
                'publish_day' => '2017-05-12',
                'image' => 'images/baywatch.jpg',
            ],

            [
                'title' => 'Men in Black',
                'description' => 'A police officer joins a secret organization that polices and monitors extraterrestrial interactions on Earth.',
                'genre' => 'comedy, action',
                'publish_day' => '1997-05-25',
                'image' => 'images/blackmen.jpg',
            ],

            [
                'title' => 'A Man Called Otto',
                'description' => 'Otto is a grump who\'s given up on life following the loss of his wife and wants to end it all. When a young family moves in nearby, he meets his match in quick-witted Marisol, leading to a friendship that will turn his world around.',
                'genre' => 'comedy, drama',
                'publish_day' => '2022-10-25',
                'image' => 'images/otto.jpg',
            ],

            [
                'title' => 'Inception',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.',
                'genre' => 'adventure',
                'publish_day' => '2010-04-08',
                'image' => 'images/inception.jpg',
            ],

            [
                'title' => 'Mad Max: Fury Road',
                'description' => 'In a post-apocalyptic wasteland, a woman rebels against a tyrannical ruler in search for her homeland with the aid of a group of female prisoners, a psychotic worshiper and a drifter named Max.',
                'genre' => 'adventure',
                'publish_day' => '2015-06-07',
                'image' => 'images/madmax.jpg',
            ],

            [
                'title' => 'Napoleon',
                'description' => 'The film takes a personal look at Napoleon Bonaparte\'s origins, and his swift, ruthless climb to emperor viewed through the prism of his addictive, and often volatile, relationship with his wife and one true love, Josephine.',
                'genre' => 'adventure, action',
                'publish_day' => '2023-07-20',
                'image' => 'images/napoleon.jpg',
            ],

            [
                'title' => 'No Time to Die',
                'description' => 'James Bond has left active service. His peace is short-lived when Felix Leiter, an old friend from the CIA, turns up asking for help, leading Bond onto the trail of a mysterious villain armed with dangerous new technology.',
                'genre' => 'adventure, action',
                'publish_day' => '2021-10-28',
                'image' => 'images/007.jpg',
            ],

            [
                'title' => 'The Irishman',
                'description' => 'An illustration of Frank Sheeran\'s life, from W.W.II veteran to hit-man for the Bufalino crime family and his alleged assassination of his close friend Jimmy Hoffa.',
                'genre' => 'drama',
                'publish_day' => '2019-10-27',
                'image' => 'images/irish.jpg',
            ],

            [
                'title' => '1917',
                'description' => 'April 6th, 1917. As an infantry battalion assembles to wage war deep in enemy territory, two soldiers are assigned to race against time and deliver a message that will stop 1,600 men from walking straight into a deadly trap.',
                'genre' => 'drama',
                'publish_day' => '2019-09-04',
                'image' => 'images/1917.jpg',
            ],

            [
                'title' => 'The Equalizer',
                'description' => 'A man who believes he has put his mysterious past behind him cannot stand idly by when he meets a young girl under the control of ultra-violent Russian gangsters.',
                'genre' => 'action',
                'publish_day' => '2014-10-07',
                'image' => 'images/equalizer.jpg',
            ],

            [
                'title' => 'Green Book',
                'description' => 'A working-class Italian-American bouncer becomes the driver for an African-American classical pianist on a tour of venues through the 1960s American South.',
                'genre' => 'comedy, drama',
                'publish_day' => '2018-10-11',
                'image' => 'images/greenbook.jpg',
            ],

            [
                'title' => 'Rocky',
                'description' => 'A small-time Philadelphia boxer gets a supremely rare chance to fight the world heavyweight champion in a bout in which he strives to go the distance for his self-respect.',
                'genre' => 'drama',
                'publish_day' => '1976-12-20',
                'image' => 'images/rocky.jpg',
            ],
        ]);
    }
}
