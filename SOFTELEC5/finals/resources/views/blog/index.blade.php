@extends('layouts.blog')

@section('content')

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="http://placehold.it/700x200" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>TITLE HEADING</b></h3>
      <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="#" class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></a></p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="http://placehold.it/700x200" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>BLOG ENTRY</b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="#" class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></a></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card-2 w3-margin w3-margin-top">
  <img src="http://placehold.it/400x200" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>My Name</b></h4>
      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
  </div><hr>

  <!-- Posts -->
  <div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <a href="#" style="display: block; text-decoration:  none;">
        <img src="http://placehold.it/50x50" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Lorem</span><br>
        <span>Sed mattis nunc</span>
        </a>
      </li>
      <li class="w3-padding-16">
        <a href="#" style="display: block; text-decoration:  none;">
        <img src="http://placehold.it/50x50" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Ipsum</span><br>
        <span>Praes tinci sed</span>
        </a>
      </li>
      <li class="w3-padding-16">
        <a href="#" style="display: block; text-decoration:  none;">
        <img src="http://placehold.it/50x50" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Dorum</span><br>
        <span>Ultricies congue</span>
        </a>
      </li>
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <a href="#" style="display: block; text-decoration:  none;">
        <img src="http://placehold.it/50x50" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
        </a>
      </li>
    </ul>
  </div>
  <hr>

  <!-- Labels / tags -->
  <div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p>
      <span class="w3-tag w3-black w3-margin-bottom"><a href="#" style="text-decoration: none;">Travel</a></span>
      <span class="w3-tag w3-light-grey w3-margin-bottom"><a href="#" style="text-decoration: none;">Food</a></span>
      <span class="w3-tag w3-light-grey w3-margin-bottom"><a href="#" style="text-decoration: none;">Games</a></span>
      <span class="w3-tag w3-light-grey w3-margin-bottom"><a href="#" style="text-decoration: none;">Movies</a></span>
      <span class="w3-tag w3-light-grey w3-margin-bottom"><a href="#" style="text-decoration: none;">Comics</a></span>
      <span class="w3-tag w3-light-grey w3-margin-bottom"><a href="#" style="text-decoration: none;">Sports</a></span>
    </p>
    </div>
  </div>

<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

@endsection
