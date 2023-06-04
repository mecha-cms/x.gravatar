<?php namespace x\gravatar;

function page__avatar($avatar, array $lot = []) {
    if ($avatar) {
        return $avatar;
    }
    $size = \ceil(\array_shift($lot) ?: 80);
    return 'https://www.gravatar.com/avatar/' . \md5($this['email'] ?? "") . '?s=' . $size . '&d=mp';
}

\Hook::set('page.avatar', __NAMESPACE__ . "\\page__avatar", 1);