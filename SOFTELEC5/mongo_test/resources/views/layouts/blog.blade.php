<!DOCTYPE html>
<html>
<title>My Blog</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32">
  <h1><b>MY BLOG</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">unknown</span></p>
</header>

@yield('content')

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-padding-large w3-margin-bottom">Next »</button>
  <p>nwesber 2017</p>
</footer>

</body>
</html>
