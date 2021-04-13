package com.thinkin_service.app.ui.adapter;

import android.annotation.SuppressLint;
import android.content.Context;
import android.content.Intent;
import android.os.Parcelable;
import android.support.annotation.NonNull;
import android.support.constraint.ConstraintLayout;
import android.support.v7.widget.CardView;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Filter;
import android.widget.Filterable;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.thinkin_service.app.R;
import com.thinkin_service.app.data.network.model.ChildRecursive;
import com.thinkin_service.app.data.network.model.ServiceType;
import com.thinkin_service.app.ui.activity.homecategories.SubCategoriesActivity;
import com.thinkin_service.app.ui.activity.main.MainActivity;

import java.util.ArrayList;
import java.util.List;
import java.util.Random;

public class CateoriesAdapter extends RecyclerView.Adapter<CateoriesAdapter.MyViewHolder> implements Filterable {

    private List<ServiceType> serviceTypes;
    private List<ServiceType> serviceTypesFiltered;
    private Context mContext;



    public CateoriesAdapter(Context mainActivity, List<ServiceType> serviceTypes) {
        mContext=mainActivity;
        this.serviceTypes=serviceTypes;
        serviceTypesFiltered=serviceTypes;


    }



    @NonNull
    @Override
    public MyViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        mContext = parent.getContext();
        return new MyViewHolder(LayoutInflater.from(parent.getContext())
                .inflate(R.layout.cat_new_item_layout, parent, false));

    }


    @SuppressLint("SetTextI18n")
    @Override
    public void onBindViewHolder(@NonNull MyViewHolder holder, int position) {
        ServiceType serviceType=serviceTypesFiltered.get(position);
        Glide.with(mContext)
                .load(serviceTypesFiltered.get(position).getImage())
                .apply(RequestOptions.placeholderOf(R.drawable.ic_document_placeholder)
                        .dontAnimate().error(R.drawable.ic_document_placeholder))
                .into(holder.imageView);

       /* int[] images = {mContext.getResources().getColor(R.color.card_blue),mContext.getResources().getColor(R.color.card_drkblue),mContext.getResources().getColor(R.color.card_lip),mContext.getResources().getColor(R.color.card_yellow)};

        Random rand = new Random();*/
       // holder.card.setBackgroundColor(images[rand.nextInt(images.length)]);
        holder.catText.setText(serviceTypesFiltered.get(position).getName());

      /*  if (serviceTypesFiltered.get(position).getChildrenRecursive()!=null&&serviceTypesFiltered.get(position).getChildrenRecursive().size()>0)
            holder.recyclerView.setAdapter(new SubCatMainAdapter(mContext,serviceTypesFiltered.get(position).getChildrenRecursive()));
*/
       holder.viewmain.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if (serviceType.getChildrenRecursive()!=null){
                    Intent intent=new Intent(mContext, SubCategoriesActivity.class);
                    intent.putParcelableArrayListExtra("list", (ArrayList<? extends Parcelable>) serviceType.getChildrenRecursive());
                    mContext.startActivity(intent);

/*
                    ((MainActivity)mContext).callChildData(serviceType.getChildrenRecursive());
*/

                }

            }
        });

    }

    @Override
    public int getItemCount() {
        return serviceTypesFiltered.size();
    }


    @Override
    public Filter getFilter() {
        Filter filter = new Filter() {
            @Override
            protected FilterResults performFiltering(CharSequence constraint) {

                FilterResults filterResults = new FilterResults();
                if(constraint == null || constraint.length() == 0){
                    filterResults.count = serviceTypes.size();
                    filterResults.values = serviceTypes;

                }else{
                    List<ServiceType> resultsModel = new ArrayList<>();
                    String searchStr = constraint.toString() ;

                    for(ServiceType itemsModel:serviceTypes){
                        // here we are looking for name or phone number match

                        if(itemsModel.getName().toLowerCase().contains(searchStr.toLowerCase())){
                            resultsModel.add(itemsModel);

                        }
                        filterResults.count = resultsModel.size();
                        filterResults.values = resultsModel;
                    }


                }

                return filterResults;
            }

            @Override
            protected void publishResults(CharSequence constraint, FilterResults results) {

                serviceTypesFiltered = (List<ServiceType>) results.values;
                notifyDataSetChanged();

            }
        };
        return filter;
    }



    class MyViewHolder extends RecyclerView.ViewHolder {

        private ImageView imageView;
        private TextView catText;
        ConstraintLayout card;
        RecyclerView recyclerView;
         CardView viewmain;


        MyViewHolder(View view) {
            super(view);
           /* recyclerView=view.findViewById(R.id.recycler_item_cat);
            recyclerView.setLayoutManager(new LinearLayoutManager(mContext,LinearLayoutManager.HORIZONTAL,true));
            */

            viewmain = view.findViewById(R.id.main_view);
            catText = view.findViewById(R.id.tv_cat);
            imageView = view.findViewById(R.id.iv_cat);

        }
    }
}