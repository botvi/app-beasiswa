<?php

namespace App\Helper;

use Api\Modules\Mutasi\Models\Mutasi;
use App\Models\Setting;

class helpers
{
    public static function Images($request, $nameFile, $path)
    {
        try {
            if ($request->hasFile($nameFile)) {
                $image = $request->file($nameFile);
                $image_name = \Str::random() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path($path);
                $image->move($destinationPath, $image_name);
                return (object)["status" => true, "msg" => "success", "name" => $image_name, "path" => $path . "/" . $image_name];
            } else {
                return (object)["status" => false, "msg" => "oops!! error"];
            }
        } catch (\Exception $e) {
            return (object)["status" => false, "msg" => "oops!! error"];
        }
    }
}
