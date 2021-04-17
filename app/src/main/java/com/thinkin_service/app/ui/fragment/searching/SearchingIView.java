package com.thinkin_service.app.ui.fragment.searching;

import com.thinkin_service.app.base.MvpView;

public interface SearchingIView extends MvpView {
    void onSuccess(Object object);

    void onError(Throwable e);
}
