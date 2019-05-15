<?php
require_once config["CONTROLLER_FOLDER"] . "PageController.php";

class BestellingenController extends PageController
{
    public function __construct($db)
    {
        parent::__construct("profile/Bestellingen.phtml", "bestellingen", $db);
    }

    protected function getData(): array
    {
        return array();
    }
}
?>