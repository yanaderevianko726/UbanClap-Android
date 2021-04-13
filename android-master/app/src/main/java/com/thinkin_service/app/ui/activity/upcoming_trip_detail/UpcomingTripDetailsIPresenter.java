package com.thinkin_service.app.ui.activity.upcoming_trip_detail;

import com.thinkin_service.app.base.MvpPresenter;

public interface UpcomingTripDetailsIPresenter<V extends UpcomingTripDetailsIView> extends MvpPresenter<V> {

    void getUpcomingTripDetails(Integer requestId);
}
