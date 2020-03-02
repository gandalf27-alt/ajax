<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script  src="./assets/js/ajax.js"></script>
    <title>Ajax</title>
    
</head>
<body>
    <script>
       let xhrTest = ajax();
       let test = function() {
        xhrTest.onreadystatechange = function(){
            if (xhrTest.readyState == 4 && xhrTest.status == 200) {

                alert(xhrTest.responseText);
            }

        };
        xhrTest.open("POST", "test.php", true);
        xhrTest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhrTest.send();
       };
</script>




<div> 
       <form action="" method="POST">
       <div> 
       <label for="nom">Nom</label>
       <input type="text" id="nom" name="nom"><br>
       </div>

       <div> 
       <label for="prenom">Prenom</label>
       <input type="text"id="prenom" name="prenom" ><br>
       </div>

       <div> </div>
       <label for="email">Email</label>
       <input type="email" id="email" name="email" ><br>
       </div>   
           
            <div>

            <input type="reset" value="Effacer" />
            <input type="submit" value="submitted" onsubmit="test()" />
        </div>   
       </div>      
       
       
       
       
       </form>

    

    <p onclick="test()"> </P>

</body>
</html>





