<?php namespace x\gravatar;

function page__avatar($avatar, array $lot = []) {
    if ($avatar) {
        return $avatar;
    }
    \extract(\lot(), \EXTR_SKIP);
    $size = \ceil(\array_shift($lot) ?: 80);
    return 'https://www.gravatar.com/avatar/' . \md5($this->email ?? "") . '?s=' . (\is_int($size) && $size > 0 ? $size : 80) . '&d=' . \urlencode($state->x->gravatar->d ?? 'mp');
}

\Hook::set('page.avatar', __NAMESPACE__ . "\\page__avatar", 1);