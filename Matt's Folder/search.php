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
	<option value="any">Either</option>
  </select>
  <br><br>
  
  <h2> What Kind Of Relationship Do You Have</h2>
 <select name="Relationship">
    <option value="single">Single</option>
    <option value="in_a_relationship">In A Relationship</option>
    <option value="engaged">Engaged</option>
	<option value="married">Married</option>
	<option value="open_relationship">In A Open Relationship</option>
	<option value="compliacted">It's Complicated</option>
	<option value="seperated">Seperated</option>
	<option value="divorced">Divorced</option>
	<option value="widowed">widowed</option>
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
	<option value="clearn_shaven">Clean Shaven</option>
	<option value="stubble_s">Stubble(Short)</option>
	<option value="stubble_m">Stubble(Medium)</option>
	<option value="stubble_l">Stubble(Long)</option>
	<option value="full-beard">Full Beard</option>
	<option value="french_fork">French Fork</option>
	<option value="ducktail">Ducktail</option>
	<option value="ducktail">Ducktail</option>
	<option value="circle_beard">Circle Beard</option>
	<option value="goatee">Goatee</option>
	<option value="extended_goatee">Extended Goatee</option>
	<option value="imperial">Ismperial</option>
	<option value="van_dyke">Van dyke</option>
	<option value="anchor">Anchor</option>
	<option value="balbo">Balbo</option>
	<option value="mutton_chops">Mutton Chops</option>
	<option value="friendly_mutton_chops">Friendly Mutton Chops</option>
	<option value="verdi">Verdi</option>
	<option value="garibaldi">Garibaldi</option>
	<option value="dutch">Dutch</option>
	<option value="bandholz">Bandholz</option>
	<option value="other">Other</option>
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
