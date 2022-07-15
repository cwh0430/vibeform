<html>
<link rel="stylesheet" href="mystyles.css">
<head><title>Good Vibes Form</title></head>
<body>

<p class="a">Good Vibes Form</p>
<div>
<p class="textcenter">Tell us something positive that happened to you today.</p>

<form method=post action="postmsg.php">

<table class="center">

<tr>
<td class="topright">Name</td>
<td><input type=text name=names placeholder="Enter your name"></td>
</tr>

<tr>
<td class="topright">Email</td>
<td><input type=text name=email placeholder="Enter your email address"></td>
</tr>

<tr>
<td class="topright">On a scale of 1-10, how good was it?</td>
<td><input type= text name=scale placeholder="Enter a number between 1 and 10"></td>
</tr>

<tr>
<td class="topright">Where did it happen?</td>
<td>
<select name=locations id=locations>
<option value="home">At home</option>
<option value="commute">On my commmute</option>
<option value="work">At work</option>
<option value="street">On the street</option>
<option value="other">Other</option>
</select>
</td>
</tr>

<tr>
<td class="topright">At what time did it happen?</td>
<td>
<input type=radio name=time value="morning">Morning<br>
<input type=radio name=time value="afternoon">Afternoon<br>
<input type=radio name=time value="evening">Evening<br>
</td>
</tr>

<tr>
<td class="topright">What emotions did you experience?<br>
(Select all that apply)</td>
<td>
<input type=checkbox name=excite value="excited">Excited<br>
<input type=checkbox name=humble value"humbled">Humbled<br>
<input type=checkbox name=elate value="elated">Elated<br>
<input type=checkbox name=love value="loved">Loved<br>
<input type=checkbox name=enthusiasis value="enthusiastic">Enthusisastic<br>
</td>
</tr>

<tr>
<td class="topright">Please describe your positve experience.</td>
<td><textarea cols=38 rows=8 name=experience placeholder="Enter your experience here..."></textarea></td>
</tr>

</table>

<input type=submit name=submit value="Submit">

</form>
</div>

</body>
</html>