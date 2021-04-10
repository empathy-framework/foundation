<?php

use function Empathy\Engine\dn;
use Empathy\Engine\Wrappers\NetObject;

/**
 * Form
 */
$form = dn ('System.Windows.Forms.Form');

$form->text = 'Empathy Foundation';

$form->width  = 900;
$form->height = 600;
$form->backColor = 0xFFFFFFFF;

$form->icon = new NetObject ('System.Drawing.Icon', 'System.Drawing', 'app/app.ico');

$form->formBorderStyle = 1;
$form->maximizeBox = false;
$form->minimizeBox = false;

/**
 * Logo
 */

$logo = dn ('System.Windows.Forms.PictureBox', 'System.Windows.Forms');
$logo->parent = $form;

$logo->left   = 64;
$logo->top    = 96;
$logo->width  = 198;
$logo->height = 198;

$logo->sizeMode = 1;

$logo->load ('app/app.ico');

/**
 * Caption
 */

$caption = dn ('System.Windows.Forms.Label', 'System.Windows.Forms');
$caption->parent = $form;

$caption->text = 'Empathy Foundation';
$caption->font = dn ('System.Drawing.Font', 'System.Drawing', 'Segoe UI Bold', 32);

$caption->left = 320;
$caption->top  = 96;
$caption->autoSize = true;

/**
 * Versions
 */

# Engine version caption
$engine_version_caption = dn ('System.Windows.Forms.Label', 'System.Windows.Forms');
$engine_version_caption->parent = $form;

$engine_version_caption->text = 'Litengine version: ';
$engine_version_caption->font = dn ('System.Drawing.Font', 'System.Drawing', 'Segoe UI Light', 18);

$engine_version_caption->left   = 324;
$engine_version_caption->top    = $caption->top + $caption->height + 16;
$engine_version_caption->width  = 212;
$engine_version_caption->height = 32;

$engine_version_caption->textAlign = 64;

# Engine version value
$engine_version_value = dn ('System.Windows.Forms.Label', 'System.Windows.Forms');
$engine_version_value->parent = $form;

$engine_version_value->text = \Composer\InstalledVersions::getPrettyVersion ('empathy-php/litengine');
$engine_version_value->font = dn ('System.Drawing.Font', 'System.Drawing', 'Segoe UI', 18);
$engine_version_value->foreColor = 0xFF1E90FF;

$engine_version_value->left   = $engine_version_caption->left + $engine_version_caption->width;
$engine_version_value->top    = $engine_version_caption->top + 2;
$engine_version_value->width  = 192;
$engine_version_value->height = 32;

# Core version caption
$core_version_caption = dn ('System.Windows.Forms.Label', 'System.Windows.Forms');
$core_version_caption->parent = $form;

$core_version_caption->text = 'Litecore version: ';
$core_version_caption->font = dn ('System.Drawing.Font', 'System.Drawing', 'Segoe UI Light', 18);

$core_version_caption->left   = 324;
$core_version_caption->top    = $engine_version_caption->top + $engine_version_caption->height + 8;
$core_version_caption->width  = 212;
$core_version_caption->height = 32;

$core_version_caption->textAlign = 64;

# Core version value
$core_version_value = dn ('System.Windows.Forms.Label', 'System.Windows.Forms');
$core_version_value->parent = $form;

$core_version_value->text = \Composer\InstalledVersions::getPrettyVersion ('empathy-php/litecore');
$core_version_value->font = dn ('System.Drawing.Font', 'System.Drawing', 'Segoe UI', 18);
$core_version_value->foreColor = 0xFF1E90FF;

$core_version_value->left   = $core_version_caption->left + $core_version_caption->width;
$core_version_value->top    = $core_version_caption->top + 2;
$core_version_value->width  = 192;
$core_version_value->height = 32;

# PHP version caption
$php_version_caption = dn ('System.Windows.Forms.Label', 'System.Windows.Forms');
$php_version_caption->parent = $form;

$php_version_caption->text = 'PHP version: ';
$php_version_caption->font = dn ('System.Drawing.Font', 'System.Drawing', 'Segoe UI Light', 18);

$php_version_caption->left   = 324;
$php_version_caption->top    = $core_version_caption->top + $core_version_caption->height + 8;
$php_version_caption->width  = 212;
$php_version_caption->height = 32;

$php_version_caption->textAlign = 64;

# PHP version value
$php_version_value = dn ('System.Windows.Forms.Label', 'System.Windows.Forms');
$php_version_value->parent = $form;

$php_version_value->text = PHP_VERSION;
$php_version_value->font = dn ('System.Drawing.Font', 'System.Drawing', 'Segoe UI', 18);
$php_version_value->foreColor = 0xFF1E90FF;

$php_version_value->left   = $php_version_caption->left + $php_version_caption->width;
$php_version_value->top    = $php_version_caption->top + 2;
$php_version_value->width  = 192;
$php_version_value->height = 32;

/**
 * Loaded extensions
 */

$extensions = dn ('System.Windows.Forms.Label', 'System.Windows.Forms');
$extensions->parent = $form;

$extensions->text = 'Loaded extensions: '. join (', ', get_loaded_extensions ());
$extensions->font = dn ('System.Drawing.Font', 'System.Drawing', 'Segoe UI Light', 16);

$extensions->left   = 64;
$extensions->top    = $php_version_value->top + $php_version_value->height + 64;
$extensions->width  = 772;
$extensions->height = 128;

/**
 * Show application form
 */
$form->showDialog ();
