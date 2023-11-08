<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_SERVER['REQUEST_URI'] === '/input-form') {
        $controller = new StudentController();
        $controller->showInputForm();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_SERVER['REQUEST_URI'] === '/submit') {
        $controller = new StudentController();
        $controller->processInput();
    }
}
?>
