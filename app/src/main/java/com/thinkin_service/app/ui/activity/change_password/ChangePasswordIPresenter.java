package com.thinkin_service.app.ui.activity.change_password;


import com.thinkin_service.app.base.MvpPresenter;

import java.util.HashMap;


public interface ChangePasswordIPresenter<V extends ChangePasswordIView> extends MvpPresenter<V> {
    void changePassword(HashMap<String, Object> parms);
}
