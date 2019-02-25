<?php

namespace App\Resources;

class BaseResource 
{
    protected $name;
    protected $nameUpper;
    protected $tableName;

    /**
     * Create a new instance.
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
     * Create controller
     * @param none
     * @return void
     */
    public function createController()
    {
        $controllerName = $this->nameUpper.'Controller.php';
        $resourceName = 'ControllerResource.php';

        $controllerPath = base_path("app/Http/Controllers/".$controllerName);
        $resourceOld = base_path("app/Resources/".$resourceName);
        $resourceNew = base_path("app/Resources/".$controllerName);

        // Create a copy of controller template
        if (!copy($resourceOld, $resourceNew)) {
            echo "Failed to copy $resourceOld...\n";
        }

        // Move the copied controller template to Controllers directory
        rename($resourceNew, $controllerPath);

        // Get the content inside the copied controller template and replace variables
        $str = file_get_contents($controllerPath);
        $str = str_replace('$nameUpper', $this->nameUpper, $str);
        $str = str_replace('$nameLower', $this->name, $str);

        // Put the new content back in the file.
        file_put_contents($controllerPath, $str);
    }

    /**
     * Create model
     * @param none
     * @return void
     */
    public function createModel()
    {
        $modelName = $this->nameUpper.'.php';
        $resourceName = 'ModelResource.php';

        $modelPath = base_path("app/Models/".$modelName);
        $resourceOld = base_path("app/Resources/".$resourceName);
        $resourceNew = base_path("app/Resources/".$modelName);

        // Create a copy of model template
        if (!copy($resourceOld, $resourceNew)) {
            echo "Failed to copy $resourceOld...\n";
        }

        // Move the copied model template to Models directory
        rename($resourceNew, $modelPath);

        // Get the content inside the copied model template and replace variables
        $str = file_get_contents($modelPath);
        $str = str_replace('$nameUpper', $this->nameUpper, $str);
        $str = str_replace('$tableName', $this->tableName, $str);

        // Put the new content back in the file.
        file_put_contents($modelPath, $str);
    }

    /**
     * Create interface
     * @param none
     * @return void
     */
    public function createInterface()
    {
        $interfaceName = $this->nameUpper.'Interface.php';
        $resourceName = 'InterfaceResource.php';

        $interfacePath = base_path("app/Repositories/Contracts/".$interfaceName);
        $resourceOld = base_path("app/Resources/".$resourceName);
        $resourceNew = base_path("app/Resources/".$interfaceName);

        // Create a copy of interface template
        if (!copy($resourceOld, $resourceNew)) {
            echo "Failed to copy $resourceOld...\n";
        }

        // Move the copied interface template to Repositories/Contracts directory
        rename($resourceNew, $interfacePath);

        // Get the content inside the copied interface template and replace variables
        $str = file_get_contents($interfacePath);
        $str = str_replace('$nameUpper', $this->nameUpper, $str);

        // Put the new content back in the file.
        file_put_contents($interfacePath, $str);
    }

    /**
     * Create repository
     * @param none
     * @return void
     */
    public function createRepository()
    {
        $repositoryName = $this->nameUpper.'Repository.php';
        $resourceName = 'RepositoryResource.php';

        $repositoryPath = base_path("app/Repositories/Eloquents/".$repositoryName);
        $resourceOld = base_path("app/Resources/".$resourceName);
        $resourceNew = base_path("app/Resources/".$repositoryName);

        // Create a copy of repository template
        if (!copy($resourceOld, $resourceNew)) {
            echo "Failed to copy $resourceOld...\n";
        }

        // Move the copied repository template to Repositories/Eloquents directory
        rename($resourceNew, $repositoryPath);

        // Get the content inside the copied repository template and replace variables
        $str = file_get_contents($repositoryPath);
        $str = str_replace('$nameUpper', $this->nameUpper, $str);

        // Put the new content back in the file.
        file_put_contents($repositoryPath, $str);
    }

    /**
     * Create transformer
     * @param none
     * @return void
     */
    public function createTransformer()
    {
        $transformerName = $this->nameUpper.'Transformer.php';
        $resourceName = 'TransformerResource.php';

        $transformerPath = base_path("app/Transformers/".$transformerName);
        $resourceOld = base_path("app/Resources/".$resourceName);
        $resourceNew = base_path("app/Resources/".$transformerName);

        // Create a copy of transformer template
        if (!copy($resourceOld, $resourceNew)) {
            echo "Failed to copy $resourceOld...\n";
        }

        // Move the copied transformer template to Repositories/Eloquents directory
        rename($resourceNew, $transformerPath);

        // Get the content inside the copied transformer template and replace variables
        $str = file_get_contents($transformerPath);
        $str = str_replace('$nameUpper', $this->nameUpper, $str);
        $str = str_replace('$nameLower', $this->name, $str);

        // Put the new content back in the file.
        file_put_contents($transformerPath, $str);
    }

}
?>