<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body 
{
font-family: Arial, Helvetica, sans-serif;
}
* 
{
  box-sizing: border-box;
}
.container 
{
  position: relative;
  border-radius: 10px;
  background-color: #b3d1ff;
  padding: 20px 0 30px 0;
} 
input,a,
.btn 
{
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
.btn:hover 
{
  opacity: 1;
}
input[type=submit] 
{
  background-color: #66a3ff;
  color: white;
  cursor: pointer;
}
input[type=submit]:hover 
{
  background-color:#1a75ff ;
}
.col 
{
  float: center;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
.row:after 
{
  content: "";
  display: table;
  clear: both;
}
.hide-md-lg 
{
  display: none;
}
.hide-md-lg 
{
  display: block;
  text-align: center;
}
</style>
</head>
<body>
<div class="container">
  <form action="loginlink.php" method="POST">
    <div class="row">
      <h1 style="text-align:center">login</h1>
      <div class="col">
        <input type="text" name="username" placeholder="username" >
        <input type="password" name="password" placeholder="Password" >
        <input type="submit" name="submit" value="submit" placeholder="submit">
        <p>Don't have an account? <a href="signup.php">Sign up now</a></p>
      </div>
    </div>
  </form>
</div>
</body>
</html>
