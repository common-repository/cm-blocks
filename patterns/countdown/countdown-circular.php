<?php
/**
 * Title: Circular Border Countdown
 * Slug: countdown-circular
 * Categories: codemanas
 * Keywords: codemanas
 * Block Types: codemanas/cmblocks--countdown
 */
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
?>

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:cmblocks/countdown {"countdownDayText":" Day","countdownHourText":" Hrs","countdownMinuteText":" Min","countdownSecondText":" Sec","countdownSeparator":"","countdownBlockMargin":{"top":"0px","right":"12px","bottom":"0px","left":"12px"},"countdownBlockBorder":{"color":"#111111","style":"dashed","width":"1px"},"countdownBlockBorderRadius":{"top":"10000px","right":"10000px","bottom":"10000px","left":"10000px"},"countdownBlockPadding":{"top":"12px","right":"35px","bottom":"12px","left":"35px"},"countdownContentLayout":"column","countdownTextFontSize":"18px","countdownDigitFontSize":"48px","countdownDateTime":"Thu, 23 May 2024 10:57:00 GMT","countdownDisplayDateTime":"2024-05-23T10:57:00","startFromScratch":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}}} -->
		<div style="font-style:normal;font-weight:100;--cm-blocks-countdown__ticker-digit-color:#000;--cm-blocks-countdown__ticker-text-color:#000;--cm-blocks-countdown__ticker-text-font-size:18px;--cm-blocks-countdown__ticker-digit-font-size:48px;--cm-blocks-countdown__ticker-padding-top:12px;--cm-blocks-countdown__ticker-padding-bottom:12px;--cm-blocks-countdown__ticker-padding-left:35px;--cm-blocks-countdown__ticker-padding-right:35px;--cm-blocks-countdown__ticker-margin-top:0px;--cm-blocks-countdown__ticker-margin-bottom:0px;--cm-blocks-countdown__ticker-margin-left:12px;--cm-blocks-countdown__ticker-margin-right:12px;--cm-blocks-countdown__separator-margin-top:;--cm-blocks-countdown__separator-margin-bottom:;--cm-blocks-countdown__separator-margin-left:;--cm-blocks-countdown__separator-margin-right:;--cm-blocks-countdown__ticker-border-top:1px dashed #111111;--cm-blocks-countdown__ticker-border-bottom:1px dashed #111111;--cm-blocks-countdown__ticker-border-left:1px dashed #111111;--cm-blocks-countdown__ticker-border-right:1px dashed #111111;--cm-blocks-countdown__ticker-border-radius:10000px 10000px 10000px 10000px" class="wp-block-cmblocks-countdown cm-blocks-countdown" role="timer" aria-live="polite" aria-atomic="true" aria-label="<?php esc_html_e('Countdown Timer','cm-blocks'); ?>"><div data-countdown-datetime="Thu, 23 May 2024 10:57:00 GMT" class="cm-blocks-countdown__ticker cm-blocks-countdown__ticker--horizontal cm-blocks-countdown__ticker--content-column" role="presentation"><span class="cm-blocks-countdown__ticker-item cm-blocks-countdown__ticker-days" aria-label="<?php esc_html_e('Days', 'cm-blocks');?>"><span class="cm-blocks-countdown__ticker-digit"></span><span class="cm-blocks-countdown__ticker-text"> <?php esc_html_e('Day','cm-blocks'); ?></span></span><span class="cm-blocks-countdown__ticker-item cm-blocks-countdown__ticker-hours" aria-label="<?php esc_html_e('Hours', 'cm-blocks'); ?>"><span class="cm-blocks-countdown__ticker-digit"></span><span class="cm-blocks-countdown__ticker-text"> <?php esc_html_e('Hrs','cm-blocks'); ?></span></span><span class="cm-blocks-countdown__ticker-item cm-blocks-countdown__ticker-minutes" aria-label="<?php esc_html_e('Minutes', 'cm-blocks'); ?>"><span class="cm-blocks-countdown__ticker-digit"></span><span class="cm-blocks-countdown__ticker-text"> <?php esc_html_e('Min','cm-blocks'); ?></span></span><span class="cm-blocks-countdown__ticker-item cm-blocks-countdown__ticker-seconds" aria-label="<?php esc_html_e('Seconds', 'cm-blocks'); ?>"><span class="cm-blocks-countdown__ticker-digit"></span><span class="cm-blocks-countdown__ticker-text"> <?php esc_html_e('Sec','cm-blocks'); ?></span></span></div></div>
		<!-- /wp:cmblocks/countdown --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
