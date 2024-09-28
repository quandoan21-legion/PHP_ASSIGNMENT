<?php
class BaseController
{
    const VIEW_PATH = "app/views/";
    const MODEL_PATH = "app/models/";
    /**
     *Create a function that get the name of the model and the $conn to connect to the n0;,.'
     */
    public function initModel($modelName = "HomeModel", $conn)
    {
        $modelFile = self::MODEL_PATH . $modelName . ".php";
        if (file_exists($modelFile)) {
            require_once $modelFile;
            if (class_exists($modelName)) {
                return new $modelName($conn);
            }
        }
        return null;
    }

    public function view($pathView, $input = [])
    {
        return require_once self::VIEW_PATH . $pathView . ".php";
    }
}
