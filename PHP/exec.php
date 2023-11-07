
<?php
    
    // Системный вызов
    
    //$cmd = "powershell"; // Windows
    $cmd = "dir"; // Windows
    //$cmd = "ls"; // Linux, UNIX, Mac

    exec(escapeshellcmd($cmd), $output, $status);

    if ($status) {
        echo "Команда exec не выполнена!";
    } else {
        echo "<pre>";
        foreach($output as $line) {
            echo htmlspecialchars("$line\n");
        }
        echo "</pre>";
    }
?>