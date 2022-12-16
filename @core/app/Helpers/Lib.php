<?php

function option($key, $lang = null)
{
    $lang = $lang ?? get_user_lang();
    return get_static_option("{$key}_{$lang}");
}
