<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
    <!-- introduction -->
    <h1>
       <?php
        echo "This "."is "."a "."concatenated "."string.";
       ?>
    </h1>
      <p>
        <?php
          echo 17 * 123;
          $myName = "Matthew";
          echo "Name: ".$myName;
        ?>
      </p>
      <!-- Conditionals and control flow -->
      <?php
      if($items > 5) {
        echo "You get a 10% discount!";
        }
      else {
        echo "You get a 5% discount!";
        };
      ?>
        <!-- switches -->
    <?php
      $i = 5;

      switch ($i):
          case 0:
              echo '$i is 0.';
              break;
          case 1:
          case 2:
          case 3:
          case 4:
          case 5:
              echo '$i is somewhere between 1 and 5.';
              break;
          case 6:
          case 7:
              echo '$i is either 6 or 7.';
              break;
          default:
              echo "I don't know how much \$i is.";
      endswitch;
      ?>

			<!-- Arrays -->
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        // Write the code to remove Python here!
        unset($languages[3]);

        foreach($languages as $lang) {
          print "<p>$lang</p>";
        }
				?>
				<?php
// Create an array and push on the names
	// of your closest family and friends

	$family = array();
			array_push($family, "Ellen");
			array_push($family, "Me");
			array_push($family, "Isaac");
			array_push($family, "Oliver");
			array_push($family, "Finn");
// Sort the list
			sort($family);
			$num = count($family) - 1;
// Randomly select a winner!
			$random = rand(1, $num);
			$winner = $family[$random];
// Print the winner's name in ALL CAPS
print strtoupper($winner);
?>
		// Loops
				<?php
	$yardlines = array("The 50... ", "the 40... ",
	"the 30... ", "the 20... ", "the 10... ");

	foreach($yardlines as $yardline) {
			echo $yardline;
	};
	echo "touchdown!";

?>

<!-- while loops -->
<p>We are going to flip a coin until we get three heads in a row!</p>
<?php
$headCount = 0;
$flipCount = 0;
while ($headCount < 3) {
	$flip = rand(0,1);
	$flipCount ++;
	if ($flip){
		$headCount ++;
		echo "<div class=\"coin\">H</div>";
	}
	else {
		$headCount = 0;
		echo "<div class=\"coin\">T</div>";
	}
}
echo "<p>It took {$flipCount} flips!</p>";
?>
	</body>
</html>
<!-- functions II -->
<?php
function aboutMe($name, $age){
		echo "Hello! My name is ".$name.", and I am ".$age." years old.";
		}

		aboutMe("Matthew",31)
?>

<!-- OOP -->
<?php
	class Cat {
		public $isAlive = true;
		public $numLegs = 4;

		public function __constructor($name){
				$this->name = $name;
		}
		}

		function meow(){
				return "Meow meow";
		}

		$cat1 = new Cat("CodeCat");

		echo meow($cat1);
?>
<?php
class Person {
		public static function say(){
				echo "Here are my thoughts!";
		}
	}

class Blogger extends Person {
		const cats = 50;
		}
echo Blogger::say();
echo Blogger::cats;
?>

<!-- Assoc. Arrays -->
$myArray = array(array("Japaneseclass",1),
									 array("Englishclass" ,3));

		 // On the line below, output one of the values to the page:
		print "The number of students in ".$myArray[0][0]. " is " . $myArray[0][1] .'<br/>';
			 print   "The number of students in " .$myArray[1][0]. " is " .$myArray[1][1].'<br/>';
		 // On the line below, loop through the array and output
		 // *all* of the values to the page:
		 $length = count($myArray);
		for ($i=0;$i<$length;$i++) {
				print "The number of students in " .$myArray[$i][0]. " is " .$myArray[$i][1];
				print '<br/>';
		}
