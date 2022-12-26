<?php

/**
 * Checks whether a password is valid or not
 * 
 * @param string $password   the password to be validated
 * @param string &$message   the error message specifying the issue with the password
 */
function isValidPassword(string $password, string &$message = null): bool
{
  $message = null;
  if (strlen($password) < 8) {
    $message = "Password must be 8 characters or longer";
  } else if (!limitedToChars($password, 'a-z0-9\-_', 'password', $message)) {
  } else if (!preg_match("/[a-z]/i", $password)) {
    $message = "Password must contain at least one letter";
  } else if (!preg_match("/\d/i", $password)) {
    $message = "Password must contain at least one number";
  } else if (!preg_match('/^[a-z]/i', $password)) {
    $message = "Password must start with a letter";
  }
  return !isset($message);    // return true if there isn't an error message
  // return $message == "";
}


/**
 * Checks whether a name is valid or not
 * 
 * @param string $name       the name to be validated
 * @param string $field_name the name of the field to be displayed in the error message
 * @param string &$message   the error message specifying the issue with the name
 */
function isValidName(string $name, string $field_name = 'Name', string &$message = null): bool
{
  // echo strlen($name);
  if (strlen($name) < 3)
    $message = "$field_name cannot be shorter than 3 characters";
  else if (strlen($name) > 15)
    $message = "$field_name cannot be longer than 15 characters";
  else if (!limitedToChars($name, "a-z", $field_name, $message)) {
  }

  return !isset($message);
}


/**
 * Checks whether a phone number is valid or not
 * 
 * @param string $number     the phone number to be validated
 * @param string &$message   the error message specifying the issue with the name
 */
function isValidPhone(string $number, string &$message = null): bool
{
  if (!preg_match('/^(3\d|66)\d{6}$/', $number)) {
    $message = "Invalid phone number";
    return false;
  }
  return true;
}

function isValidEmail(string $email, string &$message = null) : bool
{
  if (!preg_match(
    '/^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$/',
    // '/^([a-z0-9_\-.])+@[[:alnum:]]+(\.[[:alnum:]]+)+$/',
    $email
  )) {
    $message = 'Invalid email';
    return false;
  }
  return true;
}


/**
 * Checks whether a given string is limited to the allowed characters.  This
 * function is intended to be used internally within `validate.php`
 * 
 * @param string $subject    The string to be checked
 * @param string $allowedCharacters
 * The allowed characters in regex-like format.  Note that the allowed
 * characters placed directly inside a regex with case insensitive matching
 * enabled
 * @param string &$message   The error message specifying the issue with the name
 */
function limitedToChars(string $subject, string $allowedCharacters, string $field_name, string &$message = null): bool
{
  if (preg_match_all("/[^$allowedCharacters]/i", $subject, $matches, PREG_SET_ORDER)) {
    // Build a string containing all unallowed characters present in subject
    $out = "";
    $count = 0;
    foreach ($matches as list($char)) {
      // If $char is not found in out
      if (strpos($out, $char) === false) {
        $out .= " " . $char;
        $count++;
      }
    }
    // Output message
    $message = ($count == 1) ?
      "Character " . htmlspecialchars($out) . " is not allowed" :
      "Characters " . htmlspecialchars($out) . " are not allowed";
    $message .= " in $field_name";
    return false;
  }

  return true;
}
