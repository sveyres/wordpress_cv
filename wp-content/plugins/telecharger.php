<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

require_once('/home/sylvie/Code/wp/wp-includes/wp-db.php');
require_once('/home/sylvie/Code/wp/wp-config.php');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('liste des emails'));

$emails = $wpdb->get_col( "SELECT email FROM form" );
foreach ($emails as $email) {
    fputcsv($output, array($email));
}

?>
