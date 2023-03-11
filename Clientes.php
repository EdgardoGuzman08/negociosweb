<?php
namespace Dao\Mnt;

use Dao\Table;

class Clientes extends Table{
    /**
     * Crea un nuevo registro de categoria.
     *
     * @param string $clientname description
     * @param string $clientgender description
     * @param string $clientphone1 description
     * @param string $clientphone2 description
     * @param string $clientemail description
     * @param string $clientIdnumber description
     * @param string $clientbio description
     * @param string $clientstatus description
     * @param datetime $clientdatecrt description
     *
     * @return int
     */
    public static function insert(string $clientname, string $clientgender, string $clientphone1, string $clientphone2, string $clientemail, string $clientIdnumber, string $clientbio, string $clientstatus, string $clientdatecrt): int
    {
        $sqlstr = "INSERT INTO clientes (clientname, clientgender, clientphone1, clientphone2, clientemail, clientIdnumber, clientbio, clientstatus, clientdatecrt) values(:clientname, :clientgender, :clientphone1, :clientphone2, :clientemail, :clientIdnumber, :clientbio, :clientstatus, :clientdatecrt);";
        $rowsInserted = self::executeNonQuery(
            $sqlstr,
            array("clientname" => $clientname, "clientgender"=>$clientgender, "clientphone1"=>$clientphone1, "clientphone2"=>$clientphone2, "clientemail"=>$clientemail, "clientIdnumber"=>$clientIdnumber, "clientbio"=>$clientbio, "clientstatus"=>$clientstatus, "clientdatecrt"=>$clientdatecrt)
        );
        return $rowsInserted;
    }
    public static function update(
        string $clientname,
        string $clientgender, 
        string $clientphone1, 
        string $clientphone2, 
        string $clientemail, 
        string $clientIdnumber, 
        string $clientbio, 
        string $clientstatus, 
        string $clientdatecrt,
        int $clientid
    ){
        $sqlstr = "UPDATE clientes set clientname = :clientname, clientgender = :clientgender, clientphone1 = :clientphone1, clientphone2 = :clientphone2, clientemail = :clientemail, clientIdnumber = :clientIdnumber, clientbio = :clientbio, clientstatus = :clientstatus, clientdatecrt = :clientdatecrt   where clientid=:clientid;";
        $rowsUpdated = self::executeNonQuery(
            $sqlstr,
            array(
                "clientname" => $clientname,
                "clientgender" => $clientgender,
                "clientphone1" => $clientphone1,
                "clientphone2" => $clientphone2,
                "clientemail" => $clientemail,
                "clientIdnumber" => $clientIdnumber,
                "clientbio" => $clientbio,
                "clientstatus" => $clientstatus,
                "clientdatecrt" => $clientdatecrt,
                "clientid" => $clientid,
            )
        );
        return $rowsUpdated;
    }
    public static function delete(int $clientid){
        $sqlstr = "DELETE from clientes where clientid=:clientid;";
        $rowsDeleted = self::executeNonQuery(
            $sqlstr,
            array(
                "clientid" => $clientid
            )
        );
        return $rowsDeleted;
    }
    public static function findAll(){
        $sqlstr = "SELECT * from clientes;";
        return self::obtenerRegistros($sqlstr, array());
    }
    public static function findByFilter(){

    }
    public static function findById(int $clientid){
        $sqlstr = "SELECT * from clientes where clientid = :clientid;";
        $row = self::obtenerUnRegistro(
            $sqlstr,
            array(
                "clientid"=> $clientid
            )
        );
        return $row;
    }
}
?>