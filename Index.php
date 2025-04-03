<?php
/*********************************************************************
* Author: Sharuyan Sinnathurai
* Date: 20250327
* Description: Example PHP program treasure hunt
* Version: 0.0.1
**********************************************************************/

// Create variable win, a nice string to show when user wins
$win =  "      ___________\n" . 
                "     '._==_==_=_.'\n" . 
                "     .-\\:      /-.\n" . 
                "    | (|:.     |) |\n" . 
                "     '-|:.     |-' \n" . 
                "       \\::.    /\n" . 
                "        '::. .'\n" . 
                "          ) (\n" . 
                "        _.' '._\n" . 
                "       `\"\"\"\"\"\"\"`\n";

// Nice intro screen for the game
printf("Welcome to the treasure hunt game!\n\n");
printf("      _______\n");
printf("     //  $$ /|\n");
printf("    // $$  / |\n");
printf("   //_____/  |\n");
printf("  |          |\n");
printf("  |   __   |\n");
printf("  |  |__|  |\n");
printf("  |________|\n\n\n");

// Question 1
printf("You find yourself standing at the edge of the jungle, with two paths ahead of you:\n");
printf("Option 1. This path leads through a dense thicket of thorns\n");
printf("Option 2. This path seems to be clear and well-trodden\n");
printf("Please make your choice 1 or 2:\n");
// Collect answer
$userChoice = readline("");

// Check the choice of the user: Option 1
if ($userChoice == 1) 
    printf("You push your way through the thicket, enduring scratches and cuts along the way. Eventually, you emerge into a clearing and find a hidden cave.\n\n");
    printf("Option 1. Do you enter the cave?\n");
    printf("Option 2. Do you continue on the path?\n");
    printf("Please make your choice 1 or 2:\n");
    
    // Collect answer
    $userChoice = readline("");

    // Option 1 - Enter the cave
    if ($userChoice == 1) 
        printf("You enter the cave and find something unexpected...\n\n");

        // Continue the game after entering the cave
        printf("You now have to decide whether to explore deeper or leave the cave.\n");
        printf("Option 1. Explore deeper into the cave.\n");
        printf("Option 2. Leave the cave and go back to the jungle.\n");
        printf("Please make your choice 1 or 2:\n");

        // Option 2: Find your way out of the jungle
        $userChoice = readline("");

        if ($userChoice == 1) {
            printf("You venture deeper into the cave and discover a hidden treasure chest!\n");
            printf("option 1. You decide to leave the cave and return to the jungle.\n");
            printf("option 2. You eventually find your way out of the jungle.\n");
            printf("Please make your choice 1 or 2:\n");

              // Collect answer
    $userChoice = readline("");
          
                  } 
     // Option 2 --> find the way out of the jungle
    if ($userChoice == 2) 
    printf("You follow the well-trodden path and come across a river.\n");
    printf("Do you attempt to cross the river or look for a different route?:\n");
    printf("Option 1. You attempt to cross the river.\n");
    printf("Option 2. Look for a different route.\n");
    printf("Please make your choice 1 or 2:\n");

    // Collect answer
    $userChoice = readline("");


if ($userChoice == 1) 
// Proceed with the next scenario
    printf("Now you're at a place where you need to fight a dinosaur:\n");
    printf("Option 1. You're going to fight the dinosaur.\n");
    printf("Option 2. You're going deeper in the cave.\n");
    printf("Please make your choice 1 or 2:\n");

    // Collect answer
    $userChoice = readline("");

    // Fight or run from the dinosaur
    if ($userChoice == 1) 
        printf("You decide to fight the dinosaur. After a fierce battle, you win from the dinosaur!\n\n");
    

    // Next scenario: someone is waiting for you
    printf("You won from the dinosaur, but someone is waiting for you in the distance and they have something in their hands:\n");
    printf("Option 1. You're going to the person and ask, 'What do you have in your hands?'\n");
    printf("Option 2. You go past him.\n");
    printf("Please make your choice 1 or 2:\n");

    // Collect answer
    $userChoice = readline("");

    // Check the choice
    if ($userChoice == 1) {
        printf("You choose to go to the person!\n\n");
    } elseif ($userChoice == 2) {
        printf("You continue your way.\n\n");
    
    // Final decision: Choose a door
    printf("Now you got a key and you're at a place where you need to choose a door:\n");
    printf("Option 1. You're going through the left door.\n");
    printf("Option 2. You're going through the right door.\n");
    printf("Please make your choice 1 or 2:\n");

    // Collect answer
    $userChoice = readline("");

    // Check if they chose the right door
    if ($userChoice == 2) {
        printf("Right door is the correct door! You've escaped the cave!\n\n");
        printf($win); // Show winning ASCII art
    } elseif ($userChoice == 1) {
        printf("You chose the left door. Unfortunately, it's a trap!\n\n");
        printf($win); // Show losing ASCII art
    } else {
        printf("Invalid choice. Game Over.\n");
    }
} else {
    printf("Invalid choice. Game Over.\n");
}

?>
