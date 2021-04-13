/*
package com.thinkin_service.app.ui.fragment.categories;

import android.annotation.SuppressLint;
import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.os.Build;
import android.os.Handler;
import android.support.annotation.RequiresApi;
import android.support.v4.app.Fragment;
import android.support.v4.view.ViewPager;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.text.Editable;
import android.text.TextWatcher;
import android.view.View;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.gms.maps.model.LatLng;
import com.thinkin_service.app.R;
import com.thinkin_service.app.base.BaseActivity;
import com.thinkin_service.app.base.BaseFragment;
import com.thinkin_service.app.common.Constants;
import com.thinkin_service.app.common.DrawerAction;
import com.thinkin_service.app.common.Global;
import com.thinkin_service.app.data.network.model.BannerResponse;
import com.thinkin_service.app.data.network.model.CatageoriesMain;
import com.thinkin_service.app.data.network.model.PromoResponse;
import com.thinkin_service.app.ui.activity.location_pick.LocationPickActivity;
import com.thinkin_service.app.ui.activity.main.LocationUpdate;
import com.thinkin_service.app.ui.activity.main.MainActivity;
import com.thinkin_service.app.ui.adapter.CateoriesAdapter;
import com.thinkin_service.app.ui.adapter.SlidingImage_Adapter;
import com.viewpagerindicator.CirclePageIndicator;


import java.util.List;
import java.util.Timer;
import java.util.TimerTask;

import butterknife.BindView;
import butterknife.ButterKnife;
import butterknife.Unbinder;

import static com.thinkin_service.app.MvpApplication.DATUM;
import static com.thinkin_service.app.MvpApplication.RIDE_REQUEST;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.DEST_ADD;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.DEST_LAT;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.DEST_LONG;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SRC_ADD;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SRC_LAT;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SRC_LONG;
import static com.thinkin_service.app.common.Constants.Status.EMPTY;
import static com.thinkin_service.app.common.Constants.Status.PICKED_UP;
import static com.thinkin_service.app.common.Constants.Status.SERVICE;
import static com.thinkin_service.app.data.SharedHelper.putKey;

public class HomeCategoriesFragment  extends BaseFragment implements CategoriesView, LocationUpdate {
    Unbinder unbinder;
    CateoriesAdapter adapter;
    CatageoriesMain catageoriesMain;
    protected final int REQUEST_PICK_LOCATION = 3;

    CirclePageIndicator indicator;
    @BindView(R.id.recycler_main_cat)
    RecyclerView recyclerViewMain;
    @BindView(R.id.ed_search)
    EditText searchText;
    @BindView(R.id.ed_search_loc)
    TextView locsearchText;
    @BindView(R.id.menu)
    ImageView menu;
    DrawerAction drawerAction;

    ViewPager mPager;
    private CategoriesPresenter<HomeCategoriesFragment> presenter = new CategoriesPresenter<>();
    private int NUM_PAGES,currentPage;


    @Override
    public void onAttach(Context context) {
        super.onAttach(context);
        drawerAction=( DrawerAction)context;

    }

    @Override
    public int getLayoutId() {
        return R.layout.categories_layout;
    }


    @RequiresApi(api = Build.VERSION_CODES.N)
    @SuppressLint("SetTextI18n")

    public View initView(View view) {
        unbinder = ButterKnife.bind(this, view);
        presenter.attachView(this);
        mPager = (ViewPager) view.findViewById(R.id.pager);
        indicator = (CirclePageIndicator) view.findViewById(R.id.indicator);
        putKey(getContext(), "start", "true");

        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {

                MainActivity activity = (MainActivity) getActivity();
                if (activity!=null&&activity.address!=null){
                    String myDataFromActivity = activity.address;
                    locsearchText.setText(myDataFromActivity);
                }

            }
        },5000);
        //DATUM.setStatus(EMPTY);
        if (Global.banner==null){
            presenter.getBanners();
        }
        else {

            init(Global.banner);


        }
        if (Global.catMainRes==null){
            presenter.getCategories();
        }else {
            catageoriesMain=Global.catMainRes;
            setCatergories();

        }




        locsearchText.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intentS = new Intent(getContext(), LocationPickActivity.class);
                intentS.putExtra("actionName", Constants.LocationActions.SELECT_DESTINATION);
                getActivity().startActivityForResult(intentS, REQUEST_PICK_LOCATION);
            }
        });

        menu.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                drawerAction.open(true);
            }
        });

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


        return  view;
    }


    private  void  setCatergories(){

        if (catageoriesMain.getServiceTypes()!=null&&catageoriesMain.getServiceTypes().size()>0){
            adapter=new CateoriesAdapter(getContext(),catageoriesMain.getServiceTypes());
            recyclerViewMain.setLayoutManager(new GridLayoutManager(getContext(),4));
            recyclerViewMain.setAdapter(adapter);
            Global.catMainRes=catageoriesMain;
        }

    }
    @Override
    public void onSuccess(CatageoriesMain catageoriesMain) {
        this.catageoriesMain=catageoriesMain;
        setCatergories();
    }

    @Override
    public void onSuccessBanner(List<BannerResponse> bannerResponses) {
        Global.banner=bannerResponses;
        init(bannerResponses);
    }

    private void init(List<BannerResponse> bannerResponses) {





        mPager.setAdapter(new SlidingImage_Adapter(getContext(),bannerResponses));



        indicator.setViewPager(mPager);

        final float density = getResources().getDisplayMetrics().density;

        indicator.setRadius(5 * density);

        NUM_PAGES =bannerResponses.size();

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
    public void location(String loc) {
        Toast.makeText(getContext(), ""+loc, Toast.LENGTH_SHORT).show();

    }


    @Override
    public void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);


        if (requestCode == REQUEST_PICK_LOCATION) if (resultCode == Activity.RESULT_OK) {
            if (RIDE_REQUEST.containsKey(SRC_ADD)) {

                locsearchText.setText(String.valueOf(RIDE_REQUEST.get(SRC_ADD)));
            }

        }
    }

}
*/
