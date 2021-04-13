package com.thinkin_service.app.ui.activity.homecategories;

import android.content.Intent;
import android.support.constraint.ConstraintLayout;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.View;
import android.widget.FrameLayout;
import android.widget.ImageView;
import android.widget.TextView;

import com.thinkin_service.app.R;
import com.thinkin_service.app.base.BaseActivity;
import com.thinkin_service.app.common.Global;
import com.thinkin_service.app.data.network.model.ChildRecursive;
import com.thinkin_service.app.data.network.model.ServiceType;
import com.thinkin_service.app.ui.activity.main.MainActivity;
import com.thinkin_service.app.ui.adapter.SubCateoriesAdapter;
import com.thinkin_service.app.ui.fragment.book_ride.BookRideFragment;

import java.util.ArrayList;

import butterknife.BindView;
import butterknife.ButterKnife;

import static com.thinkin_service.app.MvpApplication.RIDE_REQUEST;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SERVICE_TYPE;
import static com.thinkin_service.app.common.Constants.Status.SERVICE;
import static com.thinkin_service.app.common.Global.fix;

public class SubCategoriesActivity extends BaseActivity {
    ArrayList<ChildRecursive> subCatList;

    @BindView(R.id.cat_layout)
    ConstraintLayout ConCatLayout;




    @BindView(R.id.recycler_cat)
    RecyclerView recyclerView;
    @BindView(R.id.tv_ser)
    TextView back;

    @Override
    protected int getLayoutId() {
        return R.layout.activity_sub_categories;
    }

    @Override
    protected void initView() {
        ButterKnife.bind(this);

        Bundle bundle =getIntent().getExtras();
    if (bundle!=null){
        subCatList = bundle.getParcelableArrayList("list");
        setRecycler(subCatList);


    }

    back.setOnClickListener(v -> onBackPressed());


    }


  public void setRecycler(ArrayList<ChildRecursive> subCatList){
       if (subCatList.size() > 0) {
            recyclerView.setLayoutManager(new LinearLayoutManager(this));
           recyclerView.setAdapter(new SubCateoriesAdapter(this, subCatList));
          // subCatList.add(subCatList);

       }

   }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

    }

    public void callBook(Integer id, String name, String calculator, Integer fixed, Integer price, String description) {

      String  CURRENT_STATUS = SERVICE;

        Integer selectedId = id;
        String selectService = name;
       String startABoolean="false";

        // changeHome(null);

        Intent intent = new Intent(this,MainActivity.class);


        intent.putExtra("service_type", "" + selectedId);
        intent.putExtra("ser_name", "" + selectService);
        RIDE_REQUEST.put(SERVICE_TYPE, selectedId);
        Global.SerId = "" + selectedId;
        Global.discription = "" + description;
        Global.SerName = selectService;
        Global.calculation = calculator;
        fix = String.valueOf(fix);
        Global.price = String.valueOf(price);
        startActivity(intent);
    }

}
