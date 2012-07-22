; $Id: README.txt,v 1.1 2011/02/05 19:54:11 haagendazs Exp $

Privatemsg Bulkmail
-------------------
The Privatemsg Bulkmail module is intended for site administrators who want
to send out an identical private message to a large user base (100.000
users and more). An example use case would be an internal notification
to all registered users through a private message.

The Privatemsg module (version 6.x-2.x and higer) offers a feature to send
messages to roles. The following description of the feature set describes
how this module differs from that Privatemsg feature:
- Send out private messages from a specific user (instead of the current user)
- Define a dedicated bulk message user and prevent that user from logging in
  (to prevent performance issues)
- Prevent users from responding to a bulk mail message
- Include AND exclude recipient group of a bulk mail. Example: Send out a bulk
  mail to all authenticated users that are not site admins
- Restrict the recipient group to users who logged in or signed up after a certain date
- Send an individual test message to a specified user before sending out the bulk mail



Installation
------------
To install the Privatemsg Bulkmail module, copy it to the modules directory of
your site (either into 'sites/all/modules' or into 'sites/all/modules/privatemsg')
and visit the module administration page ('admin/build/modules') to enable it.



Permissions
-----------
The privatemsg bulkmail module comes with 2 permissions:
- 'administer privatemsg bulk mail': Determines who can administer the settings
  for this module
- 'send privatemsg bulk mail': Determines who can send out bulk mails



Settings / Configuration
------------------------
The Privatemsg Bulkmail module provides its own setup page at
'admin/settings/messages/bulkmail/settings'.

On this page, users with the appropriate permissions can:
- Define the user id of the bulkmail user. All bulkmail messages will be sent from
  that user. The user needs to exists (and thus the user associated with the user
  id needs to be created first).
- Select an option that prevents the bulkmail user from logging in (optional).
  For sites that send out a large number of private messages in a bulkmail,
  performance issues might occur when the bulk mail user logs in. This happened
  in my test case after sending out ~200.000 messages from one user (the Privatemsg
  module counts read and sent messages at login). To prevent the bulkmail user
  from accidentally logging in, check this option.
- Define a message that will show up when a recipient is reading a bulkmail message.
  For example, this message could explain that the user is not able to reply to a
  bulkmail message.
- Define the number of messages that are sent out per batch process. Bulk emails are
  sent out using Drupal's batch system. If this is set to a higher number, more messages
  will be sent out per batch and thus all bulk mail messages might be sent out faster.
  If this value is set too high, the batch process might fail due to insufficient
  memory available to PHP.



Module Usage
------------
Before this module can be used, the bulkmail user needs to be specified
on the settings page ('admin/settings/messages/bulkmail/settings'). 
Navigate to 'admin/settings/messages/bulkmail' to send out a bulk mail.

On this page, users with the appropriate permissions can:
- Define the roles that should receive the bulk mail (required)
- Define the roles that should be excluded from receiving a bulk mail.
  Example: Send a bulk mail to all authenticated users that are not admins.
- Define a date filter: Limit the recipients of a bulk mail to users
  who either signed up or logged-in after a certain date
- Define the subject line and message of the bulk mail (required)
- Send a test message to a specific users to test the bulk mail message
- Send out the bulk mail: Before the mail can be sent out, click the
  "Verify settings for bulk mail" button to validate the message and
  calculate the number of recipients for the settings. Then, scroll
  down to the bottom of the page again to send out the bulk mail.
  While sending out the bulk mail, do not close your browser. Closing
  your browser will interrupt sending out the bulk mail.


Maintainers
-----------
haagendazs (Daniel Hanold, danny@danielhanold.com)