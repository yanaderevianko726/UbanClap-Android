package com.thinkin_service.app.ui.activity.homecategories;

import android.app.AlertDialog;
import android.content.Intent;
import android.net.Uri;
import android.os.Handler;
import android.support.annotation.NonNull;
import android.support.design.widget.NavigationView;
import android.support.v4.app.ActivityOptionsCompat;
import android.support.v4.view.GravityCompat;
import android.support.v4.view.ViewCompat;
import android.support.v4.view.ViewPager;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.text.Editable;
import android.text.TextWatcher;
import android.view.Gravity;
import android.view.MenuItem;
import android.view.View;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.model.LatLng;
import com.google.gson.Gson;
import com.thinkin_service.app.BuildConfig;
import com.thinkin_service.app.MvpApplication;
import com.thinkin_service.app.R;
import com.thinkin_service.app.base.BaseActivity;
import com.thinkin_service.app.common.Constants;
import com.thinkin_service.app.common.CustomDialog;
import com.thinkin_service.app.common.DrawerAction;
import com.thinkin_service.app.common.Global;
import com.thinkin_service.app.common.LocaleHelper;
import com.thinkin_service.app.data.SharedHelper;
import com.thinkin_service.app.data.network.model.BannerResponse;
import com.thinkin_service.app.data.network.model.CatageoriesMain;
import com.thinkin_service.app.data.network.model.DataResponse;
import com.thinkin_service.app.data.network.model.SettingsResponse;
import com.thinkin_service.app.data.network.model.User;
import com.thinkin_service.app.ui.activity.coupon.CouponActivity;
import com.thinkin_service.app.ui.activity.help.HelpActivity;
import com.thinkin_service.app.ui.activity.invite_friend.InviteFriendActivity;
import com.thinkin_service.app.ui.activity.location_pick.LocationPickActivity;
import com.thinkin_service.app.ui.activity.main.LocationUpdate;
import com.thinkin_service.app.ui.activity.main.MainActivity;
import com.thinkin_service.app.ui.activity.notification_manager.NotificationManagerActivity;
import com.thinkin_service.app.ui.activity.passbook.WalletHistoryActivity;
import com.thinkin_service.app.ui.activity.payment.PaymentActivity;
import com.thinkin_service.app.ui.activity.profile.ProfileActivity;
import com.thinkin_service.app.ui.activity.wallet.WalletActivity;
import com.thinkin_service.app.ui.activity.your_trips.YourTripActivity;
import com.thinkin_service.app.ui.adapter.CateoriesAdapter;
import com.thinkin_service.app.ui.adapter.SlidingImage_Adapter;
import com.thinkin_service.app.ui.fragment.categories.CategoriesPresenter;
import com.thinkin_service.app.ui.fragment.categories.CategoriesView;
import com.viewpagerindicator.CirclePageIndicator;

import java.util.List;
import java.util.Objects;

import butterknife.BindView;
import butterknife.ButterKnife;
import butterknife.OnClick;
import butterknife.Unbinder;
import de.hdodenhof.circleimageview.CircleImageView;

import static com.thinkin_service.app.MvpApplication.DATUM;
import static com.thinkin_service.app.MvpApplication.RIDE_REQUEST;
import static com.thinkin_service.app.MvpApplication.isCard;
import static com.thinkin_service.app.MvpApplication.isCash;
import static com.thinkin_service.app.MvpApplication.isDebitMachine;
import static com.thinkin_service.app.MvpApplication.isVoucher;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.PAYMENT_MODE;
import static com.thinkin_service.app.common.Constants.Status.EMPTY;
import static com.thinkin_service.app.data.SharedHelper.getKey;
import static com.thinkin_service.app.data.SharedHelper.key.PROFILE_IMG;
import static com.thinkin_service.app.data.SharedHelper.putKey;

