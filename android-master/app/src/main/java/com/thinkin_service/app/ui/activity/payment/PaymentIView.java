package com.thinkin_service.app.ui.activity.payment;

import com.appoets.paytmpayment.PaytmObject;
import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.BrainTreeResponse;
import com.thinkin_service.app.data.network.model.Card;
import com.thinkin_service.app.data.network.model.CheckSumData;

import java.util.List;

public interface PaymentIView extends MvpView {

    void onSuccess(Object card);

    void onSuccess(BrainTreeResponse response);

    void onSuccess(List<Card> cards);

    void onAddCardSuccess(Object cards);

    void onError(Throwable e);

    void onPayumoneyCheckSumSucess(CheckSumData checkSumData);

    void onPayTmCheckSumSuccess(PaytmObject payTmResponse);

}
