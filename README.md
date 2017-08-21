

# ADMIN COMMANDS:
Unless, you have defined otherwise in the wrapper.php, the bot supports the below admin reserved commands:

!addcmd: used to add a new command. the command will be available to all.

!editcmd: used to update the response of an existing command.

!removecmd: used to remove an existing command.

!addadmin: used to add a new username to the admin group. This admin group is not necessarily the same with the Mods. if you want to make a person a Mod to your channel, you will have to explicitly add him to the Bots admin group.

!removeadmin: used to remove a user from the bot's admin group.

!addperiodicmsg: used to add some message to periodically sent out in the chat.

!removeperiodicmsg: used to remove a message from the list of messages periodically sent out in the chat. You need to type the whole sentence that you want to remove, exactly as  is when you see it in chat.

!makepoll: used to create a new poll. Command syntax is expected to be: !makepoll <poll duration in seconds> <free text describing the poll and the available options to vote (options need to be numeric and less than 5 digits, meaning up to 99999)>

!cancelpoll: used to cancel the active poll.

!giveaway-start and !giveaway-end: start and stop the giveaway period, throughout it viewers can join the giveaway.

!giveaway-status: check the current status of the giveaway function, and how many viewers have joined

!giveaway-reset: reset the giveaway. run this before starting a new giveaway.

!giveaway-winner: have Izybot pick up a winner from the eligible viewers list.


# USER COMMANDS:
special reserved commands that are already configured:

!help: will reply the list of available commands for the users (not including the admin commands).,

!uptime: will reply the uptime of the bot. This should not be assumed it is the same as the uptime of the stream (unless you start the bot simultaneously with the stream session).

!botinfo: a command to print information about this bot and where people can find it.
