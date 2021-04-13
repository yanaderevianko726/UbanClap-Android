package com.thinkin_service.app.ui.fragment.upcoming_trip;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.Datum;

import java.util.List;

/**
 * Created by santhosh@appoets.com on 19-05-2018.
 */
public interface UpcomingTripIView extends MvpView {
    void onSuccess(List<Datum> datumList);

    void onSuccess(Object object);

    void onError(Throwable e);
}
