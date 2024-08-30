<?php
function setFlashMessage($type, $message) {
    $_SESSION['flash_messages'][$type] = $message;
}

function getFlashMessages() {
    if (isset($_SESSION['flash_messages'])) {
        $messages = $_SESSION['flash_messages'];
        unset($_SESSION['flash_messages']); // Clear messages after fetching
        return $messages;
    }
    return [];
}

// This function will output the flash messages as JavaScript to be embedded directly in HTML
function outputFlashMessagesAsJS() {
    $messages = getFlashMessages();
    echo "<script type='text/javascript'>\n";
    echo "var flashMessages = " . json_encode($messages) . ";\n";
    echo "</script>\n";
}
?>
