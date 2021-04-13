/*package com.thinkin_service.app.ui.activity.main;

import android.Manifest;
import android.animation.Animator;
import android.animation.AnimatorListenerAdapter;
import android.animation.ValueAnimator;
import android.app.Activity;
import android.app.AlertDialog;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.IntentFilter;
import android.content.pm.PackageManager;
import android.content.res.Resources;
import android.graphics.Bitmap;
import android.graphics.Canvas;
import android.graphics.Color;
import android.graphics.PorterDuff;
import android.graphics.drawable.Drawable;
import android.location.Address;
import android.location.Geocoder;
import android.location.Location;
import android.location.LocationManager;
import android.net.Uri;
import android.os.Build;
import android.os.Handler;
import android.support.annotation.NonNull;
import android.support.constraint.ConstraintLayout;
import android.support.design.widget.BottomSheetBehavior;
import android.support.design.widget.NavigationView;
import android.support.v4.app.ActivityCompat;
import android.support.v4.app.ActivityOptionsCompat;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentTransaction;
import android.support.v4.content.ContextCompat;
import android.support.v4.view.GravityCompat;
import android.support.v4.view.ViewCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.text.Editable;
import android.text.TextWatcher;
import android.util.Log;
import android.view.Gravity;
import android.view.LayoutInflater;
import android.view.MenuItem;
import android.view.View;
import android.view.animation.LinearInterpolator;
import android.widget.EditText;
import android.widget.FrameLayout;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.akexorcist.googledirection.DirectionCallback;
import com.akexorcist.googledirection.GoogleDirection;
import com.akexorcist.googledirection.constant.TransportMode;
import com.akexorcist.googledirection.model.Direction;
import com.akexorcist.googledirection.model.Leg;
import com.akexorcist.googledirection.model.Route;
import com.akexorcist.googledirection.util.DirectionConverter;
import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.google.android.gms.location.FusedLocationProviderClient;
import com.google.android.gms.location.LocationListener;
import com.google.android.gms.location.LocationServices;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.MapFragment;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.model.BitmapDescriptor;
import com.google.android.gms.maps.model.BitmapDescriptorFactory;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.LatLngBounds;
import com.google.android.gms.maps.model.MapStyleOptions;
import com.google.android.gms.maps.model.Marker;
import com.google.android.gms.maps.model.MarkerOptions;
import com.google.android.gms.maps.model.Polyline;
import com.google.android.gms.tasks.Task;
import com.google.android.libraries.places.api.Places;
import com.google.android.libraries.places.api.net.PlacesClient;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;
import com.google.firebase.messaging.FirebaseMessaging;
import com.google.gson.Gson;
import com.thinkin_service.app.BuildConfig;
import com.thinkin_service.app.MvpApplication;
import com.thinkin_service.app.R;
import com.thinkin_service.app.base.BaseActivity;
import com.thinkin_service.app.chat.ChatActivity;
import com.thinkin_service.app.common.Constants;
import com.thinkin_service.app.common.Global;
import com.thinkin_service.app.common.InfoWindowData;
import com.thinkin_service.app.common.LocaleHelper;
import com.thinkin_service.app.common.PolyUtil;
import com.thinkin_service.app.data.SharedHelper;
import com.thinkin_service.app.data.network.model.CatageoriesMain;
import com.thinkin_service.app.data.network.model.ChildRecursive;
import com.thinkin_service.app.data.network.model.DataResponse;
import com.thinkin_service.app.data.network.model.LatLngFireBaseDB;
import com.thinkin_service.app.data.network.model.Provider;
import com.thinkin_service.app.data.network.model.SettingsResponse;
import com.thinkin_service.app.data.network.model.User;
import com.thinkin_service.app.data.network.model.UserAddress;
import com.thinkin_service.app.ui.activity.coupon.CouponActivity;
import com.thinkin_service.app.ui.activity.help.HelpActivity;
import com.thinkin_service.app.ui.activity.invite_friend.InviteFriendActivity;
import com.thinkin_service.app.ui.activity.location_pick.LocationPickActivity;
import com.thinkin_service.app.ui.activity.notification_manager.NotificationManagerActivity;
import com.thinkin_service.app.ui.activity.passbook.WalletHistoryActivity;
import com.thinkin_service.app.ui.activity.payment.PaymentActivity;
import com.thinkin_service.app.ui.activity.profile.ProfileActivity;
import com.thinkin_service.app.ui.activity.wallet.WalletActivity;
import com.thinkin_service.app.ui.activity.your_trips.YourTripActivity;
import com.thinkin_service.app.ui.adapter.CateoriesAdapter;
import com.thinkin_service.app.ui.adapter.SubCateoriesAdapter;
import com.thinkin_service.app.ui.fragment.RateCardFragment;
import com.thinkin_service.app.ui.fragment.book_ride.BookRideFragment;
import com.thinkin_service.app.ui.fragment.invoice.InvoiceFragment;
import com.thinkin_service.app.ui.fragment.rate.RatingDialogFragment;
import com.thinkin_service.app.ui.fragment.schedule.ScheduleFragment;
import com.thinkin_service.app.ui.fragment.searching.SearchingFragment;
import com.thinkin_service.app.ui.fragment.service.ServiceTypesFragment;
import com.thinkin_service.app.ui.fragment.service_flow.ServiceFlowFragment;

import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Locale;
import java.util.Map;
import java.util.Objects;

import butterknife.BindView;
import butterknife.ButterKnife;
import butterknife.OnClick;
import de.hdodenhof.circleimageview.CircleImageView;

import static android.Manifest.permission.ACCESS_FINE_LOCATION;
import static android.text.TextUtils.isEmpty;
import static com.thinkin_service.app.MvpApplication.DATUM;
import static com.thinkin_service.app.MvpApplication.RIDE_REQUEST;
import static com.thinkin_service.app.MvpApplication.canGoToChatScreen;
import static com.thinkin_service.app.MvpApplication.isCard;
import static com.thinkin_service.app.MvpApplication.isCash;
import static com.thinkin_service.app.MvpApplication.isChatScreenOpen;
import static com.thinkin_service.app.MvpApplication.isDebitMachine;
import static com.thinkin_service.app.MvpApplication.isVoucher;
import static com.thinkin_service.app.common.Constants.BroadcastReceiver.INTENT_FILTER;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.DEST_ADD;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.DEST_LAT;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.DEST_LONG;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.PAYMENT_MODE;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SERVICE_TYPE;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SRC_ADD;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SRC_LAT;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SRC_LONG;
import static com.thinkin_service.app.common.Constants.Status.ARRIVED;
import static com.thinkin_service.app.common.Constants.Status.COMPLETED;
import static com.thinkin_service.app.common.Constants.Status.DROPPED;
import static com.thinkin_service.app.common.Constants.Status.EMPTY;
import static com.thinkin_service.app.common.Constants.Status.PICKED_UP;
import static com.thinkin_service.app.common.Constants.Status.RATING;
import static com.thinkin_service.app.common.Constants.Status.SEARCHING;
import static com.thinkin_service.app.common.Constants.Status.SERVICE;
import static com.thinkin_service.app.common.Constants.Status.STARTED;
import static com.thinkin_service.app.data.SharedHelper.key.PROFILE_IMG;
import static com.thinkin_service.app.data.SharedHelper.key.SOS_NUMBER;

public class MainActivitytest extends BaseActivity implements
        NavigationView.OnNavigationItemSelectedListener,
        OnMapReadyCallback,
        GoogleMap.OnCameraMoveListener,
        GoogleMap.OnCameraIdleListener,
        DirectionCallback,
        MainIView, LocationListener {
    private int selectedId=-1;
    boolean calledCat=false;
    ArrayList< ArrayList<ChildRecursive>> listArrayList=new ArrayList<>();

    private static String CURRENT_STATUS = EMPTY;
    private MainPresenter<MainActivitytest> mainPresenter = new MainPresenter<>();

    CateoriesAdapter adapter;
    CatageoriesMain catageoriesMain;
    @BindView(R.id.llChangeLocation)
    LinearLayout llChangeLocation;

    @BindView(R.id.cat_layout)
    ConstraintLayout ConCatLayout;
    @BindView(R.id.cat_main_layout)
    ConstraintLayout ConCatMainLayout;


    @BindView(R.id.container)
    FrameLayout container;
    @BindView(R.id.recycler_cat)
    RecyclerView recyclerView;
    @BindView(R.id.recycler_main_cat)
    RecyclerView recyclerViewMain;
    @BindView(R.id.ed_search)
    EditText searchText;

    @BindView(R.id.menu)
    ImageView menu;
    @BindView(R.id.ivBack)
    ImageView ivBack;
    @BindView(R.id.gps)
    ImageView gps;
    @BindView(R.id.source)
    TextView sourceTxt;
    @BindView(R.id.destination)
    TextView destinationTxt;
    @BindView(R.id.drawer_layout)
    DrawerLayout drawerLayout;
    @BindView(R.id.top_layout)
    LinearLayout topLayout;
    @BindView(R.id.pick_location_layout)
    LinearLayout pickLocationLayout;
//    @BindView(R.id.changeDestination)
//    LinearLayout llPickWorkAdd;
    @BindView(R.id.llDropLocationContainer)
    LinearLayout llDropLocationContainer;

    //SETAR ID DOS TIPOS DE SERVIÇO
    private static Integer serviceMototaxiID = 10;
    private static Integer serviceMotoboyID = 20;
    String address;
    private GoogleMap mGoogleMap;
    private FusedLocationProviderClient mFusedLocation;
    private MapFragment mapFragment;
    private DatabaseReference mProviderLocation;
    private PlacesClient mPlacesClient;

    private InfoWindowData destinationLeg;

    private boolean isDoubleBackPressed = false;
    private boolean isLocationPermissionGranted;
    private boolean canReRoute = true, canCarAnim = true;
    private int getProviderHitCheck;

    private NavigationView navigationView;
    private BottomSheetBehavior bsBehavior;
    private CircleImageView picture;
    private TextView name;
    private TextView sub_name;

    private HashMap<Integer, Marker> providersMarker;
    private ArrayList<LatLng> polyLinePoints;
    private Marker srcMarker, destMarker;
    private Polyline mPolyline;
    private LatLng start = null, end = null;
    private Location mLastKnownLocation;

    private DataResponse checkStatusResponse = new DataResponse();
    private UserAddress home = null, work = null;

    private Runnable r;
    private Handler h;

    private int countRequest = 0;

    private BroadcastReceiver myReceiver = new BroadcastReceiver() {
        @Override
        public void onReceive(Context context, Intent intent) {
            mainPresenter.checkStatus();
        }
    };
    private String selectService="";

    @Override
    public int getLayoutId() {
        return R.layout.activity_main;
    }

    @Override
    public void initView() {

        if (Build.VERSION.SDK_INT >= 21)
            getWindow().getDecorView().setSystemUiVisibility(
                    View.SYSTEM_UI_FLAG_LAYOUT_STABLE);

        ButterKnife.bind(this);

        // Configura o google places
        Places.initialize(getApplicationContext(), getString(R.string.google_map_key));
        mPlacesClient = Places.createClient(this);

        registerReceiver(myReceiver, new IntentFilter(INTENT_FILTER));

        mainPresenter.attachView(this);

        providersMarker = new HashMap<>();

        mainPresenter.getCategories();

        navigationView = findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);
        View headerView = navigationView.getHeaderView(0);
        picture = headerView.findViewById(R.id.picture);
        name = headerView.findViewById(R.id.name);
        sub_name = headerView.findViewById(R.id.sub_name);
        headerView.setOnClickListener(v -> {
            ActivityOptionsCompat options = ActivityOptionsCompat.makeSceneTransitionAnimation(
                    this, picture, ViewCompat.getTransitionName(picture));
            startActivity(new Intent(MainActivitytest.this, ProfileActivity.class), options.toBundle());
        });

        mFusedLocation = LocationServices.getFusedLocationProviderClient(this);
        mapFragment = (MapFragment) getFragmentManager().findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);

        bsBehavior = BottomSheetBehavior.from(container);
        bsBehavior.setBottomSheetCallback(new BottomSheetBehavior.BottomSheetCallback() {
            @Override
            public void onStateChanged(@NonNull View bottomSheet, @BottomSheetBehavior.State int newState) {
                switch (newState) {
                    case BottomSheetBehavior.STATE_HIDDEN:
                        BottomSheetBehavior.from(container).setHideable(true);
                        break;
                    case BottomSheetBehavior.STATE_EXPANDED:
                        BottomSheetBehavior.from(container).setHideable(true);
                        break;
                    case BottomSheetBehavior.STATE_COLLAPSED:
                        BottomSheetBehavior.from(container).setHideable(true);
                        break;
                    case BottomSheetBehavior.STATE_DRAGGING:
                        break;
                    case BottomSheetBehavior.STATE_SETTLING:
                        break;
                }
            }

            @Override
            public void onSlide(@NonNull View bottomSheet, float slideOffset) {

            }
        });

        h = new Handler();
        r = () -> {

            //TODO ALLAN - Atualiza localização se o endereço estiver nulo
            if(isEmpty(sourceTxt.getText().toString()) || sourceTxt.getText().toString().equals(getText(R.string.pickup_location).toString())){
                getDeviceLocation();
                displayCurrentAddress();
            }

            if(mLastKnownLocation != null){
               mainPresenter.checkStatus();
            }

            if (CURRENT_STATUS.equals(SERVICE)) {
                if (mLastKnownLocation != null) {
                    HashMap<String, Object> map = new HashMap<>();
                    map.put("latitude", mLastKnownLocation.getLatitude());
                    map.put("longitude", mLastKnownLocation.getLongitude());
                  mainPresenter.getProviders(map);
                }
            } else
                if (CURRENT_STATUS.equals(STARTED) || CURRENT_STATUS.equals(ARRIVED)
                    || CURRENT_STATUS.equals(PICKED_UP)) if (getProviderHitCheck % 3 == 0) {
                LatLngBounds.Builder builder = new LatLngBounds.Builder();
                for (LatLng latLng : polyLinePoints) builder.include(latLng);
                LatLngBounds bounds = builder.build();
                try {
                    mGoogleMap.animateCamera(CameraUpdateFactory.newLatLngBounds(bounds, 250));
                } catch (Exception e) {
                    mGoogleMap.animateCamera(CameraUpdateFactory.newLatLngBounds(bounds, 90));
                }
            }
            getProviderHitCheck++;
            h.postDelayed(r, 5000);
        };
        h.postDelayed(r, 5000);

        drawerLayout.addDrawerListener(new DrawerLayout.DrawerListener() {
            @Override
            public void onDrawerSlide(@NonNull View view, float v) {

            }

            @Override
            public void onDrawerOpened(@NonNull View view) {
                mainPresenter.getNavigationSettings();
            }

            @Override
            public void onDrawerClosed(@NonNull View view) {

            }

            @Override
            public void onDrawerStateChanged(int i) {

            }
        });

        String service = (String) RIDE_REQUEST.get(SERVICE_TYPE);
        if(!isEmpty(service)) {
            CURRENT_STATUS = SERVICE;
            ConCatLayout.setVisibility(View.GONE);
            ConCatMainLayout.setVisibility(View.GONE);
        }

        searchText.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence s, int start, int count, int after) {

            }

            @Override
            public void onTextChanged(CharSequence s, int start, int before, int count) {


            }

            @Override
            public void afterTextChanged(Editable s) {
                if (adapter!=null){
                    adapter.getFilter().filter(s);
                }
            }
        });
    }

    @Override
    public void onSuccess(DataResponse dataResponse) {
        this.checkStatusResponse = dataResponse;
        updatePaymentEntities();
        SharedHelper.putKey(this, SOS_NUMBER, checkStatusResponse.getSos());
        if (!Objects.requireNonNull(dataResponse.getData()).isEmpty()) {
            if (!CURRENT_STATUS.equals(dataResponse.getData().get(0).getStatus())) {
                DATUM = dataResponse.getData().get(0);
                CURRENT_STATUS = DATUM.getStatus();
                changeFlow(CURRENT_STATUS);
            }
        } else if (CURRENT_STATUS.equals(SERVICE))
            System.out.println("RRR CURRENT_STATUS = " + CURRENT_STATUS);
        else {
            CURRENT_STATUS = EMPTY;
            changeFlow(CURRENT_STATUS);
        }

        if (CURRENT_STATUS.equals(STARTED)
                || CURRENT_STATUS.equals(ARRIVED)
                || CURRENT_STATUS.equals(PICKED_UP))
            if (mProviderLocation == null) {
                mProviderLocation = FirebaseDatabase.getInstance().getReference()
                        .child("loc_p_" + DATUM.getProvider().getId());
                updateDriverNavigation();
            }

        if (canGoToChatScreen) {
            if (!isChatScreenOpen && DATUM != null) {
                Intent i = new Intent(baseActivity(), ChatActivity.class);
                i.putExtra("request_id", String.valueOf(DATUM.getId()));
                startActivity(i);
            }
            canGoToChatScreen = false;
        }
    }

    public void changeFlow(String status) {
        System.out.println("RRR CURRENT_STATUS = " + status);

        //llPickHomeAdd.setVisibility(View.INVISIBLE);
        //llPickWorkAdd.setVisibility(View.INVISIBLE);

        dismissDialog(SEARCHING);
        dismissDialog(RATING);
        switch (status) {
            case EMPTY:
                //CURRENT_STATUS = EMPTY;
                ivBack.setVisibility(View.VISIBLE);
                menu.setVisibility(View.VISIBLE);
                pickLocationLayout.setVisibility(View.VISIBLE);
                String service = (String) RIDE_REQUEST.get(SERVICE_TYPE);
                if(!isEmpty(service)) {
                    CURRENT_STATUS = SERVICE;
                    ConCatLayout.setVisibility(View.GONE);
                    ConCatMainLayout.setVisibility(View.GONE);
                }
                mGoogleMap.clear();
                providersMarker.clear();
                addAllProviders(SharedHelper.getProviders(this));
//                displayCurrentAddress();
                changeFragment(null);
                //destinationTxt.setText(getString(R.string.where_to));
                //llPickHomeAdd.setVisibility(home != null ? View.VISIBLE : View.INVISIBLE);
                //llPickWorkAdd.setVisibility(work != null ? View.VISIBLE : View.INVISIBLE);
                mProviderLocation = null;
                polyLinePoints = null;
                break;
            case SERVICE:
                ivBack.setVisibility(View.VISIBLE);
                ConCatLayout.setVisibility(View.GONE);
                ConCatMainLayout.setVisibility(View.GONE);
                menu.setVisibility(View.GONE);
                updatePaymentEntities();
                //callBook(1, Integer.parseInt(Global.SerId),Global.SerName,Global.calculation);
                //changeFragment(new BookRideFragment());
                break;
            case SEARCHING:
                pickLocationLayout.setVisibility(View.GONE);
                ConCatLayout.setVisibility(View.GONE);
                ConCatMainLayout.setVisibility(View.GONE);
                updatePaymentEntities();
                SearchingFragment searchingFragment = new SearchingFragment();
                searchingFragment.show(getSupportFragmentManager(), SEARCHING);
                break;
            case STARTED:
                mGoogleMap.clear();
                pickLocationLayout.setVisibility(View.GONE);
                ConCatLayout.setVisibility(View.GONE);
                ConCatMainLayout.setVisibility(View.GONE);
                ivBack.setVisibility(View.GONE);
                menu.setVisibility(View.VISIBLE);
                if (DATUM != null)
                    FirebaseMessaging.getInstance().subscribeToTopic(String.valueOf(DATUM.getId()));
                changeFragment(new ServiceFlowFragment());
                break;
            case ARRIVED:
                pickLocationLayout.setVisibility(View.GONE);
                ConCatLayout.setVisibility(View.GONE);
                ConCatMainLayout.setVisibility(View.GONE);
                changeFragment(new ServiceFlowFragment());
                break;
            case PICKED_UP:
                pickLocationLayout.setVisibility(View.GONE);
                llChangeLocation.setVisibility(View.VISIBLE);
                ConCatLayout.setVisibility(View.GONE);
                ConCatMainLayout.setVisibility(View.GONE);
                //changeDestination.setText(DATUM.getDAddress());
                changeFragment(new ServiceFlowFragment());
                break;
            case DROPPED:
            case COMPLETED:
                pickLocationLayout.setVisibility(View.GONE);
                llChangeLocation.setVisibility(View.GONE);
                ConCatLayout.setVisibility(View.GONE);
                ConCatMainLayout.setVisibility(View.GONE);
                changeFragment(new InvoiceFragment());
                break;
            case RATING:
                changeFragment(null);
                if (DATUM != null)
                    FirebaseMessaging.getInstance().unsubscribeFromTopic(String.valueOf(DATUM.getId()));
                new RatingDialogFragment().show(getSupportFragmentManager(), RATING);
                RIDE_REQUEST.clear();
                mGoogleMap.clear();
                pickLocationLayout.setVisibility(View.GONE);
                ConCatLayout.setVisibility(View.GONE);
                ConCatMainLayout.setVisibility(View.GONE);
                sourceTxt.setText("");
                sourceTxt.setHint(getString(R.string.fetching_current_location));
                destinationTxt.setText("");
                break;
            default:
                break;
        }
    }

    @Override
    public void onResume() {
        super.onResume();
        registerReceiver(myReceiver, new IntentFilter(INTENT_FILTER));
        mapFragment.onResume();
        mainPresenter.getUserInfo();
        if (ConCatMainLayout.getVisibility()==View.GONE)
        ConCatMainLayout.setVisibility(View.VISIBLE);
    //  mainPresenter.checkStatus();
        if (CURRENT_STATUS.equalsIgnoreCase(EMPTY)) {
            RIDE_REQUEST.remove(DEST_ADD);
            RIDE_REQUEST.remove(DEST_LAT);
            RIDE_REQUEST.remove(DEST_LONG);
            //mainPresenter.getSavedAddress();
        }
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();
        //mapFragment.onDestroy();
        mainPresenter.onDetach();
        unregisterReceiver(myReceiver);
        if (r != null) h.removeCallbacks(r);
    }

    @Override
    public void onBackPressed() {

        if (ConCatMainLayout.getVisibility()==View.GONE){


            if (listArrayList.size()>0&&ConCatLayout.getVisibility()==View.VISIBLE){
                if (listArrayList.size()==1){
                    calledCat=false;
                    listArrayList.remove(listArrayList.size()-1);
                    recyclerView.setLayoutManager(new LinearLayoutManager(this));
                    recyclerView.setAdapter(new CateoriesAdapter(this,catageoriesMain.getServiceTypes()));
                }else {

                    listArrayList.remove(listArrayList.size()-1);

                    recyclerView.setLayoutManager(new LinearLayoutManager(this));
                    recyclerView.setAdapter(new SubCateoriesAdapter(this,listArrayList.get(listArrayList.size()-1)));

                }

            }else {
                ConCatMainLayout.setVisibility(View.VISIBLE);
                if (catageoriesMain.getServiceTypes()!=null&&catageoriesMain.getServiceTypes().size()>0){
                    adapter=new CateoriesAdapter(this,catageoriesMain.getServiceTypes());
                    recyclerViewMain.setLayoutManager(new LinearLayoutManager(this));
                    recyclerViewMain.setAdapter(adapter);
                }
            }


        }else {
                if (isDoubleBackPressed) {
                    super.onBackPressed();
                    return;
                }
                this.isDoubleBackPressed = true;
                Toast.makeText(this, getString(R.string.please_click_back_again_to_exit), Toast.LENGTH_SHORT).show();
                new Handler().postDelayed(() -> isDoubleBackPressed = false, 2000);


            }


        DrawerLayout drawer = findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) drawer.closeDrawer(GravityCompat.START);
        else if (getSupportFragmentManager().getBackStackEntryCount() > 0) {
            if (getSupportFragmentManager().findFragmentById(R.id.container)
                    instanceof ServiceFlowFragment) {
                getSupportFragmentManager().popBackStack();
            }
            getSupportFragmentManager().popBackStack();
            if (getSupportFragmentManager().getBackStackEntryCount() == 1) {
               // mainPresenter.checkStatus();
                changeFlow(EMPTY);
                RIDE_REQUEST.remove(DEST_ADD);
                RIDE_REQUEST.remove(DEST_LAT);
                RIDE_REQUEST.remove(DEST_LONG);
            }
        } else if (bsBehavior.getState() == BottomSheetBehavior.STATE_EXPANDED)
            bsBehavior.setState(BottomSheetBehavior.STATE_COLLAPSED);
        else {


        }

    }

    @Override
    public boolean onNavigationItemSelected(@NonNull MenuItem item) {
        int id = item.getItemId();

        switch (id) {
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

    public void ShowLogoutPopUp() {
        AlertDialog.Builder alertDialogBuilder = new AlertDialog.Builder(MainActivitytest.this);
        alertDialogBuilder
                .setMessage(getString(R.string.are_sure_you_want_to_logout)).setCancelable(false)
                .setPositiveButton(getString(R.string.yes), (dialog, id) -> mainPresenter.logout(SharedHelper.getKey(this, "user_id")))
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
    public void onCameraIdle() {
        bsBehavior.setState(BottomSheetBehavior.STATE_EXPANDED);
    }

    @OnClick({R.id.menu, R.id.gps, R.id.source, R.id.destination, R.id.ivBack})
    public void onViewClicked(View view) {
        switch (view.getId()) {
            case R.id.menu:
                if (drawerLayout.isDrawerOpen(GravityCompat.START))
                    drawerLayout.closeDrawer(GravityCompat.START);
                else {
                    User user = new Gson().fromJson(SharedHelper.getKey(this, "userInfo"), User.class);
                    if (user != null) {
                        name.setText(String.format("%s %s", user.getFirstName(), user.getLastName()));
                        sub_name.setText(user.getEmail());
                        SharedHelper.putKey(MainActivitytest.this, PROFILE_IMG, user.getPicture());
                        Glide.with(MainActivitytest.this)
                                .load(BuildConfig.BASE_IMAGE_URL + user.getPicture())
                                .apply(RequestOptions.placeholderOf(R.drawable.ic_user_placeholder)
                                        .dontAnimate()
                                        .error(R.drawable.ic_user_placeholder))
                                .into(picture);
                    }
                    drawerLayout.openDrawer(Gravity.START);
                }

                break;
            case R.id.ivBack:
                onBackPressed();
                break;
            case R.id.gps:
                if (mLastKnownLocation != null) {
                    LatLng currentLatLng = new LatLng(mLastKnownLocation.getLatitude(), mLastKnownLocation.getLongitude());
                    mGoogleMap.moveCamera(CameraUpdateFactory.newLatLngZoom(currentLatLng, DEFAULT_ZOOM));
                    displayCurrentAddress();
                }
                break;
            case R.id.source:
                CURRENT_STATUS = EMPTY;
                Intent sourceIntent = new Intent(this, LocationPickActivity.class);
                sourceIntent.putExtra("actionName", Constants.LocationActions.SELECT_SOURCE);
                startActivityForResult(sourceIntent, REQUEST_PICK_LOCATION);
                break;
            case R.id.destination:
                CURRENT_STATUS = EMPTY;
                Intent intent = new Intent(this, LocationPickActivity.class);
                intent.putExtra("actionName", Constants.LocationActions.SELECT_DESTINATION);
                startActivityForResult(intent, REQUEST_PICK_LOCATION);
                break;
        }
    }

    private void updateSavedAddress(UserAddress userAddress) {
        RIDE_REQUEST.put(DEST_ADD, address);
        RIDE_REQUEST.put(DEST_LAT, mLastKnownLocation.getLatitude());
        RIDE_REQUEST.put(DEST_LONG, mLastKnownLocation.getLongitude());
        RIDE_REQUEST.put("service_type",selectedId);
        RIDE_REQUEST.put("service_name",selectService);

        destinationTxt.setText(String.valueOf(RIDE_REQUEST.get(DEST_ADD)));

        if (RIDE_REQUEST.containsKey(SRC_ADD) && RIDE_REQUEST.containsKey(DEST_ADD)) {
            //LatLng origin = new LatLng((Double) RIDE_REQUEST.get(SRC_LAT), (Double) RIDE_REQUEST.get(SRC_LONG));
            //LatLng destination = new LatLng((Double) RIDE_REQUEST.get(SRC_LONG), (Double) RIDE_REQUEST.get(SRC_LONG));
            //drawRoute(origin, destination);
            CURRENT_STATUS = SERVICE;
            changeFlow(CURRENT_STATUS);
        }
    }

    @Override
    public void onCameraMove() {
        if (bsBehavior.getState() == BottomSheetBehavior.STATE_EXPANDED)
            bsBehavior.setState(BottomSheetBehavior.STATE_COLLAPSED);
    }

    @Override
    public void onMapReady(GoogleMap googleMap) {
        try {
            googleMap.setMapStyle(MapStyleOptions.loadRawResourceStyle(this, R.raw.style_json));
        } catch (Resources.NotFoundException e) {
            e.printStackTrace();
        }
        this.mGoogleMap = googleMap;

        getLocationPermission();
        updateLocationUI();
        getDeviceLocation();
        displayCurrentAddress();
    }

    private void updateDriverNavigation() {
        System.out.println("RRR called : updateDriverNavigation :: ");
        if (mProviderLocation != null)
            mProviderLocation.addValueEventListener(new ValueEventListener() {
                @Override
                public void onDataChange(@NonNull DataSnapshot dataSnapshot) {
                    try {
                        LatLngFireBaseDB fbData = dataSnapshot.getValue(LatLngFireBaseDB.class);
                        assert fbData != null;
                        double lat = fbData.getLat();
                        double lng = fbData.getLng();

                        System.out.println("RRR Lat FIREBASE: " + lat + " Lng: " + lng);

                        if (lat != 0.00 && lng != 0.00) {
                            if (STARTED.equalsIgnoreCase(CURRENT_STATUS) ||
                                    ARRIVED.equalsIgnoreCase(CURRENT_STATUS) ||
                                    PICKED_UP.equalsIgnoreCase(CURRENT_STATUS)) {
                                LatLng source = null, destination = null;
                                switch (CURRENT_STATUS) {
                                    case STARTED:
                                        source = new LatLng(lat, lng);
                                        destination = new LatLng(DATUM.getSLatitude(), DATUM.getSLongitude());
                                        break;
                                    case ARRIVED:
                                    case PICKED_UP:
                                        source = new LatLng(lat, lng);
                                        destination = new LatLng(DATUM.getDLatitude(), DATUM.getDLongitude());
                                        break;
                                }
                                if (polyLinePoints == null || polyLinePoints.size() < 2 || mPolyline == null)
                                    drawRoute(source, destination);
                                else {
                                    int index = checkForReRoute(source);
                                    if (index < 0) reRoutingDelay(source, destination);
                                    else polyLineRerouting(source, index);
                                }

                                if (start != null) {
                                    SharedHelper.putCurrentLocation(MainActivitytest.this, start);
                                    end = start;
                                }
                                start = source;
                                if (end != null && canCarAnim) {
                                    if (start != null) {
                                        System.out.println("CAR ANIM ===>>");
                                        carAnim(srcMarker, end, start);
                                    }
                                }
                            }
                        }
                    } catch (Exception e) {
                        e.printStackTrace();
                    }
                }

                @Override
                public void onCancelled(DatabaseError error) {
                    Log.w("RRR ", "Failed to read value.", error.toException());
                }
            });
    }

    private void reRoutingDelay(LatLng source, LatLng destination) {
        if (canReRoute) {
            canReRoute = !canReRoute;
            drawRoute(source, destination);
            new Handler().postDelayed(() -> canReRoute = true, 8000);
        }
    }

    private void polyLineRerouting(LatLng point, int index) {
        if (index > 0) {
            polyLinePoints.subList(0, index + 1).clear();
            polyLinePoints.add(0, point);
            mPolyline.remove();

            mPolyline = mGoogleMap.addPolyline(DirectionConverter.createPolyline
                    (this, polyLinePoints, 5, getResources().getColor(R.color.colorAccent)));

            System.out.println("RRR mPolyline = " + polyLinePoints.size());
        } else System.out.println("RRR mPolyline = Failed");
    }

    private int checkForReRoute(LatLng point) {
        if (polyLinePoints != null && polyLinePoints.size() > 0) {
            System.out.println("RRR indexOnEdgeOrPath = " +
                    new PolyUtil().indexOnEdgeOrPath(point, polyLinePoints, false, true, 100));
            //      indexOnEdgeOrPath returns -1 if the point is outside the polyline
            //      returns the index position if the point is inside the polyline
            return new PolyUtil().indexOnEdgeOrPath(point, polyLinePoints, false, true, 100);
        } else return -1;
    }

    public void drawRoute(LatLng source, LatLng destination) {
        GoogleDirection
                .withServerKey(getString(R.string.google_map_key))
                .from(source)
                .to(destination)
                .transportMode(TransportMode.DRIVING)
                .execute(this);
    }

    @Override
    public void onDirectionSuccess(Direction direction, String rawBody) {

        if (direction.isOK()) {
            if (!CURRENT_STATUS.equalsIgnoreCase(SERVICE))
                mGoogleMap.clear();
            Route route = direction.getRouteList().get(0);
            if (!route.getLegList().isEmpty()) {

                Leg leg = route.getLegList().get(0);
                InfoWindowData originLeg = new InfoWindowData();
                originLeg.setAddress(leg.getStartAddress());
                originLeg.setArrival_time(null);
                originLeg.setDistance(leg.getDistance().getText());

                destinationLeg = new InfoWindowData();
                destinationLeg.setAddress(leg.getEndAddress());
                destinationLeg.setArrival_time(leg.getDuration().getText());
                destinationLeg.setDistance(leg.getDistance().getText());

                LatLng origin = new LatLng(leg.getStartLocation().getLatitude(), leg.getStartLocation().getLongitude());
                LatLng destination = new LatLng(leg.getEndLocation().getLatitude(), leg.getEndLocation().getLongitude());

                //SETA TIPO DE ICONES
                Integer serviceIcon;
                if (DATUM != null) {

                    if (DATUM.getServiceTypeId() == serviceMototaxiID) {
                        //Se for mototaxi
                        serviceIcon = R.drawable.src_icon;
                    } else if (DATUM.getServiceTypeId() == serviceMotoboyID) {
                        //Se for motoboy
                        serviceIcon = R.drawable.src_icon;
                    } else {
                        //Se for outro (carro)
                        serviceIcon = R.drawable.src_icon;
                    }
                } else {
                    serviceIcon = R.drawable.src_icon;
                }


                if (CURRENT_STATUS.equalsIgnoreCase(SERVICE))
                    srcMarker = mGoogleMap.addMarker(new MarkerOptions()

                            .position(origin)
                            .icon(BitmapDescriptorFactory.fromBitmap(getMarkerBitmapFromView())));
                else srcMarker = mGoogleMap.addMarker(new MarkerOptions()
                        .position(origin)
                        .icon(BitmapDescriptorFactory.fromResource(serviceIcon)));

                if (destMarker != null) destMarker.remove();
                destMarker = mGoogleMap.addMarker(new MarkerOptions()
                        .icon(BitmapDescriptorFactory.fromResource(R.drawable.des_icon))
                        .position(destination));
            }

            polyLinePoints = route.getLegList().get(0).getDirectionPoint();

            if (CURRENT_STATUS.equalsIgnoreCase(SERVICE)) {
                if (mPolyline != null) mPolyline.remove();
                mPolyline = mGoogleMap.addPolyline(DirectionConverter.createPolyline
                        (this, polyLinePoints, 5, getResources().getColor(R.color.colorAccent)));
                LatLng southwest = route.getBound().getSouthwestCoordination().getCoordination();
                LatLng northeast = route.getBound().getNortheastCoordination().getCoordination();
                LatLngBounds bounds = new LatLngBounds(southwest, northeast);
                try {
                    mGoogleMap.animateCamera(CameraUpdateFactory.newLatLngBounds(bounds, 250));
                } catch (Exception e) {
                    mGoogleMap.animateCamera(CameraUpdateFactory.newLatLngBounds(bounds, 90));
                }
            } else
                mPolyline = mGoogleMap.addPolyline(DirectionConverter.createPolyline
                        (this, polyLinePoints, 2, getResources().getColor(R.color.colorAccent)));
        } else {
            changeFlow(EMPTY);
            Toast.makeText(this, getString(R.string.root_not_available), Toast.LENGTH_SHORT).show();
        }
    }

    private void carAnim(final Marker marker, final LatLng start, final LatLng end) {
        System.out.println("RRR MainActivity.carAnim");
        ValueAnimator animator = ValueAnimator.ofFloat(0, 1);
        animator.setDuration(1900);
        final LatLngInterface latLngInterpolator = new LatLngInterface.LinearFixed();
        animator.setInterpolator(new LinearInterpolator());
        animator.addUpdateListener(valueAnimator1 -> {
            canCarAnim = false;
            float v = valueAnimator1.getAnimatedFraction();
            LatLng newPos = latLngInterpolator.interpolate(v, start, end);
            marker.setPosition(newPos);
            marker.setAnchor(0.5f, 0.5f);
            marker.setRotation(bearingBetweenLocations(start, end));
        });
        animator.addListener(new AnimatorListenerAdapter() {
            @Override
            public void onAnimationEnd(Animator animation) {
                canCarAnim = true;
            }
        });
        animator.start();
    }

    @Override
    public void onDirectionFailure(Throwable t) {
        System.out.println("RRR onDirectionFailure = [" + t.getMessage() + "]");
        t.printStackTrace();
    }

    public void changeFragment(Fragment fragment) {
        if (isFinishing()) return;

        if (fragment != null) {
            if (fragment instanceof BookRideFragment || fragment instanceof ServiceTypesFragment ||
                    fragment instanceof ServiceFlowFragment || fragment instanceof RateCardFragment)
                container.setBackgroundColor(getResources().getColor(android.R.color.transparent));
            else container.setBackgroundColor(getResources().getColor(R.color.white));

            FragmentTransaction fragmentTransaction = getSupportFragmentManager().beginTransaction();

            if (fragment instanceof RateCardFragment)
                fragmentTransaction.addToBackStack(fragment.getTag());
            else if (fragment instanceof ScheduleFragment)
                fragmentTransaction.addToBackStack(fragment.getTag());
            else if (fragment instanceof ServiceTypesFragment)
                fragmentTransaction.addToBackStack(fragment.getTag());
           /* else if (fragment instanceof BookRideFragment)
                fragmentTransaction.addToBackStack(fragment.getTag());
*/
/*
            try {
                fragmentTransaction.replace(R.id.container, fragment, fragment.getTag());
                fragmentTransaction.commitAllowingStateLoss();
            } catch (Exception e) {
                e.printStackTrace();
            }

        } else {
            for (Fragment fragmentd : getSupportFragmentManager().getFragments()) {
                if (fragmentd instanceof ServiceFlowFragment)
                    getSupportFragmentManager().beginTransaction().remove(fragmentd).commitAllowingStateLoss();
                if (fragmentd instanceof InvoiceFragment)
                    getSupportFragmentManager().beginTransaction().remove(fragmentd).commitAllowingStateLoss();
            }
            container.removeAllViews();
            getSupportFragmentManager().popBackStack(null, FragmentManager.POP_BACK_STACK_INCLUSIVE);
        }
    }

    void dismissDialog(String tag) {
        Fragment fragment = getSupportFragmentManager().findFragmentByTag(tag);
        if (fragment instanceof SearchingFragment) {
            SearchingFragment df = (SearchingFragment) fragment;
            df.dismissAllowingStateLoss();
        } else if (fragment instanceof RatingDialogFragment) {
            RatingDialogFragment df = (RatingDialogFragment) fragment;
            df.dismissAllowingStateLoss();
        }
    }

    private Bitmap getMarkerBitmapFromView() {

        View mView = ((LayoutInflater) this.getSystemService(Context.LAYOUT_INFLATER_SERVICE))
                .inflate(R.layout.map_custom_infowindow, null);

        TextView tvEtaVal = mView.findViewById(R.id.tvEstimatedFare);
        String arrivalTime = destinationLeg.getArrival_time();
        if (arrivalTime.contains("hours")) arrivalTime = arrivalTime.replace("hours", "h\n");
        else if (arrivalTime.contains("hour")) arrivalTime = arrivalTime.replace("hour", "h\n");
        if (arrivalTime.contains("mins")) arrivalTime = arrivalTime.replace("mins", "min");
        tvEtaVal.setText(arrivalTime);
        mView.measure(View.MeasureSpec.UNSPECIFIED, View.MeasureSpec.UNSPECIFIED);
        mView.layout(0, 0, mView.getMeasuredWidth(), mView.getMeasuredHeight());
        mView.buildDrawingCache();
        Bitmap returnedBitmap = Bitmap.createBitmap(mView.getMeasuredWidth(),
                mView.getMeasuredHeight(), Bitmap.Config.ARGB_8888);
        Canvas canvas = new Canvas(returnedBitmap);
        canvas.drawColor(Color.WHITE, PorterDuff.Mode.SRC_IN);
        Drawable drawable = mView.getBackground();
        if (drawable != null) drawable.draw(canvas);
        mView.draw(canvas);
        return returnedBitmap;
    }

    void getDeviceLocation() {
        try {
            if (isLocationPermissionGranted) {
                Task<Location> locationResult = mFusedLocation.getLastLocation();
                locationResult.addOnCompleteListener(this, task -> {
                    if (task.isSuccessful() && task.getResult() != null) {
                        mLastKnownLocation = task.getResult();
                        mGoogleMap.moveCamera(CameraUpdateFactory
                                .newLatLngZoom(new LatLng(
                                        mLastKnownLocation.getLatitude(),
                                        mLastKnownLocation.getLongitude()
                                ), DEFAULT_ZOOM));

                        SharedHelper.putKey(this, "latitude", String.valueOf(mLastKnownLocation.getLatitude()));
                        SharedHelper.putKey(this, "longitude", String.valueOf(mLastKnownLocation.getLongitude()));
                    } else {
                        mDefaultLocation = new LatLng(
                                Double.valueOf(SharedHelper.getKey(this, "latitude", "-33.8523341")),
                                Double.valueOf(SharedHelper.getKey(this, "longitude", "151.2106085"))
                        );
                        mGoogleMap.moveCamera(CameraUpdateFactory.newLatLngZoom(mDefaultLocation, DEFAULT_ZOOM));
                        mGoogleMap.getUiSettings().setMyLocationButtonEnabled(false);
                    }
                });
            }
        } catch (SecurityException e) {
            e.printStackTrace();
        }
    }



    public void getLocationPermission() {
        if (ContextCompat.checkSelfPermission(this.getApplicationContext(),
                ACCESS_FINE_LOCATION)
                == PackageManager.PERMISSION_GRANTED) isLocationPermissionGranted = true;
        else
            ActivityCompat.requestPermissions(this,
                    new String[]{ACCESS_FINE_LOCATION},
                    REQUEST_ACCESS_FINE_LOCATION);
    }

    private void updateLocationUI() {
        if (mGoogleMap == null) return;
        try {
            if (isLocationPermissionGranted) {
                mGoogleMap.setMyLocationEnabled(true);
                mGoogleMap.getUiSettings().setMyLocationButtonEnabled(false);
                mGoogleMap.getUiSettings().setCompassEnabled(false);
                mGoogleMap.setOnCameraMoveListener(this);
                mGoogleMap.setOnCameraIdleListener(this);
            } else {
                mGoogleMap.setMyLocationEnabled(false);
                mGoogleMap.getUiSettings().setMyLocationButtonEnabled(false);
                mLastKnownLocation = null;
                getLocationPermission();
            }
        } catch (SecurityException e) {
            e.printStackTrace();
        }
    }

    @Override
    public void onRequestPermissionsResult(int requestCode, @NonNull String permissions[], @NonNull int[] grantResults) {
        isLocationPermissionGranted = false;
        if (requestCode == REQUEST_ACCESS_FINE_LOCATION)
            if (grantResults.length > 0 && grantResults[0] == PackageManager.PERMISSION_GRANTED) {
                isLocationPermissionGranted = true;
                updateLocationUI();
                getDeviceLocation();
                displayCurrentAddress();
            }
    }

    @Override
    public void onSuccess(@NonNull User user) {
        String dd = LocaleHelper.getLanguage(this);
        String userLanguage = (user.getLanguage() == null) ? Constants.Language.ENGLISH : user.getLanguage();
        if (!userLanguage.equalsIgnoreCase(dd)) {
            LocaleHelper.setLocale(getApplicationContext(), user.getLanguage());
            Intent intent = new Intent(this, MainActivitytest.class);
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
        SharedHelper.putKey(MainActivitytest.this, PROFILE_IMG, user.getPicture());
        Glide.with(MainActivitytest.this)
                .load(BuildConfig.BASE_IMAGE_URL + user.getPicture())
                .apply(RequestOptions.placeholderOf(R.drawable.ic_user_placeholder)
                        .dontAnimate()
                        .error(R.drawable.ic_user_placeholder))
                .into(picture);
        MvpApplication.showOTP = user.getRide_otp().equals("1");
    }

    @Override
    public void onSuccessLogout(Object object) {
        LogoutApp();
    }

    @Override
    public void onSuccess(List<Provider> providerList) {
        SharedHelper.putProviders(this, printJSON(providerList));
    }

    private void addAllProviders(List<Provider> providers) {
        if (providers != null) for (Provider provider : providers)
            if (providersMarker.get(provider.getId()) != null) {
                Marker marker = providersMarker.get(provider.getId());
                LatLng startPos = marker.getPosition();
                LatLng endPos = new LatLng(provider.getLatitude(), provider.getLongitude());
                marker.setPosition(endPos);
                carAnim(marker, startPos, endPos);
            } else {
                //SETA TIPO DE ICONES
                Integer serviceIcon;
                if (provider.getProviderService().getServiceTypeId() == serviceMototaxiID) {
                    //Se for mototaxi
                    serviceIcon = R.drawable.src_icon;
                } else if (provider.getProviderService().getServiceTypeId() == serviceMotoboyID) {
                    //Se for motoboy
                    serviceIcon = R.drawable.src_icon;
                } else {
                    //Se for outro (carro)
                    serviceIcon = R.drawable.src_icon;
                }
                MarkerOptions markerOptions = new MarkerOptions()
                        .anchor(0.5f, 0.5f)
                        .position(new LatLng(provider.getLatitude(), provider.getLongitude()))
                        .rotation(0.0f)
                        .snippet("" + provider.getId())
                        .icon(BitmapDescriptorFactory.fromResource(serviceIcon));
                providersMarker.put(provider.getId(), mGoogleMap.addMarker(markerOptions));
            }
    }

    public void addSpecificProviders(List<Provider> providers, String key) {
        if (providers != null) {
            Bitmap b;
            BitmapDescriptor bd;
            try {
                b = Bitmap.createScaledBitmap(decodeBase64(SharedHelper.getKey
                        (this, key)), 60, 60, false);
                bd = BitmapDescriptorFactory.fromBitmap(b);
            } catch (Exception e) {

                bd = BitmapDescriptorFactory.fromResource(R.drawable.src_icon);
                e.printStackTrace();
            }
            Iterator it = providersMarker.entrySet().iterator();
            while (it.hasNext()) {
                Map.Entry pair = (Map.Entry) it.next();
                Marker marker = providersMarker.get(pair.getKey());
                marker.remove();
                it.remove();
            }
            for (Provider provider : providers) {

                //SETA TIPO DE ICONES
                Integer serviceIcon;
                if (provider.getProviderService().getServiceTypeId() == serviceMototaxiID) {
                    //Se for mototaxi
                    serviceIcon = R.drawable.src_icon;
                } else if (provider.getProviderService().getServiceTypeId() == serviceMotoboyID) {
                    //Se for motoboy
                    serviceIcon = R.drawable.src_icon;
                } else {
                    //Se for outro (carro)
                    serviceIcon = R.drawable.src_icon;
                }

                MarkerOptions markerOptions = new MarkerOptions()
                        .anchor(0.5f, 0.5f)
                        .position(new LatLng(provider.getLatitude(), provider.getLongitude()))
                        .rotation(0.0f)
                        .snippet("" + provider.getId())
                        .icon(BitmapDescriptorFactory.fromResource(serviceIcon));
                providersMarker.put(provider.getId(), mGoogleMap.addMarker(markerOptions));
            }
        }
    }

    @Override
    public void onError(Throwable e) {

    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        for (Fragment fragment : getSupportFragmentManager().getFragments())
            fragment.onActivityResult(requestCode, resultCode, data);

        if (requestCode == REQUEST_PICK_LOCATION) if (resultCode == Activity.RESULT_OK) {
            if (RIDE_REQUEST.containsKey(SRC_ADD))
                sourceTxt.setText(String.valueOf(RIDE_REQUEST.get(SRC_ADD)));
            else sourceTxt.setText("");
            if (RIDE_REQUEST.containsKey(DEST_ADD))
                destinationTxt.setText(String.valueOf(RIDE_REQUEST.get(DEST_ADD)));
            else destinationTxt.setText("");

            if (RIDE_REQUEST.containsKey(SRC_ADD)
                    && RIDE_REQUEST.containsKey(DEST_ADD)
                    && CURRENT_STATUS.equalsIgnoreCase(EMPTY)) {
                CURRENT_STATUS = SERVICE;
                changeFlow(CURRENT_STATUS);
                LatLng origin = new LatLng((Double) RIDE_REQUEST.get(SRC_LAT), (Double) RIDE_REQUEST.get(SRC_LONG));
                LatLng destination = new LatLng((Double) RIDE_REQUEST.get(DEST_LAT), (Double) RIDE_REQUEST.get(DEST_LONG));
                drawRoute(origin, destination);
            } else if (RIDE_REQUEST.containsKey(DEST_ADD)
                    && !RIDE_REQUEST.get(DEST_ADD).equals("")
                    && CURRENT_STATUS.equalsIgnoreCase(PICKED_UP)){}

        }
    }

    @Override
    public void onDestinationSuccess(Object object) {
        System.out.println("RRR onDestinationSuccess");
    }

    @Override
    public void onLocationChanged(Location location) {
        if (location != null) {
            String cityName = null;
            Geocoder gcd = new Geocoder(getBaseContext(), Locale.getDefault());
            List<Address> addresses;
            try {
                addresses = gcd.getFromLocation(location.getLatitude(), location.getLongitude(), 1);
                if (addresses.size() > 0) {
                    System.out.println(addresses.get(0).getLocality());
                    cityName = addresses.get(0).getLocality();
                }
            } catch (IOException e) {
                e.printStackTrace();
            }
            String s = location.getLatitude() + "\n" + location.getLongitude()
                    + "\n\n" + getString(R.string.my_current_city)
                    + cityName;
            Toast.makeText(this, s, Toast.LENGTH_SHORT).show();
        }
    }

    private void displayCurrentAddress() {
        if (mGoogleMap == null) return;

        if (isLocationPermissionGranted) {
            if (mLastKnownLocation == null) {
                Toast.makeText(this, "waiting for your location ...", Toast.LENGTH_LONG).show();
                mLastKnownLocation = getLastKnownLocation();
                if(mLastKnownLocation != null){
                    address = getAddress(new LatLng(mLastKnownLocation.getLatitude(), mLastKnownLocation.getLongitude()));
                    sourceTxt.setText(address);
                    RIDE_REQUEST.put(SRC_ADD, address);
                    RIDE_REQUEST.put(SRC_LAT, mLastKnownLocation.getLatitude());
                    RIDE_REQUEST.put(SRC_LONG, mLastKnownLocation.getLongitude());
                }

            }else{
                if(isEmpty(sourceTxt.getText().toString()) || sourceTxt.getText().toString().equals(getText(R.string.pickup_location).toString())) {
                    address = getAddress(new LatLng(mLastKnownLocation.getLatitude(), mLastKnownLocation.getLongitude()));
                    sourceTxt.setText(address);
                    RIDE_REQUEST.put(SRC_ADD, address);
                    RIDE_REQUEST.put(SRC_LAT, mLastKnownLocation.getLatitude());
                    RIDE_REQUEST.put(SRC_LONG, mLastKnownLocation.getLongitude());
                }else{
                    address = getAddress(new LatLng(mLastKnownLocation.getLatitude(), mLastKnownLocation.getLongitude()));
                    sourceTxt.setText(address);
                    RIDE_REQUEST.put(SRC_ADD, address);
                    RIDE_REQUEST.put(SRC_LAT, mLastKnownLocation.getLatitude());
                    RIDE_REQUEST.put(SRC_LONG, mLastKnownLocation.getLongitude());

                }
            }

            hideLoading();
        } else getLocationPermission();
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
            else if (isDebitMachine) RIDE_REQUEST.put(PAYMENT_MODE, Constants.PaymentMode.DEBIT_MACHINE);
            else if (isVoucher) RIDE_REQUEST.put(PAYMENT_MODE, Constants.PaymentMode.VOUCHER);
        }
    }

    private Location getLastKnownLocation() {
        LocationManager mLocationManager = (LocationManager) this.getSystemService(Context.LOCATION_SERVICE);
        List<String> providers = mLocationManager.getProviders(true);
        Location bestLocation = null;
        for (String provider : providers)
            if (ActivityCompat.checkSelfPermission(this, ACCESS_FINE_LOCATION)
                    == PackageManager.PERMISSION_GRANTED && ActivityCompat.checkSelfPermission(this,
                    Manifest.permission.ACCESS_COARSE_LOCATION) == PackageManager.PERMISSION_GRANTED) {
                Location l = mLocationManager.getLastKnownLocation(provider);
                if (l == null) continue;
                if (bestLocation == null || l.getAccuracy() < bestLocation.getAccuracy())
                    bestLocation = l;
            }
        if (bestLocation == null) return null;
        return bestLocation;
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

    @Override
    public void onSuccess(CatageoriesMain catageoriesMain) {
      this.catageoriesMain=catageoriesMain;

        if (catageoriesMain.getServiceTypes()!=null&&catageoriesMain.getServiceTypes().size()>0){
            adapter=new CateoriesAdapter(this,catageoriesMain.getServiceTypes());
            recyclerViewMain.setLayoutManager(new LinearLayoutManager(this));
            recyclerViewMain.setAdapter(adapter);
         }
    }

    public void onLowMemory() {
        super.onLowMemory();
        mapFragment.onLowMemory();
    }

    @Override
    protected void onPause() {
        super.onPause();
        mapFragment.onPause();
    }

    @Override
    protected void onStop() {
        super.onStop();
        mapFragment.onStop();
    }


    public  void  callChildData(int pos, List<ChildRecursive> childrenRecursive){
       // ConCatLayout.setVisibility(View.GONE);
        if (ConCatLayout.getVisibility()==View.GONE){
            ConCatLayout.setVisibility(View.VISIBLE);
            ConCatMainLayout.setVisibility(View.GONE);

        }
        if (ConCatLayout.getVisibility()==View.GONE){
            ConCatLayout.setVisibility(View.VISIBLE);
            ConCatMainLayout.setVisibility(View.GONE);

        }

        if (childrenRecursive.size()>0){
            calledCat=true;
            recyclerView.setLayoutManager(new LinearLayoutManager(this));
            recyclerView.setAdapter(new SubCateoriesAdapter(this,childrenRecursive));
            listArrayList.add((ArrayList<ChildRecursive>) childrenRecursive);

        }

    }

    public void callBook(int adapterPosition, int id, String name,String cal,int fix,int price) {
        selectedId=id;
        selectService=name;
        CURRENT_STATUS = SERVICE;
        ConCatLayout.setVisibility(View.GONE);
        if (ConCatMainLayout.getVisibility()==View.VISIBLE){
            ConCatMainLayout.setVisibility(View.GONE);

        }
        BookRideFragment fragment=new BookRideFragment();
       /* Bundle bundle=new Bundle();
        bundle.putString("service_type",""+selectedId);
        bundle.putString("ser_name",""+selectService);*//*
        RIDE_REQUEST.put(SERVICE_TYPE, selectedId );
        Global.SerId=""+selectedId;
        Global.SerName=selectService;
        Global.calculation=cal;
        Global.fix= String.valueOf(fix);
        Global.price=String.valueOf(price);
        FragmentTransaction fragmentTransaction = getSupportFragmentManager().beginTransaction();
        fragmentTransaction.replace(R.id.container, fragment, fragment.getTag());
        fragmentTransaction.commit();

       // fragment.setArguments(bundle);
      //  changeFragment(new BookRideFragment());

    }
*/ /*
    private interface LatLngInterface {
        LatLng interpolate(float fraction, LatLng a, LatLng b);

        class LinearFixed implements MainActivitytest.LatLngInterface {
            @Override
            public LatLng interpolate(float fraction, LatLng a, LatLng b) {
                double lat = (b.latitude - a.latitude) * fraction + a.latitude;
                double lngDelta = b.longitude - a.longitude;
                if (Math.abs(lngDelta) > 180) lngDelta -= Math.signum(lngDelta) * 360;
                double lng = lngDelta * fraction + a.longitude;
                return new LatLng(lat, lng);
            }
        }
    }






}
*/
