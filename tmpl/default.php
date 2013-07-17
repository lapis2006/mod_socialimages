<?php 
/** 
* @package JJ Social Images
* @author JoomJunk
* @copyright	 2012 JoomJunk. All Rights Reserved
* @license http://www.gnu.org/licenses/gpl-3.0.html
*/

// no direct access

defined('_JEXEC') or die('Restricted access'); 


$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_socialimages/css/style.css');
$style ='.pretext p {'
		. 'text-align:' . $params->get('pretext_align') . ';'
		. '}';

$document->addStyleDeclaration($style);

?>



<div class="pretext"><p><?php echo $params->get('pretext'); ?></p></div>


<div id="socialimages">
<ul class="socialimages">

<?php if ($facebook==1) { ?>
	<li id="<?php if ($facebookbl == true) { echo "floatline"; } else { echo "breakline";} ?>">
		<a target="_blank" href="<?php echo $params->get('facebook_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_facebook_<?php echo $styles; ?>_<?php echo $size; ?>"> 
        	Like on Facebook
		</a>
	</li> <?php echo $facebookbl; ?> <?php echo $twitterbl; ?>
<?php } ?>

<?php if ($twitter==1) { ?>
	<li id="<?php echo $twitterbl; ?>">
		<a target="_blank" href="<?php echo $params->get('twitter_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_twitter_<?php echo $styles; ?>_<?php echo $size; ?>">
			Follow on Twitter
		</a>
	</li>
<?php } ?>

<?php if ($google==1) { ?>
	<li id="<?php echo $googlebl; ?>">
		<a target="_blank" href="<?php echo $params->get('google_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_google_<?php echo $styles; ?>_<?php echo $size; ?>">
			+1 on Google Plus
		</a>
	</li>
<?php } ?>

<?php if ($instagram==1) { ?>
	<li id="<?php echo $instagrambl; ?>">
		<a target="_blank" href="<?php echo $params->get('instagram_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_instagram_<?php echo $styles; ?>_<?php echo $size; ?>">
			Follow on Instagram
		</a>
	</li>
<?php } ?>

<?php if ($pinterest==1) { ?>
	<li id="<?php echo $pinterestbl; ?>">
		<a target="_blank" href="<?php echo $params->get('pinterest_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_pinterest_<?php echo $styles; ?>_<?php echo $size; ?>">
			Follow on Pinterest
		</a>
	</li>
<?php } ?>

<?php if ($foursquare==1) { ?>
	<li id="<?php echo $foursquarebl; ?>">
		<a target="_blank" href="<?php echo $params->get('foursquare_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_foursquare_<?php echo $styles; ?>_<?php echo $size; ?>">
			Follow on Foursquare
		</a>
	</li>
<?php } ?>

<?php if ($myspace==1) { ?>
	<li id="<?php echo $myspacebl; ?>">
		<a target="_blank" href="<?php echo $params->get('myspace_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_myspace_<?php echo $styles; ?>_<?php echo $size; ?>">
			Follow on MySpace
		</a>
	</li>
<?php } ?>

<?php if ($youtube==1) { ?>
	<li id="<?php echo $youtubebl; ?>">
		<a target="_blank" href="<?php echo $params->get('youtube_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_youtube_<?php echo $styles; ?>_<?php echo $size; ?>">
			Subscribe on YouTube
		</a>
	</li>
<?php } ?>

<?php if ($flickr==1) { ?>
	<li id="<?php echo $flickrbl; ?>">
		<a target="_blank" href="<?php echo $params->get('flickr_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_flickr_<?php echo $styles; ?>_<?php echo $size; ?>">
			Follow on Flickr
		</a>
	</li>
<?php } ?>

<?php if ($digg==1) { ?>
	<li id="<?php echo $diggbl; ?>">
		<a target="_blank" href="<?php echo $params->get('digg_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_digg_<?php echo $styles; ?>_<?php echo $size; ?>">
			Follow on Digg
		</a>
	</li>
<?php } ?>

<?php if ($linkedin==1) { ?>
	<li id="<?php echo $linkedinbl; ?>">
		<a target="_blank" href="<?php echo $params->get('linkedin_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_linkedin_<?php echo $styles; ?>_<?php echo $size; ?>">
			Follow on Linkedin
		</a>
	</li>
<?php } ?>

<?php if ($rss==1) { ?>
	<li id="<?php echo $rssbl; ?>">
		<a target="_blank" href="<?php echo $params->get('rss_link'); ?>" class="icons_<?php echo $styles; ?>_<?php echo $size; ?> icons_rss_<?php echo $styles; ?>_<?php echo $size; ?>">
			Read We RSS
		</a>
	</li>
<?php } ?>

</ul>

</div>