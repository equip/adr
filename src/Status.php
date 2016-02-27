<?php

namespace Equip\Adr;

interface Status
{
    const STATUS_CONTINUE = 'Continue';
    const STATUS_SWITCHING_PROTOCOLS = 'Switching Protocols';
    const STATUS_PROCESSING = 'Processing';
    const STATUS_OK = 'OK';
    const STATUS_CREATED = 'Created';
    const STATUS_ACCEPTED = 'Accepted';
    const STATUS_NON_AUTHORITATIVE_INFORMATION = 'Non-Authoritative Information';
    const STATUS_NO_CONTENT = 'No Content';
    const STATUS_RESET_CONTENT = 'Reset Content';
    const STATUS_PARTIAL_CONTENT = 'Partial Content';
    const STATUS_MULTI_STATUS = 'Multi-Status';
    const STATUS_ALREADY_REPORTED = 'Already Reported';
    const STATUS_IM_USED = 'IM Used';
    const STATUS_MULTIPLE_CHOICES = 'Multiple Choices';
    const STATUS_MOVED_PERMANENTLY = 'Moved Permanently';
    const STATUS_FOUND = 'Found';
    const STATUS_SEE_OTHER = 'See Other';
    const STATUS_NOT_MODIFIED = 'Not Modified';
    const STATUS_USE_PROXY = 'Use Proxy';
    const STATUS_TEMPORARY_REDIRECT = 'Temporary Redirect';
    const STATUS_PERMANENT_REDIRECT = 'Permanent Redirect';
    const STATUS_BAD_REQUEST = 'Bad Request';
    const STATUS_UNAUTHORIZED = 'Unauthorized';
    const STATUS_PAYMENT_REQUIRED = 'Payment Required';
    const STATUS_FORBIDDEN = 'Forbidden';
    const STATUS_NOT_FOUND = 'Not Found';
    const STATUS_METHOD_NOT_ALLOWED = 'Method Not Allowed';
    const STATUS_NOT_ACCEPTABLE = 'Not Acceptable';
    const STATUS_PROXY_AUTHENTICATION_REQUIRED = 'Proxy Authentication Required';
    const STATUS_REQUEST_TIMEOUT = 'Request Timeout';
    const STATUS_CONFLICT = 'Conflict';
    const STATUS_GONE = 'Gone';
    const STATUS_LENGTH_REQUIRED = 'Length Required';
    const STATUS_PRECONDITION_FAILED = 'Precondition Failed';
    const STATUS_PAYLOAD_TOO_LARGE = 'Payload Too Large';
    const STATUS_URI_TOO_LONG = 'URI Too Long';
    const STATUS_UNSUPPORTED_MEDIA_TYPE = 'Unsupported Media Type';
    const STATUS_RANGE_NOT_SATISFIABLE = 'Range Not Satisfiable';
    const STATUS_EXPECTATION_FAILED = 'Expectation Failed';
    const STATUS_IM_A_TEAPOT = "I'm a teapot";
    const STATUS_MISDIRECTED_REQUEST = 'Misdirected Request';
    const STATUS_UNPROCESSABLE_ENTITY = 'Unprocessable Entity';
    const STATUS_LOCKED = 'Locked';
    const STATUS_FAILED_DEPENDENCY = 'Failed Dependency';
    const STATUS_UPGRADE_REQUIRED = 'Upgrade Required';
    const STATUS_PRECONDITION_REQUIRED = 'Precondition Required';
    const STATUS_TOO_MANY_REQUESTS = 'Too Many Request';
    const STATUS_REQUEST_HEADER_FIELDS_TOO_LARGE = 'Request Header Fields Too Large';
    const STATUS_UNAVAILABLE_FOR_LEGAL_REASONS = 'Unavailable For Legal Reasons';
    const STATUS_INTERNAL_SERVER_ERROR = 'Internal Server Error';
    const STATUS_NOT_IMPLEMENTED = 'Not Implemented';
    const STATUS_BAD_GATEWAY = 'Bad Gateway';
    const STATUS_SERVICE_UNAVAILABLE = 'Service Unavailable';
    const STATUS_GATEWAY_TIMEOUT = 'Gateway Timeout';
    const STATUS_VERSION_NOT_SUPPORTED = 'HTTP Version Not Supported';
    const STATUS_VARIANT_ALSO_NEGOTIATES = 'Variant Also Negotiates';
    const STATUS_INSUFFICIENT_STORAGE = 'Insufficient Storage';
    const STATUS_LOOP_DETECTED = 'Loop Detected';
    const STATUS_NOT_EXTENDED = 'Not Extended';
    const STATUS_NETWORK_AUTHENTICATION_REQUIRED = 'Network Authentication Required';
}
