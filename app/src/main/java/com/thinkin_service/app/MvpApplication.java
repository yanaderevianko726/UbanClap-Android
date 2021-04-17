package com.thinkin_service.app;

import android.app.Application;
import android.content.Context;
import android.support.multidex.MultiDex;

import com.crashlytics.android.Crashlytics;
import com.crashlytics.android.core.CrashlyticsCore;
import com.facebook.stetho.Stetho;
import com.thinkin_service.app.common.ConnectivityReceiver;
import com.thinkin_service.app.common.LocaleHelper;
import com.thinkin_service.app.data.network.model.Datum;

import java.util.HashMap;

import io.fabric.sdk.android.Fabric;

//import com.facebook.stetho.Stetho;

public class MvpApplication extends Application {

    private static MvpApplication mInstance;

    public static boolean canGoToChatScreen;
    public static boolean isChatScreenOpen;

    public static boolean isCash = true;
    public static boolean isCard;
    public static boolean isPayumoney;
    public static boolean isPaypal;
    public static boolean isPaytm;
    public static boolean isPaypalAdaptive;
    public static boolean isBraintree;
    public static boolean openChatFromNotification = true;

    //TODO ALLAN - Alterações débito na máquina e voucher
    public static boolean isDebitMachine;
    public static boolean isVoucher;

    public static HashMap<String, Object> RIDE_REQUEST = new HashMap<>();
    public static Datum DATUM = null;
    public static boolean showOTP = true;

    public static synchronized MvpApplication getInstance() {
        return mInstance;
    }

    @Override
    public void onCreate() {
        super.onCreate();

        mInstance = this;

        CrashlyticsCore core = new CrashlyticsCore.Builder().disabled(BuildConfig.DEBUG).build();
        Crashlytics crashlytics = new Crashlytics.Builder().core(core).build();
        Fabric.with(this, crashlytics);

        if (BuildConfig.DEBUG)
            Stetho.initializeWithDefaults(this);

        MultiDex.install(this);
    }

    @Override
    protected void attachBaseContext(Context newBase) {
        super.attachBaseContext(LocaleHelper.onAttach(newBase, "en"));
        MultiDex.install(newBase);
    }

    public void setConnectivityListener(ConnectivityReceiver.ConnectivityReceiverListener listener) {
        ConnectivityReceiver.connectivityReceiverListener = listener;
    }

}
