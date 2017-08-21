<?php

// define your Computer's timezone. Accepted values can be found at: http://php.net/manual/en/timezones.php
$config['timezone'] = 'UTC';


// to configure the Bot to suppress any messages being sent out, set to TRUE:
$config['listen_only_mode'] = FALSE;


// bot essential commands definition:
$config['admin_addcommand_keyword'] = '!addcmd';
$config['admin_editcommand_keyword'] = '!editcmd';
$config['admin_removecommand_keyword'] = '!removecmd';
$config['admin_addadmin_keyword'] = '!addadmin';
$config['admin_removeadmin_keyword'] = '!removeadmin';
$config['helpcommand_keyword'] = '!help';
$config['uptimecommand_keyword'] = '!uptime';


// reply format:
// set to
// 1: to reply to users command with @<username>
// 2: to reply to users command with <username>
// 3: to reply to users command without reference to the user who triggered it.
$config['reply_format'] = 1;


// periodic messages:
$config['admin_addperiodicmsg_keyword'] = '!addperiodicmsg';
$config['admin_removeperiodicmsg_keyword'] = '!removeperiodicmsg';

// to enable the feature, set the threshold to a value greater than 0 seconds:
$config['periodic_messages_interval_seconds'] = 60;

// giveaways:
// for Admins:
$config['admin_giveaway_start_keyword'] = '!giveaway-start';
$config['admin_giveaway_stop_keyword'] = '!giveaway-end';
// $config['admin_giveaway_subs_start_keyword'] = '!giveaway-subs-start';
// $config['admin_giveaway_subs_stop_keyword'] = '!giveaway-subs-end';
$config['admin_giveaway_find_winner_keyword'] = '!giveaway-winner';
$config['admin_giveaway_status_keyword'] = '!giveaway-status';
$config['admin_giveaway_reset_keyword'] = '!giveaway-reset';
// for viewers to join:
$config['giveaway_join_keyword'] = '!giveaway';

// if you want to suppress Bot responses to same commands for a few seconds, 
// set the desired thresh in seconds. If you want to disable this feature, set the value to 0 seconds.
$config['duplicate_message_cuttoff_seconds'] = 20;


// logging information:
// just how to name the log files
$config['log_file'] = 'IzyBot';
$config['log_file_irc'] = 'IzyBot_irc';


// The name that you want the bot to identify itself in your Twitch Chat.
$config['bot_name'] = 'IzyBot';


// set the desired log level according to below rules:
//
// DEBUG to see all messages
// INFO to see only info and error messages
// ERROR to see only error messages
//
$config['log_level'] = 'INFO';


// Polls config:
// 
$config['poll_help_message'] = '<poll\'s duration in minutes> <free text describing the poll>';
$config['admin_makepoll_keyword'] = '!makepoll';
$config['admin_cancelpoll_keyword'] = '!cancelpoll';
$config['votecommand_keyword'] = '!vote';
$config['new_poll_announcement_message'] = 'Новое голосование на срок';
$config['poll_closure_announcement_message'] = 'Голосование закрыто.';
