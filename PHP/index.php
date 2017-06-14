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
	</body>
</html>
