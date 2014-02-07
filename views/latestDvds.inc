
<!-- This the Group Home Content, Profile list, Calendar & last Resort -->

<?php

echo "<img src='images/popcorn.jpg'>";
echo "<p>Welcome to you own DVD List! Click on a movie to </p>";
echo "<p>view its details, edit or delete. These few movies are just </p>";
echo "<p>an example of how your movies with display. Enjoy</p>";
echo "<p>adding your favorite DVDs to make your own collection!</p>";
echo "<br/>";

foreach ($rows as $num => $row) {
	
	$user_id = $row['dvdId']; #displays the proper user with their proper account content
	
	echo "<li><a href='details.php?id=" . mysql_real_escape_string($user_id) . "'>${row['title']}</a></li>";
	
}//end foreach

echo "<h4><a href='addDvd.php'>Add DVD</a></h4>";


echo "<a href='logout.php'>Logout</a>";

?>