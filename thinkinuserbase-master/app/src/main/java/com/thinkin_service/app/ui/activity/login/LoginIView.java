package com.thinkin_service.app.ui.activity.login;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.ForgotResponse;
import com.thinkin_service.app.data.network.model.Token;

public interface LoginIView extends MvpView {
    void onSuccess(Token token);

    void onSuccess(ForgotResponse object);

    void onError(Throwable e);
}
