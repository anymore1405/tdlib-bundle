<?php

namespace Yaroslavche\TDLibBundle\TDLib;

class JsonClient extends AbstractJsonClient
{

    public function setAuthenticationPhoneNumber(string $phoneNumber, ?bool $allowFlashCall = null, ?bool $isCurrentPhoneNumber = null): ResponseInterface
    {
        return $this->query('setAuthenticationPhoneNumber', [
            'phone_number' => $phoneNumber,
            'allow_flash_call' => $allowFlashCall ?? false,
            'is_current_phone_number' => $isCurrentPhoneNumber ?? false,
        ]);
    }

    public function getAuthorizationState(): ResponseInterface
    {
        return $this->query('getAuthorizationState');
    }

    public function getMe(): ResponseInterface
    {
        return $this->query('getMe');
    }
}


// https://core.telegram.org/tdlib/docs/classtd_1_1td__api_1_1_function.html
/*
- [ ] acceptCall
- [ ] acceptTermsOfService
- [ ] addChatMember
- [ ] addChatMembers
- [ ] addFavoriteSticker
- [ ] addLocalMessage
- [ ] addNetworkStatistics
- [ ] addProxy
- [ ] addRecentlyFoundChat
- [ ] addRecentSticker
- [ ] addSavedAnimation
- [ ] addStickerToSet
- [ ] answerCallbackQuery
- [ ] answerCustomQuery
- [ ] answerInlineQuery
- [ ] answerPreCheckoutQuery
- [ ] answerShippingQuery
- [ ] blockUser
- [ ] cancelDownloadFile
- [ ] cancelUploadFile
- [ ] changeChatReportSpamState
- [ ] changeImportedContacts
- [ ] changePhoneNumber
- [ ] changeStickerSet
- [ ] checkAuthenticationBotToken
- [X] checkAuthenticationCode
- [ ] checkAuthenticationPassword
- [ ] checkChangePhoneNumberCode
- [ ] checkChatInviteLink
- [ ] checkChatUsername
- [ ] checkDatabaseEncryptionKey
- [ ] checkEmailAddressVerificationCode
- [ ] checkPhoneNumberConfirmationCode
- [ ] checkPhoneNumberVerificationCode
- [ ] cleanFileName
- [ ] clearAllDraftMessages
- [ ] clearImportedContacts
- [ ] clearRecentlyFoundChats
- [ ] clearRecentStickers
- [ ] close
- [ ] closeChat
- [ ] closeSecretChat
- [ ] createBasicGroupChat
- [ ] createCall
- [ ] createNewBasicGroupChat
- [ ] createNewSecretChat
- [ ] createNewStickerSet
- [ ] createNewSupergroupChat
- [ ] createPrivateChat
- [ ] createSecretChat
- [ ] createSupergroupChat
- [ ] createTemporaryPassword
- [ ] deleteAccount
- [ ] deleteChatHistory
- [ ] deleteChatMessagesFromUser
- [ ] deleteChatReplyMarkup
- [ ] deleteFile
- [ ] deleteLanguagePack
- [ ] deleteMessages
- [ ] deletePassportElement
- [ ] deleteProfilePhoto
- [ ] deleteSavedCredentials
- [ ] deleteSavedOrderInfo
- [ ] deleteSupergroup
- [ ] destroy
- [ ] disableProxy
- [ ] discardCall
- [ ] disconnectAllWebsites
- [ ] disconnectWebsite
- [ ] downloadFile
- [ ] editCustomLanguagePackInfo
- [ ] editInlineMessageCaption
- [ ] editInlineMessageLiveLocation
- [ ] editInlineMessageMedia
- [ ] editInlineMessageReplyMarkup
- [ ] editInlineMessageText
- [ ] editMessageCaption
- [ ] editMessageLiveLocation
- [ ] editMessageMedia
- [ ] editMessageReplyMarkup
- [ ] editMessageText
- [ ] editProxy
- [ ] enableProxy
- [ ] finishFileGeneration
- [ ] forwardMessages
- [ ] generateChatInviteLink
- [ ] getAccountTtl
- [ ] getActiveLiveLocationMessages
- [ ] getActiveSessions
- [ ] getAllPassportElements
- [ ] getArchivedStickerSets
- [ ] getAttachedStickerSets
- [X] getAuthorizationState
- [ ] getBasicGroup
- [ ] getBasicGroupFullInfo
- [ ] getBlockedUsers
- [ ] getCallbackQueryAnswer
- [ ] getChat
- [ ] getChatAdministrators
- [ ] getChatEventLog
- [ ] getChatHistory
- [ ] getChatMember
- [ ] getChatMessageByDate
- [ ] getChatMessageCount
- [ ] getChatPinnedMessage
- [ ] getChatReportSpamState
- [ ] getChats
- [ ] getConnectedWebsites
- [ ] getContacts
- [ ] getCountryCode
- [ ] getCreatedPublicChats
- [ ] getDeepLinkInfo
- [ ] getFavoriteStickers
- [ ] getFile
- [ ] getFileExtension
- [ ] getFileMimeType
- [ ] getGameHighScores
- [ ] getGroupsInCommon
- [ ] getImportedContactCount
- [ ] getInlineGameHighScores
- [ ] getInlineQueryResults
- [ ] getInstalledStickerSets
- [ ] getInviteText
- [ ] getLanguagePackString
- [ ] getLanguagePackStrings
- [ ] getLocalizationTargetInfo
- [ ] getMapThumbnailFile
- [X] getMe
- [ ] getMessage
- [ ] getMessages
- [ ] getNetworkStatistics
- [ ] getOption
- [ ] getPassportAuthorizationForm
- [ ] getPassportElement
- [ ] getPasswordState
- [ ] getPaymentForm
- [ ] getPaymentReceipt
- [ ] getPreferredCountryLanguage
- [ ] getProxies
- [ ] getProxyLink
- [ ] getPublicMessageLink
- [ ] getRecentInlineBots
- [ ] getRecentlyVisitedTMeUrls
- [ ] getRecentStickers
- [ ] getRecoveryEmailAddress
- [ ] getRemoteFile
- [ ] getRepliedMessage
- [ ] getSavedAnimations
- [ ] getSavedOrderInfo
- [ ] getScopeNotificationSettings
- [ ] getSecretChat
- [ ] getStickerEmojis
- [ ] getStickers
- [ ] getStickerSet
- [ ] getStorageStatistics
- [ ] getStorageStatisticsFast
- [ ] getSupergroup
- [ ] getSupergroupFullInfo
- [ ] getSupergroupMembers
- [ ] getSupportUser
- [ ] getTemporaryPasswordState
- [ ] getTextEntities
- [ ] getTopChats
- [ ] getTrendingStickerSets
- [ ] getUser
- [ ] getUserFullInfo
- [ ] getUserPrivacySettingRules
- [ ] getUserProfilePhotos
- [ ] getWallpapers
- [ ] getWebPageInstantView
- [ ] getWebPagePreview
- [ ] importContacts
- [ ] joinChat
- [ ] joinChatByInviteLink
- [ ] leaveChat
- [X] logOut
- [ ] openChat
- [ ] openMessageContent
- [ ] optimizeStorage
- [ ] parseTextEntities
- [ ] pingProxy
- [ ] pinSupergroupMessage
- [ ] processDcUpdate
- [ ] readAllChatMentions
- [ ] recoverAuthenticationPassword
- [ ] recoverPassword
- [ ] registerDevice
- [ ] removeContacts
- [ ] removeFavoriteSticker
- [ ] removeProxy
- [ ] removeRecentHashtag
- [ ] removeRecentlyFoundChat
- [ ] removeRecentSticker
- [ ] removeSavedAnimation
- [ ] removeStickerFromSet
- [ ] removeTopChat
- [ ] reorderInstalledStickerSets
- [ ] reportChat
- [ ] reportSupergroupSpam
- [ ] requestAuthenticationPasswordRecovery
- [ ] requestPasswordRecovery
- [ ] resendAuthenticationCode
- [ ] resendChangePhoneNumberCode
- [ ] resendEmailAddressVerificationCode
- [ ] resendPhoneNumberConfirmationCode
- [ ] resendPhoneNumberVerificationCode
- [ ] resetAllNotificationSettings
- [ ] resetNetworkStatistics
- [ ] searchCallMessages
- [ ] searchChatMembers
- [ ] searchChatMessages
- [ ] searchChatRecentLocationMessages
- [ ] searchChats
- [ ] searchChatsOnServer
- [ ] searchContacts
- [ ] searchHashtags
- [ ] searchInstalledStickerSets
- [ ] searchMessages
- [X] searchPublicChat
- [ ] searchPublicChats
- [ ] searchSecretMessages
- [ ] searchStickers
- [ ] searchStickerSet
- [ ] searchStickerSets
- [ ] sendBotStartMessage
- [ ] sendCallDebugInformation
- [ ] sendCallRating
- [ ] sendChatAction
- [ ] sendChatScreenshotTakenNotification
- [ ] sendChatSetTtlMessage
- [ ] sendCustomRequest
- [ ] sendEmailAddressVerificationCode
- [ ] sendInlineQueryResultMessage
- [ ] sendMessage
- [ ] sendMessageAlbum
- [ ] sendPassportAuthorizationForm
- [ ] sendPaymentForm
- [ ] sendPhoneNumberConfirmationCode
- [ ] sendPhoneNumberVerificationCode
- [ ] setAccountTtl
- [ ] setAlarm
- [X] setAuthenticationPhoneNumber
- [ ] setBio
- [ ] setBotUpdatesStatus
- [ ] setChatClientData
- [ ] setChatDraftMessage
- [ ] setChatMemberStatus
- [ ] setChatNotificationSettings
- [ ] setChatPhoto
- [ ] setChatTitle
- [ ] setCustomLanguagePack
- [ ] setCustomLanguagePackString
- [X] setDatabaseEncryptionKey
- [ ] setFileGenerationProgress
- [ ] setGameScore
- [ ] setInlineGameScore
- [ ] setName
- [ ] setNetworkType
- [ ] setOption
- [ ] setPassportElement
- [ ] setPassportElementErrors
- [ ] setPassword
- [ ] setPinnedChats
- [ ] setProfilePhoto
- [ ] setRecoveryEmailAddress
- [ ] setScopeNotificationSettings
- [ ] setStickerPositionInSet
- [ ] setSupergroupDescription
- [ ] setSupergroupStickerSet
- [ ] setSupergroupUsername
- [ ] setTdlibParameters
- [ ] setUsername
- [ ] setUserPrivacySettingRules
- [ ] terminateAllOtherSessions
- [ ] terminateSession
- [ ] testCallBytes
- [ ] testCallEmpty
- [ ] testCallString
- [ ] testCallVectorInt
- [ ] testCallVectorIntObject
- [ ] testCallVectorString
- [ ] testCallVectorStringObject
- [ ] testGetDifference
- [ ] testNetwork
- [ ] testSquareInt
- [ ] testUseError
- [ ] testUseUpdate
- [ ] toggleBasicGroupAdministrators
- [ ] toggleChatDefaultDisableNotification
- [ ] toggleChatIsMarkedAsUnread
- [ ] toggleChatIsPinned
- [ ] toggleSupergroupInvites
- [ ] toggleSupergroupIsAllHistoryAvailable
- [ ] toggleSupergroupSignMessages
- [ ] unblockUser
- [ ] unpinSupergroupMessage
- [ ] upgradeBasicGroupChatToSupergroupChat
- [ ] uploadFile
- [ ] uploadStickerFile
- [ ] validateOrderInfo
- [ ] viewMessages
- [ ] viewTrendingStickerSets
*/
