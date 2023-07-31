HELLO !

<?php
if(!empty($posts)){
    echo'<h1>Posts List<h1>';
    foreach($posts as $posts_item){
        echo '
            <a href="/PostController/show/'.$posts_item['id'].'">'.$posts_item['title'].'</a><br>
        ';
    }   
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

<ul class="nav nav-underline">
  <li class="nav-item">
    <a   class="nav-link"href="http://localhost:8080/PostController/create">create</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page"href="http://localhost:8080/PostController/index">index</a>
  </li>
  
  
</ul>