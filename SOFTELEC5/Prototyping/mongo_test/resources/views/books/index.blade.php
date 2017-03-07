<!DOCTYPE html>
<html>
  <head>
      <title>Book Index</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
  </head>
  <body>
    <h1>Welcome to My Library</h1>
    <h2>Index of Books</h2>
    <table>
      <th>No</th>
      <th>Book Title</th>
      <th>ISBN</th>
      <th>Author</th>
      <th>Category</th>
      <th>Action</th>
      <tbody>

        @foreach ($books as $i => $book)
        <tr>
        <td>{{ $i+1 }}</td>
        <td>{{ $book{'title'} }}</td>
        <td>{{ isset( $book{'isbn'} ) ?  $book{'isbn'} : ' - ' }}</td>
        <td>{{ $book{'author'} }}</td>
        <td>{{ $book{'category'} }}</td>
        <td>
          <input type="button" class="book-action" value="View" onclick="window.location ='{{ route('books.show', ['book' => $book{'_id'}]) }}'">
          <input type="button" class="book-action" value="Edit" onclick="window.location ='{{ route('books.edit', ['book' => $book{'_id'}]) }}'">
          <input type="button" class="book-action" name="del" value="Delete"/>
          </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <hr/>

    <input type="button" class="book-action big" value="Add a Book" onclick="window.location ='{{ route('books.create') }}'">
  </body>
</html>
