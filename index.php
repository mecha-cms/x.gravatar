<?php namespace x;

function gravatar($avatar, array $lot = []) {
    $size = \array_shift($lot) ?: 80;
    return 'https://www.gravatar.com/avatar/' . \md5($this['email'] ?? "") . '?s=' . $size . '&d=mp';
}

\Hook::set('page.avatar', __NAMESPACE__ . "\\gravatar", 1);