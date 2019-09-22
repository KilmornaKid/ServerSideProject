<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <meta name="keywords" content="Stack's Classic Cinema">
    <meta name="description" content="Cineam Website">
    <meta name="author" content="Kieran Stack">
    
    <title>Homepage</title>
    <link rel="stylesheet" href="stylesheet.css">
     
</head>
<body>


<!-- Start of Wrapper Div -->
<div id="wrapper">

<div id="header">
  <div class="main-nav">
       <nav>
            <ul>
                <li><a href="index.html" class="thispage">Home</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="aboutuspage.html">ABOUT US</a></li>
            </ul>
        </nav>
  </div>
</div>

<div class="banner">             
                      
  
 
</div>

  <h1>Book Movie</h1>
  
<form method='post' action=''>
    
<fieldset>  
 <legend><h2>Movie</h2></legend>
<?php
  if(isset($_POST['BR'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 1, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/bohemian.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  }elseif(isset($_POST['H'])){
     try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 0, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/images.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }elseif(isset($_POST['C'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 6, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/creed2.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }elseif(isset($_POST['FB'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 9, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/fantasticBeasts2.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }elseif(isset($_POST['WR'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 8, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/ralph.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }elseif(isset($_POST['RH'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 4, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/robinHood.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }elseif(isset($_POST['TN'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 11, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/nutcracker.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }elseif(isset($_POST['D'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 10, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/deadpool.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }elseif(isset($_POST['O'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 2, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/overlord.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }elseif(isset($_POST['V'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 3, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/venom.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }elseif(isset($_POST['G'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 5, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/grinch.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }elseif(isset($_POST['P'])){
      try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM movies ORDER BY movieid
limit 7, 1"; 
      $result = $pdo->query($sql); 
      while ($row = $result->fetch()) { 
            echo "<img src='WebDevImg/pokemon.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br>Movie Name: ".$row['Name']."<br><br>Running Time: ".$row['Running_Time']."<br><br>Description: ".$row['Description']."<br><br>Age Rating: ".$row['Age_Rating'];
}
} 
      catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
  }
      

?>
 
 

        
    <fieldset>
      <legend><h2>Choose your Booking(s):</h2></legend><br>
        <label method = 'post' name = 'times'>Choose Time</label>
          <p>
            <select>
            </select>
          </p>
          

</fieldset>
     <fieldset>
       <legend><h2>Cost</h2></legend><br>
       <input name='child' id='Child' value='C' type='radio'>
       <label>Child</label>
       <input name='student' id='S' value='S' type='radio'>
       <label>Student</label>
       <input name='adult' id='A' value='A' type='radio'>
      <label>Adult</label><br>
     </fieldset>
      
       <input name="submit" type="submit">
        
       <input name="startover" type="reset">

 </fieldset>
</form>
                                                

  <div style = "clear:left"></div>


<!-- Start of Footer Div -->
  <div id="footer">
    <p class="bottomstyle">
        <a href="#top">Go to top of Page.</a>
    </p>
    <p>
        <a href="pages/sitemap.html">Site Map</a>
    </p>
  </div>
<!-- End of Footer Div -->
  
</div>
<!-- End of Wrapper Div -->


</body>
</html>