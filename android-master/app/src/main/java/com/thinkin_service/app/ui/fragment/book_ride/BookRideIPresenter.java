package com.thinkin_service.app.ui.fragment.book_ride;

import com.thinkin_service.app.base.MvpPresenter;

import java.util.HashMap;


public interface BookRideIPresenter<V extends BookRideIView> extends MvpPresenter<V> {
    void rideNow(HashMap<String, Object> obj);

    void getCouponList();
}
