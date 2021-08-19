<html>

<head>
    <title>Calculate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form method="POST" action="handle-image-drive.php" class="w-75 m-auto p-5 border" enctype="multipart/form-data">
        <div class="form-group">
            <label for="userName">Your File</label>
            <input type="text" name="username" class="form-control" id="userName" placeholder="Enter....">
        </div>
        <div class="form-group">
            <label for="userFile">Your File</label>
            <input type="file" name="image" class="form-control" id="userFile" >
        </div>
        <div class="form-group">
        <label for="userOP">You Want to upload in this name </label>

        <select  class="form-control" name="userOP" id="userOP" size="1">
         <option>Yes</option>
         <option>No</option>
  
          </select>
        </div>

        <button class="btn btn-info" name="submit" value="submit">Submit</button> <br>
    

    </form>



    <div class="container mt-5">
    <div class="row">
    
        <?php
        $lenDir=count(scandir("uploads"));

        for($i=2 ; $i < $lenDir ; $i++)
        {
           $x=scandir("uploads")[$i];
        
        ?>
              <div class='col-4'>
                  <div class="d-flex flex-column w-100 h-100">
                        <?php
                           echo "<img class='p-2' src='uploads/$x' width='100%'  height='100%' />";
                           echo "<a class='ml-3 text-info stretched-link' href='uploads/$x'/>$x</a>";
                         ?>
                    </div>
              </div>
      
       <?php } ?>
    </div>
           
    </div>
    
        
        

  



    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>