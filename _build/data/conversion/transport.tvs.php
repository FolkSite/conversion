<?php
/**
 * templateVars transport file for conversion extra
 *
 * Copyright 2016 by DANNY HARDING <danny@stuntrocket.co>
 * Created on 02-23-2016
 *
 * @package conversion
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $templateVars */


$templateVars = array();

$templateVars[1] = $modx->newObject('modTemplateVar');
$templateVars[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'type' => 'text',
  'name' => 'CallToActionText',
  'caption' => 'Call To Action Text (Optional)',
  'description' => 'Overlayed onto banner.',
  'elements' => '',
  'rank' => 0,
  'display' => 'default',
  'default_text' => 'Next',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'true',
    'maxLength' => '',
    'minLength' => '',
    'regex' => '',
    'regexText' => '',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
$templateVars[2] = $modx->newObject('modTemplateVar');
$templateVars[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'type' => 'resourcelist',
  'name' => 'CallToActionLink',
  'caption' => 'Call To Action Link (Optional)',
  'description' => '',
  'elements' => '',
  'rank' => 0,
  'display' => 'default',
  'default_text' => 'Next',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => '1',
    'showNone' => '1',
    'parents' => '',
    'depth' => '10',
    'includeParent' => '1',
    'limitRelatedContext' => '0',
    'where' => '',
    'limit' => '0',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
$templateVars[3] = $modx->newObject('modTemplateVar');
$templateVars[3]->fromArray(array (
  'id' => 3,
  'property_preprocess' => false,
  'type' => 'url',
  'name' => 'CallToActionUrl',
  'caption' => 'Call To Action Url (Optional)',
  'description' => '',
  'elements' => '',
  'rank' => 0,
  'display' => 'text',
  'default_text' => '',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => '1',
    'showNone' => '1',
    'parents' => '',
    'depth' => '10',
    'includeParent' => '1',
    'limitRelatedContext' => '0',
    'where' => '',
    'limit' => '0',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
$templateVars[4] = $modx->newObject('modTemplateVar');
$templateVars[4]->fromArray(array (
  'id' => 4,
  'property_preprocess' => false,
  'type' => 'image',
  'name' => 'ResourceIcon',
  'caption' => 'Resource Icon',
  'description' => '',
  'elements' => '',
  'rank' => 0,
  'display' => 'default',
  'default_text' => 'assets/images/article-bg-article.svg',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'true',
    'maxLength' => '',
    'minLength' => '',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
return $templateVars;
