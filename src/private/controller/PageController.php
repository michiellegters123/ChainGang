<?php


abstract class PageController extends Controller
{
    private $title;
    private $page;
    protected $dataBase;
    private $otherLoad = null;

    public function __construct($page, $title, $dataBase)
    {
        $this->title = $title;
        $this->page = $page;
        $this->dataBase = $dataBase;
    }

    protected function setPage($page)
    {
        $this->page = $page;
    }

    protected function loadOtherPage(string $url)
    {
        $this->otherLoad = $url;
    }

    abstract protected function getData() : array;
    public function createView()
    {
        $otherData = $this->getData();

        $data = array
        (
            "title" => $this->title,
        );

        if(isset($_SESSION["userid"]))
        {
            $data["user"] = User::getUserByID($this->dataBase, $_SESSION["userid"]);
        }

        if($this->otherLoad == null)
        {
            $this->loadView($this->page, array_merge($data, $otherData));
        }
        else
        {
            //redirect
            header('Location: ' . $this->otherLoad, true, true ? 301 : 302);
            exit();
        }
    }

}