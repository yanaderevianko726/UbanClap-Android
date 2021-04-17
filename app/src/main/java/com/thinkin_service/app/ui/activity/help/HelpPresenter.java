package com.thinkin_service.app.ui.activity.help;

import com.thinkin_service.app.base.BasePresenter;
import com.thinkin_service.app.data.network.APIClient;

import io.reactivex.android.schedulers.AndroidSchedulers;
import io.reactivex.schedulers.Schedulers;

public class HelpPresenter<V extends HelpIView> extends BasePresenter<V> implements HelpIPresenter<V> {

    @Override
    public void help() {
        getCompositeDisposable().add(APIClient
                .getAPIClient()
                .help()
                .observeOn(AndroidSchedulers.mainThread())
                .subscribeOn(Schedulers.io())
                .subscribe(getMvpView()::onSuccess, getMvpView()::onError));
    }
}
