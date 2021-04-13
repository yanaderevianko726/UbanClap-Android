package com.thinkin_service.app.ui.activity.help;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.Help;

public interface HelpIView extends MvpView {

    void onSuccess(Help help);

    void onError(Throwable e);
}
