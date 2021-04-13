package com.thinkin_service.app.ui.activity.past_trip_detail;

import com.thinkin_service.app.base.MvpPresenter;

public interface PastTripDetailsIPresenter<V extends PastTripDetailsIView> extends MvpPresenter<V> {

    void getPastTripDetails(Integer requestId);
}
