package com.thinkin_service.app.ui.activity.splash;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.CheckVersion;
import com.thinkin_service.app.data.network.model.DataResponse;
import com.thinkin_service.app.data.network.model.Service;
import com.thinkin_service.app.data.network.model.User;

import java.util.List;

public interface SplashIView extends MvpView {

    void onSuccess(List<Service> serviceList);

    void onSuccess(User user);

    void onError(Throwable e);

    void onSuccess(CheckVersion checkVersion);


}
