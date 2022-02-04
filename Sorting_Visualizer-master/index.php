<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Visualizer</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="header_right">
                <p class="nav-heading">Sorting visualizer</p>
                <div class="algos">
                    <button >Bubble</button>
                    <button >Selection</button>
                    <button >Insertion</button>
                    <button >Merge</button>
                    <button >Quick</button>
                    <button onclick="document.location='store.php'">STORE</button>
                </div>
            </div>
          
        </nav>
    </header>
    <section>
        <div id="Info_Cont1">
        </div>
        <div id="array_container">
        </div>
        <div id="Info_Cont2">
            <button id="a_generate" style="width: fit-content;" style="margin-right: 0px;">Generate New Array</button>
        </div>
        
    </section>
    <footer>
        <navbar>
            <div class="array-inputs">
                <p>Size of the array:
                <input id="a_size" type="range" min=20 max=150 step=1 value=80>
            </p>
            <p>Speed of the algorithm:
                <input id="a_speed" type="range" min=1 max=5 step=1 value=4>
                </p>
				<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
            </div>
           
        </navbar>
    </footer>
    <script src="./scripts/main.js"></script>   <!--This should be at the end of body and should be loaded before sorts.js-->
    <script src="./scripts/visualizations.js"></script>  <!--This should be loaded after main.js-->
    <script src="./scripts/bubble_sort.js"></script>
    <script src="./scripts/selection_sort.js"></script>
    <script src="./scripts/insertion_sort.js"></script>
    <script src="./scripts/merge_sort.js"></script>
    <script src="./scripts/quick_sort.js"></script>
</body>
</html>