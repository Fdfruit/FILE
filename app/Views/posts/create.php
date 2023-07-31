<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <div style background-image: var(--bs-gradient);.>
    <div style="text-align: center">
     <h1 style="background-color:DodgerBlue;"></h1>
    <div class="p-3 mb-2 bg-primary bg-gradient text-emphasis-primary"><font size="7" face="monospace">Add New Post </font></div>

    <div class="mb-3">
  </div>
    <form action="/PostController/store" enctype="mutipart/form-data" method="POST">
     
        <div class="shadow p-3 mb-3 bg-body-tertiary rounded"><font size="6" face="monospace">Post Title: </font></div>
            
             
            <input  style="border-width:5px;border-style:ridge;border-color:#FFC9FF		 ;padding:5px;" class="p-3 mb-2  bg-primary-border  text-emphasis-dark"class="  form-control" name="title"type="text">
            <h1></h1>

            <div class="shadow p-3 mb-5 bg-body-tertiary rounded"><font size="6" face="monospace">Post Content: </font></div>
           
            <textarea style="border-width:5px;border-style:ridge;border-color:#FFC9FF		 ;padding:5px;" name="content" rows="3" cols="30"></textarea>
            <br>
            <div style="height:20px"></div>
            
            <div   class="shadow p-3 mb-5 bg-body-tertiary rounded"><font size="6" face="monospace">Post Image: </font></div>

            <input style="border-width:5px;border-style:ridge;border-color:#FFC9FF		 ;padding:5px;" name="image"type="text" >
            <br>
            


            <div style="height:20px"></div>
            <button class="btn btn-primary bg-gradient" type="submit" >Add New Post</button>

            <br>
            
</div>
            



        <style>
            
        </style>

<ul class="nav nav-underline">
  <li class="nav-item">
    <a  class="nav-link active" aria-current="page" href="http://localhost:8080/PostController/create">create</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"href="http://localhost:8080/PostController/index">index</a>
  </li>
  
  
</ul>


        
  


        
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </div> 
</body>
</html>
