<?php
// $Id: privatemsg_bulkmail.admin.inc,v 1.1 2011/02/05 19:54:11 haagendazs Exp $

/**
 * @file
 * Admin functions for PrivateMSG Bulk Mail module.
 */

/**
 * Administration callback for Views Search admin page.
 */
function privatemsg_bulkmail_admin_settings_form() {

  // Define a fieldset for the admin settings
  $form['settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('PrivateMSG Bulk Mail Settings'),
    '#description' => t('Configure the Bulk Mail module.'),
  );

  $form['settings']['bulkmail_user_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Bulk Mail User ID'),
    '#description' => t('All bulk mail will be sent using this user ID. Ideally, you should create a new user that is only used for this purpose, but you may use any existing user. Please note that users will <em>not</em> be able to reply to messages from this user anymore.'),
    '#size' => 6,
    '#required' => TRUE,
    '#default_value' => variable_get('bulkmail_user_id', ''),
  );

  $form['settings']['bulkmail_prevent_login'] = array(
    '#type' => 'checkbox',
    '#title' => t('Prevent Bulk Mail user from logging in'),
    '#description' => t('During the login process, the PrivateMSG module counts the number of new and sent messages for a user. If you plan to send hundreds of thousands of messages from one user, you could run into performance problems when that user logs in. Check this box to prevent that from happening. This box cannot be selected if the Bulk Mail user is user 1.'),
    '#default_value' => variable_get('bulkmail_prevent_login', ''),
  );

  $form['settings']['bulkmail_no_reply_message'] = array(
    '#type' => 'textfield',
    '#title' => t('Explanatory message describing why users cannot reply to a bulk mail'),
    '#description' => t('Optionally, you can display a status message letting users know why they cannot reply to a bulk mail. This message will be displayed when a user views any message from the bulk mail user. Leave this empty to display no message.'),
    '#size' => 60,
    '#maxlength' => 128,
    '#default_value' => variable_get('bulkmail_no_reply_message', ''),
  );

  $form['settings']['bulkmail_batch_delete_limit'] = array(
    '#type' => 'select',
    '#title' => t('Number of messages to send per batch process'),
    '#description' => t('Bulk mails are sent out using Drupal\'s batch API. This defines the number of messages sent out per batch process. If you set this to a higher number, your bulk mail will be sent out faster. If you set this number too high, your bulk mail delivery will crash if your server runs out of memory.'),
    '#options' => drupal_map_assoc(array(10, 20, 30, 50, 100, 250)),
    '#default_value' => variable_get('bulkmail_batch_delete_limit', 10),
  );

  return system_settings_form($form);

}



/**
 * Validation callback for bulk mail admin settings
 */
function privatemsg_bulkmail_admin_settings_form_validate($form, &$form_state) {

  // Make sure the user id set exists
  $username = db_result(db_query("SELECT name FROM {users} WHERE uid = %d", $form_state['values']['bulkmail_user_id']));
  if (!$username) {
    form_set_error('bulkmail_user_id', t('The User ID you selected does not exist.'));
  }

  // Make sure the user doesn't select 0 for the bulkmail user
  if ($form_state['values']['bulkmail_user_id'] == 0) {
    form_set_error('bulkmail_user_id', t('You have to select a user id other than 0'));
  }

  // Make sure the user doesn't prevent user 1 from logging in
  if ($form_state['values']['bulkmail_prevent_login'] && $form_state['values']['bulkmail_user_id'] == 1) {
    form_set_error('bulkmail_prevent_login', t('You can\'t prevent User 1 from logging in to the site. Either select a different User ID or remove the "Prevent Bulk Mail user from logging in" checkbox. '));
  }

}



/**
 * Form callback for sending a bulk email
 */
