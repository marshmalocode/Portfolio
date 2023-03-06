<?php
function DBtravaux($ladb)
{
    $sqlwork = "SELECT * FROM travaux;";
    $querytravaux = mysqli_query($ladb, $sqlwork);
    return mysqli_fetch_all($querytravaux, MYSQLI_ASSOC);
}
