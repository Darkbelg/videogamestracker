<?php

namespace Tests\Feature;

use App\Http\Livewire\PopularGames;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class PopularGamesTest extends TestCase
{
   /**
     * A basic test example.
     *
     * @return void
     * @group network phpunit --exclude network
     */
    public function test_the_main_page_shows_popular_games()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakePopularGames(),
        ]);

        Livewire::test(PopularGames::class)
            ->assertSet('popularGames', [])
            ->call('loadPopularGames')
            ->assertSee('Fake HITMAN 3')
            ->assertSee('Fake The Medium')
            ->assertSee('Series X')
            ->assertSee('25')
            ->assertSee('//images.igdb.com/igdb/image/upload/t_cover_big/co1p7d.jpg');
    }

    public function fakePopularGames()
    {
        $JsonApiData = <<<'JSONDATA'
[
    {
    "id":133308,
    "cover":{
        "id":130014,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co2sbi.jpg"
    },
    "first_release_date":1611792000,
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
    "slug":"the-medium",
    "total_rating_count":25
    },
    {
    "id":134595,
    "cover":{
        "id":105761,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co29lt.jpg"
    },
    "first_release_date":1611100800,
    "name":"Fake HITMAN 3",
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
    "rating":80.9008217587039,
    "slug":"hitman-3",
    "total_rating_count":20
    },
    {
    "id":121760,
    "cover":{
        "id":79321,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co1p7d.jpg"
    },
    "first_release_date":1613001600,
    "name":"Little Nightmares II",
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
        },
        {
            "id":167,
            "abbreviation":"PS5"
        },
        {
            "id":169,
            "abbreviation":"Series X"
        }
    ],
    "slug":"little-nightmares-ii",
    "total_rating_count":14
    },
    {
    "id":116650,
    "cover":{
        "id":72681,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co1k2x.jpg"
    },
    "first_release_date":1611619200,
    "name":"Cyber Shadow",
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
    "slug":"cyber-shadow",
    "total_rating_count":11
    },
    {
    "id":44129,
    "cover":{
        "id":123667,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co2nf7.jpg"
    },
    "first_release_date":1608681600,
    "name":"Super Meat Boy Forever",
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
    "slug":"super-meat-boy-forever",
    "total_rating_count":11
    },
    {
    "id":138765,
    "cover":{
        "id":114322,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co2g7m.jpg"
    },
    "first_release_date":1610582400,
    "name":"Scott Pilgrim vs. the World: The Game - Complete Edition",
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
        },
        {
            "id":169,
            "abbreviation":"Series X"
        }
    ],
    "slug":"scott-pilgrim-vs-the-world-the-game-complete-edition",
    "total_rating_count":9
    },
    {
    "id":138227,
    "cover":{
        "id":115467,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co2h3f.jpg"
    },
    "first_release_date":1613088000,
    "name":"Super Mario 3D World + Bowser's Fury",
    "platforms":[
        {
            "id":130,
            "abbreviation":"Switch"
        }
    ],
    "slug":"super-mario-3d-world-plus-bowsers-fury",
    "total_rating_count":9
    },
    {
    "id":26879,
    "cover":{
        "id":100141,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co259p.jpg"
    },
    "first_release_date":1612396800,
    "name":"Werewolf: The Apocalypse - Earthblood",
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
            "id":167,
            "abbreviation":"PS5"
        },
        {
            "id":169,
            "abbreviation":"Series X"
        }
    ],
    "slug":"werewolf-the-apocalypse-earthblood",
    "total_rating_count":9
    },
    {
    "id":136414,
    "cover":{
        "id":115755,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co2hbf.jpg"
    },
    "first_release_date":1611619200,
    "name":"Atelier Ryza 2: Lost Legends & the Secret Fairy",
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
            "id":130,
            "abbreviation":"Switch"
        },
        {
            "id":167,
            "abbreviation":"PS5"
        }
    ],
    "slug":"atelier-ryza-2-lost-legends-and-the-secret-fairy",
    "total_rating_count":7
    },
    {
    "id":120550,
    "cover":{
        "id":109917,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co2ct9.jpg"
    },
    "first_release_date":1611792000,
    "name":"Olija",
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
    "slug":"olija",
    "total_rating_count":7
    },
    {
    "id":141207,
    "cover":{
        "id":120511,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co2kzj.jpg"
    },
    "first_release_date":1611878400,
    "name":"Gods Will Fall",
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
    "slug":"gods-will-fall",
    "total_rating_count":5
    },
    {
    "id":139939,
    "cover":{
        "id":121032,
        "url":"\/\/images.igdb.com\/igdb\/image\/upload\/t_thumb\/co2le0.jpg"
    },
    "first_release_date":1608076800,
    "name":"MXGP 2020: The Official Motocross Videogame",
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
            "id":167,
            "abbreviation":"PS5"
        }
    ],
    "slug":"mxgp-2020-the-official-motocross-videogame",
    "total_rating_count":4
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
