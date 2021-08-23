<?php
/**
 * Description of Conexion
 *
 * @author andres
 */
class Conexion {

    private static $instancia;
    private $dbh;
 
    
    private function __construct() {
    try {
          $this->dbh = new PDO('mysql:host=localhost;dbname=ticscome_contratasoft', 'ticscome_ctratos', 'contratasoft533878');
//          $this->dbh = new PDO('mysql:host=localhost;dbname=contratasoft_db', 'root', 'sena');
          $this->dbh->exec("SET CHARACTER SET utf8");
          $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }    
    }

    public static function singleton() {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }
    
    public function query($consulta){
        return $this->dbh->query($consulta);
    }
    
    public function prepare($consulta){
        return $this->dbh->prepare($consulta);
    }

    // Evita que el objeto se pueda clonar
    public function __clone()
    {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);

    }
    
    public function commit()
    {
        return $this->dbh->commit();
    }
    
    public function beginTransaction(){
        return $this->dbh->beginTransaction();
    }
    
    public function rollBack(){
        return $this->dbh->rollBack();
    }
    
    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }
}

?>