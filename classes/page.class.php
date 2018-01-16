<?php

include 'counter.php';

class page
{
    var $title;
    var $today;
	public $counter = 0;
	
	public function __construct($counter = null)
	{
		if ($counter)
		{
			$this->counter = $counter->get_counter();
		}
	}
    
    function displayDTD()
    {
        echo <<< END
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

        <html>
        <head>
        <meta http-equiv="content" content="Illinois Police and Sheriff's News, organized crime" />
        <meta name="keywords" content="Ray Hanania,Writer Hanania, Joseph Longmeyer, Writer Longmeyer, Richard Lindberg,Writer Lindberg, Organized Crime, Police, Hauff, Nasser, Marcello, Jon Burge,
              Caifano, Alderisio, Kennedy, Mafia, John J Flood, Lombardo, Loevy, Loevy & Loevy,
              Chicago Crime Commission, Accardo, Giancanna, Capone, Gotti, Genovese, Gambino, Alo,
              Lansky, Goodman, Spilotro, Cullota, Griffin, Luciano, Anastasia, Siegel, Cerone,
              Aiuppa, DeStefano, Battaglia, Cain, Scalzetti, English, Alex, Gravano, Fitzpatrick,
              Calabrese, Infelise, Romano, Pape, Solly D, Delaurentis, Daley, Chicago, Crime, IPSN" />
END;
		$this->displayTitle();
    }

    function displayTitle()
    {
        echo '<title>'.$this->title.'</title>
        <link type="text/css" rel="stylesheet" href="css/ipsn3.css" />
		<link type="text/css" rel="stylesheet" href="css/style2.css" />
		<link rel="stylesheet" href="css/MygoogleBar.css" type="text/css" />
		<script type="text/javascript" language="javascript" src="js/functions.js"></script>
        </head><body>';
    }

    function displayHeader($title, $page = 'index.php', $desc = '')
    {
        $this->title = $title;
        $this->today = date('F j, Y');
        $this->page = 'http://www.facebook.com/sharer.php?u=http://www.ipsn.org/' . $page;
        if ($desc)
        	$this->page .= '&t=' . $desc;
        
        $this->title = $title;
		
		$this->displayDTD();
		
        ?>
        <div id="headwrap" class="container transparent">
			<div id="date">
				<?php echo $this->today; ?>
			</div>
        	<a href="index.php" class="home_link">
				<div id="header">
					<h1>John J Flood - Cook County Police Department - Founder Combined Counties Police Assn</h1>
					<div style="clear:both"></div>
					<h2>Organized Crime &amp; Political Corruption</h2>
				</div>
			</a>
			<hr></hr>
			<div style="height: 10px; width: 100%;"> <!--this is a placeholder--> </div>
			<div id="search">
				<h3 style=" ">Search the IPSN site</h3>
				<p>This site contains thousands of documents on organized crime. Enter the
					information you wish to find in the field below and press the search button.
				</p>
				<div id="cse-search-form" style="width: 97%; margin : auto;">Loading</div>
				<script src="http://www.google.com/jsapi" type="text/javascript"></script>
				<script type="text/javascript">
					google.load('search', '1', {language : 'en', style : google.loader.themes.MINIMALIST});
					google.setOnLoadCallback(function() {
						var customSearchOptions = {};
						var customSearchControl = new google.search.CustomSearchControl(
							'015541781042199358933:qngsz8coe28', customSearchOptions);
						customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
						var options = new google.search.DrawOptions();
						options.enableSearchboxOnly("http://ipsn.org/Results.php");
						customSearchControl.draw('cse-search-form', options);
					}, true);
				</script>
      		</div>
		</div>
        <div id="navwrap" class="container transparent">
			<div id="nav_bar">
				
				<a href="http://ipsn.org/blog">John Flood's Blog</a>
				<!--<a href="mob.php">MOB Page</a>-->
				<a href="">Real Police History</a>
				<a class="fb_share" href="#" onclick="return popitup(' <?php echo $this->page; ?> ')" >
					<img src="images/facebook_32.png" title="Share this on Facebook."/>
				</a>
			</div>
		</div>
		<div id="wrapper" class="container transparent">
		<?php
    }

    function displayFooter()
    {	
		echo '   <div id="footer"><!--<a href="mailto:jjfccpa@ipsn.org">-->JJFCCPA@IPSN.ORG</a> | (702) 991-1848 | (702) 296-7080 | (312) 224-2757 | (212) 533-3927 <br />
			201 South Las Vegas Boulevard <br /> Suite 1111, Las Vegas, Nevada 89125 <br />';
		$hits = $this->counter;
		echo 'IPSN 2008 - 2028 All rights reserved. Not for republication on the internet without permission.';
		echo '<br/><p style="text-align: center;">' . $hits . '</p>';
		echo '</div>
		</div><!--Wrapper-->';
    }
}

?>