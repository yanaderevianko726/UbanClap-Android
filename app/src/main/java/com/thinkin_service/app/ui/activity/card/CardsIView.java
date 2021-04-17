package com.thinkin_service.app.ui.activity.card;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.Card;

import java.util.List;

/**
 * Created by santhosh@appoets.com on 19-05-2018.
 */
public interface CardsIView extends MvpView {
    void onSuccess(List<Card> cardList);

    void onError(Throwable e);
}
