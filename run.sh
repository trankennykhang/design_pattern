#$/bin/bash
docker run -d --name design_pattern1 -v ${PWD}:/var/www/html php:latest tail -f /dev/null