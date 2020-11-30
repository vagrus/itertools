<?php

namespace Vagrus\itertools;

function map(\Traversable $iterator, callable $callback): \Traversable {
    foreach ($iterator as $args) {
        yield $callback(...$args);
    }
}
