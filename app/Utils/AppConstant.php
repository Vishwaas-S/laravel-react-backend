<?php

namespace App\Utils;

class AppConstant
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    const FREE_SIGN_TIME = 24;
    const STATUS_FAIL = 'fail';
    const STATUS_OK = 'ok';

    const RENT_HOURS = 48;


    // API status codes
    const OK = 200;
    const CREATED = 201;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const UNPROCESSABLE_REQUEST = 422;
    const INTERNAL_SERVER_ERROR = 500;
    const TOKEN_INVALID = 503;

    const BASE_URL = 'http://localhost:8000';

    const OS_TYPE = ['android', 'ios'];

    const OS_ANDROID = "android";
    const OS_IOS = "ios";

    // Queue Type

    const DEFAULT_QUEUE = 'default';
    const TRIP_QUEUE = 'trip';
    //    const OTP_QUEUE = 'OTPQueue';
    //const SEND_TRIP_NOTIFICATION_QUEUE = 'SendTripNotificationQueue'; 2
    //const SEND_ACCEPT_TRIP_NOTIFICATION_QUEUE = 'SendAcceptTripNotificationQueue'; 2
    //    const SEND_CANCEL_TRIP_NOTIFICATION_QUEUE = 'SendCancelTripNotificationQueue'; 2
    //    const SEND_PICKUP_NOTE_NOTIFICATION_QUEUE = 'SendPickupNoteNotificationQueue'; 1
    //    const SEND_PICKUP_LOCATION_NOTIFICATION_QUEUE = 'SendPickupLocationNotificationQueue'; 1
    //    const SEND_START_TRIP_NOTIFICATION_QUEUE = 'SendStartTripNotificationQueue'; 1
    //    const SEND_DRIVER_NOT_FOUND_NOTIFICATION_QUEUE = 'SendDriverNotFoundNotificationQueue'; //1
    //    const SEND_VOUCHER_CODE_QUEUE = 'SendVoucherCodeQueue'; 1
    //    const SEND_TRIP_CLEANING_FEE_STATUS_NOTIFICATION_QUEUE = 'SendTripCleaningFeeStatusNotificationQueue'; 3
    //    const SEND_DRIVER_BIRTHDAY_NOTIFICATION_QUEUE = 'SendDriverBirthdayNotificationQueue'; 1
    //    const SEND_DRIVER_EXPIRY_DOCUMENTS_NOTIFICATION_QUEUE = 'SendDriverExpiryDocumentsNotificationQueue'; 14

    const OTP_VALIDITY = 120;

    const DEFAULT_PAGINATE = 10;

    const USER_GUARD = 'users';
    const DRIVER_GUARD = 'drivers';

    // upload Disk
    const UPLOADIMAGEDISK = 'public';
    const UPLOADDOCDISK = 'private';
}
