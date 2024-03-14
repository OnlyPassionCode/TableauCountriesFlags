<?php
/**
 * @param PDO $db
 * @param string $orderBY
 * @param string $type
 * @return array
 * Fonction qui récupère tous les pays ordonné par leurs nom
 */
function getAllPaysWithFlags(PDO $db, string $orderBY, string $type): array
{
    $query = $db->query("SELECT countries.*, capitals.nom as capitale, capitals.population as popu_cap, capitals.altitude, flags.url, continents.ct_nom as continent 
        FROM countries 
        JOIN countries_continents ON countries.id = countries_continents.id_pays 
        JOIN continents ON continents.ct_id = countries_continents.id_continent 
        JOIN flags ON countries.id = flags.id_pays 
        JOIN capitals ON countries.id = capitals.id_pays 
        ORDER BY $orderBY $type;
    ");

    $pays = $query->fetchAll();
    $query->closeCursor();
    return $pays;
}