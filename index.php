<?php namespace x;

function gravatar($avatar, array $lot = []) {
    if ($avatar) {
        return $avatar;
    }
    $size = \ceil(\array_shift($lot) ?: 80);
    return 'https://www.gravatar.com/avatar/' . \md5($this['email'] ?? "") . '?s=' . $size . '&d=mp';
}

\Hook::set('page.avatar', __NAMESPACE__ . "\\gravatar", 1);