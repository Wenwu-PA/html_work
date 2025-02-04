<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wenwu</title>
  <link rel="stylesheet" href="css copy.css">
</head>
<center><body>
    <h1 classe="p.red" class="text1">my work in html</h1>
    <form action="my_work_in_PHP.php" method="POST" >
        <input type="submit" name="value" class="text1" id="sonne1" value='akashi'>
    </form>
  <p><span><p><h2 id="change" class="text1">Midorima</h2></p></span></p>
  <img src="midorima.gif" \>
  <h3 class="text1"><p>ссылка на вход GitHub</p></h3>
 <p><a class="text1" href="https://github.com/login?return_to=https%3A%2F%2Fgithub.com%2Flogin%2Fdevice">github</a></p>
    <script>
      let button=document.getElementById("sonne1")
      let link=document.querySelector("link")
      let gif=document.querySelector("img")
      let changeText=document.getElementById("change")
      button.addEventListener(`mouseover`,change)
      function change(event){
        link.href="css_aomine.css"
        gif.src="aomine.gif"
        changeText.textContent="Aomine Daike"
      }
      button.addEventListener(`mouseout`,changeAomine)
      function changeAomine(event){
        link.href="css copy.css"
        gif.src="midorima.gif"
        changeText.textContent="Midorima"
      }
    </script>
</body></center>
