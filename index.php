<?php namespace x;

function gravatar($avatar, array $lot = []) {
    $size = \array_shift($lot) ?: 80;
    return \sprintf('https://www.gravatar.com/avatar/%1$s?s=%2$d&d=mp', \md5($this['email'] ?? ""), $size);
}

\Hook::set('page.avatar', __NAMESPACE__ . "\\gravatar", 2);