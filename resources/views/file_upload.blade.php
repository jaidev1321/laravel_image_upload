<!DOCTYPE html>
<html>
<head>
	<title>File Upload Example</title>
</head>
<body>

@if(Session::has('success'))
    <div id="alert" class="notification is-success cs-alert">
        <button class="delete" onclick="hideAlert()"></button>
        {{ Session('success') }}
    </div>
@endif
<form action="{{url('upload/exec')}}" method="post" enctype="multipart/form-data">
	<input type="file" name="image" accept="image/*" />
	@csrf
	<input type="submit" value="Upload" >
</form>
</body>
</html>