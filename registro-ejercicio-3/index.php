<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSIDENET</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="container">
            <form action="calcular.php" method="POST">
                <div class="card text-left" id="contenido">
                    <img src="./img/insidenet.jpg" alt="" class="rounded mx-auto d-block" style="width:50%;height:20%;">
                    <h2 class="text-center font-italic">Bienvenido a Insidenet</h2>
                    <h3 class="text-justify">Registre los nuevos tres empleados</h3>
                    
                    <div class="card-body">
                        <h4 class="card-title font-italic"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>Empleado 1</h4>
                        <br>
                        
                        <div class="form-group" >
                            <label for="first_name1">Nombre: </label>
                            <input type="text" required id="first_name1" type="text" name="first_names1"
                                class="validate col-12 form-control">
                        </div>
                        <div class="form-group" >
                            <label for="last_name1">Apellido:</label>
                            <input required id="last_name1" name="last_names1" type="text" class="validate col-12 form-control">
                        </div>
                        <div class="form-group" >
                            <label for="cedula1">Cédula:</label>
                            <input required id="cedula1" type="number" name="cedula1" class="validate col-12 form-control">
                        </div>
                        <div class="form-group">
                            <label for="lugar1">Lugar:</label>
                            <input required id="lugar1" type="text" name="lugar1" class="validate col-12 form-control">
                        </div>
                        <div class="form-group">
                            <label for="departamento1">Departamento</label>
                            <select class="form-control" required id="departamento1" name="departamento1">
                                <option value="0" selected>Elige el departamento</option>
                                <option value="ec">Economía</option>
                                <option value="adm">Administración</option>
                                <option value="con">Contaduría</option>
                                <option value="ge">Gerencia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sueldo1">Ingrese Sueldo asignado:</label>
                            <input required id="sueldo1" name="sueldo1" type="number" class="validate col-12 form-control">
                        </div>
                        <input type="reset" name="limpiar" value="Limpiar" class="btn btn-primary btn-block" />
                    </div>
                </div>
                <br>
                <div class="card text-left" id="contenido">
                    <div class="card-body">
                        <h4 class="card-title font-italic"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>Empleado 2</h4>
                        <br>
                        <div class="form-group">
                            <label for="first_name2">Nombre: </label>
                            <input type="text" required id="first_name2" type="text" name="first_names2"
                                class="validate col-12 form-control">
                        </div>
                        <div class="form-group">
                            <label for="last_name2">Apellido:</label>
                            <input required id="last_name2" name="last_names2" type="text" class="validate col-12 form-control">
                        </div>
                        <div class="form-group">
                            <label for="cedula2">Cédula:</label>
                            <input required id="cedula2" type="number" name="cedula2" class="validate col-12 form-control">
                        </div>
                        <div class="form-group">
                            <label for="lugar2">Lugar:</label>
                            <input required id="lugar2" type="text" name="lugar2" class="validate col-12 form-control">
                        </div>
                        <div class="form-group">
                            <label for="departamento2">Departamento</label>
                            <select class="form-control" required id="departamento2" name="departamento2">
                                <option value="0" selected>Elige el departamento</option>
                                <option value="ec">Economía</option>
                                <option value="adm">Administración</option>
                                <option value="con">Contaduría</option>
                                <option value="ge">Gerencia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sueldo2">Ingrese Sueldo asignado:</label>
                            <input required id="sueldo2" name="sueldo2" type="number" class="validate col-12 form-control">
                        </div>
                        <input type="reset" name="limpiar" value="Limpiar" class="btn btn-primary btn-block" />
                    </div>
                </div>
                 <br>
                <div class="card text-left" id="contenido">
                    <div class="card-body">
                        <h4 class="card-title font-italic"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>Empleado 3 </h4>
                        <br>
                        
                        <div class="form-group" id="longitudLado">
                            <label for="first_name3">Nombre: </label>
                            <input type="text" required id="first_name3" type="text" name="first_names3"
                                class="validate col-12 form-control">
                        </div>
                        <div class="form-group" id="apotema">
                            <label for="last_name3">Apellido:</label>
                            <input required id="last_name3" name="last_names3" type="text" class="validate col-12 form-control">
                        </div>
                        <div class="form-group" id="apotema">
                            <label for="cedula3">Cédula:</label>
                            <input required id="cedula3" type="number" name="cedula3" class="validate col-12 form-control">
                        </div>
                        <div class="form-group" id="apotema">
                            <label for="lugar3">Lugar:</label>
                            <input required id="lugar3" type="text" name="lugar3" class="validate col-12 form-control">
                        </div>
                        <div class="form-group">
                            <label for="departamento3">Departamento</label>
                            <select class="form-control" required id="departamento3" name="departamento3">
                            <option value="0" selected>Elige el departamento</option>
                                <option value="ec">Economía</option>
                                <option value="adm">Administración</option>
                                <option value="con">Contaduría</option>
                                <option value="ge">Gerencia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sueldo3">Ingrese Sueldo asignado:</label>
                            <input required id="sueldo3" name="sueldo3" type="number" class="validate col-12 form-control">
                        </div>
                        <input type="reset" name="limpiar" value="Limpiar" class="btn btn-primary btn-block" />
                        <button type="submit" class="btn btn-success btn-block" id="btnSiguiente"
                            value="calcular">Registrar</button>
                        
                            
                    </div>
                    

                </div>
                
            </form>
          

        </div>
    </div>
    
</div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="./js/index.js"></script>
    </body>

    </html>