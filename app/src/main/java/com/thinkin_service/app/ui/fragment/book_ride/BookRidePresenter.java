package com.thinkin_service.app.ui.fragment.book_ride;

import com.thinkin_service.app.base.BasePresenter;
import com.thinkin_service.app.data.network.APIClient;

import java.util.HashMap;

import io.reactivex.android.schedulers.AndroidSchedulers;
import io.reactivex.schedulers.Schedulers;

public class BookRidePresenter<V extends BookRideIView> extends BasePresenter<V> implements BookRideIPresenter<V> {

    @Override
    public void rideNow(HashMap<String, Object> obj) {
        getCompositeDisposable().add(APIClient
                .getAPIClient()
                .sendRequest(obj)
                .observeOn(AndroidSchedulers.mainThread())
                .subscribeOn(Schedulers.io())
                .subscribe(getMvpView()::onSuccess, getMvpView()::onError));
    }

    @Override
    public void getCouponList() {
        getCompositeDisposable().add(APIClient
                .getAPIClient()
                .promocodesList()
                .observeOn(AndroidSchedulers.mainThread())
                .subscribeOn(Schedulers.io())
                .subscribe(getMvpView()::onSuccessCoupon, getMvpView()::onError));
    }
}
