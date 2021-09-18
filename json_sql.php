<?php
    $json = file_get_contents('info.json');
    //print_r($json);
    $data = json_decode($json, true);
    //print_r($data);

    //Creacion de la consulta para sql
    foreach ($data as $row) {
        $id = $row['Id'];
        $catName = $row['CatName'];
        $puesto = $row['Puesto'];
        $titulo = $row['Titulo'];
        $desc = $row['Descri'];
        $tipoEmpleo = $row['TipoEmpleo'];
        $moneda = $row['Moneda'];
        $sueldo = $row['Sueldo'];
        $sueldoTipo = $row['SueldoTipo'];
        $ubicacionEstado = $row['UbicacionEstado'];
        $ubicacionCiudad = $row['UbicacionCiudad'];
        $empresa = $row['Empresa'];

        $sql = "INSERT INTO listado ('id', 'cat_name', 'puesto', 'titulo', 'descri', 'tipo_empleo', 'moneda', 'sueldo', 'sueldo_tipo', 'ubicacion_estado', 'ubicacion_ciudad', 'empresa') 
        VALUES('$id', '$catName', '$puesto', '$titulo', '$desc', '$tipoEmpleo', '$moneda', '$sueldo', '$sueldoTipo', '$ubicacionEstado', '$ubicacionCiudad', '$empresa');";
        //echo($sql); imprimir los datos y pasarlos a mysql
    }