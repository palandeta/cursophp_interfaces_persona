<?php  
class empleado extends persona implements Datos{
  private $nombre;
  private $apellido;
  private $fecha_nacimiento;
  private $genero;
  private $etnia;
  private $direccion;
  private $telefono;
  private $movil;
  private $email;
  private $idempleado;
  private $fingreso;
  private $cargo;
  private $departamento;
  private $empleadoDesde;
  
  function __construct($nombre, $apellido, $fecha_nacimiento, $genero, $etnia, $direccion, $telefono, $movil, $email, $idempleado, $fingreso, $cargo, $departamento){
    $this->tipo = "Empleado";
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->fecha_nacimiento = $fecha_nacimiento;    
    $this->genero = $genero;    
    $this->etnia = $etnia;    
    $this->direccion = $direccion;    
    $this->telefono = $telefono;    
    $this->movil = $movil;    
    $this->email = $email;    
    $this->idempleado = $idempleado;        
    $this->fingreso = $fingreso;
    $this->cargo = $cargo;
    $this->departamento = $departamento;    
   // echo $this->get_form();
  }
  
  public function CalculaEdad(){
     //$this->area = $this->l1 * $this->l1;
      $fn=date($this->fecha_nacimiento);
      $fa= date('Y-m-d');
      return  $fa - $fn;
  }

  public function CalculaTiempo(){
      $fn=date($this->fingreso);
      $fa= date('Y-m-d');
      $this->empleadoDesde =  $fa - $fn;
  }
    
  public function PresentaDatos(){
    $html = 
    '<table border="1" align="center">
      <tr>
        <th colspan="2">DATOS DEL '. $this->tipo .  '</th>
      </tr>
      <tr>
        <td>Nombres y apellidos: </td>
        <td>' . $this->nombre . $this->apellido .'</td>
      </tr>
      <tr>
        <td>Edad: </td>
        <td>' . $this->CalculaEdad() . ' años</td>
      </tr>
      <tr>
        <td>Género: </td>
        <td>' . $this->genero .'</td>
      </tr>     
      <tr>
        <td>Etnia: </td>
        <td>' . $this->etnia .'</td>
      </tr>     
      <tr>
        <td>Dirección: </td>
        <td>' . $this->direccion .'</td>
      </tr>     
      <tr>
        <td>Teléfono: </td>
        <td>' . $this->telefono .'</td>
      </tr>     
      <tr>
        <td>Móvil: </td>
        <td>' . $this->movil .'</td>
      </tr>     
      <tr>
        <td>Email: </td>
        <td>' . $this->email .'</td>
      </tr>     
      <tr>
        <td>ID empleado: </td>
        <td>' . $this->idempleado .'</td>
      </tr>     
      <tr>
        <td>Años de servicio: </td>
        <td>' . $this->empleadoDesde .' años</td>
      </tr>     
      <tr>
        <td>Cargo: </td>
        <td>' . $this->cargo .'</td>
      </tr>     
      <tr>
        <td>Departamento: </td>
        <td>' . $this->departamento .'</td>
      </tr>     

      <tr>
        <th colspan="2"><a href="index.php">REGRESAR</a></th>
      </tr>
    </table>';
      return $html;
  }  
  
  public static function show_get_form(){
    return parent::get_form();
  }
}

?>