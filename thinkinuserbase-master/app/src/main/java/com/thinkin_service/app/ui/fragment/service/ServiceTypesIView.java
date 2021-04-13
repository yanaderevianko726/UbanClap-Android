package com.thinkin_service.app.ui.fragment.service;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.Service;

import java.util.List;

public interface ServiceTypesIView extends MvpView {

    void onSuccess(List<Service> serviceList);

    void onError(Throwable e);

    void onSuccess(Object object);
}
