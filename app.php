<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINTMENT</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">HEALTH TIMES</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="app.php">MAKE AN APPOINTMENT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dr.php">DR.LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="medicine.php">MEDICINE SEARCH</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedback.php">FEEDBACK</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    
    

    <h2><center><b><u>MAKE AN APPOINTMENT</u></b></center></h2><br>
    <div class="alert alert-danger" role="alert">
        <Main>Make an appointment and find your best expert available.SAVE YOUR TIME</Main>
      </div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
               <table class="table">
                   (fill the required fields below and mark your appointment) <br><br>
                   <tr>
                       <td>PATIENT'S NAME</td>
                       <td><input type="text" class="form-control"></td>
                   </tr>
                   <tr>
                       <td>DOB</td>
                       <td><input type="text" class="form-control"></td>
                   </tr>
                   <tr>
                       <td>AGE</td>
                       <td><input type="text" class="form-control"></td>
                   </tr>
                   <tr>
                       <td>ADDRESS</td>
                       <td><input type="text" class="form-control"></td>
                   </tr>
                   <tr>
                       <td>PH:NO</td>
                       <td><input type="text" class="form-control"></td>
                   </tr>
                    </table> 

            </div> 
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
        </div>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>MANDATORY!</strong> Mark the date and time in which you wish to get the service.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      <div class="container">
          <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <table class="table">
                    <tr>
                        <td>REQUIRED DATE</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                 <tr>
                     <td>TIME</td>
                     <td><input type="text" class="form-control"></td>
                 </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
              
          </div>
      </div>
      <div class="alert alert-warning" role="alert">
        Find the Hospital near you and mention it in the field <a href="a link" class="alert-link">CLICK HERE TO FIND </a>. 
     </div>
      <div class="container">
          <div class="row">
              <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
              <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                  <table class="table">
                      <tr>
                          <td>HOSPITAL</td>
                          <td><input type="text" class="form-control"></td>
                      </tr>
                  </table>
              </div>
              <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
          </div>
      </div>
      <div class="alert alert-warning" role="alert">
        <Main> <strong>OPTIONAL FIELDS </strong> :Marking it would be good</Main>
      </div>
     <div class="container">
         <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
             <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                 <table class="table">
                     <tr>
                         <td>DEPT</td>
                         <td><input type="text" class="form-control"></td>
                     </tr>
                     <tr>
                         <td>DR'S NAME</td>
                         <td><input type="text" class="form-control"></td>
                     </tr>
                     <tr>
                         <td></td>
                         <td><button class="btn btn-success"> SUBMIT</button></td>
                         <td></td>
                     </tr>
                 </table>
             </div>
             <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
            
         </div>
     </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>