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
      
       <a href="http://www.taxworld.ie/" class="taxworld-logo" title="www.taxworld.ie">
           <img src="images/taxworld_logo.jpg" alt="Taxworld logo">
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
				if ( isset ( $_REQUEST['input_2010'] ) ) { $input_2010 = $_REQUEST['input_2010']; } else { $input_2010 = ""; }
				if ( isset ( $_REQUEST['input_2011'] ) ) { $input_2011 = $_REQUEST['input_2011']; } else { $input_2010 = ""; }
                if ( isset ( $_REQUEST['input_2012'] ) ) { $input_2012 = $_REQUEST['input_2012']; } else { $input_2010 = ""; }
                if ( isset ( $_REQUEST['input_2013'] ) ) { $input_2013 = $_REQUEST['input_2013']; } else { $input_2010 = ""; }
                if ( isset ( $_REQUEST['input_2014'] ) ) { $input_2014 = $_REQUEST['input_2014']; } else { $input_2010 = ""; }
			?>
            
            <label for="input_2010">Year 2010:</label>
            <input type="range" name="input_2010" id="input_2010" value="0" min="0" max="365" data-popup-enabled="true" data-highlight="true" data-show-value="true">

            <label for="input_2011">Year 2011:</label>
            <input type="range" name="input_2011" id="input_2011" value="0" min="0" max="365" data-popup-enabled="true" data-highlight="true" data-show-value="true">
            
            <label for="input_2012">Year 2012:</label>
            <input type="range" name="input_2012" id="input_2012" value="0" min="0" max="365" data-popup-enabled="true" data-highlight="true" data-show-value="true">

            <label for="input_2013">Year 2013:</label>
            <input type="range" name="input_2013" id="input_2013" value="0" min="0" max="365" data-popup-enabled="true" data-highlight="true" data-show-value="true">
            
            <label for="input_2014">Year 2014:</label>
            <input type="range" name="input_2014" id="input_2014" value="0" min="0" max="365" data-popup-enabled="true" data-highlight="true" data-show-value="true">
    
            <input type="submit" name="submit" value="Submit">
        </form>
        
      </article>
      
      <footer data-role="footer" data-position="fixed">
         <nav data-role="navbar">
          <ul>
              <li><a href="#home" data-icon="home">Home</a></li>
              <li><a href="http://www.taxworld.ie" data-icon="info">Taxworld</a></li>
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
        <h2 class="text-center">Your results</h2>
        
          <p><strong>You have provided following details:</strong></p>
		
       
       <ul>
           <li>Year 2010: <strong><?php echo $input_2010 ?></strong> days</li>
           <li>Year 2011: <strong><?php echo $input_2011 ?></strong> days</li>
           <li>Year 2012: <strong><?php echo $input_2012 ?></strong> days</li>
           <li>Year 2013: <strong><?php echo $input_2013 ?></strong> days</li>
           <li>Year 2014: <strong><?php echo $input_2014 ?></strong> days</li>
       </ul>
        
        
        <a href="#input-form-page" data-role="button" data-icon="arrow-l">Go again</a>
	 
      </article>
      
      <footer data-role="footer" data-position="fixed">
         <nav data-role="navbar">
          <ul>
              <li><a href="#home" data-icon="home">Home</a></li>
              <li><a href="http://www.taxworld.ie" data-icon="info">Taxworld</a></li>
          </ul>
         </nav>
      </footer>
   </div><!--   /form-result-->
   
    
</body>
</html>