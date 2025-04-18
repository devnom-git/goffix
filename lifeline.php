<?php
$projects = [
    'goffixlifeline' => 'disable'
];

$project_id = $_GET['project'] ?? '';
$status = $projects[$project_id] ?? 'disabled';

header('Content-Type: application/json');
echo json_encode(['status' => $status]);
