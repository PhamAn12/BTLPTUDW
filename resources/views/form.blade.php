<form action= "{{route('postForm')}}" method= "post" >
{{ csrf_field() }}
 <input type= "text" name = "name" >
 <input type= "submit" >
</form>