public class HomeCategoriesActivity extends BaseActivity implements
        NavigationView.OnNavigationItemSelectedListener, CategoriesView {

    CateoriesAdapter adapter;
    CatageoriesMain catageoriesMain;
    protected final int REQUEST_PICK_LOCATION = 3;
    CustomDialog dialog;

    CirclePageIndicator indicator;
    @BindView(R.id.recycler_main_cat)
    RecyclerView recyclerViewMain;
    @BindView(R.id.ed_search)
    EditText searchText;

    @BindView(R.id.menu)
    ImageView menu;

    @BindView(R.id.drawer_layout)
    DrawerLayout drawerLayout;


    private CircleImageView picture;
    private TextView name;
    private TextView sub_name;
    ViewPager mPager;
    private NavigationView navigationView;
    private CategoriesPresenter<HomeCategoriesActivity> presenter = new CategoriesPresenter<>();
    private int NUM_PAGES, currentPage;

    private DataResponse checkStatusResponse = new DataResponse();

    @Override
    protected int getLayoutId() {
        return R.layout.categories_layout_main;
    }

    @Override
    protected void initView() {

        ButterKnife.bind(this);
        presenter.attachView(this);
        presenter.getUserInfo();
        dialog = new CustomDialog(this);
        mPager = (ViewPager) findViewById(R.id.pager);
        indicator = (CirclePageIndicator) findViewById(R.id.indicator);
        searchText.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence s, int start, int count, int after) {

            }

            @Override
            public void onTextChanged(CharSequence s, int start, int before, int count) {


            }

            @Override
            public void afterTextChanged(Editable s) {
                if (adapter != null) {
                    adapter.getFilter().filter(s);
                }
            }
        });
        navigationView = findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);
        View headerView = navigationView.getHeaderView(0);
        picture = headerView.findViewById(R.id.picture);
        name = headerView.findViewById(R.id.name);
        sub_name = headerView.findViewById(R.id.sub_name);
        headerView.setOnClickListener(v -> {
            ActivityOptionsCompat options = ActivityOptionsCompat.makeSceneTransitionAnimation(
                    this, picture, ViewCompat.getTransitionName(picture));
            startActivity(new Intent(this, ProfileActivity.class), options.toBundle());
        });
        presenter.checkStatus();
        drawerLayout.addDrawerListener(new DrawerLayout.DrawerListener() {
            @Override
            public void onDrawerSlide(@NonNull View view, float v) {

            }

            @Override
            public void onDrawerOpened(@NonNull View view) {
                presenter.getNavigationSettings();
            }

            @Override
            public void onDrawerClosed(@NonNull View view) {

            }

            @Override
            public void onDrawerStateChanged(int i) {

            }
        });

        dialog.show();
        presenter.checkStatus();

        if (Global.banner == null) {
            presenter.getBanners();
        } else {

            init(Global.banner);


        }
        if (Global.catMainRes == null) {
            presenter.getCategories();
        } else {
            catageoriesMain = Global.catMainRes;
            setCatergories();

        }


    }

    private void setCatergories() {

        if (catageoriesMain.getServiceTypes() != null && catageoriesMain.getServiceTypes().size() > 0) {
            adapter = new CateoriesAdapter(this, catageoriesMain.getServiceTypes());
            recyclerViewMain.setLayoutManager(new GridLayoutManager(this, 4));
            recyclerViewMain.setAdapter(adapter);
            Global.catMainRes = catageoriesMain;
        }

    }

    private void oprateDrawer() {
        if (drawerLayout.isDrawerOpen(GravityCompat.START))
            drawerLayout.closeDrawer(GravityCompat.START);
        else {
            User user = new Gson().fromJson(getKey(this, "userInfo"), User.class);
            if (user != null) {
                name.setText(String.format("%s %s", user.getFirstName(), user.getLastName()));
                sub_name.setText(user.getEmail());
                SharedHelper.putKey(this, PROFILE_IMG, user.getPicture());
                Glide.with(this)
                        .load(BuildConfig.BASE_IMAGE_URL + user.getPicture())
                        .apply(RequestOptions.placeholderOf(R.drawable.ic_user_placeholder)
                                .dontAnimate()
                                .error(R.drawable.ic_user_placeholder))
                        .into(picture);
            }
            drawerLayout.openDrawer(Gravity.START);
        }
    }

    private void init(List<BannerResponse> bannerResponses) {


        mPager.setAdapter(new SlidingImage_Adapter(this, bannerResponses));


        indicator.setViewPager(mPager);

        final float density = getResources().getDisplayMetrics().density;

        indicator.setRadius(5 * density);

        NUM_PAGES = bannerResponses.size();

        // Auto start of viewpager
        final Handler handler = new Handler();
        final Runnable Update = new Runnable() {
            public void run() {
                if (currentPage == NUM_PAGES) {
                    currentPage = 0;
                }
                mPager.setCurrentItem(currentPage++, true);
            }
        };
//        Timer swipeTimer = new Timer();
//        swipeTimer.schedule(new TimerTask() {
//            @Override
//            public void run() {
//                handler.post(Update);
//            }
//        }, 3000, 3000);

        // Pager listener over indicator
        indicator.setOnPageChangeListener(new ViewPager.OnPageChangeListener() {

            @Override
            public void onPageSelected(int position) {
                currentPage = position;

            }

            @Override
            public void onPageScrolled(int pos, float arg1, int arg2) {

            }

            @Override
            public void onPageScrollStateChanged(int pos) {

            }
        });

    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);


    }

    @OnClick({R.id.menu})
    public void onViewClicked(View view) {
        switch (view.getId()) {
            case R.id.menu:
                if (drawerLayout.isDrawerOpen(GravityCompat.START))
                    drawerLayout.closeDrawer(GravityCompat.START);
                else {
                    User user = new Gson().fromJson(getKey(this, "userInfo"), User.class);
                    if (user != null) {
                        name.setText(String.format("%s %s", user.getFirstName(), user.getLastName()));
                        sub_name.setText(user.getEmail());
                        SharedHelper.putKey(this, PROFILE_IMG, user.getPicture());
                        Glide.with(this)
                                .load(BuildConfig.BASE_IMAGE_URL + user.getPicture())
                                .apply(RequestOptions.placeholderOf(R.drawable.ic_user_placeholder)
                                        .dontAnimate()
                                        .error(R.drawable.ic_user_placeholder))
                                .into(picture);
                    }
                    drawerLayout.openDrawer(Gravity.START);
                }

                break;


        }
    }


    @Override
    public boolean onNavigationItemSelected(@NonNull MenuItem menuItem) {
        switch (menuItem.getItemId()) {
            case R.id.nav_payment:
                startActivity(new Intent(this, PaymentActivity.class));
                break;
            case R.id.nav_your_trips:
                startActivity(new Intent(this, YourTripActivity.class));
                break;
            case R.id.nav_coupon:
                startActivity(new Intent(this, CouponActivity.class));
                break;
            case R.id.nav_wallet:
                startActivity(new Intent(this, WalletActivity.class));
                break;
            case R.id.nav_passbook:
                startActivity(new Intent(this, WalletHistoryActivity.class));
                break;
//            case R.id.nav_settings:
//                startActivity(new Intent(this, SettingsActivity.class));
//                break;
            case R.id.nav_help:
                startActivity(new Intent(this, HelpActivity.class));
                break;
            case R.id.nav_share:
                shareApp();
                break;
            case R.id.nav_become_driver:
                alertBecomeDriver();
                break;
            case R.id.nav_notification:
                startActivity(new Intent(this, NotificationManagerActivity.class));
                break;
            case R.id.nav_invite_friend:
                startActivity(new Intent(this, InviteFriendActivity.class));
                break;
            case R.id.nav_logout:
                ShowLogoutPopUp();
                break;
        }


        DrawerLayout drawer = findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return false;
    }

    @Override
    public void onSuccess(CatageoriesMain catageoriesMain) {
        this.catageoriesMain = catageoriesMain;
        setCatergories();
    }

    @Override
    public void onSuccessBanner(List<BannerResponse> bannerResponses) {
        init(bannerResponses);

    }

    @Override
    public void onSuccess(DataResponse dataResponse) {
        this.checkStatusResponse = dataResponse;
        updatePaymentEntities();

        if (!Objects.requireNonNull(dataResponse.getData()).isEmpty()) {
            if (!dataResponse.getData().get(0).getStatus().equals("EMPTY")) {
                new Handler().postDelayed(new Runnable() {
                    @Override
                    public void run() {
                        dialog.dismiss();
                        startActivity(new Intent(HomeCategoriesActivity.this, MainActivity.class));
                    }
                }, 2500);
            } else
                dialog.dismiss();
        } else
            dialog.dismiss();

    }




    @Override
    public void onSuccess(@NonNull User user) {
        String dd = LocaleHelper.getLanguage(this);
        String userLanguage = (user.getLanguage() == null) ? Constants.Language.ENGLISH : user.getLanguage();
        if (!userLanguage.equalsIgnoreCase(dd)) {
            LocaleHelper.setLocale(getApplicationContext(), user.getLanguage());
            Intent intent = new Intent(this, MainActivity.class);
            startActivity(intent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TASK |
                    Intent.FLAG_ACTIVITY_NEW_TASK));
        }

        SharedHelper.putKey(this, "lang", user.getLanguage());
        SharedHelper.putKey(this, "stripe_publishable_key", user.getStripePublishableKey());
        SharedHelper.putKey(this, "currency", user.getCurrency());
        SharedHelper.putKey(this, "measurementType", user.getMeasurement());
        SharedHelper.putKey(this, "walletBalance", String.valueOf(user.getWalletBalance()));
        SharedHelper.putKey(this, "userInfo", printJSON(user));

        SharedHelper.putKey(this, "referral_code", user.getReferral_unique_id());
        SharedHelper.putKey(this, "referral_count", user.getReferral_count());
        SharedHelper.putKey(this, "referral_text", user.getReferral_text());
        SharedHelper.putKey(this, "referral_total_text", user.getReferral_total_text());

        name.setText(String.format("%s %s", user.getFirstName(), user.getLastName()));
        sub_name.setText(user.getEmail());
        SharedHelper.putKey(this, PROFILE_IMG, user.getPicture());
        Glide.with(this)
                .load(BuildConfig.BASE_IMAGE_URL + user.getPicture())
                .apply(RequestOptions.placeholderOf(R.drawable.ic_user_placeholder)
                        .dontAnimate()
                        .error(R.drawable.ic_user_placeholder))
                .into(picture);
        MvpApplication.showOTP = user.getRide_otp().equals("1");
