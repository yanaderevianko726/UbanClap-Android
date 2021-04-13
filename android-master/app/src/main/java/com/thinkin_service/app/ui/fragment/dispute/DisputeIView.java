package com.thinkin_service.app.ui.fragment.dispute;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.DisputeResponse;
import com.thinkin_service.app.data.network.model.Help;

import java.util.List;

public interface DisputeIView extends MvpView {

    void onSuccess(Object object);

    void onSuccessDispute(List<DisputeResponse> responseList);

    void onError(Throwable e);

    void onSuccess(Help help);
}
