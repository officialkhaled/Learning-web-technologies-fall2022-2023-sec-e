<?php 

  require_once ("models/db.php");

?>

<head>
  <title>Search | AJAX</title>
  <link rel="stylesheet" href="assets/style.css">
</head>

<!-- Search Bar -->
    <div class="search-container">
      <form action="index.php" method="post">
        <input
          type="text"
          placeholder="Search.." autocomplete="off"
          name="search"
          id="search"
          onkeyup="showHint(this.value)"
        />
        <button type="submit" id="searchBtn" onClick="searchAjax()">Submit</button>
      </form>

      <div id="txtHint">
        <table align="center" style="margin-top: 200px;">
          <tr>
            <th>Username</th>
            <th>Email</th>
          </tr>
        </table>
      </div>

    </div>

    <script>

      function searchAjax() {
        var search = document.getElementById("search").value;
        var xhttp = new XMLHttpRequest();
        
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhttp.open("POST", "index.php?q=" + search, true);
        xhttp.send();

        xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint")[0].innerHTML = this.responseText;
          }
        };
        
      }

    </script>

