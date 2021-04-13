package com.thinkin_service.app.ui.fragment.cancel_ride;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.CancelResponse;

import java.util.List;

public interface CancelRideIView extends MvpView {
    void onSuccess(Object object);

    void onError(Throwable e);

    void onSuccess(List<CancelResponse> response);

    void onReasonError(Throwable e);
}
