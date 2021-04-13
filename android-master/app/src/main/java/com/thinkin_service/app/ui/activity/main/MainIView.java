package com.thinkin_service.app.ui.activity.main;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.BannerResponse;
import com.thinkin_service.app.data.network.model.CatageoriesMain;
import com.thinkin_service.app.data.network.model.DataResponse;
import com.thinkin_service.app.data.network.model.Provider;
import com.thinkin_service.app.data.network.model.SettingsResponse;
import com.thinkin_service.app.data.network.model.User;

import java.util.List;

public interface MainIView extends MvpView {

    void onSuccess(User user);

    void onSuccess(DataResponse dataResponse);

    void onDestinationSuccess(Object object);

    void onSuccessLogout(Object object);

    void onSuccess(List<Provider> objects);

    void onError(Throwable e);

    void onSuccess(SettingsResponse response);

    void onSettingError(Throwable e);

    void onSuccess(CatageoriesMain catageoriesMain);


}
