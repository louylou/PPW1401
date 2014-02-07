<?php

echo'<p>Add your own DVD choice to start your own personal collection!</p>';
	
echo "
	<form action='?' method='POST'>
	
	<label for='title'>Title:</label>
	<input type='text' name='title' id='title' maxlength='40' size='40' value=''/></br>
	
	<label for='year'>Year Made:</label>
	<input type='text' name='year' id='year' maxlength='29' size='29' value=''/></br>
	
	<label for='producer'>Producer:</label>
	<input type='text' name='producer' id='producer' maxlength='32' size='32' value=''/></br>
	
	<label for='actor'>Main Actor(ess):</label>
	<input type='text' name='actor' id='actor' maxlength='21' size='21' value=''/></br>
	<br/>
	
	<input type='submit' name='save' value='Save' /><br/>
	
	<br /><a href='index.php'>Back To DVD List</a>
	
	</form>
		";
	




?>