<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="www.josefzacek.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Residence check</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
   
   <div id="home" data-role='page'>
      
      <header data-role="header" data-position="fixed">
                  <h1>Residence check</h1>
      </header>
      
      <article data-role="content">
      
       <a href="http://www.alanmoore.ie" class="alanmoore-logo">
           <img src="images/alanmoore-logo.jpg" alt="">
        </a>
       
              
        <p class="text-center">This application will will help you to determine if you have residence in Ireland</p>
        <p class="text-center">You will need to provide number of days spent in Ireland in years 2010, 2011, 2012, 2013 and 2014 </p>
        
        <a href="#input-form-page" data-role="button" data-icon="arrow-r" data-iconpos="right">Lets go!</a>
        
      </article>
      
      <footer data-role="footer" data-position="fixed">
         <nav data-role="navbar">
          <ul>
              <li><a href="#home" data-icon="home">Home</a></li>
              <li><a href="http://www.taxworld.ie" data-icon="info">Taxworld</a></li>
              <li><a href="http://www.alanmoore.ie" data-icon="info">Alanmoore</a></li>
          </ul>
         </nav>
      </footer>
   </div><!--   /home-->
   
   
   
   
   <div id="input-form-page" data-role='page'>
      
      <header data-role="header" data-position="fixed">
          <a href="#home" data-icon="home" data-iconpos='notext'></a>
          <h1>Residence check</h1>
      </header>
      
      <article data-role="content">
        <p class="text-center">Enter details for years 2010 - 2014</p>
         <form action="#form-result" method="post" data-ajax="false">
           
           
           <?php
                if ( isset ( $_REQUEST['submit'] ) ) { $submit = $_REQUEST['submit']; } else { $submit = ""; }
				if ( isset ( $_REQUEST['input_2010'] ) ) { $input_2010 = $_REQUEST['input_2010']; } else { $layout = ""; }
				if ( isset ( $_REQUEST['titles'] ) ) { $title = $_REQUEST['title']; } else { $title = ""; }
				if ( isset ( $_REQUEST['timeout'] ) ) { $timeout = $_REQUEST['timeout']; } else { $timeout = "0"; }
				if ( isset ( $_REQUEST['transition'] ) ) { $transition = $_REQUEST['transition']; } else { $transition = ""; }
			?>
            
            
         <label for="days1">Days:</label>
      <input type="range" name="days1" id="points" value="182" min="0" max="365" data-popup-enabled="true">
         
         <label for="days2">Days:</label>
      <input type="range" name="days2" id="points" value="182" min="0" max="365" data-popup-enabled="true" data-highlight="true" data-show-value="true">
          
          
         
           
            <label for="input_2010">Year 2010</label>
            <input type="number" id="input_2010" name="input_2010" placeholder="Enter number of days" min="0" max="365" autofocus required  />
            
            <label for="input-2011">Year 2011</label>
            <input type="number" id="input-2011" name="input-2011" placeholder="Enter number of days" min="0" max="365" required  />
            
            <label for="input-2012">Year 2012</label>
            <input type="number" id="input-2012" name="input-2012" placeholder="Enter number of days" min="0" max="365" required  />  
                          
            <label for="input-2013">Year 2013</label>
            <input type="number" id="input-2013" name="input-2013" placeholder="Enter number of days" min="0" max="365" required  /> 
                           
            <label for="input-2014">Year 2014</label>
            <input type="number" id="input-2014" name="input-2014" placeholder="Enter number of days" min="0" max="365" required  />
            
        
      <label for="days3">Days:</label>
      <input type="range" name="days3" id="points" value="182" min="0" max="365" data-popup-enabled="true">
      
      <label for="days4">Days:</label>
      <input type="range" name="days4" id="points" value="182" min="0" max="365" data-popup-enabled="true" data-show-value="true">
      
    
            
            <input type="submit" name="submit" value="Submit">
        </form>
      </article>
      
      <h2><?php echo $submit == "" ? "Please fill in the form and press submit" : "You chose:" ?></h2>
		<div class="ui-body ui-body-d ui-corner-all">
			<p>Title: <strong><?php echo $submit == "" ? "-" : $input_2010 ?></strong></p>
			<p>Preview: <strong><?php echo $submit == "" ? "-" : $layout ?></strong></p>
			<p>Timeout: <strong><?php echo $submit == "" ? "-" : $timeout ?></strong></p>
			<p>Transition: <strong><?php echo $submit == "" ? "-" : $transition ?></strong></p>
		</div>
      
      <footer data-role="footer" data-position="fixed">
         <nav data-role="navbar">
          <ul>
              <li><a href="#home" data-icon="home">Home</a></li>
              <li><a href="http://www.taxworld.ie" data-icon="info">Taxworld</a></li>
              <li><a href="http://www.alanmoore.ie" data-icon="info">Alanmoore</a></li>
          </ul>
         </nav>
      </footer>
   </div><!--   /input-form-page-->
   
   
   
   <div id="form-result" data-role='page'>
      
      <header data-role="header" data-position="fixed">
          <a href="#home" data-icon="home" data-iconpos='notext'></a>
          <h1>Residence check</h1>
      </header>
      
      <article data-role="content">
        <p class="text-center">Your results</p>
        
        <h2><?php echo $submit == "" ? "Please fill in the form and press submit" : "You chose:" ?></h2>
		<div class="ui-body ui-body-d ui-corner-all">
			<p>Title: <strong><?php echo $submit == "" ? "-" : $input_2010 ?></strong></p>
			<p>Preview: <strong><?php echo $submit == "" ? "-" : $layout ?></strong></p>
			<p>Timeout: <strong><?php echo $submit == "" ? "-" : $timeout ?></strong></p>
			<p>Transition: <strong><?php echo $submit == "" ? "-" : $transition ?></strong></p>
		</div>
         
      </article>
      
      <footer data-role="footer" data-position="fixed">
         <nav data-role="navbar">
          <ul>
              <li><a href="#home" data-icon="home">Home</a></li>
              <li><a href="http://www.taxworld.ie" data-icon="info">Taxworld</a></li>
              <li><a href="http://www.alanmoore.ie" data-icon="info">Alanmoore</a></li>
          </ul>
         </nav>
      </footer>
   </div><!--   /form-result-->
   
    
</body>
</html>