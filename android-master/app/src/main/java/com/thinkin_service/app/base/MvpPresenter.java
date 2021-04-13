package com.thinkin_service.app.base;

import android.app.Activity;

public interface MvpPresenter<V extends MvpView> {

    Activity activity();

    void attachView(V mvpView);

    void onDetach();

    void logout(String id);

}
