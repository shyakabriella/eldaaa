<?php

// app/helpers.php

if (!function_exists('getLocationName')) {
    function getLocationName($locationId, $locations)
    {
        $location = collect($locations)->where('id', $locationId)->first();

        return $location ? $location['name'] : '';
    }
}
