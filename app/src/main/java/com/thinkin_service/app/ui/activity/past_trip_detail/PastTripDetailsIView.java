package com.thinkin_service.app.ui.activity.past_trip_detail;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.Datum;

import java.util.List;

public interface PastTripDetailsIView extends MvpView {

    void onSuccess(List<Datum> pastTripDetails);

    void onError(Throwable e);
}
