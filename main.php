<?php
include './Club.php';
$club = new Club(1, 'Club Robotique', 'Test', 'Esprit ', 'info');
echo $club->afficher();
