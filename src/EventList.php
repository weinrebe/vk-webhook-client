<?php


namespace Weinrebe\VkWebhook;


final class EventList
{
    public const CONFIRMATION = 'confirmation';
    public const MESSAGE_NEW = 'message_new';
    public const MESSAGE_REPLY = 'message_reply';
    public const MESSAGE_EDIT = 'message_edit';
    public const MESSAGE_ALLOW = 'message_allow';
    public const MESSAGE_DENY = 'message_deny';
    public const MESSAGE_TYPING_STATE = 'message_typing_state';
    public const MESSAGE_EVENT = 'message_event';
    public const PHOTO_NEW = 'photo_new';
    public const PHOTO_COMMENT_NEW = 'photo_comment_new';
    public const PHOTO_COMMENT_EDIT = 'photo_comment_edit';
    public const PHOTO_COMMENT_RESTORE = 'photo_comment_restore';
    public const PHOTO_COMMENT_DELETE = 'photo_comment_delete';
    public const AUDIO_NEW = 'audio_new';
    public const VIDEO_NEW = 'video_new';
    public const VIDEO_COMMENT_NEW = 'video_comment_new';
    public const VIDEO_COMMENT_EDIT = 'video_comment_edit';
    public const VIDEO_COMMENT_RESTORE = 'video_comment_restore';
    public const VIDEO_COMMENT_DELETE = 'video_comment_delete';
    public const WALL_POST_NEW = 'wall_post_new';
    public const WALL_REPOST = 'wall_repost';
    public const WALL_REPLY_NEW = 'wall_reply_new';
    public const WALL_REPLY_EDIT = 'wall_reply_edit';
    public const WALL_REPLY_RESTORE = 'wall_reply_restore';
    public const WALL_REPLY_DELETE = 'wall_reply_delete';
    public const LIKE_ADD = 'like_add';
    public const LIKE_REMOVE = 'like_remove';
    public const BOARD_POST_NEW = 'board_post_new';
    public const BOARD_POST_EDIT = 'board_post_edit';
    public const BOARD_POST_RESTORE = 'board_post_restore';
    public const BOARD_POST_DELETE = 'board_post_delete';
    public const MARKET_COMMENT_NEW = 'market_comment_new';
    public const MARKET_COMMENT_EDIT = 'market_comment_edit';
    public const MARKET_COMMENT_RESTORE = 'market_comment_restore';
    public const MARKET_COMMENT_DELETE = 'market_comment_delete';
    public const MARKET_ORDER_NEW = 'market_order_new';
    public const MARKET_ORDER_EDIT = 'market_order_edit';
    public const GROUP_LEAVE = 'group_leave';
    public const GROUP_JOIN = 'group_join';
    public const USER_BLOCK = 'user_block';
    public const USER_UNBLOCK = 'user_unblock';
    public const POLL_VOTE_NEW = 'poll_vote_new';
    public const GROUP_OFFICERS_EDIT = 'group_officers_edit';
    public const GROUP_CHANGE_SETTINGS = 'group_change_settings';
    public const GROUP_CHANGE_PHOTO = 'group_change_photo';
    public const VKPAY_TRANSACTION = 'vkpay_transaction';
    public const APP_PAYLOAD = 'app_payload';
    public const DONUT_SUBSCRIPTION_CREATE = 'donut_subscription_create';
    public const DONUT_SUBSCRIPTION_PROLONGED = 'donut_subscription_prolonged';
    public const DONUT_SUBSCRIPTION_EXPIRED = 'donut_subscription_expired';
    public const DONUT_SUBSCRIPTION_CANCELLED = 'donut_subscription_cancelled';
    public const DONUT_SUBSCRIPTION_PRICE_CHANGED = 'donut_subscription_price_changed';
    public const DONUT_MONEY_WITHDRAW = 'donut_money_withdraw';
    public const DONUT_MONEY_WITHDRAW_ERROR = 'donut_money_withdraw_error';
    public const ALL = '*';
    public const INIT = 'init';
    public const UNKNOWN = 'unknown';
    public const ERROR_JSON = 'error_json';
}