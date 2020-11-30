<?php

namespace Vagrus\itertools;

function map(\Traversable $iterator, callable $callback): \Traversable {
    foreach ($iterator as $item) {
        yield $callback($item);
    }
}
