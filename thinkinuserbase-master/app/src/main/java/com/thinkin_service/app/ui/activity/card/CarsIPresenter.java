package com.thinkin_service.app.ui.activity.card;

import com.thinkin_service.app.base.MvpPresenter;


public interface CarsIPresenter<V extends CardsIView> extends MvpPresenter<V> {
    void card();
}