//        if(user.getWalletBalance() <= 0){
//            startActivity(new Intent(this, WalletActivity.class));
//        }
    }

    @Override
    public void onDestinationSuccess(Object object) {

    }

    @Override
    public void onSuccess(SettingsResponse response) {
        if (response.getReferral().getReferral().equalsIgnoreCase("1")) navMenuVisibility(true);
        else navMenuVisibility(false);
    }

    private void navMenuVisibility(boolean visibility) {
        navigationView.getMenu().findItem(R.id.nav_invite_friend).setVisible(visibility);
    }

    @Override
    public void onSettingError(Throwable e) {
        navMenuVisibility(false);
    }






    public void updatePaymentEntities() {
        if (checkStatusResponse != null) {
            isCash = checkStatusResponse.getCash() == 1;
            isCard = checkStatusResponse.getCard() == 1;
            isDebitMachine = checkStatusResponse.getDebitMachine() == 1;
            isVoucher = checkStatusResponse.getVoucher() == 1;

            MvpApplication.isPayumoney = checkStatusResponse.getPayumoney() == 1;
            MvpApplication.isPaypal = checkStatusResponse.getPaypal() == 1;
            MvpApplication.isBraintree = checkStatusResponse.getBraintree() == 1;
            MvpApplication.isPaypalAdaptive = checkStatusResponse.getPaypal_adaptive() == 1;
            MvpApplication.isPaytm = checkStatusResponse.getPaytm() == 1;

            SharedHelper.putKey(this, "currency", checkStatusResponse.getCurrency());
            if (isCash) RIDE_REQUEST.put(PAYMENT_MODE, Constants.PaymentMode.CASH);
            else if (isCard) RIDE_REQUEST.put(PAYMENT_MODE, Constants.PaymentMode.CARD);
            else if (isDebitMachine)
                RIDE_REQUEST.put(PAYMENT_MODE, Constants.PaymentMode.DEBIT_MACHINE);
            else if (isVoucher) RIDE_REQUEST.put(PAYMENT_MODE, Constants.PaymentMode.VOUCHER);
        }
    }

    public void ShowLogoutPopUp() {
        AlertDialog.Builder alertDialogBuilder = new AlertDialog.Builder(this);
        alertDialogBuilder
                .setMessage(getString(R.string.are_sure_you_want_to_logout)).setCancelable(false)
                .setPositiveButton(getString(R.string.yes), (dialog, id) -> presenter.logout(getKey(this, "user_id")))
                .setNegativeButton(getString(R.string.no), (dialog, id) -> dialog.cancel());
        AlertDialog alertDialog = alertDialogBuilder.create();
        alertDialog.show();
    }

    private void alertBecomeDriver() {
        Intent intent = new Intent(Intent.ACTION_VIEW);
        intent.setData(Uri.parse("https://play.google.com/store/apps/details?id=" + BuildConfig.DRIVER_PACKAGE));
        intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK
                | Intent.FLAG_ACTIVITY_CLEAR_TOP
                | Intent.FLAG_ACTIVITY_NO_ANIMATION);
        startActivity(intent);
    }


    @Override
    public void onResume() {
        super.onResume();
    }
}