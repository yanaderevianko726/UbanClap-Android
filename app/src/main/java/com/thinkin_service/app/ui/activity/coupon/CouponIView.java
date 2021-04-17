package com.thinkin_service.app.ui.activity.coupon;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.PromoResponse;

public interface CouponIView extends MvpView {
    void onSuccess(PromoResponse object);

    void onError(Throwable e);
}