function privatemsg_bulkmail_admin_send_form(&$form_state) {

  if (!variable_get('bulkmail_user_id', '')) {
    $bulkmail_admin_link = array('!click' => l('click here', 'admin/settings/messages/bulkmail/settings'));
    drupal_set_message(t('You need to configure this module before sending out a bulk mail (!click).', $bulkmail_admin_link), 'warning');
    return;
  }

  // Add some simple CSS
  drupal_add_css(drupal_get_path('module', 'privatemsg_bulkmail') . '/styles/privatemsg_bulkmail_form.css');

  if ($form_state['submitted']) {
    drupal_set_message(t('Your bulk mail has <em>not</em> been sent yet. Scroll down to the bottom of the page to see the number of recipients and finalize your bulk mail.'), 'warning');
  }

  // Define a fieldset for the role filter
  $form['role'] = array(
    '#type' => 'fieldset',
    '#title' => t('Role Selection'),
  );

  $role_include_options = user_roles(TRUE);
  ksort($role_include_options);
  $form['role']['role_include'] = array(
    '#type' => 'radios',
    '#title' => t('Roles to Include'),
    '#description' => t('Select the roles you want to send your bulk mail to.'),
    '#options' => $role_include_options,
    '#required' => TRUE,
    '#default_value' => (isset($form_state['values']['role_include'])) ? $form_state['values']['role_include'] : '',
  );

  $role_exclude_options = user_roles(TRUE);
  $role_exclude_options[1] = "None";
  ksort($role_exclude_options);
  $form['role']['role_exclude'] = array(
    '#type' => 'radios',
    '#title' => t('Roles to Exclude'),
    '#description' => t('Optionally, select a role that should be excluded, usually used in combination with the authenticated role. Example (assuming there is a role called "admin"): Send a bulk mail to all authenticated users that are not admins.'),
    '#options' => $role_exclude_options,
//    '#options' => array_merge(array('1' => 'None'), user_roles(TRUE)),
    '#default_value' => (isset($form_state['values']['role_exclude'])) ? $form_state['values']['role_exclude'] : 1,
  );

  $form['user'] = array(
    '#type' => 'fieldset',
    '#title' => t('User Date Filter'),
  );

  $form['user']['date_filter'] = array(
    '#type' => 'select',
    '#title' => t('Date Filter'),
    '#description' => t('Optionally, you can limit the recipients by join date or last login date'),
    '#options' => array(
      '0' => t('None'),
      'join_date' => t('Join Date'),
      'last_login' => t('Last Login'),
    ),
    '#default_value' => (isset($form_state['values']['date_filter'])) ? $form_state['values']['date_filter'] : 0,
  );

  $form['user']['filter_date'] = array(
    '#type' => 'date',
    '#title' => t('Filter Date'),
    '#description' => t('This filter is only relevant if you select either "Join Date" or "Last Login" in the dropdown above. If you select "Join Date", the recipients of this bulk mail will be limited to users who signed up after the given date. If you select "Last Login", the recipients of this bulk mail will be limited to users who logged-in after the given date.'),
    '#default_value' => $form_state['values']['filter_date'],
  );

  $form['message'] = array(
    '#type' => 'fieldset',
    '#title' => t('Define the message you\'d like to send out'),
    '#description' => t('Enter the details of your message.'),
  );

  $form['message']['subject'] = array(
    '#type' => 'textfield',
    '#title' => t('Message Title'),
    '#description' => t('Enter the title for your message (max. 128 characters)'),
    '#size' => 60,
    '#maxlength' => 128,
    '#required' => TRUE,
    '#default_value' => (isset($form_state['values']['subject'])) ? $form_state['values']['subject'] : '',
  );

  $form['message']['body'] = array(
    '#type' => 'textarea',
    '#title' => t('Message Body'),
    '#description' => t('Enter the body for your bulk message'),
    '#required' => TRUE,
    '#rows' => 5,
    '#default_value' => (isset($form_state['values']['body'])) ? $form_state['values']['body'] : '',
  );

  // Add a form for the input format
  $form['message']['format'] = filter_form($form_state['values']['format']);

  // Test Email
  $form['test'] = array(
    '#type' => 'fieldset',
    '#title' => t('Test Bulk Email'),
    '#description' => t('Test the contents of your email before sending out completely. Click on "Send Test Message" to send this bulk mail to only one user for testing purposes.'),
  );

  $form['test']['test_message_username'] = array(
    '#type' => 'textfield',
    '#title' => t('Username'),
    '#description' =>  t('Username to send this test message to.'),
  );

  $form['test']['test_message_send'] = array(
    '#type' => 'submit',
    '#value' => t('Send Test Message'),
    '#validate' => array('privatemsg_bulkmail_admin_send_form_test_validate'),
    '#submit' => array('privatemsg_bulkmail_admin_send_form_test_submit'),
  );

  if ($form_state['submitted'] && $form_state['clicked_button']['#id'] == 'edit-verify-submit') {
    // Finalize Bulk Mail
    $form['finalize'] = array(
      '#type' => 'fieldset',
      '#title' => t('Finalize Bulk Mail'),
      '#description' => t('<b>According to your settings, your bulk mail will be sent to !count recipients</b>.<br />Please verify that this is correct or change your settings. If you click on "Send out bulk mail", your bulk mail will be sent to !count recipients instantly after pressing the button.', array('!count' => $form_state['values']['recipient_count'])),
    );
    $form['finalize']['verify_submit'] = array(
      '#type' => 'submit',
      '#value' => t('Verify settings for bulk mail again'),
      '#submit' => array('privatemsg_bulkmail_admin_send_form_verify'),
    );
    $form['finalize']['finalize_submit'] = array(
      '#type' => 'submit',
      '#value' => t('Send out bulk mail'),
      '#submit' => array('privatemsg_bulkmail_admin_send_form_finalize_submit'),
    );
  }
  else {
    // Verify Bulk Mail
    $form['verify'] = array(
      '#type' => 'fieldset',
      '#title' => t('Verify Bulk Mail'),
      '#description' => t('Click this button to calculate the number of recipients (your bulk mail will <em>not</em> be sent out in this step).'),
    );

    $form['verify']['verify_submit'] = array(
      '#type' => 'submit',
      '#value' => t('Verify settings for bulk mail'),
      '#submit' => array('privatemsg_bulkmail_admin_send_form_verify'),
    );
  }

  return $form;

}



