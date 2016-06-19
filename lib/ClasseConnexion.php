<?php
require "../vendor/autoload.php";


class ClasseConnexion {
// ===========================================================================
//            DECLARATION DES ATTRIBUTS DE LA CONNEXION
// ===========================================================================
/**
 * [$host] -> "localhost" <- Je bosse en local
 * @var [string]
 * [$port] -> 3306 <- C'est le port par défaut de MySql
 * @var [int]
 * [$dbname] -> "cinemal9" <- C'est le nom de la base de donnée
 * @var [string]
 * [$charset] -> "utf-8" <- C'est le type d'encodage
 * @var [string]
 * [$login] -> "root" <- Mot de passe par défaut
 * @var [string]
 * [$password] -> "" <- Password vide par défaut. A la 3wa c'est : "troiswa"
 * @var [string]
 */
  protected $attributHost;
  protected $attributPort = 3306; // Port par défaut de MySql
  protected $attributDbname;
  protected $attributCharset = "utf-8"; // Par défaut l'encodage sera UTF-8
  protected $attributLogin;
  protected $attributPassword;

// ===========================================================================
//            DECLARATION DES GETTEUR DE MES ATTRIBUTS
// ===========================================================================

/**
 * Get the value of [$host] -> "localhost" <- Je bosse en local
 * @return [string]
 */
  public function getAttributHost() {
    return $this->attributHost;
  }
/**
 * Get the value of Port par défaut de MySql
 * @return [int]
 */
  public function getAttributPort() {
    return $this->attributPort;
  }
/**
 * Get the value of Dbname
 * @return [string]
 */
  public function getAttributDbname() {
    return $this->attributDbname;
  }
/**
 * Get the value of Charset
 * @return [string]
 */
  public function getAttributCharset() {
    return $this->attributCharset;
  }
/**
 * Get the value of Login
 * @return [string]
 */
  public function getAttributLogin() {
    return $this->attributLogin;
  }
/**
 * Get the value of Password
 * @return [string]
 */
  public function getAttributPassword() {
    return $this->attributPassword;
  }

  // ===========================================================================
  //                  CONSTRUCTEUR DE MA CONNEXION
  // ===========================================================================

  /**
   * Constructeur de ma classe
   * C'est une méthode qui me permet d'initialiser mon objet
   * La méthode peut retourner un objet
   */
  public function __construct( $attributHost = "", $attributPort = 3306, $attributDbname = "",
  $attributCharset = "", $attributLogin = "root", $attributPassword ) {

    $this->$attributHost = "localhost";
    $this->$attributPort = 3306;
    $this->$attributDbname = "cinemal9";
    $this->$attributCharset = "utf-8";
    $this->$attributLogin = "root";
    $this->$attributPassword = "";

  }

// ===========================================================================
//            DECLARATION DES SETTEUR DE MES ATTRIBUTS
// ===========================================================================

/**
 * Set the value of [$attributHost] -> "localhost" <- Je bosse en local
 * @param [string] host
 * @return self
 */
  public function setAttributHost($attributHost) {
    $this->attributHost = $attributHost;

    return $this;
  }
/**
 * Set the value of $attributPort
 * @param mixed port
 * @return self
 */
  public function setAttributPort($attributPort) {
    $this->attributPort = $attributPort;

    return $this;
  }
/**
 * Set the value of $attributDbname
 * @param mixed dbname
 * @return self
 */
  public function setAttributDbname($attributDbname) {
    $this->attributDbname = $attributDbname;

    return $this;
  }
/**
 * Via ce setteur nous pouvons éditer le $attributCharset
 * @param mixed $attributCharset
 * @return self
 */
  public function setAttributCharset($attributCharset) {
    $this->attributCharset = $attributCharset;

    return $this;
  }
/**
 * Via ce setteur nous pouvons éditer le Login
 * @param mixed login
 * @return self
 */
  public function setAttributLogin($attributLogin) {
    $this->attributLogin = $attributLogin;

    return $this;
  }
/**
 * Via ce setteur nous pouvons éditer le password
 * @param mixed password
 * @return self
 */
  public function setAttributPassword($attributPassword) {
    $this->attributPassword = $attributPassword;

    return $this;
  }

  // ===========================================================================
  //            METHODES ETABLIS POUR LA CONNEXION
  // ===========================================================================

  /**
  * [methodeConnect] -> Permet une connexion à la base de données
  * @return [DBO Objet se connecter à la bdd avec PDO]
  */
  public function methodeConnect(){
    $newObjetConnexion = new \PDO(
      "mysql:host={$this->attributHost};
       port={$this->attributPort};
       dbname={$this->attributDbname};
       charset={$this->attributCharset}",
       $this->attributLogin,
       $this->attributPassword
    );
    return $newObjetConnexion;
  }




} // Fin de la classe Connexion

?>
