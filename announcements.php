<?php

echo $twig->render('announcements.html', [
    'post' => $_POST,
    'session' => $_SESSION,
    'get' => $_GET]);