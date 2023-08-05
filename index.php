<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bs-5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">TANVIRSWEB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PRODUCT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CUREENT SALES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">MEMBER+</a>
            </li>                        
        </ul>   
        <?php 
        session_start();
        if( isset($_SESSION["userid"]) ){ ?>  
            <a class="ms-auto btn btn-outline-light me-1" href="#"> <?php echo $_SESSION["useruid"]; ?></a>                    
            <a class="btn btn-primary" href="includes/logout.inc.php">LOGOUT</a>
        <?php }else{ ?>
            <a class="ms-auto btn btn-outline-light me-1" href="#signup">SIGNUP</a>                    
            <a class="btn btn-primary" href="#login">LOGIN</a>
        <?php } ?>
        </div>
    </div>
    </nav>
    </header>

    <section class=" bgimg text-light p-5 p-lg-1 pt-lg-5 text-center text-sm-start">
        <!-- text-sm-start: Starting at Small Break point align text at Left. -->
        <div class="container row p-5">           
            <div class="col-md-7">
                <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/BaEm2Qv14oU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="border-start border-5 border-primary my-4 p-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur nulla nesciunt, rerum consequuntur accusantium nisi labore placeat corporis praesentium harum!
                </div>
            </div>
            <div class="col-md-5 ps-3">
                <div class="display-1 ms-3">
                    We Make Professional Gear
                </div>
                <button class="btn btn-primary ms-3">FIND OUR GEAR HERE</button>
            </div>                    
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div id="signup" class="shadow col-md-6 border-start border-5 border-primary p-4 my-4 row">
            <div class="col-md-8">
                <h1 class="text-center">SIGNUP</h1>
                <div class="lead">Don't have any account? SignUp here</div>
                <form action="includes/signup.inc.php" method="post">
                    <div class="my-2 form-group">                        
                        <input type="text" class="form-control"name="uid" placeholder="User Name" id="user_name" required>                        
                    </div>                    
                    <div class="my-2 form-group">                        
                        <input type="password" class="form-control"name="pwd" placeholder="Password" id="pass" required>                        
                    </div>
                    <div class="my-2 form-group">                        
                        <input type="password" class="form-control"name="pwdrepeat" placeholder="Confirm Password" id="repass" required>                        
                    </div>
                    <div class="my-2 form-group">                        
                        <input type="email" class="form-control"name="email" placeholder="E-mail" id="email" required>                        
                    </div>
                    <input type="submit" class="btn btn-primary" value="SIGNIN" name="submit">
                </form>
            </div>
            </div>
            <div id="login" class="shadow col-md-6 bg-dark rounded text-white row my-4 p-4">
            <div class="col-md-8 mx-auto">
                <h1 class="text-center">LOGIN</h1>
                <div class="lead">Already have an account? LogIn here</div>
                <form action="includes/login.inc.php" method="post">
                    <div class="my-2 form-group">                        
                        <input type="text" class="form-control"name="uid" placeholder="User Name or Email" id="user_name" required>                        
                    </div>                   
                    <div class="my-2 form-group">                        
                        <input type="passowrd" class="form-control"name="pwd" placeholder="Password" id="pass" required>                        
                    </div>
                    
                    <input type="submit" class="btn btn-primary d-flex mx-auto" value="LOGIN" name="submit">
                </form>
            </div>
        </div>        
    </section>
    
</body>
</html>