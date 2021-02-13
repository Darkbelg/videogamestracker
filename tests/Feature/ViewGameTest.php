<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewGameTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @group network phpunit --exclude network
     */
    public function test_the_game_page_shows_correct_game_info()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeSingleGame(),
        ]);

        $response = $this->get(route('games.show', 'the-medium'));

        $response->assertSuccessful();
        $response->assertSee('Fake The Medium');
        $response->assertSee('Adventure');
        $response->assertSee('Bloober Team');
        $response->assertSee('Series X');
        $response->assertSee('60');
        $response->assertSee('72');
        $response->assertSee('https://twitter.com/TheMediumGame');
        $response->assertSee('Discover a dark mystery only a medium can solve.');
        $response->assertSee('//images.igdb.com/igdb/image/upload/t_cover_big/co2sbi.jpg');
        $response->assertSee('The Sinking City');
    }

    public function fakeSingleGame()
    {
        $JsonApiData = <<<'JSONDATA'
[
    {
        "id":133308,
        "aggregated_rating":72.7272727272727,
        "cover":{
            "id":130014,
            "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co2sbi.jpg"
        },
        "first_release_date":1611792000,
        "genres":[
            {
                "id":31,
                "name":"Adventure"
            }
        ],
        "involved_companies":[
            {
                "id":117780,
                "company":{
                "id":4598,
                "name":"Bloober Team"
                }
            },
            {
                "id":117781,
                "company":{
                "id":19067,
                "name":"Bloober Team SA"
                }
            }
        ],
        "name":"Fake The Medium",
        "platforms":[
            {
                "id":6,
                "abbreviation":"PC"
            },
            {
                "id":169,
                "abbreviation":"Series X"
            }
        ],
        "rating":60.3101853207987,
        "screenshots":[
            {
                "id":394104,
                "alpha_channel":false,
                "animated":false,
                "game":133308,
                "height":787,
                "image_id":"sc8g3c",
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/sc8g3c.jpg",
                "width":1399,
                "checksum":"317f1998-0421-79c8-5383-446a677b6c3e"
            },
            {
                "id":394105,
                "alpha_channel":false,
                "animated":false,
                "game":133308,
                "height":787,
                "image_id":"sc8g3d",
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/sc8g3d.jpg",
                "width":1399,
                "checksum":"912cdc73-c5b6-3c7a-bee2-cbacb265c6e4"
            },
            {
                "id":394106,
                "alpha_channel":false,
                "animated":false,
                "game":133308,
                "height":787,
                "image_id":"sc8g3e",
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/sc8g3e.jpg",
                "width":1399,
                "checksum":"9a2374d5-9735-9e02-45ab-4fb2f7ab67eb"
            },
            {
                "id":394107,
                "alpha_channel":false,
                "animated":false,
                "game":133308,
                "height":787,
                "image_id":"sc8g3f",
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/sc8g3f.jpg",
                "width":1399,
                "checksum":"7715fed1-2b9b-4578-4d1b-e443fe0936a1"
            },
            {
                "id":394108,
                "alpha_channel":false,
                "animated":false,
                "game":133308,
                "height":787,
                "image_id":"sc8g3g",
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/sc8g3g.jpg",
                "width":1399,
                "checksum":"0d653bb5-4166-72b4-dbb0-39a0701718eb"
            },
            {
                "id":394109,
                "alpha_channel":false,
                "animated":false,
                "game":133308,
                "height":787,
                "image_id":"sc8g3h",
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/sc8g3h.jpg",
                "width":1399,
                "checksum":"f63c7990-881f-75db-42df-668246766bb4"
            },
            {
                "id":394110,
                "alpha_channel":false,
                "animated":false,
                "game":133308,
                "height":787,
                "image_id":"sc8g3i",
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/sc8g3i.jpg",
                "width":1399,
                "checksum":"ea304a2c-83c3-e1fc-54e8-b21cf430c7c2"
            },
            {
                "id":394111,
                "alpha_channel":false,
                "animated":false,
                "game":133308,
                "height":787,
                "image_id":"sc8g3j",
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/sc8g3j.jpg",
                "width":1399,
                "checksum":"b187be62-15c0-6a2d-e05d-ebda2127ed6d"
            }
        ],
        "similar_games":[
            {
                "id":18020,
                "cover":{
                "id":68953,
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co1h7d.jpg"
                },
                "name":"Visage",
                "platforms":[
                {
                    "id":6,
                    "abbreviation":"PC"
                },
                {
                    "id":48,
                    "abbreviation":"PS4"
                },
                {
                    "id":49,
                    "abbreviation":"XONE"
                }
                ],
                "rating":82.2941446246236,
                "slug":"visage"
            },
            {
                "id":18225,
                "cover":{
                "id":74152,
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co1l7s.jpg"
                },
                "name":"The Sinking City",
                "platforms":[
                {
                    "id":6,
                    "abbreviation":"PC"
                },
                {
                    "id":48,
                    "abbreviation":"PS4"
                },
                {
                    "id":49,
                    "abbreviation":"XONE"
                },
                {
                    "id":130,
                    "abbreviation":"Switch"
                }
                ],
                "rating":76.8008331110938,
                "slug":"the-sinking-city"
            },
            {
                "id":26565,
                "cover":{
                "id":76514,
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co1n1e.jpg"
                },
                "name":"Yuppie Psycho",
                "platforms":[
                {
                    "id":3,
                    "abbreviation":"Linux"
                },
                {
                    "id":6,
                    "abbreviation":"PC"
                },
                {
                    "id":14,
                    "abbreviation":"Mac"
                }
                ],
                "rating":74.4473932429195,
                "slug":"yuppie-psycho"
            },
            {
                "id":55984,
                "cover":{
                "id":81478,
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co1qva.jpg"
                },
                "name":"Blacksad: Under the Skin",
                "platforms":[
                {
                    "id":6,
                    "abbreviation":"PC"
                },
                {
                    "id":14,
                    "abbreviation":"Mac"
                },
                {
                    "id":48,
                    "abbreviation":"PS4"
                },
                {
                    "id":49,
                    "abbreviation":"XONE"
                },
                {
                    "id":130,
                    "abbreviation":"Switch"
                }
                ],
                "rating":78.8068531452148,
                "slug":"blacksad-under-the-skin"
            },
            {
                "id":103266,
                "cover":{
                "id":106377,
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co2a2x.jpg"
                },
                "name":"Twin Mirror",
                "platforms":[
                {
                    "id":6,
                    "abbreviation":"PC"
                },
                {
                    "id":48,
                    "abbreviation":"PS4"
                },
                {
                    "id":49,
                    "abbreviation":"XONE"
                }
                ],
                "slug":"twin-mirror"
            },
            {
                "id":107614,
                "cover":{
                "id":81932,
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co1r7w.jpg"
                },
                "name":"Hello Neighbor: Hide and Seek",
                "platforms":[
                {
                    "id":6,
                    "abbreviation":"PC"
                },
                {
                    "id":39,
                    "abbreviation":"iOS"
                },
                {
                    "id":48,
                    "abbreviation":"PS4"
                },
                {
                    "id":49,
                    "abbreviation":"XONE"
                },
                {
                    "id":130,
                    "abbreviation":"Switch"
                },
                {
                    "id":203
                }
                ],
                "slug":"hello-neighbor-hide-and-seek"
            },
            {
                "id":109274,
                "cover":{
                "id":82613,
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co1rqt.jpg"
                },
                "name":"Judgment",
                "platforms":[
                {
                    "id":48,
                    "abbreviation":"PS4"
                },
                {
                    "id":167,
                    "abbreviation":"PS5"
                },
                {
                    "id":169,
                    "abbreviation":"Series X"
                },
                {
                    "id":170,
                    "abbreviation":"Stadia"
                }
                ],
                "rating":80.41435976724941,
                "slug":"judgment"
            },
            {
                "id":110737,
                "cover":{
                "id":102804,
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co27bo.jpg"
                },
                "name":"The Watson-Scott Test",
                "platforms":[
                {
                    "id":6,
                    "abbreviation":"PC"
                }
                ],
                "rating":68.1712626995646,
                "slug":"the-watson-scott-test"
            },
            {
                "id":114455,
                "cover":{
                "id":71287,
                "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co1j07.jpg"
                },
                "name":"Pacify",
                "platforms":[
                {
                    "id":6,
                    "abbreviation":"PC"
                },
                {
                    "id":14,
                    "abbreviation":"Mac"
                }
                ],
                "rating":54.8974964167687,
                "slug":"pacify"
            }
        ],
        "slug":"the-medium",
        "summary":"Discover a dark mystery only a medium can solve. Explore the real world and the spirit world at the same time. \n \nUse your psychic abilities to solve puzzles spanning both worlds, uncover deeply disturbing secrets, and survive encounters with The Maw - a monster born from an unspeakable tragedy. \n \nThe Medium is a third-person psychological horror game that features patented dual-reality gameplay and an original soundtrack co-composed by Arkadiusz Reikowski and Akira Yamaoka.",
        "videos":[
            {
                "id":35819,
                "game":133308,
                "name":"Announcement Trailer",
                "video_id":"tTAz758Vt88",
                "checksum":"616324f6-9575-0e3e-5228-3c4556b41f9f"
            },
            {
                "id":38883,
                "game":133308,
                "name":"Trailer",
                "video_id":"Bi8nECXlo6Y",
                "checksum":"486a79af-80d9-dda6-368d-4f74f006da00"
            },
            {
                "id":38884,
                "game":133308,
                "name":"Gameplay Trailer",
                "video_id":"5dNZpKhpvGg",
                "checksum":"d8efcc4d-8566-09ab-057e-c9718a647acc"
            },
            {
                "id":41710,
                "game":133308,
                "name":"Behind The Scenes",
                "video_id":"1_NloIWwAkA",
                "checksum":"855521e2-f45c-39d4-4e80-e4c94e9343ed"
            },
            {
                "id":41711,
                "game":133308,
                "name":"It Came From the Rage - Story Trailer",
                "video_id":"tzOBdVFSbQE",
                "checksum":"b5311210-43ae-db72-c40a-14d928259658"
            },
            {
                "id":41712,
                "game":133308,
                "name":"Release Date Trailer",
                "video_id":"_zQe9pPSkM8",
                "checksum":"0415ccf6-fe97-f148-05cb-02d187692858"
            },
            {
                "id":44880,
                "game":133308,
                "name":"Trailer",
                "video_id":"hBg-Jr2UfbY",
                "checksum":"c983b7e5-7132-48e4-bf7c-6031683179cc"
            },
            {
                "id":44881,
                "game":133308,
                "name":"Trailer",
                "video_id":"r4awetYokyQ",
                "checksum":"73b6b399-7609-a8e9-4a0b-0343ddc326d0"
            },
            {
                "id":44882,
                "game":133308,
                "name":"Trailer",
                "video_id":"bAh_IJYmLiw",
                "checksum":"1b97b7e4-f55c-fce4-734f-1a7ee07409eb"
            },
            {
                "id":44883,
                "game":133308,
                "name":"Trailer",
                "video_id":"8Pdww0u3Ky8",
                "checksum":"841eb3dc-b99a-3a42-50ce-a8fee2a3e8af"
            }
        ],
        "websites":[
            {
                "id":140302,
                "category":1,
                "game":133308,
                "trusted":false,
                "url":"https:\/\/themediumgame.com\/",
                "checksum":"801e13ce-5d7c-30b7-a0e1-49adfeb48050"
            },
            {
                "id":140303,
                "category":4,
                "game":133308,
                "trusted":true,
                "url":"https:\/\/www.facebook.com\/MediumGame",
                "checksum":"3699f7b8-1304-51ed-ebc1-d9b4f5be01ab"
            },
            {
                "id":140304,
                "category":5,
                "game":133308,
                "trusted":true,
                "url":"https:\/\/twitter.com\/TheMediumGame",
                "checksum":"96694b0d-011f-39bf-6264-a274cb5f979c"
            },
            {
                "id":140305,
                "category":8,
                "game":133308,
                "trusted":true,
                "url":"https:\/\/www.instagram.com\/the_medium_game",
                "checksum":"79808946-c883-9dfa-e72c-39cd42326910"
            },
            {
                "id":140306,
                "category":13,
                "game":133308,
                "trusted":true,
                "url":"https:\/\/store.steampowered.com\/app\/1293160\/The_Medium\/",
                "checksum":"61e6d9ee-ed30-a18a-8cf7-8c10c4e9e31f"
            },
            {
                "id":144512,
                "category":3,
                "game":133308,
                "trusted":true,
                "url":"https:\/\/en.wikipedia.org\/wiki\/The_Medium_(video_game)",
                "checksum":"d4d4ed44-8ebe-1eb6-c727-d78011c4f5a3"
            },
            {
                "id":147078,
                "category":9,
                "game":133308,
                "trusted":true,
                "url":"https:\/\/www.youtube.com\/user\/blooberteam",
                "checksum":"e1a79c7e-f00c-4f19-dc21-398dc9b7535e"
            },
            {
                "id":167709,
                "category":16,
                "game":133308,
                "trusted":true,
                "url":"https:\/\/www.epicgames.com\/store\/en-US\/product\/the-medium",
                "checksum":"46e14c36-d8be-32ee-9068-89fa55857cb4"
            },
            {
                "id":167736,
                "category":17,
                "game":133308,
                "trusted":true,
                "url":"https:\/\/www.gog.com\/game\/the_medium",
                "checksum":"6ddda48b-bc59-60b1-0a09-e86e1abfd50d"
            },
            {
                "id":167737,
                "category":14,
                "game":133308,
                "trusted":true,
                "url":"https:\/\/www.reddit.com\/r\/themedium",
                "checksum":"3851e2f5-06a9-b3fa-2afc-8ddcfd66321d"
            }
        ]
    }
]
JSONDATA;

        $ApiData = json_decode($JsonApiData, true);

        return Http::response(
            $ApiData,
            200
        );
    }
}