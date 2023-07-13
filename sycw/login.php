<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            div{
                 border: 5px outset red;
  background-color: lightblue;    
  text-align: center;
            }
            .li1{
                display:inline;
            }
            .myInput {
            color: grey;
}

            



        </style>
    </head>
    <body>
            <script>
     function clearText() {
            var input = document.getElementById('myInput');
            if (input.value === "Username") {
                input.value = '';
            }
        }
        
             function clearText() {
            var input = document.getElementById('myInput');
            if (input.value === "Username") {
                input.value = '';
            }
        }
        
    </script>
        <div>
<img src="companylogo.png">
<input type="text" id="myInput" value="Username" onfocus="clearText()">
<input type="password" id="myInput" value="Username" onfocus="clearText()">




        </div>
    </body>
</html>
