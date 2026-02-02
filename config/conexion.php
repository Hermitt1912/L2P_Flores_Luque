<?php
class Conexion
{
    public function conectar()
    {
        $servername = "DESKTOP-3V9E2DO\\HermittPc";
        $database = "Uni_Auditoria";

        try {
            $dsn = "sqlsrv:Server=$servername,1433;Database=$database;TrustServerCertificate=true;Encrypt=no";

            // Autenticación de Windows
            $pdo = new PDO($dsn, "", "");

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            // Este mensaje te dirá si el problema es ahora de permisos
            die("Error de conexión a SQL Server Express: " . $e->getMessage());
        }
    }
}
