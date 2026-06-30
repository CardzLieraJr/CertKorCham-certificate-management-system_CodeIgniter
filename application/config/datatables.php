<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CI Datatables
 *
 * Datatables library for Codeigniter
 *
 * @package   CI Datatables
 * @author    Paul Zepernick and contributors
 * @copyright 2015 Paul Zepernick and Github contributors
 * @link      http://www.macpczone.co.uk
 * @license   MIT
 * @version   3.0
 */

// Datatables currency setting
$config['datatables.currency'] = '£';

// Default is implied root directory/themes/
$config['datatables.date_format'] = 'D jS F, Y \a\t g:ia';

// Datatables action. The double brackets are replaced by Codeigniters site_url() function
// and the double @ symbols are replaced by the value for the particular columns row.
$config['datatables.action1'] = '<div class="d-flex justify-content-center"><div class="p-2"><a title="View" href="{{entry/read/@@}}" class="btn btn-sm btn-success" target="_blank"><i class="fa fa-eye"></i></a></div><div class="p-2"><a title="Edit" href="{{entry/update/@@}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a></div><div class="p-2"><a title="Delete" href="{{entry/delete/@@}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></div></div>';

// Same as the above action, you can add some more if you want to;
$config['datatables.action2'] = NULL;
