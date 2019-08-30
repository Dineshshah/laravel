<!DOCTYPE html>
<html>
<head>
     <title>Form</title>
</head>
<body>
<h2>CONTACT </h2>
<form method="post" action="{{url('/contact')}}">
  {!!csrf_field()!!}
<div class ="form-group">
         <label for="name">Name:</label>
         <input type ="text" class="form-control" id ="name" name="name">
         <br>

         <label for="name">Adress:</label>
         <input type ="text" class="form-control" id ="adress" name="adress">
         <br>



         <!--  <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
          COMMENT
          </textarea><br> -->

          <input type="submit" value="Submit">
 </div>
</body>
</html>         