<h2>
	Your Enquiry
</h2>

<div class="left">
	<form method="post" action="http://www.allenderfarm.co.uk/cgi-bin/FormMail.pl" id="bookingbox">
		<input type="hidden" name="recipient" value="allenderfarm@btinternet.com">
		<input type="hidden" name="redirect" value="http://www.allenderfarm.co.uk/node.php?p=ContactThanks">
		
		<div id="contact" class="indent">
			<select name="option">
				<option checked>Title</option>
				<option value="Mr">Mr</option>
				<option value="Mrs">Mrs</option>
				<option value="Miss">Miss</option>
				<option value="Ms">Ms</option>
			</select>
		</div>
		
		<div>
			<label>Name:</label>
			<input type="text" name="myname" value="">
		</div>

		<div>
			<label>E-mail:</label>
			<input type="text" name="myemail" value="">
		</div>

		<div>
			<label>How can we help?</label>
		</div>

		<div>
			<textarea name="other_info"></textarea>
		</div>

		<div>
			<input type="submit" value="Send" onClick="return Validate();">
		</div>
	</form>
</div>

<div class="right">
	<p>
		Allender Farm,
		<br> Lee, Near Ilfracombe,
		<br> North Devon, England
		<br> EX34 8LS
		<br>
		<a href="?p=Location">Directions to the farm</a>
	</p>
	
	<p>
		Tel: 01271 866679
		<br> <a href="mailto:allenderfarm@btinternet.com">allenderfarm@btinternet.com</a>
	</p>
	
	<div id="socialings">
		<a id="soc" href="">
			<img src="./img/fbbar.png">
		</a>
	
		<a id="soc" href="http://twitter.com/allender_farm">
			<img src="./img/twitbar.png">
		</a>
		
		<img src="./img/sticky.png" id="sticky">
	</div>
</div>
