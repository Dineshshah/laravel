


<!DOCTYPE html>
<html>
<head>
     <title>EDit</title>
</head>
<body>
<h2>edit FORM </h2>
<form method="post" action={{url("/editinsert/{$contacts->id}")}}>
	{!!csrf_field()!!}
<div class ="form-group">
	
   
         <label for="name">Name:</label>
         <input type ="text" class="form-control" id ="name" name="name" value="{{$contacts->name}}"><br>
         </div>
       
 
  <button type="submit">login</button>

 
</form>
</body>
</html>         