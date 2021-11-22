<?php
echo "Hello from PHP inside nginx container";

// вот таким образом контейнер php будет обращаться к контейнеру mysql
//host: mysql:3306