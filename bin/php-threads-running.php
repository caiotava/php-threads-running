#!/usr/bin/env php
<?php

require __DIR__.'/../vendor/autoload.php';

$race = new PHPThreadsRunning\Race();

print $race;
