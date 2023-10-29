<?php

use Illuminate\Support\Facades\Route;

use App\Models\Publication;

use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\DB;

$publication = new Publication();

$publication->title = 'Sensacja! Riot usunął popularną postać Yumi z gry League of Legends!';
$publication->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus suscipit doloremque delectus sunt totam impedit eveniet quisquam amet est repudiandae, magni ipsum, itaque rerum similique. Odit veritatis laborum eaque maxime?';
$publication->author = 'Jan Kowalski';

// $publications = [
//     new Publication([
//         'title' => 'Sensacja! Riot usunął popularną postać Yumi z gry League of Legends!',
//         'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus suscipit doloremque delectus sunt totam impedit eveniet quisquam amet est repudiandae, magni ipsum, itaque rerum similique. Odit veritatis laborum eaque maxime?',
//         'author' => 'Jan Kowalski'
//     ]),
//     new Publication([
//         'title' => 'Twitch.tv - Izak publicznie oznajmił, że kończy karierę streamera...',
//         'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed est neque eum iure accusamus qui praesentium quae sapiente sint! Voluptas dicta alias beatae cupiditate! Tenetur alias quae voluptatibus est expedita.',
//         'author' => 'Zdzich Januszewski'
//     ]),
//     new Publication([
//         'title' => 'Steam bankrutuje - czyżby to koniec naszej ulubionej platformy gamingowej?',
//         'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et eos quaerat, dolor maiores ipsum accusantium. Laboriosam non maiores nesciunt obcaecati neque esse dolore! Ipsam enim labore quis, consequuntur omnis mollitia.',
//         'author' => 'Tadeusz Moniuszko'
//     ])
// ];

//$publications = Publication::all();

$publications = Publication::orderBy('created_at', 'desc')->get();

Route::get('about_us', [SiteController::class, 'about'])->name('aboutUs');
Route::get('home', [SiteController::class, 'home'])->name('home');

$quotes = [
    1 => [
        'quote' => 'You were a boulder... I am a mountain.',
        'hero' => 'Sage',
        'role' => 'Sentinel',
        'image' => 'https://static.wikia.nocookie.net/valorant/images/7/74/Sage_icon.png',
    ],
    2 => [
        'quote' => 'Racing to the spike side!',
        'hero' => 'Jett',
        'role' => 'Duelist',
        'image' => 'https://static.wikia.nocookie.net/valorant/images/3/35/Jett_icon.png',
    ],
    3 => [
        'quote' => 'Call me tech support again.',
        'hero' => 'Killjoy',
        'role' => 'Sentinel',
        'image' => 'https://static.wikia.nocookie.net/valorant/images/1/15/Killjoy_icon.png',
    ],
    4 => [
        'quote' => 'One of my cameras is broken!... oh wait... it is fine.',
        'hero' => 'Cypher',
        'role' => 'Sentinel',
        'image' => 'https://static.wikia.nocookie.net/valorant/images/8/88/Cypher_icon.png',
    ],
    5 => [
        'quote' => 'I am the beggining. I am the end.',
        'hero' => 'Omen',
        'role' => 'Controller',
        'image' => 'https://static.wikia.nocookie.net/valorant/images/b/b0/Omen_icon.png',
    ],
];

Route::get('publications', [PublicationController::class, 'index'])->name('publications.index');

Route::get('/quote/list', function () use ($quotes) {
    return view("quotes", ['quotes' => $quotes]);
})->name('quote-list');

Route::get('/publications/dd', function () use ($publication) {
    return view("dd", ['publication' => $publication]);
})->name('dd');

Route::get('publication/{publication}', [PublicationController::class, 'show'])->name('publication.show')->whereNumber('publication');




