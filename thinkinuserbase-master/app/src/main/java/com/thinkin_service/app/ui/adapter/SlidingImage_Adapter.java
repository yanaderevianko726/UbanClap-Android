package com.thinkin_service.app.ui.adapter;

import android.content.Context;
import android.os.Parcelable;
import android.support.v4.view.PagerAdapter;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.MediaController;
import android.widget.VideoView;

import com.bumptech.glide.Glide;
import com.thinkin_service.app.R;
import com.thinkin_service.app.data.network.model.BannerResponse;

import java.util.ArrayList;
import java.util.List;

import static android.text.TextUtils.isEmpty;
import static com.google.android.gms.common.internal.safeparcel.SafeParcelable.NULL;

public class SlidingImage_Adapter extends PagerAdapter {
 
 
    private List<BannerResponse> IMAGES;
    private LayoutInflater inflater;
    private Context context;
 
 
    public SlidingImage_Adapter(Context context, List<BannerResponse> IMAGES) {
        this.context = context;
this.IMAGES=IMAGES;
        inflater = LayoutInflater.from(context);
    }
 
    @Override
    public void destroyItem(ViewGroup container, int position, Object object) {
        container.removeView((View) object);
    }
 
    @Override
    public int getCount() {
        return IMAGES.size();
    }
 
    @Override
    public Object instantiateItem(ViewGroup view, int position) {
        View imageLayout = inflater.inflate(R.layout.slidingimages_layout, view, false);
 
        assert imageLayout != null;
        final ImageView imageView = (ImageView) imageLayout
                .findViewById(R.id.image);
        final VideoView videoView =  imageLayout
                .findViewById(R.id.video);
        Glide.with(context).load(IMAGES.get(position).getUrl()).into(imageView);
        if(!isEmpty(IMAGES.get(position).getVideo())){
            imageView.setVisibility(View.GONE);
            videoView.setVisibility(View.VISIBLE);
            videoView.setVideoPath(IMAGES.get(position).getVideo());
            MediaController mediaController = new
                    MediaController(context);
            mediaController.setAnchorView(videoView);
            videoView.setMediaController(mediaController);
            videoView.start();
        }


 
//imageView.setImageResource(IMAGES.get(position));
 
        view.addView(imageLayout, 0);
 
        return imageLayout;
    }
 
    @Override
    public boolean isViewFromObject(View view, Object object) {
        return view.equals(object);
    }
 
    @Override
    public void restoreState(Parcelable state, ClassLoader loader) {
    }
 
    @Override
    public Parcelable saveState() {
        return null;
    }
 
 
}