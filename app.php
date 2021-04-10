<?php

/**
 * Empathy Foundation application entrance
 * 
 * @license GPL-3.0
 * @see https://github.com/empathy-framework
 */

require 'vendor/autoload.php';

use function Empathy\Engine\dn;

/**
 * @see https://docs.microsoft.com/en-us/dotnet/api/system.windows.forms.form?view=netframework-4.8
 * @see https://docs.microsoft.com/en-us/dotnet/api/system.windows.forms.button?view=netframework-4.8
 */
$form   = dn ('System.Windows.Forms.Form');
$button = dn ('System.Windows.Forms.Button');

$form->text = 'Example app';

$button->parent = $form;

$button->left   = 16;
$button->top    = 16;
$button->width  = 96;
$button->height = 32;

$button->text = 'Click me!';

$button->on ('click', function ()
{
    /**
     * @see https://docs.microsoft.com/en-us/dotnet/api/system.windows.forms.messagebox?view=netframework-4.8
     */
    dn ('System.Windows.Forms.MessageBox')->show ('Hello, World!');
});

$form->showDialog ();
