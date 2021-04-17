package com.thinkin_service.app.ui.activity.social;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.Token;

/**
 * Created by santhosh@appoets.com on 19-05-2018.
 */
public interface SocialIView extends MvpView {
    void onSuccess(Token token);

    void onError(Throwable e);
}
