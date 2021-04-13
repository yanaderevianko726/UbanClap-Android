package com.thinkin_service.app.ui.fragment;

import android.annotation.SuppressLint;
import android.support.annotation.NonNull;
import android.view.View;
import android.view.animation.AccelerateDecelerateInterpolator;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.daimajia.androidanimations.library.Techniques;
import com.daimajia.androidanimations.library.YoYo;
import com.thinkin_service.app.R;
import com.thinkin_service.app.base.BaseFragment;
import com.thinkin_service.app.common.Constants;
import com.thinkin_service.app.data.SharedHelper;
import com.thinkin_service.app.data.network.model.Service;

import butterknife.BindView;
import butterknife.ButterKnife;
import butterknife.OnClick;
import butterknife.Unbinder;

public class RateCardFragment extends BaseFragment {

    public static Service SERVICE = new Service();
    @BindView(R.id.image)
    ImageView image;
    @BindView(R.id.capacity)
    TextView capacity;
    @BindView(R.id.base_fare)
    TextView baseFare;
    @BindView(R.id.fare_type)
    TextView fareType;
    @BindView(R.id.fare_km)
    TextView fareKm;
    @BindView(R.id.tvFareDistance)
    TextView tvFareDistance;
    Unbinder unbinder;

    public RateCardFragment() {
    }

    @Override
    public int getLayoutId() {
        return R.layout.fragment_rate_card;
    }

    @Override
    public View initView(View view) {
        unbinder = ButterKnife.bind(this, view);
        initView(SERVICE);
        return view;
    }

    @SuppressLint("SetTextI18n")
    void initView(@NonNull Service service) {
        capacity.setText(String.valueOf(service.getCapacity()));
        baseFare.setText(getNewNumberFormat(service.getFixed()));
        fareKm.setText(getNewNumberFormat(service.getPrice()));

        //      MIN,    HOUR,   DISTANCE,   DISTANCEMIN,    DISTANCEHOUR
        switch (service.getCalculator()) {
            case Constants.InvoiceFare.MINUTE:
                fareType.setText(getString(R.string.min));
                break;
            case Constants.InvoiceFare.HOUR:
                fareType.setText(getString(R.string.hour));
                break;
            case Constants.InvoiceFare.DISTANCE:
                fareType.setText(getString(R.string.distance));
                break;
            case Constants.InvoiceFare.DISTANCE_MIN:
                fareType.setText(getString(R.string.distancemin));
                break;
            case Constants.InvoiceFare.DISTANCE_HOUR:
                fareType.setText(getString(R.string.distancehour));
                break;
            default:
                fareType.setText(getString(R.string.min));
                break;
        }

        if (SharedHelper.getKey(getContext(), "measurementType").equalsIgnoreCase(Constants.MeasurementType.KM))
            tvFareDistance.setText(getString(R.string.fare_km));
        else tvFareDistance.setText(getString(R.string.fare_miles));

        YoYo.with(Techniques.BounceInRight)
                .duration(1000)
                .pivot(YoYo.CENTER_PIVOT, YoYo.CENTER_PIVOT)
                .interpolate(new AccelerateDecelerateInterpolator())
                .playOn(image);
        Glide.with(baseActivity())
                .load(service.getImage())
                .apply(RequestOptions
                        .placeholderOf(R.drawable.ic_car)
                        .dontAnimate()
                        .error(R.drawable.ic_car))
                .into(image);

        try {
            hideLoading();
        } catch (Exception e1) {
            e1.printStackTrace();
        }
    }

    @Override
    public void onDestroyView() {
        super.onDestroyView();
    }

    @OnClick(R.id.done)
    public void onViewClicked() {
        getActivity().getSupportFragmentManager().popBackStack();
    }
}
