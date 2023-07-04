<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * @package app\assets
 */
class AppAsset extends AssetBundle
{
    public $basePath = '';
    public $baseUrl  = '';

    public $sourcePath = '@app/public/dist/';

    public $css = [
		'css/bootstrap.css'
	];

    public $js = [
    	'js/bootstrap.min.js'
	];
}

