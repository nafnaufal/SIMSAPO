<?php
class Koneksi{
    private static $USERNAME = "root";
    private static $PASSWORD = "";
    private static $DATABASE = "sekolah";
    private static $HOSTNAME = "localhost";
    private static $kon = NULL;
    public static function getKoneksi(){
        Koneksi::$kon = mysqli_connect(Koneksi::$HOSTNAME, Koneksi::$USERNAME, Koneksi::$PASSWORD, Koneksi::$DATABASE);;
        return Koneksi::$kon;
    }
    public static function destroy(){
        Koneksi::$kon = NULL;
    }
}
?>