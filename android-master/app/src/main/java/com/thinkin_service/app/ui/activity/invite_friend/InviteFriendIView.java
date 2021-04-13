package com.thinkin_service.app.ui.activity.invite_friend;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.User;

public interface InviteFriendIView extends MvpView {

    void onSuccess(User user);

    void onError(Throwable e);

}
