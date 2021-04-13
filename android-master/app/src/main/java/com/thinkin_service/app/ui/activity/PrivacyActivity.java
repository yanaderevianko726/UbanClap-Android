package com.thinkin_service.app.ui.activity;

import android.webkit.WebView;

import com.thinkin_service.app.BuildConfig;
import com.thinkin_service.app.R;
import com.thinkin_service.app.base.BaseActivity;

import butterknife.BindView;
import butterknife.ButterKnife;

public class PrivacyActivity extends BaseActivity {

    @BindView(R.id.web_view)
    WebView webView;

    @Override
    public int getLayoutId() {
        return R.layout.activity_privacy;
    }

    @Override
    public void initView() {
        ButterKnife.bind(this);
        webView.loadUrl(BuildConfig.BASE_URL + "privacy");

    }
}
