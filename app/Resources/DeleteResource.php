<?php

namespace App\Resources;

class DeleteResource 
{
    protected $name;
    protected $nameUpper;
    protected $tableName;

    /**
     * Delete a new instance.
     *
     * @param 
     * @return void
     */
    public function __construct($name = null)
    {
        $this->name = $name;
        $this->nameUpper = ucfirst($name);
        $this->tableName = strtolower($name).'s';
    }

    /**
     * Delete controller
     * @param none
     * @return void
     */
    public function deleteController()
    {
        $controllerName = $this->nameUpper.'Controller.php';

        $controllerPath = base_path("app/Http/Controllers/".$controllerName);

        unlink($controllerPath);
    }

    /**
     * Delete model
     * @param none
     * @return void
     */
    public function deleteModel()
    {
        $modelName = $this->nameUpper.'.php';

        $modelPath = base_path("app/Models/".$modelName);

        unlink($modelPath);
    }

    /**
     * Delete interface
     * @param none
     * @return void
     */
    public function deleteInterface()
    {
        $interfaceName = $this->nameUpper.'Interface.php';

        $interfacePath = base_path("app/Repositories/Contracts/".$interfaceName);

        unlink($interfacePath);
    }

    /**
     * Delete repository
     * @param none
     * @return void
     */
    public function deleteRepository()
    {
        $repositoryName = $this->nameUpper.'Repository.php';

        $repositoryPath = base_path("app/Repositories/Eloquents/".$repositoryName);

        unlink($repositoryPath);
    }

    /**
     * Delete transformer
     * @param none
     * @return void
     */
    public function deleteTransformer()
    {
        $transformerName = $this->nameUpper.'Transformer.php';

        $transformerPath = base_path("app/Transformers/".$transformerName);

        unlink($transformerPath);
    }

}
?>