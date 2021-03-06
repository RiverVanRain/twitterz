<?php 
/**
	 * Elgg Twitter Widgets Pack plugin
	 *
	 * @package Elgg Twitter Widgets Pack
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author RiverVanRain
	 * @URL http://o.wzm.me/crewz/p/1983/personal-net
	 * @copyright (c) RiverVanRain 2014
	 */
$widget = $vars["entity"];
?>
<div>
		<b><?php echo elgg_echo("twitterz:username"); ?></b>
		<?php echo elgg_view('input/text', array(
		'name' => 'params[twitter_username]',
		'value' => $widget->twitter_username,
		)) ?>
</div>
<div><b><?php echo elgg_echo("twitterz_wid:title"); ?></b></div>
<div>
		<?php echo elgg_echo("twitter:widget_id"); ?>
		<?php echo elgg_view('input/text', array(
		'name' => 'params[twitter_widget_id]',
		'value' => $widget->twitter_widget_id,
		)) ?>
</div>
<div><b><?php echo elgg_echo("twitterz_favorites:title"); ?></b></div>
<div>
		<?php echo elgg_echo("twitter:widget_id"); ?>
		<?php echo elgg_view('input/text', array(
		'name' => 'params[twitter_favorites_widget_id]',
		'value' => $widget->twitter_favorites_widget_id,
		)) ?>
</div>
<div><b><?php echo elgg_echo("twitterz_list:title"); ?></b></div>
<div>
		<?php echo elgg_echo("twitter:list"); ?>
		<?php echo elgg_view('input/text', array(
		'name' => 'params[twitter_list]',
		'value' => $widget->twitter_list,
		)) ?>
</div>
<div>
		<?php echo elgg_echo("twitter:widget_id"); ?>
		<?php echo elgg_view('input/text', array(
		'name' => 'params[twitter_list_widget_id]',
		'value' => $widget->twitter_list_widget_id,
		)) ?>
</div>
<div><b><?php echo elgg_echo("twitterz_search:title"); ?></b></div>
<div>
		<?php echo elgg_echo("twitter:search_query"); ?>
		<?php echo elgg_view('input/text', array(
		'name' => 'params[twitter_search_query]',
		'value' => $widget->twitter_search_query,
		)) ?>
</div>
<div>
		<?php echo elgg_echo("twitter:widget_id"); ?>
		<?php echo elgg_view('input/text', array(
		'name' => 'params[twitter_search_widget_id]',
		'value' => $widget->twitter_search_widget_id,
		)) ?>
</div>
