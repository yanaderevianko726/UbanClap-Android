package com.thinkin_service.app.base;

import android.app.Activity;

public interface MvpView {

    Activity baseActivity();

    void showLoading();

    void hideLoading() throws Exception;

    void onSuccessLogout(Object object);

    void onError(Throwable throwable);
}
