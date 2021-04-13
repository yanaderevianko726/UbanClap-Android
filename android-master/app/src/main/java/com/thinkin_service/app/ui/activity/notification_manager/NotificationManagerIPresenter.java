package com.thinkin_service.app.ui.activity.notification_manager;

import com.thinkin_service.app.base.MvpPresenter;

public interface NotificationManagerIPresenter<V extends NotificationManagerIView> extends MvpPresenter<V> {
    void getNotificationManager();
}
