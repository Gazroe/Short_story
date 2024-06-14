<?php

function generateStory($singular_noun, $verb, $color, $distance_unit){
  $story = "\n The ${singular_noun}s are lovely, ${color}, and deep. \n
  But I have promises to keep \n
  And ${distance_unit} to go before I ${verb} \n
  And ${distance_unit} to go before I ${verb} \n ";
  
  return $story;
}

echo generateStory("rat", "eat", "yellow", "5 inches");
echo generateStory("boar", "snorts", "brown", "2 meters");
echo generateStory("snake", "bites", "green", "5 meters");