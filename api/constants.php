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

define('INVALID_CURRENCY_ERROR_MESSAGE', 'Currency is required and should be valid.');

define('MT4_PASSWORD_REQUIRED_ERROR_MESSAGE', 'MT4 Password is required and should not be empty.');

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

define('DEPOSIT_SUCCESS_MESSAGE', 'Your Deposit Is Still Pending Until You Complete The Payment And It Will Be Add To Your Balance During Few Hours');

define('INVALID_ACCOUNT_ERROR_MESSAGE', "Invalid Account Number.");

define('TOKEN_EXPIRED_MESSAGE', "Token Expired.");

define('TTCOPY_INVOICE_REQUIRED_ERROR_MESSAGE', "ttcopy and invoice both are required.");
define('INVALID_FILE_ERROR_MESSAGE', "Invalid file types or sizes.");

define('DEPOSIT_BANKWIRE_SUCCESS_MESSAGE', 'Thank you for submitting the SWIFT /TT copy. Funds will be deposited into your account once received with thanks.');
define('INVALID_METHOD_ACCOUNT_NO_ERROR_MESSAGE', 'methodAccount is required and should contain only numbers.');

define('WITHDRAW_SUCCESS_MESSAGE', 'Your withdrawal request has been delivered, our backoffice department will handle it soon.');

define('BANK_NAME_REQUIRED_ERROR_MESSAGE', 'bankName is required and should not be empty.');

define('BANK_SWIFT_REQUIRED_ERROR_MESSAGE', 'bankSwift is required and should not be empty.');

define('BANK_IBAN_REQUIRED_ERROR_MESSAGE', 'bankIban is required and should not be empty.');

define('ACCOUNT_DELETED_MESSAGE', "Your Account is deleted.");

define('NEW_INVESTOR_PASSWORD_REQUIRED_ERROR_MESSAGE', 'newInvestorPassword is required and should not be empty.');

define('NEW_REAL_PASSWORD_REQUIRED_ERROR_MESSAGE', 'newRealPassword required and should not be empty.');

define('OLD_REAL_PASSWORD_REQUIRED_ERROR_MESSAGE', 'oldRealPassword required and should not be empty.');

define('ACCOUNT_NOT_EDITABLE_ERROR_MESSAGE', 'Account not editable');

define('NOT_ENOUGH_MONEY_ERROR_MESSAGE', 'No Enough Money');

define('INVALID_DATA_ERROR_MESSAGE', 'Invalid Data');

define('PASSWORD_CHANGE_ERROR_MESSAGE', 'Password Change Failed.');

define('PASSWORD_CHANGE_SUCCESS_MESSAGE', 'Password Changed Successfully.');

define('ACCOUNT_NOT_DELETE_ERROR_MESSAGE', 'Account! Cannot Delete');

define('ACCOUNT_ALREDY_DELETE_ERROR_MESSAGE', 'Account! Already Deleted');

define('INVALID_DATE_ERROR_MESSAGE', 'Invalid date format. Both fromDate and toDate must be in Y-m-d format.');

define('DATE_REQUIRED_ERROR_MESSAGE', 'Both fromDate and toDate are required for filter.');


?>
