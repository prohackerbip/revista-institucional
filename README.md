// Este código es un ejemplo de cómo listar los roles de usuario dentro de OJS
// Debes tener acceso a la base de datos de OJS para obtener información de los roles.

<?php

// Se conecta al sistema OJS y carga los objetos necesarios.
require_once('lib/pkp/includes/bootstrap.inc.php');
define('HANDLER_CLASS', 'PKPHandler');

class UserRolesTest {
    public function __construct() {
        // Cargar el contexto de OJS (por ejemplo, una revista específica).
        $journalDao = DAORegistry::getDAO('JournalDAO');
        $journal = $journalDao->getById(1); // ID de la revista que se probará.
        
        // Obtener todos los roles asociados a la revista.
        $userGroupDao = DAORegistry::getDAO('UserGroupDAO');
        $roles = $userGroupDao->getByJournalId($journal->getId());
        
        // Imprimir los roles para hacer pruebas
        while ($role = $roles->next()) {
            echo "Role ID: " . $role->getId() . " - Name: " . $role->getLocalizedName() . "\n";
        }
    }
}

// Instancia de la clase para probar los roles.
$userRolesTest = new UserRolesTest();

?>
