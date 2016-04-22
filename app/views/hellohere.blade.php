<!DOCTYPE html>
<html>
<head>
	<title>jknsad</title>
</head>
<body>
<h3>
	
	<div style="background: red; font-size: 12px;">
		<?php echo $product->name; ?>
		{{$product->name}}
	</div>
</h3>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


{{ Form::open(array('url' => 'hello')) }}
<div  style="background: black">
	
{{Form::password('password')}}
</div>

{{ Form::close() }}

<h2>Hello world</h2>


<form>
	
</form>
</body>
</html>