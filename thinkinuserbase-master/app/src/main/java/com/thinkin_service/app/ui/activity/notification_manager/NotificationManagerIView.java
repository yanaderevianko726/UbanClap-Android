package com.thinkin_service.app.ui.activity.notification_manager;

import com.thinkin_service.app.base.MvpView;
import com.thinkin_service.app.data.network.model.NotificationManager;

import java.util.List;

public interface NotificationManagerIView extends MvpView {

    void onSuccess(List<NotificationManager> notificationManager);

    void onError(Throwable e);

}