package com.thinkin_service.app.ui.activity.passbook;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.WalletResponse;

public interface WalletHistoryIView extends MvpView {
    void onSuccess(WalletResponse response);

    void onError(Throwable e);
}
