<?php
function DBlink($ladb)
{
    $sqlLink = "SELECT * FROM lien;";
    $queryLien = mysqli_query($ladb, $sqlLink);
    return mysqli_fetch_all($queryLien, MYSQLI_ASSOC);
}
