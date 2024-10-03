<?php 
// There are a number of differences that will apply depending on whether the
// files are being run on localhost or on the web

$local = $_SERVER["SERVER_NAME"] == "localhost" ? "local" : "web";

