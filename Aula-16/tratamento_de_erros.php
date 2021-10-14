<?php

    try {

        echo "<h3>**** Try ****</h3>";
        $sql = "select * from clientes";
        // mysql_query($sql);
        
        if (!file_exists("require_arquivoA.php")){
            throw new Exception ("O arquivo deveria estar disponível às ".date("d/m/Y H:i:s").";mas não estava. Vamos seguir mesmo assim");
        };

    } catch (Error $e) {
        
        echo "<h3>**** Catch de error ****</h3>";
        echo "<p style='color:blue'>".$e->getMessage()."</p>";
        // armazenando esse erro em banco de dados
        
    } catch (Exception $e) {
        
        echo "<h3>**** Catch de Exception ****</h3>";
        echo "<p style='color:red'>".$e->getMessage()."</p>";

    } finally {
        echo "<h3>**** Finally ****</h3>";
    }
    

?>