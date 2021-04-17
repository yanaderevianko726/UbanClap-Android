package com.thinkin_service.app.ui.fragment.book_ride;

import android.annotation.SuppressLint;
import android.app.Activity;
import android.app.Dialog;
import android.content.Intent;
import android.graphics.Color;
import android.graphics.drawable.ColorDrawable;
import android.os.Build;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.annotation.RequiresApi;
import android.support.design.widget.BottomSheetDialog;
import android.support.v7.widget.DefaultItemAnimator;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.Gravity;
import android.view.KeyEvent;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.view.animation.Animation;
import android.view.animation.ScaleAnimation;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.rbrooks.indefinitepagerindicator.IndefinitePagerIndicator;
import com.thinkin_service.app.R;
import com.thinkin_service.app.base.BaseFragment;
import com.thinkin_service.app.common.Constants;
import com.thinkin_service.app.common.EqualSpacingItemDecoration;
import com.thinkin_service.app.common.Global;
import com.thinkin_service.app.data.SharedHelper;
import com.thinkin_service.app.data.network.model.EstimateFare;
import com.thinkin_service.app.data.network.model.PromoList;
import com.thinkin_service.app.data.network.model.PromoResponse;
import com.thinkin_service.app.data.network.model.Service;
import com.thinkin_service.app.ui.activity.main.MainActivity;
import com.thinkin_service.app.ui.activity.payment.PaymentActivity;
import com.thinkin_service.app.ui.adapter.CouponAdapter;
import com.thinkin_service.app.ui.fragment.schedule.ScheduleFragment;

import java.util.HashMap;
import java.util.List;
import java.util.Objects;

import butterknife.BindView;
import butterknife.ButterKnife;
import butterknife.OnClick;
import butterknife.Unbinder;

import static android.icu.lang.UCharacter.toLowerCase;
import static android.text.TextUtils.isEmpty;
import static com.thinkin_service.app.MvpApplication.RIDE_REQUEST;
import static com.thinkin_service.app.MvpApplication.isCard;
import static com.thinkin_service.app.MvpApplication.isCash;
import static com.thinkin_service.app.MvpApplication.isDebitMachine;
import static com.thinkin_service.app.common.Constants.BroadcastReceiver.INTENT_FILTER;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.CARD_ID;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.CARD_LAST_FOUR;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.DISTANCE_VAL;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.PAYMENT_MODE;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SRC_LAT;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SRC_LONG;
import static com.thinkin_service.app.ui.activity.payment.PaymentActivity.PICK_PAYMENT_METHOD;
import static java.lang.Integer.parseInt;

public class BookRideFragment extends BaseFragment implements BookRideIView {

    Unbinder unbinder;
   @BindView(R.id.schedule_req)
   Button scheduleRide;
    @BindView(R.id.ride_now)
    Button rideNow;
    @BindView(R.id.tv_amount_charge)
    TextView tvAmountCharge;
    @BindView(R.id.tv_amount_charge2)
    TextView tvAmountCharge2;
    @BindView(R.id.tvEstimatedFare)
    TextView tvEstimatedFare;
    @BindView(R.id.use_wallet)
    CheckBox useWallet;
    @BindView(R.id.estimated_image)
    ImageView estimatedImage;
    @BindView(R.id.view_coupons)
    TextView viewCoupons;
    @BindView(R.id.view_title)
    TextView viewTitle;
    @BindView(R.id.calculation)
    TextView calculation;
    @BindView(R.id.description)
    TextView description;
    @BindView(R.id.estimated_payment_mode)
    TextView estimatedPaymentMode;
    @BindView(R.id.tv_change)
    TextView tvChange;
    @BindView(R.id.wallet_balance)
    TextView walletBalance;
    @BindView(R.id.llEstimatedFareContainer)
    LinearLayout llEstimatedFareContainer;
    @BindView(R.id.calculations)
    LinearLayout calculations;
    @BindView(R.id.baserate)
    LinearLayout baserate;

