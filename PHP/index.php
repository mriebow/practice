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
