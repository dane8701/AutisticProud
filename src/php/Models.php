<?php
class Tache {
  // Properties
  public $Titre;
  public $HeureDebut;
  public $HeureFin;
  public $DateTache;
  public $Image;
  
  // Methods
  function set_Titre($Titre) {
    $this->Titre = $Titre;
  }
  function get_Titre() {
    return $this->Titre;
  }

  function set_HeureDebut($HeureDebut) {
    $this->HeureDebut = $HeureDebut;
  }
  function get_HeureDebut() {
    return $this->HeureDebut;
  }

  function set_HeureFin($HeureFin) {
    $this->HeureFin = $HeureFin;
  }
  function get_HeureFin() {
    return $this->HeureFin;
  }

  function set_DateTache($DateTache) {
    $this->DateTache = $DateTache;
  }
  function get_DateTache() {
    return $this->DateTache;
  }

  function set_Image($Image) {
    $this->Image = $Image;
  }
  function get_Image() {
    return $this->Image;
  }
}
?>