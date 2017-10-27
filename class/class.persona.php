<?php

abstract class persona{
  protected $tipo;
  protected $edad;
  /*
  protected $nombre;
  protected $apellido;
  protected $fecha_nacimiento;
  protected $genero;
  protected $etnia;
  protected $direccion;
  protected $telefono;
  protected $movil;
  protected $email;
  */
  protected static function get_form(){
    $html = 
    '<form name="persona" action="" method="POST" OnSubmit="return valida(this)">
      <table align="center" border="0">
        <tr>
          <th colspan="4">EMPLEADOS Y CLIENTES</th>
        </tr>
        <tr>
          <td colspan="2">Tipo Persona</td>
          <td colspan="2">
            <select name="tipo" OnChange="bloquea(this);">
              <option value="0" selected>Seleccione...</option>
              <option value="emp">Empleado</option>
              <option value="cli">Cliente</option>
            </select>  
        </tr>
        <tr>
          <td colspan="2">Nombre</td>
          <td colspan="2"><input type="text" name="nom"></td>
        </tr>
        <tr>
          <td colspan="2">Apellido</td>
          <td colspan="2"><input type="text" name="ape"></td>
        </tr>
        <tr>
          <td colspan="2">Fecha Nacimiento (YYYY-mm-dd)</td>
          <td colspan="2"><input type="text" name="nac" size="10"></td>
        </tr>
        <tr>
          <td colspan="2">Genero</td>
          <td colspan="2">
            <select name="gen">
              <option value="0" selected>Seleccione...</option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>  
          </td>
        </tr>        
        <tr>
          <td colspan="2">Etnia</td>
          <td colspan="2">
            <select name="etn">
              <option value="0" selected>Seleccione...</option>
              <option value="Blanco">Blanco</option>
              <option value="Negro">Negro</option>
              <option value="Indio">Indio</option>
              <option value="Mestizo">Mestizo</option>              
              <option value="Amarillo">Amarillo</option>              
            </select>  
          </td>
        </tr>              
        <tr>
          <td colspan="2">Direccion</td>
          <td colspan="2"><input type="text" name="dir"></td>
        </tr>                
        <tr>
          <td colspan="2">Telefono</td>
          <td colspan="2"><input type="text" name="tel" size="8"></td>
        </tr>                
        <tr>
          <td colspan="2">Movil</td>
          <td colspan="2"><input type="text" name="mov" size="10"></td>
        </tr>                
        <tr>
          <td colspan="2">E -mail</td>
          <td colspan="2"><input type="text" name="ema"></td>
        </tr>                        
        <tr>
          <td colspan="4"><hr></td>
        </tr>                                        
        <tr>
          <td colspan="2">Para empleados</td>
          <td colspan="2">Para clientes</td>
        </tr>                        
        <tr>
          <td>ID empleado</td>
          <td><input type="text" name="ide" disabled></td>
          <td>ID cliente</td>
          <td><input type="text" name="idc" disabled></td>
        </tr>                                
        <tr>
          <td>Fecha Ingreso</td>
          <td><input type="text" name="fin" disabled></td>
          <td>Cliente desde</td>
          <td><input type="text" name="fcl" disabled></td>
        </tr>                                
        <tr>
          <td>Cargo</td>
          <td><input type="text" name="car" disabled></td>
          <td colspan="2"></td>
        </tr>                                        
        <tr>
          <td>Departamento</td>
          <td><input type="text" name="dep" disabled></td>
          <td colspan="2"></td>
        </tr>                                                
        <tr>
          <th colspan="4"><input type="submit" name="muestra" value="MOSTRAR"></th>
      </table>
    </form>';
    
    return $html;
  }
  
}


?>