<html>
<head> 
<title> Event System </title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
</head>
<body> 
<div class="headercap">
	<span style="text-align: left; color: #ffffff;"> Event System</span>
</div>
<div id="header">
	<img width="1650px" height="500px" src="{{ URL::asset('images/img1.jpg') }}"/>
</div>
<div class = "searchcat"> 
<div class="search1">
<form action="/searchbylocation" method="post">
  {{ csrf_field() }}

<select name="state"> 
<option> <a href=""> Lagos </a> </option>
<option> <a href=""> Abuja </a> </option>
<option> Port Harcourt </option>
</select> <input type="submit" value="search"/>
</form> 
</div>
<div class="search1">
<form action="/searchbycategory" method="post">
  {{ csrf_field() }}

<select name="category"> 
<option> <a href=""> Music </a> </option>
<option> <a href="">Sport </a> </option>
<option> Nollywood </option>
</select> <input type="submit" value="search"/>
</form>
</div>
<div class="search1"> <a href= "/home"> search all </a> </div>
</div>


<div style="width: 100%; height: 50%;"> 

@foreach($query as $query)


<div class="eventlisting"> <img width = "350" height = "300" src=" {{ asset('/images/'.$query->logo) }}"/> 
<h2> {{ $query-> title}} </h2>
<span> venue: {{ $query-> venue}} </span>
<p>   Time: {{ $query-> start}} to {{ $query-> end}} </p>
<p> {{ $query-> description}} </p>
</div>
@endforeach	

</div>



</body>

</html>