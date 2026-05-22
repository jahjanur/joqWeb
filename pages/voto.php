<?php
/* 
    Template Name: VOTO
*/

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

header('Access-Control-Allow-Origin: https://joq-albania.com'); // Allow requests from this origin
header('Access-Control-Allow-Methods: POST, OPTIONS'); // Specify allowed methods
header('Access-Control-Allow-Headers: Content-Type'); // Specify allowed headers

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit; // Exit for preflight requests
}

// Include WordPress bootstrap
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the POST request
    $voteID = isset($_POST['voteID']) ? intval($_POST['voteID']) : 0;
    $postID = isset($_POST['postID']) ? intval($_POST['postID']) : 0;

    if ($voteID && $postID) {
        $repeater_field = 'kandidatet';
        $rows = get_field($repeater_field, $postID);

        if ($rows && is_array($rows)) {
            $updated = false;

            foreach ($rows as $index => $row) {
                if (isset($row['id']) && $row['id'] == $voteID) {
                    // Get current vote count and increment
                    $current_votes = isset($row['vota']) ? intval($row['vota']) : 0;
                    $current_votes++;

                    // Update only the 'vota' subfield in the specific row
                    // Note: update_row uses 1-based index, hence $index + 1
                    update_row($repeater_field, $index + 1, array('vota' => $current_votes), $postID);
                    $updated = true;
                    break;
                }
            }

            if ($updated) {
                // Retrieve the updated candidates to send back
                $updatedCandidates = get_field($repeater_field, $postID);

                wp_send_json_success([
                    'message' => 'Vote recorded successfully!',
                    'candidates' => $updatedCandidates
                ]);
            } else {
                wp_send_json_error(['message' => 'Candidate not found.']);
            }
        } else {
            wp_send_json_error(['message' => 'Candidates not found.']);
        }
    } else {
        wp_send_json_error(['message' => 'Invalid voteID or postID.']);
    }
} else {
    wp_send_json_error(['message' => 'Invalid request method.']);
}





