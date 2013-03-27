<?php
/**
 * Wedge
 *
 * Language file for notifications
 *
 * @package wedge
 * @copyright 2010-2013 Wedgeward, wedge.org
 * @license http://wedge.org/license/
 *
 * @version 0.1
 */

$txt['notifications'] = 'Notifications';
$txt['notification_unread_title'] = 'Unread Notifications';
$txt['notification_disable'] = 'Disable notifications?';
$txt['notification_profile_desc'] = 'You can disable notifications from specific notifiers here, please note that disabling notifications will only prevent new notifications but will keep the existing ones';
$txt['scheduled_task_notification_prune'] = 'Prune read notifications';
$txt['scheduled_task_desc_notification_prune'] = 'Prune read notifications which are older than the specified days in Admin &gt; Notifications';
$txt['notification_admin_desc'] = 'Settings for the notifications core';
$txt['notifications_prune_days'] = 'Prune notifications older than (days)';
$txt['notifications_prune_days_subtext'] = 'Any read notification older than the specified number of days will be deleted from the database. If you want to disable this feature, disable the scheduled task found under Admin &gt; Server &amp; Maintenance &gt; Scheduled Tasks';
$txt['notification_email'] = 'Notify via e-mail?';
$txt['enabled'] = 'Enabled';
$txt['disabled'] = 'Disabled';
$txt['notify_periodically'] = 'Notify periodically';
$txt['notify_instantly'] = 'Notify instantly and periodically';
$txt['notify_disable'] = 'Don\'t notify via e-mail';
$txt['notify_period_desc'] = 'The number of days after which your periodical notifications will be sent. All of your unread notifications will be grouped and sent via e-mail after this many days';
$txt['notify_period'] = 'Periodical notification';
$txt['scheduled_task_notification_periodical'] = 'Send periodical notification e-mails';
$txt['scheduled_task_desc_notification_periodical'] = 'Sends all the periodical notification e-mails for the members who have unread notifications';
$txt['notification_email_periodical_subject'] = '%s, you have %d unread notification(s)!';
$txt['notification_email_periodical_body'] = 'It looks like you have gathered a bunch of unread notifications over the past few days, here is the gist of them. Head over to the forums to check them out!';
$txt['view_all'] = 'view all';

$txt['welikes_title'] = 'Member Likes';
$txt['welikes_desc'] = 'Notify you when one of your posts has been liked.';
$txt['welikes_subject'] = 'Your post has been liked!';
$txt['welikes_notification'] = '%s liked your post "%s"';