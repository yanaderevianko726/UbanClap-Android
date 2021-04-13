package com.thinkin_service.app.ui.activity.wallet;

import com.appoets.paytmpayment.PaytmObject;
import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.AddWallet;
import com.thinkin_service.app.data.network.model.BrainTreeResponse;
import com.thinkin_service.app.data.network.model.Plan;

import java.util.List;

public interface WalletIView extends MvpView {
    void onSuccess(AddWallet object);

    void onSuccess(PaytmObject object);

    void onSuccess(BrainTreeResponse response);
    void onError(Throwable e);
}
