package com.thinkin_service.app.ui.fragment.service;

import com.thinkin_service.app.base.BasePresenter;
import com.thinkin_service.app.data.network.APIClient;

import java.util.HashMap;

import io.reactivex.android.schedulers.AndroidSchedulers;
import io.reactivex.schedulers.Schedulers;

public class ServiceTypesPresenter<V extends ServiceTypesIView> extends BasePresenter<V> implements ServiceTypesIPresenter<V> {

    @Override
    public void services() {
        getCompositeDisposable().add(APIClient
                .getAPIClient()
                .services()
                .observeOn(AndroidSchedulers.mainThread())
                .subscribeOn(Schedulers.io())
                .subscribe(getMvpView()::onSuccess, getMvpView()::onError));
    }

    @Override
    public void rideNow(HashMap<String, Object> obj) {
        getCompositeDisposable().add(APIClient
                .getAPIClient()
                .sendRequest(obj)
                .observeOn(AndroidSchedulers.mainThread())
                .subscribeOn(Schedulers.io())
                .subscribe(getMvpView()::onSuccess, getMvpView()::onError));
    }
}