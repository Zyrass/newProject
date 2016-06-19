<?php
require "../vendor/autoload.php";


class Connexion {
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
  protected $host;
  protected $port;
  protected $dbname;
  protected $charset = "utf-8"; // Par défaut l'encodage sera UTF-8
  protected $login;
  protected $password;

// ===========================================================================
//            DECLARATION DES GETTEUR DE MES ATTRIBUTS
// ===========================================================================

/**
 * Get the value of [$host] -> "localhost" <- Je bosse en local
 * @return [string]
 */
  public function getHost() {
    return $this->host;
  }
/**
 * Get the value of Port par défaut de MySql
 * @return [int]
 */
  public function getPort() {
    return $this->port;
  }
/**
 * Get the value of Dbname
 * @return [string]
 */
  public function getDbname() {
    return $this->dbname;
  }
/**
 * Get the value of Charset
 * @return [string]
 */
  public function getCharset() {
    return $this->charset;
  }
/**
 * Get the value of Login
 * @return [string]
 */
  public function getLogin() {
    return $this->login;
  }
/**
 * Get the value of Password
 * @return [string]
 */
  public function getPassword() {
    return $this->password;
  }

// ===========================================================================
//            DECLARATION DES SETTEUR DE MES ATTRIBUTS
// ===========================================================================

/**
 * Set the value of [$host] -> "localhost" <- Je bosse en local
 * @param [string] host
 * @return self
 */
  public function setHost($host) {
    $this->host = $host;

    return $this;
  }
/**
 * Set the value of Port
 * @param mixed port
 * @return self
 */
  public function setPort($port) {
    $this->port = $port;

    return $this;
  }
/**
 * Set the value of Dbname
 * @param mixed dbname
 * @return self
 */
  public function setDbname($dbname) {
    $this->dbname = $dbname;

    return $this;
  }
/**
 * Via ce setteur nous pouvons éditer le Charset
 * @param mixed charset
 * @return self
 */
  public function setCharset($charset) {
    $this->charset = $charset;

    return $this;
  }
/**
 * Via ce setteur nous pouvons éditer le Login
 * @param mixed login
 * @return self
 */
  public function setLogin($login) {
    $this->login = $login;

    return $this;
  }
/**
 * Via ce setteur nous pouvons éditer le password
 * @param mixed password
 * @return self
 */
  public function setPassword($password) {
    $this->password = $password;

    return $this;
  }

} // Fin de la classe Connexion

?>
