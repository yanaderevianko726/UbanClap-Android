package com.thinkin_service.app.ui.fragment.rate;

import com.thinkin_service.app.base.MvpPresenter;

import java.util.HashMap;

public interface RatingIPresenter<V extends RatingIView> extends MvpPresenter<V> {

    void rate(HashMap<String, Object> obj);
}
