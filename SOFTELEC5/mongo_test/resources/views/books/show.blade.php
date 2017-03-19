<!DOCTYPE html>
<html>
  <head>
    <title>View Book</title>
  </head>
  <body>
    <h1>Title: {{ $book{0}{'title'} }} </h1>
    <p>Content: {{ $book{0}{'category'} }}</p>
    <br/><hr/>
    <input type="button" class="book-action big" value="Return" onclick="window.location='{{ route('books.index') }}'">
  </body>
</html>
