<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerksController extends Controller
{
    //
    public function index(){
        $strength = [
            ['name' => 'Pro G(r)amer','effect' => '+25% Work Stamina','desc' => 'Working on a project related to video games will keep me motivated for slightly longer than usual.', 'rarity' => 'Common', 'svg' => 'images/controller.svg'],
            ['name' => 'Gym Bro','effect' => '+25% Work Stamina','desc' => 'Working on a project related to the gym will keep me motivated for slightly longer than usual.', 'rarity' => 'Common', 'svg' => 'images/dumbell.svg'],
            ['name' => 'Caffeine Boost','effect' => '+50% Work Stamina','desc' => 'Having a cup of coffee will increase my work time significantly!', 'rarity' => 'Rare', 'svg' => 'images/coffee.svg'],
            ['name' => 'Food Boost','effect' => '+50% Work Stamina','desc' => "Having food (especially free ones) will increase my work time!", 'rarity' => 'Rare', 'svg' => 'images/food.svg'],
            ['name' => 'Harmonic Haste','effect' => '+100% Work Speed','desc' => 'Listening to Playlist Jedag Jedug Angkot will double my work speed!', 'rarity' => 'Legendary', 'svg' => 'images/music.svg'],
            ['name' => 'Lovely Money','effect' => '+100% Work Focus','desc' => "If the payment is big, there's nothing more important in this world than to work.", 'rarity' => 'Legendary', 'svg' => 'images/money.svg'],
            ['name' => "Mom's Order",'effect' => '+200% Work Focus','desc' => "When mom tells me to work harder, I will give it all till my last drop of sweat and blood.", 'rarity' => 'Godlike', 'svg' => 'images/mom.svg']
        ];
        $weakness = [
            ['name' => 'We Hawt','effect' => '-25% Work Stamina','desc' => 'Working in a hot room or environment drains my energy faster', 'rarity' => 'Common', 'svg' => 'images/sun.svg'],
            ['name' => 'What? Again?','effect' => '-50% Work Focus','desc' => "When change of plans happens to often, I don't even wanna work anymore.", 'rarity' => 'Rare', 'svg' => 'images/change.svg'],
            ['name' => 'Didididi','effect' => '-100% Work Speed','desc' => "My GF Diana distracts me. It happens too often and I don't know why.", 'rarity' => 'Legendary', 'svg' => 'images/woman.svg'],
            ['name' => 'Forbidden Creature','effect' => '-∞% Work Focus','desc' => "If I see a roach, either someone's gonna kill it, or I'm not gonna continue working.", 'rarity' => 'Godlike', 'svg' => 'images/roach.svg']
        ];
        return view('welcome')->with(['strength' => $strength, 'weakness' => $weakness]);
    }
}
