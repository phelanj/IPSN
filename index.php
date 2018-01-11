
<?php

include 'classes/page.class.php';

$home = new page($counter);

$today = date('F j, Y');

$home->displayHeader('Organized Crime &amp; Political Corruption', basename($_SERVER['PHP_SELF']));

?>
<div> <h2>Heading 1</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae quam nec velit viverra iaculis. Mauris ut urna convallis leo imperdiet vehicula. Nunc egestas, tortor vel tempus vehicula, tortor tellus scelerisque lorem, commodo mattis nulla tortor a mauris. Fusce mauris leo, accumsan eu nibh eget, euismod ultricies mauris. Duis nunc lectus, rutrum at dictum at, tempor quis nibh. Aliquam erat volutpat. Donec vel purus tincidunt, vehicula dui id, hendrerit neque. Pellentesque eu consequat sapien. Maecenas in finibus elit, sit amet commodo nunc. Vestibulum tristique purus eget egestas auctor. Nunc tincidunt nisi diam, molestie dictum augue tincidunt iaculis. Pellentesque non sem aliquet, fermentum risus a, sodales mauris. Donec lacinia at orci nec rhoncus. Aenean in imperdiet diam.  <p>Some text some text some text some text..</p> </div>
	<div id="main">
		<h3 style="text-align:center;">Family Secrets Investigation<br /><p style="color:black;font-size:20px;text-align:center;margin-top:13px;margin-bottom:-5px;">Chicago Outfit-Joey Lombardo and Frankie Schweihs<br /></p></h3>
		<a href="audio/interview.mp3"><h3 style="text-align: center; font-size: 20px; font-weight: bold; color: rgb(153, 34, 17);margin-top: 15px;" >Click here to listen</h3><h3 style="text-align: center; margin-bottom: 15px;">Interview on the Family Secrets investigation.</h3></a>
		<div id="bio">
			<div id="bio_img"><img id = "john_portrait" style="height:140px; margin-top: 35px;" src ="images/JohnFlood.png" alt="John J Flood" /></div>
			<!--<h3 style="color:black;text-align: right;">John J Flood</h3>-->
			<div style="background-color: #EEEEEE; padding:10px; padding-bottom: 30px; border: 1px #c90000 solid; font-family: sans-serif; font-size: 16px;">
				<h3 style="font-size: 18px;  font-weight:bold; display: inline;">John J. Flood</h3>
				<p style="display: inline;">, a seasoned veteran of police work, is the founder of the
				Combined Counties Police Association, one of the most well-known and respected
				independent law enforcement unions ever formed in the United States.
				An established and recognized crime fighter and authority on the La Cosa
				Nostra and the Chicago Outfit, Flood was an associate of the late FBI agent
				and author Bill Roemer. Flood advised Roemer on much of the information 
				on the mob that was used in his many books. Mr. Flood is recognized by his 
				peers to be one of the foremost experts on organized crime, syndicate gambling,
				and vice activities in Illinois and nationally.</p><br/>
				<p style="text-align: center;">
					<a href="flood_bio.php" class="red_link">Read more...</a>
				</p>
			</div>
		</div>
		<div id="section_testimony/blog" style="margin-top:15px;">
			<h5 sytle="color:#C90000; text-align: center; margin-top: 15px;">Crime Information Researcher</h5>
			<p id="jimmy" class="author-name" >Jimmy Agnew</p>
			<h5 style="color:#C90000; text-align: center; margin-top: 15px;">Staff Journalists of John J Flood</h5>
			<p id="ray" class="author-name" >Ray Hanania</p><p class="author-name">Joseph Longmeyer</p><p class="author-name">Richard Lindberg</p>
			<h5 style="color:#C90000; text-align: center; margin-top: 15px">Organized Crime Investigator</h5>
			<p class="author-name" style="margin-left: 288px">James McGough</p>
			<a class="b_link" href="http://www.ipsn.org/blog/"><br/><p style = "text-align: center; margin-top: 15px;">John J Flood's Blog</p></a><br/>
			<!--<p style="text-align:center; margin-top: -20px; font-weight: bold; text-decoration: underline; margin-bottom: 10px;">Click Here</p>-->
			<p style="background-color: #EEEEEE; border: solid 1px #C90000; padding: 10px; font-family: sans-serif; font-size: 14px">
				This site contains extensive files covering interviews,
				published reports and detailed accounts of organized crime figures and their
				operations by a man who lived it's history. 
			</p>	
		</div>
	</div> <!-- Main End-->
	<div id="headline_column">
		<div id="headlines">
			<h5>Crime Headlines</h5>
			<ul class="headlines">
				<li><a href="schweihs.php">Flood's testimony on Frank Schweihs</a></li>
				<li><a href="flood_emerald.php">Flood named Police Officer of the Year</a></li>
				<li><a href="county1.php">Cook County Police Dept Held Hostage by Politics: Part 1</a></li>
				<li><a href="county2.php">Cook County Sheriff's Police Dept Held Hostage: Part 2</a></li>
				<li><a href="county3.php">A Police Department Held Hostage by Politics: Part 3</a></li>
				<li><a href="county4.php">A Police Department Held Hostage by Politics: Part 4</a></li>
				<li><a href="ArthurLoevy.php">Arthur Loevy Attorney at Law</a></li>
				<li><a href="pape2.php">The Frank Pape Story</a></li>
				<li><a href="roemer.php">William F. Roemer Jr.</a></li>
				<li><a href="rick_simon.pdf">Chief Inspector Simon</a></li>
				<li><a href="waukegan.htm">The Waukegan Police Strike</a></li>
				<li><a href="stier_anderson__malone_reports.htm">Confidential Stier Report - Teamsters Union</a></li>
				<li><a href="hauff_press.pdf">Richard Hauff File</a></li>
				<li><a href="family.pdf">Family Secrets Final Indictment</a></li>
				<li><a href="loren_maltese_guilty.php">CICERO Loren-Maltese, Spano</a></li>
				<li><a href="omara.php">Who Killed Mike O'Mara?</a></li>
				<li><a href="orourke_affidavit.php">FBI Agent O'Rourke Affidavit</a></li>
				<li><a href="teamsters.php">Teamsters bar William Hogan and Dane Passo.</a></li>
				<li><a href="hanhardt.php">William "Bill" Hanhardt files</a></li>
				<li><a href="pape.php">"Most Feared Lawman" Captain Frank Pape Dies</a></li>
				<!--<li><a href="genesis.php">Genesis of Organized Crime in Chicago</a></li>
				<li><a href="http://abclocal.go.com/wls/video?id=7571234">CPD Officer Michael Baileys' Funeral</a></li>
				<li><a href="http://abclocal.go.com/wls/video?id=7779664">T. Markus Funk on Mike Sarno</a></li>
				<li><a href="jon_burge.php">Jon Burge Files</a></li>
				<li><a href="apes.php">Johnny "Apes" Monteleone</a></li>
				<li><a href="carey_indictment.php">Ronald Carey Indictment</a></li>
				<li><a href="carey.php">Trouble In Teamster City</a></li>
				<li><a href="sinatra.php">Sinatra told me about links with the Mob</a></li>
				<li><a href="bingo.php">$3.2 million bingo hall scheme alleged</a></li>
				<li><a href="emerald.pdf">Emerald Casino Complaint</a></li>
				<li><a href="fox.php">Who is Judge Paul Foxgrover?</a></li>
				<li><a href="sports.php">Sports Betting Ring Busted Up by Feds</a></li>
				<li><a href="mob_roots.php">Mob Roots</a></li>
				<li><a href="movies.php">Movies</a></li>
				<li><a href="ohare.php">Capone Mob Murder, World War II Hero Figure In Naming of O'Hare Airport.</a></li>-->
			</ul>
		</div>
	</div><!--Headlines End-->

<?php $home->displayfooter(); ?>
</body>
</html>