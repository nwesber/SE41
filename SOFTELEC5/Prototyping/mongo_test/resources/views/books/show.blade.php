<!DOCTYPE html>
<html>
<head>
<title>View Book</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
</head>
<body>
<h1>{{ $book{0}{'title'} }} </h1>
<p>{{ $book{0}{'category'} }}</p>

<br/><hr/>

  <input type="button" class="book-action big" value="Return" onclick="window.location='{{ route('books.index') }}'">


</body>
</html>
