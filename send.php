<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="server.php" method="post">
         <p>用户名
             <input type="text" name="username" id="username">
             <span id="tip"></span>
         </p>
         
         <p>密码<input type="password" name="password"></p>
         
         <input type="submit" value="确定">

         <p>
             <a href="register.php?status=student">老师注册</a>
             <a href="register.php?status=teacher">学生注册</a>
         </p>
     </form>
     
     <script>
            var uname = document.getElementById('username');
            var ajax = new XMLHttpRequest();
            uname.onblur = function(){
                ajax.open('get','checkName.php?username='+this.value);
                ajax.send();
                ajax.onreadystatechange = function () {
                    if(ajax.readyState == 4 && ajax.status == 200){
                        document.getElementById('tip').innerText = ajax.responseText;
                    }
                }
            }




     </script>
</body>
</html>