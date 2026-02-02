<?php

require_once 'config/conexion.php'; 

class LoginModelo {
    public function LoginAuth($user,$pass){ 
        $conexion = new Conexion();
        $con = $conexion->conectar();

        $sql = "SELECT username,password 
                FROM usuarios 
                WHERE username = :user
                    AND password = CONVERT(VARCHAR(255), HASHBYTES('SHA2_256', CAST(:pass AS VARCHAR(255))), 2) 
                    AND status = 1";
        //echo $sql;

        try {
            $stmt = $con->prepare($sql);
            $stmt->execute(
                [
                    ':user' => $user,
                    ':pass' => $pass
                ]
            );

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            die("Error en LoginModelo -> LoginAuth: ". $error->getMessage());
        }
    }

}
?>