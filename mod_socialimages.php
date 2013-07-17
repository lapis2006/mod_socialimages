<?php
/** 
* @package JJ Social Images
* @author JoomJunk
* @copyright	 2012 JoomJunk. All Rights Reserved
* @license http://www.gnu.org/licenses/gpl-3.0.html
**/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// init vars
$facebook     = $params->get('facebook', '1');
$twitter      = $params->get('twitter', '1');
$google          = $params->get('google', '1');
$instagram       = $params->get('instagram', '1');
$pinterest       = $params->get('pinterest', '1');
$foursquare       = $params->get('foursquare', '1');
$myspace       = $params->get('myspace', '1');
$youtube          = $params->get('youtube', '1');
$flickr      = $params->get('flickr', '1');
$digg       = $params->get('digg', '1');
$linkedin       = $params->get('linkedin', '1');
$rss         = $params->get('rss', '1');

$facebook_link     = $params->get('facebook_link');
$twitter_link      = $params->get('twitter_link');
$google_link          = $params->get('google_link');
$instagram_link      = $params->get('instagram_link');
$pinterest_link      = $params->get('pinterest_link');
$foursquare_link      = $params->get('foursquare_link');
$myspace_link       = $params->get('myspace_link');
$youtube_link          = $params->get('youtube_link');
$flickr_link       = $params->get('flickr_link');
$digg_link          = $params->get('digg_link');
$linkedin_link          = $params->get('linkedin_link');
$rss_link          = $params->get('rss_link');

$facebookbl          = $params->get('facebookbl');
$twitterbl          = $params->get('twitterbl');
$googlebl          = $params->get('googlebl');
$instagrambl          = $params->get('instagrambl');
$pinterestbl          = $params->get('pinterestbl');
$foursquarebl          = $params->get('foursquarebl');
$myspacebl          = $params->get('myspacebl');
$youtubebl          = $params->get('youtubebl');
$flickrbl          = $params->get('flickrbl');
$diggbl          = $params->get('diggbl');
$linkedinbl          = $params->get('linkedinbl');
$rssbl          = $params->get('rssbl');


$module_base = JURI::base() . 'modules/mod_socialimages/';
$pretext     = $params->get('pretext');
$styles = $params->get('styles');
$size = $params->get('size');
//Include the layout file
require(JModuleHelper::getLayoutPath('mod_socialimages'));

?>