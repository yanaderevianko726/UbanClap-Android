package com.thinkin_service.app.ui.activity.main;

import com.thinkin_service.app.base.MvpPresenter;

import java.util.HashMap;

public interface MainIPresenter<V extends MainIView> extends MvpPresenter<V> {

    void getUserInfo();

    void logout(String id);

    void checkStatus();

    void getCategories();
    void getProviders(HashMap<String, Object> params);


    void getNavigationSettings();

    void updateDestination(HashMap<String, Object> obj);

}
