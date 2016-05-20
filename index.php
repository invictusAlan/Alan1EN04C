<!Doctype html>
<html> 
<head><title>IDEXE.KZ</title>
<meta="utf-8"</meta>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link type="text/css" rel="stylesheet" href="idexe.css">
</head>
<body>
<div id="topbar">
  <div id="logo">
    <img src="logo.png"/>
  </div>
  <div id="menu">
    <ul class="menumain">
      <li class="menuhome"><a href="">HOME</a></li>
      <li class="menucol"><a href="#">COLLECTIONS</a></li>
      <li class="menufranch"><a href="#">FRANCHISING</a></li>
      <li class="menucontacts"><a href="">CONTACTS</a></li>
      <li class="menuabout"><a href="">ABOUT US</a></li>
    </ul>
  </div>
  <div id="iconsocial">
    <a href=""><img src="ico_facebook.png"/></a>
    <a href=""><img src="ico_twitter.png" /></a>
    <a href=""><img src="ico_vkontakte.jpeg" id="ico"/></a>
  </div>
  <div id="language">
    <div style="position:absolute;width:40px;height:20px"><a href="#">RU/</a></div>
    <div id="ENG" style="position:absolute;width:40px;height:20px"><a href="#">ENG</a></div>
    <div id="search"> 
     <form id="search_form">
       <div class="buttonform">Search</div>
       <input name="search" type="text" placeholder="Search" value>
     </form>
    </div>
<div id="photo">
    <div class="col-md-5">
        <div class = "col-md-12 alig-center"><p id = "sign"> SIGN IN</p></div>
        <div class = "col-md-12 alig-center">
        <form action = "sign_in.php" method="post">
          <div class = "form-group">
            <label class = "myfont"> Login </label>
            <input type = "login" class = "form-control" placeholder="LOGIN" name = "login"></input>
          </div>
          <div class = "form-group">
            <label class = "myfont"> Password </label>
            <input type = "password" class = "form-control" placeholder="PASSWORD" name = "password"></input>
          </div>
          <button type="submit" class="btn btn-default">SIGN IN</button>
        </form>
      </div>
   </div>

   <div class = "col-md-5 alig-cen myborder" id = "sign_div">
      <div class = "col-md-12 alig-center"><p id = "sign"> SIGN UP</p></div>
       <div class = "col-md-12 alig-center">
        <form action = "sign_up.php" method="post" onsubmit = "return onvalidateform()" name = "forma">
          <div class = "form-group">
            <label class = "myfont"> Name </label>
            <input type = "login" class = "form-control" placeholder="NAME" name = "name"></input>
          </div>
          <div class = "form-group">
            <label class = "myfont"> Surname </label>
            <input type = "text" class = "form-control" placeholder="SURNAME" name = "surname"></input>
          </div>
          <div class = "form-group">
            <label class = "myfont"> Login </label>
            <input type = "text" class = "form-control" placeholder="LOGIN" name = "login"></input>
          </div>
          <div class = "form-group">
            <label class = "myfont"> Password </label>
            <input type = "password" class = "form-control" placeholder="PASSWORD" name = "password"></input>
          </div>
          <button type="submit" class="btn btn-default">SIGN UP</button>
        </form>
      </div>
    </div>
</div>

<div class="clearFloat"></div>
<div id="footer">
  <div id="footer1">
    <ul>
     <li>Fast Link</li>
     <li><a href="#">About Us</a></li>
     <li><a href="#">Stores</a></li>
     <li><a href="#">Video</a></li>
     <li><a href="#">Contacts</a></li>
   </ul>
  </div>
  <div id="footer2">
    <p>Copyrights Reserved</p>
  </div>


<script type="text/javascript">
  
  function onvalidateform()
  {
    if(document.forma.name.value=="" || document.forma.surname.value=="" || document.forma.login.value=="" || document.forma.password.value=="")  
    {
      alert("Fill all blanks");
      return false;
    }
    return true;
  }
</script>
</body>
</html>
