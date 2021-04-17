package com.thinkin_service.app.ui.activity.upcoming_trip_detail;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.Datum;

import java.util.List;

public interface UpcomingTripDetailsIView extends MvpView {

    void onSuccess(List<Datum> upcomingTripDetails);

    void onError(Throwable e);
}
