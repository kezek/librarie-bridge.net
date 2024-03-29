// $Id: chatroom.user.add.widget.js,v 1.1.2.6 2009/11/27 13:06:06 justinrandell Exp $

Drupal.behaviors.chatroomUserWidget = function(context) {
  $('#edit-add-user').keypress(function (e) {
    var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
    if (key == 13) {
      e.stopPropagation();
      e.preventDefault();
      var userName = $('#edit-add-user').val();
      if (userName) {
        var allowedUsers = Drupal.settings.chatroomChatForm.allowedUsers;
        var currentUserCount = allowedUsers.length;
        $('#edit-add-user').val('');
        for (var i = 0; i < currentUserCount; i++) {
          if (allowedUsers[i].name == userName) {
            return false;
          }
        }
        Drupal.chatroom.userAdd(userName);
      }
    }
  });
}

Drupal.behaviors.chatroomInviteWidget = function(context) {
  $('#edit-invite-user').keypress(function (e) {
    var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
    if (key == 13) {
      e.preventDefault();
      e.stopPropagation();
      var userName = $('#edit-invite-user').val();
      if (userName) {
        $('#edit-invite-user').val('');
        Drupal.chatroom.userInvite(userName);
      }
    }
  });
}

Drupal.chatroom.userAdd = function(userName) {
  $.ajax({
    type: 'POST',
    url: Drupal.settings.basePath + Drupal.settings.chatroomChatForm.userAddPath + '/' + Drupal.settings.chatroom.chatId,
    dataType: 'json',
    success: Drupal.chatroom.userAddHandler,
    data: { user_name: userName } 
  });
};

Drupal.chatroom.userRemove = function(uid) {
  $.ajax({
    type: 'POST',
    url: Drupal.settings.basePath + Drupal.settings.chatroomChatForm.userRemovePath + '/' + Drupal.settings.chatroom.chatId,
    dataType: 'json',
    success: Drupal.chatroom.userRemoveHandler,
    data: { uid: uid } 
  });
};

Drupal.chatroom.userRemoveHandler = function(response, responseStatus) {
  if (response.data.userRemoved) {
    $('#chatroom-board').append(response.data.userRemoved);
    Drupal.chatroom.scrollToLatestMessage();
  }
};

Drupal.chatroom.userAddHandler = function(response, responseStatus) {
  if (response.data.userAdded) {
    $('#chatroom-board').append(response.data.userAdded);
    Drupal.chatroom.scrollToLatestMessage();
    $('#chatroom-user-list').replaceWith(response.data.usersHtml);
    Drupal.attachBehaviors('#chatroom-user-list');
  }
};

Drupal.chatroom.userInvite = function(userName) {
  $.ajax({
    type: 'POST',
    url: Drupal.settings.basePath + Drupal.settings.chatroomChatForm.userInvitePath + '/' + Drupal.settings.chatroom.chatId,
    dataType: 'json',
    success: Drupal.chatroom.userInviteHandler,
    data: { user_name: userName } 
  });
};

Drupal.chatroom.userInviteHandler = function(response, responseStatus) {
  if (response.data.userInvited) {
    $('#chatroom-board').append(response.data.userInvited);
    Drupal.chatroom.scrollToLatestMessage();
  }
};

// vi:ai:expandtab:sw=2 ts=2 

