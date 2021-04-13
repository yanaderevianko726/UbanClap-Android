package com.thinkin_service.app.ui.activity.coupon;

import com.thinkin_service.app.base.MvpPresenter;

public interface CouponIPresenter<V extends CouponIView> extends MvpPresenter<V> {
    void coupon();
}
