#!/bin/bash
docker run -it -v $PWD:/app -w /app shimmi/php:7.2-zts /bin/bash
