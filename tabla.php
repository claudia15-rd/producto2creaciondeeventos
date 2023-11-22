<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/table.css">
    <title>Tablero de administrador</title>
</head>
<body>


    <input type="checkbox" id="checkbox">

    <header class="header">

      
    <h2 class="name">Crea eventos
    <label for="checkbox">
    <i id="navbar" class="fa fa-bars" aria-hidden="true"></i>   

</label>
</h2>
</header>



<div class="body">
    <nav class="si-bar">
     <div class="user">
        <img src="./person.jpg" alt="" class="person">
   </div>

   <ul>
    <li>
        <a href="#">
            <i class="fa fa-cog"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li>
        <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Configuraciòn</span>
        </a>
    </li>

    <li>
        <a href="#">
            <i class="fa fa-table"></i>
            <span>Tablas</span>
        </a>
    </li>

    <li>
        <a href="#">
            <i class="fa fa-power-off"></i>
            <span>Salir</span>
        </a>
    </li>

    <li>
        <a href="#">
            <i class="fa fa-user"></i>
            <span>Perfil</span>
        </a>
    </li>
   </ul>
</div>
    </nav>
</div>

    <div class="container-tabla">
     
      <a> <button type="button">Crear un acto<button></a>

    </div>
    <table clas="tabla">
       <thead>
           <tr>


                 <th>ID</th>
                 <th>Fecha del acto</th>
                 <th>Tipo de acto</th>


                 <th>Ponentes del acto</th>
                 <td>
                 <a class="btn-2" hre="">Añadir</a>
                 <a class="btn-2" hre="">Modificar</a>
                 <a class="btn-2" hre="">Eliminar</a>
                </td>

                 <th>Descripciòn del acto</th>
           </tr>

       </thead>

       <tbody>
             <tr>

             <td>10</td>
             <td>20/12/2023</td>
             <td>Conferencia</td>
             <td>jose garcia</td>
             <td>conferencia sobre el cambio climatico</td>

             <td>
                 <a class="btn-2" hre="">Añadir</a>
             </td>
             <td>10</td>


             </tr>
       </tbody>
              
    </table>


</div>
    

   
    

    
</body>
</html>