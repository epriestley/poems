<?php

for ($ii = 0; $ii < $argv[1]; $ii++) {
  echo str_repeat('q', 1024 * 1024);
}
