<?php 

  

?>

<head>
  <link rel="stylesheet" href="assets/style.css">
</head>

<!-- Search Bar -->
    <div class="search-container">
      <form action="index.php" method="post">
        <input
          type="text"
          placeholder="Search.."
          name="search"
          id="search"
          onkeyup="showHint(this.value)"
        />
        <button type="submit" id="searchBtn">Submit</button>
      </form>
    </div>

    <div id="txtHint"></div>

    <script>
      
      function searchAjax() {
        var search = document.getElementById("search").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "search.php?q=" + search, true);
        xhttp.send();
      }

    </script>

    <?php
      //Establish connection
      $con = mysqli_connect('localhost', 'root', '', 'registration');
      //SQL Command
      $sql = "select * from user_data";
      $result = mysqli_query($con, $sql);

      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<th>{$row['username']}</th>";
          echo "<td><center>{$row['email']}</center></td>";
        }
      } else {
        echo "No results found";
      }

    ?>