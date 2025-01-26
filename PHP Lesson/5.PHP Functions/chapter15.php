<?php
    function cartoon() {
        echo "Tom and Jerry";
      }

      cartoon();
      
?><hr>

<?php
function hero($hero) {
  echo "I like $hero <br>";
}

hero("Captain America");
hero("Ironman");
hero("Hulk");
hero("Black panther");
hero("Spiderman");
?> <hr>

<?php
function heros($hero1,$hero2) {
  echo "I like $hero1 and $hero2 . <br>";
}

heros("Captain America","Ironman");
heros("Black panther","Spiderman");
?> <hr>

<?php
function avengers($hero1,$hero2,$hero3,$hero4) {
  echo "My Favourite Avengers are $hero1,$hero2,$hero3 and $hero4 . <hr>";
}

avengers("Captain America","Ironman","Black panther","Spiderman");
?> 