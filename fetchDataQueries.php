<?php

function matchplayRequest($url) {
    $opts = [
    'http' => [
        'method' => 'GET',
        'header' => "Authorization: Bearer 256|97M5BIHlARuHRVnbfNsEKjG9OyOmsH6YQjTG3ALE101be7be\r\n" .
                    "Content-Type: application/json\r\n" .
                    "Accept: application/json\r\n"
        ],
    ];

    // Create the stream context
    $context = stream_context_create($opts);

    // Fetch the URL content
    $file = file_get_contents($url, false, $context);

    $data = json_decode($file, true);

    return $data;
}


function getGameData($tournament_id, $game_id) {
// Get player IDs and placements from game + tournament ID
// EX [gameId] => 4348941
//             [roundId] => 653403
//             [tournamentId] => 138243
//             [challengeId] => 
//             [arenaId] => 99219
//             [bankId] => 
//             [index] => 0
//             [set] => 6
//             [playerIdAdvantage] => 
//             [scorekeeperId] => 9076
//             [status] => completed
//             [startedAt] => 2024-05-17T03:04:03.000000Z
//             [duration] => 1354
//             [bye] => 
//             [playerIds] => Array
//                 (
//                     [0] => 238545
//                     [1] => 328349
//                     [2] => 238534
//                     [3] => 237878
//                 )

//             [userIds] => Array
//                 (
//                     [0] => 7363
//                     [1] => 23051
//                     [2] => 25844
//                     [3] => 8615
//                 )

//             [resultPositions] => Array
//                 (
//                     [0] => 328349
//                     [1] => 238545
//                     [2] => 237878
//                     [3] => 238534
//                 )

//             [resultPoints] => Array
//                 (
//                     [0] => 5.00
//                     [1] => 7.00
//                     [2] => 1.00
//                     [3] => 3.00
//                 )

//             [resultScores] => Array
//                 (
//                     [0] => 
//                     [1] => 
//                     [2] => 
//                     [3] => 
//                 )

//             [arena] => stdClass Object
//                 (
//                     [arenaId] => 99219
//                     [name] => Ghostbusters (Pro)
//                     [status] => active
//                     [opdbId] => GR9Nr-Mz2dY
//                     [categoryId] => 4
//                     [organizerId] => 2465
//                 )

//             [suggestions] => Array
//                 (
//                 )

//         )

    return matchplayRequest("https://app.matchplay.events/api/tournaments/$tournament_id/games/$game_id");
}

