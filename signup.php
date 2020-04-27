<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}
.container {
  position: relative;
  border-radius: 10px;
  background-color: #b3d1ff;
  padding: 20px 0 30px 0;
} 
input,a,p,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 20px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; 
}
input:hover,
.btn:hover {
  opacity: 1;
}
input[type=submit] {
  background-color: #66a3ff;
  color: white;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #1a75ff;
}
.col {
  float: center;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.hide-md-lg {
  display: none;
}


.hide-md-lg {
  display: block;
  text-align: center;
}

</style>
</head>

<body>
<div class="container">
    <form action="signuplink.php" method="POST">
        <div class="row"> 
         <h2 style="text-align:center">sign up</h2>
   
            <div class="col">
                <input type="text" name="first" placeholder="firstname">
    
                <input type="text" name="last" placeholder="lastname">
    
                <input type="text" name="email" placeholder="email">
    
                <input type="text" name="uid" placeholder="username">
    
                <input type="password" name="pwd" placeholder="password">
                <input type="submit" name="submit">
                
                <a href="login.php">already signed in?</a>
            </div> 
        </div> 
    </form>
</div> 

</body>
</html>