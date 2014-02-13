<!--
this is the data that shows up on whatever the user clicks on. 
such as the correct profile to whichever user was clicked on.
Or for for Calendar or Last Resort.
-->
<!-- 
you will need one of these pages for each profile and cal 
--> 


<?php

	require_once "models/db.php";
	require_once "models/dvdModel.php";
	require_once "models/dvdView.php";


$model = new dvdModel(MY_DSN, MY_USER, MY_PASS);
$view = new dvdView(); 	

$view->showHeader('User Profile: Perfect For Me'); //calling the showHeader Function
//$view->showDetail($model->getDetail($_GET['id'])); //$rows is equaled to the argument

//tried adding to bottom but didn't display right $view->showFooter(); 

?>

<section id='breadcrumbs'>
	<ul>
		<li><a href='grouphome.html'>Group Home >></a></li> 
		<li><a href='profile.html'> User Profile</a></li>
	</ul>
</section>

<section id='profile'>
		
	<h1>Hannah Elizabeth Davis</h1>
		<p><a href=''><img src='../images/bri.jpg'/></a></p>
		<p><a href='editProfile.html'>Edit Profile ( Upload Photo, Add Gifts )</a></p>
		
		<form>
			<fieldset>
				<legend>Likes & Dislikes</legend>				
				<p>
					<label for='clothing'>Clothing Style</label>
					<input type='text' name='clothing' id='clothing' placeholder='ex: Hipster, BoHo Chic, Preppy...' min='1' max='100' size='90'>
				</p>
				<p>
					<label for='food'>Food Style</label>
					<input type='text' name='food' id='food' placeholder='ex: Italian, Mexican, Chinese...' min='1' max='100' size='90'>
				</p>
				<p>	
					<label for='movie'>Movie Genre</label>
					<input type='text' name='movie' id='movie' placeholder='ex: Action, Horror, Romance...' min='1' max='100' size='0'>
				</p>
				<p>
					<label for='hobbie'>Hobbies </label>
					<input type='text' name='hobbie' id='hobbie' placeholder='ex: Hiking, Reading, Cooking...' min='1' max='100' size='90'>
				</p>
				<p>
					<label for='other'>Other</label>
					<input type='text' name='other' id='other' placeholder='ex: The Lord of the Rings BluRay Collection...' min='1' max='100' size='90'>
				</p>
				<p>
					<label for='dislikes'>Gift Dislikes </label>
					<input type='text' name='dislikes' id='dislikes' placeholder='ex: Socks, Toothbrushes, Pink Bunny Suit...' min='1' max='100' size='90'>
				</p>	

			</fieldset>
		</form>
</section><!--end profileLikes -->

	<section id="giftList">	
		<h1>All Gift Requests</h1>
		<form>
			<select>
				  <option value="price">Price</option>
				  <option value="name">Name</option>
			</select>
		</form>
		<ul>
			<li>1 - 13 ( 24 )</li>
			<li><a href="">View All </a></li>
		</ul>
		<table>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>URL <span>(optional)</span></th>
			</tr>
			<tr>
				<td>Mountain Bike</td>
				<td>$369.99</td>
				<td><a href="">Link to specific Item</a></td>
			</tr>
			<tr>
				<td>Coffee thermos</td>
				<td>$22.99</td>
				<td><a href="">Link to specific Item</a></td>
			</tr>
			<tr>
				<td>nike running shoes (size 8)</td>
				<td>$120.00</td>
				<td></td>
			</tr>
			<tr>
				<td>Michael Kor wallet (black)</td>
				<td>$140.00</td>
				<td></td>
			</tr>
			<tr>
				<td>Vera Wang Perfume (1.7 oz)</td>
				<td>$50.00</td>
				<td></td>
			</tr>
			<tr>
				<td>Sterling silver bracelet with charms</td>
				<td>$75.00</td>
				<td><a href="">Link to specific Item</a></td>
			</tr>
			<tr>
				<td>red heels from traffic (size 8)</td>
				<td>$25.00</td>
				<td><a href="">Link to specific Item</a></td>
			</tr>
			<tr>
				<td>gold picture frame (4x6)</td>
				<td>$15.00</td>
				<td><a href="">Link to specific Item</a></td>
			</tr>
			<tr>
				<td>Photo album (4x6 photos)</td>
				<td>$20.00</td>
				<td></td>
			</tr>
			<tr>
				<td>headphones</td>
				<td>$200.00</td>
				<td><a href="">Link to specific Item</a></td>
			</tr>
			<tr>
				<td>gold hoop earrings</td>
				<td>$30.00</td>
				<td></td>
			</tr>
			<tr>
				<td>victoria's secret blue poka dot bikini</td>
				<td>$70.00</td>
				<td><a href="">Link to specific Item</a></td>
			</tr>
			<tr>
				<td>iphone 5s case</td>
				<td>$60.00</td>
				<td></td>
			</tr>
		
		</table>
</section>