    private int lastSelectCoupon = 0;
    private String mCouponStatus;
    private String paymentMode;
    private Double estimatedFare;
    String serId="";
    private BookRidePresenter<BookRideFragment> presenter = new BookRidePresenter<>();
    private CouponListener mCouponListener = new CouponListener() {
        @Override
        public void couponClicked(int pos, PromoList promoList, String promoStatus) {
            if (!promoStatus.equalsIgnoreCase(getString(R.string.remove))) {
                lastSelectCoupon = promoList.getId();
                viewCoupons.setText(promoList.getPromoCode());
                viewCoupons.setTextColor(getResources().getColor(R.color.colorAccent));
                viewCoupons.setBackgroundResource(R.drawable.coupon_transparent);
                mCouponStatus = viewCoupons.getText().toString();
                Double discountFare = (Double.parseDouble(Global.price) * promoList.getPercentage()) / 100;

                if (discountFare > promoList.getMaxAmount()) {
                    tvEstimatedFare.setText(String.format("%s%s", SharedHelper.getKey(getContext(), "currency"),getNewNumberFormat(Double.parseDouble(Global.price) - promoList.getMaxAmount())));
                } else {
                    tvEstimatedFare.setText(String.format("%s%s", SharedHelper.getKey(getContext(), "currency"),getNewNumberFormat(Double.parseDouble(Global.price) - discountFare)));
                }
            } else {
                scaleView(viewCoupons, 0f, 0.9f);
                viewCoupons.setText(getString(R.string.view_coupon));
                viewCoupons.setBackgroundResource(R.drawable.button_round_accent);
                viewCoupons.setTextColor(getResources().getColor(R.color.white));
                mCouponStatus = viewCoupons.getText().toString();
                tvEstimatedFare.setText(String.format("%s%s", SharedHelper.getKey(getContext(), "currency"),getNewNumberFormat(Double.parseDouble(Global.price))));
            }
        }
    };

    public BookRideFragment() {

    }

    @Override
    public int getLayoutId() {
        return R.layout.fragment_book_ride;
    }

    @RequiresApi(api = Build.VERSION_CODES.N)
    @SuppressLint("SetTextI18n")
    @Override
    public View initView(View view) {
        unbinder = ButterKnife.bind(this, view);
        presenter.attachView(this);

        Bundle args = getArguments();
        if (args != null) {
            String serviceName = args.getString("service_name");
            String sereName = args.getString("ser_name");
            serId=args.getString("service_type");
            viewTitle.setText(sereName);
             Service service = (Service) args.getSerializable("mService");
            EstimateFare estimateFare = (EstimateFare) args.getSerializable("estimate_fare");
            double walletAmount = Objects.requireNonNull(estimateFare).getWalletBalance();
            if (serviceName != null && !serviceName.isEmpty()) {
                Glide
                        .with(Objects.requireNonNull(getContext()))
                        .load(Objects.requireNonNull(service).getImage())
                        .apply(RequestOptions
                                .placeholderOf(R.drawable.ic_car)
                                .dontAnimate()
                                .override(100, 100)
                                .error(R.drawable.ic_car))
                        .into(estimatedImage);
                estimatedFare = estimateFare.getEstimatedFare();
                tvEstimatedFare.setText(SharedHelper.getKey(getContext(), "currency") + getNewNumberFormat(estimatedFare));

                if (walletAmount == 0) {
                    useWallet.setVisibility(View.GONE);
                    walletBalance.setVisibility(View.GONE);
                } else {
                    useWallet.setVisibility(View.VISIBLE);
                    walletBalance.setVisibility(View.VISIBLE);
                    walletBalance.setText(SharedHelper.getKey(getContext(), "currency") + getNewNumberFormat(Double.parseDouble(String.valueOf(walletAmount))));

                }
                RIDE_REQUEST.put(DISTANCE_VAL, estimateFare.getDistance());
            }
        }

        viewTitle.setText(Global.SerName);
        //if(!Global.calculation.equals("FIXED")) {
            //calculations.setVisibility(View.VISIBLE);
            calculation.setText(toCamelCase(toLowerCase(Global.calculation)) + " rate");
        //}
        if ((Global.discription) != null) {
            description.setText(Global.discription);
            description.setVisibility(View.VISIBLE);
        }
//        if (parseInt(Global.fix) == 0) {
//            baserate.setVisibility(View.GONE);
//        }else
//            baserate.setVisibility(View.VISIBLE);
        double walletAmount = Double.parseDouble(SharedHelper.getKey(getContext(), "walletBalance", "0"));
        if (walletAmount == 0) {
            useWallet.setVisibility(View.GONE);
            walletBalance.setVisibility(View.GONE);
        } else {
            useWallet.setVisibility(View.VISIBLE);
            walletBalance.setVisibility(View.VISIBLE);
            walletBalance.setText(SharedHelper.getKey(getContext(), "currency") + getNewNumberFormat(Double.parseDouble(String.valueOf(walletAmount))));

        }
        tvAmountCharge.setText(SharedHelper.getKey(getContext(), "currency") + Global.price);
        tvAmountCharge2.setText(SharedHelper.getKey(getContext(), "currency") + Global.fix);
        scaleView(viewCoupons, 0f, 0.9f);

        return view;
    }

