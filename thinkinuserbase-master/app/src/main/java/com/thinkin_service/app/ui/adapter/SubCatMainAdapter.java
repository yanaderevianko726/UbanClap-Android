package com.thinkin_service.app.ui.adapter;

import android.annotation.SuppressLint;
import android.content.Context;
import android.support.annotation.NonNull;
import android.support.constraint.ConstraintLayout;
import android.support.v7.widget.RecyclerView;
import android.text.TextUtils;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.thinkin_service.app.R;
import com.thinkin_service.app.data.network.model.ChildRecursive;
import com.thinkin_service.app.ui.activity.main.MainActivity;

import java.util.List;
import java.util.Random;

public class SubCatMainAdapter extends RecyclerView.Adapter<SubCatMainAdapter.MyViewHolder> {

    private List<ChildRecursive> serviceTypes;
    private Context mContext;



    public SubCatMainAdapter(Context mContext, List<ChildRecursive> childrenRecursive) {
        this.mContext=mContext;
        this.serviceTypes=childrenRecursive;
    }


    @NonNull
    @Override
    public MyViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        mContext = parent.getContext();
        return new MyViewHolder(LayoutInflater.from(parent.getContext())
                .inflate(R.layout.cat_item_item_row, parent, false));
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
        if (!TextUtils.isEmpty(serviceTypes.get(position).getImage())){

            Glide.with(mContext).load(serviceTypes.get(position).getImage()).into(holder.imageView);

        }


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

             imageView = view.findViewById(R.id.image);
             catText=view.findViewById(R.id.tv_cat_title);
            card=view.findViewById(R.id.card);


            view.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {

                }
            });
        }
    }
}