package com.thinkin_service.app.ui.fragment.rate;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.net.Uri;
import android.support.design.widget.BottomSheetBehavior;
import android.support.design.widget.BottomSheetDialog;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RatingBar;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.google.firebase.database.FirebaseDatabase;
import com.thinkin_service.app.BuildConfig;
import com.thinkin_service.app.R;
import com.thinkin_service.app.base.BaseBottomSheetDialogFragment;
import com.thinkin_service.app.data.network.model.Datum;
import com.thinkin_service.app.data.network.model.Provider;
import com.thinkin_service.app.ui.activity.homecategories.HomeCategoriesActivity;
import com.thinkin_service.app.ui.activity.main.MainActivity;
import com.thinkin_service.app.ui.fragment.invoice.InvoiceFragment;

import java.util.HashMap;
import java.util.Objects;

import butterknife.BindView;
import butterknife.ButterKnife;
import butterknife.OnClick;
import de.hdodenhof.circleimageview.CircleImageView;

import static com.thinkin_service.app.MvpApplication.DATUM;
import static com.thinkin_service.app.chat.ChatActivity.chatPath;
import static com.thinkin_service.app.common.Constants.BroadcastReceiver.INTENT_FILTER;
import static com.thinkin_service.app.common.Constants.Status.EMPTY;

public class RatingDialogFragment extends BaseBottomSheetDialogFragment implements RatingIView {

    @BindView(R.id.avatar)
    CircleImageView avatar;
    @BindView(R.id.rating)
    RatingBar rating;
    @BindView(R.id.comment)
    EditText comment;
    @BindView(R.id.submit)
    Button submit;
    @BindView(R.id.ratings_name)
    TextView ratingsName;
    private RatingPresenter<RatingDialogFragment> presenter = new RatingPresenter<>();

    public RatingDialogFragment() {
        // Required empty public constructor
    }


    @Override
    public int getLayoutId() {
        return R.layout.fragment_rating_dialog;
    }

    @SuppressLint("SetTextI18n")
    @Override
    public void initView(View view) {
        InvoiceFragment.isInvoiceCashToCard = false;
        setCancelable(false);
        getDialog().setOnShowListener(dialog -> {
            BottomSheetDialog d = (BottomSheetDialog) dialog;
            View bottomSheetInternal = d.findViewById(android.support.design.R.id.design_bottom_sheet);
            BottomSheetBehavior.from(bottomSheetInternal).setState(BottomSheetBehavior.STATE_EXPANDED);
        });
        getDialog().setCanceledOnTouchOutside(false);
        ButterKnife.bind(this, view);
        presenter.attachView(this);

        if (DATUM != null) {
            Provider provider = DATUM.getProvider();
            if (provider != null) {
                Glide.with(baseActivity()).load(provider.getAvatar()).
                        apply(RequestOptions.placeholderOf(R.drawable.ic_user_placeholder).
                                dontAnimate().error(R.drawable.ic_user_placeholder)).into(avatar);
                ratingsName.setText(getString(R.string.ratings) + " " +
                        provider.getFirstName() + " " + provider.getLastName());
            }
        }
    }

    @Override
    public void onSuccess(Object object) {
        try {
            hideLoading();
        } catch (Exception e1) {
            e1.printStackTrace();
        }
        dismiss();
        Objects.requireNonNull(getActivity()).sendBroadcast(new Intent(INTENT_FILTER));
         if (!TextUtils.isEmpty(chatPath))
            FirebaseDatabase.getInstance().getReference().child(chatPath).removeValue();


        Intent intent = new Intent(getContext(), HomeCategoriesActivity.class);
         intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK
                | Intent.FLAG_ACTIVITY_CLEAR_TOP
                | Intent.FLAG_ACTIVITY_NO_ANIMATION);
        startActivity(intent);



    }

    @Override
    public void onError(Throwable e) {
        handleError(e);
    }

    @Override
    public void onDestroyView() {
        super.onDestroyView();
    }

    @OnClick(R.id.submit)
    public void onViewClicked() {
        if (DATUM != null) {
            Datum datum = DATUM;
            HashMap<String, Object> map = new HashMap<>();
            map.put("request_id", datum.getId());
            map.put("rating", Math.round(rating.getRating()));
            map.put("comment", comment.getText().toString());
            showLoading();
            presenter.rate(map);

        }
    }

    @Override
    public void onDestroy() {
        presenter.onDetach();
        super.onDestroy();
    }
}
