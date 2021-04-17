package com.thinkin_service.app.ui.activity.setting;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.AddressResponse;

public interface SettingsIView extends MvpView {

    //void onSuccessAddress(Object object);

    void onLanguageChanged(Object object);

    void onError(Throwable e);
}
