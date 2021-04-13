package com.thinkin_service.app.ui.activity.passbook;

import com.thinkin_service.app.base.MvpPresenter;

public interface WalletHistoryIPresenter<V extends WalletHistoryIView> extends MvpPresenter<V> {
    void wallet();
}
