<?php
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

// -------------------------------  Upload Image -------------------------------

if (!function_exists('GenerateDefaultImage')) {
    function GenerateDefaultImage($option = '')
    {
        $option = isset($option) && $option != '' ? $option : 'D I';
        \Storage::put("default_images\default_images_" . time() . ".png", \DefaultProfileImage::create($option)->encode());
        return "default_images\default_images_" . time() . ".png";
    }
}


if (!function_exists('admin')) {
	function admin() {
		return auth()->guard('admin');
	}
}


if (!function_exists('datatable_lang')) {
	function datatable_lang() {
		return ['sProcessing'  => trans('admin.sProcessing'),
			'sLengthMenu'        => trans('admin.sLengthMenu'),
			'sZeroRecords'       => trans('admin.sZeroRecords'),
			'sEmptyTable'        => trans('admin.sEmptyTable'),
			'sInfo'              => trans('admin.sInfo'),
			'sInfoEmpty'         => trans('admin.sInfoEmpty'),
			'sInfoFiltered'      => trans('admin.sInfoFiltered'),
			'sInfoPostFix'       => trans('admin.sInfoPostFix'),
			'sSearch'            => trans('admin.sSearch'),
			'sUrl'               => trans('admin.sUrl'),
			'sInfoThousands'     => trans('admin.sInfoThousands'),
			'sLoadingRecords'    => trans('admin.sLoadingRecords'),
			'oPaginate'          => [
				'sFirst'           => trans('admin.sFirst'),
				'sLast'            => trans('admin.sLast'),
				'sNext'            => trans('admin.sNext'),
				'sPrevious'        => trans('admin.sPrevious'),
			],
			'oAria'            => [
				'sSortAscending'  => trans('admin.sSortAscending'),
				'sSortDescending' => trans('admin.sSortDescending'),
			],
		];
	}
}


    if (!function_exists('get_file')) {
        function get_file($image) {
            return $image!=null?$image:asset('admin/imgs/default.jpg');
        }
    }
    if (!function_exists('get_provider_image')) {
        function get_provider_image($image) {
            return $image!=null?url('/').'/'.$image:asset('admin/imgs/default.jpg');
        }
    }

    if (!function_exists('get_image_file')) {
        function get_image_file($image) {
            return $image!=null?asset('images/'.$image):asset('admin/imgs/default.jpg');
        }
    }
    if (!function_exists('get_user_file')) {
        function get_user_file($image) {
            return $image!=null?asset(/*'images/'.*/$image):asset('admin/assets/media/avatars/blank.png');
        }
    }

    if (!function_exists('delete_file')) {
        function delete_file($file) {
            return File::delete($file);
        }
    }


//===================  toaster ===========================
if (!function_exists('notification')) {
    function notification($message,$alert_type) {
        $notification=array(
            'message' => $message,
            'alert-type' => $alert_type
        );
        return $notification;
    }
}
