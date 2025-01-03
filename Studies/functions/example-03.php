<?php

function func($name = "World", $time = "morning") {
    return "Hello, $name. Good $time!<br>";
}

echo func(); // Vai passar World e morning como parâmetros
echo func("Lucas", "afternoon");
echo func("João", "night");
echo func("Maria"); // Vai passar morning como segundo parâmetro