<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-6">
                  <div class="row">
                      <div class="col-6"><h5>Contact Form</h5></div>
                      <div class="col-6">
                                <a href="view.php" class="btn btn-success" style="float:right;">View Contact</a>
                            </div>
                  </div>
                  <form method="POST" action="insert.php">
                           <div class="mb-3">
                           <legend>Enter your Details:</legend>
                           <label for="exampleFormControlInput1" class="form-label">Name</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name">
                          </div>
                          <div class="mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1"  name="email"placeholder="Email Address">
                          </div>
                          <div class="mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Contact</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="contact" placeholder="contact">
                          </div>
                          <button type="submit" class="btn bg-success">Submit</button>
                  </form>
                  <!--  -->
                 <?php include('msg.php');?>
              </div>
            </div>
        </div>
    </div>
</body>
</html>