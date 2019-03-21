<?php include('search_server.php') ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Search</title>
</head>
<body>

<div class"search-box"> 
	<input class = "search-txt" type = "text" name = "name_user" placeholder = "Insert name (if you wish)">
<!--	<a class = "search-btn" href = "SEARCH">Search</a> -->
	</div>
 <h2> What Gender Are You Looking For?</h2>
  <select name="Gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
<!--	<option value="any">Either</option> -->
  </select>
  <br><br>
  
  <h2> What Kind Of Relationship Do You Have</h2>
 <select name="Relationship">
    <option value="Single">Single</option>
    <option value="In a relationship">In A Relationship</option>
    <option value="Engaged">Engaged</option>
	<option value="Married">Married</option>
	<option value="In an open relationship">In A Open Relationship</option>
	<option value="It is complicated">It's Complicated</option>
	<option value="Seperated">Seperated</option>
	<option value="Divorced">Divorced</option>
	<option value="Widowed">Widowed</option>
  </select>
  <br><br>

<h2> Types Of The Beard?</h2>
 <select name="BeardBar" >
<!--    <option value="thick">Thick</option>
    <option value="clearn-shaved">Clean-Shaven</option>
    <option value="curly">Curly</option>
	<option value="straight">Straight</option>
	<option value="goate">Goate</option>
	<option value="stubble">Stubble</option>
	<option value="sole_patch">Sole-Patch</option>
	<option value="viking">Viking</option>
	<option value="any">Any</option>
	<option value="none">None</option> -->
	<option value="Clean shaven">Clean Shaven</option>
	<option value="Stubble(short)">Stubble(Short)</option>
	<option value="Stubble(medium)">Stubble(Medium)</option>
	<option value="Stubble(long)">Stubble(Long)</option>
	<option value="Full beard">Full Beard</option>
	<option value="French fork">French Fork</option>
	<option value="Ducktail">Ducktail</option>
	<option value="Circle beard">Circle Beard</option>
	<option value="Goatee">Goatee</option>
	<option value="Extended goatee">Extended Goatee</option>
	<option value="Imperial">Ismperial</option>
	<option value="Van dyke">Van dyke</option>
	<option value="Anchor">Anchor</option>
	<option value="Balbo">Balbo</option>
	<option value="Mutton chops">Mutton Chops</option>
	<option value="Friendly mutton chops">Friendly Mutton Chops</option>
	<option value="Verdi">Verdi</option>
	<option value="Garibaldi">Garibaldi</option>
	<option value="Dutch">Dutch</option>
	<option value="Bandholz">Bandholz</option>
	<option value="Other">Other</option>
  </select>
  <br><br>
  
<h2> What length?</h2>
 <select name="Length">
    <option value="longBeard">Long</option>
    <option value="mediumBeard">Medium</option>
    <option value="shortBeard">Short</option>
	<option value="any">Any</option>
	<option value="none">None</option>
  </select>
  <br><br>
 <!-- 
<h2> What Interests Are You Looking For?</h2>
  <select name="Interests">
    <option value="value1">Option 1</option>
    <option value="value2">Option 2</option>
    <option value="value3">Option 3</option>
	<option value="any">Any</option>
  </select>
  <br><br>
 --> 

 
  <button type="button" class="submitButton" name="beard_search"><a href="letsago">Submit</a></button>

</body>

</html>
