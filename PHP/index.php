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
	</body>
</html>
