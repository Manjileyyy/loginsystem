




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/191e20cca4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap">
</head>
<body>
  
    <div class="container email-container ">
        <form  class="form-horizontal" 
                action="recoverpw.php"
                method="post" 
                id="validateForm">
            

            <fieldset>
                
                <div class="form-group">
                    <label for="email_address" class="col-md-12 control-label">
                     Email
                    </label>
                    <div class="col-md-12">
                    <input type="text" 
                            id="email_address" 
                            class="form-control "
                            name="email" 
                            placeholder="Enter your Email"
                            required>
                            <span class="email-error"></span>
                 
               
            
                <div class="form-group">
                <div class="col-md-12 text-center">
                                <input type="submit" value="Recover" name="recover">
                            </div>

                </div>
                
            </fieldset>
        </form>
    </div>
</body>
</html>


