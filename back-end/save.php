<?php

file_put_contents('data/' . $_POST['fileNumber'] . '.txt', $_POST['textarea']);

header('Location: /' . $_POST['fileNumber'] . '.php');