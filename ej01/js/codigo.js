<html>

<head>
 
 <body>

    <table>

        <tr>
            <td>Usuario</td><td><input id="usuario" type="text" value=""></td>
        </tr>
        <tr>
            <td>Clave</td><td><input id="clave" type="password"value=""></td>
        </tr>
        <tr>
            <td><input  onclick="verificar()" type="button" value="verificar"></td>
        </tr>
    </table>

    <script>
        function verificar(){
            var u = document.getElementById("usuario").value;
            var p = document.getElementById("clave").value;
                 if(u=="queso"&& p =="123"){
                     alert("bienvenido")
        } else{
            alert("error")
        }
    }
    </script>
 </body>
</head>
</html>