    public void scaleView(View v, float startScale, float endScale) {
        Animation anim = new ScaleAnimation(
                1f, 1f, // Start and end values for the X axis scaling
                startScale, endScale, // Start and end values for the Y axis scaling
                Animation.RELATIVE_TO_SELF, 0f, // Pivot point of X scaling
                Animation.RELATIVE_TO_SELF, 1f); // Pivot point of Y scaling
        anim.setFillAfter(true); // Needed to keep the result of the animation
        anim.setDuration(1000);
        v.startAnimation(anim);
    }

    @Override
    public void onDestroyView() {
        presenter.onDetach();
        super.onDestroyView();
    }

    public static String toCamelCase(String inputString) {
        String result = "";
        if (inputString.length() == 0) {
            return result;
        }
        char firstChar = inputString.charAt(0);
        char firstCharToUpperCase = Character.toUpperCase(firstChar);
        result = result + firstCharToUpperCase;
        for (int i = 1; i < inputString.length(); i++) {
            char currentChar = inputString.charAt(i);
            char previousChar = inputString.charAt(i - 1);
            if (previousChar == ' ') {
                char currentCharToUpperCase = Character.toUpperCase(currentChar);
                result = result + currentCharToUpperCase;
            } else {
                char currentCharToLowerCase = Character.toLowerCase(currentChar);
                result = result + currentCharToLowerCase;
            }
        }
        return result;
    }

    //    @OnClick({R.id.schedule_ride, R.id.ride_now, R.id.view_coupons, R.id.tv_change})
    @OnClick({R.id.ride_now, R.id.view_coupons, R.id.tv_change,R.id.schedule_req})
    public void onViewClicked(View view) {
        switch (view.getId()) {
            case R.id.schedule_req:
                ((MainActivity) Objects.requireNonNull(getActivity())).changeFragment(new ScheduleFragment());
                break;
            case R.id.ride_now:
                if (Objects.requireNonNull(RIDE_REQUEST.get(PAYMENT_MODE)).toString()
                        .equals(Constants.PaymentMode.CARD)) {
                    if (RIDE_REQUEST.containsKey(CARD_LAST_FOUR))
                        sendRequest();
                    else
                        Toast.makeText(getActivity().getApplicationContext(),
                                getResources().getString(R.string.choose_card), Toast.LENGTH_SHORT)
                                .show();
                } else
                    sendRequest();
                break;
            case R.id.view_coupons:
                showLoading();
                try {
                    presenter.getCouponList();
                } catch (Exception e) {
                    e.printStackTrace();
                    try {
                        hideLoading();
                    } catch (Exception e1) {
                        e1.printStackTrace();
                    }
                }
                break;
            case R.id.tv_change:
                ((MainActivity) Objects.requireNonNull(getActivity())).updatePaymentEntities();
                startActivityForResult(new Intent(getActivity(), PaymentActivity.class), PICK_PAYMENT_METHOD);
                break;
        }
    }

