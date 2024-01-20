<?php
define('ERROR_STATUS', 'error');

define('SUCCESS_STATUS', 'success');

define('TOKEN_ERROR_MESSAGE', "Invalid Token.");
define('TOKEN_REQUIRED_ERROR_MESSAGE', "Authorization Token Required.");
define('TRANSACTION_SUCCESS_MESSAGE', 'Transaction History Retrieved Successfully');
define('ERROR_MESSAGE', 'Error occurred while processing the request');
define('TYPE_MISSING_ERROR_MESSAGE', 'Type is required');
define('INVALID_TYPE_ERROR_MESSAGE', "Invalid Type!. Required('all',' deposit', 'withdraw' ,'transfer')");
define('ACOOUNT_ALREADY_DELETED_ERROR_MESSAGE', 'Account already deleted.');
define('ACOOUNT_DELETED_SUCCESS_MESSAGE', 'Account  deleted successfully.');
define('SOMTHING_WRONG_ERROR_MESSAGE', "Somthing went wrong! try after some time.");

define('GET_ALL_ACCOUNT_SUCCESS_MESSAGE', 'Account Retrieved Successfully');


define('COPY_FROM_NOT_LIVE_ACCOUNT_ERROR_MESSAGE', "Copy from account is not a live account.");

define('COPY_FROM_INVALID_ACCOUNT_ERROR_MESSAGE', "Invalid CopyFrom account.");


define('COPY_TO_INVALID_ACCOUNT_ERROR_MESSAGE', "Invalid CopyTo account.");



define('COPY_TRADE_SUCCESS_MESSAGE', "Copy trade requested successfully.");
define('COPY_TRADE__ERROR_MESSAGE', "Copy request failed.Make sure your using correct account and password.");

define('ID_REQUIRED_ERROR_MESSAGE', 'Id is required');
define('ACCOUNT_NOT_FOUND_ERROR_MESSAGE', 'Account not found');


define('CHANGE_PASSWOERD_REQUIRED_ERROR_MESSAGE', 'Both newPassword and oldPassword are required');

define('CHANGE_PASSWOERD_EMPTY_ERROR_MESSAGE', 'Both newPassword and oldPassword must be non-empty');


define('CHANGE_PASSWOERD_MATCH_ERROR_MESSAGE', 'oldPassword and confirmPassword  both should not be mathch');


define('PASSWORD_ERROR_MESSAGE', 'Passwords must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter,one special character and one digit');


define('INVALID_PASSWORD_ERROR_MESSAGE', 'Invalid Password');
define('PASSWORD_UPDATED_SUCCESS_MESSAGE', 'Password updated successfully.');

define('INVALID_CURRENCY_ERROR_MESSAGE', 'Invalid Currency.');

define('MT4_PASSWORD_REQUIRED_ERROR_MESSAGE', 'MT4 Password is required.');

define('TRANSFER_AMOUNT_REQUIRED_ERROR_MESSAGE', 'Transfer Amount is required and should have min value of 1 .');

define('TRANSFER_TO_REQUIRED_ERROR_MESSAGE', 'Transfer To is required and should contain Account numbers.');

define('TRANSFER_FROM_REQUIRED_ERROR_MESSAGE', 'Transfer From is required and should contain Account numbers.');


define('TRANSFER_FROM_INVALID_ACCOUNT_ERROR_MESSAGE', "Invalid Transfer From account.");

define('INTERNAL_TRANSFER_SUCCESS_MESSAGE', "Successfully Transfered.");

define('INTERNAL_TRANSFER_ERROR_MESSAGE', "Transfer request failed.Make sure your using correct account and password.");


define('INVALID_ACCOUNT_TYPE_ERROR_MESSAGE', 'Invalid accountType. It should be either 1 or 2.');

define('INVALID_ACCOUNT_GROUP_ERROR_MESSAGE', 'Invalid accountGroup. It should be 1, 2, 3, or 4.');

define('INVALID_MT4LOGIN_NAME_ERROR_MESSAGE', 'Invalid mt4LoginName. It should contain only Account numbers.');





define('MAX_LIVE_ACCOUNT_ERROR_MESSAGE', "Reached Maximum Live Account.");

define('LIVE_ACCOUNT_EXSIST_ERROR_MESSAGE', "Account is already exist in your list.");

define('ACCOUNT_ADDED_SUCCESS_MESSAGE', "Account Successfully added.");


define('ADD_EXISTING_ACCOUNT_ERROR_MESSAGE', "Account Adding request failed.Make sure your using correct account and password.");


define('PROFILE_NOT_COMPLETE_ERROR_MESSAGE', "Please complete your profile first.");

define('DOCUMENT_NOT_UPLOAD_ERROR_MESSAGE', "Please upload your documents first.");


define('LIVE_ACCOUNT_OPENING_SUCCESS_MESSAGE', 'Opening account request processed successfully');

define('GET_USER_PROFILE_SUCCESS_MESSAGE', 'User Profile Retrieved Successfully');

define('GET_USER_PROFILE_UPDATE_SUCCESS_MESSAGE', 'User Profile Updated Successfully');

define('GET_COUNTRIES_SUCCESS_MESSAGE', 'Countries Retrieved Successfully');


define('INVALID_METHOD_NAME_ERROR_MESSAGE', 'Invalid methodName. It should be epay,bankwire or coinbase.');

define('INVALID_ACCOUNT_NO_ERROR_MESSAGE', 'accountNo is required and should contain only numbers.');
define('INVALID_AMOUNT_ERROR_MESSAGE', 'Amount is required and should have  min value of 1.');

?>
