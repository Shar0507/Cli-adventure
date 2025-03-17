<?php
/*********************************************************************
* Author: Sharuyan Sinnathurai
* Date: 20240130
* Description: Formula 1 Race Game
* Version: 0.0.1
**********************************************************************/

// Create variable win message
$win = "Congratulations! You've won the race and claimed the championship!\n";

// Create variable lose message
$lose = "Unfortunately, you didn't make it to the finish line in first place. Better luck next time!\n";

// Game intro
echo "Welcome to the Formula 1 Race Game!\n\n";
echo "You're about to race against the best drivers in the world.\n";
echo "Make strategic decisions to win the race and become the champion!\n\n";

// Race Start
echo "The race is about to start! You're on the grid...\n";
echo "You're racing in the Formula 1 World Championship. Good luck!\n\n";

// Starting decisions
echo "Do you want to start with a conservative strategy or an aggressive one?\n";
echo "1. Conservative: Focus on consistent lap times\n";
echo "2. Aggressive: Go for the fastest laps and risk everything\n";
$choice = readline("Choose 1 or 2: ");

// Check player's choice for initial strategy
if ($choice == 1) {
    echo "You chose the conservative strategy.\n";
    $racePosition = 5;  // Start mid-field with a safe strategy
} elseif ($choice == 2) {
    echo "You chose the aggressive strategy.\n";
    $racePosition = 2;  // Start near the front with a high-risk, high-reward strategy
} else {
    echo "Invalid choice! Defaulting to conservative strategy.\n";
    $racePosition = 5;
}

// Random events during the race (Tire wear, pit stops, etc.)
echo "\nYou are racing now! Let's see what happens...\n";
$event = rand(1, 3); // Random events (1 - pit stop, 2 - tire wear, 3 - weather change)

if ($event == 1) {
    echo "A pit stop is required! You lose some time in the pits.\n";
    $racePosition -= 1; // Lost position due to pit stop
} elseif ($event == 2) {
    echo "Your tires are wearing down, you're losing speed!\n";
    $racePosition -= 1; // Lost position due to tire wear
} elseif ($event == 3) {
    echo "A sudden rain shower hits the track! This will slow everyone down.\n";
    $racePosition -= 1; // Lost position due to bad weather
}

// Final decision point: nearing the finish line
echo "\nYou're in the final lap! What will you do?\n";
echo "1. Push for a faster lap to take the lead\n";
echo "2. Maintain your position and hold steady\n";
$finalChoice = readline("Choose 1 or 2: ");

if ($finalChoice == 1) {
    echo "You're pushing hard, but it's risky! Let's see...\n";
    $outcome = rand(1, 2);  // 1 for success, 2 for failure
    if ($outcome == 1) {
        echo "You made it! You pushed through and took the lead!\n";
        $racePosition = 1; // Took the lead
    } else {
        echo "Oh no! You pushed too hard and lost control of your car! You fall behind.\n";
        $racePosition += 1; // Lost position due to mistake
    }
} elseif ($finalChoice == 2) {
    echo "You're holding steady, ensuring you don't make any mistakes...\n";
    $racePosition = $racePosition; // No change, steady strategy
} else {
    echo "Invalid choice! Holding steady...\n";
    $racePosition = $racePosition; // No change, steady strategy
}


// Determine the outcome
echo "\nYou cross the finish line...\n";
if ($racePosition == 1) {
    echo $win =  "      ___________\n"                        .
    "     '._==_==_=_.'\n"                    .
    "     .-\\:      /-.\n"                    .
    "    | (|:.     |) |\n"                    .
    "     '-|:.     |-' \n"                    .
    "       \\::.    /\n"                        .
    "        '::. .'\n"                            .
    "          ) (\n"                                .
    "        _.' '._\n"                            .
    "       `\"\"\"\"\"\"\"`\n";;
    "      _______\n" .
         "     //  ||\\ \\ \n" .

} else {
    echo $lose;
}
?>