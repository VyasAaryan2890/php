<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.header{
    background-color: rgb(212, 217, 218);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 20px;
    width: 100%;
    box-sizing: border-box;
    
}

ul{
    display: flex;
    list-style: none;
   
    padding: 0px 0px;
    align-items: center;
    flex: 1;
    justify-content: flex-end;
    
}
ul li{
   
    padding: 0px 10px;
}
ul li a{
    text-decoration: none;
    color: black;
    font-size: 20px;
}
ul li button{
    font-size: 15px;
    padding: 5px 15px;
    background-color: black;
    color: #fff;
    cursor: pointer;
    border-radius: 20px;
    border: 1px solid black;
    transition: 1s;
}
ul li button:hover{
    background-color: #fff;
    color: black;
    border: 1px solid #fff;
}
.hero{
    width: 100%;
    min-height: 75vh;

}
.main{
    
    width: 100%;
    max-width: 400px;
    margin: 75px auto;
    align-items: center;
    padding: 50px;
    text-align: center;
    box-sizing: border-box;
    border-radius: 10px;
    background-color: rgb(212, 217, 218);
   
    display: none;
}
.main h1{
    margin-bottom: 15px;
    color: #000000;
}
.in{
    width: 80%;
    padding: 20px 20px;
    margin-bottom: 20px;
    background-color: #fff;
    border: none;
    outline: none;
    border-radius: 10px;
	font-size:20px;
}
.btn{
    padding: 10px 60px;
	font-size:18px;
    background-color:black;
    border: none;
    outline: none;
    border-radius: 20px;
    cursor: pointer;
    transition: 1s;
    color: #fff;
    margin-top: 15px;
}
.main p{
    margin-top: 20px;
}
@media(max-width:500px){
    ul li a{
        display: none;
    }
    #btn{
        padding: 10px 20px;
    }
}


</style>
</head>
<body>
    <div class="header">
        <h1>Aarya Craft</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><button id="btn">Login</button></li>
            </ul>
    </div>
    <div class="hero">
        <div class="main" id="mainBox">
            <form action="save.php" method="POST">
                <h1>User Login </h1>
                    <input type="email" name="email" placeholder="Email" class="in" id="email"onkeyup="ok()" required><br>
                    <input type="password" name="password" placeholder="Password" class="in" id="pass" onkeyup="validate()" required><br>
                    <span>Forggot password?</span><br>
                    <input type="submit" name="btn" value="Submit" class="btn">
                    <p>If you don't have an account <a href="#">Click here?</a></p>
            </form>
        </div>
    </div>

    <script>
        var btn = document.getElementById("btn");
        var mainBox = document.getElementById("mainBox");
		var email = document.getElementById("email");
		var pass = document.getElementById("pass");
        var btn2 = document.getElementById("btn2");
    
            btn.addEventListener("click",()=>{
                mainBox.style.display ="block";
        
            });
			
			function ok(){
			if(!email.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
			email.style.border= "2px solid red";
			}
			else
            {
                email.style.border="2px solid green";
            }
			}
			
			function validate(){

            if(pass.value.length < 4){
                pass.style.border="2px solid #ff5925";
            }
            else if(pass.value.length >=4 && pass.value.length <8){
               
                pass.style.borderColor="yellow";
                
            }
            else if(pass.value.length >=8){
                
                pass.style.borderColor="green";
              
            }
        }

        
    </script>
</body>
</html>