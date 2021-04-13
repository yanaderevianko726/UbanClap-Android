package com.thinkin_service.app.ui.activity.location_pick;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.AddressResponse;

/**
 * Created by santhosh@appoets.com on 19-05-2018.
 */
public interface LocationPickIView extends MvpView {

    void onError(Throwable e);
}
