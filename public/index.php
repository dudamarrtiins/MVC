<?php 
// verifica se existe,se sim transforma o nome em minusculo, se não existe ele usa o 'UsuarioController'
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'UsuarioController';

$methodName = isset($_GET['action']) ? $_GET['action'] : 'index';
// esse action é um metodo de mendro da classe, por isso nunca começa com maiuscula

// passa o arquivo:
$contreollerFile = __DIR__ . "/../app/controllers/" . $controllerName . ".php";
/* dessa forma ele consegue chegar em qualquer arquivo pq puxa
 o nome la do $controllerName que é o nome que está na URL*/

if(file_exists($contreollerFile)){
    /*verifica se o arquivo existe, muito importante!
   se o arquivo existe ele funciona */
    require_once $contreollerFile;
    $controller = new $controllerName(); // instanciou a classe

    if(method_exists($controller, $methodName)){
        /* verifica se o método existe, esse if tem que ficar dentro do outro if,
        pq se o arquivo não existe não tem o que procurar de método  */
        // ve se dentro da classe controller existe o methodName
        $controller->$methodName(); // se existe puxa o methodo
    } else{ // se der errado 
        echo "Ação não encontrada";
    } 

// se não achar o controller da erro aqui:
} else{
    echo "Controller não encontrado";
}
?>