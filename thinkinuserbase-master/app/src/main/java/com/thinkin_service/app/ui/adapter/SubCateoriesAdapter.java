package com.thinkin_service.app.ui.adapter;

import android.annotation.SuppressLint;
import android.content.Context;
import android.support.annotation.NonNull;
import android.support.constraint.ConstraintLayout;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.thinkin_service.app.R;
import com.thinkin_service.app.data.network.model.ChildRecursive;
import com.thinkin_service.app.ui.activity.homecategories.SubCategoriesActivity;
import com.thinkin_service.app.ui.activity.main.MainActivity;

import java.util.ArrayList;
import java.util.List;
import java.util.Random;

import static com.thinkin_service.app.MvpApplication.RIDE_REQUEST;
import static com.thinkin_service.app.common.Constants.RIDE_REQUEST.SERVICE_TYPE;

public class SubCateoriesAdapter extends RecyclerView.Adapter<SubCateoriesAdapter.MyViewHolder> {

    private List<ChildRecursive> serviceTypes;
    private Context mContext;



    public SubCateoriesAdapter(Context mainActivity, List<ChildRecursive> serviceTypes) {
        mContext=mainActivity;
        this.serviceTypes=serviceTypes;


    }



    @NonNull
    @Override
    public MyViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        mContext = parent.getContext();
        return new MyViewHolder(LayoutInflater.from(parent.getContext())
                .inflate(R.layout.cat_item_row, parent, false));
    }

    @SuppressLint("SetTextI18n")
    @Override
    public void onBindViewHolder(@NonNull MyViewHolder holder, int position) {

        Glide.with(mContext)
                .load(serviceTypes.get(position).getImage())
                .apply(RequestOptions.placeholderOf(R.drawable.ic_document_placeholder)
                        .dontAnimate().error(R.drawable.ic_document_placeholder))
                .into(holder.imageView);

        //int[] images = {mContext.getResources().getColor(R.color.card_blue),mContext.getResources().getColor(R.color.card_drkblue),mContext.getResources().getColor(R.color.card_lip),mContext.getResources().getColor(R.color.card_yellow)};

        //Random rand = new Random();
        //holder.card.setBackgroundColor(images[rand.nextInt(images.length)]);
        holder.catText.setText(serviceTypes.get(position).getName());

     }

    @Override
    public int getItemCount() {
        return serviceTypes.size();
    }

    class MyViewHolder extends RecyclerView.ViewHolder {

        private ImageView imageView;
        private TextView catText;
        ConstraintLayout card;


        MyViewHolder(View view) {
            super(view);

             imageView = view.findViewById(R.id.iv_back);
            catText = view.findViewById(R.id.tv_cat_text);
            card = view.findViewById(R.id.card_layout);


            view.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    RIDE_REQUEST.put(SERVICE_TYPE,serviceTypes.get(getAdapterPosition()).getId());
                    if (serviceTypes.get(getAdapterPosition()).getChildrenRecursive()!=null&&serviceTypes.get(getAdapterPosition()).getChildrenRecursive().size()>0){
                        ((SubCategoriesActivity)mContext).setRecycler((ArrayList<ChildRecursive>) serviceTypes.get(getAdapterPosition()).getChildrenRecursive());


                    }else {
                        ((SubCategoriesActivity)mContext).callBook(serviceTypes.get(getAdapterPosition()).getId(),serviceTypes.get(getAdapterPosition()).getName(),
                                serviceTypes.get(getAdapterPosition()).getCalculator(),
                                serviceTypes.get(getAdapterPosition()).getFixed(),
                                serviceTypes.get(getAdapterPosition()).getPrice()
                                , serviceTypes.get(getAdapterPosition()).getDescription());

                    }

                }
            });
        }
    }
}