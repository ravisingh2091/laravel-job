<?php


/**
 * Uses an array that maps input field names to model field names, and maps the
 * data across if it exists in the input, trimming at the same time.
 * @param array $mapping
 * @param $data
 * @return array
 */
function input_mapping(array $mapping, $data)
{
    $translated = array();

    foreach ($mapping as $from => $to) {
        if (array_key_exists($from, $data))
        {
            $translated[$to] = strlen(trim($data[$from])) > 0 ? trim($data[$from]) : null;
        }
    }

    return $translated;
}

function languageToLocale($language)
{
    return ($language == 'Spanish') ? 'es' : 'en';
}

function localeToLanguage($locale_code)
{
    return ($locale_code == 'es') ? 'Spanish' : 'English';
}