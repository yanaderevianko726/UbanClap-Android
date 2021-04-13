package com.thinkin_service.app.ui.activity.profile;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.User;

public interface ProfileIView extends MvpView {

    void onSuccess(User user);

    void onUpdateSuccess(User user);

    void onError(Throwable e);

    void onSuccessPhoneNumber(Object object);

    void onVerifyPhoneNumberError(Throwable e);
}
