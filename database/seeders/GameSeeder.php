<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;



class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = collect([
            [
            'name_game'=>'BAMBOO RUSH',
            'url_game'=>'https://latamwin-gp3.discreetgaming.com/free/es/launch.jsp?gameId=806&GAMESERVERURL=games-gp3.discreetgaming.com&gameHistoryUrl=https%3A%2F%2Flatamwin-gp3.discreetgaming.com%2Fgamehistory.do%3FsessionId%3D2_0864399b9581e81a05cc0000017ea88f_B1JMA1YFWldbVkAHDl4IWQcHDQwcQ1lFVV5eSxcGCFgaAQMJDg%26bankId%3D3006%26gameId%3D806%26lang%3Des&autoplayAllowed=true&ShellPath=%252Ffree%252Fmobile%252Ftemplate.jsp&GAMESERVERID=2&LANG=es&BANKID=3006&SID=2_0864399b9581e81a05cc0000017ea88f_B1JMA1YFWldbVkAHDl4IWQcHDQwcQ1lFVV5eSxcGCFgaAQMJDg',
            'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem cum hic veritatis repellat quo. Ducimus rem molestiae quae, voluptatum laudantium doloribus necessitatibus doloremque. Eveniet nobis alias omnis ullam hic cum!',
            'url_image_game'=>'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
            'status'=>'active'
            ],
            [
                'name_game'=>'REELS OF WEALTH ',
                'url_game'=>'https://latamwin-gp3.discreetgaming.com/free/es/launch.jsp?gameId=795&GAMESERVERURL=games-gp3.discreetgaming.com&gameHistoryUrl=https%3A%2F%2Flatamwin-gp3.discreetgaming.com%2Fgamehistory.do%3FsessionId%3D1_b83bbf09795fe8164bfc0000017e8137_CgVCA1cAXl5SXxABDl4IDgNQCAwcQ1lFVV5eSxZWAA4aAQMJDg%26bankId%3D3006%26gameId%3D795%26lang%3Des&autoplayAllowed=true&ShellPath=%252Ffree%252Fhtml5pc%252Ftemplate.jsp&GAMESERVERID=1&LANG=es&BANKID=3006&SID=1_b83bbf09795fe8164bfc0000017e8137_CgVCA1cAXl5SXxABDl4IDgNQCAwcQ1lFVV5eSxZWAA4aAQMJDg',
                'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus excepturi provident magnam itaque incidunt veniam ea voluptas numquam. Sint quos sed non tenetur natus earum perferendis, at rem velit. Animi!',
                'url_image_game'=>'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
                'status'=>'ctive'
            ],
            [
                'name_game'=>'DRAGON & PHOENIX ',
                'url_game'=>'https://latamwin-gp3.discreetgaming.com/free/es/launch.jsp?gameId=814&GAMESERVERURL=games-gp3.discreetgaming.com&gameHistoryUrl=https%3A%2F%2Flatamwin-gp3.discreetgaming.com%2Fgamehistory.do%3FsessionId%3D2_324e6417ca7ee81a05e40000017e9834_UlUXVgtVXVtUURVRDl4IWQcHC18cQ1lFVV5eS01RXFsaAQMJDg%26bankId%3D3006%26gameId%3D814%26lang%3Des&autoplayAllowed=true&ShellPath=%252Ffree%252Fmobile%252Ftemplate.jsp&GAMESERVERID=2&LANG=es&BANKID=3006&SID=2_324e6417ca7ee81a05e40000017e9834_UlUXVgtVXVtUURVRDl4IWQcHC18cQ1lFVV5eS01RXFsaAQMJDg',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore a molestiae minima delectus temporibus maxime distinctio nihil iure, est inventore corporis quis atque. Inventore ipsum optio porro vero quibusdam ratione.',
                'url_image_game'=>'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg',
                'status'=>'active'
            ],
            [
                'name_game'=>'TAKE THE BANK',
                'url_game'=>'https://latamwin-gp3.discreetgaming.com/free/es/launch.jsp?gameId=813&GAMESERVERURL=games-gp3.discreetgaming.com&gameHistoryUrl=https%3A%2F%2Flatamwin-gp3.discreetgaming.com%2Fgamehistory.do%3FsessionId%3D2_9827598a9d75e81a05ea0000017eb7ff_BwwQAFBQXVkHVkIHDl4IWQcHC1UcQ1lFVV5eS00LCAEaAQMJDg%26bankId%3D3006%26gameId%3D813%26lang%3Des&autoplayAllowed=true&ShellPath=%252Ffree%252Fmobile%252Ftemplate.jsp&GAMESERVERID=2&LANG=es&BANKID=3006&SID=2_9827598a9d75e81a05ea0000017eb7ff_BwwQAFBQXVkHVkIHDl4IWQcHC1UcQ1lFVV5eS00LCAEaAQMJDg',
                'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit adipisci error optio necessitatibus ipsa, laboriosam, vitae unde reiciendis saepe officia veritatis sed aspernatur assumenda voluptatum, non dolores dicta sint fuga?',
                'url_image_game'=>'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg',
                'status'=>'activo'
            ],
            [
                'name_game'=>'CAISHEN’S ARRIVAL',
                'url_game'=>'https://latamwin-gp3.discreetgaming.com/free/es/launch.jsp?gameId=812&GAMESERVERURL=games-gp3.discreetgaming.com&gameHistoryUrl=https%3A%2F%2Flatamwin-gp3.discreetgaming.com%2Fgamehistory.do%3FsessionId%3D2_e9e2fb7a36bfe81a05f60000017eac90_BQxBB1UGCV5QBxVdDl4IWQcHCFkcQ1lFVV5eSxcACgAaAQMJDg%26bankId%3D3006%26gameId%3D812%26lang%3Des&autoplayAllowed=true&ShellPath=%252Ffree%252Fmobile%252Ftemplate.jsp&GAMESERVERID=2&LANG=es&BANKID=3006&SID=2_e9e2fb7a36bfe81a05f60000017eac90_BQxBB1UGCV5QBxVdDl4IWQcHCFkcQ1lFVV5eSxcACgAaAQMJDg',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit quibusdam asperiores nulla perferendis culpa minima modi doloremque eaque, corrupti, sed omnis provident consectetur eveniet dolores, animi assumenda quisquam corporis nesciunt?',
                'url_image_game'=>'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg',
                'status'=>'active'
            ],
            [
                'name_game'=>'GEMMED',
                'url_game'=>'https://latamwin-gp3.discreetgaming.com/free/es/launch.jsp?gameId=811&GAMESERVERURL=games-gp3.discreetgaming.com&gameHistoryUrl=https%3A%2F%2Flatamwin-gp3.discreetgaming.com%2Fgamehistory.do%3FsessionId%3D1_a739e67aa41ee8164c0b0000017e8bfa_A1IQDAUAVAwHUEMGDl4IDgNRXlQcQ1lFVV5eS01XW1saAQMJDg%26bankId%3D3006%26gameId%3D811%26lang%3Des&autoplayAllowed=true&ShellPath=%252Ffree%252Fmobile%252Ftemplate.jsp&GAMESERVERID=1&LANG=es&BANKID=3006&SID=1_a739e67aa41ee8164c0b0000017e8bfa_A1IQDAUAVAwHUEMGDl4IDgNRXlQcQ1lFVV5eS01XW1saAQMJDg',
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde aspernatur adipisci inventore quis voluptate odit nobis voluptatibus ratione a, sunt, repudiandae placeat voluptatem iusto, corrupti repellendus laudantium rem explicabo molestiae.',
                'url_image_game'=>'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg',
                'status'=>'active'
            ]
        ]);



        foreach ($data as $key) {
            Game::create([
                'name_game'=>$key['name_game'],
                'url_game'=>$key['url_game'],
                'description'=>$key['description'],
                'url_image_game'=>$key['url_image_game'],
                'status'=>$key['status']
            ]);
        }
    }
}
