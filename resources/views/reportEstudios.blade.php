<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title> Reporte </title>
    </head>

    <body>
        <style>
            *{
                margin: 0 auto;
            }
            
        </style>
        <div class="container mt-4">
            <div class="row">
                <div class="invoice-flex-contents">
                    <div class="invoice-logo">
                        <table>
                            <thead>
                                <tr>                                 
                                    <th scope="col" style="width: 30%;"><center><img style="width: 100%;" src="{{ public_path('img/Logoinadware0001.png') }}" alt="" ></center></th>
                                    <th scope="col" style="width: 1%;"></th>
                                    <th scope="col" style="width: 1%;"></th>
                                    <th style="width: 60%;"><h5 style="display:inline;font-family:Arial, Helvetica, sans-serif; font-weight:normal;"><b>Empresa Pruebas, S.A de C.V</b><p style="display:inline; color:white;">_______</p></h5>
                                        <h6 style="display:inline; font-family:Arial, Helvetica, sans-serif;font-weight:normal;"><b>RFC:HYNLCVA223</b><p style="display:inline; color:white;">_______________________________</p></h6>
                                        <p style="font-size: 12px; display:inline;font-family:Arial, Helvetica, sans-serif;font-weight:normal;">Calle 7 No. 262 Depto 303 bis x 38 Plaza Sol Campestre Tel: 999999/Cel.999999</p>
                                        <h6 style="font-family:Arial, Helvetica, sans-serif;font-weight:normal;">Suc. Matriz Mérida, Yucatán, México</h6>
                                    </th>
                                    <th scope="col" style="width: 10%;">
                                        <img style="margin-top: -60px;width: 60%;" src="{{ public_path('img/Diagrama_Codigo_de_Barras_GS1_Mexico_750-1-e1629484192646.png') }}" alt="" >
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
    
               
                                       <h5 style="font-weight:normal;font-family:Arial, Helvetica, sans-serif;" class="float-center d-none d-sm-block">
                                        <b>LABORATORIO DE ANÁLISIS CLÍNICOS</b>
                                       </h5>
    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                       
                    </div>
                    
                </div>
                
            </div>
            <br>


    
        </div>
        <br>

        <table id="pacientes" class="table table-striped table-bordered" style="width: 90%;">
            <thead class="thead">
                <tr> 
                    
                    <th scope="col">Nombre del estudio</th>
                    <th scope="col">Tomas</th>
                    <th scope="col">Frecuencia</th>
                    <th scope="col">Tiempo de proceso</th>
                    <th scope="col">Tipo de muestra</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($estudios as $estudio)
               
                <tr>
                    
                    <td style="width: 20%;">{{ $estudio->Nombre }} </td>
                    <td style="width: 20%;">{{ $estudio->Tomas }}</td>
                    <td style="width: 20%;">{{ $estudio->Frecuencia }}</td>
                    <td style="width: 20%;">{{ $estudio->TiempoProceso }}</td>
                    <td style="width: 20%;">{{ $estudio->TipoMuestra }}</td>
                </tr>
                @endforeach
            </tbody>
        
        </table>
        <br>
        <br>
        <br>
        <footer>
           
           <br>
           <center>
            <div>
                Versión a.0.0.0.20210310
            </div>
            <strong>©2022 <a href="https://www.inadware.com.mx/">Inadware de México, S. de R.L.</a></strong></center>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>