/**
 * Validation callback for sending a test message
 */
function privatemsg_bulkmail_admin_send_form_test_validate($form, &$form_state) {

  $uid = db_result(db_query("SELECT uid FROM {users} WHERE name = '%s'", $form_state['values']['test_message_username']));
  // Make sure this username / user id exists
  if (!is_numeric($uid) || $uid == 0) {
    form_set_error('test_message_username', t('This username doesn\'t exists'));
  }
  // If the user id exists, store it for processing in submit handler
  else {
    $form_state['values']['uid'] = $uid;
  }

}



/**
 * Submit callback for sending a test message
 */
function privatemsg_bulkmail_admin_send_form_test_submit($form, &$form_state) {

  // Load the full account object of the recipient
  $account = user_load($form_state['values']['uid']);
  if (!is_object($account)) {
    return;
  }

  $subject = $form_state['values']['subject'];
  $body = $form_state['values']['body'];
  // Message needs to come from the bulk mail user
  $options = array(
    'author' => user_load(variable_get('bulkmail_user_id', '')),
    'privatemsg_bulkmail_filter_format' => $form_state['values']['format'],
  );
  privatemsg_new_thread(array($account), $subject, $body, $options);

  $text_replacements = array(
    '!username' => $account->name,
    '!uid' => $account->uid
  );
  drupal_set_message(t('Sent a test message to !username (uid = !uid)', $text_replacements));

  // Tell Drupal that we are rebuilding the same form (with default values)
  $form_state['rebuild'] = TRUE;

}



