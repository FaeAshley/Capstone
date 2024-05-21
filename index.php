<pre>
<?php
include 'functions/fetchDataQueries.php';


$tournament_id = '138243';
$game_id = '4348941';


$data = getTournamentData($tournament_id);
$players = getPlayersArray($data);
// Print the fetched content
echo 'players list' . PHP_EOL;
print_r($players);
?>
</pre>