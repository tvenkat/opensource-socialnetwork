<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */

$com = input('component');
$delete = new OssnComponents;
if ($delete->deletecom($com)) {
    ossn_trigger_message(ossn_print('com:deleted'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('con:delete:error'), 'error');
    redirect(REF);
}