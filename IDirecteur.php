<?php

require_once "Equipier.php";
require_once "Manager.php";

interface IDirecteur extends IManager {
    public function licencier(Equipier $equipier);
    public function organiserReunion();
}