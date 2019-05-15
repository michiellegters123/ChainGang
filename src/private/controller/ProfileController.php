<?php

require_once config["CONTROLLER_FOLDER"] . "PageController.php";

class ProfileController extends PageController
{
    public function __construct($db)
    {
        parent::__construct("Profile.phtml", "Profiel", $db);
    }

    protected function getData() : array
    {
        return array();
    }
}