    private Dialog couponDialog(PromoResponse promoResponse) {
        BottomSheetDialog couponDialog = new BottomSheetDialog(Objects.requireNonNull(getContext()), R.style.SheetDialog);
        couponDialog.setCanceledOnTouchOutside(true);
        couponDialog.setCancelable(true);
        couponDialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
        couponDialog.setContentView(R.layout.activity_coupon_dialog);
        RecyclerView couponView = couponDialog.findViewById(R.id.coupon_rv);
        IndefinitePagerIndicator indicator = couponDialog.findViewById(R.id.recyclerview_pager_indicator);
        List<PromoList> couponList = promoResponse.getPromoList();
        if (couponList != null && !couponList.isEmpty()) {
            CouponAdapter couponAdapter = new CouponAdapter(getActivity(), couponList,
                    mCouponListener, couponDialog, lastSelectCoupon, mCouponStatus);
            assert couponView != null;
            couponView.setLayoutManager(new LinearLayoutManager(getActivity(),
                    LinearLayoutManager.HORIZONTAL, false));
            couponView.setItemAnimator(new DefaultItemAnimator());
            couponView.addItemDecoration(new EqualSpacingItemDecoration(16,
                    EqualSpacingItemDecoration.HORIZONTAL));
            Objects.requireNonNull(indicator).attachToRecyclerView(couponView);
            couponView.setAdapter(couponAdapter);
            couponAdapter.notifyDataSetChanged();
        }
        couponDialog.setOnKeyListener((dialogInterface, keyCode, keyEvent) -> {
            if (keyCode == KeyEvent.KEYCODE_BACK) {
                new BottomSheetDialog(getContext()).dismiss();
                Log.d("TAG", "--------- Do Something -----------");
                return true;
            }
            return false;
        });
        Window window = couponDialog.getWindow();
        assert window != null;
        WindowManager.LayoutParams param = window.getAttributes();
        param.gravity = Gravity.CENTER | Gravity.CENTER_HORIZONTAL;
        window.setAttributes(param);
        window.setFlags(WindowManager.LayoutParams.FLAG_NOT_TOUCH_MODAL,
                WindowManager.LayoutParams.FLAG_NOT_TOUCH_MODAL);
        couponDialog.getWindow().setBackgroundDrawable(new ColorDrawable(Color.TRANSPARENT));
        window.setLayout(WindowManager.LayoutParams.MATCH_PARENT, WindowManager.LayoutParams.WRAP_CONTENT);
        return couponDialog;
    }

    public void sendRequest() {
        HashMap<String, Object> map = new HashMap<>(RIDE_REQUEST);
        map.put("use_wallet", useWallet.isChecked() ? 1 : 0);
        map.put("service_type",Global.SerId);
        map.put("d_latitude",RIDE_REQUEST.get(SRC_LAT));
        map.put("d_longitude",RIDE_REQUEST.get(SRC_LONG));


        map.put("promocode_id", lastSelectCoupon);
        if (paymentMode != null && !paymentMode.equalsIgnoreCase("")){
            map.put("payment_mode", paymentMode);


        }
        else map.put("payment_mode", "CASH");
        showLoading();
        try {
            presenter.rideNow(map);
        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    @Override
    public void onSuccess(@NonNull Object object) {
        try {
            hideLoading();
        } catch (Exception e1) {
            e1.printStackTrace();
        }
        baseActivity().sendBroadcast(new Intent(INTENT_FILTER));
    }

    @Override
    public void onError(Throwable e) {
        handleError(e);
    }

    @Override
    public void onSuccessCoupon(PromoResponse promoResponse) {
        try {
            hideLoading();
        } catch (Exception e1) {
            e1.printStackTrace();
        }
        if (promoResponse != null && promoResponse.getPromoList() != null
                && !promoResponse.getPromoList().isEmpty()) couponDialog(promoResponse).show();
        else Toast.makeText(baseActivity(), "Coupons Unavailable", Toast.LENGTH_SHORT).show();
    }

    @Override
    public void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
        if (requestCode == PICK_PAYMENT_METHOD && resultCode == Activity.RESULT_OK) {
            RIDE_REQUEST.put(PAYMENT_MODE, data.getStringExtra("payment_mode"));
            paymentMode = data.getStringExtra("payment_mode");

            System.out.println("RRR PAMENT_MODE = " + data.getStringExtra("payment_mode"));

            if (data.getStringExtra("payment_mode").equals("CARD")) {
                RIDE_REQUEST.put(CARD_ID, data.getStringExtra("card_id"));
                RIDE_REQUEST.put(CARD_LAST_FOUR, data.getStringExtra("card_last_four"));
            }
            initPayment(estimatedPaymentMode);
        }
    }

    @Override
    public void onResume() {
        super.onResume();
        initPayment(estimatedPaymentMode);
        //tvChange.setVisibility((!isCard || !isDebitMachine) && isCash ? View.GONE : View.VISIBLE);
    }

    public interface CouponListener {
        void couponClicked(int pos, PromoList promoList, String promoStatus);
    }
}
