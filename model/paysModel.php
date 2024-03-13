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
    $query = $db->query("SELECT countries.*, flags.url  FROM countries LEFT JOIN flags ON countries.id = flags.id_pays ORDER BY $orderBY $type");
    $pays = $query->fetchAll();
    $query->closeCursor();
    return $pays;
}