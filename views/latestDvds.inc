
<!-- This the Group Home Content, Profile list, Calendar & last Resort -->

<?php echo "<a href='logout.php'>Logout</a>"; ?>

<section>
	<div id='profileList'>		
	<h1>ALL GIFT PROFILES</h1>

	<ul>
		<li><a href=''>Add User</a></li>
		<li>1 - 10 ( 34 )</li>
		<li><a href=''>View All </a></li>
	</ul>

	<ul>
		
	<?php foreach ($rows as $num => $row) { //alphabetize first names A-Z

			$user_id = $row['profile_id']; //was 'dvdId' //displays the proper user with their proper account content
	
			//change details page to profiles
			echo "<li><img src='../images/noPhoto.jpg'/><a href='details.php?id=" . mysql_real_escape_string($user_id) . "'>${row['profile_fullname']}</a></li>"; //was 'title' 

		} ?>
	</ul>
	
	</div> <!--end profileList-->	

	<div id='calendar'>	
	<h1>SPECIAL EVENTS CALENDAR</h1>
		<p><a href='allCal.html'>View All </a></p>
		<ul>	
		<?php foreach ($rows as $num => $row) {
	
				$user_id = $row['event_id'];  //displays the proper user with their proper account content
						
				echo "<li class='birthday'>(sat)<span>${row['event_date']}</span> - ${row['event_owner']}<a href='details.php?id=" . mysql_real_escape_string($user_id) . "'>${row['event_title']}</a></li>";
	
			} ?>
		</ul>
	</div>

	<div id='lastResort'>
	<h1>Last Resort</h1>
		<ul>
			<li><img src='../images/flowers.jpg'/><span>Same Day Delivery</span><a href='http://www.ftd.com'>www.ftd.com</a></li>
			<li><img src='../images/flowers.jpg'/><span>Same Day Delivery</span><a href='http://www.fromyouflowers.com'>www.fromyouflowers.com</a></li>
			<li><img src='../images/flowers.jpg'/><span>Over Night Delivery</span><a href='http://www.proflowers.com'>www.proflowers.com</a></li>
			<li><img src='../images/basket.jpg'/><span>Express Delivery</span><a href='http://www.harryanddavid.com'>www.harryanddavid.com</a></li>
		</ul>
	</div>
		

</section>	