/**
 * Submit handler for bulk mail form's verification.
 * This function counts the number of recipients before sending out
 * the bulk mail.
 */
function privatemsg_bulkmail_admin_send_form_verify($form, &$form_state) {

  // Tell Drupal to rebuild the form and store the number of recipients in $form_state
  $query = privatemsg_bulkmail_admin_send_query($form_state['values'], 'count');
  $form_state['values']['recipient_count'] = db_result(db_query($query));
  $form_state['rebuild'] = TRUE;

}



/**
 * Query Builder
 *
 * Returns either the count or the number of all user ids.
 *
 * @param $form_state
 *   Values from form_state
 * @param $type
 *   Possible values:
 *   1. count (returns the number of results)
 *   2. limit (returns the actual results for users greater than passed user id
 * @param $count
 *   False by default. Returns number of results only if set to TRUE
 * @return
 *   User IDs or number of users to send bulk mail to
 */
function privatemsg_bulkmail_admin_send_query($values = '', $type = 'count') {

  if (!is_array($values)) {
    return;
  }

  // Determine if results or just the count should be returned
  if ($type == 'count') {
    $query['select'] = "SELECT count(u.uid) FROM {users} u";
  }
  else {
    $query['select'] = "SELECT u.uid FROM {users} u";
  }

  // Determine query parameters when roles should be excluded AND included
  if ($values['role_exclude'] && $values['role_exclude'] != 1) {
    // Special case for just authenticated users (user role 2, doesn't exists in users_roles table)
    if ($values['role_include'] == 2) {
      $replacements = array('@role_exclude' => $values['role_exclude']);
      $query['where'] = t("WHERE u.uid NOT IN (SELECT ur.uid FROM {users_roles} ur WHERE ur.rid = @role_exclude)", $replacements);
    }
    else {
      $replacements = array('@role_include' => $values['role_include'], '@role_exclude' => $values['role_exclude']);
      $query['where'] = t("WHERE u.uid NOT IN (SELECT ur.uid FROM {users_roles} ur WHERE ur.rid = @role_exclude) AND u.uid IN (SELECT ur.uid FROM {users_roles} ur WHERE ur.rid = @role_include)", $replacements);
    }
  }
  // Determine query parameters when roles should be included only
  // (sending a mail to all users is handled below)
  elseif ($values['role_include'] != 2) {
    $query['join'] = "LEFT JOIN {users_roles} ur ON u.uid = ur.uid";
    $query['where'] = t("WHERE ur.rid = @role_include", array('@role_include' => $values['role_include']));
  }

  // Define the default ending of the query
  $query['end'] = "AND u.status = 1 AND u.uid != 0 ORDER BY u.uid ASC";

  // For bulk mails to all authenticated users, change the end argument
  if ($values['role_include'] == 2 && $values['role_exclude'] == 1) {
    $query['end'] = preg_replace('/AND u.status = 1/', 'WHERE u.status = 1', $query['end']);
  }

  // If the query is used to return users (e.g. in a batch process), only return user with a user id greater than a passed argument
  if ($type == 'limit') {
    $query['end'] = preg_replace('/ORDER BY u.uid ASC/', 'AND u.uid > %d ORDER BY u.uid ASC', $query['end']);
  }

  // If a date filter option is selected (either join date or last login date), modify the query
  if ($values['date_filter']) {
    $month = $values['filter_date']['month'];
    $day = $values['filter_date']['day'];
    $year = $values['filter_date']['year'];
    $filter_date = $timestamp = mktime(0, 0, 0, $month, $day, $year);
    switch ($values['date_filter']) {
      case 'join_date':  $date_filter = t('u.created > @filter_date', array('@filter_date' => $filter_date)); break;
      case 'last_login': $date_filter = t('u.login > @filter_date', array('@filter_date' => $filter_date)); break;
    }
    $query['end'] = preg_replace('/u.status = 1/', 'u.status = 1 AND ' . $date_filter, $query['end']);
  }

  // Assemble query and return
  $assembled_query = join(' ', $query);
  return $assembled_query;

}



