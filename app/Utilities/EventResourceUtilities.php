<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Storage;

class EventResourceUtilities
{
    private static $defaultImage = 'images/event1.jpg';

    /**
     * Store the event image
     *
     * @param $image
     * @return string
     */
    public static function storeImage($image): string
    {
        if (!$image) {
            return self::$defaultImage;
        }

        return $image->store('images', 'public');
    }

    /**
     * Update the event image
     *
     * @param $image
     * @return string
     */
    public static function updateImage($image): string
    {
        $oldImage = request()->event->image;

        if (!$image) {
            return $oldImage;
        }

        static::deleteImage($oldImage);

        return $image->store('images', 'public');
    }

    /**
     * Delete the event image
     *
     * @param $image
     * @return null
     */
    public static function deleteImage($image)
    {
        if ($image !== self::$defaultImage) {
            Storage::delete($image);
        }
    }
}
