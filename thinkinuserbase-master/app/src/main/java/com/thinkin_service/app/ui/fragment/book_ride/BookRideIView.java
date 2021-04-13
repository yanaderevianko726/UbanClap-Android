package com.thinkin_service.app.ui.fragment.book_ride;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.PromoResponse;


public interface BookRideIView extends MvpView {
    void onSuccess(Object object);

    void onError(Throwable e);

    void onSuccessCoupon(PromoResponse promoResponse);
}