/**
 * Submit handler for sending out bulk mail
 */
function privatemsg_bulkmail_admin_send_form_finalize_submit($form, &$form_state) {

  $batch = array(
    'operations' => array(
      array('privatemsg_bulkmail_admin_batch_send_bulkmail', array($form_state['values'])),
    ),
    'finished' => 'privatemsg_bulkmail_admin_batch_send_bulkmail_finished',
    'title' => t('Bulk Mail Delivery'),
    'init_message' => t('Bulk mail sending process is about to start.'),
    'progress_message' => t('Sending out bulk mail'),
    'error_message' => t('There was an error while sending out your bulk mail.'),
    'file' => drupal_get_path('module', 'privatemsg_bulkmail') . '/includes/privatemsg_bulkmail.admin.inc',
  );

  batch_set($batch);

}



/**
 * Batch callback for sending out bulk mail
 */
function privatemsg_bulkmail_admin_batch_send_bulkmail($values, &$context) {

  // Initialize the sandbox when the batch is running for the first time
  if (!isset($context['sandbox']['progress'])) {
    // Set the progress indicator to 0 (1 indicates that the process has finished)
    $context['sandbox']['progress'] = 0;
    $context['sandbox']['max'] = db_result(db_query(privatemsg_bulkmail_admin_send_query($values, 'count')));
    $context['sandbox']['current_uid'] = 0;
  }

  // Determine the users to be processed
  $limit = variable_get('bulkmail_batch_delete_limit', 10);
  $query = privatemsg_bulkmail_admin_send_query($values, 'limit');
  $result = db_query_range($query, $context['sandbox']['current_uid'], 0, $limit);

  // Send out a message to all users in this batch
  while ($data = db_fetch_object($result)) {
    $account = user_load($data->uid);
    if (is_object($account)) {
      // Message needs to come from the bulk mail user
      // and respect the input format selected for this bulk mail
      $options = array(
        'author' => user_load(variable_get('bulkmail_user_id', '')),
        'privatemsg_bulkmail_filter_format' => $values['format'],
      );
      $privatemsg = privatemsg_new_thread(array($account), $values['subject'], $values['body'], $options);
      if ($privatemsg["success"]) {
        $count++;
        $context['results'][] = $count;
        $context['sandbox']['current_uid'] = $account->uid;
        $context['sandbox']['progress']++;
        $context['message'] = $account->name;
      }
      else {
        $message = t('Bulk Mail error when sending this message to @username.', array('@username' => $account->name));
        $context['sandbox']['current_uid'] = $account->uid;
        $context['sandbox']['progress']++;
        $context['message'] = $message;
      }
    }
  }

  // Let the batch engine know when this process is done
  if ($context['sandbox']['progress'] == $context['sandbox']['max']) {
    $context['finished'] = 1;
  }
  // Calculate the percentage about how many runs have been finished.
  else {
    $context['finished'] = $context['sandbox']['progress'] / $context['sandbox']['max'];
  }

}



/**
 * Batch callback for finished batch process
 */
function privatemsg_bulkmail_admin_batch_send_bulkmail_finished($success, $results, $operations) {

  if ($success) {
    // Here we do something meaningful with the results.
    $message = 'Your bulk mail was successfully sent. ';
    $message .= count($results) .' users received your message.';
  }
  else {
    // An error occurred.
    // $operations contains the operations that remained unprocessed.
    $error_operation = reset($operations);
    $message = t('An error occurred while processing %error_operation with arguments: @arguments', array('%error_operation' => $error_operation[0], '@arguments' => print_r($error_operation[1], TRUE)));
  }

  drupal_set_message($message);

}
