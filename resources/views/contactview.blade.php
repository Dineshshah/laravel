<!DOCTYPE html>
<html>
<head>
     <title>contactview</title>
</head>
<body>
	  @if(Session::has('status'))
  <div class="alert alert-success"
  role="alert">
  {{Session::get('status')}}
</div>
@endif

	@foreach ($contacts as $contact)
  <h1> {!! $contact->name !!}</h1>
  <a href={{url("/editcontact/{$contact->id}")}}><button> EDIT</button></a>
  <a href={{url("/deletecontact/{$contact->id}")}}><button onclick="alert('delete')"> delete</button></a>

   <br>
   

   @endforeach
</body>
</html>