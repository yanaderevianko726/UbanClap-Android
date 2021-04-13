package com.thinkin_service.app.ui.fragment.categories;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.BannerResponse;
import com.thinkin_service.app.data.network.model.CatageoriesMain;
import com.thinkin_service.app.data.network.model.DataResponse;
import com.thinkin_service.app.data.network.model.PromoResponse;
import com.thinkin_service.app.data.network.model.Provider;
import com.thinkin_service.app.data.network.model.SettingsResponse;
import com.thinkin_service.app.data.network.model.User;

import java.util.List;


public interface CategoriesView extends MvpView {

    void onError(Throwable e);

    void onSuccess(CatageoriesMain catageoriesMain);

    void onSuccessBanner(List<BannerResponse> bannerResponses);

    void onSuccess(DataResponse dataResponse);


    void onSuccess(User user);


    void onDestinationSuccess(Object object);

    void onSuccessLogout(Object object);



    void onSuccess(SettingsResponse response);

    void onSettingError(Throwable e);


}
