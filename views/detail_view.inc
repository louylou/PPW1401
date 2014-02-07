<?php

echo'<p>You may edit the DVD details.</p>';

foreach ($rows as $num => $row) {
	
	echo "
		<form action='?' method='POST'>
		
		<input type='hidden' name='dvdid' value ='${row['dvdId']}'>
		
		<label for='title'>Title:</label>
		<input type='text' name='title' id='title' maxlength='40' size='40' value='${row['title']}'/></br>
		
		<label for='id'>DVD Id:</label>
		<input type='text' name='id' id='id' maxlength='35' size='35' value='${row['dvdId']}'/></br>
		
		<label for='year'>Year Made:</label>
		<input type='text' name='year' id='year' maxlength='29' size='29' value='${row['yearMade']}'/></br>
		
		<label for='producer'>Producer:</label>
		<input type='text' name='producer' id='producer' maxlength='32' size='32' value='${row['producer']}'/></br>
		
		<label for='actor'>Main Actor(ess):</label>
		<input type='text' name='actor' id='actor' maxlength='21' size='21' value='${row['mainActor']}'/></br>
		<br/>
		
		
		<input type='submit' name='edit' value='Edit' />
		
		<input type='submit' name='delete' value='Delete' /><br/>
		
		<br /><a href='index.php'>Back To DVD List</a>
		
		</form>
			";
	
}//end foreach

?>