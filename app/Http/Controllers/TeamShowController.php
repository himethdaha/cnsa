  <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class TeamShowController extends Controller
{
  public function show()
  {
    $players = Player::all();
    return view('playerteam.show', compact('players'));
  }
}