function getTournamentData($tournament_id) {
//Gets Tournament Data such as player IDs and Names
//  (
//             [tournamentId] => 138243
//             [name] => Tilt League 5-16-24
//             [status] => completed
//             [type] => group_matchplay
//             [startUtc] => 2024-05-17T01:30:00.000000Z
//             [startLocal] => 2024-05-16 18:30:00
//             [endUtc] => 2024-05-17T01:30:00.000000Z
//             [endLocal] => 2024-05-16 18:30:00
//             [completedAt] => 2024-05-17T03:35:59.000000Z
//             [organizerId] => 2465
//             [locationId] => 7138
//             [seriesId] => 3406
//             [description] => Tilt League - see https://playmorepinball.wordpress.com/
// 4 rounds of 4-player group match play
//             [pointsMap] => Array
//                 (
//                     [0] => Array
//                         (
//                             [0] => 7
//                         )

//                     [1] => Array
//                         (
//                             [0] => 7
//                             [1] => 1
//                         )

//                     [2] => Array
//                         (
//                             [0] => 7
//                             [1] => 4
//                             [2] => 1
//                         )

//                     [3] => Array
//                         (
//                             [0] => 7
//                             [1] => 5
//                             [2] => 3
//                             [3] => 1
//                         )

//                 )

//             [tiebreakerPointsMap] => Array
//                 (
//                     [0] => Array
//                         (
//                             [0] => 0.50
//                         )

//                     [1] => Array
//                         (
//                             [0] => 0.50
//                             [1] => 0.00
//                         )

//                     [2] => Array
//                         (
//                             [0] => 0.50
//                             [1] => 0.25
//                             [2] => 0.00
//                         )

//                     [3] => Array
//                         (
//                             [0] => 0.50
//                             [1] => 0.25
//                             [2] => 0.12
//                             [3] => 0.00
//                         )

//                 )

//             [test] => 
//             [timezone] => America/Phoenix
//             [scorekeeping] => user
//             [link] => 
//             [linkedTournamentId] => 
//             [estimatedTgp] => 
//             [organizer] => stdClass Object
//                 (
//                     [userId] => 2465
//                     [name] => John Shopple
//                     [firstName] => John
//                     [lastName] => Shopple
//                     [ifpaId] => 11590
//                     [role] => player
//                     [flag] => 
//                     [location] => Mesa, AZ
//                     [pronouns] => he
//                     [initials] => JPS
//                     [avatar] => 
//                     [banner] => 
//                     [tournamentAvatar] => https://mp-avatars.sfo3.cdn.digitaloceanspaces.com/t-avatar-U2465-1686564276.jpg
//                     [createdAt] => 2016-09-13T22:49:46.000000Z
//                 )

//             [players] => Array
//                 (
//                     [0] => stdClass Object
//                         (
//                             [playerId] => 148785
//                             [name] => John Shopple
//                             [ifpaId] => 11590
//                             [status] => active
//                             [organizerId] => 2465
//                             [claimedBy] => 2465
//                             [tournamentPlayer] => stdClass Object
//                                 (
//                                     [status] => active
//                                     [seed] => 0
//                                     [pointsAdjustment] => 0
//                                     [subscription] => 
//                                     [labels] => Array
//                                         (
//                                         )

//                                     [labelColor] => 
//                                 )

//                         )

//                     [1] => stdClass Object
//                         (
//                             [playerId] => 237410
//                             [name] => Paul Blanco
//                             [ifpaId] => 66005
//                             [status] => active
//                             [organizerId] => 2465
//                             [claimedBy] => 15883
//                             [tournamentPlayer] => stdClass Object
//                                 (
//                                     [status] => active
//                                     [seed] => 8
//                                     [pointsAdjustment] => 0
//                                     [subscription] => 
//                                     [labels] => Array
//                                         (
//                                         )
//      ---- Players Continued ---

//     [seeding] => random
//     [firstRoundPairing] => random
//     [pairing] => balanced_series
//     [playerOrder] => balanced
//     [arenaAssignment] => balanced
//     [duration] => 4
//     [gamesPerRound] => 1
//     [playoffsCutoff] => 0
//     [playoffsCutoffText] => FINALS CUTOFF
//     [playoffsCutoffColor] => red
//     [suggestions] => disabled
//     [tiebreaker] => disabled
//     [scoring] => ifpa
// )


    return matchplayRequest("https://app.matchplay.events/api/tournaments/$tournament_id?includePlayers=1");
}


function getRoundsData($tournament_id) {
//Provides list of rounds based on tournament_id
// Array
// (
//     [0] => stdClass Object
//         (
//             [roundId] => 653315
//             [tournamentId] => 138243
//             [index] => 0
//             [name] => Round 1
//             [duration] => 1723
//             [createdAt] => 2024-05-17 01:36:55Z
//             [completedAt] => 2024-05-17 02:05:38Z
//             [gameCount] => 7
//             [threePlayerGroupCount] => 1
//             [fourPlayerGroupCount] => 6
//         )

//     [1] => stdClass Object
//         (
//             [roundId] => 653344
//             [tournamentId] => 138243
//             [index] => 1
//             [name] => Round 2
//             [duration] => 1558
//             [createdAt] => 2024-05-17 02:06:08Z
//             [completedAt] => 2024-05-17 02:32:06Z
//             [gameCount] => 7
//             [threePlayerGroupCount] => 1
//             [fourPlayerGroupCount] => 6
//         )

//     [2] => stdClass Object
//         (
//             [roundId] => 653374
//             [tournamentId] => 138243
//             [index] => 2
//             [name] => Round 3
//             [duration] => 1816
//             [createdAt] => 2024-05-17 02:32:46Z
//             [completedAt] => 2024-05-17 03:03:02Z
//             [gameCount] => 7
//             [threePlayerGroupCount] => 0
//             [fourPlayerGroupCount] => 7
//         )

//     [3] => stdClass Object
//         (
//             [roundId] => 653403
//             [tournamentId] => 138243
//             [index] => 3
//             [name] => Round 4
//             [duration] => 1916
//             [createdAt] => 2024-05-17 03:04:03Z
//             [completedAt] => 2024-05-17 03:35:59Z
//             [gameCount] => 7
//             [threePlayerGroupCount] => 0
//             [fourPlayerGroupCount] => 7
//         )

// )

    return matchplayRequest("https://app.matchplay.events/api/tournaments/$tournament_id/stats/rounds");
}

function getPlayersArray($tournament_data) {
    $players = [];

    foreach($tournament_data['data']['players'] as $player) {
        $players[$player['playerId']] = $player['name']; 
    }

    return $players;
}
